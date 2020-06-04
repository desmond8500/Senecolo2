@php
    $menu = json_decode('[
        { "name": "Catégories", "section": "category"},
        { "name": "Articles", "section": "articles"}
    ]');
@endphp

<aside class="left_widgets p_filter_widgets">
    <div class="l_w_title">
        <h3>Catégories</h3>
    </div>
    <div class="widgets_inner">
        <ul class="list">
            @foreach ($menu as $item)
            @php
                if ($item->section == $section)
                    $class = 'active';
                else
                    $class = '';

            @endphp
            <li class="{{$class}}">
                <a href="{{route('backoffice',['section'=>$item->section])}}" >{{$item->name}}</a>
            </li>
        @endforeach
        </ul>
    </div>
</aside>
