<nav class="site-navbar">
    <div class="navbar-container container">
        <a href="{{ route('home') }}" class="navbar-logo">
            <img src="{{ asset('images/logo.webp') }}" alt="Logo KOPSOON Kopi Santan Instan Khas Blora" class="logo-img">
        </a>

        <button class="navbar-toggle" id="mobile-menu-btn" aria-label="Buka Menu" aria-controls="navbar-menu" aria-expanded="false">
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
        </button>

        <ul class="navbar-menu" id="navbar-menu">
            <li>
                <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                    Home
                </a>
            </li>
            <li>
                <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">
                    About
                </a>
            </li>
            <li>
                <a href="{{ route('product') }}" class="nav-link {{ request()->routeIs('product') ? 'active' : '' }}">
                    Product
                </a>
            </li>
            <li>
                <a href="{{ route('serving') }}" class="nav-link {{ request()->routeIs('serving') ? 'active' : '' }}">
                    Serving Method
                </a>
            </li>
            <li>
                <a href="{{ route('reseller') }}" class="nav-link {{ request()->routeIs('reseller') ? 'active' : '' }}">
                    Reseller
                </a>
            </li>
            <li>
                <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">
                    Contact
                </a>
            </li>
        </ul>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('navbar-menu');
        const mobileQuery = window.matchMedia('(max-width: 768px)');

        if (!btn || !menu) return;

        function closeMobileMenu() {
            menu.classList.remove('active');
            btn.classList.remove('active');
            btn.setAttribute('aria-expanded', 'false');
            document.body.classList.remove('mobile-menu-open');
        }

        function openMobileMenu() {
            menu.classList.add('active');
            btn.classList.add('active');
            btn.setAttribute('aria-expanded', 'true');
            document.body.classList.add('mobile-menu-open');
        }

        btn.addEventListener('click', function(event) {
            event.stopPropagation();

            if (menu.classList.contains('active')) {
                closeMobileMenu();
                return;
            }

            openMobileMenu();
        });

        menu.querySelectorAll('a').forEach(function(link) {
            link.addEventListener('click', function() {
                if (mobileQuery.matches) closeMobileMenu();
            });
        });

        document.addEventListener('click', function(event) {
            if (!mobileQuery.matches || !menu.classList.contains('active')) return;
            if (menu.contains(event.target) || btn.contains(event.target)) return;
            closeMobileMenu();
        });

        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') closeMobileMenu();
        });

        window.addEventListener('resize', function() {
            if (!mobileQuery.matches) closeMobileMenu();
        });
    });
</script>
