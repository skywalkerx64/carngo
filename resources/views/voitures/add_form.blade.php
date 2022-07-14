@extends('voitures.layout')
@section('content')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url({{asset('asset/images/bg_3.jpg')}});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
        <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs"><span class="mr-2"><a href="/voitures">Voitures <i class="ion-ios-arrow-forward"></i></a></span> <span>Ajouter <i class="ion-ios-arrow-forward"></i></span></p>
          <h1 class="mb-3 bread">Ajouter une voiture</h1>
        </div>
      </div>
    </div>
  </section>
  <div class="row my-5 flex justify-center">
    <div class="col-10">
        <form action="/voiture/add" method="post" enctype="multipart/form-data">
            @csrf
        <div class="card col-12 ">
            <div class="card-body">

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <div class="form-group col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                    <label for="marque" class="col-form-label">marque</label>
                    <input id="marque" name="marque" type="text" class="form-control" placeholder="marque" value="{{ old('marque') }}">
                </div>
                
                <div class="form-group col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                    <label for="modele" class="col-form-label">modele</label>
                    <input id="modele" name="modele" type="text" class="form-control" placeholder="modele" value="">
                </div>

                <div class="form-group col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                    <label for="description">description</label>
                    <textarea class="form-control" id="description" name="description" rows="3" placeholder="description" >{{ old('description') }}</textarea>
                </div>

                <div class="form-group col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                    <label for="cout" class="col-form-label">cout</label>
                    <input id="cout" name="cout" type="number" class="form-control" placeholder="cout" value="">
                </div>



                <div class="form-group col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                    <label for="stock" class="col-form-label">stock </label>
                    <input id="stock" name="stock" type="stock" class="form-control" placeholder="stock" value="">
                </div>

                <div class="form-group col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                    <label for="image" class="col-form-label " >Image</label>
                    <input id="image" name="image" type="file" class="form-control" placeholder="image">
                </div>

                <button class="btn btn-success my-3" type="submit">Enregistrer</button>
            </div>
        </div>
    </form>
</div>
  </div>
@endsection