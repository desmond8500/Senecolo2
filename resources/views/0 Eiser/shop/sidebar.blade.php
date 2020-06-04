<div class="left_sidebar_area">
    @isset($sidebar)
        @foreach ($sidebar as $item)
            <aside class="left_widgets p_filter_widgets">
                <div class="l_w_title">
                    <h3>{{$item->name}}</h3>
                </div>
                <div class="widgets_inner">
                    <ul class="list">
                        @foreach ($item->data as $data)
                        @php
                            if ($data->categorie == $categorie)
                                $class = 'active';
                            else
                                $class = '';
                        @endphp
                        <li class="{{$class}}">
                            <a href="{{route('boutique',['categorie'=>$data->categorie])}}">{{$data->categorie}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </aside>
        @endforeach
        @else
        <aside class="left_widgets p_filter_widgets">
            <div class="l_w_title">
                <h3>Product Brand</h3>
            </div>
            <div class="widgets_inner">
                <ul class="list">
                <li>
                    <a href="#">Apple</a>
                </li>
                <li>
                    <a href="#">Asus</a>
                </li>
                <li class="active">
                    <a href="#">Gionee</a>
                </li>
                <li>
                    <a href="#">Micromax</a>
                </li>
                <li>
                    <a href="#">Samsung</a>
                </li>
                </ul>
            </div>
        </aside>

        <aside class="left_widgets p_filter_widgets">
            <div class="l_w_title">
                <h3>Color Filter</h3>
            </div>
            <div class="widgets_inner">
                <ul class="list">
                <li>
                    <a href="#">Black</a>
                </li>
                <li>
                    <a href="#">Black Leather</a>
                </li>
                <li class="active">
                    <a href="#">Black with red</a>
                </li>
                <li>
                    <a href="#">Gold</a>
                </li>
                <li>
                    <a href="#">Spacegrey</a>
                </li>
                </ul>
            </div>
            </aside>

            <aside class="left_widgets p_filter_widgets">
            <div class="l_w_title">
                <h3>Price Filter</h3>
            </div>
            <div class="widgets_inner">
                <div class="range_item">
                <div id="slider-range"></div>
                <div class="">
                    <label for="amount">Price : </label>
                    <input type="text" id="amount" readonly />
                </div>
                </div>
            </div>
        </aside>
    @endisset

</div>
