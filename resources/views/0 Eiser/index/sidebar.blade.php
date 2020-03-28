@php
    $menus = json_decode(file_get_contents('json init/categories.json'));
@endphp


<div class="card card-body sidebar">
    <div class="titre b-success">{{ $title }}</div>

    @foreach ($menus as $menu)
    <a href="" class="sidebarlink">
        {{ $menu->menu }}
    </a>

    @endforeach

</div>
