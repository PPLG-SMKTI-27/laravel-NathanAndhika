@extends('layouts.main')
@section('title','Nathan | Mission Commander')
@section('content')

<div class="fixed inset-0 bg-[#020617] flex flex-col items-center justify-center z-[9999] pointer-events-none animate-introOverlay overflow-hidden">
    <div class="absolute inset-0 z-0">
        <div class="absolute animate-asteroidDrift1" style="top: -10%; left: 20%;">
            <svg class="w-16 h-16 text-slate-700/40" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l6 4 4 8-3 8-10 2-7-5L2 10l5-6z"/></svg>
        </div>
        <div class="absolute animate-asteroidDrift2" style="bottom: 20%; right: -10%;">
            <svg class="w-8 h-8 text-slate-600/30" fill="currentColor" viewBox="0 0 24 24"><path d="M10 2l8 2 4 10-5 8-9 1-6-6 1-10z"/></svg>
        </div>
    </div>

    <div class="text-center z-10 flex flex-col items-center">
        
        <div class="relative w-[400px] h-[400px] mb-6 flex items-center justify-center">
            
            <div class="absolute w-64 h-64 bg-slate-200 rounded-full shadow-[0_0_80px_rgba(255,255,255,0.15)] animate-moonDestroy flex items-center justify-center overflow-hidden">
                <div class="absolute top-8 left-12 w-16 h-16 bg-slate-300 rounded-full shadow-[inset_4px_4px_8px_rgba(0,0,0,0.1)]"></div>
                <div class="absolute bottom-12 right-16 w-12 h-12 bg-slate-300 rounded-full shadow-[inset_3px_3px_6px_rgba(0,0,0,0.1)]"></div>
                <div class="absolute top-24 right-12 w-8 h-8 bg-slate-300 rounded-full shadow-[inset_2px_2px_4px_rgba(0,0,0,0.1)]"></div>
                <div class="absolute bottom-20 left-10 w-10 h-10 bg-slate-300 rounded-full shadow-[inset_2px_2px_4px_rgba(0,0,0,0.1)]"></div>
            </div>

            <div class="absolute animate-rocketKamikaze z-20">
                <svg class="w-24 h-24 text-cyan-400 drop-shadow-[0_0_20px_rgba(6,182,212,0.9)]" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M13.139 2.139a1.933 1.933 0 00-2.278 0 16.324 16.324 0 00-4.012 5.258 1.127 1.127 0 00.3 1.362l.83.693a1.127 1.127 0 01.3 1.362 16.324 16.324 0 00-1.446 6.307 1.127 1.127 0 001.127 1.127h2.08a.376.376 0 01.376.376v2.871a.752.752 0 001.284.532l1.625-1.625a.752.752 0 00.22-.532V18.63a.376.376 0 01.376-.376h2.08a1.127 1.127 0 001.127-1.127 16.324 16.324 0 00-1.446-6.307 1.127 1.127 0 01.3-1.362l.83-.693a1.127 1.127 0 00.3-1.362 16.324 16.324 0 00-4.012-5.258zM12 11.25a1.875 1.875 0 110-3.75 1.875 1.875 0 010 3.75z"/>
                </svg>
            </div>

            <div class="absolute w-8 h-8 bg-white rounded-full shadow-[0_0_250px_100px_rgba(6,182,212,1)] animate-explosionFlash z-10 opacity-0"></div>
            
            <div class="absolute w-12 h-12 border-4 border-cyan-400 rounded-full animate-shockwave z-10 opacity-0 shadow-[0_0_50px_rgba(6,182,212,0.8)]"></div>

            <div class="absolute inset-0 z-10">
                <div class="w-12 h-12 bg-slate-300 rounded-sm absolute top-1/2 left-1/2 animate-debris1 opacity-0"></div>
                <div class="w-8 h-10 bg-slate-200 rounded-md absolute top-1/2 left-1/2 animate-debris2 opacity-0"></div>
                <div class="w-10 h-8 bg-slate-400 rounded-sm absolute top-1/2 left-1/2 animate-debris3 opacity-0"></div>
                <div class="w-16 h-16 bg-slate-300 rounded-full absolute top-1/2 left-1/2 animate-debris4 opacity-0"></div>
                <div class="w-6 h-6 bg-slate-200 rounded-sm absolute top-1/2 left-1/2 animate-debris5 opacity-0"></div>
                <div class="w-14 h-14 bg-slate-400 rounded-full absolute top-1/2 left-1/2 animate-debris6 opacity-0"></div>
            </div>

        </div>

