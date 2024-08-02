<div>
  <nav class="navbar navbar-expand-lg custom_nav-container">
    <a class="navbar-brand" href="index.html">
      <span>BIENVENUE A ShoppE</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('front.index')}}">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('front.shop')}}">Shop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('front.about')}}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('front.contact')}}">Contact Us</a>
        </li>
      </ul>
      <div class="user_option">

        @auth
        <a href="{{route('front.dashboard')}}">
          <i class="fa fa-user" aria-hidden="true"></i>
          <span>Espace client</span>
        </a>
        @endauth    

        @guest
        
        <a href="{{route('client.login')}}">
          <i class="fa fa-user" aria-hidden="true"></i>
          <span>Login</span>
        </a>
        @endguest
       
        <a href="{{route('front.cart')}}">
          <i class="fa fa-shopping-bag" aria-hidden="true"></i>
          <span>Panier</span>
        </a>
        <form class="form-inline">
          <button class="btn nav_search-btn" type="submit">
            <i class="fa fa-search" aria-hidden="true"></i>
          </button>
        </form>
      </div>
    </div>
  </nav>
</div>
