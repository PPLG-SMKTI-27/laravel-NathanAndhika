@extends('layouts.main')
@section('title', 'Nathan | Mission Commander')
@section('content')

    {{-- ============ DARK MODE INTRO (Space - Rocket & Moon) ============ --}}
    <div id="intro-dark"
        class="fixed inset-0 bg-[#020617] flex flex-col items-center justify-center z-[10001] pointer-events-none animate-introOverlay overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute animate-asteroidDrift1" style="top: -10%; left: 20%;">
                <svg class="w-16 h-16 text-slate-700/40" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2l6 4 4 8-3 8-10 2-7-5L2 10l5-6z" />
                </svg>
            </div>
            <div class="absolute animate-asteroidDrift2" style="bottom: 20%; right: -10%;">
                <svg class="w-8 h-8 text-slate-600/30" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M10 2l8 2 4 10-5 8-9 1-6-6 1-10z" />
                </svg>
            </div>
        </div>

        <div class="text-center z-10 flex flex-col items-center">

            <div class="relative w-[400px] h-[400px] mb-6 flex items-center justify-center">

                <div
                    class="absolute w-64 h-64 bg-slate-200 rounded-full shadow-[0_0_80px_rgba(255,255,255,0.15)] animate-moonDestroy flex items-center justify-center overflow-hidden">
                    <div
                        class="absolute top-8 left-12 w-16 h-16 bg-slate-300 rounded-full shadow-[inset_4px_4px_8px_rgba(0,0,0,0.1)]">
                    </div>
                    <div
                        class="absolute bottom-12 right-16 w-12 h-12 bg-slate-300 rounded-full shadow-[inset_3px_3px_6px_rgba(0,0,0,0.1)]">
                    </div>
                    <div
                        class="absolute top-24 right-12 w-8 h-8 bg-slate-300 rounded-full shadow-[inset_2px_2px_4px_rgba(0,0,0,0.1)]">
                    </div>
                    <div
                        class="absolute bottom-20 left-10 w-10 h-10 bg-slate-300 rounded-full shadow-[inset_2px_2px_4px_rgba(0,0,0,0.1)]">
                    </div>
                </div>

                <div class="absolute animate-rocketKamikaze z-20">
                    <svg class="w-24 h-24 text-cyan-400 drop-shadow-[0_0_20px_rgba(6,182,212,0.9)]" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            d="M13.139 2.139a1.933 1.933 0 00-2.278 0 16.324 16.324 0 00-4.012 5.258 1.127 1.127 0 00.3 1.362l.83.693a1.127 1.127 0 01.3 1.362 16.324 16.324 0 00-1.446 6.307 1.127 1.127 0 001.127 1.127h2.08a.376.376 0 01.376.376v2.871a.752.752 0 001.284.532l1.625-1.625a.752.752 0 00.22-.532V18.63a.376.376 0 01.376-.376h2.08a1.127 1.127 0 001.127-1.127 16.324 16.324 0 00-1.446-6.307 1.127 1.127 0 01.3-1.362l.83-.693a1.127 1.127 0 00.3-1.362 16.324 16.324 0 00-4.012-5.258zM12 11.25a1.875 1.875 0 110-3.75 1.875 1.875 0 010 3.75z" />
                    </svg>
                </div>

                <div
                    class="absolute w-8 h-8 bg-white rounded-full shadow-[0_0_250px_100px_rgba(6,182,212,1)] animate-explosionFlash z-10 opacity-0">
                </div>

                <div
                    class="absolute w-12 h-12 border-4 border-cyan-400 rounded-full animate-shockwave z-10 opacity-0 shadow-[0_0_50px_rgba(6,182,212,0.8)]">
                </div>

                <div class="absolute inset-0 z-10">
                    <div class="w-12 h-12 bg-slate-300 rounded-sm absolute top-1/2 left-1/2 animate-debris1 opacity-0">
                    </div>
                    <div class="w-8 h-10 bg-slate-200 rounded-md absolute top-1/2 left-1/2 animate-debris2 opacity-0"></div>
                    <div class="w-10 h-8 bg-slate-400 rounded-sm absolute top-1/2 left-1/2 animate-debris3 opacity-0"></div>
                    <div class="w-16 h-16 bg-slate-300 rounded-full absolute top-1/2 left-1/2 animate-debris4 opacity-0">
                    </div>
                    <div class="w-6 h-6 bg-slate-200 rounded-sm absolute top-1/2 left-1/2 animate-debris5 opacity-0"></div>
                    <div class="w-14 h-14 bg-slate-400 rounded-full absolute top-1/2 left-1/2 animate-debris6 opacity-0">
                    </div>
                </div>

            </div>

            <h1
                class="absolute text-white text-5xl md:text-7xl font-black tracking-tighter animate-textReveal flex flex-col items-center justify-center gap-4 z-30">
                <div
                    class="w-20 h-20 md:w-28 md:h-28 rounded-full border-2 border-cyan-400 p-1 overflow-hidden shadow-[0_0_20px_rgba(6,182,212,0.5)] bg-slate-900">
                    <img src="astronot.png" alt="Astronaut"
                        class="w-full h-full object-cover rounded-full grayscale opacity-90 hover:grayscale-0 hover:opacity-100 transition-all duration-500">
                </div>
                <span>HELLO</span>
                <span class="text-cyan-500 mt-2">EVERYBODY</span>
            </h1>
            <div class="mt-4 flex items-center justify-center gap-2 animate-textReveal">
                <div class="h-px w-12 bg-cyan-900"></div>
                <span class="font-mono text-[10px] text-cyan-400 tracking-[0.4em] uppercase">System Boot Sequence...</span>
                <div class="h-px w-12 bg-cyan-900"></div>
            </div>
        </div>
    </div>

    {{-- ============ LIGHT MODE INTRO (Sky - Airplane) ============ --}}
    <div id="intro-light"
        class="fixed inset-0 flex flex-col items-center justify-center z-[10001] pointer-events-none overflow-hidden"
        style="display: none;">

        {{-- Sky gradient background --}}
        <div class="absolute inset-0 z-0"
            style="background: linear-gradient(180deg, #38bdf8 0%, #7dd3fc 30%, #bae6fd 60%, #e0f2fe 100%);">
        </div>

        {{-- Animated sun --}}
        <div class="absolute z-[1] light-intro-sun" style="top: 8%; right: 12%;">
            <div
                class="w-28 h-28 md:w-36 md:h-36 rounded-full bg-yellow-300 shadow-[0_0_80px_30px_rgba(253,224,71,0.6),0_0_120px_60px_rgba(253,224,71,0.3)]">
            </div>
            {{-- Sun rays --}}
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="w-40 h-40 md:w-52 md:h-52 rounded-full border-2 border-yellow-300/30 animate-ping"
                    style="animation-duration: 3s;"></div>
            </div>
        </div>

        {{-- Floating clouds layer (hanya di bagian atas dan bergerak lambat secara acak) --}}
        <div class="absolute inset-0 z-[2] overflow-hidden">
            <style>
                @keyframes randomFloat1 {
                    0% {
                        transform: translate(-10px, 5px) scale(0.95);
                    }

                    50% {
                        transform: translate(30px, -15px) scale(1.05);
                    }

                    100% {
                        transform: translate(50px, 15px) scale(1.0);
                    }
                }

                @keyframes randomFloat2 {
                    0% {
                        transform: translate(20px, -15px) scale(1.05);
                    }

                    50% {
                        transform: translate(-25px, 15px) scale(0.98);
                    }

                    100% {
                        transform: translate(-40px, -5px) scale(1.0);
                    }
                }

                @keyframes randomFloat3 {
                    0% {
                        transform: translate(10px, 15px);
                    }

                    50% {
                        transform: translate(-30px, -20px) scale(1.08);
                    }

                    100% {
                        transform: translate(15px, 5px) scale(0.95);
                    }
                }

                @keyframes randomFloat4 {
                    0% {
                        transform: translate(-20px, -10px) scale(1.0);
                    }

                    50% {
                        transform: translate(40px, 20px) scale(1.05);
                    }

                    100% {
                        transform: translate(-10px, -15px) scale(0.9);
                    }
                }
            </style>

            {{-- Cloud 1 --}}
            <svg class="light-intro-cloud1 absolute"
                style="top: 5%; left: 0%; animation: randomFloat1 9s ease-in-out forwards;" width="220" height="100"
                viewBox="0 0 220 100">
                <g fill="white" opacity="0.9">
                    <ellipse cx="70" cy="60" rx="70" ry="35" />
                    <ellipse cx="120" cy="50" rx="50" ry="30" />
                    <ellipse cx="160" cy="60" rx="45" ry="28" />
                    <ellipse cx="95" cy="42" rx="40" ry="30" />
                </g>
            </svg>
            {{-- Cloud 2 --}}
            <svg class="light-intro-cloud2 absolute"
                style="top: 10%; right: 5%; animation: randomFloat2 8s ease-in-out forwards;" width="180" height="80"
                viewBox="0 0 180 80">
                <g fill="white" opacity="0.7">
                    <ellipse cx="60" cy="45" rx="55" ry="28" />
                    <ellipse cx="110" cy="38" rx="45" ry="25" />
                    <ellipse cx="140" cy="48" rx="35" ry="22" />
                </g>
            </svg>
            {{-- Cloud 3 --}}
            <svg class="light-intro-cloud3 absolute"
                style="top: 15%; left: 35%; animation: randomFloat3 7s ease-in-out forwards;" width="120" height="60"
                viewBox="0 0 120 60">
                <g fill="white" opacity="0.6">
                    <ellipse cx="40" cy="35" rx="35" ry="20" />
                    <ellipse cx="75" cy="30" rx="30" ry="18" />
                    <ellipse cx="55" cy="25" rx="25" ry="18" />
                </g>
            </svg>
            {{-- Cloud 4 --}}
            <svg class="light-intro-cloud4 absolute"
                style="top: 8%; right: 35%; animation: randomFloat4 10s ease-in-out forwards;" width="160" height="70"
                viewBox="0 0 160 70">
                <g fill="white" opacity="0.8">
                    <ellipse cx="50" cy="40" rx="45" ry="25" />
                    <ellipse cx="100" cy="35" rx="40" ry="22" />
                    <ellipse cx="130" cy="42" rx="30" ry="20" />
                </g>
            </svg>
        </div>

        {{-- Airplane + Banner container --}}
        <div class="absolute inset-0 z-[5] overflow-hidden">

            {{-- Contrail / vapor trail --}}
            <div class="light-intro-contrail absolute" style="top: 46%; left: 0; width: 100%; height: 4px;">
                <div class="h-full rounded-full"
                    style="background: linear-gradient(90deg, transparent 0%, rgba(255,255,255,0.6) 30%, rgba(255,255,255,0.9) 60%, transparent 100%); filter: blur(2px);">
                </div>
            </div>

            {{-- Airplane SVG (flies full left-to-right) --}}
            <div class="light-intro-plane absolute" style="top: 35%; left: -150px;">
                <svg width="180" height="80" viewBox="0 0 160 60" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="drop-shadow-[0_8px_15px_rgba(0,0,0,0.15)]">
                    <!-- Right Wing (Back) -->
                    <path d="M 60 28 L 45 15 L 65 15 L 80 28 Z" fill="#cbd5e1" />
                    <rect x="52" y="22" width="12" height="5" rx="2" fill="#94a3b8" />

                    <!-- Fuselage (Body) -->
                    <path
                        d="M 20 30 C 15 25, 40 22, 110 22 C 135 22, 145 28, 145 30 C 145 34, 135 38, 110 38 L 20 38 C 15 38, 15 30, 20 30 Z"
                        fill="#ffffff" />
                    <!-- Shading on bottom of fuselage -->
                    <path
                        d="M 20 34 L 110 34 C 135 34, 145 32, 145 30 C 145 34, 135 38, 110 38 L 20 38 C 15 38, 15 34, 20 34 Z"
                        fill="#e2e8f0" />

                    <!-- Tail -->
                    <path d="M 20 25 L 10 5 L 35 15 L 42 23 Z" fill="#0ea5e9" />
                    <path d="M 25 24 L 20 18 L 35 20 Z" fill="#bae6fd" opacity="0.5" />
                    <!-- Horizontal Stabilizer (tail wing) -->
                    <path d="M 25 32 L 15 25 L 28 25 L 35 32 Z" fill="#f1f5f9" stroke="#cbd5e1" stroke-width="0.5" />

                    <!-- Left Wing (Front) -->
                    <path d="M 65 35 L 45 55 L 75 55 L 90 35 Z" fill="#f8fafc" stroke="#e2e8f0" stroke-width="1" />
                    <!-- Left Engine -->
                    <rect x="65" y="38" width="16" height="8" rx="4" fill="#64748b" />
                    <circle cx="81" cy="42" r="3.5" fill="#334155" />
                    <!-- Wingtip -->
                    <path d="M 72 55 L 75 48 L 76 55 Z" fill="#0ea5e9" />

                    <!-- Details & Trim -->
                    <!-- Blue Stripe -->
                    <line x1="20" y1="32" x2="135" y2="32" stroke="#0ea5e9" stroke-width="1.5" />
                    <!-- Cockpit -->
                    <path d="M 125 24 C 130 24, 135 26, 137 28 L 125 28 Z" fill="#1e293b" />
                    <!-- Passenger Windows -->
                    <circle cx="110" cy="28" r="1.5" fill="#475569" />
                    <circle cx="100" cy="28" r="1.5" fill="#475569" />
                    <circle cx="90" cy="28" r="1.5" fill="#475569" />
                    <circle cx="80" cy="28" r="1.5" fill="#475569" />
                    <circle cx="70" cy="28" r="1.5" fill="#475569" />
                    <circle cx="60" cy="28" r="1.5" fill="#475569" />
                    <circle cx="50" cy="28" r="1.5" fill="#475569" />

                    <!-- Nose cone line -->
                    <path d="M 142 27 C 141 29, 141 33, 142 35" stroke="#cbd5e1" stroke-width="0.5" fill="none" />
                </svg>
            </div>
        </div>

        {{-- Text "HELLO EVERYBODY" appears behind the plane at center --}}
        <div class="absolute inset-0 z-[4] flex flex-col items-center justify-center">
            <div class="light-intro-text opacity-0 flex flex-col items-center gap-2">
                <h1
                    class="text-6xl md:text-9xl font-black tracking-tight text-sky-700 drop-shadow-[0_3px_15px_rgba(14,165,233,0.3)] leading-none">
                    HELLO
                </h1>
                <h1 class="text-6xl md:text-9xl font-black tracking-tight leading-none">
                    <span class="text-transparent bg-clip-text"
                        style="background-image: linear-gradient(90deg, #0284c7, #6366f1, #8b5cf6);">EVERYBODY</span>
                </h1>
                <div class="light-intro-subtitle mt-4 flex items-center justify-center gap-3 opacity-0">
                    <div class="h-[2px] w-16 bg-gradient-to-r from-transparent to-sky-400"></div>
                    <span class="font-mono text-xs text-sky-500 tracking-[0.5em] uppercase">Welcome Aboard</span>
                    <div class="h-[2px] w-16 bg-gradient-to-l from-transparent to-sky-400"></div>
                </div>
            </div>
        </div>
    </div>

    {{-- Intro Theme Switch Script --}}
    {{-- Intro Theme Switch Script --}}
    <script>
        (function () {
            var theme = localStorage.getItem('portfolioTheme') || 'light';
            var darkIntro = document.getElementById('intro-dark');
            var lightIntro = document.getElementById('intro-light');

            if (theme === 'light') {
                darkIntro.style.display = 'none';
                lightIntro.style.display = 'flex';
                lightIntro.classList.add('light-intro-active');

                setTimeout(function () {
                    lightIntro.style.opacity = '0';
                    lightIntro.style.transition = 'opacity 0.8s ease-out';
                    setTimeout(function () {
                        lightIntro.style.display = 'none';
                    }, 800);
                }, 4000);

                // Tampilkan navbar tepat setelah intro light selesai
                setTimeout(function () {
                    var bottomNav = document.getElementById('bottomNavBar');
                    if (bottomNav) {
                        bottomNav.style.display = 'flex';
                        bottomNav.offsetHeight;
                        bottomNav.style.transform = 'translateY(0)';
                        bottomNav.style.opacity = '1';
                    }
                    var mobileTopNav = document.getElementById('mobileTopNavBar');
                    if (mobileTopNav) {
                        mobileTopNav.style.display = 'block';
                        mobileTopNav.offsetHeight;
                        mobileTopNav.classList.add('visible');
                    }
                }, 3800);
            } else {
                darkIntro.style.display = 'flex';
                lightIntro.style.display = 'none';

                // Tampilkan navbar tepat setelah intro dark selesai (~4.4s)
                setTimeout(function () {
                    var bottomNav = document.getElementById('bottomNavBar');
                    if (bottomNav) {
                        bottomNav.style.display = 'flex';
                        bottomNav.offsetHeight;
                        bottomNav.style.transform = 'translateY(0)';
                        bottomNav.style.opacity = '1';
                    }
                    var mobileTopNav = document.getElementById('mobileTopNavBar');
                    if (mobileTopNav) {
                        mobileTopNav.style.display = 'block';
                        mobileTopNav.offsetHeight;
                        mobileTopNav.classList.add('visible');
                    }
                }, 3800);
            }
        })();
    </script>

    <x-navbar />

    <div class="animate-portfolioAppear">

        <div
            class="portfolio-main-bg bg-[#020617] text-slate-200 relative overflow-hidden font-sans selection:bg-cyan-500/30 pb-24">

            <div class="portfolio-stars absolute inset-0 opacity-10 pointer-events-none"
                style="background-image: radial-gradient(white 1px, transparent 0); background-size: 50px 50px;"></div>
            <div
                class="portfolio-nebula-1 absolute top-[-10%] left-[-5%] w-[60vw] h-[60vw] bg-purple-900/10 rounded-full blur-[130px] pointer-events-none animate-pulse">
            </div>
            <div
                class="portfolio-nebula-2 absolute bottom-[0%] right-[-5%] w-[50vw] h-[50vw] bg-cyan-900/10 rounded-full blur-[110px] pointer-events-none">
            </div>

            <div class="space-rockets absolute inset-0 pointer-events-none overflow-hidden z-0 opacity-80">
                <div class="absolute animate-rocketFly1">
                    <svg class="w-16 h-16 text-cyan-500/30 blur-[1px]" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M13.139 2.139a1.933 1.933 0 00-2.278 0 16.324 16.324 0 00-4.012 5.258 1.127 1.127 0 00.3 1.362l.83.693a1.127 1.127 0 01.3 1.362 16.324 16.324 0 00-1.446 6.307 1.127 1.127 0 001.127 1.127h2.08a.376.376 0 01.376.376v2.871a.752.752 0 001.284.532l1.625-1.625a.752.752 0 00.22-.532V18.63a.376.376 0 01.376-.376h2.08a1.127 1.127 0 001.127-1.127 16.324 16.324 0 00-1.446-6.307 1.127 1.127 0 01.3-1.362l.83-.693a1.127 1.127 0 00.3-1.362 16.324 16.324 0 00-4.012-5.258zM12 11.25a1.875 1.875 0 110-3.75 1.875 1.875 0 010 3.75z" />
                    </svg>
                </div>
                <div class="absolute animate-rocketFly2">
                    <svg class="w-10 h-10 text-purple-500/30 blur-[2px]" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M13.139 2.139a1.933 1.933 0 00-2.278 0 16.324 16.324 0 00-4.012 5.258 1.127 1.127 0 00.3 1.362l.83.693a1.127 1.127 0 01.3 1.362 16.324 16.324 0 00-1.446 6.307 1.127 1.127 0 001.127 1.127h2.08a.376.376 0 01.376.376v2.871a.752.752 0 001.284.532l1.625-1.625a.752.752 0 00.22-.532V18.63a.376.376 0 01.376-.376h2.08a1.127 1.127 0 001.127-1.127 16.324 16.324 0 00-1.446-6.307 1.127 1.127 0 01.3-1.362l.83-.693a1.127 1.127 0 00.3-1.362 16.324 16.324 0 00-4.012-5.258zM12 11.25a1.875 1.875 0 110-3.75 1.875 1.875 0 010 3.75z" />
                    </svg>
                </div>
                <div class="space-asteroids absolute animate-asteroidDrift3">
                    <svg class="w-24 h-24 text-slate-800/40" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M11 1l7 3 5 9-2 9-9 1-9-5-2-9 4-7z" />
                    </svg>
                </div>
                <div class="absolute animate-asteroidDrift4">
                    <svg class="w-12 h-12 text-slate-700/50" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2l6 4 4 8-3 8-10 2-7-5L2 10l5-6z" />
                    </svg>
                </div>
            </div>

            {{-- Background Sky Elements (Hanya muncul di Light Mode) --}}
            <div class="main-sky-elements absolute inset-0 pointer-events-none overflow-hidden z-0">
                <style>
                    @keyframes skyFloat1 {
                        0% {
                            transform: translate(0, 0) scale(1);
                        }

                        50% {
                            transform: translate(120px, -15px) scale(1.05);
                        }

                        100% {
                            transform: translate(-60px, 10px) scale(0.95);
                        }
                    }

                    @keyframes skyFloat2 {
                        0% {
                            transform: translate(0, 0) scale(0.95);
                        }

                        50% {
                            transform: translate(-150px, 20px) scale(1.02);
                        }

                        100% {
                            transform: translate(80px, -10px) scale(1);
                        }
                    }

                    @keyframes planeFlyMain {
                        0% {
                            transform: translate(-20vw, 30vh) scale(0.8);
                        }

                        100% {
                            transform: translate(120vw, 15vh) scale(1.1);
                        }
                    }
                </style>

                {{-- Awan di atas yang bergerak lambat secara acak --}}
                {{-- Cloud 1 --}}
                <svg class="absolute" style="top: 8%; left: 5%; animation: skyFloat1 12s ease-in-out infinite alternate;"
                    width="220" height="100" viewBox="0 0 220 100">
                    <g fill="white" opacity="0.6">
                        <ellipse cx="70" cy="60" rx="70" ry="35" />
                        <ellipse cx="120" cy="50" rx="50" ry="30" />
                        <ellipse cx="160" cy="60" rx="45" ry="28" />
                        <ellipse cx="95" cy="42" rx="40" ry="30" />
                    </g>
                </svg>
                {{-- Cloud 2 --}}
                <svg class="absolute" style="top: 15%; right: 10%; animation: skyFloat2 15s ease-in-out infinite alternate;"
                    width="180" height="80" viewBox="0 0 180 80">
                    <g fill="white" opacity="0.5">
                        <ellipse cx="60" cy="45" rx="55" ry="28" />
                        <ellipse cx="110" cy="38" rx="45" ry="25" />
                        <ellipse cx="140" cy="48" rx="35" ry="22" />
                    </g>
                </svg>
                {{-- Cloud 3 --}}
                <svg class="absolute"
                    style="top: 25%; left: 50%; animation: skyFloat1 18s ease-in-out infinite alternate-reverse;"
                    width="120" height="60" viewBox="0 0 120 60">
                    <g fill="white" opacity="0.4">
                        <ellipse cx="40" cy="35" rx="35" ry="20" />
                        <ellipse cx="75" cy="30" rx="30" ry="18" />
                        <ellipse cx="55" cy="25" rx="25" ry="18" />
                    </g>
                </svg>

                {{-- Pesawat terbang modern (bergerak perlahan membelah layar utama) --}}
                <div class="absolute" style="animation: planeFlyMain 35s linear infinite;">
                    <svg width="180" height="80" viewBox="0 0 160 60" fill="none" xmlns="http://www.w3.org/2000/svg"
                        class="drop-shadow-[0_8px_15px_rgba(0,0,0,0.15)] opacity-80">
                        <!-- Right Wing -->
                        <path d="M 60 28 L 45 15 L 65 15 L 80 28 Z" fill="#cbd5e1" />
                        <rect x="52" y="22" width="12" height="5" rx="2" fill="#94a3b8" />
                        <!-- Fuselage (Body) -->
                        <path
                            d="M 20 30 C 15 25, 40 22, 110 22 C 135 22, 145 28, 145 30 C 145 34, 135 38, 110 38 L 20 38 C 15 38, 15 30, 20 30 Z"
                            fill="#ffffff" />
                        <path
                            d="M 20 34 L 110 34 C 135 34, 145 32, 145 30 C 145 34, 135 38, 110 38 L 20 38 C 15 38, 15 34, 20 34 Z"
                            fill="#e2e8f0" />
                        <!-- Tail -->
                        <path d="M 20 25 L 10 5 L 35 15 L 42 23 Z" fill="#0ea5e9" />
                        <path d="M 25 24 L 20 18 L 35 20 Z" fill="#bae6fd" opacity="0.5" />
                        <path d="M 25 32 L 15 25 L 28 25 L 35 32 Z" fill="#f1f5f9" stroke="#cbd5e1" stroke-width="0.5" />
                        <!-- Left Wing -->
                        <path d="M 65 35 L 45 55 L 75 55 L 90 35 Z" fill="#f8fafc" stroke="#e2e8f0" stroke-width="1" />
                        <rect x="65" y="38" width="16" height="8" rx="4" fill="#64748b" />
                        <circle cx="81" cy="42" r="3.5" fill="#334155" />
                        <path d="M 72 55 L 75 48 L 76 55 Z" fill="#0ea5e9" />
                        <!-- Blue Stripe & Cockpit -->
                        <line x1="20" y1="32" x2="135" y2="32" stroke="#0ea5e9" stroke-width="1.5" />
                        <path d="M 125 24 C 130 24, 135 26, 137 28 L 125 28 Z" fill="#1e293b" />
                        <!-- Passenger Windows -->
                        <circle cx="110" cy="28" r="1.5" fill="#475569" />
                        <circle cx="100" cy="28" r="1.5" fill="#475569" />
                        <circle cx="90" cy="28" r="1.5" fill="#475569" />
                        <circle cx="80" cy="28" r="1.5" fill="#475569" />
                        <circle cx="70" cy="28" r="1.5" fill="#475569" />
                        <circle cx="60" cy="28" r="1.5" fill="#475569" />
                        <circle cx="50" cy="28" r="1.5" fill="#475569" />
                        <path d="M 142 27 C 141 29, 141 33, 142 35" stroke="#cbd5e1" stroke-width="0.5" fill="none" />
                    </svg>
                </div>
            </div>

            <section id="home" class="relative min-h-[80vh] flex items-center justify-center px-6 overflow-hidden z-10">
                <div
                    class="relative z-10 max-w-6xl w-full mx-auto flex flex-col md:flex-row items-center justify-between gap-12">

                    <!-- Text Section -->
                    <div class="md:w-1/2 text-left animate-fadeUp">
                        <h2 class="text-6xl md:text-9xl font-black mb-6 tracking-tighter leading-tight flex flex-col">
                            <div class="flex items-end min-h-[1.2em]">
                                <span id="typewriter-text-1"
                                    class="inline-block text-white pb-2 lg:pb-4 tracking-normal"></span>
                                <span id="cursor-1"
                                    class="w-[0.1em] h-[0.8em] bg-cyan-400 animate-pulse ml-2 mb-4 lg:mb-6"></span>
                            </div>
                            <div class="flex items-end min-h-[1.2em] mt-2">
                                <span id="typewriter-text-2"
                                    class="inline-block text-transparent bg-clip-text bg-linear-to-r from-cyan-400 to-blue-500 pb-2 lg:pb-4 tracking-normal"></span>
                                <span id="cursor-2"
                                    class="w-[0.1em] h-[0.8em] bg-cyan-400 animate-pulse ml-2 mb-4 lg:mb-6 hidden"></span>
                            </div>
                        </h2>
                        <p
                            class="hero-subtitle text-slate-400 w-full md:max-w-lg mb-8 font-mono text-sm md:text-base leading-relaxed uppercase tracking-wider border-y border-white/5 py-4 text-left">
                            Student <span class="text-cyan-700 mx-1">//</span>
                            Frontend Pilot
                        </p>

                        <!-- Social Media Links -->
                        <h3 class="text-sm font-bold text-white tracking-widest uppercase mb-4 text-left">My <span
                                class="text-cyan-400">Social Media</span></h3>
                        <div class="flex flex-wrap items-center justify-start gap-4 mb-4">
                            <a href="https://instagram.com/digimonn.s" target="_blank"
                                class="group relative flex items-center gap-3 px-5 py-2.5 bg-slate-900 border border-white/5 rounded-sm transition-all duration-300 hover:border-cyan-500 hover:bg-slate-800">
                                <div
                                    class="absolute inset-0 bg-cyan-500/5 opacity-0 group-hover:opacity-100 transition-opacity">
                                </div>
                                <i
                                    class="fa-brands fa-instagram text-cyan-400 group-hover:scale-110 transition-transform"></i>
                                <span
                                    class="font-mono text-[10px] font-bold tracking-widest text-slate-300 uppercase">Instagram</span>
                            </a>

                            <a href="https://www.roblox.com/share?code=92175f2ddbd35c4e9f2b9d4c80917d78&type=Profile&source=ProfileShare&stamp=1769044927858"
                                target="_blank"
                                class="group relative flex items-center gap-3 px-5 py-2.5 bg-slate-900 border border-white/5 rounded-sm transition-all duration-300 hover:border-purple-500 hover:bg-slate-800">
                                <div
                                    class="absolute inset-0 bg-purple-500/5 opacity-0 group-hover:opacity-100 transition-opacity">
                                </div>
                                <svg class="w-3.5 h-3.5 text-purple-400 group-hover:scale-110 transition-transform"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M5.165 0L0 18.835 18.835 24 24 5.165 5.165 0zm9.003 15.313l-4.256-1.163 1.163-4.256 4.256 1.163-1.163 4.256z" />
                                </svg>
                                <span
                                    class="font-mono text-[10px] font-bold tracking-widest text-slate-300 uppercase">Roblox</span>
                            </a>

                            <a href="https://github.com/NathanAndhika" target="_blank"
                                class="group relative flex items-center gap-3 px-5 py-2.5 bg-slate-900 border border-white/5 rounded-sm transition-all duration-300 hover:border-gray-300 hover:bg-slate-800">
                                <div
                                    class="absolute inset-0 bg-gray-300/5 opacity-0 group-hover:opacity-100 transition-opacity">
                                </div>
                                <i class="fa-brands fa-github text-gray-300 group-hover:scale-110 transition-transform"></i>
                                <span
                                    class="font-mono text-[10px] font-bold tracking-widest text-slate-300 uppercase">GitHub</span>
                            </a>
                        </div>
                    </div>

                    <!-- Image Section -->
                    <div class="md:w-1/2 flex justify-center md:justify-end animate-fadeUp" style="animation-delay: 0.3s;">
                        <div class="relative group">

                            <!-- Memuat foto profile (pastikan file bernama foto.jpeg dan diletakkan di folder public) -->
                            <div
                                class="photo-frame relative p-2 bg-slate-900/80 backdrop-blur-sm rounded-xl border border-white/10">
                                <img src="/foto.jpeg" alt="Nathan Andika"
                                    class="w-64 h-64 md:w-80 md:h-80 object-cover rounded-lg grayscale-[20%] group-hover:grayscale-0 group-hover:scale-[1.02] transition-all duration-500">

                                <!-- Decorative Elements -->
                                <div
                                    class="photo-corner absolute -top-3 -right-3 w-6 h-6 border-t-2 border-r-2 border-cyan-400">
                                </div>
                                <div
                                    class="photo-corner absolute -bottom-3 -left-3 w-6 h-6 border-b-2 border-l-2 border-cyan-400">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <script>
                document.addEventListener('DOMContentLoaded', () => {
                    const textPart1 = "Nathan";
                    const textPart2 = "Andika";
                    const typeSpeed = 150;
                    const deleteSpeed = 100;
                    const delayBetweenLoops = 2500;

                    const element1 = document.getElementById('typewriter-text-1');
                    const element2 = document.getElementById('typewriter-text-2');
                    const cursor1 = document.getElementById('cursor-1');
                    const cursor2 = document.getElementById('cursor-2');

                    function startAnimation() {
                        element1.innerHTML = '';
                        element2.innerHTML = '';
                        cursor1.classList.remove('hidden');
                        cursor2.classList.add('hidden');

                        let i = 0;
                        function typeWriter1() {
                            if (i < textPart1.length) {
                                element1.innerHTML += textPart1.charAt(i);
                                i++;
                                setTimeout(typeWriter1, typeSpeed);
                            } else {
                                cursor1.classList.add('hidden');
                                cursor2.classList.remove('hidden');
                                setTimeout(typeWriter2, typeSpeed);
                            }
                        }

                        let j = 0;
                        function typeWriter2() {
                            if (j < textPart2.length) {
                                j++;
                                element2.innerHTML = textPart2.substring(0, j) + '&nbsp;';
                                setTimeout(typeWriter2, typeSpeed);
                            } else {
                                setTimeout(deleteWriter2, delayBetweenLoops);
                            }
                        }

                        function deleteWriter2() {
                            if (j > 0) {
                                j--;
                                element2.innerHTML = textPart2.substring(0, j) + '&nbsp;';
                                setTimeout(deleteWriter2, deleteSpeed);
                            } else {
                                element2.innerHTML = '';
                                cursor1.classList.remove('hidden');
                                cursor2.classList.add('hidden');
                                setTimeout(deleteWriter1, deleteSpeed);
                            }
                        }

                        function deleteWriter1() {
                            if (i > 0) {
                                element1.innerHTML = textPart1.substring(0, i - 1);
                                i--;
                                setTimeout(deleteWriter1, deleteSpeed);
                            } else {
                                setTimeout(typeWriter1, typeSpeed);
                            }
                        }

                        typeWriter1();
                    }

                    setTimeout(startAnimation, 800);
                });
            </script>

            <section id="about" class="max-w-6xl mx-auto px-6 py-24 md:py-36 relative z-10">
                <div class="flex flex-col md:flex-row gap-12 items-center md:items-start">

                    <div class="relative animate-fadeUp flex justify-center md:w-1/3 w-full perspective-1000 group">
                        <p
                            class="absolute -top-8 text-cyan-500/70 font-mono text-[10px] tracking-widest uppercase animate-pulse">
                            Drag/Hover to tilt • Tap to flip</p>

                        <div id="tilt-wrapper"
                            class="w-64 h-88 cursor-pointer transform-style-3d transition-transform duration-50 ease-out">

                            <div id="card-inner"
                                class="w-full h-full relative transition-transform duration-700 transform-style-3d">

                                <div
                                    class="id-card-front absolute inset-0 bg-slate-900 border border-cyan-500/50 rounded-lg shadow-[0_0_30px_rgba(6,182,212,0.2)] backface-hidden flex flex-col items-center p-5 overflow-hidden">
                                    <div class="id-card-grid absolute inset-0 opacity-20"
                                        style="background-image: linear-gradient(#06b6d4 1px, transparent 1px), linear-gradient(90deg, #06b6d4 1px, transparent 1px); background-size: 20px 20px;">
                                    </div>

                                    <div
                                        class="w-12 h-2 bg-[#020617] rounded-full border border-cyan-500/30 mb-5 z-10 shadow-[inset_0_2px_4px_rgba(0,0,0,0.5)]">
                                    </div>

                                    <div
                                        class="w-28 h-28 border-2 border-cyan-400 p-1 relative z-10 bg-slate-800 mb-4 rounded-sm">
                                        <img src="photo.jpeg" alt="Nathan"
                                            class="w-full h-full object-cover filter grayscale opacity-90 transition-all duration-300">
                                        <div class="absolute inset-0 bg-cyan-500/10"></div>
                                        <div
                                            class="absolute -right-1 -bottom-1 w-3 h-3 border-r-2 border-b-2 border-cyan-400">
                                        </div>
                                        <div class="absolute -left-1 -top-1 w-3 h-3 border-l-2 border-t-2 border-cyan-400">
                                        </div>
                                    </div>

                                    <h4
                                        class="text-white font-bold tracking-widest text-center uppercase z-10 text-sm pointer-events-none">
                                        Nathan Andika D.</h4>
                                    <p
                                        class="text-cyan-400 font-mono text-[9px] tracking-[0.2em] mt-1 z-10 bg-cyan-950/50 px-2 py-1 rounded-sm border border-cyan-900 pointer-events-none">
                                        STUDENT PILOT</p>

                                    <div class="mt-auto w-full z-10 flex flex-col items-center pointer-events-none">
                                        <div class="flex gap-[2px] h-6 w-full justify-center opacity-60 mb-1">
                                            <div class="w-1 bg-cyan-400"></div>
                                            <div class="w-2 bg-cyan-400"></div>
                                            <div class="w-1 bg-cyan-400"></div>
                                            <div class="w-3 bg-cyan-400"></div>
                                            <div class="w-1 bg-cyan-400"></div>
                                            <div class="w-2 bg-cyan-400"></div>
                                            <div class="w-1 bg-cyan-400"></div>
                                            <div class="w-2 bg-cyan-400"></div>
                                            <div class="w-3 bg-cyan-400"></div>
                                            <div class="w-1 bg-cyan-400"></div>
                                        </div>
                                        <p class="font-mono text-[8px] text-slate-500 tracking-widest">ID: NTS-2026-X</p>
                                    </div>
                                </div>

                                <div
                                    class="id-card-back absolute inset-0 bg-slate-900 border border-cyan-500/50 rounded-lg shadow-[0_0_30px_rgba(6,182,212,0.2)] backface-hidden rotate-y-180 flex flex-col items-center justify-center p-6 text-center">
                                    <div
                                        class="absolute inset-0 bg-[repeating-linear-gradient(45deg,transparent,transparent_10px,rgba(6,182,212,0.03)_10px,rgba(6,182,212,0.03)_20px)]">
                                    </div>

                                    <svg class="w-16 h-16 text-cyan-500/60 mb-4 animate-pulse pointer-events-none"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                                    </svg>

                                    <h4
                                        class="text-white font-black text-lg tracking-widest uppercase mb-2 pointer-events-none">
                                        ACCESS LEVEL 5</h4>
                                    <p
                                        class="text-slate-400 font-mono text-[10px] leading-relaxed border-y border-white/10 py-2 pointer-events-none">
                                        14 November 2009<br>
                                        Age 17
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex-1 w-full flex flex-col pt-4 md:pt-0">
                        <div class="mb-8 text-center md:text-left">
                            <div class="flex items-center justify-center md:justify-start gap-3 mb-2">
                                <div class="h-8 w-[2px] bg-cyan-500 shadow-[0_0_10px_rgba(6,182,212,1)]"></div>
                                <h3 class="text-4xl font-black uppercase tracking-tighter text-white">Bio-Metric <span
                                        class="text-cyan-500">Data</span></h3>
                            </div>
                            <p class="font-mono text-xs text-slate-500 uppercase tracking-wider md:pl-4">Subject Profile
                                Analysis</p>
                        </div>

                        <div
                            class="bio-card-bg p-9 bg-slate-900/60 backdrop-blur-sm border border-white/5 rounded-sm relative overflow-hidden shadow-[inset_0_0_30px_rgba(0,0,0,0.3)]">
                            <div
                                class="absolute top-0 left-0 w-full h-[2px] bg-linear-to-r from-transparent via-cyan-400 to-transparent animate-scanLine opacity-70">
                            </div>
                            <p
                                class="text-slate-300 text-lg leading-relaxed font-light first-letter:text-6xl first-letter:font-bold first-letter:text-cyan-500 first-letter:mr-3 first-letter:float-left first-letter:mt-1">
                                Saya adalah developer pemula yang fokus membangun website modern, cepat, dan visual yang
                                kuat menggunakan Laravel, Tailwind CSS, JavaScript, dan teknologi web terbaru.
                            </p>

                            <div class="mt-6 font-mono text-sm text-slate-400 space-y-2 border-t border-white/5 pt-6">
                                <p class="text-cyan-400 font-bold tracking-widest uppercase mb-3"># Record_Pendidikan:</p>
                                <div class="flex items-start gap-3">
                                    <span class="text-cyan-600">>></span>
                                    <p>SDN 007 Sungai Pinang <span class="text-slate-500 text-xs ml-2">[2015-2021]</span>
                                    </p>
                                </div>
                                <div class="flex items-start gap-3">
                                    <span class="text-cyan-600">>></span>
                                    <p>SMPN 2 Samarinda <span class="text-slate-500 text-xs ml-2">[2021-2024]</span></p>
                                </div>
                                <div class="flex items-start gap-3">
                                    <span class="text-cyan-600 animate-pulse">>></span>
                                    <p class="text-white">SMKTI Airlangga Samarinda <span
                                            class="text-cyan-500 text-xs ml-2">[2024-Now]</span></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <section id="skills" class="py-32 border-y border-white/5 relative z-10">
                <div class="max-w-6xl mx-auto px-6 text-center">
                    <div class="inline-flex items-center justify-center gap-4 mb-16">
                        <div class="h-[2px] w-8 md:w-16 bg-cyan-500 shadow-[0_0_10px_rgba(6,182,212,1)]"></div>
                        <h3 class="text-3xl md:text-4xl font-black uppercase tracking-widest text-white">My Skills</h3>
                        <div class="h-[2px] w-8 md:w-16 bg-cyan-500 shadow-[0_0_10px_rgba(6,182,212,1)]"></div>
                    </div>

                    <div class="space-y-16">
                        @php
                            $skillCategories = [
                                'Frontend' => [
                                    ['name' => 'HTML', 'power' => 95, 'type' => 'Frontend Base', 'icon' => '<i class="fa-brands fa-html5 text-3xl text-slate-500 group-hover:text-[#e34f26] transition-colors z-10"></i>'],
                                    ['name' => 'CSS', 'power' => 90, 'type' => 'Styling Engine', 'icon' => '<i class="fa-brands fa-css3-alt text-3xl text-slate-500 group-hover:text-[#1572b6] transition-colors z-10"></i>'],
                                    ['name' => 'JavaScript', 'power' => 85, 'type' => 'Client Logic', 'icon' => '<i class="fa-brands fa-js text-3xl text-slate-500 group-hover:text-[#f7df1e] transition-colors z-10"></i>'],
                                    ['name' => 'Tailwind', 'power' => 95, 'type' => 'Utility Framework', 'icon' => '<svg class="w-8 h-8 text-slate-500 group-hover:text-[#38bdf8] transition-colors z-10" viewBox="0 0 24 24" fill="currentColor"><path d="M12.001,4.8c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 C13.666,10.618,15.027,12,18.001,12c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C16.337,5.782,14.976,4.4,12.001,4.8z M3.601,12c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 c1.177,1.194,2.538,2.576,5.512,2.576c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C10.337,12.982,8.976,11.6,3.601,12z"/></svg>'],
                                    ['name' => 'React', 'power' => 70, 'type' => 'UI Library', 'icon' => '<i class="fa-brands fa-react text-3xl text-slate-500 group-hover:text-[#61dafb] transition-colors z-10"></i>'],
                                ],
                                'Backend' => [
                                    ['name' => 'PHP', 'power' => 80, 'type' => 'Server Logic', 'icon' => '<i class="fa-brands fa-php text-3xl text-slate-500 group-hover:text-[#777bb4] transition-colors z-10"></i>'],
                                    ['name' => 'Laravel', 'power' => 80, 'type' => 'Backend Framework', 'icon' => '<i class="fa-brands fa-laravel text-3xl text-slate-500 group-hover:text-[#ff2d20] transition-colors z-10"></i>'],
                                    ['name' => 'MySQL', 'power' => 75, 'type' => 'Database', 'icon' => '<i class="fa-solid fa-database text-3xl text-slate-500 group-hover:text-[#4479a1] transition-colors z-10"></i>'],
                                ],
                                'Tools & Others' => [
                                    ['name' => 'VSCode', 'power' => 90, 'type' => 'Code Editor', 'icon' => '<i class="fa-solid fa-code text-3xl text-slate-500 group-hover:text-[#007acc] transition-colors z-10"></i>'],
                                    ['name' => 'Antigravity AI', 'power' => 85, 'type' => 'AI Assistant', 'icon' => '<svg class="w-8 h-8 text-slate-500 group-hover:text-[#06b6d4] transition-colors z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>'],
                                    ['name' => 'Git', 'power' => 85, 'type' => 'Version Control', 'icon' => '<i class="fa-brands fa-git-alt text-3xl text-slate-500 group-hover:text-[#f34f29] transition-colors z-10"></i>'],
                                ]
                            ];
                        @endphp

                        @foreach($skillCategories as $categoryName => $skills)
                            <div class="mb-10 text-left">
                                <h4
                                    class="text-xl md:text-2xl font-bold text-white mb-6 border-l-4 border-cyan-500 pl-4 tracking-wide">
                                    {{ $categoryName }}
                                </h4>
                                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                                    @foreach($skills as $skill)
                                        <div
                                            class="skill-card group relative p-6 md:p-8 bg-[#0a0f1c]/60 backdrop-blur-md border border-cyan-900/30 rounded-sm hover:-translate-y-2 hover:shadow-[0_0_30px_rgba(6,182,212,0.15)] hover:border-cyan-500/50 transition-all duration-500 overflow-hidden flex items-center justify-between text-left">

                                            <!-- Tech Accents -->
                                            <div
                                                class="absolute top-0 left-0 w-3 h-3 border-t-2 border-l-2 border-transparent group-hover:border-cyan-400 transition-colors">
                                            </div>
                                            <div
                                                class="absolute bottom-0 right-0 w-3 h-3 border-b-2 border-r-2 border-transparent group-hover:border-cyan-400 transition-colors">
                                            </div>

                                            <div class="flex items-center gap-5 relative z-10 w-full">
                                                <!-- Left Graphic -->
                                                <div
                                                    class="w-14 h-14 md:w-16 md:h-16 shrink-0 rounded-full bg-slate-900/80 flex items-center justify-center border border-slate-800 group-hover:bg-cyan-950/40 group-hover:border-cyan-500/50 transition-all relative">
                                                    <div
                                                        class="absolute inset-0 rounded-full border border-dashed border-cyan-900/50 group-hover:border-cyan-500/30 group-hover:animate-[spin_6s_linear_infinite]">
                                                    </div>
                                                    {!! $skill['icon'] !!}
                                                </div>

                                                <!-- Info -->
                                                <div class="flex-1">
                                                    <div class="flex items-center justify-between mb-1">
                                                        <h4
                                                            class="font-bold text-lg text-slate-300 group-hover:text-white transition-colors tracking-wide">
                                                            {{ $skill['name'] }}
                                                        </h4>
                                                        <!-- Status dot -->
                                                        <div class="flex justify-end gap-1.5 items-center">
                                                            <span
                                                                class="font-mono text-[9px] text-slate-500 group-hover:text-cyan-400 uppercase tracking-widest hidden md:block transition-colors">Active</span>
                                                            <div
                                                                class="w-1.5 h-1.5 rounded-full bg-emerald-500/50 group-hover:bg-emerald-400 group-hover:shadow-[0_0_8px_rgba(16,185,129,0.8)] transition-all">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p
                                                        class="font-mono text-[10px] text-cyan-600/70 tracking-widest uppercase mb-3">
                                                        {{ $skill['type'] }}
                                                    </p>

                                                    <!-- Integration Base line -->
                                                    <div
                                                        class="w-full bg-slate-800/80 h-1.5 rounded-full overflow-hidden border border-white/5 relative">
                                                        <div class="h-full bg-blue-500 group-hover:bg-cyan-400 transition-colors shadow-[0_0_10px_rgba(6,182,212,0.8)] relative"
                                                            style="width: {{ $skill['power'] }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

            <section id="projects" class="max-w-6xl mx-auto px-6 py-36 relative z-10">
                <h3 class="text-4xl font-black uppercase tracking-tighter text-white mb-12">
                    My Project
                </h3>

                <div class="grid md:grid-cols-3 gap-8 perspective-1000">
                    @foreach($projects as $project)
                        <div
                            class="bg-slate-900/40 border border-white/5 p-9 rounded-sm hover:border-cyan-500/30 transition-all duration-500 flex flex-col group">
                            <h4 class="text-2xl font-bold text-white mb-4 group-hover:text-cyan-400 transition-colors">
                                {{ $project->title }}
                            </h4>
                            <p class="text-slate-400 text-sm mb-6 flex-1 line-clamp-3 leading-relaxed">
                                {{ $project->description }}
                            </p>
                            <button data-title="{{ $project->title }}" data-desc="{{ $project->description }}"
                                data-progress="{{ $project->progress ?? 0 }}"
                                data-tech="{{ is_array($project->technology) ? implode(', ', $project->technology) : $project->technology }}"
                                data-repo="{{ $project->repo_url }}"
                                data-screenshots="{{ json_encode($project->screenshots ?? []) }}"
                                class="mt-auto px-6 py-2.5 border border-cyan-900/50 bg-cyan-950/30 hover:bg-cyan-900/50 hover:border-cyan-500 text-cyan-300 rounded-sm transition-all text-[10px] font-bold uppercase tracking-widest w-fit view-project-btn">
                                View Details
                            </button>
                        </div>
                    @endforeach
                </div>
            </section>

            <section id="contact" class="max-w-6xl mx-auto px-6 py-36 relative z-10 border-t border-white/5">
                <div class="grid md:grid-cols-2 gap-12">
                    <div>
                        <div class="flex items-center gap-3 mb-6">
                            <div class="h-px w-8 bg-cyan-500"></div>
                            <span class="font-mono text-[10px] text-cyan-500 uppercase tracking-widest">Establish
                                Link</span>
                        </div>
                        <h3 class="text-4xl font-black text-white tracking-tighter uppercase mb-6">Open <span
                                class="text-slate-500">Comms</span></h3>
                        <p class="text-slate-400 font-mono text-sm leading-relaxed mb-8">Establish a secure satellite link
                            for collaboration or data exchange.</p>

                        <div class="space-y-4">
                            <div class="flex items-center gap-4 group cursor-pointer">
                                <div
                                    class="w-10 h-10 flex items-center justify-center border border-white/10 bg-slate-900 group-hover:border-cyan-500 transition-colors">
                                    <i class="fa-solid fa-envelope text-cyan-400"></i>
                                </div>
                                <span class="text-sm font-mono text-slate-300">nathan@commander.com</span>
                            </div>
                            <div class="flex items-center gap-4 group cursor-pointer">
                                <div
                                    class="w-10 h-10 flex items-center justify-center border border-white/10 bg-slate-900 group-hover:border-cyan-500 transition-colors">
                                    <i class="fa-solid fa-location-dot text-cyan-400"></i>
                                </div>
                                <span class="text-sm font-mono text-slate-300">Samarinda, ID // Station-01</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-slate-900/40 border border-white/10 p-8 rounded-sm">
                        @if(session('success'))
                            <div
                                class="bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 p-4 rounded-sm mb-6 flex items-start gap-3 text-[11px] font-mono tracking-wider">
                                <i class="fa-solid fa-check-circle mt-0.5"></i>
                                <div>{{ session('success') }}</div>
                            </div>
                        @endif

                        <div id="ajaxSuccessAlert"
                            class="hidden bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 p-4 rounded-sm mb-6 flex items-start gap-3 text-[11px] font-mono tracking-wider">
                            <i class="fa-solid fa-check-circle mt-0.5"></i>
                            <div id="ajaxSuccessText"></div>
                        </div>
                        <div id="ajaxErrorAlert"
                            class="hidden bg-rose-500/10 border border-rose-500/30 text-rose-400 p-4 rounded-sm mb-6 flex items-start gap-3 text-[11px] font-mono tracking-wider">
                            <i class="fa-solid fa-triangle-exclamation mt-0.5"></i>
                            <div id="ajaxErrorText"></div>
                        </div>

                        <form id="contactForm" action="{{ route('messages.store') }}" method="POST" class="space-y-4">
                            @csrf
                            <div class="space-y-2">
                                <label
                                    class="font-mono text-[10px] uppercase text-slate-500 tracking-widest">Pilot_Name</label>
                                <input type="text" name="name" required
                                    class="w-full bg-slate-950/50 border border-white/10 px-4 py-3 text-white text-sm focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500/20 outline-none transition-all"
                                    placeholder="IDENTIFY...">
                            </div>
                            <div class="space-y-2">
                                <label
                                    class="font-mono text-[10px] uppercase text-slate-500 tracking-widest">Digital_Frequency</label>
                                <input type="email" name="email" required
                                    class="w-full bg-slate-950/50 border border-white/10 px-4 py-3 text-white text-sm focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500/20 outline-none transition-all"
                                    placeholder="EMAIL@PROTOCOL.COM">
                            </div>
                            <div class="space-y-2">
                                <label
                                    class="font-mono text-[10px] uppercase text-slate-500 tracking-widest">Signal_Payload</label>
                                <textarea rows="4" name="message" required
                                    class="w-full bg-slate-950/50 border border-white/10 px-4 py-3 text-white text-sm focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500/20 outline-none transition-all resize-none"
                                    placeholder="ENCODE MESSAGE..."></textarea>
                            </div>
                            <button id="contactSubmitBtn" type="submit"
                                class="w-full py-4 bg-cyan-600 hover:bg-cyan-500 text-white font-bold uppercase tracking-widest text-[11px] transition-all shadow-[0_0_15px_rgba(6,182,212,0.3)] flex items-center justify-center">
                                Transmit Signal
                            </button>
                        </form>
                    </div>
                </div>
            </section>

        </div>
        <x-footer />
    </div>
    <!-- PROJECT MODAL - ASTRONAUT THEME -->
    <div id="projectModal"
        class="fixed inset-0 z-[99999] bg-[#020617]/95 md:backdrop-blur-md hidden flex-col items-center justify-center p-4 opacity-0 transition-opacity duration-500 font-sans">

        <!-- Deep Space Background overlay inside modal wrapper -->
        <div class="absolute inset-0 pointer-events-none overflow-hidden z-0 opacity-30">
            <div class="absolute inset-0 modal-stars"
                style="background-image: radial-gradient(white 1px, transparent 0); background-size: 50px 50px;"></div>
            <!-- GPU intense effects hidden on mobile -->
            <div class="hidden md:block absolute top-1/4 left-1/4 w-32 h-32 bg-cyan-500/20 blur-[100px] rounded-full"></div>
            <div class="hidden md:block absolute bottom-1/3 right-1/4 w-40 h-40 bg-purple-500/20 blur-[120px] rounded-full">
            </div>
        </div>

        <!-- Modal Content Container -->
        <div class="bg-[#0f172a]/95 border border-cyan-500/30 rounded-lg p-0 max-w-5xl w-full shadow-[0_0_80px_rgba(6,182,212,0.15)] relative transform md:scale-95 transition-all duration-500 flex flex-col max-h-[90vh] overflow-hidden group"
            id="projectModalContent">

            <!-- Glowing scan line -->
            <div
                class="absolute top-0 left-0 w-full h-[2px] bg-linear-to-r from-transparent via-cyan-400 to-transparent animate-scanLine opacity-70 z-50 pointer-events-none">
            </div>

            <!-- Techy Corner Borders -->
            <div
                class="absolute top-0 left-0 w-8 h-8 md:w-12 md:h-12 border-t-2 border-l-2 border-cyan-400 z-50 pointer-events-none">
            </div>
            <div
                class="absolute top-0 right-0 w-8 h-8 md:w-12 md:h-12 border-t-2 border-r-2 border-cyan-400 z-50 pointer-events-none">
            </div>
            <div
                class="absolute bottom-0 left-0 w-8 h-8 md:w-12 md:h-12 border-b-2 border-l-2 border-cyan-400 z-50 pointer-events-none">
            </div>
            <div
                class="absolute bottom-0 right-0 w-8 h-8 md:w-12 md:h-12 border-b-2 border-r-2 border-cyan-400 z-50 pointer-events-none">
            </div>

            <!-- Floating Astronaut Graphic Background for Modal -->
            <div
                class="absolute -right-20 -top-20 z-0 opacity-10 pointer-events-none mix-blend-screen bg-transparent grayscale group-hover:grayscale-0 group-hover:opacity-20 transition-all duration-1000 hidden md:block">
                <img src="astronot.png" alt="Astronaut Background"
                    class="w-96 h-96 object-contain animate-pulse transform -rotate-12 bg-transparent mix-blend-lighten">
            </div>

            <!-- Header part with cyan gradient -->
            <div
                class="bg-linear-to-r from-slate-900 via-cyan-950/20 to-slate-900 border-b border-cyan-900/50 p-6 flex justify-between items-center relative z-20">
                <div class="flex items-center gap-4">
                    <div
                        class="w-12 h-12 rounded-full border border-cyan-500/30 bg-slate-900 flex items-center justify-center relative overflow-hidden shadow-[0_0_15px_rgba(6,182,212,0.2)] shrink-0">
                        <img src="astronot.png" alt="Astronaut" class="w-full h-full object-cover grayscale blur-[1px]">
                        <div class="absolute inset-0 border border-cyan-400/50 rounded-full animate-ping opacity-30"></div>
                    </div>
                    <div>
                        <h2 class="text-cyan-500 font-mono text-[10px] uppercase tracking-widest mb-1 hidden md:block">
                            Command Center // Mission Data</h2>
                        <h3 id="modalTitle" class="text-xl md:text-3xl font-black text-white uppercase tracking-tighter">
                            Mission Title</h3>
                    </div>
                </div>

                <button onclick="closeProjectModal()"
                    class="text-cyan-500/50 hover:text-cyan-400 transition-colors cursor-pointer bg-slate-900/80 border border-cyan-900/50 w-10 h-10 flex items-center justify-center rounded-sm hover:bg-cyan-950/50 hover:shadow-[0_0_10px_rgba(6,182,212,0.5)] group/btn shrink-0 z-50">
                    <svg class="w-5 h-5 group-hover/btn:rotate-90 transition-transform duration-300" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>

            <!-- Scrollable Modal Body -->
            <div class="p-4 md:p-8 overflow-y-auto custom-scrollbar flex-1 relative z-10 overscroll-contain"
                style="-webkit-overflow-scrolling: touch; will-change: scroll-position;">

                <div
                    class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8 border border-white/5 bg-slate-900/50 p-4 rounded-sm">
                    <div class="flex flex-wrap gap-4">
                        <span
                            class="px-4 py-1.5 bg-cyan-950 text-cyan-400 border border-cyan-500/20 rounded-sm text-[10px] font-bold tracking-[0.2em] uppercase flex items-center gap-2">
                            <span
                                class="w-2 h-2 rounded-full bg-cyan-400 animate-pulse shadow-[0_0_8px_rgba(6,182,212,0.8)]"></span>
                            My Project
                        </span>
                        <span
                            class="px-4 py-1.5 bg-slate-800 text-slate-300 border border-slate-600 rounded-sm text-[10px] font-bold tracking-[0.2em] uppercase flex items-center gap-2"
                            id="modalStatusTag">
                            Status
                        </span>
                    </div>

                    <a id="modalRepoBtn" href="#" target="_blank"
                        class="flex items-center gap-2 px-6 py-2 bg-slate-800 hover:bg-cyan-600 border border-slate-700 hover:border-cyan-500 text-slate-300 hover:text-white text-[10px] font-bold uppercase tracking-widest rounded-sm transition-all hidden overflow-hidden relative group/repo w-fit">
                        <div
                            class="absolute inset-0 w-full h-full bg-linear-to-r from-cyan-400 to-blue-500 opacity-0 group-hover/repo:opacity-100 transition-opacity -z-10">
                        </div>
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                        </svg>
                        Source Code
                    </a>
                </div>

                <div class="relative pl-4 md:pl-6 mb-10 border-l-2 border-cyan-500/50">
                    <div class="absolute -left-[5px] top-0 w-2 h-2 rounded-full bg-cyan-400"></div>
                    <div class="absolute -left-[5px] bottom-0 w-2 h-2 rounded-full bg-cyan-400"></div>
                    <p id="modalDesc"
                        class="text-slate-300 leading-relaxed text-sm md:text-base font-light text-justify mt-1"></p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8 mb-10">
                    <!-- Mission Progress Section -->
                    <div
                        class="bg-slate-900 border border-white/5 p-6 rounded-sm relative shadow-[inset_0_0_20px_rgba(0,0,0,0.5)]">
                        <div class="absolute right-4 top-4 opacity-10">
                            <svg class="w-12 h-12 text-cyan-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                                </path>
                            </svg>
                        </div>
                        <h4 class="text-[10px] font-mono text-cyan-500 uppercase tracking-widest mb-6 relative z-10">Payload
                            Completion Level</h4>
                        <div
                            class="w-full bg-slate-950 rounded-full h-2 overflow-hidden border border-white/10 relative z-10">
                            <div
                                class="absolute inset-0 bg-[repeating-linear-gradient(45deg,transparent,transparent_5px,rgba(255,255,255,0.05)_5px,rgba(255,255,255,0.05)_10px)] z-10">
                            </div>
                            <div id="modalProgressBar"
                                class="h-full bg-cyan-500 shadow-[0_0_15px_rgba(6,182,212,0.8)] transition-all duration-1000 ease-out relative z-20"
                                style="width: 0%"></div>
                        </div>
                        <div class="flex justify-between mt-3 font-mono text-[10px] uppercase relative z-10">
                            <span class="text-slate-500 tracking-widest">Progress</span>
                            <span id="modalProgressValue"
                                class="text-cyan-400 font-bold border border-cyan-900 bg-cyan-950/50 px-2 py-0.5 rounded-sm">0%</span>
                        </div>
                    </div>

                    <!-- Tech Stack -->
                    <div
                        class="bg-slate-900 border border-white/5 p-6 rounded-sm shadow-[inset_0_0_20px_rgba(0,0,0,0.5)] relative z-10">
                        <h4 class="text-[10px] font-mono text-cyan-500 uppercase tracking-widest mb-4">Tech Modules Assigned
                        </h4>
                        <div id="modalTechContainer" class="flex flex-wrap gap-2">
                            <!-- Tech badges will be injected here -->
                        </div>
                    </div>
                </div>

                <!-- Project Screenshots -->
                <div class="relative z-10">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="h-px w-8 bg-cyan-900"></div>
                        <h4 class="text-[10px] font-mono text-cyan-500 uppercase tracking-widest shrink-0">Visual
                            Reconnaissance</h4>
                        <div class="h-px w-full bg-cyan-900/30 flex-1"></div>
                    </div>

                    <div id="modalScreenshotContainer" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Screenshots will be injected here -->
                    </div>
                </div>

            </div>
        </div>
    </div>



    <script>
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('.view-project-btn').forEach(btn => {
                btn.addEventListener('click', () => {
                    openProjectModal(
                        btn.dataset.title,
                        btn.dataset.desc,
                        parseInt(btn.dataset.progress || 0),
                        btn.dataset.tech,
                        btn.dataset.repo,
                        btn.dataset.screenshots
                    );
                });
            });
        });

        function openProjectModal(title, desc, progress, tech, repo, screenshotsRaw) {
            let screenshots = [];
            try {
                screenshots = JSON.parse(screenshotsRaw) || [];
            } catch (e) {
                console.error("Failed to parse screenshots JSON", e);
            }

            document.getElementById('modalTitle').innerText = title;
            document.getElementById('modalDesc').innerText = desc;
            document.getElementById('modalProgressValue').innerText = progress + '%';

            // Handle Repository Link
            const repoBtn = document.getElementById('modalRepoBtn');
            if (repo && repo.trim() !== '') {
                repoBtn.href = repo;
                repoBtn.classList.remove('hidden');
                repoBtn.classList.add('flex');
            } else {
                repoBtn.classList.add('hidden');
                repoBtn.classList.remove('flex');
            }

            // Handle Screenshots
            const screenshotContainer = document.getElementById('modalScreenshotContainer');
            screenshotContainer.innerHTML = ''; // clear previous

            if (screenshots.length > 0) {
                screenshots.forEach(path => {
                    const wrap = document.createElement('div');
                    wrap.className = 'aspect-video bg-[#1a1a1a] rounded-md border border-white/5 flex items-center justify-center overflow-hidden group';
                    wrap.innerHTML = `<img src="/storage/${path}" class="w-full h-full object-cover opacity-60 group-hover:opacity-100 transition-opacity" alt="Project Screenshot">`;
                    screenshotContainer.appendChild(wrap);
                });
            } else {
                screenshotContainer.innerHTML = `
                                    <div class="col-span-full border border-dashed border-white/10 rounded-md p-8 text-center">
                                        <p class="text-[10px] font-mono text-slate-600 uppercase tracking-widest">No visual data available for this sector</p>
                                    </div>
                                `;
            }

            // Set progress tag based on progress
            const statusTag = document.getElementById('modalStatusTag');
            if (progress >= 100) {
                statusTag.innerHTML = `<span class="w-2 h-2 rounded-full bg-emerald-400 shadow-[0_0_8px_rgba(52,211,153,0.8)]"></span> MISSION ACCOMPLISHED`;
                statusTag.className = 'px-4 py-1.5 bg-emerald-950 text-emerald-400 border border-emerald-500/20 rounded-sm text-[10px] font-bold tracking-[0.2em] uppercase flex items-center gap-2';
            } else {
                statusTag.innerHTML = `ONGOING`;
                statusTag.className = 'px-4 py-1.5 bg-slate-800 text-slate-300 border border-slate-600 rounded-sm text-[10px] font-bold tracking-[0.2em] uppercase flex items-center gap-2';
            }

            // Split tech and render badges
            const techContainer = document.getElementById('modalTechContainer');
            techContainer.innerHTML = ''; // clear previous

            if (tech && tech.trim() !== '') {
                const techArray = tech.split(',').map(t => t.trim());
                techArray.forEach(t => {
                    const badge = document.createElement('span');
                    badge.className = 'px-3 py-1 bg-cyan-950/40 border border-cyan-800 text-cyan-500 text-[10px] font-mono uppercase tracking-widest rounded-sm shadow-[0_0_10px_rgba(6,182,212,0.1)]';
                    badge.innerText = `[${t}]`;
                    techContainer.appendChild(badge);
                });
            } else {
                techContainer.innerHTML = '<span class="text-slate-600 font-mono text-[10px] uppercase tracking-widest">>> NO DATA</span>';
            }

            const modal = document.getElementById('projectModal');
            const modalContent = document.getElementById('projectModalContent');
            const progressBar = document.getElementById('modalProgressBar');

            modal.classList.remove('hidden');
            modal.classList.add('flex');

            // Trigger reflow for transition
            void modal.offsetWidth;

            modal.classList.remove('opacity-0');
            modalContent.classList.remove('md:scale-95');
            modalContent.classList.add('md:scale-100');

            // Animate progress bar from 0 to actual value
            progressBar.style.width = '0%';
            setTimeout(() => {
                progressBar.style.width = (progress || 0) + '%';
            }, 300);

            // Prevent body scrolling when modal is open
            document.body.style.overflow = 'hidden';
        }

        function closeProjectModal() {
            const modal = document.getElementById('projectModal');
            const modalContent = document.getElementById('projectModalContent');

            modal.classList.add('opacity-0');
            modalContent.classList.remove('md:scale-100');
            modalContent.classList.add('md:scale-95');

            // Restore body scroll
            document.body.style.overflow = '';

            setTimeout(() => {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
            }, 300);
        }


    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            if (typeof gsap !== 'undefined') {
                gsap.registerPlugin(ScrollTrigger);

                gsap.from("#about .bg-slate-900\\/40", {
                    scrollTrigger: { trigger: "#about", start: "top 80%" },
                    y: 50, opacity: 0, duration: 1, ease: "power3.out"
                });

                // Skills cards use pure CSS animation instead of GSAP for reliability

                gsap.from("#projects .group", {
                    scrollTrigger: { trigger: "#projects", start: "top 85%" },
                    y: 80, opacity: 0, rotationX: -10, transformOrigin: "bottom center",
                    duration: 0.8, stagger: 0.2, ease: "power2.out"
                });

                document.querySelectorAll('.magnetic-btn').forEach(btn => {
                    btn.addEventListener('mousemove', (e) => {
                        const rect = btn.getBoundingClientRect();
                        gsap.to(btn, {
                            x: (e.clientX - rect.left - rect.width / 2) * 0.3,
                            y: (e.clientY - rect.top - rect.height / 2) * 0.3,
                            duration: 0.3, ease: "power2.out"
                        });
                    });
                    btn.addEventListener('mouseleave', () => {
                        gsap.to(btn, { x: 0, y: 0, duration: 0.5, ease: "elastic.out(1, 0.3)" });
                    });
                });
            }
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const tiltWrapper = document.getElementById('tilt-wrapper');
            const cardInner = document.getElementById('card-inner');
            let isFlipped = false;

            tiltWrapper.addEventListener('click', () => {
                isFlipped = !isFlipped;
                if (isFlipped) {
                    cardInner.style.transform = 'rotateY(180deg)';
                } else {
                    cardInner.style.transform = 'rotateY(0deg)';
                }
            });

            const handleTilt = (clientX, clientY) => {
                const rect = tiltWrapper.getBoundingClientRect();
                const x = clientX - rect.left;
                const y = clientY - rect.top;

                const centerX = rect.width / 2;
                const centerY = rect.height / 2;

                const rotateX = ((y - centerY) / centerY) * -15;
                const rotateY = ((x - centerX) / centerX) * 15;

                tiltWrapper.style.transform = `rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
            };

            tiltWrapper.addEventListener('mousemove', (e) => {
                handleTilt(e.clientX, e.clientY);
            });

            tiltWrapper.addEventListener('mouseleave', () => {
                tiltWrapper.style.transform = `rotateX(0deg) rotateY(0deg)`;
            });

            tiltWrapper.addEventListener('touchmove', (e) => {
                e.preventDefault();
                const touch = e.touches[0];
                handleTilt(touch.clientX, touch.clientY);
            }, { passive: false });

            tiltWrapper.addEventListener('touchend', () => {
                tiltWrapper.style.transform = `rotateX(0deg) rotateY(0deg)`;
            });

            // --- GSAP 3D Scroll Animations ---
            gsap.registerPlugin(ScrollTrigger);

            gsap.from("#about .flex-1 > div", {
                scrollTrigger: {
                    trigger: "#about",
                    start: "top 80%",
                },
                y: 50,
                opacity: 0,
                duration: 1,
                stagger: 0.2,
                ease: "power3.out"
            });

            gsap.from("#skills .group", {
                scrollTrigger: {
                    trigger: "#skills",
                    start: "top 80%",
                },
                y: 50,
                opacity: 0,
                rotationY: 15,
                transformOrigin: "left center",
                duration: 0.8,
                stagger: 0.15,
                ease: "back.out(1.5)"
            });

            gsap.from("#projects .group", {
                scrollTrigger: {
                    trigger: "#projects",
                    start: "top 80%",
                },
                scale: 0.8,
                opacity: 0,
                rotationX: -20,
                transformOrigin: "bottom center",
                duration: 0.8,
                stagger: 0.2,
                ease: "power3.out",
                clearProps: "all"
            });

            // Magnetic Buttons Logic
            const magneticButtons = document.querySelectorAll('.magnetic-btn');
            magneticButtons.forEach(btn => {
                btn.addEventListener('mousemove', (e) => {
                    const rect = btn.getBoundingClientRect();
                    const x = e.clientX - rect.left - rect.width / 2;
                    const y = e.clientY - rect.top - rect.height / 2;

                    gsap.to(btn, {
                        x: x * 0.3,
                        y: y * 0.3,
                        duration: 0.4,
                        ease: "power2.out"
                    });
                });
                btn.addEventListener('mouseleave', () => {
                    gsap.to(btn, {
                        x: 0,
                        y: 0,
                        duration: 0.7,
                        ease: "elastic.out(1, 0.3)"
                    });
                });
            });

        });
    </script>

    <style>
        /* CSS Utility untuk 3D Flip Card */
        .perspective-1000 {
            perspective: 1000px;
        }

        .transform-style-3d {
            transform-style: preserve-3d;
        }

        .backface-hidden {
            backface-visibility: hidden;
        }

        .rotate-y-180 {
            transform: rotateY(180deg);
        }

        /* --- NEW INTRO ANIMATIONS (ROCKET & MOON) --- */

        @keyframes introExit {
            0% {
                opacity: 1;
                visibility: visible;
            }

            85% {
                opacity: 1;
            }

            100% {
                opacity: 0;
                visibility: hidden;
            }
        }

        .animate-introOverlay {
            animation: introExit 0.8s ease-in-out 3s forwards;
        }

        @keyframes textReveal {
            0% {
                opacity: 0;
                transform: translateY(20px);
                filter: blur(10px);
            }

            40% {
                opacity: 0;
                transform: translateY(20px);
                filter: blur(10px);
            }

            50% {
                opacity: 1;
                transform: translateY(0);
                filter: blur(0);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-textReveal {
            animation: textReveal 3s ease-out forwards;
        }

        /* Lintas Roket Diperjauh & Lebih Cepat di Akhir */
        @keyframes rocketKamikaze {
            0% {
                transform: translate(-500px, 500px) rotate(45deg);
                opacity: 1;
            }

            38% {
                transform: translate(-20px, 20px) rotate(45deg);
                opacity: 1;
            }

            40% {
                transform: translate(0, 0) rotate(45deg) scale(0);
                opacity: 0;
            }

            100% {
                transform: translate(0, 0) rotate(45deg) scale(0);
                opacity: 0;
            }
        }

        .animate-rocketKamikaze {
            animation: rocketKamikaze 3s cubic-bezier(0.5, 0, 1, 1) forwards;
        }

        /* Goncangan (Shake) Hebat Sebelum Hancur */
        @keyframes moonDestroy {
            0% {
                transform: scale(1);
                opacity: 1;
                filter: brightness(1);
            }

            36% {
                transform: scale(1);
                opacity: 1;
                filter: brightness(1);
            }

            37% {
                transform: scale(1.05) translate(-10px, 5px);
                filter: brightness(1.5);
            }

            38% {
                transform: scale(1.05) translate(10px, -5px);
                filter: brightness(2);
            }

            39% {
                transform: scale(1.1) translate(-5px, -10px);
                filter: brightness(3);
            }

            40% {
                transform: scale(1.3);
                filter: brightness(4);
                opacity: 1;
            }

            42% {
                transform: scale(0);
                opacity: 0;
            }

            100% {
                transform: scale(0);
                opacity: 0;
            }
        }

        .animate-moonDestroy {
            animation: moonDestroy 3s forwards;
        }

        /* Ledakan Utama: Membesar Hingga Menutupi Layar */
        @keyframes explosionFlash {
            0% {
                opacity: 0;
                transform: scale(0);
            }

            39% {
                opacity: 0;
                transform: scale(0);
            }

            40% {
                opacity: 1;
                transform: scale(1);
                background-color: #ffffff;
            }

            45% {
                opacity: 1;
                transform: scale(50);
                background-color: #06b6d4;
            }

            70% {
                opacity: 0;
                transform: scale(100);
            }

            100% {
                opacity: 0;
                transform: scale(100);
            }
        }

        .animate-explosionFlash {
            animation: explosionFlash 3s ease-out forwards;
        }

        /* Efek Gelombang Kejut Tambahan (Shockwave) */
        @keyframes shockwave {

            0%,
            39% {
                opacity: 0;
                transform: scale(0);
                border-width: 15px;
            }

            40% {
                opacity: 1;
                transform: scale(1);
                border-width: 30px;
            }

            60% {
                opacity: 0;
                transform: scale(60);
                border-width: 0px;
            }

            100% {
                opacity: 0;
                transform: scale(60);
            }
        }

        .animate-shockwave {
            animation: shockwave 3s ease-out forwards;
        }

        /* Partikel Hancuran Bulan (Debris) Jauh Lebih Terpental */
        @keyframes debrisMove1 {

            0%,
            39% {
                opacity: 0;
                transform: translate(0, 0) rotate(0) scale(1);
            }

            40% {
                opacity: 1;
                transform: translate(0, 0) rotate(0) scale(1.5);
            }

            70% {
                opacity: 0;
                transform: translate(-300px, -400px) rotate(360deg) scale(0.5);
            }

            100% {
                opacity: 0;
            }
        }

        @keyframes debrisMove2 {

            0%,
            39% {
                opacity: 0;
                transform: translate(0, 0) rotate(0) scale(1);
            }

            40% {
                opacity: 1;
                transform: scale(1.5);
            }

            70% {
                opacity: 0;
                transform: translate(400px, -200px) rotate(420deg) scale(0.5);
            }

            100% {
                opacity: 0;
            }
        }

        @keyframes debrisMove3 {

            0%,
            39% {
                opacity: 0;
                transform: translate(0, 0) rotate(0) scale(1);
            }

            40% {
                opacity: 1;
                transform: scale(1.5);
            }

            70% {
                opacity: 0;
                transform: translate(350px, 300px) rotate(240deg) scale(0.5);
            }

            100% {
                opacity: 0;
            }
        }

        @keyframes debrisMove4 {

            0%,
            39% {
                opacity: 0;
                transform: translate(0, 0) rotate(0) scale(1);
            }

            40% {
                opacity: 1;
                transform: scale(1.5);
            }

            70% {
                opacity: 0;
                transform: translate(-400px, 250px) rotate(-360deg) scale(0.5);
            }

            100% {
                opacity: 0;
            }
        }

        @keyframes debrisMove5 {

            0%,
            39% {
                opacity: 0;
                transform: translate(0, 0) rotate(0) scale(1);
            }

            40% {
                opacity: 1;
                transform: scale(1.5);
            }

            70% {
                opacity: 0;
                transform: translate(200px, 450px) rotate(180deg) scale(0.5);
            }

            100% {
                opacity: 0;
            }
        }

        @keyframes debrisMove6 {

            0%,
            39% {
                opacity: 0;
                transform: translate(0, 0) rotate(0) scale(1);
            }

            40% {
                opacity: 1;
                transform: scale(1.5);
            }

            70% {
                opacity: 0;
                transform: translate(-250px, -350px) rotate(-180deg) scale(0.5);
            }

            100% {
                opacity: 0;
            }
        }

        .animate-debris1 {
            animation: debrisMove1 3s ease-out forwards;
        }

        .animate-debris2 {
            animation: debrisMove2 3s ease-out forwards;
        }

        .animate-debris3 {
            animation: debrisMove3 3s ease-out forwards;
        }

        .animate-debris4 {
            animation: debrisMove4 3s ease-out forwards;
        }

        .animate-debris5 {
            animation: debrisMove5 3s ease-out forwards;
        }

        .animate-debris6 {
            animation: debrisMove6 3s ease-out forwards;
        }

        /* --- END NEW INTRO ANIMATIONS --- */

        /* =============================================
               LIGHT MODE INTRO ANIMATIONS (Airplane / Sky)
               ============================================= */

        /* Airplane flies FULL left-to-right across screen smoothly */
        @keyframes planeFlyAcross {
            0% {
                transform: translateX(0px) translateY(0px) rotate(-1deg);
                opacity: 0;
            }

            3% {
                opacity: 1;
            }

            20% {
                transform: translateX(calc(15vw + 150px)) translateY(-8px) rotate(0deg);
            }

            40% {
                transform: translateX(calc(35vw + 150px)) translateY(5px) rotate(0.5deg);
            }

            50% {
                transform: translateX(calc(45vw + 150px)) translateY(-3px) rotate(-0.5deg);
            }

            65% {
                transform: translateX(calc(62vw + 150px)) translateY(6px) rotate(0.3deg);
            }

            80% {
                transform: translateX(calc(80vw + 150px)) translateY(-4px) rotate(-0.5deg);
                opacity: 1;
            }

            95% {
                transform: translateX(calc(100vw + 150px)) translateY(-10px) rotate(-1.5deg);
                opacity: 0.5;
            }

            100% {
                transform: translateX(calc(110vw + 150px)) translateY(-15px) rotate(-2deg);
                opacity: 0;
            }
        }

        .light-intro-active .light-intro-plane {
            animation: planeFlyAcross 3.5s linear forwards;
            will-change: transform, opacity;
        }

        /* Contrail follows the plane */
        @keyframes contrailExpand {
            0% {
                clip-path: inset(0 100% 0 0);
                opacity: 0;
            }

            5% {
                opacity: 0.5;
            }

            40% {
                clip-path: inset(0 55% 0 0);
                opacity: 0.7;
            }

            70% {
                clip-path: inset(0 10% 0 0);
                opacity: 0.5;
            }

            90% {
                clip-path: inset(0 0% 0 0);
                opacity: 0.3;
            }

            100% {
                clip-path: inset(0 0% 0 0);
                opacity: 0;
            }
        }

        .light-intro-active .light-intro-contrail {
            animation: contrailExpand 3.8s linear forwards;
        }

        /* Text appears when plane reaches center (at ~40% of 3.5s = 1.4s) */
        @keyframes lightTextReveal {
            0% {
                opacity: 0;
                transform: scale(0.7);
                filter: blur(20px);
            }

            100% {
                opacity: 1;
                transform: scale(1);
                filter: blur(0);
            }
        }

        .light-intro-active .light-intro-text {
            animation: lightTextReveal 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
            animation-delay: 1.2s;
        }

        @keyframes lightSubtitleReveal {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .light-intro-active .light-intro-subtitle {
            animation: lightSubtitleReveal 0.6s ease-out forwards;
            animation-delay: 1.8s;
        }

        /* Cloud drift animations for intro */
        @keyframes cloudDrift1 {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(120vw);
            }
        }

        @keyframes cloudDrift2 {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-120vw);
            }
        }

        @keyframes cloudDrift3 {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(80vw);
            }
        }

        @keyframes cloudDrift4 {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(100vw);
            }
        }

        .light-intro-active .light-intro-cloud1 {
            animation: cloudDrift1 8s linear forwards;
        }

        .light-intro-active .light-intro-cloud2 {
            animation: cloudDrift2 10s linear forwards;
        }

        .light-intro-active .light-intro-cloud3 {
            animation: cloudDrift3 12s linear forwards;
        }

        .light-intro-active .light-intro-cloud4 {
            animation: cloudDrift4 9s linear forwards;
        }

        /* Sun subtle pulse */
        .light-intro-sun {
            animation: sunPulse 2s ease-in-out infinite alternate;
        }

        @keyframes sunPulse {
            0% {
                transform: scale(1);
            }

            100% {
                transform: scale(1.05);
            }
        }

        /* --- END LIGHT INTRO ANIMATIONS --- */

        @keyframes portfolioReveal {
            0% {
                opacity: 0;
                filter: blur(10px);
            }

            100% {
                opacity: 1;
                filter: blur(0);
            }
        }

        .animate-portfolioAppear {
            animation: portfolioReveal 1.2s ease-out 3.2s forwards;
            opacity: 0;
        }

        @keyframes fadeUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fadeUp {
            animation: fadeUp 1s ease-out forwards;
            opacity: 0;
        }

        @keyframes scanLine {
            0% {
                top: 0;
            }

            100% {
                top: 100%;
            }
        }

        .animate-scanLine {
            animation: scanLine 4s linear infinite;
        }

        /* Asteroids/Ambient Background */
        @keyframes rocketFly1 {
            0% {
                transform: translate(-10vw, 80vh) rotate(45deg);
                opacity: 0;
            }

            5% {
                opacity: 0.8;
            }

            95% {
                opacity: 0.8;
            }

            100% {
                transform: translate(110vw, -20vh) rotate(45deg);
                opacity: 0;
            }
        }

        @keyframes rocketFly2 {
            0% {
                transform: translate(110vw, 30vh) rotate(-135deg);
                opacity: 0;
            }

            5% {
                opacity: 0.6;
            }

            95% {
                opacity: 0.6;
            }

            100% {
                transform: translate(-20vw, 110vh) rotate(-135deg);
                opacity: 0;
            }
        }

        @keyframes asteroidDrift1 {
            0% {
                transform: translate(0, 0) rotate(0deg);
                opacity: 0;
            }

            10% {
                opacity: 1;
            }

            100% {
                transform: translate(80vw, 120vh) rotate(180deg);
                opacity: 0;
            }
        }

        @keyframes asteroidDrift2 {
            0% {
                transform: translate(0, 0) rotate(0deg);
                opacity: 0;
            }

            10% {
                opacity: 1;
            }

            100% {
                transform: translate(-100vw, -100vh) rotate(-240deg);
                opacity: 0;
            }
        }

        @keyframes asteroidDrift3 {
            0% {
                transform: translate(-10vw, 20vh) rotate(0deg);
                opacity: 0;
            }

            5% {
                opacity: 1;
            }

            95% {
                opacity: 1;
            }

            100% {
                transform: translate(110vw, 90vh) rotate(360deg);
                opacity: 0;
            }
        }

        @keyframes asteroidDrift4 {
            0% {
                transform: translate(80vw, -10vh) rotate(0deg);
                opacity: 0;
            }

            5% {
                opacity: 1;
            }

            95% {
                opacity: 1;
            }

            100% {
                transform: translate(-20vw, 110vh) rotate(-180deg);
                opacity: 0;
            }
        }

        .animate-rocketFly1 {
            animation: rocketFly1 35s linear infinite;
        }

        .animate-rocketFly2 {
            animation: rocketFly2 45s linear infinite 15s;
        }

        .animate-asteroidDrift1 {
            animation: asteroidDrift1 4s linear forwards;
        }

        .animate-asteroidDrift2 {
            animation: asteroidDrift2 5s linear forwards 0.5s;
        }

        .animate-asteroidDrift3 {
            animation: asteroidDrift3 60s linear infinite;
        }

        .animate-asteroidDrift4 {
            animation: asteroidDrift4 80s linear infinite 10s;
        }

        html {
            scroll-behavior: smooth;
        }

        /* Skill card stagger animation */
        @keyframes skillFadeIn {
            0% {
                opacity: 0;
                transform: translateY(40px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .skill-card {
            animation: skillFadeIn 0.8s ease-out forwards;
        }

        .skill-card:nth-child(1) {
            animation-delay: 0.1s;
        }

        .skill-card:nth-child(2) {
            animation-delay: 0.25s;
        }

        .skill-card:nth-child(3) {
            animation-delay: 0.4s;
        }

        .skill-card:nth-child(4) {
            animation-delay: 0.55s;
        }

        .skill-card:nth-child(5) {
            animation-delay: 0.7s;
        }

        .skill-card:nth-child(6) {
            animation-delay: 0.85s;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const contactForm = document.getElementById('contactForm');
            if (contactForm) {
                contactForm.addEventListener('submit', async (e) => {
                    e.preventDefault();

                    const btn = document.getElementById('contactSubmitBtn');
                    const originalBtnText = btn.innerHTML;
                    btn.innerHTML = '<i class="fa-solid fa-circle-notch fa-spin mr-2"></i> Transmitting...';
                    btn.disabled = true;
                    btn.classList.add('opacity-70', 'cursor-not-allowed');

                    const successAlert = document.getElementById('ajaxSuccessAlert');
                    const successText = document.getElementById('ajaxSuccessText');
                    const errorAlert = document.getElementById('ajaxErrorAlert');
                    const errorText = document.getElementById('ajaxErrorText');

                    successAlert.classList.add('hidden');
                    errorAlert.classList.add('hidden');

                    try {
                        const formData = new FormData(contactForm);
                        const response = await fetch(contactForm.action, {
                            method: 'POST',
                            body: formData,
                            headers: {
                                'Accept': 'application/json',
                                'X-Requested-With': 'XMLHttpRequest'
                            }
                        });

                        const data = await response.json();

                        if (response.ok) {
                            successText.innerText = data.message || 'Signal Transmitted Successfully!';
                            successAlert.classList.remove('hidden');
                            contactForm.reset();
                        } else {
                            errorText.innerText = data.message || 'Transmission failed. Please check form data.';
                            errorAlert.classList.remove('hidden');
                        }
                    } catch (err) {
                        errorText.innerText = 'Network error during transmission. Please try again.';
                        errorAlert.classList.remove('hidden');
                    } finally {
                        btn.innerHTML = originalBtnText;
                        btn.disabled = false;
                        btn.classList.remove('opacity-70', 'cursor-not-allowed');
                    }
                });
            }
        });
    </script>

@endsection