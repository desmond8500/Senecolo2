<footer class="footer-area section_gap">
    <div class="container">
      <div class="row">
        @foreach ($footer->menu as $item)
            <div class="col-lg-2 col-md-6 single-footer-widget">
                <h4>{{$item['name']}}</h4>
                <ul>
                    @foreach ($item['route'] as $subitem)
                        <li><a href="#">{{$subitem['name']}}</a></li>
                    @endforeach
                </ul>
            </div>
        @endforeach

        <div class="col-lg-4 col-md-6 single-footer-widget">
          <h4>Newsletter</h4>
          <p>Souscrivez à notre newsletter pour être informés des nouveautés</p>
          <div class="form-wrap" id="mc_embed_signup">
            <form method="POST" action="{{route('newsletters.store')}}" class="form-inline">
                @csrf
              <input class="form-control" name="email"   placeholder = 'Votre adresse mail'" required="" type="email">
              <button type="submit" class="click-btn btn btn-default">S'indcrire</button>
              <div style="position: absolute; left: -5000px;">
                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
              </div>

              <div class="info"></div>
            </form>
          </div>
        </div>
      </div>
      <div class="footer-bottom row align-items-center">
        <p class="footer-text m-0 col-lg-8 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        <div class="col-lg-4 col-md-12 footer-social">
          <a target="_blank" href="https://web.facebook.com/senecolomarket/"><i class="fa fa-facebook"></i></a>
          <a target="_blank" href="https://www.linkedin.com/mwlite/in/sen-ecolomarket-3958891a4"><i class="fa fa-linkedin"></i></a>
          {{-- <a target="_blank" href="#"><i class="fa fa-twitter"></i></a> --}}
          {{-- <a target="_blank" href="#"><i class="fa fa-dribbble"></i></a> --}}
        </div>
      </div>
    </div>
  </footer>
