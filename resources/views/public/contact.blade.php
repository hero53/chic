@extends('layouts.public.base',['title'=>'Contact - Poulet chic'])

@section('content')
  @include('layouts.public.__indexnav')

  <section class="banner-area banner-area2 contact-bg text-center section">
      
    <div class="container ">
        <div class="row">
            <div class="col-lg-12">
                <h1>Contactez <i class="prime-color">nous</i></h1>
                <p class="pt-2"><i>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, labore.</i></p>
            </div>
        </div>
    </div>
    
</section>
<div class="section-padding3">

</div>
<div class="table-btn text-center">
  <p class="h2" style="color: black; font-weight: 500"> Ecrivez nous pour récévoire <i style="color: #ffb606">nos offres</i> </p>
</div><br>

  <section class="contact-form section-padding3 revel">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 mb-5 mb-lg-0">
                <div class="d-flex">
                    <div class="into-icon">
                        <i class="fa fa-home"></i>
                    </div>
                    <div class="info-text">
                        <h5>California, United States</h5>
                        <p>Santa monica bullevard</p>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="into-icon">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="info-text">
                        <h5>(+225) 57559041</h5>
                        <p>Mon to Fri 9am to 6 pm</p>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="into-icon">
                        <i class="fa fa-envelope-o"></i>
                    </div>
                    <div class="info-text">
                        <h5>pouletchic@yahoo.com</h5>
                        <p>Mon to Fri 9am to 6 pm</p>

                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <form action="#">
                    <div class="left">
                        <input type="text" placeholder="Entrer votre nom" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Entrer votre nom'" required="">
                        <input type="email" placeholder="Entrer votre adresse mail" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Entrer votre adresse mail'" required="">
                        <input type="text" placeholder="Entrer votre le sujet" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Entrer votre le sujet'" required="">
                    </div>
                    <div class="right">
                        <textarea name="message" cols="20" rows="7" placeholder="Entrer votre message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Entrer votre message'" required=""></textarea>
                    </div>
                    <button type="submit" class="template-btn">envoyer</button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection