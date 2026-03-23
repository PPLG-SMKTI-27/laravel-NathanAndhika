@extends('layouts.main')

@section('title', 'Project Mission Control')

@section('content')
<div class="min-h-screen bg-[#030712] text-cyan-50 relative overflow-hidden font-sans selection:bg-cyan-500/30">

    <div class="absolute inset-0 pointer-events-none bg-[linear-gradient(rgba(6,182,212,0.05)_1px,transparent_1px),linear-gradient(90deg,rgba(6,182,212,0.05)_1px,transparent_1px)] bg-size-[40px_40px] mask-[radial-gradient(ellipse_100%_100%_at_50%_50%,#000_10%,transparent_80%)]"></div>
    
    <div class="absolute top-[-10%] right-[-10%] w-[60vw] h-[60vw] bg-indigo-900/20 rounded-full blur-[150px] pointer-events-none"></div>
    <div class="absolute bottom-[-10%] left-[-10%] w-[50vw] h-[50vw] bg-cyan-900/20 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="absolute inset-0 pointer-events-none overflow-hidden opacity-30">
        <div class="absolute h-px w-32 bg-linear-to-r from-transparent via-cyan-400 to-white animate-dataStream1" style="top: 20%; left: -10%;"></div>
        <div class="absolute h-px w-24 bg-linear-to-r from-transparent via-blue-400 to-white animate-dataStream2" style="top: 60%; left: -10%;"></div>
    </div>

    <nav class="relative z-20 border-b border-cyan-900/50 bg-[#030712]/80 backdrop-blur-xl shadow-[0_4px_30px_rgba(0,0,0,0.5)]">
        <div class="w-full px-6 py-4 flex flex-wrap justify-between items-center gap-4">
            
            <div class="flex items-center gap-4">
                <div class="relative flex items-center justify-center w-12 h-12 bg-cyan-950/50 rounded-sm border border-cyan-500/30 overflow-hidden group">
                    <div class="absolute inset-0 bg-cyan-500/10 group-hover:bg-cyan-500/20 transition-colors"></div>
                    <div class="absolute top-0 left-0 w-full h-px bg-cyan-400/50 animate-[scan_2s_linear_infinite]"></div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-cyan-400 relative z-10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                        <line x1="8" y1="21" x2="16" y2="21"></line>
                        <line x1="12" y1="17" x2="12" y2="21"></line>
                    </svg>
                </div>
                <div class="flex flex-col">
                    <div class="flex items-center gap-2">
                        <span class="w-2 h-2 bg-cyan-500 rounded-full animate-pulse shadow-[0_0_8px_rgba(6,182,212,0.8)]"></span>
                        <span class="text-sm font-black tracking-widest uppercase text-white leading-none">Dashboard</span>
                    </div>
                    <span class="text-[10px] text-cyan-500/70 font-mono tracking-[0.3em] mt-1">SYS.OP.ACTIVE</span>
                </div>
            </div>

            <div class="flex items-center gap-3 font-mono text-[11px] uppercase tracking-widest font-bold">
                <a href="{{ url('/') }}"
                    class="flex items-center gap-2 px-4 py-2 border-b-2 border-transparent text-slate-400 hover:border-cyan-500 hover:text-cyan-300 transition-all duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    Earth Base
                </a>

                <a href="{{ route('profile.edit') }}"
                    class="px-4 py-2 border-b-2 border-transparent text-slate-400 hover:border-cyan-500 hover:text-cyan-300 transition-all duration-300">
                    My Profile
                </a>

                <form method="POST" action="{{ route('logout') }}" class="m-0 ml-2">
                    @csrf
                    <button type="submit"
                        class="px-5 py-2 border border-rose-900/50 bg-rose-950/30 hover:bg-rose-900 hover:text-white text-rose-400 transition-all rounded-sm shadow-[0_0_15px_rgba(225,29,72,0.1)] hover:shadow-[0_0_20px_rgba(225,29,72,0.4)]">
                        Abort Mission
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <main class="relative z-10 w-full px-6 py-12">
        
        <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-8 mb-12 border-b border-cyan-900/30 pb-6">
            <div class="relative">
                <div class="flex items-center gap-3 mb-2">
                    <div class="h-[2px] w-8 bg-cyan-500 shadow-[0_0_10px_rgba(6,182,212,1)]"></div>
                    <span class="font-mono text-[10px] text-cyan-400 tracking-[0.4em] uppercase">Project Inventory</span>
                </div>
                <h1 class="text-4xl md:text-5xl font-black text-white tracking-tighter uppercase">
                    Active <span class="text-transparent bg-clip-text bg-linear-to-r from-cyan-400 to-blue-500">Deployments</span>
                </h1>
            </div>

            <div class="flex flex-wrap items-center gap-4">
                <a href="{{ route('projects.history') }}"
                    class="flex items-center gap-2 px-5 py-2.5 bg-slate-900/50 border border-slate-700 text-slate-400 hover:text-cyan-300 hover:border-cyan-800 hover:bg-cyan-950/30 transition-all font-mono text-[10px] uppercase tracking-widest rounded-sm">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    Mission_Logs
                </a>
                
                <a href="{{ route('projects.trash') }}"
                    class="flex items-center gap-2 px-5 py-2.5 bg-slate-900/50 border border-slate-700 text-slate-400 hover:text-rose-400 hover:border-rose-900/80 hover:bg-rose-950/30 transition-all font-mono text-[10px] uppercase tracking-widest rounded-sm">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                    Space_Debris
                </a>

                <a href="{{ route('projects.create') }}"
                    class="group relative px-6 py-2.5 bg-cyan-500 text-[#030712] font-black uppercase tracking-widest text-[11px] hover:bg-cyan-400 transition-all shadow-[0_0_20px_rgba(6,182,212,0.4)] hover:shadow-[0_0_30px_rgba(6,182,212,0.6)] rounded-sm overflow-hidden flex items-center gap-2 ml-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    <span class="relative z-10">Launch Module</span>
                    <div class="absolute top-0 -inset-full h-full w-1/2 z-5 block transform -skew-x-12 bg-linear-to-r from-transparent to-white opacity-40 group-hover:animate-[shimmer_1s_infinite]"></div>
                </a>
            </div>
        </div>

        @if(session('success'))
            <div class="mb-8 p-4 bg-emerald-500/10 border border-emerald-500/20 rounded-sm">
                <p class="font-mono text-xs text-emerald-500 uppercase tracking-widest text-center">Protocol_Success: {{ session('success') }}</p>
            </div>
        @endif

        @if(session('error'))
            <div class="mb-8 p-4 bg-rose-500/10 border border-rose-500/20 rounded-sm">
                <p class="font-mono text-xs text-rose-500 uppercase tracking-widest text-center">Protocol_Failure: {{ session('error') }}</p>
            </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            @forelse($projects as $project)
                <div class="group relative bg-[#0a0f1c] border border-cyan-900/30 rounded-sm hover:border-cyan-500/60 transition-all duration-300 flex flex-col hover:-translate-y-1 shadow-lg hover:shadow-cyan-900/20">
                    
                    <div class="flex justify-between items-center px-4 py-2 bg-cyan-950/20 border-b border-cyan-900/30">
                        <div class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 shadow-[0_0_5px_rgba(16,185,129,1)]"></span>
                            <span class="font-mono text-[9px] text-slate-400 uppercase tracking-widest">Sys_Nominal</span>
                        </div>
                        <span class="font-mono text-[9px] text-cyan-600 uppercase tracking-widest">ID: 00{{ $project->id }}</span>
                    </div>

                    <div class="absolute top-0 right-0 w-3 h-3 border-t border-r border-cyan-500 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="absolute bottom-0 left-0 w-3 h-3 border-b border-l border-cyan-500 opacity-0 group-hover:opacity-100 transition-opacity"></div>

                    <div class="p-6 flex-1 flex flex-col">
                        <h2 class="text-xl font-bold text-white mb-3 group-hover:text-cyan-400 transition-colors tracking-tight">
                            {{ $project->title }}
                        </h2>

                        <p class="text-slate-400 text-sm leading-relaxed mb-6 font-mono font-light line-clamp-3 flex-1">
                            > {{ $project->description }}
                        </p>

                        <div class="flex items-center justify-between mb-6 pt-4 border-t border-white/5 font-mono text-[10px] uppercase tracking-widest">
                            <span class="text-slate-500">Init_Date:</span>
                            <span class="text-cyan-200 bg-cyan-950/50 px-2 py-1 rounded-sm border border-cyan-900/50">
                                {{ optional($project->created_at)->format('Y.m.d') }}
                            </span>
                        </div>

                        {{-- Progress Project --}}
                        <div class="mb-6">
                            <div class="flex justify-between items-center font-mono text-[10px] uppercase tracking-widest mb-2">
                                <span class="text-slate-500">Progress:</span>
                                <span class="text-cyan-400">{{ $project->progress ?? 0 }}%</span>
                            </div>

                            <div class="w-full bg-slate-800 rounded-sm h-2 overflow-hidden border border-cyan-900/30">
                                <div class="h-full bg-linear-to-r from-cyan-400 to-blue-500 transition-all duration-700"
                                    style="width: {{ $project->progress ?? 0 }}%">
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-3 mt-auto">
                            <a href="{{ route('projects.edit', $project->id) }}"
                                class="py-2.5 flex justify-center items-center border border-cyan-900/50 bg-cyan-950/20 hover:bg-cyan-900/50 hover:border-cyan-500 text-cyan-300 rounded-sm transition-all text-[10px] font-bold uppercase tracking-widest">
                                Re-Configure
                            </a>

                            <button type="button"
                                onclick="confirmDelete(this, '{{ route('projects.destroy', $project->id) }}')"
                                class="w-full py-2.5 flex justify-center items-center border border-rose-900/30 bg-rose-950/10 hover:bg-rose-900/80 hover:border-rose-500 text-rose-400 hover:text-white rounded-sm transition-all text-[10px] font-bold uppercase tracking-widest">
                                Terminate
                            </button>
                        </div>
                    </div>
                </div>

            @empty
                <div class="col-span-full py-32 flex flex-col items-center justify-center border border-dashed border-cyan-900/50 bg-[#0a0f1c]/50 rounded-sm relative overflow-hidden">
                    
                    <div class="relative w-32 h-32 mb-8 flex items-center justify-center">
                        <div class="absolute inset-0 rounded-full border border-cyan-900/50"></div>
                        <div class="absolute inset-4 rounded-full border border-cyan-900/30"></div>
                        <div class="absolute inset-8 rounded-full border border-cyan-900/10"></div>
                        
                        <div class="absolute w-1/2 h-1/2 bg-linear-to-br from-cyan-500/20 to-transparent origin-bottom-right rounded-tl-full animate-[spin_3s_linear_infinite]" style="top: 0; left: 0;"></div>
                        
                        <div class="w-3 h-3 bg-cyan-500 rounded-full shadow-[0_0_15px_rgba(6,182,212,1)] relative z-10 animate-pulse"></div>
                    </div>

                    <h3 class="text-xl font-bold text-white uppercase tracking-widest mb-2 font-mono">Void Detected</h3>
                    <p class="text-slate-500 text-xs font-mono uppercase tracking-[0.2em]">0 Modules Active in Current Sector.</p>
                    
                    <a href="{{ route('projects.create') }}" class="mt-8 text-[10px] font-mono text-cyan-400 hover:text-cyan-300 border-b border-cyan-400/30 hover:border-cyan-300 pb-1 uppercase tracking-widest transition-colors">
                        Initiate First Launch Sequence
                    </a>
                </div>
            @endforelse

        </div>
    </main>
