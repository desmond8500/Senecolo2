<style>
    .mysize{
        font-size: 15px;
        padding-right: 10px;
    }

    .lien{
        color: gray;
    }
    footer{
        padding-bottom: 50px;
    }
</style>

<footer class="bg-light">
    <hr>
    <div class="row container">
        <div class="col-md-4">
            <h4 class="mb-4">Informations</h4>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <a class="lien" href="">
                        <i class="fa fa-phone mysize"></i> +221 77 555 76 37</a>
                    </a>
                </li>
                <li class="list-group-item">
                    <a class="lien" href="">
                        <i class="fa fa-at mysize"></i> senecolomarket@gmail.com</a>
                    </a>
                </li>
                <li class="list-group-item">
                    <a class="lien" href="https://web.facebook.com/senecolomarket/?referrer=whatsapp&_rdc=1&_rdr" target="_blank">
                        <i class="fa fa-facebook mysize"></i> Facebook</a>
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-md-8">
            <h4 class="mb-4">Contactez-nous</h4>
            <form>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label text-right">Sujet</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control rounded-0" id="inputEmail3" placeholder="Sujet de votre demande">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label text-right">Email</label>
                    <div class="col-sm-10">
                    <input type="email" class="form-control rounded-0" id="inputPassword3" placeholder="Votre adresse électronique">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label text-right">Fichier</label>
                    <div class="col-sm-10">
                        <input type="file" name="fichier" class="form-control rounded-0">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label text-right">Description</label>
                    <div class="col-sm-10">
                        <textarea name="description" class="form-control rounded-0" cols="30" rows="5" placeholder="Description de votre besoin"></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary float-right">Envoyer</button>
                    </div>
                </div>
                </form>
        </div>
    </div>
    <div class="col-md-12">
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
    </div>


</footer>


{{--


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
          <div class="form-wrap">
            <form method="POST" action="{{route('newsletters.store')}}" class="form-inline">
                @csrf
              <input class="form-control rounded-0" name="email"   placeholder = 'Votre adresse mail'" required="" type="email">
              <button type="submit" class="click-btn btn btn-default">S'inscrire</button>
              <div style="position: absolute; left: -5000px;">
                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
              </div>

              <div class="info"></div>
            </form>
          </div>
        </div>
      </div>
      <div class="footer-bottom row align-items-center">
        <p class="footer-text m-0 col-lg-8 col-md-12">
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
        <div class="col-lg-4 col-md-12 footer-social">
          <a target="_blank" href="https://web.facebook.com/senecolomarket/"><i class="fa fa-facebook"></i></a>
          <a target="_blank" href="https://www.linkedin.com/mwlite/in/sen-ecolomarket-3958891a4"><i class="fa fa-linkedin"></i></a>
        </div>
      </div>
    </div>
  </footer> --}}
