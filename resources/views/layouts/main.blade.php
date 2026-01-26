<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
      <style>
    .glow {
      box-shadow: 0 0 25px rgba(239,68,68,.5);
    }
  </style>
</head>
<body class="bg-[#0f0f0f] text-gray-200 scroll-smooth">
  @if (session('success'))
    <div
        id="success-alert"
        class="fixed top-20 right-20 z-50
            flex items-center gap-3
            px-4 py-3
            max-w-sm
            rounded-xl
            bg-green-500/90 text-white
            shadow-lg backdrop-blur
            text-sm
            animate-slide-in">
        <span class="font-medium">
            {{ session('success') }}
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
    <div class="container">
        @yield('content')
    </div>
    @yield('script')
</body>
</html>