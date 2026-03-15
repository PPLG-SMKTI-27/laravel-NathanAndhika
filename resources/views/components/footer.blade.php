<footer class="relative border-t border-white/10 bg-slate-950 py-12 overflow-hidden">
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-[1px] bg-gradient-to-r from-transparent via-cyan-500 to-transparent shadow-[0_0_15px_rgba(6,182,212,0.8)]"></div>
    <div class="absolute bottom-[-10%] left-[-5%] w-64 h-64 bg-cyan-600/5 rounded-full blur-[80px] pointer-events-none"></div>

    <div class="max-w-6xl mx-auto px-6 relative z-10">
        <div class="flex flex-col items-center">
            
            <div class="flex items-center gap-3 mb-8">
                <div class="flex gap-1">
                    <span class="w-1 h-3 bg-cyan-500/40 animate-[pulse_1s_infinite_100ms]"></span>
                    <span class="w-1 h-3 bg-cyan-500/60 animate-[pulse_1s_infinite_200ms]"></span>
                    <span class="w-1 h-3 bg-cyan-500 animate-[pulse_1s_infinite_300ms]"></span>
                </div>
                <p class="font-mono text-[10px] tracking-[0.4em] text-slate-400 uppercase">External_Frequencies</p>
            </div>

            <h3 class="text-xl font-black text-white tracking-widest uppercase mb-8">My <span class="text-cyan-400">Social Media</span></h3>

            <div class="flex flex-wrap justify-center gap-6 mb-12">
                <a href="https://instagram.com/digimonn.s" target="_blank" 
                   class="group relative flex items-center gap-3 px-6 py-3 bg-slate-900 border border-white/5 rounded-sm transition-all duration-300 hover:border-cyan-500 hover:bg-slate-800">
                    <div class="absolute inset-0 bg-cyan-500/5 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <i class="fa-brands fa-instagram text-cyan-400 group-hover:scale-110 transition-transform"></i>
                    <span class="font-mono text-xs font-bold tracking-widest text-slate-300 uppercase">Instagram</span>
                </a>

                <a href="https://www.roblox.com/share?code=92175f2ddbd35c4e9f2b9d4c80917d78&type=Profile&source=ProfileShare&stamp=1769044927858" target="_blank" 
                   class="group relative flex items-center gap-3 px-6 py-3 bg-slate-900 border border-white/5 rounded-sm transition-all duration-300 hover:border-purple-500 hover:bg-slate-800">
                    <div class="absolute inset-0 bg-purple-500/5 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <svg class="w-4 h-4 text-purple-400 group-hover:scale-110 transition-transform" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M5.165 0L0 18.835 18.835 24 24 5.165 5.165 0zm9.003 15.313l-4.256-1.163 1.163-4.256 4.256 1.163-1.163 4.256z"/>
                    </svg>
                    <span class="font-mono text-xs font-bold tracking-widest text-slate-300 uppercase">Roblox</span>
                </a>
            </div>

            <div class="w-full pt-8 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-4 text-slate-500 font-mono text-[10px] uppercase tracking-tighter">
                <div>© 2026 // Mission_Commander: <span class="text-slate-300">Nathan</span></div>
                <div class="flex items-center gap-4">
                    <span class="flex items-center gap-1">
                        <span class="w-1.5 h-1.5 rounded-full bg-green-500 shadow-[0_0_5px_rgba(34,197,94,1)]"></span>
                        SYSTEM_STABLE
                    </span>
                    <span class="text-slate-700">|</span>
                    <span>SECTOR_ID: PORTFOLIO_V3</span>
                </div>
            </div>
        </div>
    </div>
</footer>

<style>
    /* Tambahan animasi jika belum ada di file utama */
    @keyframes pulse {
        0%, 100% { opacity: 0.3; transform: scaleY(1); }
        50% { opacity: 1; transform: scaleY(1.3); }
    }
</style>