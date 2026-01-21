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
    <div class="container">
        @yield('content')
    </div>
    @yield('script')
</body>
</html>