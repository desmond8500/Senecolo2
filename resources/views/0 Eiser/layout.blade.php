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

<body>
  <header class="header_area">
        @include('0 Eiser.index.topmenu')
        @include('0 Eiser.index.mainmenu')
  </header>

    @yield('content')

    @include('0 Eiser.index.footer')

    @include('0 Eiser.index.script')
</body>

</html>
