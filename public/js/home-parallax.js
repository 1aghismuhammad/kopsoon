(function () {
    const body = document.body;
    if (!body || !body.classList.contains('home-parallax')) return;

    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (prefersReducedMotion) return;

    const hero = document.querySelector('[data-home-hero]');
    const heroContent = hero ? hero.querySelector('.hero-content') : null;
    const heroVisual = hero ? hero.querySelector('.hero-image-container') : null;
    const parallaxItems = Array.from(document.querySelectorAll('[data-parallax]'));
    const revealItems = Array.from(document.querySelectorAll('[data-reveal]'));

    let latestScrollY = window.scrollY || 0;
    let ticking = false;

    const clamp = function (value, min, max) {
        return Math.min(Math.max(value, min), max);
    };

    function getMotionMultiplier() {
        if (window.innerWidth <= 480) return 0.32;
        if (window.innerWidth <= 768) return 0.46;
        if (window.innerWidth <= 1024) return 0.72;
        return 1;
    }

    function updateHero(multiplier) {
        if (!hero) return;

        const heroHeight = Math.max(hero.offsetHeight, 1);
        const progress = clamp(latestScrollY / heroHeight, 0, 1);
        const bgOffset = latestScrollY * 0.20 * multiplier;

        hero.style.setProperty('--hero-bg-y', bgOffset.toFixed(2) + 'px');

        if (heroContent) {
            heroContent.style.setProperty('--hero-content-y', (-latestScrollY * 0.075 * multiplier).toFixed(2) + 'px');
            heroContent.style.setProperty('--hero-opacity', String(clamp(1 - progress * 0.42, 0.58, 1)));
        }

        if (heroVisual) {
            heroVisual.style.setProperty('--hero-image-y', (latestScrollY * 0.105 * multiplier).toFixed(2) + 'px');
            heroVisual.style.setProperty('--hero-image-rotate', (-progress * 2.6 * multiplier).toFixed(2) + 'deg');
            heroVisual.style.setProperty('--hero-image-scale', String(1 + progress * 0.035 * multiplier));
        }
    }

    function updateParallaxItems(multiplier) {
        const viewportHeight = window.innerHeight || 1;
        const viewportCenter = viewportHeight / 2;

        parallaxItems.forEach(function (item) {
            const rect = item.getBoundingClientRect();

            if (rect.bottom < -160 || rect.top > viewportHeight + 160) return;

            const itemCenter = rect.top + rect.height / 2;
            const progress = clamp((viewportCenter - itemCenter) / (viewportHeight * 0.86), -1, 1);
            const speed = Number(item.dataset.parallaxSpeed || 20);
            const offset = progress * speed * multiplier;

            item.style.setProperty('--home-parallax-y', offset.toFixed(2) + 'px');
        });
    }

    function update() {
        const multiplier = getMotionMultiplier();
        latestScrollY = window.scrollY || window.pageYOffset || 0;
        updateHero(multiplier);
        updateParallaxItems(multiplier);
        ticking = false;
    }

    function requestTick() {
        if (window.innerWidth <= 768) return;
        if (ticking) return;
        ticking = true;
        window.requestAnimationFrame(update);
    }

    function initReveal() {
        revealItems.forEach(function (item) {
            const delay = Number(item.dataset.revealDelay || 0);
            item.style.setProperty('--reveal-delay', delay + 'ms');
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
