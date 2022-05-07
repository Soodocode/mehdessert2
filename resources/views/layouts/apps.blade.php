<!DOCTYPE html>
<html>
    <head>

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="{{ asset('css/uikit.min.css') }}" />
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" href="{{ asset('css/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/notyf.min.css') }}" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/uikit.min.js') }}" ></script>
		<script src="{{ asset('js/uikit-icons.min.js') }}" ></script>
    </head>
    <body>
    <div uk-sticky class="uk-navbar-container tm-navbar-container uk-active">
            <div class="uk-container uk-container-expand">
                <nav uk-navbar>
                    <div class="uk-navbar-left">
                        <a id="sidebar_toggle" class="uk-navbar-toggle" uk-navbar-toggle-icon ></a>
                        <a href="#" class="uk-navbar-item uk-logo">
                            UI Admin
                        </a>
                    </div>
                    <div class="uk-navbar-right uk-light">
                        <ul class="uk-navbar-nav">
                            <li class="uk-active">
                                <a href="#">{{ Auth::user()->name }} &nbsp;<span class="ion-ios-arrow-down"></span></a>
                                <div uk-dropdown="pos: bottom-right; mode: click; offset: -17;">
                                   <ul class="uk-nav uk-navbar-dropdown-nav">
                                       <li class="uk-nav-header">Options</li>
                                       <li><a href="#">Edit Profile</a></li>
                                       <li class="uk-nav-header">Actions</li>
                                       <li><a href="#">Lock</a></li>
                                       <li><a onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();" href="{{ route('logout') }}">Logout</a></li>                                   
                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                   </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div id="sidebar" class="tm-sidebar-left uk-background-default">
            <center>
                <div class="user">
                    <img id="avatar" width="100" class="uk-border-circle" src="images/avatar.jpg" />
                    <div class="uk-margin-top"></div>
                    <div id="name" class="uk-text-truncate">{{ Auth::user()->name }}</div> 
                    <span id="status" data-enabled="true" data-online-text="Online" data-away-text="Away" data-interval="10000" class="uk-margin-top uk-label uk-label-success"></span>
                </div>
                <br />
            </center>
            <ul class="uk-nav uk-nav-default">

                <li class="uk-nav-header">
                    Products
                </li>
                <li><a href="/products">Products</a></li>  
                <li class="uk-nav-header">
                    Pages
                </li>
                <li><a href="/dashboard">Customer List</a></li> 
            </ul>
        </div>
        <div class="content-padder content-background">
            <div class="uk-section-small uk-section-default header">
                <div class="uk-container uk-container-large">
                    <h1><span class="ion-speedometer"></span> Dashboard</h1>
                    <p>
                        Welcome back, {{ Auth::user()->name }}
                    </p>
                    <ul class="uk-breadcrumb">
                        <li><a href="/dashboard">Home</a></li>
                        <li><span href="">Dashboard</span></li>
                    </ul>
                </div>
            </div>

            <div class="uk-section-small">
                <div class="uk-container uk-container-large">
                @yield('content')
                </div>
                </div>    



        </div>
		<!-- Load More Javascript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.min.js" integrity="sha256-UGwvyUFH6Qqn0PSyQVw4q3vIX0wV1miKTracNJzAWPc=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.transit/0.9.12/jquery.transit.min.js" integrity="sha256-rqEXy4JTnKZom8mLVQpvni3QHbynfjPmPxQVsPZgmJY=" crossorigin="anonymous"></script>
		<script src="{{ asset('js/notyf.min.js') }}"></script>
		<!-- Required Overall Script -->
        <script src="{{ asset('js/script.js') }}"></script>
		<!-- Status Updater -->
		<script src="{{ asset('js/status.js') }}"></script>
		<!-- Sample Charts -->
		<script src="{{ asset('js/charts.js') }}"></script>
		<!-- Sample Notifications -->
		<!-- <script src="{{ asset('js/notification.js') }}"></script> -->
    </body>
</html>
