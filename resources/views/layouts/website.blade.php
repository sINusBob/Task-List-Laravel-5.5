<!doctype html>
<html>
  
  @include('partials.head')

  <body>

    @include('partials.nav')

    @yield('content')

    @include('partials.footer')

    @include('partials.scripts')

  </body>
</html>