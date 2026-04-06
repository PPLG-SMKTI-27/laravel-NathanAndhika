{{-- Bottom Navigation Bar (Mobile App Style) --}}
<style>
    .bottom-nav {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: 9999;
        padding: 0 16px 0;
        opacity: 0;
        transform: translateY(50px);
        transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.4s ease;
        display: none;
        pointer-events: none;
        /* Allow clicks to pass through to elements like music player */
    }

    /* Scroll-responsive: hide navbar on scroll down */
    .bottom-nav.nav-hidden {
        transform: translateY(100%) !important;
        opacity: 0 !important;
        pointer-events: none !important;
    }

    .mobile-hamburger-float.nav-hidden {
        transform: translateY(-100px) scale(0.5) !important;
        opacity: 0 !important;
        pointer-events: none !important;
    }

    .bottom-nav-inner {
        pointer-events: auto;
        /* Catch clicks for the actual buttons */
        max-width: 520px;
        margin: 0 auto 12px;
        background: rgba(2, 6, 23, 0.75);
        backdrop-filter: blur(24px) saturate(180%);
        -webkit-backdrop-filter: blur(24px) saturate(180%);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 22px;
        padding: 8px 6px;
        box-shadow:
            0 -4px 30px rgba(0, 0, 0, 0.35),
            0 0 20px rgba(6, 182, 212, 0.08),
            inset 0 1px 0 rgba(255, 255, 255, 0.05);
        display: flex;
        align-items: center;
        justify-content: space-around;
        gap: 2px;
    }

    .bottom-nav-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 3px;
        padding: 8px 12px;
        border-radius: 14px;
        text-decoration: none;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        min-width: 56px;
    }

    .bottom-nav-item i {
        font-size: 18px;
        color: #64748b;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .bottom-nav-item span {
        font-size: 9px;
        font-family: monospace;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        color: #64748b;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    /* Hover */
    .bottom-nav-item:hover {
        background: rgba(6, 182, 212, 0.08);
    }

    .bottom-nav-item:hover i,
    .bottom-nav-item:hover span {
        color: #22d3ee;
    }

    /* Active State - no background, handled by sliding pill */
    .bottom-nav-item.active {
        background: transparent;
    }

    .bottom-nav-item.active i {
        color: #22d3ee;
        filter: drop-shadow(0 0 6px rgba(34, 211, 238, 0.5));
        transform: scale(1.1) translateY(-1px);
    }

    .bottom-nav-item.active span {
        color: #22d3ee;
        font-weight: 700;
    }

    /* Active dot indicator removed from static item so it can travel with the pill */

    .nav-pill {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        height: calc(100% - 10px);
        border-radius: 14px;
        background: rgba(6, 182, 212, 0.12);
        box-shadow: 0 0 12px rgba(6, 182, 212, 0.08);
        transition: left 0.4s cubic-bezier(0.4, 0, 0.2, 1), width 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        pointer-events: none;
        z-index: 0;
    }

    /* The sliding dot inside the moving pill */
    .nav-pill::after {
        content: '';
        position: absolute;
        bottom: 1px;
        left: 50%;
        transform: translateX(-50%);
        width: 4px;
        height: 4px;
        border-radius: 50%;
        background: #22d3ee;
        box-shadow: 0 0 8px rgba(34, 211, 238, 0.6);
    }

    .theme-light .nav-pill {
        background: rgba(14, 165, 233, 0.1);
        box-shadow: 0 0 12px rgba(14, 165, 233, 0.06);
    }

    .theme-light .nav-pill::after {
        background: #0284c7;
        box-shadow: 0 0 6px rgba(2, 132, 199, 0.4);
    }

    /* Theme Toggle special button */
    .bottom-nav-theme {
        background: rgba(255, 255, 255, 0.04);
        border: 1px solid rgba(255, 255, 255, 0.06);
    }

    .bottom-nav-theme:hover {
        background: rgba(6, 182, 212, 0.12);
        border-color: rgba(6, 182, 212, 0.2);
    }

    /* ====== LIGHT THEME OVERRIDES ====== */
    .theme-light .bottom-nav-inner {
        background: rgba(240, 249, 255, 0.82) !important;
        border-color: rgba(14, 165, 233, 0.15) !important;
        box-shadow:
            0 -4px 30px rgba(14, 165, 233, 0.1),
            0 0 20px rgba(14, 165, 233, 0.06),
            inset 0 1px 0 rgba(255, 255, 255, 0.6) !important;
    }

    .theme-light .bottom-nav-item i,
    .theme-light .bottom-nav-item span {
        color: #64748b;
    }

    .theme-light .bottom-nav-item:hover {
        background: rgba(14, 165, 233, 0.08);
    }

    .theme-light .bottom-nav-item:hover i,
    .theme-light .bottom-nav-item:hover span {
        color: #0284c7;
    }

    .theme-light .bottom-nav-item.active {
        background: transparent;
    }

    .theme-light .bottom-nav-item.active i {
        color: #0284c7;
        filter: drop-shadow(0 0 4px rgba(2, 132, 199, 0.3));
    }

    .theme-light .bottom-nav-item.active span {
        color: #0284c7;
    }

    /* Light mode active dot is now handled by .theme-light .nav-pill::after */

    .theme-light .bottom-nav-theme {
        background: rgba(14, 165, 233, 0.06);
        border-color: rgba(14, 165, 233, 0.1);
    }

    .theme-light .bottom-nav-theme:hover {
        background: rgba(14, 165, 233, 0.12);
    }

    /* Hide bottom navbar on mobile - only show hamburger */
    @media (max-width: 767px) {
        .bottom-nav {
            display: none !important;
            opacity: 0 !important;
        }
    }

    /* Floating hamburger button - mobile only */
    .mobile-hamburger-float {
        position: fixed;
        top: 16px;
        right: 16px;
        z-index: 9999;
        opacity: 0;
        transform: translateY(-30px) scale(0.8);
        transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.4s ease;
        display: none;
    }

    /* Hide hamburger on desktop (>= 768px) - overrides inline JS styles */
    @media (min-width: 768px) {
        .mobile-hamburger-float {
            display: none !important;
            opacity: 0 !important;
        }
    }

    .mobile-hamburger-float.visible {
        opacity: 1;
        transform: translateY(0) scale(1);
    }

    .hamburger-btn {
        width: 48px;
        height: 48px;
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(2, 6, 23, 0.7);
        backdrop-filter: blur(20px) saturate(180%);
        -webkit-backdrop-filter: blur(20px) saturate(180%);
        border: 1px solid rgba(255, 255, 255, 0.1);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.4), 0 0 15px rgba(6, 182, 212, 0.15);
        color: #94a3b8;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .hamburger-btn:hover {
        background: rgba(8, 145, 178, 0.25);
        border-color: rgba(6, 182, 212, 0.4);
        color: #22d3ee;
        box-shadow: 0 4px 25px rgba(0, 0, 0, 0.5), 0 0 20px rgba(6, 182, 212, 0.3);
        transform: scale(1.05);
    }

    .hamburger-btn:active {
        transform: scale(0.95);
    }

    /* Light Theme - Floating Hamburger */
    .theme-light .hamburger-btn {
        background: rgba(240, 249, 255, 0.85);
        border-color: rgba(14, 165, 233, 0.2);
        box-shadow: 0 4px 20px rgba(14, 165, 233, 0.15), 0 0 10px rgba(14, 165, 233, 0.1);
        color: #475569;
    }

    .theme-light .hamburger-btn:hover {
        background: rgba(14, 165, 233, 0.15);
        border-color: rgba(14, 165, 233, 0.4);
        color: #0284c7;
        box-shadow: 0 4px 25px rgba(14, 165, 233, 0.25), 0 0 15px rgba(14, 165, 233, 0.2);
    }

    /* Light Theme for Mobile Sidebar */
    .theme-light .mobile-sidebar {
        background: #ffffff !important;
        border-color: rgba(14, 165, 233, 0.2) !important;
        box-shadow: -10px 0 30px rgba(0, 0, 0, 0.1) !important;
    }

    .theme-light .mobile-sidebar-link {
        color: #475569 !important;
    }

    .theme-light .mobile-sidebar-link:hover {
        background: rgba(14, 165, 233, 0.08) !important;
        color: #0284c7 !important;
    }

    .theme-light .mobile-sidebar-header {
        border-color: #e2e8f0 !important;
    }

    .theme-light .mobile-sidebar-text {
        color: #64748b !important;
    }
