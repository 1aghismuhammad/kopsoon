(function () {
    const body = document.body;
    if (!body || !body.classList.contains('contact-parallax')) return;

    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (prefersReducedMotion) return;

    const hero = document.querySelector('[data-contact-hero]');
    const heroContent = hero ? hero.querySelector('.contact-hero-copy') : null;
    const parallaxItems = Array.from(document.querySelectorAll('[data-contact-parallax]'));
    const revealItems = Array.from(document.querySelectorAll('[data-contact-reveal]'));
    const cardParallaxItems = Array.from(document.querySelectorAll('.marketplace-card, .service-info-block, .service-action-row, .operational-card, .faq-item'));

    let latestScrollY = window.scrollY || 0;
    let ticking = false;

    const clamp = function (value, min, max) {
        return Math.min(Math.max(value, min), max);
    };

    function getMotionMultiplier() {
        if (window.innerWidth <= 480) return 0.30;
        if (window.innerWidth <= 768) return 0.44;
        if (window.innerWidth <= 1024) return 0.70;
        return 1;
    }

    function updateHero(multiplier) {
        if (!hero) return;

        const heroHeight = Math.max(hero.offsetHeight, 1);
        const progress = clamp(latestScrollY / heroHeight, 0, 1);
        const bgOffset = latestScrollY * 0.22 * multiplier;

        hero.style.setProperty('--contact-hero-bg-y', bgOffset.toFixed(2) + 'px');

        if (heroContent) {
            heroContent.style.setProperty('--contact-hero-content-y', (-latestScrollY * 0.07 * multiplier).toFixed(2) + 'px');
            heroContent.style.setProperty('--contact-hero-opacity', String(clamp(1 - progress * 0.38, 0.62, 1)));
        }
    }

    function updateParallaxItems(multiplier) {
        const viewportHeight = window.innerHeight || 1;
        const viewportCenter = viewportHeight / 2;

        parallaxItems.forEach(function (item) {
            const rect = item.getBoundingClientRect();

            if (rect.bottom < -180 || rect.top > viewportHeight + 180) return;

            const itemCenter = rect.top + rect.height / 2;
            const progress = clamp((viewportCenter - itemCenter) / (viewportHeight * 0.88), -1, 1);
            const speed = Number(item.dataset.contactSpeed || 24);
            const offset = progress * speed * multiplier;

            item.style.setProperty('--contact-parallax-y', offset.toFixed(2) + 'px');
        });
    }


    function updateCardParallax(multiplier) {
        const viewportHeight = window.innerHeight || 1;
        const viewportCenter = viewportHeight / 2;

        cardParallaxItems.forEach(function (item, index) {
            const rect = item.getBoundingClientRect();

            if (rect.bottom < -120 || rect.top > viewportHeight + 120) return;

            const itemCenter = rect.top + rect.height / 2;
            const progress = clamp((viewportCenter - itemCenter) / (viewportHeight * 0.95), -1, 1);
            const direction = index % 2 === 0 ? -1 : 1;
            const offset = progress * direction * 7 * multiplier;

            item.style.setProperty('--contact-card-parallax-y', offset.toFixed(2) + 'px');
        });
    }

    function update() {
        const multiplier = getMotionMultiplier();
        latestScrollY = window.scrollY || window.pageYOffset || 0;
        updateHero(multiplier);
        updateParallaxItems(multiplier);
        updateCardParallax(multiplier);
        ticking = false;
    }

    function requestTick() {
        if (ticking) return;
        ticking = true;
        window.requestAnimationFrame(update);
    }

    function initReveal() {
        revealItems.forEach(function (item) {
            const delay = Number(item.dataset.contactRevealDelay || 0);
            item.style.setProperty('--contact-reveal-delay', delay + 'ms');
        });

        if (!('IntersectionObserver' in window)) {
            revealItems.forEach(function (item) {
                item.classList.add('is-visible');
            });
            return;
        }

        const observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (!entry.isIntersecting) return;
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            });
        }, {
            threshold: 0.16,
            rootMargin: '0px 0px -8% 0px'
        });

        revealItems.forEach(function (item) {
            observer.observe(item);
        });
    }

    window.addEventListener('scroll', requestTick, { passive: true });
    window.addEventListener('resize', requestTick);
    window.addEventListener('load', requestTick);
    document.addEventListener('DOMContentLoaded', function () {
        initReveal();
        requestTick();
    });
})();
