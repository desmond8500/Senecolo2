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

<body class="bg-light">
  <header class="header_area">
        {{-- @include('0 Eiser.index.topmenu') --}}
        @include('0 Eiser.index.mainmenu')
  </header>

    @yield('content')

    @section('footer')
    @include('0 Eiser.index.footer')
    @show

    @include('0 Eiser.index.script')
</body>

</html>