<h1 class="absolute text-white text-5xl md:text-7xl font-black tracking-tighter animate-textReveal flex flex-col items-center justify-center gap-4 z-30">
    <div class="w-20 h-20 md:w-28 md:h-28 rounded-full border-2 border-cyan-400 p-1 overflow-hidden shadow-[0_0_20px_rgba(6,182,212,0.5)] bg-slate-900">
        <img src="astronot.png" alt="Astronaut" class="w-full h-full object-cover rounded-full grayscale opacity-90 hover:grayscale-0 hover:opacity-100 transition-all duration-500">
    </div>
    <span>HELLO</span>
    <span class="text-cyan-500 mt-2">EVERYBODY</span>
</h1>
        <div class="mt-4 flex items-center justify-center gap-2 animate-textReveal">
            <div class="h-[1px] w-12 bg-cyan-900"></div>
            <span class="font-mono text-[10px] text-cyan-400 tracking-[0.4em] uppercase">System Boot Sequence...</span>
            <div class="h-[1px] w-12 bg-cyan-900"></div>
        </div>
    </div>
</div>

<div class="animate-portfolioAppear">
    <x-navbar/>

    <div class="bg-[#020617] text-slate-200 relative overflow-hidden font-sans selection:bg-cyan-500/30 pt-20">
        
        <div class="absolute inset-0 opacity-10 pointer-events-none" 
             style="background-image: radial-gradient(white 1px, transparent 0); background-size: 50px 50px;"></div>
        <div class="absolute top-[-10%] left-[-5%] w-[60vw] h-[60vw] bg-purple-900/10 rounded-full blur-[130px] pointer-events-none animate-pulse"></div>
        <div class="absolute bottom-[0%] right-[-5%] w-[50vw] h-[50vw] bg-cyan-900/10 rounded-full blur-[110px] pointer-events-none"></div>

        <div class="absolute inset-0 pointer-events-none overflow-hidden z-0 opacity-80">
            <div class="absolute animate-rocketFly1">
                <svg class="w-16 h-16 text-cyan-500/30 blur-[1px]" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M13.139 2.139a1.933 1.933 0 00-2.278 0 16.324 16.324 0 00-4.012 5.258 1.127 1.127 0 00.3 1.362l.83.693a1.127 1.127 0 01.3 1.362 16.324 16.324 0 00-1.446 6.307 1.127 1.127 0 001.127 1.127h2.08a.376.376 0 01.376.376v2.871a.752.752 0 001.284.532l1.625-1.625a.752.752 0 00.22-.532V18.63a.376.376 0 01.376-.376h2.08a1.127 1.127 0 001.127-1.127 16.324 16.324 0 00-1.446-6.307 1.127 1.127 0 01.3-1.362l.83-.693a1.127 1.127 0 00.3-1.362 16.324 16.324 0 00-4.012-5.258zM12 11.25a1.875 1.875 0 110-3.75 1.875 1.875 0 010 3.75z"/>
                </svg>
            </div>
            <div class="absolute animate-rocketFly2">
                <svg class="w-10 h-10 text-purple-500/30 blur-[2px]" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M13.139 2.139a1.933 1.933 0 00-2.278 0 16.324 16.324 0 00-4.012 5.258 1.127 1.127 0 00.3 1.362l.83.693a1.127 1.127 0 01.3 1.362 16.324 16.324 0 00-1.446 6.307 1.127 1.127 0 001.127 1.127h2.08a.376.376 0 01.376.376v2.871a.752.752 0 001.284.532l1.625-1.625a.752.752 0 00.22-.532V18.63a.376.376 0 01.376-.376h2.08a1.127 1.127 0 001.127-1.127 16.324 16.324 0 00-1.446-6.307 1.127 1.127 0 01.3-1.362l.83-.693a1.127 1.127 0 00.3-1.362 16.324 16.324 0 00-4.012-5.258zM12 11.25a1.875 1.875 0 110-3.75 1.875 1.875 0 010 3.75z"/>
                </svg>
            </div>
            <div class="absolute animate-asteroidDrift3">
                <svg class="w-24 h-24 text-slate-800/40" fill="currentColor" viewBox="0 0 24 24"><path d="M11 1l7 3 5 9-2 9-9 1-9-5-2-9 4-7z"/></svg>
            </div>
            <div class="absolute animate-asteroidDrift4">
                <svg class="w-12 h-12 text-slate-700/50" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l6 4 4 8-3 8-10 2-7-5L2 10l5-6z"/></svg>
            </div>
        </div>

        <section id="home" class="relative min-h-[80vh] flex flex-col items-center justify-center text-center px-6 overflow-hidden z-10">
            <div class="relative z-10 animate-fadeUp">
                <h2 class="text-6xl md:text-9xl font-black mb-6 tracking-tighter leading-none">
                    <span class="text-white">I'M</span>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-500 block">Natsssss</span>
                </h2>
                <p class="text-slate-400 max-w-2xl mx-auto mb-12 font-mono text-sm md:text-base leading-relaxed uppercase tracking-wider border-y border-white/5 py-4">
                    Student <span class="text-cyan-700 mx-1">//</span> 
                    Frontend Pilot
                </p>
                <div class="flex flex-wrap justify-center gap-5">
                    <a href="#projects" class="group relative px-10 py-3.5 overflow-hidden rounded-sm transition-all shadow-[0_0_20px_rgba(6,182,212,0.3)]">
                        <div class="absolute inset-0 bg-cyan-600"></div>
                        <span class="relative z-10 text-white font-bold tracking-widest text-xs uppercase">View Missions</span>
                    </a>
                    <a href="#about" class="px-10 py-3.5 border border-slate-700 hover:border-cyan-500 text-slate-300 hover:text-white rounded-sm tracking-widest transition-all uppercase text-xs">Bio-Data</a>
                </div>
            </div>
        </section>

        <section id="about" class="max-w-6xl mx-auto px-6 py-24 md:py-36 relative z-10">
            <div class="flex flex-col md:flex-row gap-12 items-center md:items-start">
                
                <div class="relative animate-fadeUp flex justify-center md:w-1/3 w-full perspective-1000 group">
                    <p class="absolute -top-8 text-cyan-500/70 font-mono text-[10px] tracking-widest uppercase animate-pulse">Drag/Hover to tilt • Tap to flip</p>
                    
                    <div id="tilt-wrapper" class="w-64 h-[22rem] cursor-pointer transform-style-3d transition-transform duration-[50ms] ease-out">
                        
                        <div id="card-inner" class="w-full h-full relative transition-transform duration-700 transform-style-3d">
                            
                            <div class="absolute inset-0 bg-slate-900 border border-cyan-500/50 rounded-lg shadow-[0_0_30px_rgba(6,182,212,0.2)] backface-hidden flex flex-col items-center p-5 overflow-hidden">
                                <div class="absolute inset-0 opacity-20" style="background-image: linear-gradient(#06b6d4 1px, transparent 1px), linear-gradient(90deg, #06b6d4 1px, transparent 1px); background-size: 20px 20px;"></div>
                                
                                <div class="w-12 h-2 bg-[#020617] rounded-full border border-cyan-500/30 mb-5 z-10 shadow-[inset_0_2px_4px_rgba(0,0,0,0.5)]"></div>
                                
                                <div class="w-28 h-28 border-2 border-cyan-400 p-1 relative z-10 bg-slate-800 mb-4 rounded-sm">
                                    <img src="photo.jpeg" alt="Nathan" class="w-full h-full object-cover filter grayscale opacity-90 transition-all duration-300">
                                    <div class="absolute inset-0 bg-cyan-500/10"></div>
                                    <div class="absolute -right-1 -bottom-1 w-3 h-3 border-r-2 border-b-2 border-cyan-400"></div>
                                    <div class="absolute -left-1 -top-1 w-3 h-3 border-l-2 border-t-2 border-cyan-400"></div>
                                </div>
                                
                                <h4 class="text-white font-bold tracking-widest text-center uppercase z-10 text-sm pointer-events-none">Nathan Andika D.</h4>
                                <p class="text-cyan-400 font-mono text-[9px] tracking-[0.2em] mt-1 z-10 bg-cyan-950/50 px-2 py-1 rounded-sm border border-cyan-900 pointer-events-none">STUDENT PILOT</p>
                                
                                <div class="mt-auto w-full z-10 flex flex-col items-center pointer-events-none">
                                    <div class="flex gap-[2px] h-6 w-full justify-center opacity-60 mb-1">
                                        <div class="w-1 bg-cyan-400"></div><div class="w-2 bg-cyan-400"></div><div class="w-1 bg-cyan-400"></div><div class="w-3 bg-cyan-400"></div><div class="w-1 bg-cyan-400"></div><div class="w-2 bg-cyan-400"></div><div class="w-1 bg-cyan-400"></div><div class="w-2 bg-cyan-400"></div><div class="w-3 bg-cyan-400"></div><div class="w-1 bg-cyan-400"></div>
                                    </div>
                                    <p class="font-mono text-[8px] text-slate-500 tracking-widest">ID: NTS-2026-X</p>
                                </div>
                            </div>

                            <div class="absolute inset-0 bg-slate-900 border border-cyan-500/50 rounded-lg shadow-[0_0_30px_rgba(6,182,212,0.2)] backface-hidden rotate-y-180 flex flex-col items-center justify-center p-6 text-center">
                                <div class="absolute inset-0 bg-[repeating-linear-gradient(45deg,transparent,transparent_10px,rgba(6,182,212,0.03)_10px,rgba(6,182,212,0.03)_20px)]"></div>
                                
                                <svg class="w-16 h-16 text-cyan-500/60 mb-4 animate-pulse pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                                </svg>
                                
                                <h4 class="text-white font-black text-lg tracking-widest uppercase mb-2 pointer-events-none">ACCESS LEVEL 5</h4>
                                <p class="text-slate-400 font-mono text-[10px] leading-relaxed border-y border-white/10 py-2 pointer-events-none">
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
                            <h3 class="text-4xl font-black uppercase tracking-tighter text-white">Bio-Metric <span class="text-cyan-500">Data</span></h3>
                        </div>
                        <p class="font-mono text-xs text-slate-500 uppercase tracking-wider md:pl-4">Subject Profile Analysis</p>
                    </div>

                    <div class="p-9 bg-slate-900/60 backdrop-blur-sm border border-white/5 rounded-sm relative overflow-hidden shadow-[inset_0_0_30px_rgba(0,0,0,0.3)]">
                        <div class="absolute top-0 left-0 w-full h-[2px] bg-gradient-to-r from-transparent via-cyan-400 to-transparent animate-scanLine opacity-70"></div>
                        <p class="text-slate-300 text-lg leading-relaxed font-light first-letter:text-6xl first-letter:font-bold first-letter:text-cyan-500 first-letter:mr-3 first-letter:float-left first-letter:mt-1">
                            Saya adalah developer pemula yang fokus membangun website modern, cepat, dan visual yang kuat menggunakan Laravel, Tailwind CSS, JavaScript, dan teknologi web terbaru. 
                        </p>

                        <div class="mt-6 font-mono text-sm text-slate-400 space-y-2 border-t border-white/5 pt-6">
                            <p class="text-cyan-400 font-bold tracking-widest uppercase mb-3"># Record_Pendidikan:</p>
                            <div class="flex items-start gap-3">
                                <span class="text-cyan-600">>></span>
                                <p>SDN 007 Sungai Pinang <span class="text-slate-500 text-xs ml-2">[2015-2021]</span></p>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="text-cyan-600">>></span>
                                <p>SMPN 2 Samarinda <span class="text-slate-500 text-xs ml-2">[2021-2024]</span></p>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="text-cyan-600 animate-pulse">>></span>
                                <p class="text-white">SMKTI Airlangga Samarinda <span class="text-cyan-500 text-xs ml-2">[2024-Now]</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>

        <section id="skills" class="bg-slate-950/80 py-32 border-y border-white/5 relative z-10 backdrop-blur-sm">
            <div class="max-w-6xl mx-auto px-6 text-center">
                <h3 class="text-4xl font-black uppercase tracking-widest text-white mb-16">Technical Modules</h3>
                <div class="flex flex-wrap justify-center gap-6">
                    @foreach(['HTML', 'CSS', 'JavaScript', 'Tailwind', 'React', 'Laravel'] as $skill)
                    <div class="group relative px-12 py-5 bg-slate-900 border border-slate-800 rounded-sm hover:border-cyan-500/50 transition-all duration-500">
                        <span class="relative z-10 font-mono text-sm font-bold tracking-widest text-slate-400 group-hover:text-cyan-200">{{ $skill }}</span>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="projects" class="max-w-6xl mx-auto px-6 py-36 relative z-10">
            <h3 class="text-4xl font-black uppercase tracking-tighter text-white mb-12">
                Active Deployments
            </h3>

            <div class="grid md:grid-cols-3 gap-8">
                @foreach($projects as $project)
                <div class="bg-slate-900/40 border border-white/5 p-9 rounded-sm hover:border-cyan-500/30 transition-all duration-500 cursor-pointer group">
                    <h4 class="text-2xl font-bold text-white mb-4 group-hover:text-cyan-400 transition-colors">
                        {{ $project->title }}
                    </h4>
                    <p class="text-slate-400 text-sm mb-8">
                        {{ $project->description }}
                    </p>
                </div>
                @endforeach
            </div>
        </section>

    </div>
    <x-footer/>
