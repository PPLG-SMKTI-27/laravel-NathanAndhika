@extends('layouts.main')

@section('title', 'Mission Recalibration // Edit Project')

@section('content')
<div class="min-h-screen bg-[#020617] flex items-center justify-center px-4 relative overflow-hidden selection:bg-amber-500/30">
    
    <div class="absolute inset-0 opacity-10 pointer-events-none" 
         style="background-image: radial-gradient(white 1px, transparent 0); background-size: 40px 40px;"></div>
    <div class="absolute w-[500px] h-[500px] bg-amber-500/10 rounded-full blur-[120px] -bottom-48 -right-24 animate-pulse"></div>

    <div class="w-full max-w-lg relative group">
        <div class="absolute -inset-0.5 bg-linear-to-r from-amber-500/20 to-orange-500/20 rounded-xl blur opacity-50 group-hover:opacity-100 transition duration-1000 group-hover:duration-200"></div>
        
        <div class="relative bg-slate-950/80 backdrop-blur-xl border border-white/10 rounded-xl p-8 shadow-2xl">
            
            <div class="mb-8 border-b border-white/5 pb-6">
                <div class="flex items-center gap-2 mb-2">
                    <span class="w-2 h-2 bg-amber-500 animate-pulse rounded-full shadow-[0_0_8px_rgba(245,158,11,0.8)]"></span>
                    <span class="font-mono text-[10px] tracking-[0.4em] text-amber-500 uppercase">Override Protocol: Beta-02</span>
                </div>
                <h2 class="text-3xl font-black text-white tracking-tighter uppercase">
                    Recalibrate <span class="text-slate-500">Mission</span>
                </h2>
                <p class="font-mono text-[10px] text-slate-500 mt-2 uppercase tracking-widest">Target ID: {{ $project->id }}</p>

                @if(session('success'))
                    <div class="mt-4 p-3 bg-emerald-500/10 border border-emerald-500/20 rounded-sm">
                        <p class="font-mono text-[10px] text-emerald-500 uppercase tracking-widest text-center">Protocol_Success: {{ session('success') }}</p>
                    </div>
                @endif

                @if(session('error'))
                    <div class="mt-4 p-3 bg-rose-500/10 border border-rose-500/20 rounded-sm">
                        <p class="font-mono text-[10px] text-rose-500 uppercase tracking-widest text-center">Protocol_Failure: {{ session('error') }}</p>
                    </div>
                @endif
            </div>

            <form method="POST" action="{{ route('projects.update', $project->id) }}" class="space-y-6" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="space-y-2">
                    <label class="font-mono text-[10px] uppercase tracking-widest text-slate-400 flex justify-between">
                        <span>Project_Identifier</span>
                        <span class="text-amber-500/50">Required*</span>
                    </label>
                    <div class="relative">
                        <input type="text" name="title"
                            value="{{ old('title', $project->title) }}"
                            class="w-full bg-slate-900/50 border border-white/10 focus:border-amber-500 focus:ring-1 focus:ring-amber-500/20 rounded-sm px-4 py-3 text-white font-medium transition-all placeholder:text-slate-700"
                            required>
                    </div>
                    @error('title')
                        <p class="font-mono text-[9px] text-rose-500 uppercase tracking-tighter mt-1">Error: {{ $message }}</p>
                    @enderror
                </div>

                <div class="space-y-2">
                    <label class="font-mono text-[10px] uppercase tracking-widest text-slate-400">Mission_Parameters</label>
                    <textarea name="description" rows="4"
                        class="w-full bg-slate-900/50 border border-white/10 focus:border-amber-500 focus:ring-1 focus:ring-amber-500/20 rounded-sm px-4 py-3 text-white transition-all placeholder:text-slate-700 resize-none"
                        required>{{ old('description', $project->description) }}</textarea>
                    @error('description')
                        <p class="font-mono text-[9px] text-rose-500 uppercase tracking-tighter mt-1">Error: {{ $message }}</p>
                    @enderror
                </div>

                <div class="space-y-2">
                    <label class="font-mono text-[10px] uppercase tracking-widest text-slate-400 flex items-center gap-2">
                        <svg class="w-3 h-3 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        Stack_Environment
                    </label>
                    <input type="text" name="technology"
                        value="{{ old('technology', is_array($project->technology) ? implode(', ', $project->technology) : $project->technology) }}"
                        class="w-full bg-slate-900/50 border border-white/10 focus:border-amber-500 focus:ring-1 focus:ring-amber-500/20 rounded-sm px-4 py-3 text-white font-mono text-sm transition-all placeholder:text-slate-700">
                </div>

                <div class="space-y-2">
                    <label class="font-mono text-[10px] uppercase tracking-widest text-slate-400 flex items-center gap-2">
                        <svg class="w-3 h-3 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.828a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path></svg>
                        Repository_URL
                    </label>
                    <input type="url" name="repo_url"
                        value="{{ old('repo_url', $project->repo_url) }}"
                        class="w-full bg-slate-900/50 border border-white/10 focus:border-amber-500 focus:ring-1 focus:ring-amber-500/20 rounded-sm px-4 py-3 text-white font-mono text-sm transition-all placeholder:text-slate-700"
                        placeholder="https://github.com/user/repo">
                </div>

                <div class="space-y-2">
                    <label class="font-mono text-[10px] uppercase tracking-widest text-slate-400 flex items-center gap-2">
                        <svg class="w-3 h-3 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        Update_Screenshots
                    </label>
                    <input type="file" name="screenshots[]" multiple
                        class="w-full bg-slate-900/50 border border-white/10 focus:border-amber-500 focus:ring-1 focus:ring-amber-500/20 rounded-sm px-4 py-3 text-white font-mono text-xs transition-all file:mr-4 file:py-1 file:px-3 file:rounded-sm file:border-0 file:text-[10px] file:font-semibold file:bg-amber-500/10 file:text-amber-400 hover:file:bg-amber-500/20">
                    <p class="text-[9px] text-slate-500 font-mono italic mt-1 uppercase tracking-tight text-justify">Uploading new files will append to existing ones. JPG, PNG, WEBP (Max 2MB per file).</p>
                    
                    @if($project->screenshots && count($project->screenshots) > 0)
                        <div class="grid grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
                            @foreach($project->screenshots as $screenshot)
                                <div class="flex flex-col gap-3 group/img">
                                    <div class="relative aspect-video bg-slate-900 rounded-md border border-white/10 overflow-hidden shadow-2xl transition-transform duration-300 group-hover/img:scale-[1.02]">
                                        <img src="{{ asset('storage/' . $screenshot) }}" class="w-full h-full object-cover opacity-90 group-hover/img:opacity-100 transition-opacity" alt="Existing Screenshot">
                                        <div class="absolute inset-0 bg-linear-to-t from-black/60 to-transparent opacity-0 group-hover/img:opacity-100 transition-opacity pointer-events-none"></div>
                                    </div>
                                    
                                    <button type="button" 
                                            onclick="openDeletePhotoModal('{{ $screenshot }}')"
                                            class="w-full py-2 bg-rose-500 hover:bg-rose-600 text-white font-mono text-[10px] font-black uppercase tracking-[0.2em] rounded-sm transition-all shadow-lg flex items-center justify-center gap-2 active:scale-95 shadow-rose-500/10">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                        Hapus_Sector_Visual
                                    </button>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>



                <div class="space-y-2">
                    <label class="font-mono text-[10px] uppercase tracking-widest text-slate-400 flex justify-between">
                        <span class="flex items-center gap-2"><svg class="w-3 h-3 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg> Mission_Progress</span>
                        <span id="progress-value" class="text-amber-400 font-bold">{{ old('progress', $project->progress ?? 0) }}%</span>
                    </label>
                    <input type="range" name="progress" min="0" max="100" value="{{ old('progress', $project->progress ?? 0) }}"
                        oninput="document.getElementById('progress-value').innerText = this.value + '%'"
                        class="w-full h-1.5 bg-slate-800 rounded-lg appearance-none cursor-pointer accent-amber-500 hover:accent-amber-400">
                </div>

                <div class="flex items-center justify-between pt-6 gap-4">
                    <a href="{{ route('dashboard') }}"
                       class="font-mono text-[10px] uppercase tracking-[0.2em] text-slate-500 hover:text-white transition-colors py-2">
                        [ Abort_Modification ]
                    </a>

                    <button type="submit"
                        class="group relative px-8 py-3 overflow-hidden bg-amber-600 rounded-sm transition-all hover:bg-amber-500 active:scale-95">
                        <div class="absolute inset-0 bg-linear-to-r from-transparent via-white/20 to-transparent -translate-x-full group-hover:animate-[shimmer_1.5s_infinite]"></div>
                        <span class="relative z-10 font-mono text-[11px] font-black uppercase tracking-widest text-white">
                            Apply Recalibration
                        </span>
                    </button>
                </div>
            </form>
        </div>

        {{-- ===== MODAL HAPUS FOTO ===== --}}
        <div id="photoModal" class="fixed inset-0 z-50 hidden items-center justify-center p-4">
            <div class="absolute inset-0 bg-black/75 backdrop-blur-sm" onclick="closePhotoModal()"></div>

            <div class="relative w-full max-w-md z-10 opacity-0 scale-95 transition-all duration-300" id="photoModalBox">
                <div class="absolute top-0 left-0 w-4 h-4 border-t-2 border-l-2 border-amber-500"></div>
                <div class="absolute top-0 right-0 w-4 h-4 border-t-2 border-r-2 border-amber-500"></div>
                <div class="absolute bottom-0 left-0 w-4 h-4 border-b-2 border-l-2 border-amber-500"></div>
                <div class="absolute bottom-0 right-0 w-4 h-4 border-b-2 border-r-2 border-amber-500"></div>

                <div class="bg-[#0a0a05] border border-amber-900/60 rounded-sm shadow-[0_0_60px_rgba(245,158,11,0.15)] p-8">
                    <div class="flex justify-center mb-6">
                        <div class="relative w-16 h-16 flex items-center justify-center">
                            <div class="absolute inset-0 bg-amber-500/10 rounded-full animate-ping" style="animation-duration:1.8s"></div>
                            <div class="absolute inset-2 bg-amber-500/10 rounded-full border border-amber-500/30"></div>
                            <svg class="w-7 h-7 text-amber-400 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </div>
                    </div>

                    <div class="text-center mb-1">
                        <span class="font-mono text-[9px] text-amber-500/70 uppercase tracking-[0.4em]">Warning: File Removal</span>
                    </div>
                    <h2 class="text-xl font-black text-white uppercase tracking-tight text-center mb-3">Hapus Foto Ini?</h2>
                    <p class="text-slate-400 text-sm font-mono text-center leading-relaxed mb-2">
                        Apakah Anda yakin ingin menghapus screenshot ini?
                    </p>
                    <p class="text-slate-600 text-xs font-mono text-center mb-8">
                        File akan dihapus dari <span class="text-amber-400">storage</span> secara permanen.
                    </p>

                    <div class="border-t border-white/5 mb-6"></div>

                    <div class="flex gap-3">
                        <button onclick="closePhotoModal()"
                            class="flex-1 py-3 border border-slate-700 bg-slate-900/50 text-slate-400 hover:text-white hover:border-slate-500 hover:bg-slate-800 rounded-sm transition-all font-mono text-[10px] uppercase tracking-widest">
                            Batal
                        </button>
                        <button id="photoConfirmBtn" onclick="executePhotoDelete()"
                            class="flex-1 py-3 border border-amber-700 bg-amber-950/40 text-amber-400 hover:bg-amber-500 hover:text-black hover:border-amber-400 rounded-sm transition-all font-mono text-[10px] uppercase tracking-widest font-bold flex items-center justify-center gap-2 shadow-[0_0_20px_rgba(245,158,11,0.1)] hover:shadow-[0_0_20px_rgba(245,158,11,0.4)]">
                            <svg class="w-3.5 h-3.5 photoIcon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                            </svg>
                            <span id="photoBtnText">Ya, Hapus Foto</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        {{-- Toast --}}
        <div id="photoToast" class="fixed top-6 right-6 z-[100] hidden items-center gap-3 px-5 py-4 rounded-sm border shadow-2xl max-w-sm font-mono text-xs uppercase tracking-widest transition-all duration-300 opacity-0 translate-x-4">
            <svg id="photoToastIcon" class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"></svg>
            <span id="photoToastMsg"></span>
        </div>

        <script>
            const photoCsrf = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            const deleteScreenshotUrl = '{{ route("projects.deleteScreenshot", $project->id) }}';
            let _photoPath    = null;
            let _photoWrapper = null;

            function openDeletePhotoModal(path) {
                _photoPath = path;
                // cari wrapper foto terdekat dari button yang di-klik
                // kita track via class group/img
                document.querySelectorAll('[data-photo-path]').forEach(el => {
                    if (el.dataset.photoPath === path) _photoWrapper = el;
                });

                const modal = document.getElementById('photoModal');
                const box   = document.getElementById('photoModalBox');
                modal.classList.remove('hidden');
                modal.classList.add('flex');
                requestAnimationFrame(() => requestAnimationFrame(() => {
                    box.classList.remove('opacity-0','scale-95');
                    box.classList.add('opacity-100','scale-100');
                }));
                document.body.style.overflow = 'hidden';
            }

            function closePhotoModal() {
                const modal = document.getElementById('photoModal');
                const box   = document.getElementById('photoModalBox');
                box.classList.remove('opacity-100','scale-100');
                box.classList.add('opacity-0','scale-95');
                setTimeout(() => {
                    modal.classList.add('hidden');
                    modal.classList.remove('flex');
                    document.body.style.overflow = '';
                    _photoPath = _photoWrapper = null;
                }, 300);
            }

            function executePhotoDelete() {
                if (!_photoPath) return;
                const btn     = document.getElementById('photoConfirmBtn');
                const btnText = document.getElementById('photoBtnText');
                btn.disabled  = true;
                btnText.textContent = 'Menghapus...';
                btn.querySelector('.photoIcon').innerHTML =
                    `<svg class="w-3.5 h-3.5 animate-spin" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8z"></path>
                    </svg>`;

                const body = JSON.stringify({ path: _photoPath });

                fetch(deleteScreenshotUrl, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': photoCsrf,
                        'Accept':       'application/json',
                        'Content-Type': 'application/json',
                    },
                    body: body,
                })
                .then(res => {
                    if (!res.ok) throw new Error('Error: ' + res.status);
                    return res.json();
                })
                .then(data => {
                    closePhotoModal();
                    // Hapus wrapper foto dari DOM
                    if (_photoWrapper) {
                        _photoWrapper.style.transition = 'opacity 0.3s, transform 0.3s';
                        _photoWrapper.style.opacity = '0';
                        _photoWrapper.style.transform = 'scale(0.9)';
                        setTimeout(() => _photoWrapper.remove(), 320);
                    }
                    showPhotoToast('success', data.message || 'Foto berhasil dihapus.');
                })
                .catch(err => {
                    closePhotoModal();
                    showPhotoToast('error', 'Gagal menghapus foto. Coba lagi.');
                    console.error(err);
                })
                .finally(() => {
                    btn.disabled = false;
                    btnText.textContent = 'Ya, Hapus Foto';
                });
            }

            function showPhotoToast(type, message) {
                const toast = document.getElementById('photoToast');
                const msg   = document.getElementById('photoToastMsg');
                const icon  = document.getElementById('photoToastIcon');
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

            document.addEventListener('keydown', e => { if (e.key === 'Escape') closePhotoModal(); });
        </script>
        
        <div class="mt-4 flex justify-between px-2 font-mono text-[8px] text-slate-600 uppercase tracking-widest">
            <span>Status: Override_Pending</span>
            <span>Auth: Verified</span>
        </div>
    </div>

</div>

<style>
    @keyframes shimmer {
        100% { transform: translateX(100%); }
    }
</style>
@endsection