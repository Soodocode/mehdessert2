@extends('index')

@section('sidebar')
    @parent 
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
                                <a href="#">Èrik &nbsp;<span class="ion-ios-arrow-down"></span></a>
                                <div uk-dropdown="pos: bottom-right; mode: click; offset: -17;">
                                   <ul class="uk-nav uk-navbar-dropdown-nav">
                                       <li class="uk-nav-header">Options</li>
                                       <li><a href="#">Edit Profile</a></li>
                                       <li class="uk-nav-header">Actions</li>
                                       <li><a href="#">Lock</a></li>
                                       <li><a href="#">Logout</a></li>
                                   </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    @endsection