</div>

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
    });
</script>

<style>
    /* CSS Utility untuk 3D Flip Card */
    .perspective-1000 { perspective: 1000px; }
    .transform-style-3d { transform-style: preserve-3d; }
    .backface-hidden { backface-visibility: hidden; }
    .rotate-y-180 { transform: rotateY(180deg); }

    /* --- NEW INTRO ANIMATIONS (ROCKET & MOON) --- */
    
    @keyframes introExit {
        0% { opacity: 1; visibility: visible; }
        85% { opacity: 1; }
        100% { opacity: 0; visibility: hidden; }
    }
    .animate-introOverlay { animation: introExit 0.8s ease-in-out 3s forwards; }

    @keyframes textReveal {
        0% { opacity: 0; transform: translateY(20px); filter: blur(10px); }
        40% { opacity: 0; transform: translateY(20px); filter: blur(10px); } 
        50% { opacity: 1; transform: translateY(0); filter: blur(0); }
        100% { opacity: 1; transform: translateY(0); }
    }
    .animate-textReveal { animation: textReveal 3s ease-out forwards; }

    /* Lintas Roket Diperjauh & Lebih Cepat di Akhir */
    @keyframes rocketKamikaze {
        0% { transform: translate(-500px, 500px) rotate(45deg); opacity: 1; }
        38% { transform: translate(-20px, 20px) rotate(45deg); opacity: 1; }
        40% { transform: translate(0, 0) rotate(45deg) scale(0); opacity: 0; } 
        100% { transform: translate(0, 0) rotate(45deg) scale(0); opacity: 0; }
    }
    .animate-rocketKamikaze { animation: rocketKamikaze 3s cubic-bezier(0.5, 0, 1, 1) forwards; }

    /* Goncangan (Shake) Hebat Sebelum Hancur */
    @keyframes moonDestroy {
        0% { transform: scale(1); opacity: 1; filter: brightness(1); }
        36% { transform: scale(1); opacity: 1; filter: brightness(1); }
        37% { transform: scale(1.05) translate(-10px, 5px); filter: brightness(1.5); }
        38% { transform: scale(1.05) translate(10px, -5px); filter: brightness(2); }
        39% { transform: scale(1.1) translate(-5px, -10px); filter: brightness(3); } 
        40% { transform: scale(1.3); filter: brightness(4); opacity: 1; } 
        42% { transform: scale(0); opacity: 0; } 
        100% { transform: scale(0); opacity: 0; }
    }
    .animate-moonDestroy { animation: moonDestroy 3s forwards; }

    /* Ledakan Utama: Membesar Hingga Menutupi Layar */
    @keyframes explosionFlash {
        0% { opacity: 0; transform: scale(0); }
        39% { opacity: 0; transform: scale(0); }
        40% { opacity: 1; transform: scale(1); background-color: #ffffff; } 
        45% { opacity: 1; transform: scale(50); background-color: #06b6d4; } 
        70% { opacity: 0; transform: scale(100); } 
        100% { opacity: 0; transform: scale(100); }
    }
    .animate-explosionFlash { animation: explosionFlash 3s ease-out forwards; }

    /* Efek Gelombang Kejut Tambahan (Shockwave) */
    @keyframes shockwave {
        0%, 39% { opacity: 0; transform: scale(0); border-width: 15px; }
        40% { opacity: 1; transform: scale(1); border-width: 30px; }
        60% { opacity: 0; transform: scale(60); border-width: 0px; }
        100% { opacity: 0; transform: scale(60); }
    }
    .animate-shockwave { animation: shockwave 3s ease-out forwards; }

    /* Partikel Hancuran Bulan (Debris) Jauh Lebih Terpental */
    @keyframes debrisMove1 { 
        0%, 39% { opacity: 0; transform: translate(0,0) rotate(0) scale(1); } 
        40% { opacity: 1; transform: translate(0,0) rotate(0) scale(1.5); } 
        70% { opacity: 0; transform: translate(-300px, -400px) rotate(360deg) scale(0.5); } 
        100% { opacity: 0; } 
    }
    @keyframes debrisMove2 { 
        0%, 39% { opacity: 0; transform: translate(0,0) rotate(0) scale(1); } 
        40% { opacity: 1; transform: scale(1.5); } 
        70% { opacity: 0; transform: translate(400px, -200px) rotate(420deg) scale(0.5); } 
        100% { opacity: 0; } 
    }
    @keyframes debrisMove3 { 
        0%, 39% { opacity: 0; transform: translate(0,0) rotate(0) scale(1); } 
        40% { opacity: 1; transform: scale(1.5); } 
        70% { opacity: 0; transform: translate(350px, 300px) rotate(240deg) scale(0.5); } 
        100% { opacity: 0; } 
    }
    @keyframes debrisMove4 { 
        0%, 39% { opacity: 0; transform: translate(0,0) rotate(0) scale(1); } 
        40% { opacity: 1; transform: scale(1.5); } 
        70% { opacity: 0; transform: translate(-400px, 250px) rotate(-360deg) scale(0.5); } 
        100% { opacity: 0; } 
    }
    @keyframes debrisMove5 { 
        0%, 39% { opacity: 0; transform: translate(0,0) rotate(0) scale(1); } 
        40% { opacity: 1; transform: scale(1.5); } 
        70% { opacity: 0; transform: translate(200px, 450px) rotate(180deg) scale(0.5); } 
        100% { opacity: 0; } 
    }
    @keyframes debrisMove6 { 
        0%, 39% { opacity: 0; transform: translate(0,0) rotate(0) scale(1); } 
        40% { opacity: 1; transform: scale(1.5); } 
        70% { opacity: 0; transform: translate(-250px, -350px) rotate(-180deg) scale(0.5); } 
        100% { opacity: 0; } 
    }
    
    .animate-debris1 { animation: debrisMove1 3s ease-out forwards; }
    .animate-debris2 { animation: debrisMove2 3s ease-out forwards; }
    .animate-debris3 { animation: debrisMove3 3s ease-out forwards; }
    .animate-debris4 { animation: debrisMove4 3s ease-out forwards; }
    .animate-debris5 { animation: debrisMove5 3s ease-out forwards; }
    .animate-debris6 { animation: debrisMove6 3s ease-out forwards; }

    /* --- END NEW INTRO ANIMATIONS --- */

    @keyframes portfolioReveal {
        0% { opacity: 0; filter: blur(10px); }
        100% { opacity: 1; filter: blur(0); }
    }
    .animate-portfolioAppear { animation: portfolioReveal 1.2s ease-out 3.2s forwards; opacity: 0; }
    
    @keyframes fadeUp {
        0% { opacity: 0; transform: translateY(20px); }
        100% { opacity: 1; transform: translateY(0); }
    }
    .animate-fadeUp { animation: fadeUp 1s ease-out forwards; opacity: 0; }
    
    @keyframes scanLine {
        0% { top: 0; }
        100% { top: 100%; }
    }
    .animate-scanLine { animation: scanLine 4s linear infinite; }

    /* Asteroids/Ambient Background */
    @keyframes rocketFly1 {
        0% { transform: translate(-10vw, 80vh) rotate(45deg); opacity: 0; }
        5% { opacity: 0.8; }
        95% { opacity: 0.8; }
        100% { transform: translate(110vw, -20vh) rotate(45deg); opacity: 0; }
    }
    @keyframes rocketFly2 {
        0% { transform: translate(110vw, 30vh) rotate(-135deg); opacity: 0; }
        5% { opacity: 0.6; }
        95% { opacity: 0.6; }
        100% { transform: translate(-20vw, 110vh) rotate(-135deg); opacity: 0; }
    }
    @keyframes asteroidDrift1 {
        0% { transform: translate(0, 0) rotate(0deg); opacity: 0; }
        10% { opacity: 1; }
        100% { transform: translate(80vw, 120vh) rotate(180deg); opacity: 0; }
    }
    @keyframes asteroidDrift2 {
        0% { transform: translate(0, 0) rotate(0deg); opacity: 0; }
        10% { opacity: 1; }
        100% { transform: translate(-100vw, -100vh) rotate(-240deg); opacity: 0; }
    }
    @keyframes asteroidDrift3 {
        0% { transform: translate(-10vw, 20vh) rotate(0deg); opacity: 0; }
        5% { opacity: 1; }
        95% { opacity: 1; }
        100% { transform: translate(110vw, 90vh) rotate(360deg); opacity: 0; }
    }
    @keyframes asteroidDrift4 {
        0% { transform: translate(80vw, -10vh) rotate(0deg); opacity: 0; }
        5% { opacity: 1; }
        95% { opacity: 1; }
        100% { transform: translate(-20vw, 110vh) rotate(-180deg); opacity: 0; }
    }

    .animate-rocketFly1 { animation: rocketFly1 35s linear infinite; }
    .animate-rocketFly2 { animation: rocketFly2 45s linear infinite 15s; }
    .animate-asteroidDrift1 { animation: asteroidDrift1 4s linear forwards; }
    .animate-asteroidDrift2 { animation: asteroidDrift2 5s linear forwards 0.5s; }
    .animate-asteroidDrift3 { animation: asteroidDrift3 60s linear infinite; }
    .animate-asteroidDrift4 { animation: asteroidDrift4 80s linear infinite 10s; }
    
    html { scroll-behavior: smooth; }
</style>

@endsection