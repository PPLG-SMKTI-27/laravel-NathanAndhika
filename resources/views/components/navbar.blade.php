<nav x-data="{ open: false }" class="fixed w-full z-100 transition-all duration-300 border-b navbar-border navbar-bg backdrop-blur-xl">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center relative z-10">
        
        <div class="flex items-center gap-3 group cursor-pointer">
            <div class="relative">
                <div class="absolute inset-0 bg-cyan-500 rounded-full blur-md opacity-20 group-hover:opacity-50 transition-opacity"></div>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-cyan-400 relative z-10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M17.5 19L15 21.5L12.5 19"></path>
                    <path d="M15 12V21.5"></path>
                    <path d="M22 12C22 6.5 17.5 2 12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22"></path>
                    <circle cx="12" cy="12" r="3"></circle>
                </svg>
            </div>
            <div class="flex flex-col">
                <h1 class="text-lg font-black tracking-[0.2em] navbar-title leading-none uppercase">NATHAN</h1>
                <span class="text-[9px] font-mono text-cyan-500 tracking-[0.3em] uppercase opacity-70 navbar-subtitle">Pilot_ID: 0126</span>
            </div>
        </div>

        <div class="hidden md:flex items-center space-x-1">
            @foreach(['home', 'about', 'skills', 'projects', 'contact'] as $link)
            <a href="#{{ $link }}" 
               class="nav-link-item px-4 py-2 text-[11px] font-mono uppercase tracking-[0.2em] rounded-sm transition-all duration-300">
                <span class="nav-link-slash mr-1">//</span>{{ $link }}
            </a>
            @endforeach

            <div class="pl-6 ml-6 border-l navbar-divider flex items-center gap-3">
                <!-- Theme Toggle Button -->
                <button id="themeToggleDesktop" onclick="toggleTheme()" 
                    class="theme-toggle-btn relative w-10 h-10 flex items-center justify-center rounded-sm transition-all duration-500 overflow-hidden group/theme" 
                    title="Toggle Theme">
                    <!-- Moon icon (shown in dark/space mode) -->
                    <svg id="moonIconDesktop" class="w-5 h-5 theme-icon-moon absolute transition-all duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                    </svg>
                    <!-- Sun icon (shown in light/sky mode) -->
                    <svg id="sunIconDesktop" class="w-5 h-5 theme-icon-sun absolute transition-all duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                </button>

                @if (!Auth::check())
                    <a href="/login" class="group relative px-6 py-2 overflow-hidden rounded-sm bg-cyan-600 transition-all hover:bg-cyan-500 shadow-[0_0_15px_rgba(6,182,212,0.3)]">
                        <span class="relative z-10 text-[11px] font-black uppercase tracking-widest text-white">Initiate Login</span>
                    </a>
                @else
                    <div class="flex items-center gap-3">
                        <a href="{{ route('dashboard') }}" class="group relative px-6 py-2 overflow-hidden rounded-sm border border-cyan-500/50 bg-cyan-950/30 hover:bg-cyan-900/50 transition-all font-bold uppercase tracking-widest text-[11px] text-cyan-400 hover:text-cyan-300">
                            Command Center
                        </a>
                        <form action="{{ route('logout') }}" method="POST" class="m-0">
                            @csrf
                            <button type="submit" class="group flex items-center gap-2 px-5 py-2 border border-red-500/30 bg-red-500/5 text-red-400 hover:bg-red-500 hover:text-white transition-all duration-300 rounded-sm">
                                <span class="text-[10px] font-bold uppercase tracking-widest">Eject</span>
                            </button>
                        </form>
                    </div>
                @endif
            </div>
        </div>
        
        <div class="md:hidden">
            <button @click="open = true" class="p-2 text-slate-400 hover:text-cyan-400 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </div>

    <div x-show="open" 
         x-transition.opacity.duration.300ms
         @click="open = false"
         class="fixed inset-0 bg-black/80 backdrop-blur-sm z-40 md:hidden" style="display: none;">
    </div>

    <div x-show="open"
         @click.away="open = false"
         x-transition:enter="transition ease-out duration-300 transform"
         x-transition:enter-start="translate-x-full"
         x-transition:enter-end="translate-x-0"
         x-transition:leave="transition ease-in duration-300 transform"
         x-transition:leave-start="translate-x-0"
         x-transition:leave-end="translate-x-full"
         class="fixed top-0 right-0 h-screen w-72 mobile-sidebar-bg border-l border-cyan-500/20 z-50 md:hidden flex flex-col mobile-sidebar-shadow"
         style="display: none;">
        
        <div class="flex justify-between items-center p-6 pb-4">
            <div class="flex flex-col">
                <span class="text-[10px] font-mono text-cyan-500 tracking-[0.3em] uppercase">Control Panel</span>
                <div class="h-px w-12 bg-cyan-900 mt-1"></div>
            </div>
            <button @click="open = false" class="p-2 rounded-full bg-white/5 text-slate-400 hover:text-red-400 transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Theme Toggle in Mobile Sidebar -->
        <div class="px-6 py-3 border-b mobile-sidebar-border">
            <button onclick="toggleTheme()" 
                class="theme-toggle-mobile flex items-center justify-between w-full py-3 px-4 rounded-sm transition-all duration-300">
                <div class="flex items-center gap-3">
                    <svg class="w-5 h-5 theme-icon-moon-mobile" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                    </svg>
                    <svg class="w-5 h-5 theme-icon-sun-mobile" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                    <span class="text-[11px] font-mono uppercase tracking-widest theme-toggle-label">Space Mode</span>
                </div>
                <div class="theme-toggle-track w-10 h-5 rounded-full relative transition-all duration-500">
                    <div class="theme-toggle-dot w-4 h-4 rounded-full absolute top-0.5 transition-all duration-500"></div>
                </div>
            </button>
        </div>

        <div class="px-6 py-4 border-b mobile-sidebar-border">
            @if (!Auth::check())
            <a href="/login"
               class="flex items-center justify-center gap-3 w-full py-3 bg-cyan-600 text-white text-[11px] font-black uppercase tracking-widest rounded-sm shadow-[0_0_15px_rgba(6,182,212,0.4)]">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                </svg>
                Initiate Login
            </a>
            @else
            <div class="flex flex-col gap-3">
                <a href="{{ route('dashboard') }}"
                   class="flex items-center justify-center gap-3 w-full py-3 border border-cyan-500/50 bg-cyan-950/30 hover:bg-cyan-900/50 text-cyan-400 text-[11px] font-black uppercase tracking-widest rounded-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                    </svg>
                    Command Center
                </a>
                <form action="{{ route('logout') }}" method="POST" class="m-0">
                    @csrf
                    <button type="submit"
                        class="flex items-center justify-center gap-3 w-full py-3 bg-red-500/10 text-red-500 border border-red-500/30 text-[11px] font-black uppercase tracking-widest rounded-sm hover:bg-red-500 hover:text-white transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7" />
                        </svg>
                        Eject System
                    </button>
                </form>
            </div>
            @endif
        </div>

        <div class="flex flex-col p-4 pt-6 gap-1 overflow-y-auto flex-1">
            <span class="px-4 text-[9px] font-mono mobile-sidebar-label uppercase tracking-widest mb-2">System_Links</span>
            @foreach(['home', 'about', 'skills', 'projects', 'contact'] as $link)
            <a href="#{{ $link }}"
               @click="open = false"
               class="group flex items-center justify-between py-3 px-4 rounded-sm text-[11px] font-mono uppercase tracking-[0.2em] mobile-sidebar-link hover:text-cyan-400 transition-all duration-300">
                <span><span class="text-cyan-900 group-hover:text-cyan-500 mr-2">></span>{{ $link }}</span>
                <span class="text-[8px] mobile-sidebar-link-num group-hover:text-cyan-900 font-sans italic">0{{ $loop->iteration }}</span>
            </a>
            @endforeach
        </div>

        <div class="p-6 text-center">
            <p class="text-[8px] font-mono mobile-sidebar-footer uppercase tracking-widest">Protocol v.4.0.1 // Active</p>
        </div>
    </div>
</nav>