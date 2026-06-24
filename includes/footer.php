<footer class="site-footer">
    <div class="container footer-inner">
        <div class="footer-brand">
            <span class="brand-mark" aria-hidden="true"><?= icon('icon-hardhat', 'brand-icon') ?></span>
            <div>
                <p class="footer-name"><?= htmlspecialchars($site['nama_perusahaan']) ?></p>
                <p class="footer-tagline"><?= htmlspecialchars($site['tagline']) ?></p>
            </div>
        </div>

        <nav class="footer-nav" aria-label="Navigasi footer">
            <a href="#home">Home</a>
            <a href="#layanan">Layanan</a>
            <a href="#galeri">Galeri</a>
            <a href="#faq">FAQ</a>
            <a href="#kontak">Kontak</a>
        </nav>

        <div class="footer-contact">
            <a href="mailto:<?= htmlspecialchars($site['email']) ?>"><?= icon('icon-mail', 'icon-sm') ?><?= htmlspecialchars($site['email']) ?></a>
            <a href="<?= htmlspecialchars(wa_link($site['wa_nomor'])) ?>" target="_blank" rel="noopener"><?= icon('icon-whatsapp', 'icon-sm') ?>+<?= htmlspecialchars($site['wa_nomor']) ?></a>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <p>&copy; <?= date('Y') ?> <?= htmlspecialchars($site['nama_perusahaan']) ?>. Seluruh hak cipta dilindungi.</p>
        </div>
    </div>
</footer>

<a href="<?= htmlspecialchars(wa_link($site['wa_nomor'], $site['wa_pesan_default'])) ?>"
   class="wa-float" target="_blank" rel="noopener" aria-label="Chat via WhatsApp">
    <?= icon('icon-whatsapp', 'icon-wa-float') ?>
</a>

<script src="assets/js/main.js"></script>
