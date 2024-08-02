@extends('layout.front')

@section('contentPage')

<div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
     <x-menu_navigation/>
    </header>

    <section class="slider_section">
      <div class="slider_container">
       <h1>Panier</h1>
      </div>
    </section>
  </div>
  <hr/>

  <section class="why_section layout_padding">
    <div class="container">
      <div class="heading_container">

     @session('cart')
         <table class="table">
          <thead>
            <tr>
              <th>#</th>
              <th>Nom du Produit</th>
              <th>Description</th>
              <th>Prix</th>
              <th>Image</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>{{session('$produit->id')}}</td>
              <td>{{session('$produit->titre')}}</td>
              <td>{{session('$produit->description')}}</td>
              <td>{{session('$produit->prix')}}</td>
              <td><img src="{'{$produit->images'}}" alt=""></td>
            </tr>
          </tbody>
        </table>

         @else
         <p>
          Panier vide.
      </p>
         
        
     @endsession   

   @guest
   <a href="{{route('client.login')}}">connexion</a>
   @endguest
    
  </section>

  <section class="info_section  layout_padding2-top">
    <div class="social_container">
      <div class="social_box">
        <a href="">
          <i class="fa fa-facebook" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-twitter" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-instagram" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-youtube" aria-hidden="true"></i>
        </a>
      </div>
    </div>
    <div class="info_container ">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3">
            <h6>
              ABOUT US
            </h6>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet,
            </p>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="info_form ">
              <h5>
                Newsletter
              </h5>
              <form action="#">
                <input type="email" placeholder="Enter your email">
                <button>
                  Subscribe
                </button>
              </form>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <h6>
              NEED HELP
            </h6>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet,
            </p>
          </div>
          <div class="col-md-6 col-lg-3">
            <h6>
              CONTACT US
            </h6>
            <div class="info_link-box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span> Gb road 123 london Uk </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>+01 12345678901</span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span> demo@gmail.com</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- footer section -->
    <footer class=" footer_section">
      <div class="container">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="https://html.design/">Free Html Templates</a>
        </p>
      </div>
    </footer>
    <!-- footer section -->

  </section>
@endsection