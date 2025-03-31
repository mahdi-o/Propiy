@include('admin.layouts.header')

  <body class="m-0 font-sans text-base antialiased font-normal dark:bg-slate-900 leading-default bg-gray-50 text-slate-500">
    <div class="absolute w-full bg-blue-500 dark:hidden min-h-75"></div>
    <!-- sidenav  -->
    @include('plugins.sidenav')

    <!-- end sidenav -->

    <main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">
      <!-- Navbar -->
     @include('plugins.navbar')
      <!-- end Navbar -->

      <!-- cards -->
      @yield('content')
      <!-- end cards -->
    </main>

    <!-- Sidebar Nabvar Fixed and Dark mode -->
    @include('plugins.fixed-plugin')
    
  </body>
  
    @include('admin.layouts.footer')
  
</html>
