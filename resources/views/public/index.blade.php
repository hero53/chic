@extends('layouts.public.base',['title'=>'Acceuil - Poulet chic'])

@section('content')
    @include('layouts.public._indexnav')

    <!-- Banner Area Starts -->
    <section class="banner-area text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 bande">
                    {{-- <h6>the most interesting food in the world</h6> --}}
                    <h1>Bienvenue à la ferme</span><br>
                        <span class="style-change">de <span class="prime-color">Poulet chic</h1>
                </div>
            </div>

        </div>
    </section>
    <!-- Banner Area End -->

    <!-- Welcome Area Starts -->
    <section class="welcome-area section-padding2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <div class="welcome-img">
                        <img src="{{asset('/images/page/poulet_chic_image_presentation.jpg')}}" class="img-fluid"
                             alt="">
                    </div>
                </div>
                <div class="col-md-6 align-self-center">
                    <div class="welcome-text mt-5 mt-md-0">
                        <h3><span class="style-change">Bienvenue</span> <br>sur Poulet chic</h3>
                        <p class="pt-3 text-justify">
                            Poulet Chic est une ferme de volailles poulets de Chairs située à Bingerville, plus
                            précisément dans le village d'Adjamé-Bingerville.
                            À Poulet chic nous avons une capacité de production de 3000 têtes de volaille par bande.
                            <br>
                            Nous utilisons des méthodes tradi-modernes pour l'élevage de ses volailles donnant ainsi des
                            résultats excellents avec des poids net entre allant de 1.8 à 2 kg par spécimen.
                            <br>
                            La qualité de notre service et la possibilité de livraison de nos produits nous rendent
                            encore plus compétitive dans le secteur de l'élevage moderne.
                            <br>
                        </p>
                        <p class="pt-3 text-justify">
                            Le bon plan pour consommer bio, sainement et délicieusement un poulet est sans aucun doute
                            Poulet Chic.
                        </p>
                        <a href="{{route('public.commande')}}#commande" class="template-btn mt-3">passer votre
                            commande</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Welcome Area End -->

    <!-- Food Area starts -->
    <section class="food-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="section-top">
                        <h3><span class="style-change">Nos</span> <br>services</h3>
                        <p class="pt-3">À Poulet chic nous sommes dans la production de poules de chair et de lapins tant pour l'élevage que pour la consommation.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 ">
                    <div class="single-food">
                        <div class="food-img">
                            <img src="{{asset('/images/page/poulet_chic_image_vente_en_gros.jpg')}}" class="img-fluid"
                                 alt="">
                        </div>
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h5>Poulet en gros</h5>
                                <span class="style-change">1800 CFA</span>
                            </div>
                            <p class="pt-3">Face together given moveth divided form Of Seasons that fruitful.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 ">
                    <div class="single-food mt-5 mt-sm-0">
                        <div class="food-img">
                            <img src="{{asset('/images/page/poulet_chic_image_poulet_de_chair.jpg')}}" class="img-fluid"
                                 alt="">
                        </div>
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h5>Poulet de chair</h5>
                                <span class="style-change">1900 CFA </span>
                            </div>
                            <p class="pt-3">Face together given moveth divided form Of Seasons that fruitful.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 ">
                    <div class="single-food mt-5 mt-md-0">
                        <div class="food-img">
                            <img src="{{asset('/images/page/poulet_chic_image_lapin.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h5>Lapin</h5>
                                <span class="style-change">A partir de 5000 CFA </span>
                            </div>
                            <p class="pt-3">Face together given moveth divided form Of Seasons that fruitful.</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="table-btn text-center">
                <a href="{{route('public.commande')}}#commande" class=" a template-btn m-5 text-md-center">passer votre
                    commande</a>
            </div>
        </div>

    </section>
    <!-- Food Area End -->

    <!-- Reservation Area Starts -->
    <div class="reservation-area section-padding text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Poulet Chic... </h2>
                    <h4 class="mt-4">Ô yo fè.</h4>
                    <a href="{{route('public.commande')}}#commande" class="genric-btn primary radius"><font
                                style="vertical-align: inherit;"><font style="vertical-align: inherit;">PASSER VOTRE
                                COMMANDE</font></font></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Reservation Area End -->

    <!-- Update Area Starts -->
    <section class="update-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-top2 text-center">
                        <h3>Notre<span> equipe</span></h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="single-food card-team">
                        <div class="food-img">
                            <img src="{{asset('images/page/responnsable_kouassi.jpg')}}" class="img-fluid card-img"
                                 alt="">
                        </div>
                        <div class="food-content">

                            <h5 class="text-center">Kouassi Amani Junior</h5>
                            <p class="text-center">Directeur général (CEO) </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="single-food my-5 my-md-0 card-team">
                        <div class="food-img">
                            <img src=" {{asset('images/page/responsable_constant.jpg')}}" class="img-fluid card-img"
                                 alt="">
                        </div>
                        <div class="food-content">

                            <h5 class="text-center">Edoukou Constant</h5>
                            <p class="text-center">Directeur général Adjoint </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="single-food card-team">
                        <div class="food-img">
                            <img src=" {{asset('/images/page/poulet-chic-Eric.jpg')}}" class="img-fluid card-img"
                                 alt="">
                        </div>
                        <div class="food-content">

                            <h5 class="text-center">N'dri Sams Eric</h5>
                            <p class="text-center">Chargé de Production</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Update Area End -->
@endsection

