 <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
 <div class="min-h-screen flex items-center justify-center bg-black">
  <div class="w-full max-w-md bg-black/70 border border-red-500/30 rounded-2xl shadow-lg shadow-red-500/20 p-8">

    <h2 class="text-3xl font-bold text-center text-red-500 mb-6">
      Login
    </h2>

    <form action="/login" method="POST" class="space-y-5">
      @csrf

                      @if (session('error'))
    <div
        id="success-alert"
        class="fixed top-6 right-6 z-50
            flex items-center gap-3
            px-4 py-3
            max-w-sm
            bg-red-500 text-white
            shadow-lg backdrop-blur
            text-sm
            animate-slide-in">
        <span class="font-medium">
            {{ session('error') }}
        </span>

        <button
            onclick="closeAlert()"
            class="ml-auto text-white/80 hover:text-white">
            ✕
        </button>
    </div>

    <script>
        const alertEl = document.getElementById('success-alert');

        function closeAlert() {
            alertEl.classList.add('opacity-0', 'translate-x-4');
            setTimeout(() => alertEl.remove(), 300);
        }

        setTimeout(closeAlert, 3000);
    </script>

    <style>
    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateX(16px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .animate-slide-in {
        animation: slideIn 0.4s ease-out;
    }
    </style>
    @endif

      <!-- Input Nama -->
      <div>
        <label class="block text-sm text-gray-300 mb-1">Email</label>
        <input 
          type="text" 
          name="email" 
          value="{{ old('email') }}"
          class="w-full px-4 py-2 bg-black border border-red-500/40 rounded-lg
                 text-white focus:outline-none focus:ring-2 focus:ring-red-500"
          placeholder="Masukkan Email"
        >
      </div>
      <div>
        <label class="block text-sm text-gray-300 mb-1">Password</label>
        <input 
          type="password" 
          name="password" 
          value="{{ old('password') }}"
          class="w-full px-4 py-2 bg-black border border-red-500/40 rounded-lg
                 text-white focus:outline-none focus:ring-2 focus:ring-red-500"
          placeholder="Masukkan Password"
        >
      </div>

      <!-- Tombol Submit -->
      <button 
        type="submit"
        class="w-full bg-red-600 hover:bg-red-700 text-white font-semibold
               py-2 rounded-lg transition duration-300 shadow-md shadow-red-500/30"
      >
        Simpan
      </button>
    </form>

  </div>
</div>


