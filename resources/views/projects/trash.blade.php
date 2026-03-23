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

            @if(session('success'))
                <div class="mt-6 p-4 bg-emerald-500/10 border border-emerald-500/20 rounded-sm">
                    <p class="font-mono text-xs text-emerald-500 uppercase tracking-widest text-center">Protocol_Success: {{ session('success') }}</p>
                </div>
            @endif

            @if(session('error'))
                <div class="mt-6 p-4 bg-rose-500/10 border border-rose-500/20 rounded-sm">
                    <p class="font-mono text-xs text-rose-500 uppercase tracking-widest text-center">Protocol_Failure: {{ session('error') }}</p>
                </div>
            @endif
        </div>

        <div class="space-y-4" id="trash-list">
            @forelse($projects as $project)
            <div class="group relative bg-slate-900/40 border border-white/5 p-6 rounded-sm hover:border-rose-500/30 transition-all duration-500 overflow-hidden" id="trash-item-{{ $project->id }}">
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
                        {{-- Restore: tetap pakai form biasa --}}
                        <form action="{{ route('projects.restore', $project->id) }}" method="POST" class="flex-1 md:flex-none">
                            @csrf
                            <button class="w-full md:w-auto px-4 py-2 border border-emerald-500/30 bg-emerald-500/5 text-emerald-400 font-mono text-[10px] uppercase tracking-widest hover:bg-emerald-500 hover:text-white transition-all">
                                Reconstitute
                            </button>
                        </form>

                        {{-- Purge: AJAX + modal --}}
                        <button type="button"
                            onclick="openPurgeModal({{ $project->id }}, '{{ addslashes($project->title) }}')"
                            class="flex-1 md:flex-none w-full md:w-auto px-4 py-2 border border-rose-500/30 bg-rose-500/5 text-rose-400 font-mono text-[10px] uppercase tracking-widest hover:bg-rose-500 hover:text-white transition-all shadow-[0_0_15px_rgba(244,63,94,0)] hover:shadow-[0_0_15px_rgba(244,63,94,0.3)]">
                            Purge_Archive
                        </button>
                    </div>
                </div>
            </div>
            @empty
            <div class="py-20 text-center border border-dashed border-white/5 rounded-sm" id="emptyState">
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

{{-- ===== MODAL KONFIRMASI PURGE ===== --}}
<div id="purgeModal" class="fixed inset-0 z-50 hidden items-center justify-center p-4">
    <div class="absolute inset-0 bg-black/80 backdrop-blur-sm" onclick="closePurgeModal()"></div>

    <div class="relative w-full max-w-md z-10 opacity-0 scale-95 transition-all duration-300" id="purgeModalBox">
        {{-- Corner accents --}}
        <div class="absolute top-0 left-0 w-4 h-4 border-t-2 border-l-2 border-red-500"></div>
        <div class="absolute top-0 right-0 w-4 h-4 border-t-2 border-r-2 border-red-500"></div>
        <div class="absolute bottom-0 left-0 w-4 h-4 border-b-2 border-l-2 border-red-500"></div>
        <div class="absolute bottom-0 right-0 w-4 h-4 border-b-2 border-r-2 border-red-500"></div>

        <div class="bg-[#0a0005] border border-red-900/70 rounded-sm shadow-[0_0_80px_rgba(220,38,38,0.25)] p-8">
            {{-- Icon --}}
            <div class="flex justify-center mb-6">
                <div class="relative w-16 h-16 flex items-center justify-center">
                    <div class="absolute inset-0 bg-red-600/20 rounded-full animate-ping" style="animation-duration:1.5s"></div>
                    <div class="absolute inset-2 bg-red-600/10 rounded-full border border-red-600/40"></div>
                    <svg class="w-7 h-7 text-red-400 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                    </svg>
                </div>
            </div>

            <div class="text-center mb-1">
                <span class="font-mono text-[9px] text-red-500/70 uppercase tracking-[0.4em]">⚠ Irreversible Action</span>
            </div>

            <h2 class="text-xl font-black text-white uppercase tracking-tight text-center mb-3">
                Purge Permanen?
            </h2>

            <p class="text-slate-400 text-sm font-mono text-center leading-relaxed mb-1">
                Apakah Anda yakin ingin menghapus
            </p>
            <p class="text-red-400 font-bold text-sm font-mono text-center mb-2" id="purgeProjectName">—</p>
            <p class="text-slate-600 text-xs font-mono text-center mb-8">
                secara <span class="text-red-400 font-bold">PERMANEN</span>? Data dan semua foto tidak dapat dipulihkan.
            </p>

            <div class="border-t border-white/5 mb-6"></div>

            <div class="flex gap-3">
                <button onclick="closePurgeModal()"
                    class="flex-1 py-3 border border-slate-700 bg-slate-900/50 text-slate-400 hover:text-white hover:border-slate-500 hover:bg-slate-800 rounded-sm transition-all font-mono text-[10px] uppercase tracking-widest">
                    Batal
                </button>
                <button id="purgeConfirmBtn" onclick="executePurge()"
                    class="flex-1 py-3 border border-red-700 bg-red-950/50 text-red-400 hover:bg-red-600 hover:text-white hover:border-red-500 rounded-sm transition-all font-mono text-[10px] uppercase tracking-widest font-bold shadow-[0_0_20px_rgba(220,38,38,0.1)] hover:shadow-[0_0_25px_rgba(220,38,38,0.5)] flex items-center justify-center gap-2">
                    <svg class="w-3.5 h-3.5 purgeIcon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                    </svg>
                    <span id="purgeBtnText">Ya, Purge Sekarang</span>
                </button>
            </div>
        </div>
    </div>
