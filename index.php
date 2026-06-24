<?php
require __DIR__ . '/includes/data.php';
require __DIR__ . '/includes/icons.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <title><?= htmlspecialchars($site['nama_perusahaan']) ?> — <?= htmlspecialchars($site['tagline']) ?></title>
    <meta name="description" content="<?= htmlspecialchars($site['nama_perusahaan']) ?> melayani jasa kontraktor bangunan: bangun rumah baru, renovasi, desain & RAB, hingga bangunan komersial.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Archivo:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <?php require __DIR__ . '/includes/header.php'; ?>

    <main>

        <!-- ============ HOME / HERO ============ -->
        <section class="hero" id="home">
            <div class="hero-bg" aria-hidden="true"></div>
            <div class="hero-grain" aria-hidden="true"></div>
            <div class="container hero-inner">
                <p class="eyebrow"><?= icon('icon-target', 'icon-xs') ?> Kontraktor Bangunan &middot; Sejak <?= htmlspecialchars($site['tahun_berdiri']) ?></p>
                <h1 class="hero-title">
                    Wujudkan Bangunan<br>
                    <span class="text-accent">Kuat, Rapi & Tepat Waktu</span>
                </h1>
                <p class="hero-desc">
                    <?= htmlspecialchars($site['nama_perusahaan']) ?> menangani pembangunan rumah, renovasi,
                    hingga proyek komersial dengan tim berpengalaman dan pengawasan ketat di setiap tahap.
                </p>

                <div class="hero-cta">
                    <a href="<?= htmlspecialchars(wa_link($site['wa_nomor'], $site['wa_pesan_default'])) ?>"
                       class="btn btn-primary btn-lg" target="_blank" rel="noopener">
                        <?= icon('icon-whatsapp', 'icon-sm') ?>
                        <span>Konsultasi via WhatsApp</span>
                    </a>
                    <a href="#layanan" class="btn btn-ghost btn-lg">
                        <span>Lihat Layanan</span>
                        <?= icon('icon-arrow-right', 'icon-sm') ?>
                    </a>
                </div>

                <div class="hero-stats">
                    <?php foreach ($stats as $s): ?>
                        <div class="stat-item">
                            <span class="stat-num"><?= htmlspecialchars($s['angka']) ?></span>
                            <span class="stat-label"><?= htmlspecialchars($s['label']) ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- ============ LAYANAN / SERVICE ============ -->
        <section class="section section-services" id="layanan">
            <div class="container">
                <div class="section-head">
                    <p class="eyebrow eyebrow-dark"><?= icon('icon-blueprint', 'icon-xs') ?> Layanan Kami</p>
                    <h2 class="section-title">Solusi Konstruksi Lengkap<br>untuk Setiap Kebutuhan</h2>
                    <p class="section-desc">Dari konsultasi desain awal hingga serah terima kunci, kami menangani seluruh proses pembangunan Anda.</p>
                </div>

                <div class="service-grid">
                    <?php foreach ($services as $svc): ?>
                        <article class="service-card">
                            <div class="service-card-corner" aria-hidden="true"></div>
                            <div class="service-icon"><?= icon($svc['icon'], 'icon-lg') ?></div>
                            <h3 class="service-title"><?= htmlspecialchars($svc['judul']) ?></h3>
                            <p class="service-desc"><?= htmlspecialchars($svc['desc']) ?></p>
                            <a href="<?= htmlspecialchars(wa_link($site['wa_nomor'], 'Halo, saya ingin tanya tentang layanan "' . $svc['judul'] . '".')) ?>"
                               class="btn btn-call" target="_blank" rel="noopener">
                                <?= icon('icon-phone', 'icon-sm') ?>
                                <span>Call Me</span>
                            </a>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- ============ GALERI KERJA ============ -->
        <section class="section section-gallery" id="galeri">
            <div class="container">
                <div class="section-head">
                    <p class="eyebrow eyebrow-dark"><?= icon('icon-ruler', 'icon-xs') ?> Hasil Pekerjaan</p>
                    <h2 class="section-title">Proyek yang Telah<br>Kami Selesaikan</h2>
                    <p class="section-desc">Sebagian dokumentasi proyek yang telah kami kerjakan bersama klien di berbagai kota.</p>
                </div>

                <div class="gallery-grid">
                    <?php foreach ($gallery as $g): ?>
                        <figure class="gallery-item">
                            <img src="<?= htmlspecialchars($g['img']) ?>" alt="<?= htmlspecialchars($g['judul']) ?>" loading="lazy">
                            <figcaption class="gallery-caption">
                                <span class="gallery-judul"><?= htmlspecialchars($g['judul']) ?></span>
                                <span class="gallery-lokasi"><?= icon('icon-pin', 'icon-xs') ?> <?= htmlspecialchars($g['lokasi']) ?></span>
                            </figcaption>
                        </figure>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- ============ FAQ ============ -->
        <section class="section section-faq" id="faq">
            <div class="container container-narrow">
                <div class="section-head">
                    <p class="eyebrow eyebrow-dark"><?= icon('icon-check-shield', 'icon-xs') ?> FAQ</p>
                    <h2 class="section-title">Pertanyaan yang<br>Sering Diajukan</h2>
                    <p class="section-desc">Belum menemukan jawaban yang kamu cari? Hubungi kami langsung via WhatsApp.</p>
                </div>

                <div class="faq-list">
                    <?php foreach ($faqs as $i => $f): ?>
                        <div class="faq-item">
                            <button class="faq-question" aria-expanded="false" aria-controls="faq-answer-<?= $i ?>">
                                <span><?= htmlspecialchars($f['q']) ?></span>
                                <?= icon('icon-chevron-down', 'icon-sm faq-chevron') ?>
                            </button>
                            <div class="faq-answer" id="faq-answer-<?= $i ?>">
                                <p><?= htmlspecialchars($f['a']) ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- ============ CTA AKHIR ============ -->
        <section class="cta-end">
            <div class="container cta-end-inner">
                <h2 class="cta-end-title">Siap Mulai Membangun Proyek Anda?</h2>
                <p class="cta-end-desc">Konsultasikan kebutuhan bangunan Anda sekarang, gratis dan tanpa komitmen.</p>
                <a href="<?= htmlspecialchars(wa_link($site['wa_nomor'], $site['wa_pesan_default'])) ?>"
                   class="btn btn-primary btn-lg" target="_blank" rel="noopener">
                    <?= icon('icon-whatsapp', 'icon-sm') ?>
                    <span>Hubungi Kami Sekarang</span>
                </a>
            </div>
        </section>

        <!-- ============ CONTACT + MAP ============ -->
        <section class="section section-contact" id="kontak">
            <div class="container">
                <div class="section-head">
                    <p class="eyebrow eyebrow-dark"><?= icon('icon-pin', 'icon-xs') ?> Kontak</p>
                    <h2 class="section-title">Mari Diskusikan<br>Proyek Anda</h2>
                    <p class="section-desc">Isi formulir berikut atau hubungi kami langsung melalui WhatsApp.</p>
                </div>

                <div class="contact-grid">
                    <form class="contact-form" id="contact-form" method="POST" action="includes/send-contact.php" novalidate>
                        <div class="form-row">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" id="nama" name="nama" placeholder="Masukkan nama Anda" required>
                        </div>
                        <div class="form-row">
                            <label for="perusahaan">Nama Perusahaan <span class="form-optional">(opsional)</span></label>
                            <input type="text" id="perusahaan" name="perusahaan" placeholder="Isi jika mewakili perusahaan/instansi">
                        </div>
                        <div class="form-row form-row-split">
                            <div>
                                <label for="telepon">No. WhatsApp</label>
                                <input type="tel" id="telepon" name="telepon" placeholder="08xxxxxxxxxx" required>
                            </div>
                            <div>
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" placeholder="nama@email.com" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <label for="industry">Jenis Proyek</label>
                            <select id="industry" name="industry" required>
                                <option value="" disabled selected>Pilih jenis proyek</option>
                                <?php foreach ($services as $svc): ?>
                                    <option value="<?= htmlspecialchars($svc['judul']) ?>"><?= htmlspecialchars($svc['judul']) ?></option>
                                <?php endforeach; ?>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div class="form-row form-row-split">
                            <div>
                                <label for="budget">Estimasi Budget</label>
                                <input type="text" id="budget" name="budget" placeholder="Contoh: 100-150 juta" required>
                            </div>
                            <div>
                                <label for="timeline">Target Mulai</label>
                                <input type="text" id="timeline" name="timeline" placeholder="Contoh: 1-2 bulan lagi" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <label for="requirements">Detail Kebutuhan</label>
                            <textarea id="requirements" name="requirements" rows="4" placeholder="Ceritakan kebutuhan proyek Anda secara singkat" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block" id="form-submit-btn">
                            <span class="btn-text">Kirim Permintaan</span>
                        </button>
                        <p class="form-status" id="form-status" role="status" aria-live="polite"></p>
                    </form>

                    <div class="contact-side">
                        <div class="contact-info-card">
                            <ul class="contact-info-list">
                                <li>
                                    <?= icon('icon-pin', 'icon-sm') ?>
                                    <span><?= htmlspecialchars($site['alamat']) ?></span>
                                </li>
                                <li>
                                    <?= icon('icon-clock', 'icon-sm') ?>
                                    <span><?= htmlspecialchars($site['jam_operasional']) ?></span>
                                </li>
                                <li>
                                    <?= icon('icon-mail', 'icon-sm') ?>
                                    <span><?= htmlspecialchars($site['email']) ?></span>
                                </li>
                                <li>
                                    <?= icon('icon-whatsapp', 'icon-sm') ?>
                                    <span>+<?= htmlspecialchars($site['wa_nomor']) ?></span>
                                </li>
                            </ul>
                            <a href="<?= htmlspecialchars(wa_link($site['wa_nomor'], $site['wa_pesan_default'])) ?>"
                               class="btn btn-call btn-block" target="_blank" rel="noopener">
                                <?= icon('icon-whatsapp', 'icon-sm') ?>
                                <span>Chat Langsung</span>
                            </a>
                        </div>

                        <div class="map-frame">
                            <iframe
                                src="<?= htmlspecialchars($site['maps_embed_src']) ?>"
                                width="100%" height="100%" style="border:0"
                                allowfullscreen loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"
                                title="Lokasi <?= htmlspecialchars($site['nama_perusahaan']) ?>">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <?php require __DIR__ . '/includes/footer.php'; ?>

</body>
</html>