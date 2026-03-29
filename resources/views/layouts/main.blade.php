<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      referrerpolicy="no-referrer" />

    <style>
        :root {
            --color-primary: #06b6d4; /* Cyan */
            --color-secondary: #a855f7; /* Purple */
            --bg-dark: #020617; /* Deep Space */
        }

        .glow {
            box-shadow: 0 0 25px rgba(239,68,68,.5);
        }
        
        .space-btn:hover {
            box-shadow: 0 0 12px #22d3ee, 0 0 20px #a855f7;
        }

        /* --- STYLING SCROLLBAR TEMA ASTRONOT --- */
        html { scroll-behavior: smooth; }
        
        * { 
            scrollbar-width: thin; 
            scrollbar-color: var(--color-primary) var(--bg-dark); 
        }
        
        ::-webkit-scrollbar { 
            width: 10px; 
        }
        
        ::-webkit-scrollbar-track { 
            background: var(--bg-dark); 
            border-left: 1px solid rgba(6, 182, 212, 0.1);
        }
        
        ::-webkit-scrollbar-thumb {
            background: linear-gradient(180deg, var(--color-primary), var(--color-secondary));
            border-radius: 999px; 
            border: 2px solid var(--bg-dark); 
            background-clip: content-box;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(180deg, #22d3ee, #c084fc); /* Lebih terang saat di-hover */
        }

        /* --- CUSTOM ROCKET CURSOR --- */
        html, body {
            cursor: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 32 32'%3E%3Cg transform='rotate(-35 16 16)'%3E%3Cpath d='M16 2 C16 2 13 5 12 10 C11 15 11.5 20 12 22 L14 23 L18 23 L20 22 C20.5 20 21 15 20 10 C19 5 16 2 16 2Z' fill='%23e2e8f0' stroke='%2306b6d4' stroke-width='1'/%3E%3Cellipse cx='16' cy='12' rx='2' ry='2.5' fill='%2306b6d4'/%3E%3Cpath d='M12 18 Q9 19 8 22 L12 20Z' fill='%2306b6d4' opacity='0.7'/%3E%3Cpath d='M20 18 Q23 19 24 22 L20 20Z' fill='%2306b6d4' opacity='0.7'/%3E%3Cpath d='M14 23 L15 27 L16 25.5 L17 27 L18 23Z' fill='%23f97316'/%3E%3Cpath d='M14.8 23 L15.5 25.5 L16 24.5 L16.5 25.5 L17.2 23Z' fill='%23fbbf24'/%3E%3C/g%3E%3C/svg%3E") 4 2, auto;
        }

        a, button, [onclick], input[type="submit"], .cursor-pointer, [role="button"] {
            cursor: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 32 32'%3E%3Cg transform='rotate(-35 16 16)'%3E%3Cpath d='M16 2 C16 2 13 5 12 10 C11 15 11.5 20 12 22 L14 23 L18 23 L20 22 C20.5 20 21 15 20 10 C19 5 16 2 16 2Z' fill='%2306b6d4' stroke='%2322d3ee' stroke-width='1'/%3E%3Cellipse cx='16' cy='12' rx='2' ry='2.5' fill='%23ffffff'/%3E%3Cpath d='M12 18 Q9 19 8 22 L12 20Z' fill='%2322d3ee' opacity='0.8'/%3E%3Cpath d='M20 18 Q23 19 24 22 L20 20Z' fill='%2322d3ee' opacity='0.8'/%3E%3Cpath d='M14 23 L15 27 L16 25.5 L17 27 L18 23Z' fill='%23fbbf24'/%3E%3Cpath d='M14.8 23 L15.5 25.5 L16 24.5 L16.5 25.5 L17.2 23Z' fill='%23fde68a'/%3E%3C/g%3E%3C/svg%3E") 4 2, pointer;
        }

        /* --- STYLING TEXT SELECTION --- */
        ::selection {
            background: rgba(6, 182, 212, 0.3); /* Transparan Cyan */
            color: #cffafe; /* Cyan muda */
            text-shadow: 0 0 8px rgba(6, 182, 212, 0.8);
        }
    </style>
</head>
<body class="bg-[#0f0f0f] text-gray-200 scroll-smooth">
    {{-- @include('layouts.navigation') --}}
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
    <div class="w-full min-h-screen">
    @yield('content')
</div>
    <script src="https://unpkg.com/alpinejs" defer></script>
    @yield('script')

    {{-- (---Lagu---) --}}
<audio id="bgMusic" loop></audio>

<div class="fixed bottom-6 right-6 z-50 flex items-center gap-4
bg-linear-to-r from-indigo-900/70 via-purple-900/70 to-black/70
backdrop-blur-md px-5 py-3 rounded-xl border border-cyan-400/40
shadow-[0_0_25px_rgba(34,211,238,0.4)]">

    <span id="songTitle" class="text-sm text-cyan-300 font-semibold tracking-wide">
        Loading...
    </span>

    <button onclick="prevSong()" class="space-btn text-cyan-300">
    ⏮
    </button>

    <button onclick="toggleMusic()" class="space-btn text-purple-300">
    🔊
    </button>

    <button onclick="nextSong()" class="space-btn text-cyan-300">
    ⏭
    </button>

</div>

<script>

let music = document.getElementById("bgMusic");
let title = document.getElementById("songTitle");

let songs = [
{
title: "What It Is",
src: "/audio/music.mp3"
},
{
title: "Sency",
src: "/audio/music2.mp3"
}
];

let currentSong = localStorage.getItem("songIndex") || 0;

function loadSong(){

music.src = songs[currentSong].src;
title.innerText = songs[currentSong].title;

}

loadSong();

function toggleMusic(){

if(music.paused){
music.play();
localStorage.setItem("musicPlaying","true");
}else{
music.pause();
localStorage.setItem("musicPlaying","false");
}

}

function nextSong(){

currentSong++;

if(currentSong >= songs.length){
currentSong = 0;
}

localStorage.setItem("songIndex", currentSong);

loadSong();
music.play();

}

function prevSong(){

currentSong--;

if(currentSong < 0){
currentSong = songs.length - 1;
}

localStorage.setItem("songIndex", currentSong);

loadSong();
music.play();

}

/* autoplay jika sebelumnya play */

if(localStorage.getItem("musicPlaying") === "true"){
music.play();
}

</script>
</body>
</html>