<section class="space-y-6">
    <header class="border-l-2 border-blue-500 pl-4 mb-8">
        <h2 class="text-lg font-bold text-white uppercase tracking-[0.2em] font-mono">
            {{ __('Access Credentials') }}
        </h2>
        <p class="mt-1 text-[10px] text-slate-500 uppercase tracking-widest font-mono">
            {{ __('Rotate security keys to maintain station integrity.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div class="space-y-2">
            <label for="update_password_current_password" class="font-mono text-[10px] uppercase tracking-widest text-slate-400">
                Current_Encryption_Key
            </label>
            <div class="relative group">
                <input id="update_password_current_password" name="current_password" type="password" 
                    class="w-full bg-slate-900/50 border border-white/10 focus:border-blue-500 focus:ring-1 focus:ring-blue-500/20 rounded-sm px-4 py-3 text-white transition-all" 
                    autocomplete="current-password" />
                <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none opacity-20 group-focus-within:opacity-100 transition-opacity">
                    <svg class="w-3 h-3 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 00-2 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                </div>
            </div>
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="font-mono text-[9px] text-rose-500 uppercase mt-1" />
        </div>

        <div class="space-y-2">
            <label for="update_password_password" class="font-mono text-[10px] uppercase tracking-widest text-slate-400">
                New_Sequence_Generator
            </label>
            <input id="update_password_password" name="password" type="password" 
                class="w-full bg-slate-900/50 border border-white/10 focus:border-blue-500 focus:ring-1 focus:ring-blue-500/20 rounded-sm px-4 py-3 text-white transition-all" 
                autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="font-mono text-[9px] text-rose-500 uppercase mt-1" />
        </div>

        <div class="space-y-2">
            <label for="update_password_password_confirmation" class="font-mono text-[10px] uppercase tracking-widest text-slate-400">
                Re-Verify_Sequence
            </label>
            <input id="update_password_password_confirmation" name="password_confirmation" type="password" 
                class="w-full bg-slate-900/50 border border-white/10 focus:border-blue-500 focus:ring-1 focus:ring-blue-500/20 rounded-sm px-4 py-3 text-white transition-all" 
                autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="font-mono text-[9px] text-rose-500 uppercase mt-1" />
        </div>

        <div class="flex items-center gap-6 pt-4">
            <button type="submit" 
                class="group relative px-6 py-2 bg-blue-600 hover:bg-blue-500 transition-all rounded-sm">
                <span class="relative z-10 font-mono text-[11px] font-black uppercase tracking-widest text-white">
                    Rotate_Security_Keys
                </span>
            </button>

            @if (session('status') === 'password-updated')
                <div 
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 3000)"
                    class="flex items-center gap-2 text-blue-400 font-mono text-[10px] uppercase tracking-widest"
                >
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    {{ __('Encryption_Updated') }}
                </div>
            @endif
        </div>
    </form>
</section>