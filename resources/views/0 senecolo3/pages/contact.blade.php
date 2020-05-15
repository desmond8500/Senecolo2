@extends('0 Eiser.layout')

@section('content')
       @include('0 Eiser.index.banner')

    <section class="section_gap">
    <div class="container">
      <div class="d-none d-sm-block mb-5 pb-4">
        <div id="map" style="height: 480px;"></div>
        <script>
          function initMap() {
            var uluru = {lat: -25.363, lng: 131.044};
            var grayStyles = [
              {
                featureType: "all",
                stylers: [
                  { saturation: -90 },
                  { lightness: 50 }
                ]
              },
              {elementType: 'labels.text.fill', stylers: [{color: '#A3A3A3'}]}
            ];
            var map = new google.maps.Map(document.getElementById('map'), {
              center: {lat: -31.197, lng: 150.744},
              zoom: 9,
              styles: grayStyles,
              scrollwheel:  false
            });
          }

        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap"></script>

      </div>


      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Laissez nous un message</h2>
        </div>
        <div class="col-lg-8 mb-4 mb-lg-0">
          <form class="form-contact contact_form" action="{{route('messages.store')}}" method="post" id="contactForm">
              @csrf
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                    <textarea class="form-control w-100" name="description" id="description" cols="30" rows="9" required placeholder="Si vous avez une question ou un besoin spécifique vous pouvez nous laisser un message ici"></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="name" id="name" type="text" placeholder="Votre nom" required>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                    <input type="text" name="status" value="Nouveau" hidden>
                  <input class="form-control" name="email" id="email" type="email" placeholder="votre email" required>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="objet" id="objet" type="text" placeholder="Objet du message" required>
                </div>
              </div>
            </div>
            <div class="form-group mt-lg-3">
              <button type="submit" class="main_btn">Envoyer</button>
            </div>
          </form>


        </div>

        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>Ouakam</h3>
              <p>Ouakam</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3><a href="tel:454545654">+221 77 555 76 37</a></h3>
              <p>Disponible 24h/24 7jour/7</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3><a href="mailto:support@colorlib.com">amadoumalickdrame@gmail.com</a></h3>
              <p>Envoyez nous vos demandes à tout moment</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