</style>

<nav class="bottom-nav" id="bottomNavBar" style="display: none; opacity: 0; transform: translateY(50px);">
    <div class="bottom-nav-inner" style="position: relative;">

        {{-- Sliding pill indicator --}}
        <div class="nav-pill" id="navPill"></div>

        {{-- Home --}}
        <a href="#home" class="bottom-nav-item active" data-nav="home">
            <i class="fa-solid fa-house"></i>
            <span>Home</span>
        </a>

        {{-- About --}}
        <a href="#about" class="bottom-nav-item" data-nav="about">
            <i class="fa-solid fa-user-astronaut"></i>
            <span>About</span>
        </a>

        {{-- Skills --}}
        <a href="#skills" class="bottom-nav-item" data-nav="skills">
            <i class="fa-solid fa-code"></i>
            <span>Skills</span>
        </a>

        {{-- Projects --}}
        <a href="#projects" class="bottom-nav-item" data-nav="projects">
            <i class="fa-solid fa-rocket"></i>
            <span>Projects</span>
        </a>

        {{-- Contact --}}
        <a href="#contact" class="bottom-nav-item" data-nav="contact">
            <i class="fa-solid fa-satellite-dish"></i>
            <span>Contact</span>
        </a>

        {{-- Theme Toggle --}}
        <button onclick="toggleTheme()" class="bottom-nav-item bottom-nav-theme" title="Toggle Theme">
            <div
                style="position: relative; width: 18px; height: 18px; display: flex; align-items: center; justify-content: center;">
                <i class="fa-solid fa-moon theme-icon-moon-nav" style="position:absolute; transition: all 0.5s;"></i>
                <i class="fa-solid fa-sun theme-icon-sun-nav"
                    style="position:absolute; opacity:0; transform: rotate(90deg) scale(0.5); transition: all 0.5s;"></i>
            </div>
            <span>Theme</span>
        </button>

        {{-- Login / Auth --}}
        @if (!Auth::check())
            <a href="/login" class="bottom-nav-item">
                <i class="fa-solid fa-right-to-bracket"></i>
                <span>Login</span>
            </a>
        @else
            <a href="{{ route('dashboard') }}" class="bottom-nav-item">
                <i class="fa-solid fa-terminal"></i>
                <span>Panel</span>
            </a>
        @endif

    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const navItems = document.querySelectorAll('.bottom-nav-item[data-nav]');
        const sections = {};

        // Collect section elements
        navItems.forEach(item => {
            const id = item.getAttribute('data-nav');
            const section = document.getElementById(id);
            if (section) sections[id] = section;
        });

        // Sliding pill setup
        const navPill = document.getElementById('navPill');
        const navInner = document.querySelector('.bottom-nav-inner');

        function moveNavPill(activeItem) {
            if (!navPill || !navInner || !activeItem) return;
            const innerRect = navInner.getBoundingClientRect();
            const itemRect = activeItem.getBoundingClientRect();
            const left = itemRect.left - innerRect.left;
            navPill.style.left = left + 'px';
            navPill.style.width = itemRect.width + 'px';
        }

        // Click handler - set active + move pill
        navItems.forEach(item => {
            item.addEventListener('click', function () {
                navItems.forEach(n => n.classList.remove('active'));
                this.classList.add('active');
                moveNavPill(this);
            });
        });

        let ticking = false;
        let currentActiveId = 'home';

        // Initial pill position
        const initialActive = document.querySelector('.bottom-nav-item.active');
        if (initialActive) {
            // Set pill without transition on first load
            if (navPill) navPill.style.transition = 'none';
            requestAnimationFrame(() => {
                moveNavPill(initialActive);
                // Re-enable transition after initial position
                requestAnimationFrame(() => {
                    if (navPill) navPill.style.transition = '';
                });
            });
        }

        window.addEventListener('scroll', function () {
            if (!ticking) {
                window.requestAnimationFrame(function () {
                    let current = 'home';
                    const threshold = window.innerHeight * 0.4; // 40% of screen height

                    for (const [id, section] of Object.entries(sections)) {
                        const rect = section.getBoundingClientRect();
                        if (rect.top <= threshold) {
                            current = id;
                        }
                    }

                    if (current !== currentActiveId) {
                        currentActiveId = current;
                        navItems.forEach(item => {
                            const isActive = item.getAttribute('data-nav') === current;
                            item.classList.toggle('active', isActive);
                            if (isActive) moveNavPill(item);
                        });
                    }
                    ticking = false;
                });
                ticking = true;
            }
        });

        window.addEventListener('resize', function () {
            const activeItem = document.querySelector('.bottom-nav-item.active[data-nav]');
            if (activeItem) {
                moveNavPill(activeItem);
            }
        });

        // Theme icon sync
        function syncThemeIcons() {
            const isLight = document.documentElement.classList.contains('theme-light');
            document.querySelectorAll('.theme-icon-moon-nav').forEach(el => {
                el.style.opacity = isLight ? '0' : '1';
                el.style.transform = isLight ? 'rotate(-90deg) scale(0.5)' : 'rotate(0) scale(1)';
            });
            document.querySelectorAll('.theme-icon-sun-nav').forEach(el => {
                el.style.opacity = isLight ? '1' : '0';
                el.style.transform = isLight ? 'rotate(0) scale(1)' : 'rotate(90deg) scale(0.5)';
                el.style.color = isLight ? '#f59e0b' : '';
            });
        }
        syncThemeIcons();

        // Watch for theme changes
        const observer = new MutationObserver(syncThemeIcons);
        observer.observe(document.documentElement, { attributes: true, attributeFilter: ['class'] });

        // Scroll-responsive: hide on scroll down, show on scroll up
        let lastScrollY = window.scrollY;
        let scrollTimeout = null;
        const scrollThreshold = 10; // minimum scroll distance to trigger

        function handleNavScroll() {
            const currentScrollY = window.scrollY;
            const bottomNav = document.getElementById('bottomNavBar');
            const mobileNav = document.getElementById('mobileTopNavBar');
            const diff = currentScrollY - lastScrollY;

            if (Math.abs(diff) < scrollThreshold) return;

            if (diff > 0 && currentScrollY > 80) {
                // Scrolling DOWN - hide navbar
                if (bottomNav) bottomNav.classList.add('nav-hidden');
                if (mobileNav) mobileNav.classList.add('nav-hidden');
            } else {
                // Scrolling UP - show navbar
                if (bottomNav) bottomNav.classList.remove('nav-hidden');
                if (mobileNav) mobileNav.classList.remove('nav-hidden');
            }

            lastScrollY = currentScrollY;
        }

        window.addEventListener('scroll', function () {
            if (scrollTimeout) cancelAnimationFrame(scrollTimeout);
            scrollTimeout = requestAnimationFrame(handleNavScroll);
        }, { passive: true });
    });
});
</script>

