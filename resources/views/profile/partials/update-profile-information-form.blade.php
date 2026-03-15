<section class="space-y-6">
    <header class="border-l-2 border-cyan-500 pl-4 mb-8">
        <h2 class="text-lg font-bold text-white uppercase tracking-[0.2em] font-mono">
            {{ __('Personnel Information') }}
        </h2>
        <p class="mt-1 text-[10px] text-slate-500 uppercase tracking-widest font-mono">
            {{ __("Modify core identifier and communication frequency.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div class="space-y-2">
            <label for="name" class="font-mono text-[10px] uppercase tracking-widest text-slate-400">
                Commander_Name
            </label>
            <div class="relative group">
                <input id="name" name="name" type="text" 
                    class="w-full bg-slate-900/50 border border-white/10 focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500/20 rounded-sm px-4 py-3 text-white font-medium transition-all" 
                    value="{{ old('name', $user->name) }}" required autofocus autocomplete="name" />
                <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none opacity-20 group-focus-within:opacity-100 transition-opacity">
                    <span class="font-mono text-[10px] text-cyan-500">A1</span>
                </div>
            </div>
            <x-input-error class="font-mono text-[9px] text-rose-500 uppercase mt-1" :messages="$errors->get('name')" />
        </div>

        <div class="space-y-2">
            <label for="email" class="font-mono text-[10px] uppercase tracking-widest text-slate-400">
                Frequency_Address (Email)
            </label>
            <div class="relative group">
                <input id="email" name="email" type="email" 
                    class="w-full bg-slate-900/50 border border-white/10 focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500/20 rounded-sm px-4 py-3 text-white font-medium transition-all" 
                    value="{{ old('email', $user->email) }}" required autocomplete="username" />
            </div>
            <x-input-error class="font-mono text-[9px] text-rose-500 uppercase mt-1" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div class="p-4 mt-4 bg-rose-500/5 border border-rose-500/20 rounded-sm">
                    <p class="text-[10px] font-mono uppercase text-rose-400 flex items-center gap-2">
                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"/></svg>
                        {{ __('Identity Verification Required.') }}
                    </p>

                    <button form="send-verification" class="mt-2 font-mono text-[9px] uppercase tracking-tighter text-slate-500 hover:text-cyan-400 underline transition-colors">
                        {{ __('Re-send Uplink Signal') }}
                    </button>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-mono text-[9px] uppercase text-emerald-400 animate-pulse">
                            {{ __('Signal sent. Check your transmission inbox.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-6 pt-4">
            <button type="submit" 
                class="group relative px-6 py-2 bg-cyan-600 hover:bg-cyan-500 transition-all rounded-sm">
                <span class="relative z-10 font-mono text-[11px] font-black uppercase tracking-widest text-white">
                    Update_Personnel_Data
                </span>
            </button>

            @if (session('status') === 'profile-updated')
                <div 
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 3000)"
                    class="flex items-center gap-2 text-emerald-400 font-mono text-[10px] uppercase tracking-widest"
                >
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                    {{ __('Sync_Success') }}
                </div>
            @endif
        </div>
    </form>
</section>