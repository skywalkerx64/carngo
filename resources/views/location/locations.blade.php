@extends('location.layout')
@section('content')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url({{asset('asset/images/bg_3.jpg')}});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
        <div class="col-md-9 ftco-animate pb-5">
          <h1 class="mb-3 bread">Locations</h1>
        </div>
      </div>
    </div>
  </section>
<div class="row">
    <div class="col-md-12 pills">
              <div class="bd-example bd-example-tabs">
                  <div class="d-flex justify-content-center">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                      <li class="nav-item">
                        <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-expanded="true">Mes locations</a>
                      </li>
                    </ul>
                  </div>

                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
                      <div class="row px-5">
                        <div class="card w-100">
                            <h5 class="card-header">Locations</h5>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Voiture</th>
                                            <th scope="col">Montant</th>
                                            <th scope="col">Duree</th>
                                            <th scope="col">Date de prise</th>
                                            <th scope="col">Date de remise</th>
                                            <th scope="col"> ... </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($locations as $location)
                                        <tr>
                                            <th scope="row">{{ $location->voiture->marque }} {{ $location->voiture->modele }}</th>
                                            <td>{{ $location->cout }} XOF</td>
                                            <td>{{ $location->duree }} jours</td>
                                            <td>{{ $location->prise }}</td>
                                            <td>{{ $location->rendu }}</td>
                                            <td><a href="/location/{{ $location->id }}">Détails</a></td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
    </div>
      </div>
@endsection