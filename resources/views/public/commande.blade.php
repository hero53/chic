@extends('layouts.public.base',['title'=>'Acceuil - Poulet chicc'])

@section('content')
  @include('layouts.public.__indexnav')

   <!-- Banner Area Starts -->
   <section class="banner-area banner-area2 contact-bg text-center">
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
            <form class="form">
                <div class="form-group">
                  <label for="exampleInputEmail1">Votre nom</label>
                  <input type="text" class="form-control">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Votre contact</label>
                  <input type="text" class="form-control" >
                </div>
                <select class="form-control">
                    <option>Default select</option>
                  </select>

                  <div class="table-btn text-center">
                    <button type="submit" class="template-btn template-btn2 mt-4">book a table</button>
                </div>
                
              </form>
             
          </div>
      </div>
  </div>
</section>

@endsection