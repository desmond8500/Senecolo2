@php
    $menus = json_decode(file_get_contents('json init/categories.json'));
@endphp
<style>
    .menurr{
        height: 300px;
    }
</style>

<div class="menurr">
    @foreach ($menus as $menu)
        <i class="fa {{ $menu->icon }} "></i> {{ $menu->menu }} <br>

    @endforeach

</div>
