@extends('layouts.main')

@section('title', 'Mission Deployment // New Project')

@section('content')
<div class="min-h-screen bg-[#020617] flex items-center justify-center px-4 relative overflow-hidden selection:bg-cyan-500/30">
    
    <div class="absolute inset-0 opacity-10 pointer-events-none" 
         style="background-image: radial-gradient(white 1px, transparent 0); background-size: 40px 40px;"></div>
    <div class="absolute w-[500px] h-[500px] bg-cyan-500/10 rounded-full blur-[120px] -top-48 -left-24 animate-pulse"></div>

    <div class="w-full max-w-lg relative group">
        <div class="absolute -inset-0.5 bg-linear-to-r from-cyan-500/20 to-blue-500/20 rounded-xl blur opacity-75 group-hover:opacity-100 transition duration-1000 group-hover:duration-200"></div>
        
        <div class="relative bg-slate-950/80 backdrop-blur-xl border border-white/10 rounded-xl p-8 shadow-2xl">
            
            <div class="mb-8 border-b border-white/5 pb-6">
                <div class="flex items-center gap-2 mb-2">
                    <span class="w-2 h-2 bg-cyan-500 animate-pulse rounded-full shadow-[0_0_8px_rgba(6,182,212,0.8)]"></span>
                    <span class="font-mono text-[10px] tracking-[0.4em] text-cyan-500 uppercase">Input Protocol: Alpha-01</span>
                </div>
                <h2 class="text-3xl font-black text-white tracking-tighter uppercase">
                    New <span class="text-slate-500">Mission</span>
                </h2>
            </div>

            <form method="POST" action="{{ route('projects.store') }}" class="space-y-6" enctype="multipart/form-data">
                @csrf

                <div class="space-y-2">
                    <label class="font-mono text-[10px] uppercase tracking-widest text-slate-400 flex justify-between">
                        <span>Project_Identifier</span>
                        <span class="text-cyan-500/50">Required*</span>
                    </label>
                    <div class="relative">
                        <input type="text" name="title"
                            class="w-full bg-slate-900/50 border border-white/10 focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500/20 rounded-sm px-4 py-3 text-white font-medium transition-all placeholder:text-slate-700"
                            placeholder="e.g. STARLINK_REDACTION"
                            required>
                    </div>
                    @error('title')
                        <p class="font-mono text-[9px] text-rose-500 uppercase tracking-tighter mt-1">Error: {{ $message }}</p>
                    @enderror
                </div>

                <div class="space-y-2">
                    <label class="font-mono text-[10px] uppercase tracking-widest text-slate-400">Mission_Parameters</label>
                    <textarea name="description" rows="4"
                        class="w-full bg-slate-900/50 border border-white/10 focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500/20 rounded-sm px-4 py-3 text-white transition-all placeholder:text-slate-700 resize-none"
                        placeholder="Define objectives and mission scope..."
                        required></textarea>
                    @error('description')
                        <p class="font-mono text-[9px] text-rose-500 uppercase tracking-tighter mt-1">Error: {{ $message }}</p>
                    @enderror
                </div>

                <div class="space-y-2">
                    <label class="font-mono text-[10px] uppercase tracking-widest text-slate-400 flex items-center gap-2">
                        <svg class="w-3 h-3 text-cyan-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        Stack_Environment
                    </label>
                    <input type="text" name="technology"
                        class="w-full bg-slate-900/50 border border-white/10 focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500/20 rounded-sm px-4 py-3 text-white font-mono text-sm transition-all placeholder:text-slate-700"
                        placeholder="LARAVEL, TAILWIND, VITE">
                </div>

                <div class="space-y-2">
                    <label class="font-mono text-[10px] uppercase tracking-widest text-slate-400 flex items-center gap-2">
                        <svg class="w-3 h-3 text-cyan-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.828a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path></svg>
                        Repository_URL
                    </label>
                    <input type="url" name="repo_url"
                        class="w-full bg-slate-900/50 border border-white/10 focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500/20 rounded-sm px-4 py-3 text-white font-mono text-sm transition-all placeholder:text-slate-700"
                        placeholder="https://github.com/user/repo">
                </div>

                <div class="space-y-2">
                    <label class="font-mono text-[10px] uppercase tracking-widest text-slate-400 flex items-center gap-2">
                        <svg class="w-3 h-3 text-cyan-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        Project_Screenshots
                    </label>
                    <input type="file" name="screenshots[]" multiple
                        class="w-full bg-slate-900/50 border border-white/10 focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500/20 rounded-sm px-4 py-3 text-white font-mono text-xs transition-all file:mr-4 file:py-1 file:px-3 file:rounded-sm file:border-0 file:text-[10px] file:font-semibold file:bg-cyan-500/10 file:text-cyan-400 hover:file:bg-cyan-500/20">
                    <p class="text-[9px] text-slate-500 font-mono italic mt-1 uppercase tracking-tight">Support: JPG, PNG, WEBP (Max 2MB per file)</p>
                </div>

                <div class="space-y-2">
                    <label class="font-mono text-[10px] uppercase tracking-widest text-slate-400 flex justify-between">
                        <span class="flex items-center gap-2"><svg class="w-3 h-3 text-cyan-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg> Mission_Progress</span>
                        <span id="progress-value" class="text-cyan-400 font-bold">0%</span>
                    </label>
                    <input type="range" name="progress" min="0" max="100" value="0"
                        oninput="document.getElementById('progress-value').innerText = this.value + '%'"
                        class="w-full h-1.5 bg-slate-800 rounded-lg appearance-none cursor-pointer accent-cyan-500">
                </div>

                <div class="flex items-center justify-between pt-6 gap-4">
                    <a href="{{ route('dashboard') }}"
                       class="font-mono text-[10px] uppercase tracking-[0.2em] text-slate-500 hover:text-white transition-colors py-2">
                        [ Abort_Mission ]
                    </a>

                    <button type="submit"
                        class="group relative px-8 py-3 overflow-hidden bg-cyan-600 rounded-sm transition-all hover:bg-cyan-500 active:scale-95">
                        <div class="absolute inset-0 bg-linear-to-r from-transparent via-white/20 to-transparent -translate-x-full group-hover:animate-[shimmer_1.5s_infinite]"></div>
                        <span class="relative z-10 font-mono text-[11px] font-black uppercase tracking-widest text-white">
                            Launch Project
                        </span>
                    </button>
                </div>
            </form>
        </div>
        
        <div class="mt-4 flex justify-between px-2 font-mono text-[8px] text-slate-600 uppercase tracking-widest">
            <span>Auth_Level: Commander</span>
            <span>Encryption: AES-256</span>
        </div>
    </div>

</div>

<style>
    @keyframes shimmer {
        100% { transform: translateX(100%); }
    }
</style>
@endsection