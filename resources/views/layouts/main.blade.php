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
    .glow {
      box-shadow: 0 0 25px rgba(239,68,68,.5);
    }
    
    .space-btn:hover{
  box-shadow:0 0 12px #22d3ee,0 0 20px #a855f7;
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