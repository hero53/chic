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
                    <blockquote class="generic-blockquote">
                        “Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, magni? Assumenda, expedita eos eligendi numquam incidunt sit modi praesentium at quia accusantium itaque quibusdam. Soluta officia non, est eveniet consequuntur similique accusantium rerum laboriosam eius cumque enim numquam rem, recusandae aspernatur, qui quam quo magnam a repellat. Veniam voluptatibus fugiat eveniet ab, sequi animi labore corporis accusamus quisquam iure autem sint molestias? Commodi provident maiores officia omnis a dicta nesciunt laudantium magni! Officiis, dicta. Voluptatum qui praesentium sed optio nihil, adipisci labore quaerat minus aperiam fugit recusandae, alias perferendis impedit! Dolor dignissimos enim excepturi debitis ipsum alias nesciunt cum earum?” 
                    </blockquote>
                </div>
            </div>
        </div>
        
    </div>
</div>
</section>

<section class="table-area section-padding">
  <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <div class="section-top2 text-center">
                  <h3>Book <span>your</span> table</h3>
                  <p><i>Beast kind form divide night above let moveth bearing darkness.</i></p>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-lg-8 offset-lg-2">
            <form class="form form-choix">
                <div class="form-group">
                  <label for="exampleInputEmail1">Votre nom</label>
                  <input type="text" class="form-control">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Votre contact</label>
                  <input type="text" class="form-control" >
                </div>
                <div>
                    <label for="">Choix de commande : </label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="choix" id="inlineRadio1" value="Poulet en gros">
                        <label class="form-check-label" for="inlineRadio1">Poulet en gros</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="choix" id="inlineRadio2" value="Poulet de chair">
                        <label class="form-check-label" for="inlineRadio2">Poulet de chair</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="choix" id="inlineRadio2" value="Lapin" style=" width: 1em;">
                        <label class="form-check-label" for="inlineRadio2"> Lapin</label>
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