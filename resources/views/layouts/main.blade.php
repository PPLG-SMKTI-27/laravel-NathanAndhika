<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      referrerpolicy="no-referrer" />

    <!-- Prevent flash of wrong theme -->
    <script>
        (function() {
            var theme = localStorage.getItem('portfolioTheme') || 'light';
            if (theme === 'light') {
                document.documentElement.classList.add('theme-light');
            }
        })();
    </script>

    <style>
        :root {
            --color-primary: #06b6d4;
            --color-secondary: #a855f7;
            --bg-dark: #020617;
        }

        .glow {
            box-shadow: 0 0 25px rgba(239,68,68,.5);
        }
        
        .space-btn:hover {
            box-shadow: 0 0 12px #22d3ee, 0 0 20px #a855f7;
        }

        /* --- GENERAL & SCROLLBAR --- */
        html, body { 
            overflow-x: hidden; 
            width: 100%; 
        }
        html { scroll-behavior: smooth; }
        
        * { 
            scrollbar-width: thin; 
            scrollbar-color: var(--color-primary) var(--bg-dark); 
        }
        ::-webkit-scrollbar { width: 10px; }
        ::-webkit-scrollbar-track { 
            background: var(--bg-dark); 
            border-left: 1px solid rgba(6, 182, 212, 0.1);
        }
        ::-webkit-scrollbar-thumb {
            background: linear-gradient(180deg, var(--color-primary), var(--color-secondary));
            border-radius: 999px; border: 2px solid var(--bg-dark); background-clip: content-box;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(180deg, #22d3ee, #c084fc);
        }

        /* --- CUSTOM ROCKET CURSOR --- */
        html, body {
            cursor: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 32 32'%3E%3Cg transform='rotate(-35 16 16)'%3E%3Cpath d='M16 2 C16 2 13 5 12 10 C11 15 11.5 20 12 22 L14 23 L18 23 L20 22 C20.5 20 21 15 20 10 C19 5 16 2 16 2Z' fill='%23e2e8f0' stroke='%2306b6d4' stroke-width='1'/%3E%3Cellipse cx='16' cy='12' rx='2' ry='2.5' fill='%2306b6d4'/%3E%3Cpath d='M12 18 Q9 19 8 22 L12 20Z' fill='%2306b6d4' opacity='0.7'/%3E%3Cpath d='M20 18 Q23 19 24 22 L20 20Z' fill='%2306b6d4' opacity='0.7'/%3E%3Cpath d='M14 23 L15 27 L16 25.5 L17 27 L18 23Z' fill='%23f97316'/%3E%3Cpath d='M14.8 23 L15.5 25.5 L16 24.5 L16.5 25.5 L17.2 23Z' fill='%23fbbf24'/%3E%3C/g%3E%3C/svg%3E") 4 2, auto;
        }
        a, button, [onclick], input[type="submit"], .cursor-pointer, [role="button"] {
            cursor: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 32 32'%3E%3Cg transform='rotate(-35 16 16)'%3E%3Cpath d='M16 2 C16 2 13 5 12 10 C11 15 11.5 20 12 22 L14 23 L18 23 L20 22 C20.5 20 21 15 20 10 C19 5 16 2 16 2Z' fill='%2306b6d4' stroke='%2322d3ee' stroke-width='1'/%3E%3Cellipse cx='16' cy='12' rx='2' ry='2.5' fill='%23ffffff'/%3E%3Cpath d='M12 18 Q9 19 8 22 L12 20Z' fill='%2322d3ee' opacity='0.8'/%3E%3Cpath d='M20 18 Q23 19 24 22 L20 20Z' fill='%2322d3ee' opacity='0.8'/%3E%3Cpath d='M14 23 L15 27 L16 25.5 L17 27 L18 23Z' fill='%23fbbf24'/%3E%3Cpath d='M14.8 23 L15.5 25.5 L16 24.5 L16.5 25.5 L17.2 23Z' fill='%23fde68a'/%3E%3C/g%3E%3C/svg%3E") 4 2, pointer;
        }

        /* --- TEXT SELECTION --- */
        ::selection {
            background: rgba(6, 182, 212, 0.3);
            color: #cffafe;
            text-shadow: 0 0 8px rgba(6, 182, 212, 0.8);
        }

        /* =============================================
           DARK THEME (DEFAULT - SPACE)
           ============================================= */

        /* Navbar */
        .navbar-bg { background: rgba(2, 6, 23, 0.85); backdrop-filter: blur(20px); -webkit-backdrop-filter: blur(20px); }
        .navbar-border { border-color: rgba(255,255,255,0.05); }
        .navbar-title { color: #fff; }
        .navbar-subtitle { color: #06b6d4; }
        .navbar-divider { border-color: rgba(255,255,255,0.1); }
        .nav-link-item { color: #94a3b8; }
        .nav-link-item:hover { color: #22d3ee; background: rgba(255,255,255,0.05); }
        .nav-link-slash { color: rgba(8,145,178,0.5); }

        /* Theme Toggle Button */
        .theme-toggle-btn {
            border: 1px solid rgba(255,255,255,0.1);
            background: rgba(15,23,42,0.8);
            color: #94a3b8;
        }
        .theme-toggle-btn:hover {
            border-color: rgba(6,182,212,0.5);
            background: rgba(8,145,178,0.2);
            color: #22d3ee;
        }
        .theme-icon-moon { opacity: 1; transform: rotate(0deg) scale(1); color: #fbbf24; }
        .theme-icon-sun { opacity: 0; transform: rotate(-90deg) scale(0.5); color: #94a3b8; }

        /* Mobile Sidebar */
        .mobile-sidebar-bg { background: #020617; }
        .mobile-sidebar-shadow { box-shadow: -20px 0 50px rgba(0,0,0,0.9); }
        .mobile-sidebar-border { border-color: rgba(255,255,255,0.05); }
        .mobile-sidebar-label { color: #475569; }
        .mobile-sidebar-link { color: #94a3b8; }
        .mobile-sidebar-link:hover { background: rgba(255,255,255,0.05); }
        .mobile-sidebar-link-num { color: #1e293b; }
        .mobile-sidebar-footer { color: #334155; }

        /* Theme Toggle Mobile */
        .theme-toggle-mobile { background: rgba(15,23,42,0.5); }
        .theme-toggle-mobile:hover { background: rgba(8,145,178,0.1); }
        .theme-toggle-label { color: #94a3b8; }
        .theme-icon-moon-mobile { display: block; color: #fbbf24; }
        .theme-icon-sun-mobile { display: none; color: #94a3b8; }
        .theme-toggle-track { background: #1e293b; border: 1px solid rgba(255,255,255,0.1); }
        .theme-toggle-dot { background: #06b6d4; left: 0.125rem; }

        /* Portfolio Page Sections */
        .portfolio-main-bg { background: #020617; color: #cbd5e1; }
        .portfolio-stars { opacity: 0.1; }
        .portfolio-nebula-1 { background: rgba(88,28,135,0.1); }
        .portfolio-nebula-2 { background: rgba(8,145,178,0.1); }
        .section-title { color: #fff; }
        .section-subtitle { color: #06b6d4; }
        .section-text { color: #94a3b8; }
        .section-border { border-color: rgba(255,255,255,0.05); }
        .card-bg { background: rgba(10,15,28,0.6); border-color: rgba(8,145,178,0.3); }
        .card-bg:hover { border-color: rgba(6,182,212,0.5); }
        .bio-card-bg { background: rgba(15,23,42,0.6); border-color: rgba(255,255,255,0.05); }
        .id-card-front { background: #0f172a; border-color: rgba(6,182,212,0.5); }
        .id-card-back { background: #0f172a; border-color: rgba(6,182,212,0.5); }

        /* Project Cards */
        .project-card-bg { background: rgba(15,23,42,0.4); border-color: rgba(255,255,255,0.05); }
        .project-card-bg:hover { border-color: rgba(6,182,212,0.3); }

        /* Contact Section */
        .contact-card-bg { background: rgba(15,23,42,0.4); border-color: rgba(255,255,255,0.1); }
        .contact-input-bg { background: rgba(2,6,23,0.5); border-color: rgba(255,255,255,0.1); color: #fff; }
        .contact-label { color: #475569; }

        /* Footer */
        .footer-bg { background: #020617; border-color: rgba(255,255,255,0.1); }
        .footer-text { color: #475569; }
        .footer-link { background: #0f172a; border-color: rgba(255,255,255,0.05); }
        .footer-link:hover { background: #1e293b; }
        .footer-copyright { color: #475569; }

        /* Music Player */
        .music-player-bg { 
            background: linear-gradient(to right, rgba(49,46,129,0.7), rgba(88,28,135,0.7), rgba(0,0,0,0.7));
            border-color: rgba(6,182,212,0.4);
        }
        .music-player-title { color: #67e8f9; }
        
        /* Vinyl Record Player */
        @keyframes vinylSpin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        .disc-spin {
            animation: vinylSpin 3s linear infinite;
        }
        .vinyl-glare {
            background: conic-gradient(
                from 45deg,
                rgba(255, 255, 255, 0) 0deg,
                rgba(255, 255, 255, 0.1) 20deg,
                rgba(255, 255, 255, 0) 40deg,
                rgba(255, 255, 255, 0) 130deg,
                rgba(255, 255, 255, 0.4) 160deg,
                rgba(255, 255, 255, 0) 190deg,
                rgba(255, 255, 255, 0) 270deg,
                rgba(255, 255, 255, 0.6) 310deg,
                rgba(255, 255, 255, 0) 340deg
            );
        }


        /* =============================================
           LIGHT THEME (SKY / CLOUD)
           ============================================= */

        .theme-light {
            --bg-dark: #e0f2fe;
        }

        .theme-light * {
            scrollbar-color: #0ea5e9 #e0f2fe;
        }
        .theme-light ::-webkit-scrollbar-track { background: #e0f2fe; border-left: 1px solid rgba(14,165,233,0.2); }
        .theme-light ::-webkit-scrollbar-thumb {
            background: linear-gradient(180deg, #0ea5e9, #6366f1);
            border: 2px solid #e0f2fe;
        }

        .theme-light ::selection {
            background: rgba(14,165,233,0.3);
            color: #0c4a6e;
            text-shadow: none;
        }

        /* Navbar - Light */
        .theme-light .navbar-bg { background: rgba(240,249,255,0.9); border-color: rgba(14,165,233,0.2); box-shadow: 0 8px 32px rgba(14,165,233,0.15), 0 0 15px rgba(14,165,233,0.1); }
        .theme-light .navbar-title { color: #0c4a6e; }
        .theme-light .navbar-subtitle { color: #0284c7; }
        .theme-light .navbar-divider { border-color: rgba(14,165,233,0.2); }
        .theme-light .nav-link-item { color: #475569; }
        .theme-light .nav-link-item:hover { color: #0284c7; background: rgba(14,165,233,0.08); }
        .theme-light .nav-link-slash { color: rgba(14,165,233,0.4); }

        /* Theme Toggle Button - Light */
        .theme-light .theme-toggle-btn {
            border: 1px solid rgba(14,165,233,0.2);
            background: rgba(224,242,254,0.8);
            color: #475569;
        }
        .theme-light .theme-toggle-btn:hover {
            border-color: rgba(14,165,233,0.5);
            background: rgba(14,165,233,0.15);
            color: #0284c7;
        }
        .theme-light .theme-icon-moon { opacity: 0; transform: rotate(90deg) scale(0.5); }
        .theme-light .theme-icon-sun { opacity: 1; transform: rotate(0deg) scale(1); color: #f59e0b; }

        /* Mobile Sidebar - Light */
        .theme-light .mobile-sidebar-bg { background: #f0f9ff; }
        .theme-light .mobile-sidebar-shadow { box-shadow: -20px 0 50px rgba(14,165,233,0.15); }
        .theme-light .mobile-sidebar-border { border-color: rgba(14,165,233,0.1); }
        .theme-light .mobile-sidebar-label { color: #64748b; }
        .theme-light .mobile-sidebar-link { color: #475569; }
        .theme-light .mobile-sidebar-link:hover { background: rgba(14,165,233,0.08); }
        .theme-light .mobile-sidebar-link-num { color: #94a3b8; }
        .theme-light .mobile-sidebar-footer { color: #94a3b8; }

        /* Theme Toggle Mobile - Light */
        .theme-light .theme-toggle-mobile { background: rgba(14,165,233,0.08); }
        .theme-light .theme-toggle-mobile:hover { background: rgba(14,165,233,0.15); }
        .theme-light .theme-toggle-label { color: #0284c7; }
        .theme-light .theme-icon-moon-mobile { display: none; }
        .theme-light .theme-icon-sun-mobile { display: block; color: #f59e0b; }
        .theme-light .theme-toggle-track { background: #bae6fd; border-color: rgba(14,165,233,0.3); }
        .theme-light .theme-toggle-dot { background: #0ea5e9; left: calc(100% - 1.125rem); }

        /* Portfolio Main - Light / Sky Theme */
        .theme-light body,
        .theme-light html {
            background-color: #bae6fd !important;
        }
        .theme-light .portfolio-main-bg {
            background: #bae6fd !important;
            color: #1e293b;
        }
        .theme-light .portfolio-stars {
            opacity: 0 !important;
        }
        /* Nebula: use simple opacity instead of heavy blur in light mode */
        .theme-light .portfolio-nebula-1 {
            background: rgba(255,255,255,0.4) !important;
            border-radius: 50%;
            filter: none !important;
            opacity: 0.6;
        }
        .theme-light .portfolio-nebula-2 {
            background: rgba(255,255,255,0.3) !important;
            border-radius: 50%;
            filter: none !important;
            opacity: 0.5;
        }

        /* Cloud elements for light theme - STATIC for performance */
        .theme-light .portfolio-main-bg::before {
            content: '';
            position: fixed;
            top: 0; left: 0; right: 0; bottom: 0;
            pointer-events: none;
            z-index: 0;
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1000 600'%3E%3Cg fill='white' opacity='0.85'%3E%3Cpath transform='translate(100, 100) scale(2)' d='M 46 24 C 46 16.2 39.7 10 32 10 C 25.6 10 20.2 14.3 18.4 20.2 C 18.1 20.2 17.7 20.2 17.4 20.2 C 10.6 20.2 5 25.8 5 32.6 C 5 39.4 10.6 45 17.4 45 L 46 45 C 51.5 45 56 40.5 56 35 C 56 29.5 51.5 25 46 24 Z'/%3E%3Cpath transform='translate(600, 200) scale(3)' d='M 46 24 C 46 16.2 39.7 10 32 10 C 25.6 10 20.2 14.3 18.4 20.2 C 18.1 20.2 17.7 20.2 17.4 20.2 C 10.6 20.2 5 25.8 5 32.6 C 5 39.4 10.6 45 17.4 45 L 46 45 C 51.5 45 56 40.5 56 35 C 56 29.5 51.5 25 46 24 Z'/%3E%3Cpath transform='translate(300, 400) scale(1.5)' d='M 46 24 C 46 16.2 39.7 10 32 10 C 25.6 10 20.2 14.3 18.4 20.2 C 18.1 20.2 17.7 20.2 17.4 20.2 C 10.6 20.2 5 25.8 5 32.6 C 5 39.4 10.6 45 17.4 45 L 46 45 C 51.5 45 56 40.5 56 35 C 56 29.5 51.5 25 46 24 Z'/%3E%3Cpath transform='translate(800, 50) scale(2.5)' d='M 46 24 C 46 16.2 39.7 10 32 10 C 25.6 10 20.2 14.3 18.4 20.2 C 18.1 20.2 17.7 20.2 17.4 20.2 C 10.6 20.2 5 25.8 5 32.6 C 5 39.4 10.6 45 17.4 45 L 46 45 C 51.5 45 56 40.5 56 35 C 56 29.5 51.5 25 46 24 Z'/%3E%3C/g%3E%3C/svg%3E");
            background-size: 100vw 100vh;
            background-repeat: no-repeat;
            will-change: auto;
        }

        .theme-light .portfolio-main-bg::after {
            content: '';
            position: fixed;
            top: 0; left: 0; right: 0; bottom: 0;
            pointer-events: none;
            z-index: 0;
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1000 600'%3E%3Cg fill='white' opacity='0.5'%3E%3Cpath transform='translate(50, 300) scale(1.8)' d='M 46 24 C 46 16.2 39.7 10 32 10 C 25.6 10 20.2 14.3 18.4 20.2 C 18.1 20.2 17.7 20.2 17.4 20.2 C 10.6 20.2 5 25.8 5 32.6 C 5 39.4 10.6 45 17.4 45 L 46 45 C 51.5 45 56 40.5 56 35 C 56 29.5 51.5 25 46 24 Z'/%3E%3Cpath transform='translate(500, 50) scale(2.2)' d='M 46 24 C 46 16.2 39.7 10 32 10 C 25.6 10 20.2 14.3 18.4 20.2 C 18.1 20.2 17.7 20.2 17.4 20.2 C 10.6 20.2 5 25.8 5 32.6 C 5 39.4 10.6 45 17.4 45 L 46 45 C 51.5 45 56 40.5 56 35 C 56 29.5 51.5 25 46 24 Z'/%3E%3Cpath transform='translate(850, 350) scale(3)' d='M 46 24 C 46 16.2 39.7 10 32 10 C 25.6 10 20.2 14.3 18.4 20.2 C 18.1 20.2 17.7 20.2 17.4 20.2 C 10.6 20.2 5 25.8 5 32.6 C 5 39.4 10.6 45 17.4 45 L 46 45 C 51.5 45 56 40.5 56 35 C 56 29.5 51.5 25 46 24 Z'/%3E%3C/g%3E%3C/svg%3E");
            background-size: 120vw 120vh;
            background-repeat: no-repeat;
            background-position: -10vw -10vh;
            will-change: auto;
        }

        /* Hide space elements in light theme */
        .theme-light .space-rockets,
        .theme-light .space-asteroids {
            display: none !important;
        }

        /* Show sky elements only in light theme */
        .main-sky-elements {
            display: none;
        }
        .theme-light .main-sky-elements {
            display: block !important;
        }

        /* Section titles - Light */
        .theme-light .section-title { color: #0284c7; }
        .theme-light .section-subtitle { color: #0284c7; }
        .theme-light .section-text { color: #475569; }
        .theme-light .section-border { border-color: rgba(14,165,233,0.15); }

        /* Typewriter text - Light (override Tailwind text-white) */
        .theme-light #typewriter-text-1,
        .theme-light #typewriter-text-1.text-white,
        .theme-light .portfolio-main-bg #typewriter-text-1 { 
            color: #0284c7 !important; 
            -webkit-text-fill-color: #0284c7 !important;
        }
        .theme-light #typewriter-text-2,
        .theme-light .portfolio-main-bg #typewriter-text-2 { 
            background-image: linear-gradient(to right, #0284c7, #6366f1) !important;
            -webkit-background-clip: text !important;
            -webkit-text-fill-color: transparent !important;
            background-clip: text !important;
        }
        .theme-light #cursor-1,
        .theme-light #cursor-2 { background: #0284c7 !important; }

        /* Global text overrides for portfolio in light theme */
        .theme-light .portfolio-main-bg .text-white { color: #0284c7 !important; }
        .theme-light .portfolio-main-bg .text-slate-200 { color: #334155 !important; }
        .theme-light .portfolio-main-bg .text-slate-300 { color: #475569 !important; }
        .theme-light .portfolio-main-bg .text-slate-400 { color: #64748b !important; }
        .theme-light .portfolio-main-bg .text-slate-500 { color: #64748b !important; }
        .theme-light .portfolio-main-bg .text-cyan-400 { color: #0284c7 !important; }
        .theme-light .portfolio-main-bg .text-cyan-500 { color: #0369a1 !important; }
        .theme-light .portfolio-main-bg .text-cyan-600 { color: #0e7490 !important; }
        .theme-light .portfolio-main-bg .text-cyan-700 { color: #0e7490 !important; }

        /* Section borders in light theme */
        .theme-light .portfolio-main-bg [class*="border-white"] { 
            border-color: rgba(14,165,233,0.15) !important; 
        }

        /* Section backgrounds - NO backdrop-filter for performance */
        .theme-light .portfolio-main-bg [class*="bg-slate-900"],
        .theme-light .portfolio-main-bg [class*="bg-slate-950"] {
            background: rgba(255,255,255,0.75) !important;
            backdrop-filter: none !important;
            -webkit-backdrop-filter: none !important;
        }
        .theme-light .portfolio-main-bg [class*="bg-[#0a0f1c]"] {
            background: rgba(255,255,255,0.75) !important;
        }
        .theme-light .portfolio-main-bg [class*="bg-slate-800"] {
            background: #bae6fd !important;
        }
        .theme-light .portfolio-main-bg [class*="bg-cyan-950"] {
            background: rgba(14,165,233,0.08) !important;
        }

        /* Scan line less visible in light mode */
        .theme-light .portfolio-main-bg .animate-scanLine {
            opacity: 0.3 !important;
        }

        /* Hero subtitle */
        .theme-light .hero-subtitle {
            color: #475569 !important;
            border-color: rgba(14,165,233,0.15) !important;
        }
        .theme-light .hero-subtitle span { color: rgba(14,165,233,0.5) !important; }

        /* Photo frame - Light */
        .theme-light .photo-glow {
            background: linear-gradient(to right, #0ea5e9, #6366f1, #8b5cf6) !important;
        }
        .theme-light .photo-frame {
            background: rgba(255,255,255,0.8) !important;
            border-color: rgba(14,165,233,0.2) !important;
            box-shadow: 0 0 30px rgba(14,165,233,0.2) !important;
        }
        .theme-light .photo-corner { border-color: #0284c7 !important; }

        /* ID Card - Light */
        .theme-light .id-card-front,
        .theme-light .id-card-back {
            background: rgba(255,255,255,0.85) !important;
            border-color: rgba(14,165,233,0.3) !important;
            box-shadow: 0 8px 32px rgba(14,165,233,0.15) !important;
        }
        .theme-light .id-card-front .text-white,
        .theme-light .id-card-back .text-white { color: #0284c7 !important; }
        .theme-light .id-card-front .bg-slate-900,
        .theme-light .id-card-front .bg-[#020617] { background: #e0f2fe !important; }
        .theme-light .id-card-grid { 
            background-image: linear-gradient(#0ea5e9 1px, transparent 1px), linear-gradient(90deg, #0ea5e9 1px, transparent 1px) !important;
        }

        /* Bio Card - Light */
        .theme-light .bio-card-bg {
            background: rgba(255,255,255,0.7) !important;
            border-color: rgba(14,165,233,0.15) !important;
            box-shadow: 0 8px 32px rgba(14,165,233,0.1) !important;
        }
        .theme-light .bio-card-bg .text-slate-300,
        .theme-light .bio-card-bg .text-lg { color: #334155 !important; }
        .theme-light .bio-card-bg .text-slate-400 { color: #64748b !important; }
        .theme-light .bio-card-bg .text-white { color: #0284c7 !important; }

        /* Skills Section - Light (no backdrop-filter for perf) */
        .theme-light .skill-card {
            background: rgba(255,255,255,0.8) !important;
            border-color: rgba(14,165,233,0.15) !important;
            backdrop-filter: none !important;
            -webkit-backdrop-filter: none !important;
        }
        .theme-light .skill-card:hover {
            border-color: rgba(14,165,233,0.4) !important;
            box-shadow: 0 8px 32px rgba(14,165,233,0.15) !important;
        }
        .theme-light .skill-card .text-slate-300 { color: #1e293b !important; }
        .theme-light .skill-card .bg-slate-900\\/80,
        .theme-light .skill-card .bg-slate-900 { background: #e0f2fe !important; }
        .theme-light .skill-card .bg-slate-800\\/80 { background: #bae6fd !important; }
        .theme-light .skill-card .text-slate-500 { color: #64748b !important; }
        .theme-light .skill-card .border-slate-800 { border-color: rgba(14,165,233,0.2) !important; }
        .theme-light .skill-icon-circle {
            background: #e0f2fe !important;
            border-color: rgba(14,165,233,0.2) !important;
        }

        /* Project Cards - Light */
        .theme-light .project-card-bg,
        .theme-light #projects .group {
            background: rgba(255,255,255,0.7) !important;
            border-color: rgba(14,165,233,0.15) !important;
        }
        .theme-light #projects .group:hover {
            border-color: rgba(14,165,233,0.4) !important;
            box-shadow: 0 8px 32px rgba(14,165,233,0.15) !important;
        }
        .theme-light #projects .group .text-white { color: #0284c7 !important; }
        .theme-light #projects .group .text-slate-400 { color: #64748b !important; }
        .theme-light .view-project-btn { background: #e0f2fe !important; border-color: rgba(14,165,233,0.3) !important; color: #0284c7 !important; }
        .theme-light .view-project-btn:hover { background: #0ea5e9 !important; color: #ffffff !important; }

        /* Contact Section - Light */
        .theme-light #contact [class*="bg-slate-900"],
        .theme-light #contact [class*="bg-slate-950"] {
            background: rgba(255,255,255,0.7) !important;
            border-color: rgba(14,165,233,0.15) !important;
        }
        .theme-light #contact input,
        .theme-light #contact textarea {
            background: rgba(224,242,254,0.6) !important;
            border-color: rgba(14,165,233,0.2) !important;
            color: #1e293b !important;
        }
        .theme-light #contact input::placeholder,
        .theme-light #contact textarea::placeholder { color: #94a3b8 !important; }
        .theme-light #contact .text-white { color: #0284c7 !important; }
        .theme-light #contact .text-slate-400 { color: #64748b !important; }
        .theme-light #contact .text-slate-300 { color: #475569 !important; }
        .theme-light #contact .text-slate-500 { color: #64748b !important; }
        .theme-light #contact [class*="border-white"] { border-color: rgba(14,165,233,0.15) !important; }
        .theme-light .contact-label { color: #64748b; }

        /* Footer - Light */
        .theme-light .footer-bg,
        .theme-light footer {
            background: #dbeafe !important;
            border-color: rgba(14,165,233,0.2) !important;
        }
        .theme-light footer .text-white { color: #0284c7 !important; }
        .theme-light footer .text-cyan-400 { color: #0284c7 !important; }
        .theme-light footer .text-slate-300 { color: #334155 !important; }
        .theme-light footer .text-slate-400 { color: #64748b !important; }
        .theme-light footer .text-slate-500 { color: #64748b !important; }
        .theme-light footer .text-slate-700 { color: #94a3b8 !important; }
        .theme-light footer .bg-slate-900 {
            background: rgba(255,255,255,0.7) !important;
            border-color: rgba(14,165,233,0.15) !important;
        }
        .theme-light footer .bg-slate-900:hover { background: rgba(14,165,233,0.1) !important; }
        .theme-light footer .via-cyan-500 { 
            background: linear-gradient(to right, transparent, #0ea5e9, transparent) !important; 
        }

        /* Modal - Light */
        .theme-light #projectModal { background: rgba(224,242,254,0.9) !important; }
        .theme-light #projectModalContent {
            background: rgba(255,255,255,0.95) !important;
            border-color: rgba(14,165,233,0.3) !important;
            box-shadow: 0 0 50px rgba(14,165,233,0.2) !important;
        }
        .theme-light #projectModalContent .text-white { color: #0284c7 !important; }
        .theme-light #projectModalContent .text-slate-300 { color: #475569 !important; }
        .theme-light #projectModalContent .text-slate-400 { color: #64748b !important; }
        .theme-light #projectModalContent .text-slate-500 { color: #94a3b8 !important; }
        .theme-light #projectModalContent .text-slate-600 { color: #94a3b8 !important; }
        .theme-light #projectModalContent .text-cyan-400 { color: #0284c7 !important; }
        .theme-light #projectModalContent .text-cyan-500 { color: #0369a1 !important; }
        
        /* Modal Backgrounds */
        .theme-light #projectModalContent .bg-slate-900,
        .theme-light #projectModalContent .bg-\[\#0f172a\]\/95 { background: rgba(255,255,255,0.95) !important; }
        .theme-light #projectModalContent .bg-slate-800 { background: #f0f9ff !important; }
        .theme-light #projectModalContent .bg-slate-950,
        .theme-light #projectModalContent .bg-slate-900\/50 { background: rgba(240,249,255,0.8) !important; border-color: rgba(14,165,233,0.15) !important; }
        
        .theme-light #projectModalContent .bg-cyan-950,
        .theme-light #projectModalContent .bg-cyan-950\/50,
        .theme-light #projectModalContent .bg-cyan-950\/40 { background: rgba(14,165,233,0.08) !important; border-color: rgba(14,165,233,0.2) !important; }
        
        /* Interactive elements / specific buttons */
        .theme-light #projectModalContent #modalRepoBtn { 
            background: #e0f2fe !important; 
            border-color: rgba(14,165,233,0.2) !important; 
            color: #0284c7 !important; 
        }
        .theme-light #projectModalContent #modalRepoBtn:hover { 
            background: #0ea5e9 !important; 
            color: white !important; 
        }
        .theme-light #projectModalContent .bg-slate-900\/80 { 
            background: rgba(240,249,255,0.8) !important; 
            border-color: rgba(14,165,233,0.2) !important; 
        }
        .theme-light #projectModalContent .bg-slate-900\/80:hover { 
            background: #e0f2fe !important; 
        }
        
        /* Borders and Dividers */
        .theme-light #projectModalContent .border-white\/5,
        .theme-light #projectModalContent .border-white\/10,
        .theme-light #projectModalContent .border-slate-700,
        .theme-light #projectModalContent .border-slate-600 { border-color: rgba(14,165,233,0.2) !important; }
        
        .theme-light #projectModalContent .border-cyan-800,
        .theme-light #projectModalContent .border-cyan-900 { border-color: rgba(14,165,233,0.3) !important; }
        .theme-light #projectModalContent .border-cyan-400 { border-color: #0284c7 !important; }
        
        .theme-light #projectModalContent .bg-cyan-900,
        .theme-light #projectModalContent .bg-cyan-900\/30,
        .theme-light #projectModalContent .bg-cyan-900\/50 { background-color: rgba(14,165,233,0.2) !important; }
        
        /* Shadow Overrides */
        .theme-light #projectModalContent .shadow-\[inset_0_0_20px_rgba\(0\,0\,0\,0\.5\)\] {
            box-shadow: inset 0 0 20px rgba(14,165,233,0.08) !important;
        }
        .theme-light #projectModalContent #modalProgressBar {
            background-color: #0ea5e9 !important;
            box-shadow: 0 0 15px rgba(14,165,233,0.4) !important;
        }
        .theme-light #projectModalContent .shadow-\[0_0_10px_rgba\(6\,182\,212\,0\.1\)\] {
            box-shadow: 0 0 10px rgba(14,165,233,0.15) !important;
        }
        
        /* Special cases */
        .theme-light #projectModalContent .from-slate-900 { 
            background: linear-gradient(to right, rgba(240,249,255,0.9), rgba(224,242,254,0.9), rgba(240,249,255,0.9)) !important; 
            border-bottom-color: rgba(14,165,233,0.2) !important;
        }
        .theme-light #projectModalContent img[src="astronot.png"] { 
            mix-blend-mode: multiply !important; 
            filter: grayscale(1) opacity(0.3) !important; 
        }
        .theme-light #modalScreenshotContainer .bg-\[\#1a1a1a\] { 
            background: rgba(224,242,254,0.5) !important; 
            border-color: rgba(14,165,233,0.2) !important; 
        }
        .theme-light .modal-stars { background-image: radial-gradient(rgba(14,165,233,0.3) 1px, transparent 0) !important; }
        .theme-light #projectModalContent .animate-scanLine { opacity: 0.2 !important; }

        /* Music Player - Light */
        .theme-light .music-player-bg {
            background: rgba(255,255,255,0.9) !important;
            border-color: rgba(14,165,233,0.3) !important;
            box-shadow: 0 4px 20px rgba(14,165,233,0.15) !important;
            backdrop-filter: none !important;
            -webkit-backdrop-filter: none !important;
        }
        .theme-light .music-player-title,
        .theme-light #songTitle { color: #0284c7 !important; }
        .theme-light .space-btn { color: #0284c7 !important; }

        /* Intro overlay stays dark always */
        .theme-light .animate-introOverlay { background: #020617 !important; }

        /* === GLOBAL LIGHT MODE PERFORMANCE === */
        /* Disable all backdrop-blur effects in light mode for smooth scrolling */
        .theme-light .backdrop-blur-sm,
        .theme-light .backdrop-blur-md,
        .theme-light .backdrop-blur-xl,
        .theme-light .backdrop-blur {
            backdrop-filter: none !important;
            -webkit-backdrop-filter: none !important;
        }
        .theme-light .navbar-bg {
            background: rgba(240,249,255,0.95) !important;
            backdrop-filter: none !important;
            -webkit-backdrop-filter: none !important;
            border-color: rgba(14,165,233,0.25) !important;
        }
        /* Photo frame: solid bg */
        .theme-light .photo-frame {
            backdrop-filter: none !important;
            -webkit-backdrop-filter: none !important;
        }
        /* Bio card: solid bg */
        .theme-light .bio-card-bg {
            backdrop-filter: none !important;
            -webkit-backdrop-filter: none !important;
        }
        /* Force GPU compositing on scrollable content */
        .theme-light .portfolio-main-bg {
            transform: translateZ(0);
            -webkit-transform: translateZ(0);
        }

        /* Floating cloud animation for light theme */
        @keyframes driftClouds {
            0% { background-position: 0% 0%; }
            100% { background-position: 100% 100%; }
        }
        @keyframes driftClouds2 {
            0% { background-position: 100% 100%; }
            100% { background-position: 0% 0%; }
        }

        /* Transition for smooth theme change */ 
        html.theme-transitioning,
        html.theme-transitioning *,
        html.theme-transitioning *::before,
        html.theme-transitioning *::after {
            transition: background-color 0.6s ease, color 0.4s ease, border-color 0.5s ease, box-shadow 0.5s ease, opacity 0.5s ease !important;
        }
    </style>
</head>
<body class="bg-[#0f0f0f] text-gray-200 scroll-smooth">
    {{-- @include('layouts.navigation') --}}
  @if (session('success'))
    <div
        id="success-alert"
        class="fixed top-20 right-20 z-50
            flex items-center gap-3
            px-4 py-3
            max-w-sm
            rounded-xl
            bg-green-500/90 text-white
            shadow-lg backdrop-blur
            text-sm
            animate-slide-in">
        <span class="font-medium">
            {{ session('success') }}
        </span>

        <button
            onclick="closeAlert()"
            class="ml-auto text-white/80 hover:text-white">
            ✕
        </button>
    </div>

    <script>
        const alertEl = document.getElementById('success-alert');

        function closeAlert() {
            alertEl.classList.add('opacity-0', 'translate-x-4');
            setTimeout(() => alertEl.remove(), 300);
        }

        setTimeout(closeAlert, 3000);
    </script>

    <style>
    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateX(16px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .animate-slide-in {
        animation: slideIn 0.4s ease-out;
    }
    </style>
    @endif
    <div class="w-full min-h-screen">
    @yield('content')
</div>
    <script src="https://unpkg.com/alpinejs" defer></script>
    @yield('script')

    {{-- (---Lagu---) --}}
<audio id="bgMusic" loop></audio>

<div class="music-player-bg fixed bottom-6 right-6 z-50 flex items-center justify-center p-2 rounded-full border border-cyan-800/80 shadow-[0_0_15px_rgba(34,211,238,0.3)] cursor-pointer hover:scale-110 transition-all duration-300 group" onclick="toggleMusic()" title="Play/Pause Music">
    <!-- Spinning Disc -->
    <div id="musicDisc" class="w-14 h-14 rounded-full flex items-center justify-center relative shadow-lg transition-transform duration-300" style="background-color: #000 !important;">
        
        <!-- Teks melingkar -->
        <div class="absolute inset-0 pointer-events-none flex items-center justify-center">
            <svg viewBox="0 0 100 100" class="w-[80%] h-[80%]">
                <path id="textCircle" d="M 50,50 m -36,0 a 36,36 0 1,1 72,0 a 36,36 0 1,1 -72,0" fill="transparent" />
                <text class="text-[14px] font-mono font-bold tracking-[0.3em] uppercase" fill="rgba(255,255,255,0.6)">
                    <textPath href="#textCircle" startOffset="25%" text-anchor="middle">
                        Sound
                    </textPath>
                </text>
            </svg>
        </div>
        
        <!-- Center label (warna putih kecil) -->
        <div class="w-4 h-4 rounded-full bg-white flex items-center justify-center relative shadow-sm">
            <!-- Titik hitam kecil di pinggir agar putarannya tetap terlihat jelas -->
            <div class="absolute top-[2px] right-[2px] w-[3px] h-[3px] bg-black rounded-full"></div>
        </div>

    </div>
</div>

<script>

let music = document.getElementById("bgMusic");
let musicDisc = document.getElementById("musicDisc");

let songs = [
{
src: "/audio/music.mp3"
}
];

let currentSong = 0;

function loadSong(){

music.src = songs[currentSong].src;

}

if(music) {
    music.addEventListener('play', () => {
        if(musicDisc) musicDisc.classList.add('disc-spin');
    });

    music.addEventListener('pause', () => {
        if(musicDisc) musicDisc.classList.remove('disc-spin');
    });
}

loadSong();

function toggleMusic(){

if(music.paused){
music.play();
localStorage.setItem("musicPlaying","true");
}else{
music.pause();
localStorage.setItem("musicPlaying","false");
}

}



/* autoplay jika sebelumnya play */

if(localStorage.getItem("musicPlaying") === "true"){
music.play();
}

</script>

<!-- Theme Toggle Script -->
<script>
function toggleTheme() {
    const html = document.documentElement;
    html.classList.add('theme-transitioning');
    
    const isCurrentlyLight = html.classList.contains('theme-light');
    
    if (isCurrentlyLight) {
        html.classList.remove('theme-light');
        localStorage.setItem('portfolioTheme', 'dark');
        updateThemeLabels('dark');
    } else {
        html.classList.add('theme-light');
        localStorage.setItem('portfolioTheme', 'light');
        updateThemeLabels('light');
    }
    
    setTimeout(() => {
        html.classList.remove('theme-transitioning');
    }, 700);
}

function updateThemeLabels(theme) {
    const labels = document.querySelectorAll('.theme-toggle-label');
    labels.forEach(label => {
        label.textContent = theme === 'light' ? 'Sky Mode' : 'Space Mode';
    });
}

// Initialize labels on load
document.addEventListener('DOMContentLoaded', () => {
    const theme = localStorage.getItem('portfolioTheme') || 'light';
    updateThemeLabels(theme);
});
</script>
</body>
</html>