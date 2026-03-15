@extends('layouts.main')

@section('title', 'Debris Field // Scrap Archive')

@section('content')
<div class="min-h-screen bg-[#020617] text-slate-200 relative overflow-hidden font-sans selection:bg-rose-500/30 px-6 py-12">

    <div class="absolute inset-0 opacity-10 pointer-events-none" 
         style="background-image: radial-gradient(white 1px, transparent 0); background-size: 40px 40px;"></div>
    <div class="absolute top-[-10%] right-[-5%] w-[50vw] h-[50vw] bg-rose-600/5 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="max-w-4xl mx-auto relative z-10">
        
        <a href="{{ route('dashboard') }}" 
           class="inline-flex items-center gap-2 mb-8 group transition-all duration-300">
            <div class="p-2 border border-white/10 bg-slate-900/50 group-hover:border-cyan-500/50 group-hover:bg-cyan-500/10 transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-slate-400 group-hover:text-cyan-400 transform group-hover:-translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 17l-5-5m0 0l5-5m-5 5h12" />
                </svg>
            </div>
            <span class="font-mono text-[10px] uppercase tracking-[0.3em] text-slate-500 group-hover:text-cyan-400 transition-colors">
                // Return_to_Command_Center
            </span>
        </a>

        <div class="mb-12 border-b border-rose-500/20 pb-6">
            <div class="flex items-center gap-2 mb-2">
                <div class="flex gap-1">
                    <span class="w-1 h-3 bg-rose-500/40"></span>
                    <span class="w-1 h-3 bg-rose-500/60"></span>
                    <span class="w-1 h-3 bg-rose-500 animate-pulse"></span>
                </div>
                <span class="font-mono text-[10px] tracking-[0.3em] text-rose-500 uppercase">Warning: Unstable Data</span>
            </div>
            <h1 class="text-4xl font-black text-white tracking-tighter uppercase">
                Debris <span class="text-rose-500/50">Field</span>
            </h1>
            <p class="font-mono text-[10px] text-slate-500 mt-2 uppercase">Archive of decommissioned mission modules</p>
        </div>

        <div class="space-y-4">
            @forelse($projects as $project)
            <div class="group relative bg-slate-900/40 border border-white/5 p-6 rounded-sm hover:border-rose-500/30 transition-all duration-500 overflow-hidden">
                <div class="absolute top-0 left-0 w-[2px] h-0 bg-rose-500 group-hover:h-full transition-all duration-500"></div>
                
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-6">
                    <div>
                        <div class="flex items-center gap-3 mb-1">
                            <span class="font-mono text-[9px] text-rose-500/50">[SCRAP_ID: {{ $project->id }}]</span>
                            <p class="text-lg font-bold text-white group-hover:text-rose-400 transition-colors">
                                {{ $project->title }}
                            </p>
                        </div>
                        <p class="font-mono text-[10px] text-slate-500 uppercase tracking-widest">
                            Lost in space: <span class="text-slate-400">{{ $project->deleted_at->format('d M Y // H:i') }}</span>
                        </p>
                    </div>

                    <div class="flex items-center gap-3 w-full md:w-auto">
                        <form action="{{ route('projects.restore', $project->id) }}" method="POST" class="flex-1 md:flex-none">
                            @csrf
                            <button class="w-full md:w-auto px-4 py-2 border border-emerald-500/30 bg-emerald-500/5 text-emerald-400 font-mono text-[10px] uppercase tracking-widest hover:bg-emerald-500 hover:text-white transition-all">
                                Reconstitute
                            </button>
                        </form>

                        <form action="{{ route('projects.forceDelete', $project->id) }}"
                              method="POST"
                              onsubmit="return confirm('Purge this module from memory permanently?')"
                              class="flex-1 md:flex-none">
                            @csrf
                            @method('DELETE')
                            <button class="w-full md:w-auto px-4 py-2 border border-rose-500/30 bg-rose-500/5 text-rose-400 font-mono text-[10px] uppercase tracking-widest hover:bg-rose-500 hover:text-white transition-all shadow-[0_0_15px_rgba(244,63,94,0)] hover:shadow-[0_0_15px_rgba(244,63,94,0.3)]">
                                Purge_Archive
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            @empty
            <div class="py-20 text-center border border-dashed border-white/5 rounded-sm">
                <div class="mb-4 inline-block p-4 rounded-full bg-slate-900/50 text-slate-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                    </svg>
                </div>
                <p class="font-mono text-xs text-slate-500 uppercase tracking-[0.4em]">Debris field is clear. No scraps detected.</p>
            </div>
            @endforelse
        </div>

    </div>
</div>

<style>
    /* Styling for the confirmation dialog (optional, uses browser default by code) */
    html {
        scroll-behavior: smooth;
    }
</style>
@endsection