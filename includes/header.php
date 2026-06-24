<header class="site-header" id="site-header">
    <div class="container header-inner">
        <a href="#home" class="brand">
            <span class="brand-mark" aria-hidden="true"><?= icon('icon-hardhat', 'brand-icon') ?></span>
            <span class="brand-text">
                <span class="brand-name"><?= htmlspecialchars($site['nama_perusahaan']) ?></span>
                <span class="brand-tagline"><?= htmlspecialchars($site['tagline']) ?></span>
            </span>
        </a>

        <nav class="main-nav" id="main-nav" aria-label="Navigasi utama">
            <ul>
                <li><a href="#home" class="nav-link">Home</a></li>
                <li><a href="#layanan" class="nav-link">Layanan</a></li>
                <li><a href="#galeri" class="nav-link">Galeri</a></li>
                <li><a href="#faq" class="nav-link">FAQ</a></li>
                <li><a href="#kontak" class="nav-link">Kontak</a></li>
            </ul>
            <a href="<?= htmlspecialchars(wa_link($site['wa_nomor'], $site['wa_pesan_default'])) ?>"
               class="btn btn-primary btn-nav-cta" target="_blank" rel="noopener">
                <?= icon('icon-whatsapp', 'icon-sm') ?>
                <span>Konsultasi Gratis</span>
            </a>
        </nav>

        <button class="nav-toggle" id="nav-toggle" aria-label="Buka menu navigasi" aria-expanded="false" aria-controls="main-nav">
            <?= icon('icon-menu', 'icon-toggle icon-toggle-open') ?>
            <?= icon('icon-close', 'icon-toggle icon-toggle-close') ?>
        </button>
    </div>
</header>
