@extends('voitures.layout')
@section('content')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{asset('asset/images/bg_3.jpg')}}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
        <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs"><span class="mr-2"><a href="/">Accueil <i class="ion-ios-arrow-forward"></i></a></span> <span>Voitures <i class="ion-ios-arrow-forward"></i></span></p>
          <h1 class="mb-3 bread">Choisissez votre voiture</h1>
        </div>
      </div>
    </div>
  </section>
      

      <section class="ftco-section bg-light">
      <div class="container">
          <div class="row">
              @foreach ($voitures as $voiture)
              <div class="col-md-4">
                <div class="car-wrap rounded ftco-animate">
                    <div class="img rounded d-flex align-items-end" style="background-image: url(storage/{{$voiture->image}});">
                    </div>
                    <div class="text">
                        <h2 class="mb-0"><a href="car-single.html">{{$voiture->marque}} {{$voiture->modele}}</a></h2>
                        <div class="d-flex mb-3">
                            <span class="cat">{{$voiture->marque}}</span>
                            <p class="price ml-auto">{{$voiture->cout}} XOF<span>/jour</span></p>
                        </div>
                        <p class="d-flex mb-0 d-block"><a href="/voiture/{{$voiture->id}}/reserver" class="btn btn-primary py-2 mr-1">Réserver</a> <a href="/voiture/{{$voiture->id}}" class="btn btn-secondary py-2 ml-1">Details</a></p>
                    </div>
                </div>
            </div>
              @endforeach

          </div>
          <div class="row mt-5">
        <div class="col text-center">
          <div class="block-27">
            <ul>
              <li><a href="#">&lt;</a></li>
              <li class="active"><span>1</span></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">&gt;</a></li>
            </ul>
          </div>
        </div>
      </div>
      </div>
  </section>
@endsection