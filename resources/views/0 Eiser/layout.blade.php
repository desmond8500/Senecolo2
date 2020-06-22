<!DOCTYPE html>
<html lang="fr">

@php
    $page = new App\Http\Controllers\EiserController();
    $head = $page->getHead();
    $topmenu = $page->getTopbar();
    $menu = $page->getMainmenu();
    $footer = $page->getFooter();
@endphp

@include('0 Eiser.index.head')

<body >
  <header class="header_area">
        {{-- @include('0 Eiser.index.topmenu') --}}
        @include('0 Eiser.index.mainmenu')
  </header>

    @yield('content')

    @section('footer')
    @include('0 Eiser.index.footer')
    @show


    @include('0 Eiser.index.script')
    <script src="{{ asset('senecolo3/particles.js-master/particles.js')}} "></script>
<script>
    /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
particlesJS.load('particles-js', 'senecolo3/particles.js-master/json/particles.json', function() {
  console.log('callback - particles.js config loaded');
});
</script>

</body>

</html>
{{-- <style>
    body{
        /* background: powderblue; */
        background: rgb(148,187,233);
background: radial-gradient(circle, rgba(148,187,233,1) 50%, rgba(174,238,183,1) 100%);
}
</style> --}}

