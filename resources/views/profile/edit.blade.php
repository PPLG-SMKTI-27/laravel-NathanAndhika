@extends('layouts.main')

@section('title', 'Commander Profile // Security Protocol')

@section('content')
<div class="min-h-screen bg-[#020617] text-slate-200 relative overflow-hidden font-sans selection:bg-cyan-500/30 px-6 py-12">

    <div class="absolute inset-0 opacity-10 pointer-events-none" 
         style="background-image: radial-gradient(white 1px, transparent 0); background-size: 50px 50px;"></div>
    <div class="absolute w-[600px] h-[600px] bg-cyan-500/5 blur-[120px] rounded-full -top-48 -left-24 animate-pulse"></div>
    <div class="absolute w-[500px] h-[500px] bg-rose-500/5 blur-[120px] rounded-full -bottom-48 -right-24 animate-pulse"></div>

    <div class="relative max-w-4xl mx-auto z-10">
        
        <a href="{{ route('dashboard') }}" 
           class="inline-flex items-center gap-2 mb-10 group transition-all duration-300 animate-fadeDown">
            <div class="p-2 border border-white/10 bg-slate-900/50 group-hover:border-cyan-500/50 group-hover:bg-cyan-500/10 transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-slate-400 group-hover:text-cyan-400 transform group-hover:-translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 17l-5-5m0 0l5-5m-5 5h12" />
                </svg>
            </div>
            <span class="font-mono text-[10px] uppercase tracking-[0.3em] text-slate-500 group-hover:text-cyan-400 transition-colors">
                // Return_to_Command_Center
            </span>
        </a>

        <div class="mb-12 border-b border-white/10 pb-8 animate-fadeDown">
            <div class="flex items-center gap-3 mb-2">
                <div class="h-[1px] w-8 bg-cyan-500"></div>
                <span class="font-mono text-[10px] tracking-[0.4em] text-cyan-500 uppercase">Security_Clearance: Level_01</span>
            </div>
            <h1 class="text-4xl font-black text-white tracking-tighter uppercase italic">
                Identification <span class="text-slate-500">& Security</span>
            </h1>
        </div>

        <div class="grid gap-8">

            <section class="group relative animate-fadeUp" style="animation-delay: 0.1s;">
                <div class="absolute -inset-0.5 bg-gradient-to-r from-cyan-500/20 to-transparent rounded-xl blur opacity-20 group-hover:opacity-40 transition duration-500"></div>
                <div class="relative bg-slate-950/50 backdrop-blur-xl border border-white/10 rounded-xl p-8 hover:border-cyan-500/30 transition-all duration-500">
                    <div class="flex items-center gap-4 mb-8">
                        <div class="p-3 bg-cyan-500/10 border border-cyan-500/20 rounded-lg">
                            <svg class="w-5 h-5 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                        </div>
                        <div>
                            <h2 class="text-white font-bold tracking-widest uppercase text-sm">Personnel Data</h2>
                            <p class="font-mono text-[9px] text-slate-500 uppercase">Update commander public broadcast information</p>
                        </div>
                    </div>

                    <div class="text-slate-300 profile-form-container">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>
            </section>

            <section class="group relative animate-fadeUp" style="animation-delay: 0.2s;">
                <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-500/20 to-transparent rounded-xl blur opacity-20 group-hover:opacity-40 transition duration-500"></div>
                <div class="relative bg-slate-950/50 backdrop-blur-xl border border-white/10 rounded-xl p-8 hover:border-blue-500/30 transition-all duration-500">
                    <div class="flex items-center gap-4 mb-8">
                        <div class="p-3 bg-blue-500/10 border border-blue-500/20 rounded-lg">
                            <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 00-2 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                        </div>
                        <div>
                            <h2 class="text-white font-bold tracking-widest uppercase text-sm">Security Keys</h2>
                            <p class="font-mono text-[9px] text-slate-500 uppercase">Rotate encrypted access credentials</p>
                        </div>
                    </div>

                    <div class="text-slate-300 profile-form-container">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>
            </section>

            <section class="group relative animate-fadeUp" style="animation-delay: 0.3s;">
                <div class="absolute -inset-0.5 bg-gradient-to-r from-rose-500/20 to-transparent rounded-xl blur opacity-20 group-hover:opacity-40 transition duration-500"></div>
                <div class="relative bg-slate-950/50 backdrop-blur-xl border border-white/10 rounded-xl p-8 hover:border-rose-500/30 transition-all duration-500">
                    <div class="flex items-center gap-4 mb-8">
                        <div class="p-3 bg-rose-500/10 border border-rose-500/20 rounded-lg">
                            <svg class="w-5 h-5 text-rose-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                        </div>
                        <div>
                            <h2 class="text-rose-500 font-bold tracking-widest uppercase text-sm">Self-Destruct Protocol</h2>
                            <p class="font-mono text-[9px] text-slate-500 uppercase italic text-rose-500/60">Warning: Permanent decommissioning of all mission data</p>
                        </div>
                    </div>

                    <div class="text-slate-400 profile-form-container">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>

<style>
    @keyframes fadeDown {
        from { opacity: 0; transform: translateY(-20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @keyframes fadeUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .animate-fadeDown { animation: fadeDown 0.6s ease-out forwards; }
    .animate-fadeUp { opacity: 0; animation: fadeUp 0.8s ease-out forwards; }

    /* CSS override untuk form partials Laravel Breeze/Jetstream agar match dengan tema */
    .profile-form-container input {
        background-color: rgba(15, 23, 42, 0.5) !important;
        border: 1px solid rgba(255, 255, 255, 0.1) !important;
        color: white !important;
        border-radius: 4px !important;
    }
    .profile-form-container input:focus {
        border-color: #06b6d4 !important;
        ring: 1px #06b6d4 !important;
    }
    .profile-form-container label {
        font-family: monospace !important;
        text-transform: uppercase !important;
        font-size: 10px !important;
        letter-spacing: 0.1em !important;
        color: #94a3b8 !important;
    }
    .profile-form-container button {
        background-color: #06b6d4 !important;
        font-family: monospace !important;
        text-transform: uppercase !important;
        font-size: 10px !important;
        font-weight: bold !important;
        letter-spacing: 0.1em !important;
        border-radius: 2px !important;
    }
    .profile-form-container .text-red-600 { color: #f43f5e !important; }
</style>
@endsection