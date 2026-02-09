@extends('layouts.main')
@section('title','Andikss Projects')
@section('content')

<!-- NAVBAR -->
<nav class="fixed w-full bg-black/40 backdrop-blur z-50 border-b border-red-500/20">
  <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
    
    <!-- LOGO -->
    <a href="/" class="text-xl font-bold text-red-500">🔥 ANDIKSS</a>

    <!-- MENU DESKTOP -->
    <div class="hidden md:flex space-x-8">
      <a href="/" class="hover:text-red-500">Home</a>
      <a href="/" class="hover:text-red-500">Contact</a>
    </div>

  </div>

  <!-- MOBILE MENU POPUP -->
  <div id="mobile-menu" class="hidden bg-black/80 backdrop-blur w-full text-center space-y-4 py-6">
    <a href="/" class="block hover:text-red-500">Home</a>
    <a href="/" class="block hover:text-red-500">Contact</a>
  </div>
</nav>



<!-- HEADER -->
<section
  id="projects"
  class="pt-40 md:pt-45 scroll-mt-32 text-center px-6"
>
  <h1 class="text-5xl md:text-6xl font-extrabold mb-4
    bg-gradient-to-r from-red-500  to-white bg-clip-text text-transparent">
    {{ $nama }} Projects
  </h1>
  
  <p class="text-gray-400 max-w-2xl mx-auto">
    Kumpulan project pemrograman yang saya bangun dengan fokus performa,
    desain modern, dan clean code.
  </p>

</section>




<!-- PROJECT LIST -->
<section class="max-w-7xl mx-auto px-6 pb-24">
  <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">

    @if ($projects->isEmpty())
    <p>Data project belum tersedia</p>
@else

 @foreach($projects as $s)
    <div class="bg-[#141414] p-6 rounded-xl border border-red-500/20 hover:glow hover:-translate-y-2 transition">
      <h3 class="text-xl font-semibold mb-2">{{ $s->title }}</h3>
      <p class="text-gray-400 text-sm mb-4">
       {{ $s->description }}
      </p>
      <div class="flex flex-wrap gap-2 mb-4">
        @foreach ($s->technology as $tech)
          <span class="text-xs px-3 py-1 border border-red-500/40 rounded-full">
          {{ $tech }}
          </span>
        @endforeach
      </div>
      <a href="#" class="text-red-500 text-sm hover:underline">View Project →</a>
    </div>
    @endforeach
    @endif


  </div>
</section>

<!-- FOOTER -->
<footer class="py-6 text-center text-gray-500 text-sm border-t border-red-500/20">
  © 2026 Andikss • Programming Projects
</footer>

@endsection

@section('script')
<script>
  // Toggle Mobile Menu
  const btn = document.getElementById('menu-btn');
  const menu = document.getElementById('mobile-menu');

  btn.addEventListener('click', () => {
    menu.classList.toggle('hidden');
  });
