@extends('voitures.layout')
@section('content')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url({{asset('asset/images/bg_3.jpg')}});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
        <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Accueil <i class="ion-ios-arrow-forward"></i></a></span> <span>Car details <i class="ion-ios-arrow-forward"></i></span></p>
          <h1 class="mb-3 bread">Détails</h1>
        </div>
      </div>
    </div>
  </section>
      

<section class="ftco-section ftco-car-details">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="car-details">
                    <div class="img rounded" style="background-image: url(/storage/{{$voiture->image}});"></div>
                    <div class="text text-center">
                        <span class="subheading">{{$voiture->marque}}</span>
                        <h2>{{$voiture->modele}} {{$voiture->marque}}</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row flex flex-col justify-center items-center my-5">
            <p class="price">{{$voiture->cout}} XOF<span>/jour</span></p>
            <a href="/voiture/{{$voiture->id}}/reserver" class="btn btn-primary py-2 my-3">Réserver</a>
        </div>
        <div class="row">
            <div class="col-md-12 pills">
                      <div class="bd-example bd-example-tabs">
                          <div class="d-flex justify-content-center">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                              <li class="nav-item">
                                <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill" href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer" aria-expanded="true">Description</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="pills-review-tab" data-toggle="pill" href="#pills-review" role="tab" aria-controls="pills-review" aria-expanded="true">Avis</a>
                              </li>
                            </ul>
                          </div>

                        <div class="tab-content" id="pills-tabContent">

                          <div class="tab-pane fade show active" id="pills-manufacturer" role="tabpanel" aria-labelledby="pills-manufacturer-tab">
                            <p>{{$voiture->description}}</p>
                          </div>

                          <div class="tab-pane fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab">
                            <div class="row">
                                     <div class="col-md-7">
                                         <h3 class="head">23 Avis</h3>
                                         <div class="review d-flex">
                                             <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                                             <div class="desc">
                                                 <h4>
                                                     <span class="text-left">Jacob Webb</span>
                                                     <span class="text-right">14 March 2018</span>
                                                 </h4>
                                                 <p class="star">
                                                     <span>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                     </span>
                                                     <span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
                                                 </p>
                                                 <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
                                             </div>
                                         </div>
                                         <div class="review d-flex">
                                             <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                                             <div class="desc">
                                                 <h4>
                                                     <span class="text-left">Jacob Webb</span>
                                                     <span class="text-right">14 March 2018</span>
                                                 </h4>
                                                 <p class="star">
                                                     <span>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                     </span>
                                                     <span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
                                                 </p>
                                                 <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
                                             </div>
                                         </div>
                                         <div class="review d-flex">
                                             <div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                                             <div class="desc">
                                                 <h4>
                                                     <span class="text-left">Jacob Webb</span>
                                                     <span class="text-right">14 March 2018</span>
                                                 </h4>
                                                 <p class="star">
                                                     <span>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                     </span>
                                                     <span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
                                                 </p>
                                                 <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-5">
                                         <div class="rating-wrap">
                                             <h3 class="head">Give a Review</h3>
                                             <div class="wrap">
                                                 <p class="star">
                                                     <span>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         (98%)
                                                     </span>
                                                     <span>20 Reviews</span>
                                                 </p>
                                                 <p class="star">
                                                     <span>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         (85%)
                                                     </span>
                                                     <span>10 Reviews</span>
                                                 </p>
                                                 <p class="star">
                                                     <span>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         (70%)
                                                     </span>
                                                     <span>5 Reviews</span>
                                                 </p>
                                                 <p class="star">
                                                     <span>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         (10%)
                                                     </span>
                                                     <span>0 Reviews</span>
                                                 </p>
                                                 <p class="star">
                                                     <span>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         (0%)
                                                     </span>
                                                     <span>0 Reviews</span>
                                                 </p>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                          </div>
                        </div>
                      </div>
            </div>
              </div>
    </div>
</section>

@endsection