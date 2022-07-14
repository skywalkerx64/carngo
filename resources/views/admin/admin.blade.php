@extends('admin.layout')
@section('content')
<div class="row">
    <div class="col-md-12 pills">
              <div class="bd-example bd-example-tabs">
                  <div class="d-flex justify-content-center">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                      <li class="nav-item">
                        <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-expanded="true">Locations</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill" href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer" aria-expanded="true">Voitures</a>
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
                                            <th scope="col">Statut</th>
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
                                            <td>{{ $location->statut }}</td>
                                            <td><a href="/location/{{ $location->id }}">Détails</a></td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                      </div>
                  </div>

                  <div class="tab-pane fade" id="pills-manufacturer" role="tabpanel" aria-labelledby="pills-manufacturer-tab">
                    <div class="row flex justify-center">
                      <a href="/voiture/add" class="btn btn-primary my-5">Ajouter</a>
                    </div>
                    <div class="card">
                      <h5 class="card-header">Voitures</h5>
                      <div class="card-body p-0">
                          <div class="table-responsive">
                              <table class="table">
                                  <thead class="bg-light">
                                      <tr class="border-0">
                                         <th class="border-0">Apercu</th>
                                          <th class="border-0">Marque</th>
                                          <th class="border-0">Modele</th>
                                          <th class="border-0">Cout</th>
                                          <th class="border-0">Stock</th>
                                          <th class="border-0">...</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ($voitures as $voiture)
                                    <tr>
                                      <td>
                                          <div class="ml-3"><img src="/storage/{{ $voiture->image }}" alt="user" class="rounded" width="45"></div>
                                      </td>
                                      <td>{{$voiture->marque}}</td>
                                      <td>{{$voiture->modele}}</td>
                                      <td>{{$voiture->cout}}</td>
                                      <td>{{$voiture->n_dispo}}</td>
                                      <td class="flex flex-col gap-2"><a href="/voiture/{{$voiture->id}}">Détails</a> <a href="/voiture/{{$voiture->id}}/edit">Modifier</a> <a href="/voiture/{{$voiture->id}}/delete">Supprimer</a></td>
                                  </tr>
                                    @endforeach

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