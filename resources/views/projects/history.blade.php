@extends('layouts.main')

@section('title', 'Mission Logs // Activity History')

@section('content')
<div class="min-h-screen bg-[#020617] text-slate-200 relative overflow-hidden font-sans selection:bg-cyan-500/30 px-6 py-12">

    <div class="absolute inset-0 opacity-10 pointer-events-none" 
         style="background-image: radial-gradient(white 1px, transparent 0); background-size: 30px 30px;"></div>
    <div class="absolute top-[-10%] left-[-5%] w-[50vw] h-[50vw] bg-blue-600/5 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="max-w-5xl mx-auto relative z-10">
        
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

        <div class="mb-12 border-b border-white/10 pb-6 flex items-end justify-between">
            <div>
                <div class="flex items-center gap-2 mb-2">
                    <span class="w-2 h-2 bg-red-500 animate-pulse rounded-full"></span>
                    <span class="font-mono text-[10px] tracking-[0.3em] text-red-500 uppercase">Blackbox Recorder</span>
                </div>
                <h1 class="text-4xl font-black text-white tracking-tighter uppercase">
                    Mission <span class="text-slate-500">Logs</span>
                </h1>
            </div>
            <div class="text-right font-mono text-[10px] text-slate-500 hidden md:block">
                <p>STATION: COMMAND_CENTER_01</p>
                <p>STATUS: SYNC_ENCRYPTED</p>
            </div>
        </div>

        <section class="mb-12">
            <div class="flex items-center gap-3 mb-6">
                <div class="p-2 bg-emerald-500/10 rounded border border-emerald-500/20">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11l7-7 7 7M5 19l7-7 7 7" />
                    </svg>
                </div>
                <h2 class="text-sm font-bold text-emerald-400 uppercase tracking-[0.2em]">Module Deployments</h2>
            </div>

            <div class="grid gap-3">
                @foreach($histories->where('action','created') as $history)
                <div class="group flex items-center justify-between bg-slate-900/40 border border-white/5 p-4 rounded-sm hover:border-emerald-500/30 transition-all">
                    <div class="flex items-center gap-4">
                        <div class="font-mono text-[10px] text-emerald-500/50 group-hover:text-emerald-500 transition-colors">
                            [+DEPLY]
                        </div>
                        <div>
                            <p class="text-sm font-bold text-white group-hover:text-emerald-400 transition-colors">{{ $history->title }}</p>
                            <p class="font-mono text-[10px] text-slate-500 uppercase">{{ $history->created_at->format('d M Y // H:i:s') }}</p>
                        </div>
                    </div>
                    <div class="h-1 w-12 bg-emerald-500/10 rounded-full overflow-hidden">
                        <div class="h-full bg-emerald-500 w-full animate-[shimmer_2s_infinite]"></div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>

        <section class="mb-12">
            <div class="flex items-center gap-3 mb-6">
                <div class="p-2 bg-sky-500/10 rounded border border-sky-500/20">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-sky-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m13 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                    </svg>
                </div>
                <h2 class="text-sm font-bold text-sky-400 uppercase tracking-[0.2em]">Signal Reconstitutions</h2>
            </div>

            <div class="grid gap-3">
                @foreach($histories->where('action','restored') as $history)
                <div class="group flex items-center justify-between bg-slate-900/40 border border-white/5 p-4 rounded-sm hover:border-sky-500/30 transition-all">
                    <div class="flex items-center gap-4">
                        <div class="font-mono text-[10px] text-sky-500/50 group-hover:text-sky-500 transition-colors">
                            [*RSTR]
                        </div>
                        <div>
                            <p class="text-sm font-bold text-white group-hover:text-sky-400 transition-colors">{{ $history->title }}</p>
                            <p class="font-mono text-[10px] text-slate-500 uppercase">{{ $history->created_at->format('d M Y // H:i:s') }}</p>
                        </div>
                    </div>
                    <div class="hidden md:block font-mono text-[9px] text-sky-500/40 italic">INTEGRITY_RESTORED</div>
                </div>
                @endforeach
            </div>
        </section>

        <section class="mb-12">
            <div class="flex items-center gap-3 mb-6">
                <div class="p-2 bg-rose-500/10 rounded border border-rose-500/20">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-rose-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                </div>
                <h2 class="text-sm font-bold text-rose-400 uppercase tracking-[0.2em]">Decommissioned Items</h2>
            </div>

            <div class="grid gap-3">
                @foreach($histories->where('action','deleted') as $history)
                @php
                    $project = \App\Models\Project::withTrashed()->find($history->project_id);
                @endphp

                <div class="group flex items-center justify-between bg-slate-900/40 border border-white/5 p-4 rounded-sm hover:border-rose-500/30 transition-all">
                    <div class="flex items-center gap-4">
                        <div class="font-mono text-[10px] text-rose-500/50 group-hover:text-rose-500 transition-colors">
                            [-TERM]
                        </div>
                        <div>
                            <p class="text-sm font-bold text-white group-hover:text-rose-400 transition-colors">{{ $history->title }}</p>
                            <p class="font-mono text-[10px] text-slate-500 uppercase">{{ $history->created_at->format('d M Y // H:i:s') }}</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-3">
                        @if($project && $project->trashed())
                            <span class="font-mono text-[9px] px-2 py-1 bg-rose-500/10 text-rose-500 border border-rose-500/20">IN_DEBRIS_FIELD</span>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </section>

        <div class="mt-12 pt-8 border-t border-white/5">
            <div class="custom-pagination">
                {{ $histories->links() }}
            </div>
        </div>

    </div>
</div>

<style>
    /* Custom Pagination Styling */
    .custom-pagination nav { background: transparent !important; border: none !important; }
    .custom-pagination span, .custom-pagination a { 
        background-color: rgba(15, 23, 42, 0.5) !important; 
        border: 1px solid rgba(255, 255, 255, 0.1) !important;
        color: #94a3b8 !important;
        border-radius: 2px !important;
        font-family: monospace !important;
        text-transform: uppercase !important;
        font-size: 10px !important;
    }
    .custom-pagination .active span {
        background-color: #06b6d4 !important; /* Cyan color matching theme */
        border-color: #06b6d4 !important;
        color: white !important;
    }
    @keyframes shimmer {
        0% { opacity: 0.2; }
        50% { opacity: 1; }
        100% { opacity: 0.2; }
    }
</style>
@endsection