</div>

{{-- ===== MODAL KONFIRMASI HAPUS ===== --}}
<div id="deleteModal" class="fixed inset-0 z-50 hidden items-center justify-center p-4">
    {{-- Backdrop --}}
    <div id="modalBackdrop" class="absolute inset-0 bg-black/70 backdrop-blur-sm" onclick="closeDeleteModal()"></div>

    {{-- Modal Box --}}
    <div class="relative w-full max-w-md z-10 opacity-0 scale-95 transition-all duration-300" id="modalBox">
        {{-- Corner accents --}}
        <div class="absolute top-0 left-0 w-4 h-4 border-t-2 border-l-2 border-rose-500"></div>
        <div class="absolute top-0 right-0 w-4 h-4 border-t-2 border-r-2 border-rose-500"></div>
        <div class="absolute bottom-0 left-0 w-4 h-4 border-b-2 border-l-2 border-rose-500"></div>
        <div class="absolute bottom-0 right-0 w-4 h-4 border-b-2 border-r-2 border-rose-500"></div>

        <div class="bg-[#0a0f1c] border border-rose-900/60 rounded-sm shadow-[0_0_60px_rgba(225,29,72,0.2)] p-8">
            {{-- Icon --}}
            <div class="flex justify-center mb-6">
                <div class="relative w-16 h-16 flex items-center justify-center">
                    <div class="absolute inset-0 bg-rose-500/10 rounded-full animate-ping"></div>
                    <div class="absolute inset-2 bg-rose-500/10 rounded-full border border-rose-500/30"></div>
                    <svg class="w-7 h-7 text-rose-400 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                </div>
            </div>

            {{-- Label --}}
            <div class="text-center mb-1">
                <span class="font-mono text-[9px] text-rose-500/70 uppercase tracking-[0.4em]">Warning: Destructive Action</span>
            </div>

            {{-- Title --}}
            <h2 class="text-xl font-black text-white uppercase tracking-tight text-center mb-3">
                Hapus Project Ini?
            </h2>

            {{-- Message --}}
            <p class="text-slate-400 text-sm font-mono text-center leading-relaxed mb-1">
                Apakah Anda yakin ingin menghapus project ini?
            </p>
            <p class="text-slate-600 text-xs font-mono text-center mb-8">
                Project akan dipindahkan ke <span class="text-rose-400">Space Debris</span> dan dapat dipulihkan nanti.
            </p>

            {{-- Divider --}}
            <div class="border-t border-white/5 mb-6"></div>

            {{-- Buttons --}}
            <div class="flex gap-3">
                <button onclick="closeDeleteModal()"
                    class="flex-1 py-3 border border-slate-700 bg-slate-900/50 text-slate-400 hover:text-white hover:border-slate-500 hover:bg-slate-800 rounded-sm transition-all font-mono text-[10px] uppercase tracking-widest">
                    Batal
                </button>
                <button id="confirmDeleteBtn" onclick="executeDelete()"
                    class="flex-1 py-3 border border-rose-700 bg-rose-950/50 text-rose-400 hover:bg-rose-600 hover:text-white hover:border-rose-500 rounded-sm transition-all font-mono text-[10px] uppercase tracking-widest font-bold shadow-[0_0_20px_rgba(225,29,72,0.1)] hover:shadow-[0_0_20px_rgba(225,29,72,0.4)] flex items-center justify-center gap-2">
                    <svg class="w-3.5 h-3.5 btnIcon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                    <span id="confirmBtnText">Ya, Hapus</span>
                </button>
            </div>
        </div>
    </div>
