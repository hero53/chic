@extends('layouts.public.base',['title'=>'Acceuil - Poulet chicc'])

@section('content')
  @include('layouts.public.__indexnav')

   <!-- Banner Area Starts -->
   <section class="banner-area banner-area2 text-center commande-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1><i>Passez vos <span class="prime-color">commandes</span> </i></h1>
                <p class="pt-2"><i>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, tenetur.</i></p>
            </div>
        </div>
    </div>
</section>
<!-- Banner Area End -->

<section>
  <div class="whole-wrap">
    <div class="container">
        <div class="section-top-border">
            <h3 class="mb-30 title_color">Block Quotes</h3>
            <div class="row">
                <div class="col-lg-12">
                        <div class="table-btn text-center">
                            <a href="cel:40121711" class=" a template-btn m-5 text-md-center atc">Nous contacter directement</a> 
                            <span class="prime-color" style="color: black; font-familly:18px">OU</span>
                             <a href="#commande" class=" a template-btn m-5 text-md-center atc">Laissez-nous vous contacter</a> 
                         </div>
                         
                </div>
            </div>
        </div>
        
    </div>
</div>
</section>

<section class="table-area section-padding"id="commande">
  <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <div class="section-top2 text-center">
                  <h3>Veuillez nous<span> laisser </span>votre contact</h3>
                  <p><span><i>Laisser votre commande et poulet chic vous contactera dans les plus brefs délais.</i></span></p>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-lg-8 offset-lg-2">
            <form class="form form-choix">
                <div class="form-group">
                  <label for="exampleInputEmail1">Votre nom</label>
                  {{-- <input type="text" class="form-control"> --}}
                  <div class="mt-10">
                    <input type="text" name="first_name" placeholder="Ex : Konan" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ex : Konan'" required="" class="single-input-primary">
                  </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Votre contact</label>
                    {{-- <input type="text" class="form-control" > --}}
                    <div class="mt-10">
                        <input type="text" name="first_name" placeholder="Ex : 01 02 03 04" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ex : 01 02 03 04'" required="" class="single-input-primary">
                    </div>
                </div>
                <div >
                    <label for="">Choix de commande : </label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="choix" id="inlineRadio1" value="Poulet en gros">
                        <label class="form-check-label" for="inlineRadio1">Poulet en gros</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="choix" id="inlineRadio2" value="Poulet de chair">
                        <label class="form-check-label" for="inlineRadio2">Poulet de chair</label>
                    </div>

                    <div class="form-check">
                       <input class="form-check-input"  type="radio" id="inlineRadio3" checked="" name="choix" value="Lapin">
                        <label class="form-check-label" for="inlineRadio3">Lapin</label>
                    </div>
                    
                </div>
                <div class="table-btn text-center">
                    <button type="submit" class="template-btn template-btn2 mt-4">passez votre commande</button>
                </div>
                
              </form>
             
          </div>
      </div>
  </div>
</section>

@endsection