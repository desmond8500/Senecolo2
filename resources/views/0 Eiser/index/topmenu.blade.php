<div class="top_menu">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="float-left">
              <p>{{$topmenu->tel}}</p>
              <p>{{$topmenu->email}}</p>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="float-right">
              <ul class="right_side">
                @foreach ($topmenu->links as $link)
                    <li>
                        <a href="">
                            {{ $link['name'] }}
                        </a>
                    </li>

                 @endforeach
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