</div>

{{-- ===== TOAST NOTIFIKASI ===== --}}
<div id="toastNotif" class="fixed top-6 right-6 z-[100] hidden items-center gap-3 px-5 py-4 rounded-sm border shadow-2xl max-w-sm font-mono text-xs uppercase tracking-widest transition-all duration-300 opacity-0 translate-x-4">
    <svg id="toastIcon" class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"></svg>
    <span id="toastMsg"></span>
</div>

<style>
    @keyframes shimmer { 100% { transform: translateX(200%); } }
    @keyframes scan {
        0% { top: 0; opacity: 0; }
        10% { opacity: 1; }
        90% { opacity: 1; }
        100% { top: 100%; opacity: 0; }
    }
    @keyframes dataStream1 {
        0% { transform: translateX(-100%); opacity: 0; }
        10% { opacity: 1; }
        50% { transform: translateX(150vw); opacity: 0; }
        100% { transform: translateX(150vw); opacity: 0; }
    }
    @keyframes dataStream2 {
        0% { transform: translateX(-100%); opacity: 0; }
        5% { opacity: 1; }
        40% { transform: translateX(150vw); opacity: 0; }
        100% { transform: translateX(150vw); opacity: 0; }
    }
    .animate-dataStream1 { animation: dataStream1 12s linear infinite; }
    .animate-dataStream2 { animation: dataStream2 8s linear infinite; animation-delay: 4s; }

    @keyframes fadeOut {
        0%   { opacity: 1; transform: scale(1); max-height: 500px; margin-bottom: 24px; }
        100% { opacity: 0; transform: scale(0.95); max-height: 0; margin-bottom: 0; padding: 0; }
    }
    .card-removing {
        animation: fadeOut 0.4s ease-out forwards;
        pointer-events: none;
        overflow: hidden;
    }
