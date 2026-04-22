(function () {
    const body = document.body;
    const navbar = document.getElementById('navbar');
    const mobileNav = document.getElementById('mobileNav');
    const toggleButtons = document.querySelectorAll('[data-mobile-toggle]');
    const closeButtons = document.querySelectorAll('[data-mobile-close]');

    const setMobileState = (open) => {
        if (!mobileNav) {
            return;
        }

        mobileNav.classList.toggle('open', open);
        mobileNav.setAttribute('aria-hidden', open ? 'false' : 'true');
        body.classList.toggle('nav-open', open);

        toggleButtons.forEach((button) => {
            button.setAttribute('aria-expanded', open ? 'true' : 'false');
        });
    };

    const closeMenu = () => setMobileState(false);

    toggleButtons.forEach((button) => {
        button.addEventListener('click', () => {
            if (!mobileNav) {
                return;
            }

            setMobileState(!mobileNav.classList.contains('open'));
        });
    });

    closeButtons.forEach((button) => {
        button.addEventListener('click', closeMenu);
    });

    document.addEventListener('click', (event) => {
        if (!mobileNav || !mobileNav.classList.contains('open')) {
            return;
        }

        if (event.target.closest('#mobileNav .nav-link')) {
            closeMenu();
            return;
        }

        if (event.target.closest('#mobileNav .mobile-nav-panel')) {
            return;
        }

        if (!event.target.closest('[data-mobile-toggle]')) {
            closeMenu();
        }
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') {
            closeMenu();
        }
    });

    const syncNavbar = () => {
        if (!navbar) {
            return;
        }

        navbar.classList.toggle('scrolled', window.scrollY > 20);
    };

    syncNavbar();
    window.addEventListener('scroll', syncNavbar, { passive: true });
    window.addEventListener('resize', () => {
        if (window.innerWidth > 1100) {
            closeMenu();
        }
    });

    const counters = document.querySelectorAll('[data-val]');

    const animateCount = (el) => {
        const target = Number.parseInt(el.dataset.val || '0', 10);
        const suffix = el.dataset.suffix || '';
        const duration = 1100;
        const start = performance.now();

        const step = (now) => {
            const progress = Math.min((now - start) / duration, 1);
            const eased = 1 - Math.pow(1 - progress, 3);
            const value = Math.round(target * eased);
            el.textContent = `${value}${suffix}`;

            if (progress < 1) {
                requestAnimationFrame(step);
            }
        };

        requestAnimationFrame(step);
    };

    if (counters.length && 'IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries, observerInstance) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    animateCount(entry.target);
                    observerInstance.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.55,
        });

        counters.forEach((counter) => observer.observe(counter));
    } else {
        counters.forEach((el) => {
            el.textContent = `${el.dataset.val || ''}${el.dataset.suffix || ''}`;
        });
    }

    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    document.querySelectorAll('[data-hero-flipbook]').forEach((flipbook) => {
        const slides = Array.from(flipbook.querySelectorAll('[data-hero-page]'));

        if (slides.length < 2) {
            return;
        }

        let current = 0;
        let timer = null;

        const applyState = () => {
            const previous = (current - 1 + slides.length) % slides.length;
            const next = (current + 1) % slides.length;

            slides.forEach((slide, index) => {
                slide.classList.toggle('is-active', index === current);
                slide.classList.toggle('is-prev', index === previous);
                slide.classList.toggle('is-next', index === next);
                slide.setAttribute('aria-hidden', index === current ? 'false' : 'true');
            });
        };

        const advance = () => {
            current = (current + 1) % slides.length;
            applyState();
        };

        const start = () => {
            if (prefersReducedMotion || timer) {
                return;
            }

            timer = window.setInterval(advance, 4200);
        };

        const stop = () => {
            if (!timer) {
                return;
            }

            window.clearInterval(timer);
            timer = null;
        };

        applyState();
        start();

        flipbook.addEventListener('mouseenter', stop);
        flipbook.addEventListener('mouseleave', start);
        flipbook.addEventListener('focusin', stop);
        flipbook.addEventListener('focusout', start);
        document.addEventListener('visibilitychange', () => {
            if (document.hidden) {
                stop();
            } else {
                start();
            }
        });
    });
})();
