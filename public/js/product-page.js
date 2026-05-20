(function () {
    const slider = document.querySelector('[data-product-slider]');
    if (!slider) return;

    const showcase = slider.closest('[data-scroll-showcase]') || slider.parentElement;
    const slides = Array.from(slider.querySelectorAll('.product-slide'));
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    if (!showcase || slides.length === 0) return;

    let activeIndex = 0;
    let ticking = false;
    let snapTimer = null;

    function clamp(value, min, max) {
        return Math.min(Math.max(value, min), max);
    }

    function setShowcaseHeight() {
        const viewportHeight = window.innerHeight || document.documentElement.clientHeight;
        const scrollPages = slides.length + 1;
        showcase.style.setProperty('--showcase-scroll-height', `${scrollPages * viewportHeight}px`);
    }

    function getMetrics() {
        const rect = showcase.getBoundingClientRect();
        const top = rect.top + window.scrollY;
        const totalScrollable = Math.max(showcase.offsetHeight - window.innerHeight, 1);
        const step = totalScrollable / slides.length;

        return {
            top,
            bottom: top + totalScrollable,
            totalScrollable,
            step
        };
    }

    function setSlide(nextIndex) {
        const clampedIndex = clamp(nextIndex, 0, slides.length - 1);
        if (clampedIndex === activeIndex) return;

        slides[activeIndex].classList.remove('is-active');
        activeIndex = clampedIndex;

        slides[activeIndex].classList.add('is-active');
    }

    function updateSlideByScroll() {
        const metrics = getMetrics();
        const currentY = window.scrollY;

        if (currentY <= metrics.top) {
            setSlide(0);
            return;
        }

        if (currentY >= metrics.bottom) {
            setSlide(slides.length - 1);
            return;
        }

        const relativeY = clamp(currentY - metrics.top, 0, metrics.totalScrollable);
        const nextIndex = clamp(Math.floor(relativeY / metrics.step), 0, slides.length - 1);
        setSlide(nextIndex);
    }

    function requestScrollUpdate() {
        if (ticking) return;

        ticking = true;
        window.requestAnimationFrame(function () {
            updateSlideByScroll();
            ticking = false;
        });
    }

    function isInsideShowcaseScrollArea() {
        const metrics = getMetrics();
        const currentY = window.scrollY;
        return currentY > metrics.top && currentY < metrics.bottom;
    }

    function snapToNearestProductPage() {
        if (prefersReducedMotion || !isInsideShowcaseScrollArea()) return;

        const metrics = getMetrics();
        const currentY = window.scrollY;
        const relativeY = clamp(currentY - metrics.top, 0, metrics.totalScrollable);
        const targetPage = clamp(Math.round(relativeY / metrics.step), 0, slides.length);
        const targetY = metrics.top + (targetPage * metrics.step);

        if (Math.abs(currentY - targetY) > 6) {
            window.scrollTo({
                top: targetY,
                behavior: 'smooth'
            });
        }
    }

    function scheduleSnap() {
        window.clearTimeout(snapTimer);
        snapTimer = window.setTimeout(snapToNearestProductPage, 120);
    }

    function scrollToProductPage(pageIndex) {
        const metrics = getMetrics();
        const targetPage = clamp(pageIndex, 0, slides.length);
        const targetY = metrics.top + (targetPage * metrics.step) + 1;

        window.scrollTo({
            top: targetY,
            behavior: prefersReducedMotion ? 'auto' : 'smooth'
        });
    }

    setShowcaseHeight();
    updateSlideByScroll();

    window.addEventListener('scroll', function () {
        requestScrollUpdate();
        scheduleSnap();
    }, { passive: true });

    window.addEventListener('resize', function () {
        setShowcaseHeight();
        updateSlideByScroll();
    });

    const revealItems = document.querySelectorAll('.reveal-up, .product-card');
    if (!('IntersectionObserver' in window)) {
        revealItems.forEach(function (item) {
            item.classList.add('is-visible');
        });
        return;
    }

    const observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.18 });

    revealItems.forEach(function (item) {
        observer.observe(item);
    });
})();