</style>

<script>
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    let _deleteUrl  = null;
    let _deletecard = null;

    // -------- BUKA MODAL --------
    function confirmDelete(btn, url) {
        _deleteUrl  = url;
        _deletecard = btn.closest('.group');

        const modal    = document.getElementById('deleteModal');
        const modalBox = document.getElementById('modalBox');

        modal.classList.remove('hidden');
        modal.classList.add('flex');

        // Animasi masuk
        requestAnimationFrame(() => {
            requestAnimationFrame(() => {
                modalBox.classList.remove('opacity-0', 'scale-95');
                modalBox.classList.add('opacity-100', 'scale-100');
            });
        });

        document.body.style.overflow = 'hidden';
    }

    // -------- TUTUP MODAL --------
    function closeDeleteModal() {
        const modal    = document.getElementById('deleteModal');
        const modalBox = document.getElementById('modalBox');

        modalBox.classList.remove('opacity-100', 'scale-100');
        modalBox.classList.add('opacity-0', 'scale-95');

        setTimeout(() => {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
            document.body.style.overflow = '';
            _deleteUrl  = null;
            _deletecard = null;
        }, 300);
    }

    // -------- EKSEKUSI DELETE via AJAX --------
    function executeDelete() {
        if (!_deleteUrl) return;

        const btn      = document.getElementById('confirmDeleteBtn');
        const btnText  = document.getElementById('confirmBtnText');

        // Loading state
        btn.disabled = true;
        btnText.textContent = 'Menghapus...';
        btn.querySelector('.btnIcon').innerHTML =
            `<svg class="w-3.5 h-3.5 animate-spin" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8z"></path>
             </svg>`;

        fetch(_deleteUrl, {
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': csrfToken,
                'Accept':       'application/json',
                'Content-Type': 'application/json',
            },
        })
        .then(res => {
            if (!res.ok) throw new Error('Server error: ' + res.status);
            return res.json();
        })
        .then(data => {
            closeDeleteModal();

            // Animasi hilang card
            if (_deletecard === null && data._card) _deletecard = data._card;
            if (_deletecard) {
                _deletecard.classList.add('card-removing');
                setTimeout(() => _deletecard.remove(), 420);
            }

            showToast('success', data.message || 'Project berhasil dihapus.');
        })
        .catch(err => {
            closeDeleteModal();
            showToast('error', 'Gagal menghapus project. Coba lagi.');
            console.error(err);
        })
        .finally(() => {
            btn.disabled = false;
            btnText.textContent = 'Ya, Hapus';
        });
    }

    // -------- TOAST --------
    function showToast(type, message) {
        const toast   = document.getElementById('toastNotif');
        const toastMsg  = document.getElementById('toastMsg');
        const toastIcon = document.getElementById('toastIcon');

        if (type === 'success') {
            toast.className = toast.className.replace(/bg-\S+|border-\S+|text-\S+/g, '');
            toast.classList.add(
                'bg-emerald-950/90', 'border-emerald-500/40', 'text-emerald-300',
                'shadow-emerald-900/30'
            );
            toastIcon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>`;
        } else {
            toast.className = toast.className.replace(/bg-\S+|border-\S+|text-\S+/g, '');
            toast.classList.add(
                'bg-rose-950/90', 'border-rose-500/40', 'text-rose-300',
                'shadow-rose-900/30'
            );
            toastIcon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>`;
        }

        toastMsg.textContent = message;
        toast.classList.remove('hidden');
        toast.classList.add('flex');

        requestAnimationFrame(() => {
            requestAnimationFrame(() => {
                toast.classList.remove('opacity-0', 'translate-x-4');
                toast.classList.add('opacity-100', 'translate-x-0');
            });
        });

        setTimeout(() => {
            toast.classList.remove('opacity-100', 'translate-x-0');
            toast.classList.add('opacity-0', 'translate-x-4');
            setTimeout(() => {
                toast.classList.add('hidden');
                toast.classList.remove('flex');
            }, 300);
        }, 3500);
    }

    // Tutup modal dengan Escape
    document.addEventListener('keydown', e => {
        if (e.key === 'Escape') closeDeleteModal();
    });
</script>
@endsection