<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Andikss Portfolio</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .glow {
      box-shadow: 0 0 25px rgba(239,68,68,.5);
    }
  </style>
</head>

<body class="bg-[#0f0f0f] text-gray-200 scroll-smooth">

<!-- NAVBAR -->
<nav class="fixed w-full bg-black/40 backdrop-blur z-50 border-b border-red-500/20">
  <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
    <h1 class="text-xl font-bold text-red-500">🔥 PORTFOLIO</h1>
    <div class="hidden md:flex space-x-8">
      <a href="#home" class="hover:text-red-500">Home</a>
      <a href="#about" class="hover:text-red-500">About</a>
      <a href="#skills" class="hover:text-red-500">Skills</a>
      <a href="#projects" class="hover:text-red-500">Projects</a>
      <a href="#contact" class="hover:text-red-500">Contact</a>
    </div>
  </div>
</nav>

<!-- HERO -->
<section id="home" class="h-screen flex flex-col items-center justify-center text-center px-6">
  <!-- FOTO HERO -->
  <img src="foto.png" alt="" class="w-48 h-48 rounded-full mb-6 border-4 border-red-500 shadow-glow">
  
  <h2 class="text-5xl md:text-7xl font-extrabold mb-6">
    <span class="text-white">Welcome To Portofolio Andikss</span>
  </h2>
  <p class="text-gray-400 max-w-xl mx-auto mb-8">
    Frontend Developer • UI Engineer • Creative Coder
  </p>

    <style>
.shadow-glow {
  box-shadow: 0 0 25px rgba(239,68,68,0.6);
}
</style>


</section>


<!-- ABOUT -->
<section id="about" class="max-w-6xl mx-auto px-6 py-24">
  <h3 class="text-3xl font-bold mb-6 border-l-4 border-red-500 pl-4">
    About Me
  </h3>
  <p class="text-gray-400 leading-relaxed max-w-3xl">
    Saya adalah developer yang fokus membangun website modern, cepat,
    dan visual yang kuat menggunakan Tailwind CSS, JavaScript, dan teknologi web terbaru.
  </p>
</section>

<!-- SKILLS -->
<section id="skills" class="bg-[#141414] py-24">
  <div class="max-w-6xl mx-auto px-6">
    <h3 class="text-3xl font-bold mb-12 border-l-4 border-red-500 pl-4">
      Skills
    </h3>
    <div class="flex flex-wrap gap-4">
      <span class="px-5 py-2 bg-black border border-red-500/40 rounded-full hover:bg-red-500 hover:text-black transition">HTML</span>
      <span class="px-5 py-2 bg-black border border-red-500/40 rounded-full hover:bg-red-500 hover:text-black transition">CSS</span>
      <span class="px-5 py-2 bg-black border border-red-500/40 rounded-full hover:bg-red-500 hover:text-black transition">JavaScript</span>
      <span class="px-5 py-2 bg-black border border-red-500/40 rounded-full hover:bg-red-500 hover:text-black transition">Tailwind</span>
      <span class="px-5 py-2 bg-black border border-red-500/40 rounded-full hover:bg-red-500 hover:text-black transition">React</span>
    </div>
  </div>
</section>

<!-- PROJECTS -->
<section id="projects" class="max-w-6xl mx-auto px-6 py-24">
  <h3 class="text-3xl font-bold mb-12 border-l-4 border-red-500 pl-4">
    Projects
  </h3>

  <div class="grid md:grid-cols-3 gap-8">
    <div class="bg-[#141414] p-6 rounded-xl border border-red-500/20 hover:glow hover:-translate-y-2 transition">
      <h4 class="text-xl font-semibold mb-2">Cyber Landing Page</h4>
      <p class="text-gray-400 text-sm">Landing page futuristik dengan Tailwind.</p>
    </div>

    <div class="bg-[#141414] p-6 rounded-xl border border-red-500/20 hover:glow hover:-translate-y-2 transition">
      <h4 class="text-xl font-semibold mb-2">Portfolio Website</h4>
      <p class="text-gray-400 text-sm">Personal branding website responsif.</p>
    </div>

    <div class="bg-[#141414] p-6 rounded-xl border border-red-500/20 hover:glow hover:-translate-y-2 transition">
      <h4 class="text-xl font-semibold mb-2">Admin Dashboard</h4>
      <p class="text-gray-400 text-sm">UI dashboard dark mode modern.</p>
    </div>
  </div>
  <br>
  <a href="project" 
       class="px-8 py-3 bg-red-500 text-black font-semibold rounded-lg glow hover:scale-105 transition">
      Lihat Project
    </a>
</section>

<!-- CONTACT -->
<!-- FOOTER -->

<footer>
  <p><b>CONTACT INSTAGRAM</b></p>
  <div class="footer-btn">
    <a href="https://instagram.com/digimonn.s" target="_blank" class="btn-ig">Follow on Instagram</a>
  </div>
</footer>

<style>
  /* ===== FOOTER ===== */
  footer {
    border-top: 1px solid rgba(239,68,68,0.2);
    text-align: center;  /* semua tulisan dan tombol di tengah */
    padding: 24px;
    font-size: 14px;
    color: #6b7280;
  }

  /* ===== FOOTER BUTTON CONTAINER ===== */
  .footer-btn {
    margin-top: 12px;
  }

  /* ===== INSTAGRAM BUTTON ===== */
  .btn-ig {
    display: inline-block;
    padding: 10px 20px;
    border-radius: 999px;
    background-color: #ef4444;
    color: #000;
    font-weight: bold;
    transition: all 0.3s ease;
  }

  .btn-ig:hover {
    background-color: #f87171;
    box-shadow: 0 0 15px rgba(239, 68, 68, 0.6);
    transform: translateY(-2px);
  }
</style>



<!-- FOOTER -->
<footer class="py-6 text-center text-gray-500 text-sm border-t border-red-500/20">
  © 2026 Nathan • Portfolio
</footer>

</body>
</html>
