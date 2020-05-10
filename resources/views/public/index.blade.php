@extends('layouts.public.base')

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
                        <img src="{{asset('/images/page/poulet_chic_image_presentation.jpg')}}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-md-6 align-self-center">
                    <div class="welcome-text mt-5 mt-md-0">
                        <h3><span class="style-change">Bienvenue</span> <br>sur Poulet chic</h3>
                        <p class="pt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis sunt, consectetur id laboriosam error veritatis cupiditate voluptas quasi modi nisi hic sapiente at. Fugit ducimus sit rerum saepe officia praesentium.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic soluta nobis magnam voluptas omnis dolorum accusamus ipsa asperiores unde, cumque perspiciatis suscipit adipisci consequuntur quos facilis est porro eum! Nemo quo ad laborum possimus doloremque animi sapiente, odio quia, ratione praesentium, architecto error quasi eius veniam ipsa earum enim cumque.</p>
                        <a href="#" class="template-btn mt-3">passer votre commande</a>
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
                        <p class="pt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis et quia voluptate mollitia fuga sed culpa, dolorem vitae quisquam odit aliquam fugit, dicta explicabo rem, laborum facilis nihil eaque eveniet!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="single-food">
                        <div class="food-img">
                            <img src="{{asset('/images/page/poulet_chic_image_vente_en_gros.jpg')}}" class="img-fluid" alt="">
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
                <div class="col-md-4 col-sm-6">
                    <div class="single-food mt-5 mt-sm-0">
                        <div class="food-img">
                            <img src="{{asset('/images/page/poulet_chic_image_poulet_de_chair.jpg')}}" class="img-fluid" alt="">
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
                <div class="col-md-4 col-sm-6">
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
                        <p>
                            <a href="#" class=" a template-btn m-5 text-md-center"><strong>passer votre commande</strong></a> 
                        </p>
                        
                
                {{-- <div class="col-12 col-md-4 offset-0 offset-md-4">
                    <a href="#" class="template-btn m-5 text-center display-1"><strong>passer votre commande</strong></a>
                </div> --}}
                
            </div>
        </div>
    </section>
    <!-- Food Area End -->

      <!-- Reservation Area Starts -->
      <div class="reservation-area section-padding text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Lorem ipsum dolor sit amet.</h2>
                    <h4 class="mt-4">Lorem ipsum dolor sit amet consectetur.</h4>
                    <a href="#" class="genric-btn primary radius"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">PASSER VOTRE COMMANDE</font></font></a>
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
                        <p><i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, assumenda.</i></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="single-food">
                        <div class="food-img">
                            <img src="{{asset('images/page/responnsable_kouassi.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            
                            <h5 class="text-center">Kouassi Amani Junior</h5>
                            <p class="text-center">Lorem ipsum </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="single-food my-5 my-md-0">
                        <div class="food-img">
                            <img src=" {{asset('images/page/responsable_constant.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            
                            <h5 class="text-center">Edoukou Constant</h5>
                            <p class="text-center">Lorem ipsum </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="single-food">
                        <div class="food-img">
                            <img src=" {{asset('/images/update3.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            
                            <h5 class="text-center">autre</h5>
                            <p class="text-center">Lorem ipsum </p>                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Update Area End -->
@endsection

