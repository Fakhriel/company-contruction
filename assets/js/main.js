/**
 * main.js
 * Interaktivitas landing page: toggle menu mobile, accordion FAQ,
 * dan submit form kontak ke endpoint PHP (yang meneruskan ke webhook).
 */
(function () {
    'use strict';

    /* ============ MOBILE NAV TOGGLE ============ */
    var navToggle = document.getElementById('nav-toggle');
    var mainNav = document.getElementById('main-nav');

    if (navToggle && mainNav) {
        navToggle.addEventListener('click', function () {
            var isOpen = mainNav.classList.toggle('is-open');
            navToggle.classList.toggle('is-active', isOpen);
            navToggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
            document.body.style.overflow = isOpen ? 'hidden' : '';
        });

        // Tutup menu saat link diklik (mobile)
        mainNav.querySelectorAll('.nav-link').forEach(function (link) {
            link.addEventListener('click', function () {
                mainNav.classList.remove('is-open');
                navToggle.classList.remove('is-active');
                navToggle.setAttribute('aria-expanded', 'false');
                document.body.style.overflow = '';
            });
        });
    }

    /* ============ FAQ ACCORDION ============ */
    var faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(function (item) {
        var question = item.querySelector('.faq-question');
        var answer = item.querySelector('.faq-answer');

        question.addEventListener('click', function () {
            var isOpen = item.classList.contains('is-open');

            // Tutup item lain (mode accordion eksklusif)
            faqItems.forEach(function (other) {
                other.classList.remove('is-open');
                other.querySelector('.faq-question').setAttribute('aria-expanded', 'false');
            });

            if (!isOpen) {
                item.classList.add('is-open');
                question.setAttribute('aria-expanded', 'true');
            }
        });
    });

    /* ============ CONTACT FORM SUBMIT (AJAX -> PHP -> Webhook) ============ */
    var form = document.getElementById('contact-form');
    var statusEl = document.getElementById('form-status');
    var submitBtn = document.getElementById('form-submit-btn');

    if (form) {
        form.addEventListener('submit', function (e) {
            e.preventDefault();

            statusEl.textContent = '';
            statusEl.classList.remove('is-success', 'is-error');
            submitBtn.disabled = true;
            var originalText = submitBtn.querySelector('.btn-text').textContent;
            submitBtn.querySelector('.btn-text').textContent = 'Mengirim...';

            var formData = new FormData(form);

            // Batas waktu maksimal 20 detik. Jika server (atau webhook di baliknya) hang,
            // tombol tetap kembali normal dan user diberi tahu, bukan loading selamanya.
            var controller = new AbortController();
            var timeoutId = setTimeout(function () { controller.abort(); }, 20000);

            fetch(form.action, {
                method: 'POST',
                body: formData,
                headers: { 'X-Requested-With': 'XMLHttpRequest' },
                signal: controller.signal
            })
                .then(function (res) {
                    return res.text().then(function (text) {
                        try {
                            return JSON.parse(text);
                        } catch (err) {
                            // Server membalas non-JSON (biasanya error/warning PHP) -> jangan macet.
                            console.error('Respons server tidak valid JSON:', text);
                            throw new Error('invalid-json');
                        }
                    });
                })
                .then(function (data) {
                    statusEl.textContent = data.message;
                    statusEl.classList.add(data.success ? 'is-success' : 'is-error');
                    if (data.success) {
                        form.reset();
                    }
                })
                .catch(function (err) {
                    if (err && err.name === 'AbortError') {
                        statusEl.textContent = 'Server tidak merespons (timeout). Coba lagi atau hubungi kami via WhatsApp.';
                    } else {
                        statusEl.textContent = 'Terjadi kesalahan jaringan. Silakan coba lagi atau hubungi kami via WhatsApp.';
                    }
                    statusEl.classList.add('is-error');
                })
                .finally(function () {
                    clearTimeout(timeoutId);
                    submitBtn.disabled = false;
                    submitBtn.querySelector('.btn-text').textContent = originalText;
                });
        });
    }

    /* ============ HEADER SHADOW SAAT SCROLL (opsional, ringan) ============ */
    var header = document.getElementById('site-header');
    if (header) {
        window.addEventListener('scroll', function () {
            header.style.boxShadow = window.scrollY > 8 ? '0 4px 16px -8px rgba(0,0,0,0.3)' : 'none';
        }, { passive: true });
    }

})();