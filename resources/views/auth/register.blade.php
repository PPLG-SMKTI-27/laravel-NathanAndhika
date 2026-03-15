@extends('layouts.main')

@section('title', 'System Registry // New Personnel')

@section('content')
<div class="min-h-screen bg-[#020617] text-slate-200 relative overflow-hidden font-sans selection:bg-cyan-500/30 flex items-center justify-center px-6 py-12">

    <div class="absolute inset-0 opacity-10 pointer-events-none" 
         style="background-image: radial-gradient(white 1px, transparent 0); background-size: 50px 50px;"></div>
    
    <div class="absolute w-[600px] h-[600px] bg-cyan-500/10 blur-[120px] rounded-full -top-32 -left-32 animate-pulse"></div>
    <div class="absolute w-[500px] h-[500px] bg-blue-500/10 blur-[120px] rounded-full -bottom-32 -right-32 animate-pulse" style="animation-delay: 1.5s;"></div>

    <div class="relative w-full max-w-md bg-slate-950/50 backdrop-blur-xl border border-white/10 rounded-xl p-8 shadow-[0_0_40px_rgba(6,182,212,0.05)] hover:border-cyan-500/30 hover:shadow-[0_0_40px_rgba(6,182,212,0.1)] transition-all duration-500 z-10 animate-fadeUp">

        <div class="mb-8 border-b border-white/10 pb-6 text-center">
            <div class="flex items-center justify-center gap-3 mb-2">
                <div class="h-[1px] w-6 bg-cyan-500"></div>
                <span class="font-mono text-[10px] tracking-[0.4em] text-cyan-500 uppercase">System_Registry</span>
                <div class="h-[1px] w-6 bg-cyan-500"></div>
            </div>
            <h2 class="text-3xl font-black text-white tracking-tighter uppercase italic">
                Personnel <span class="text-slate-500">Onboarding</span>
            </h2>
        </div>

        <form method="POST" action="{{ route('register') }}" class="space-y-5">
            @csrf

            <div class="space-y-1">
                <label class="font-mono text-[10px] uppercase tracking-[0.1em] text-slate-400">Designation [Name]</label>
                <input type="text" name="name" value="{{ old('name') }}"
                    class="block w-full bg-slate-900/50 border border-white/10 text-white font-mono text-sm
                           focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500 transition duration-300 rounded 
                           placeholder:text-slate-600 px-4 py-2.5"
                    placeholder="ENTER_NAME" required autofocus>
                @error('name')
                    <p class="text-rose-500 font-mono text-[10px] tracking-widest uppercase mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="space-y-1">
                <label class="font-mono text-[10px] uppercase tracking-[0.1em] text-slate-400">Comm-Link [Email]</label>
                <input type="email" name="email" value="{{ old('email') }}"
                    class="block w-full bg-slate-900/50 border border-white/10 text-white font-mono text-sm
                           focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500 transition duration-300 rounded 
                           placeholder:text-slate-600 px-4 py-2.5"
                    placeholder="ENTER_EMAIL" required>
                @error('email')
                    <p class="text-rose-500 font-mono text-[10px] tracking-widest uppercase mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="space-y-1">
                <label class="font-mono text-[10px] uppercase tracking-[0.1em] text-slate-400">Security Key [Password]</label>
                <input type="password" name="password"
                    class="block w-full bg-slate-900/50 border border-white/10 text-white font-mono text-sm
                           focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500 transition duration-300 rounded 
                           placeholder:text-slate-600 px-4 py-2.5 tracking-widest"
                    placeholder="••••••••" required>
                @error('password')
                    <p class="text-rose-500 font-mono text-[10px] tracking-widest uppercase mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="space-y-1">
                <label class="font-mono text-[10px] uppercase tracking-[0.1em] text-slate-400">Verify Security Key</label>
                <input type="password" name="password_confirmation"
                    class="block w-full bg-slate-900/50 border border-white/10 text-white font-mono text-sm
                           focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500 transition duration-300 rounded 
                           placeholder:text-slate-600 px-4 py-2.5 tracking-widest"
                    placeholder="••••••••" required>
                @error('password_confirmation')
                    <p class="text-rose-500 font-mono text-[10px] tracking-widest uppercase mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center justify-between pt-4">
                <a href="{{ route('login') }}"
                   class="font-mono text-[10px] uppercase tracking-[0.1em] text-cyan-600 hover:text-cyan-400 transition-colors border-b border-transparent hover:border-cyan-400 pb-0.5">
                    Credentials_Established?
                </a>

                <button type="submit"
                    class="px-6 py-2.5 bg-cyan-500/10 border border-cyan-500/50 text-cyan-500 hover:bg-cyan-500 hover:text-[#020617]
                           font-mono text-[12px] uppercase tracking-[0.2em] font-bold rounded transition-all duration-300 
                           shadow-[0_0_15px_rgba(6,182,212,0.1)] hover:shadow-[0_0_25px_rgba(6,182,212,0.4)]">
                    Create Profile
                </button>
            </div>
        </form>
    </div>
</div>

<style>
    @keyframes fadeUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .animate-fadeUp {
        animation: fadeUp 0.6s ease-out forwards;
    }
</style>
@endsection