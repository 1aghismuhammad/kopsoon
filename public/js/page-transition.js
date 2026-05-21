(function () {
    const TRANSITION_DURATION = 640;

    function isModifiedClick(event) {
        return event.metaKey || event.ctrlKey || event.shiftKey || event.altKey || event.button !== 0;
    }

    function shouldSkipLink(link, event) {
        if (!link || !link.href) return true;
        if (isModifiedClick(event)) return true;
        if (link.target && link.target !== '_self') return true;
        if (link.hasAttribute('download')) return true;

        const href = link.getAttribute('href') || '';
        if (!href || href.startsWith('#') || href.startsWith('javascript:') || href.startsWith('mailto:') || href.startsWith('tel:')) {
            return true;
        }

        const url = new URL(link.href, window.location.href);
        const current = new URL(window.location.href);

        if (url.origin !== current.origin) return true;

        const samePageHash = url.pathname === current.pathname && url.search === current.search && url.hash;
        if (samePageHash) return true;

        return false;
    }

    function markReady() {
        document.body.classList.remove('page-exiting', 'is-transitioning');
        document.body.classList.add('page-ready');
    }

    function startExit(targetUrl) {
        document.body.classList.remove('page-ready');
        document.body.classList.add('page-exiting', 'is-transitioning');

        window.setTimeout(function () {
            window.location.href = targetUrl;
        }, TRANSITION_DURATION);
    }

    document.addEventListener('DOMContentLoaded', function () {
        window.requestAnimationFrame(function () {
            markReady();
        });

        document.addEventListener('click', function (event) {
            const link = event.target.closest('a[href]');
            if (shouldSkipLink(link, event)) return;

            event.preventDefault();
            startExit(link.href);
        });
    });

    window.addEventListener('pageshow', function () {
        markReady();
    });
})();
