<!-- Header Area Starts -->
<header class="header-area">
  <div class="container">
      <div class="row">
          <div class="col-lg-2">
              <div class="logo-area">
                  <a href="{{route('public.index')}}"><img class="logo-border" src="{{asset('/images/page/Calque.png')}}" height="100" alt="logo"></a>
              </div>
          </div>
          <div class="col-lg-10">
              <div class="custom-navbar">
                  <span></span>
                  <span></span>
                  <span></span>
              </div>  
              <div class="main-menu">
                  <ul>
                      <li class="active lien"><a href="{{route('public.index')}}">Accueil</a></li>
                      <li class="lien"><a href="{{route('public.commande')}}">Passer votre commande</a></li>
                      <li class="lien"><a href="{{route('public.contact')}}">Contact</a></li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
</header>
<!-- Header Area End -->