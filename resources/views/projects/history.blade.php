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
                <div class="p-2 bg-slate-500/10 rounded border border-slate-500/20">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h2 class="text-sm font-bold text-white uppercase tracking-[0.2em]">Mission Timeline</h2>
            </div>

            <div class="grid gap-4">
                @foreach($histories as $history)
                <div class="group flex items-center justify-between bg-slate-900/40 border border-white/5 p-4 rounded-sm hover:border-cyan-500/30 transition-all">
                    <div class="flex items-center gap-4">
                        @php
                            $actionColor = [
                                'created' => 'emerald',
                                'restored' => 'sky',
                                'deleted' => 'rose',
                                'purged' => 'orange'
                            ][$history->action] ?? 'slate';
                            
                            $actionLabel = [
                                'created' => '[+DEPLY]',
                                'restored' => '[*RSTR]',
                                'deleted' => '[-TERM]',
                                'purged' => '[!PRGE]'
                            ][$history->action] ?? '[????]';
                        @endphp
                        
                        <div class="font-mono text-[10px] text-{{ $actionColor }}-500/50 group-hover:text-{{ $actionColor }}-500 transition-colors">
                            {{ $actionLabel }}
                        </div>
                        <div>
                            <p class="text-sm font-bold text-white group-hover:text-{{ $actionColor }}-400 transition-colors">{{ $history->title }}</p>
                            <p class="font-mono text-[10px] text-slate-500 uppercase">{{ $history->created_at->format('d M Y // H:i:s') }}</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center gap-3">
                        @if($history->action === 'deleted')
                            @php
                                $project = \App\Models\Project::withTrashed()->find($history->project_id);
                            @endphp
                            @if($project && $project->trashed())
                                <span class="font-mono text-[9px] px-2 py-1 bg-rose-500/10 text-rose-500 border border-rose-500/20">IN_DEBRIS_FIELD</span>
                            @endif
                        @elseif($history->action === 'purged')
                             <span class="font-mono text-[9px] px-2 py-1 bg-orange-500/10 text-orange-500 border border-orange-500/20">DATA_VAPORIZED</span>
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