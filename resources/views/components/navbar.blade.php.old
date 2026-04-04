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
        pointer-events: none; /* Allow clicks to pass through to elements like music player */
    }
    .bottom-nav-inner {
        pointer-events: auto; /* Catch clicks for the actual buttons */
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

    /* Active State */
    .bottom-nav-item.active {
        background: rgba(6, 182, 212, 0.12);
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
    /* Active dot indicator */
    .bottom-nav-item.active::after {
        content: '';
        position: absolute;
        bottom: 4px;
        left: 50%;
        transform: translateX(-50%);
        width: 4px;
        height: 4px;
        border-radius: 50%;
        background: #22d3ee;
        box-shadow: 0 0 8px rgba(34, 211, 238, 0.6);
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
        background: rgba(14, 165, 233, 0.1);
    }
    .theme-light .bottom-nav-item.active i {
        color: #0284c7;
        filter: drop-shadow(0 0 4px rgba(2, 132, 199, 0.3));
    }
    .theme-light .bottom-nav-item.active span {
        color: #0284c7;
    }
    .theme-light .bottom-nav-item.active::after {
        background: #0284c7;
        box-shadow: 0 0 6px rgba(2, 132, 199, 0.4);
    }
    .theme-light .bottom-nav-theme {
        background: rgba(14, 165, 233, 0.06);
        border-color: rgba(14, 165, 233, 0.1);
    }
    .theme-light .bottom-nav-theme:hover {
        background: rgba(14, 165, 233, 0.12);
    }
</style>

<nav class="bottom-nav" id="bottomNavBar" style="display: none; opacity: 0; transform: translateY(50px);">
    <div class="bottom-nav-inner">

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
            <div style="position: relative; width: 18px; height: 18px; display: flex; align-items: center; justify-content: center;">
                <i class="fa-solid fa-moon theme-icon-moon-nav" style="position:absolute; transition: all 0.5s;"></i>
                <i class="fa-solid fa-sun theme-icon-sun-nav" style="position:absolute; opacity:0; transform: rotate(90deg) scale(0.5); transition: all 0.5s;"></i>
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
document.addEventListener('DOMContentLoaded', function() {
    const navItems = document.querySelectorAll('.bottom-nav-item[data-nav]');
    const sections = {};

    // Collect section elements
    navItems.forEach(item => {
        const id = item.getAttribute('data-nav');
        const section = document.getElementById(id);
        if (section) sections[id] = section;
    });

    // Click handler - set active
    navItems.forEach(item => {
        item.addEventListener('click', function() {
            navItems.forEach(n => n.classList.remove('active'));
            this.classList.add('active');
        });
    });

    // Scroll spy - highlight active section
    let ticking = false;
    window.addEventListener('scroll', function() {
        if (!ticking) {
            window.requestAnimationFrame(function() {
                let current = 'home';
                const scrollY = window.scrollY + window.innerHeight / 2;

                for (const [id, section] of Object.entries(sections)) {
                    if (section.offsetTop <= scrollY) {
                        current = id;
                    }
                }

                navItems.forEach(item => {
                    item.classList.toggle('active', item.getAttribute('data-nav') === current);
                });
                ticking = false;
            });
            ticking = true;
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
});
</script>