<!-- Mobile Floating Hamburger Button -->
<div id="mobileTopNavBar" x-data="{ open: false }" class="mobile-hamburger-float md:hidden">

    {{-- Hamburger Button --}}
    <button @click="open = true" class="hamburger-btn" aria-label="Open Menu">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
            stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </button>

    {{-- Overlay --}}
    <div x-show="open" x-transition.opacity.duration.300ms @click="open = false"
        class="fixed inset-0 bg-black/80 backdrop-blur-sm z-40" style="display: none;">
    </div>

    {{-- Sidebar --}}
    <div x-show="open" @click.away="open = false" x-transition:enter="transition ease-out duration-300 transform"
        x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
        x-transition:leave="transition ease-in duration-300 transform" x-transition:leave-start="translate-x-0"
        x-transition:leave-end="translate-x-full"
        class="mobile-sidebar fixed top-0 right-0 h-screen w-72 bg-slate-950 border-l border-cyan-500/20 z-50 flex flex-col shadow-[-20px_0_50px_rgba(0,0,0,0.9)]"
        style="display: none;">

        <div class="flex justify-between items-center p-6 pb-4">
            <div class="flex flex-col">
                <span class="text-[10px] font-mono text-cyan-500 tracking-[0.3em] uppercase">Control Panel</span>
                <div class="h-px w-12 bg-cyan-900 mt-1"></div>
            </div>
            <button @click="open = false"
                class="p-2 rounded-full bg-white/5 text-slate-400 hover:text-red-400 transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <div class="mobile-sidebar-header px-6 py-4 border-b border-white/5">
            @if (!Auth::check())
                <a href="/login"
                    class="flex items-center justify-center gap-3 w-full py-3 bg-cyan-600 text-white text-[11px] font-black uppercase tracking-widest rounded-sm shadow-[0_0_15px_rgba(6,182,212,0.4)]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                    </svg>
                    Initiate Login
                </a>
            @else
                <div class="flex flex-col gap-3">
                    <a href="{{ route('dashboard') }}"
                        class="flex items-center justify-center gap-3 w-full py-3 border border-cyan-500/50 bg-cyan-950/30 hover:bg-cyan-900/50 text-cyan-400 text-[11px] font-black uppercase tracking-widest rounded-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                        </svg>
                        Command Center
                    </a>
                    <form action="{{ route('logout') }}" method="POST" class="m-0">
                        @csrf
                        <button type="submit"
                            class="flex items-center justify-center gap-3 w-full py-3 bg-red-500/10 text-red-500 border border-red-500/30 text-[11px] font-black uppercase tracking-widest rounded-sm hover:bg-red-500 hover:text-white transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 16l4-4m0 0l-4-4m4 4H7" />
                            </svg>
                            Eject System
                        </button>
                    </form>
                </div>
            @endif
        </div>

        <div class="flex flex-col p-4 pt-6 gap-1 overflow-y-auto flex-1">
            <span
                class="mobile-sidebar-text px-4 text-[9px] font-mono text-slate-600 uppercase tracking-widest mb-2">System_Links</span>
            @foreach(['home', 'about', 'skills', 'projects', 'contact'] as $link)
                <a href="#{{ $link }}" @click="open = false"
                    class="mobile-sidebar-link group flex items-center justify-between py-3 px-4 rounded-sm text-[11px] font-mono uppercase tracking-[0.2em] text-slate-400 hover:text-cyan-400 hover:bg-white/5 transition-all duration-300">
                    <span><span class="text-cyan-900 group-hover:text-cyan-500 mr-2">></span>{{ $link }}</span>
                    <span
                        class="text-[8px] text-slate-800 group-hover:text-cyan-900 font-sans italic">0{{ $loop->iteration }}</span>
                </a>
            @endforeach
        </div>

        <div class="px-6 pb-4">
            <button onclick="toggleTheme()" @click="open = false"
                class="mobile-sidebar-link w-full py-3 bg-cyan-900/20 border border-cyan-500/30 text-cyan-400 font-mono text-[11px] uppercase tracking-widest rounded-sm hover:bg-cyan-900/40 transition-all flex items-center justify-center gap-2">
                <span class="theme-toggle-label font-bold">TOGGLE THEME</span>
            </button>
        </div>

        <div class="p-6 text-center">
            <p class="mobile-sidebar-text text-[8px] font-mono text-slate-700 uppercase tracking-widest">Protocol
                v.4.0.1 // Active</p>
        </div>
    </div>
</div>