</div>

{{-- ===== TOAST ===== --}}
<div id="trashToast" class="fixed top-6 right-6 z-[100] hidden items-center gap-3 px-5 py-4 rounded-sm border shadow-2xl max-w-sm font-mono text-xs uppercase tracking-widest transition-all duration-300 opacity-0 translate-x-4">
    <svg id="trashToastIcon" class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"></svg>
    <span id="trashToastMsg"></span>
</div>

<style>
    html { scroll-behavior: smooth; }
    @keyframes itemFadeOut {
        0%   { opacity: 1; transform: translateX(0); max-height: 200px; margin-bottom: 16px; }
        100% { opacity: 0; transform: translateX(40px); max-height: 0; margin-bottom: 0; padding: 0; }
    }
    .item-removing {
        animation: itemFadeOut 0.4s ease-out forwards;
        pointer-events: none;
        overflow: hidden;
    }
</style>

<script>
    const trashCsrf = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    let _purgeId   = null;
    let _purgeUrl  = null;
    let _purgeItem = null;

    function openPurgeModal(id, title) {
        _purgeId   = id;
        _purgeUrl  = `/projects/${id}/force-delete`;
        _purgeItem = document.getElementById('trash-item-' + id);

        document.getElementById('purgeProjectName').textContent = '"' + title + '"';

        const modal = document.getElementById('purgeModal');
        const box   = document.getElementById('purgeModalBox');

        modal.classList.remove('hidden');
        modal.classList.add('flex');
        requestAnimationFrame(() => requestAnimationFrame(() => {
            box.classList.remove('opacity-0', 'scale-95');
            box.classList.add('opacity-100', 'scale-100');
        }));
        document.body.style.overflow = 'hidden';
    }

    function closePurgeModal() {
        const modal = document.getElementById('purgeModal');
        const box   = document.getElementById('purgeModalBox');
        box.classList.remove('opacity-100', 'scale-100');
        box.classList.add('opacity-0', 'scale-95');
        setTimeout(() => {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
            document.body.style.overflow = '';
            _purgeId = _purgeUrl = _purgeItem = null;
        }, 300);
    }

    function executePurge() {
        if (!_purgeUrl) return;

        const btn     = document.getElementById('purgeConfirmBtn');
        const btnText = document.getElementById('purgeBtnText');
        btn.disabled  = true;
        btnText.textContent = 'Menghapus...';
        btn.querySelector('.purgeIcon').innerHTML =
            `<svg class="w-3.5 h-3.5 animate-spin" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8z"></path>
             </svg>`;

        fetch(_purgeUrl, {
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': trashCsrf,
                'Accept':       'application/json',
                'Content-Type': 'application/json',
            },
        })
        .then(res => {
            if (!res.ok) throw new Error('Server error: ' + res.status);
            return res.json();
        })
        .then(data => {
            closePurgeModal();
            if (_purgeItem) {
                _purgeItem.classList.add('item-removing');
                setTimeout(() => {
                    _purgeItem.remove();
                    // Tampilkan empty state jika habis
                    const list = document.getElementById('trash-list');
                    if (list && list.querySelectorAll('[id^="trash-item-"]').length === 0) {
                        list.innerHTML = `
                            <div class="py-20 text-center border border-dashed border-white/5 rounded-sm">
                                <div class="mb-4 inline-block p-4 rounded-full bg-slate-900/50 text-slate-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                    </svg>
                                </div>
                                <p class="font-mono text-xs text-slate-500 uppercase tracking-[0.4em]">Debris field is clear. No scraps detected.</p>
                            </div>`;
                    }
                }, 420);
            }
            showTrashToast('success', data.message || 'Module purged permanently.');
        })
        .catch(err => {
            closePurgeModal();
            showTrashToast('error', 'Gagal menghapus. Coba lagi.');
            console.error(err);
        })
        .finally(() => {
            btn.disabled = false;
            btnText.textContent = 'Ya, Purge Sekarang';
        });
    }

    function showTrashToast(type, message) {
        const toast = document.getElementById('trashToast');
        const msg   = document.getElementById('trashToastMsg');
        const icon  = document.getElementById('trashToastIcon');

        // Reset classes
        toast.classList.remove(
            'bg-emerald-950/90','border-emerald-500/40','text-emerald-300',
            'bg-rose-950/90','border-rose-500/40','text-rose-300'
        );

        if (type === 'success') {
            toast.classList.add('bg-emerald-950/90','border-emerald-500/40','text-emerald-300');
            icon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>`;
        } else {
            toast.classList.add('bg-rose-950/90','border-rose-500/40','text-rose-300');
            icon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>`;
        }

        msg.textContent = message;
        toast.classList.remove('hidden');
        toast.classList.add('flex');
        requestAnimationFrame(() => requestAnimationFrame(() => {
            toast.classList.remove('opacity-0','translate-x-4');
            toast.classList.add('opacity-100','translate-x-0');
        }));
        setTimeout(() => {
            toast.classList.remove('opacity-100','translate-x-0');
            toast.classList.add('opacity-0','translate-x-4');
            setTimeout(() => { toast.classList.add('hidden'); toast.classList.remove('flex'); }, 300);
        }, 3500);
    }

    document.addEventListener('keydown', e => { if (e.key === 'Escape') closePurgeModal(); });
</script>
@endsection