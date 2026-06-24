<?php
/**
 * send-contact.php
 * Menerima submit form kontak (AJAX) dan meneruskannya ke webhook Make.com
 * → Lead Qualification - Groq to Sheets
 *
 * Field mapping:
 *   Form PHP        → Webhook Make (Groq scenario)
 *   ─────────────────────────────────────────────
 *   nama            → name
 *   perusahaan      → company
 *   telepon         → (dimasukkan ke notes)
 *   email           → email
 *   industry        → industry
 *   budget          → budget
 *   timeline        → timeline
 *   requirements    → requirements
 *                   → notes  (gabungan: "WA: {telepon} | Sumber: apex-build-landing")
 */

header('Content-Type: application/json; charset=utf-8');

// Uncomment baris ini jika data.php diperlukan untuk config lain:
// require __DIR__ . '/data.php';

function respond(bool $success, string $message): void {
    echo json_encode(['success' => $success, 'message' => $message]);
    exit;
}

// ====== Hanya terima POST ======
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    respond(false, 'Metode tidak diizinkan.');
}

// ====== Ambil & bersihkan input ======
$nama         = trim($_POST['nama']         ?? '');
$perusahaan   = trim($_POST['perusahaan']   ?? '');
$telepon      = trim($_POST['telepon']      ?? '');
$email        = trim($_POST['email']        ?? '');
$industry     = trim($_POST['industry']     ?? '');
$budget       = trim($_POST['budget']       ?? '');
$timeline     = trim($_POST['timeline']     ?? '');
$requirements = trim($_POST['requirements'] ?? '');

// ====== Validasi field wajib ======
if ($nama === '' || $telepon === '' || $email === '' || $industry === '' || $budget === '' || $timeline === '' || $requirements === '') {
    http_response_code(422);
    respond(false, 'Mohon lengkapi semua field sebelum mengirim.');
}

if (!preg_match('/^[0-9+\-\s()]{8,20}$/', $telepon)) {
    http_response_code(422);
    respond(false, 'Format nomor WhatsApp tidak valid.');
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(422);
    respond(false, 'Format email tidak valid.');
}

// ====== Webhook Make.com ======
$webhookUrl = '';

// ====== Payload — field name sesuai yang dibaca Groq di Make ======
$payload = [
    'name'         => $nama,
    'company'      => $perusahaan !== '' ? $perusahaan : '-',
    'email'        => $email,
    'industry'     => $industry,
    'budget'       => $budget,
    'timeline'     => $timeline,
    'requirements' => $requirements,
    // 'notes' dipakai Make untuk info tambahan; telepon dimasukkan di sini
    // agar sales bisa langsung follow-up via WA.
    'notes'        => 'WA: ' . $telepon . ' | Sumber: apex-build-landing',
];

// ====== Kirim ke webhook via cURL ======
if (!function_exists('curl_init')) {
    error_log('[send-contact] Ekstensi cURL PHP tidak aktif.');
    http_response_code(500);
    respond(false, 'Server belum mendukung pengiriman ke automation. Hubungi developer.');
}

$ch = curl_init($webhookUrl);
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST           => true,
    CURLOPT_POSTFIELDS     => json_encode($payload),
    CURLOPT_HTTPHEADER     => ['Content-Type: application/json'],
    CURLOPT_CONNECTTIMEOUT => 8,
    CURLOPT_TIMEOUT        => 15,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_FOLLOWLOCATION => true,
]);

$response  = curl_exec($ch);
$curlError = curl_error($ch);
$curlErrno = curl_errno($ch);
$httpCode  = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($curlError) {
    error_log("[send-contact] cURL error #$curlErrno: $curlError | URL: $webhookUrl");
    http_response_code(502);
    respond(false, 'Gagal menghubungi server automation. Coba lagi atau hubungi kami via WhatsApp.');
}

if ($httpCode >= 200 && $httpCode < 300) {
    respond(true, 'Berhasil! Kami sudah terima permintaanmu. Cek inbox atau folder spam di email, ya.');
}

error_log("[send-contact] Webhook HTTP $httpCode. Body: $response");
http_response_code(502);
respond(false, 'Permintaan belum berhasil dikirim. Silakan hubungi kami via WhatsApp.');