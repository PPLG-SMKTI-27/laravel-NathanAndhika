<nav class="fixed w-full bg-black/40 backdrop-blur z-50 border-b border-red-500/20">
  <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
    <h1 class="text-xl font-bold text-red-500">🔥 PORTFOLIO</h1>
    <div class="hidden md:flex space-x-8">
      <a href="#home" class="hover:text-red-500">Home</a>
      <a href="#about" class="hover:text-red-500">About</a>
      <a href="#skills" class="hover:text-red-500">Skills</a>
      <a href="#projects" class="hover:text-red-500">Projects</a>
      <a href="#contact" class="hover:text-red-500">Contact</a>
            <div class="flex justify-center">
                @if (!session('is_login'))
                    <a
                        href="/login"
                        class="px-2 py-1
                            bg-red-500 rounded-md text-white font-semibold">
                        <span class="cta-text relative z-10">Login</span>
                    </a>
                @else
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button
                            type="submit"
                        class="px-2 py-1
                            bg-red-500 rounded-md text-white font-semibold">
                            <span class="cta-text relative z-10">Logout</span>
                        </button>
                    </form>
                @endif
            </div>



    </div>
  </div>
</nav>  