</script>
@endsection
{{-- <section class="max-w-7xl mx-auto px-6 pb-24">
  <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">

    <!-- 1 -->
    <div class="bg-[#141414] p-6 rounded-xl border border-red-500/20 hover:glow hover:-translate-y-2 transition">
      <h3 class="text-xl font-semibold mb-2">Cyber Landing Page</h3>
      <p class="text-gray-400 text-sm mb-4">Landing page futuristik dengan animasi modern.</p>
      <div class="flex flex-wrap gap-2 mb-4">
        <span class="tag">HTML</span><span class="tag">Tailwind</span>
      </div>
      <a href="#" class="link">View Project →</a>
    </div>

    <!-- 2 -->
    <div class="bg-[#141414] p-6 rounded-xl border border-red-500/20 hover:glow hover:-translate-y-2 transition">
      <h3 class="text-xl font-semibold mb-2">Portfolio Website</h3>
      <p class="text-gray-400 text-sm mb-4">Personal branding website dark mode.</p>
      <div class="flex flex-wrap gap-2 mb-4">
        <span class="tag">HTML</span><span class="tag">CSS</span><span class="tag">JS</span>
      </div>
      <a href="#" class="link">View Project →</a>
    </div>

    <!-- 3 -->
    <div class="bg-[#141414] p-6 rounded-xl border border-red-500/20 hover:glow hover:-translate-y-2 transition">
      <h3 class="text-xl font-semibold mb-2">Admin Dashboard</h3>
      <p class="text-gray-400 text-sm mb-4">Dashboard admin responsif dengan dark UI.</p>
      <div class="flex flex-wrap gap-2 mb-4">
        <span class="tag">React</span><span class="tag">Tailwind</span>
      </div>
      <a href="#" class="link">View Project →</a>
    </div>

    <!-- 4 -->
    <div class="bg-[#141414] p-6 rounded-xl border border-red-500/20 hover:glow hover:-translate-y-2 transition">
      <h3 class="text-xl font-semibold mb-2">E-Commerce UI</h3>
      <p class="text-gray-400 text-sm mb-4">Tampilan toko online modern dan clean.</p>
      <div class="flex flex-wrap gap-2 mb-4">
        <span class="tag">HTML</span><span class="tag">Tailwind</span>
      </div>
      <a href="#" class="link">View Project →</a>
    </div>

    <!-- 5 -->
    <div class="bg-[#141414] p-6 rounded-xl border border-red-500/20 hover:glow hover:-translate-y-2 transition">
      <h3 class="text-xl font-semibold mb-2">Blog Platform</h3>
      <p class="text-gray-400 text-sm mb-4">Platform blog dengan layout minimalis.</p>
      <div class="flex flex-wrap gap-2 mb-4">
        <span class="tag">JavaScript</span><span class="tag">API</span>
      </div>
      <a href="#" class="link">View Project →</a>
    </div>

    <!-- 6 -->
    <div class="bg-[#141414] p-6 rounded-xl border border-red-500/20 hover:glow hover:-translate-y-2 transition">
      <h3 class="text-xl font-semibold mb-2">Company Profile</h3>
      <p class="text-gray-400 text-sm mb-4">Website company profile profesional.</p>
      <div class="flex flex-wrap gap-2 mb-4">
        <span class="tag">HTML</span><span class="tag">CSS</span>
      </div>
      <a href="#" class="link">View Project →</a>
    </div>

    <!-- 7 -->
    <div class="bg-[#141414] p-6 rounded-xl border border-red-500/20 hover:glow hover:-translate-y-2 transition">
      <h3 class="text-xl font-semibold mb-2">Weather App</h3>
      <p class="text-gray-400 text-sm mb-4">Aplikasi cuaca real-time berbasis API.</p>
      <div class="flex flex-wrap gap-2 mb-4">
        <span class="tag">JavaScript</span><span class="tag">API</span>
      </div>
      <a href="#" class="link">View Project →</a>
    </div>

    <!-- 8 -->
    <div class="bg-[#141414] p-6 rounded-xl border border-red-500/20 hover:glow hover:-translate-y-2 transition">
      <h3 class="text-xl font-semibold mb-2">Task Management App</h3>
      <p class="text-gray-400 text-sm mb-4">Aplikasi manajemen tugas sederhana.</p>
      <div class="flex flex-wrap gap-2 mb-4">
        <span class="tag">React</span><span class="tag">LocalStorage</span>
      </div>
      <a href="#" class="link">View Project →</a>
    </div>

    <!-- 9 -->
    <div class="bg-[#141414] p-6 rounded-xl border border-red-500/20 hover:glow hover:-translate-y-2 transition">
      <h3 class="text-xl font-semibold mb-2">Landing Page Event</h3>
      <p class="text-gray-400 text-sm mb-4">Landing page promosi event digital.</p>
      <div class="flex flex-wrap gap-2 mb-4">
        <span class="tag">Tailwind</span><span class="tag">UI/UX</span>
      </div>
      <a href="#" class="link">View Project →</a>
    </div>

    <!-- 10 -->
    <div class="bg-[#141414] p-6 rounded-xl border border-red-500/20 hover:glow hover:-translate-y-2 transition">
      <h3 class="text-xl font-semibold mb-2">Login Auth UI</h3>
      <p class="text-gray-400 text-sm mb-4">UI login & register modern.</p>
      <div class="flex flex-wrap gap-2 mb-4">
        <span class="tag">HTML</span><span class="tag">Tailwind</span>
      </div>
      <a href="#" class="link">View Project →</a>
    </div>

  </div>
</section> --}}
