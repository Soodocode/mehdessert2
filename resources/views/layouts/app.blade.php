<!DOCTYPE html>
<html>
    <head>

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
 
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  <!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.22/dist/css/uikit.min.css" />
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Open+Sans&family=Poppins:wght@200&display=swap" rel="stylesheet">

<style>

.hero-banner {  
    min-height: 400px; 
    width: 100%;
    text-align: center; 
}
.hero-banner .wow{ 
position: absolute;
    top: 0;
    left: 0;
    z-index: 2;
    min-height: 400px;
    display: table;
    width: 100%;
    text-align: center;
    overflow: hidden;
}
.uk-section {
    padding-top: 40px !important;
}
.btn-action{
    margin-top: 5px;
    border-radius: .25rem;
    background: #eb7e10!important;
    border: 1px solid #eb7e10;
    color: #fff;
} 
#btn-shop-l{
    background: #8dba23;
    color: #fff;
    border-radius: 500px!important;
}
#btn-shop-lg{
    background: #8dba23;
    color: #fff;
    border-radius: 500px!important;
}
.cart-btn{
    color: #fff;
    background: #8dba23;
    border-radius: 0;
}
.cart-btn:hover {
    background: #98ca24;
    color: #fff;
}
.cart-btn:focus {
    background: #98ca24;
    color: #fff;
}
.uk-card-title{
    color: #eb7e10 !important;
    font-size: 22px;
    font-weight: 700;
}
.uk-text-center{
    margin-bottom: 2rem !important;
}
.head-title{
    font-family: 'Amatic SC', cursive;
    /* font-family: 'Open Sans', sans-serif;
    font-family: 'Poppins', sans-serif; */
    font-size: 8.5vw;
    color: #fff;
}
.box-product
{
width: 100%;
}
.price{
    margin: 0% 20% 0% 20%;
    color: #eb7e10 !important;
}
.btn-link{
    margin-left: 22%;
}
.btn-login {
    background: #8dba23;
    color: #fff;
    border-radius: 500px!important;
} .btn-login:hover {
    background: #8dba23;
    color: #fff;
    border-radius: 500px!important;
} .btn-login:focus {
    background: #8dba23;
    color: #fff;
    border-radius: 500px!important;
} .btn-login:active{
    background: #8dba23;
    color: #fff;
    border-radius: 500px!important;
    
} 
.amount{
    font-weight: bold;
}
.total{
    font-weight: bold;
    font-size: 18px;
    color: #eb7e10;
}
.subtotal{
    color: #eb7e10;
}
</style>
<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.6.22/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.6.22/dist/js/uikit-icons.min.js"></script>
    </head>
    <body>
 <!---Start NaVS--->
    <div class="uk-visible@m" uk-sticky="animation: uk-animation-slide-top sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; bottom: #transparent-sticky-navbar">
        <nav class="uk-navbar-container navbar-style" uk-navbar style="padding-left: 20% !important; padding-right: 20% !important;">
            <div class="uk-navbar-left uk-animation-toggle"> 
                <a class="uk-navbar-item uk-logo uk-animation-scale-up" href="{{ url('/') }}"><img src="images/.2c3d4dc.png" width="150" alt=""><strong>MehDessert</strong></a>
            </div>
            <div class="uk-navbar-right">
                <ul class="uk-navbar-nav">
                    <li><a class="nav-link" href="about-us">About Us</a></li>
                    <li><a class="nav-link" href="#industries" uk-scroll>Shop</a></li>
                    @guest  
                    <p uk-margin>
                    <a href="{{ route('login') }}" class="uk-button uk-button-default uk-button-small btn-action">Login</a> 
                    <a href="{{ route('register') }}" class="uk-button uk-button-default uk-button-small btn-action">Sign Up</a> 
                    </p> 
                </ul>
                @else  
                 
                <ul class="uk-navbar-nav">
            <li>
                <a href="#">{{ Auth::user()->name }}</a>
                <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li class="uk-active"><a href="{{ route('update') }}">Profile</a></li>  
                        <li class="uk-active"><a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Logout</a></li> 
                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form> 
                    </ul>
                </div>
            </li>
        </ul>
        @endguest
            </div>
        </nav>
    </div>

    <div class="uk-hidden@m">
        <div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky">
        <nav class="uk-navbar uk-navbar-container navbar-style">
            <div class="uk-navbar-left">
                <a class="uk-navbar-toggle" uk-toggle="target: #offcanvas-nav-primary" href="#">
                    <span uk-navbar-toggle-icon></span> <span class="uk-margin-small-left"></span>
                </a>
            </div>
             <div class="uk-navbar-center">
                <a href="" class="uk-navbar-item uk-logo"><img src="images/logo.2c3d4dc.png" width="150" alt=""></a>
            </div>
        </nav>
       </div>
    </div>
      

    <div id="offcanvas-nav-primary" uk-offcanvas="overlay: true">
        <div class="uk-offcanvas-bar uk-flex uk-flex-column uk-background-default" id="mob-nav-style">
            <ul class="uk-nav uk-nav-primary uk-nav-center uk-margin-auto-vertical uk-text-justify">
                <li class="uk-active">
                    <a href="#"><img src="images/logo.2c3d4dc.png" width="150" alt=""></a>
                </li> 
                    <li><a class="nav-link" href="about-us">About Us</a></li>
                    <li><a class="nav-link" href="#industries" uk-scroll>Shop</a></li>  
            </ul>
        </div>
    </div>
    <!---End NaVS--->

  
    <main class="py-4">
            @yield('content')
        </main>


   		<!-- Load More Javascript -->
           <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.min.js" integrity="sha256-UGwvyUFH6Qqn0PSyQVw4q3vIX0wV1miKTracNJzAWPc=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.transit/0.9.12/jquery.transit.min.js" integrity="sha256-rqEXy4JTnKZom8mLVQpvni3QHbynfjPmPxQVsPZgmJY=" crossorigin="anonymous"></script>
		<script src="js/notyf.min.js"></script>
		<!-- Required Overall Script -->
        <script src="js/script.js"></script>
		<!-- Status Updater -->
		<script src="js/status.js"></script>
		<!-- Sample Charts -->
		<script src="js/charts.js"></script>
		<!-- Sample Notifications -->
		<script src="js/notification.js"></script>

    </body>
</html>