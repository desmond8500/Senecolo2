<!DOCTYPE html>
<html lang="fr">

@php
    $page = new App\Http\Controllers\EiserController();
    $head = $page->getHead();
    $topmenu = $page->getTopbar();
    $menu = $page->getMainmenu();
    $footer = $page->getFooter();

@endphp

@include('0 eiser.index.head')

<body>
  <header class="header_area">
        @include('0 eiser.index.topmenu')
        @include('0 eiser.index.mainmenu')
  </header>

    @yield('content')

    @include('0 eiser.index.footer')

    @include('0 eiser.index.script')
</body>

</html>
