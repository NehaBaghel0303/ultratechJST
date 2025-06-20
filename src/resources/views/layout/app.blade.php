<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('partials.head')
<body>
    @include('partials.header')

  
    @yield('content')

    @include('partials.footer')

    
    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- JS -->
    @include('partials.script')
</body>
</html>
