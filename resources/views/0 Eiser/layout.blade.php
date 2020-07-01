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

</body>

</html>

@php
    $background = Storage::disk('public')->files("Ecommerce/images/background");
    dump($background);
@endphp

<style>


    body{
        /* background: rgb(148,187,233);
        background: radial-gradient(circle, rgba(148,187,233,1) 50%, rgba(174,238,183,1) 100%); */

        background-image: url('/storage/Ecommerce/images/background/background.png');
        /* background-repeat: repeat-y; */
    }
</style>

