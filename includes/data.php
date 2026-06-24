<?php

// ====== KONFIGURASI UTAMA ======
$site = [
    'nama_perusahaan'   => 'Apex Build',
    'tagline'           => 'Kontraktor Bangunan Terpercaya',
    'wa_nomor'          => 'GANTI_NOMOR_WA',
    'wa_pesan_default'  => 'Halo, saya tertarik dengan jasa kontraktor Anda. Bisa konsultasi lebih lanjut?',
    'email'             => 'GANTI_EMAIL@domain.com',
    'alamat'            => 'GANTI_ALAMAT_LENGKAP, Kota, Indonesia',
    'jam_operasional'   => 'Senin - Sabtu, 08.00 - 17.00 WIB',
    'webhook_url'       => '',
    'maps_embed_src'    => 'https://www.google.com/maps?q=GANTI_ALAMAT&output=embed',
    'tahun_berdiri'     => 2010,
];

function wa_link($nomor, $pesan = '') {
    $base = 'https://wa.me/' . preg_replace('/\D/', '', $nomor);
    if ($pesan !== '') {
        $base .= '?text=' . rawurlencode($pesan);
    }
    return $base;
}

// ====== LAYANAN ======
$services = [
    [
        'icon'  => 'icon-house',
        'judul' => 'Bangun Rumah Baru',
        'desc'  => 'Konstruksi rumah dari nol, mulai dari pondasi hingga finishing, sesuai desain dan budget.',
    ],
    [
        'icon'  => 'icon-renovation',
        'judul' => 'Renovasi & Rehab',
        'desc'  => 'Perbaikan, perluasan, atau perombakan total bangunan lama menjadi lebih fungsional.',
    ],
    [
        'icon'  => 'icon-blueprint',
        'judul' => 'Desain & RAB',
        'desc'  => 'Gambar kerja, perhitungan Rencana Anggaran Biaya (RAB), dan konsultasi desain bangunan.',
    ],
    [
        'icon'  => 'icon-building',
        'judul' => 'Bangunan Komersial',
        'desc'  => 'Ruko, gudang, kantor, dan bangunan komersial lain dengan standar kualitas industri.',
    ],
    [
        'icon'  => 'icon-roof',
        'judul' => 'Atap & Struktur Baja',
        'desc'  => 'Pemasangan rangka atap baja ringan maupun konvensional dengan jaminan kekuatan struktur.',
    ],
    [
        'icon'  => 'icon-paint',
        'judul' => 'Interior & Finishing',
        'desc'  => 'Pengecatan, plafon, lantai, dan sentuhan akhir interior agar bangunan siap huni.',
    ],
];

// ====== FAQ ======
$faqs = [
    [
        'q' => 'Berapa lama waktu pengerjaan rumah tipe standar?',
        'a' => 'Untuk rumah tipe 36-60 umumnya membutuhkan waktu 3-5 bulan, tergantung kompleksitas desain, cuaca, dan ketersediaan material di lokasi.',
    ],
    [
        'q' => 'Apakah ada garansi setelah bangunan selesai?',
        'a' => 'Ya, kami memberikan garansi struktur dan kebocoran selama 1 tahun sejak serah terima, dengan ketentuan perawatan sesuai standar.',
    ],
    [
        'q' => 'Bagaimana sistem pembayarannya?',
        'a' => 'Pembayaran dilakukan secara bertahap (termin) sesuai progres pekerjaan di lapangan, disepakati bersama di awal kontrak kerja.',
    ],
    [
        'q' => 'Apakah bisa konsultasi desain sebelum deal kontrak?',
        'a' => 'Tentu. Kami menyediakan sesi konsultasi awal gratis untuk membahas kebutuhan, estimasi biaya, dan gambaran desain bangunan Anda.',
    ],
    [
        'q' => 'Apakah melayani area di luar kota?',
        'a' => 'Kami melayani proyek di luar kota dengan ketentuan dan biaya mobilisasi tambahan yang akan dijelaskan saat survei lokasi.',
    ],
];

// ====== GALERI PROYEK ======
$gallery = [
    ['img' => 'assets/img/gallery-1.png', 'judul' => 'Rumah Tinggal 2 Lantai',  'lokasi' => 'BSD City'],
    ['img' => 'assets/img/gallery-2.png', 'judul' => 'Ruko Komersial 3 Pintu',  'lokasi' => 'Tangerang'],
    ['img' => 'assets/img/gallery-3.png', 'judul' => 'Renovasi Fasad Rumah',    'lokasi' => 'Bekasi'],
    ['img' => 'assets/img/gallery-4.png', 'judul' => 'Gudang Industri Baja',    'lokasi' => 'Cikarang'],
    ['img' => 'assets/img/gallery-5.png', 'judul' => 'Rumah Minimalis Tipe 45', 'lokasi' => 'Depok'],
    ['img' => 'assets/img/gallery-6.png', 'judul' => 'Kantor 2 Lantai',         'lokasi' => 'Jakarta Selatan'],
];

// ====== KEUNGGULAN ======
$stats = [
    ['angka' => '50+',                                      'label' => 'Proyek Selesai'],
    ['angka' => (date('Y') - $site['tahun_berdiri']) . '+', 'label' => 'Tahun Pengalaman'],
    ['angka' => '100%',                                     'label' => 'Klien Puas'],
];