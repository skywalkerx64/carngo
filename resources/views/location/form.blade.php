@extends('location.layout')
@section('content')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url({{asset('asset/images/bg_3.jpg')}});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
        <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs"><span class="mr-2"><a href="/voiture/{{$voiture->id}}">{{$voiture->marque}} {{$voiture->modele}}<i class="ion-ios-arrow-forward"></i></a></span></p>
          <h1 class="mb-3 bread">Reserver</h1>
        </div>
      </div>
    </div>
  </section>
  <div class="row flex justify-center my-10 py-3">
    <div class="col-8">
        <form action="/voiture/reserver" method="post">
            @csrf
        <div class="card col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
            <div class="card-body">

                <div class="form-group col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                    <label for="Duree" class="col-form-label text-gray-800 text-xl">Durée de l'emprunt</label>
                    <input id="duree" name="duree" type="number" class="form-control" placeholder="Durée en jours" value="">
                </div>
                <div>
                    <div class="row px-3 flex flex-col">
                        <div class="text-gray-800 text-xl mx-3">
                            Détails de la commande:
                        </div>
                        <div class="mx-3">
                            Total: <span id="total">0 XOF</span>
                        </div>
                        <div class="mx-3">
                            Voiture: <span class="text-success">{{$voiture->marque}} {{$voiture->modele}}</span>
                        </div>
                    </div>
                </div>
                <input type="hidden" id="cout" value="{{ $voiture->cout }}">
                <input type="hidden" name="voiture_id" value="{{ $voiture->id }}">

                <button class="btn btn-primary my-3" type="submit">Enregistrer</button>
            </div>
        </div>
    </form>
    </div>
  </div>

@endsection
@section('js')
<script>
    var cout= document.getElementById('cout');
    var duree = document.getElementById('duree');
    var total = document.getElementById('total');
    duree.addEventListener("keyup", function(){
    total.innerHTML= cout.value*duree.value+' XOF';

    });
</script>
@endsection