@extends('layouts.app')

@section('content') 

 <div uk-grid class="uk-child-width-1-1@s uk-child-width-2-3@l">
                        <div class="uk-width-1-1@s uk-width-1-5@l uk-width-1-3@xl"></div>
                        <div class="uk-width-1-1@s uk-width-3-5@l uk-width-1-3@xl">
                            <div class="uk-card uk-card-default">
                                <div class="uk-card-header">
                                    {{ __('Register Page') }}
                                </div>
                                <div class="uk-card-body"> 
                                     <form method="POST" action="{{ route('register') }}">
                                     @csrf
                                        <fieldset class="uk-fieldset">

                                            <div class="uk-margin">
                                                <div class="uk-position-relative @error('name') is-invalid @enderror">
                                                    <span class="uk-form-icon ion-edit"></span>
                                                    <input name="name" class="uk-input" type="text" placeholder="Name">
                                                     @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                                </div>
                                            </div>

                                            <div class="uk-margin">
                                                <div class="uk-position-relative @error('email') is-invalid @enderror">
                                                    <span class="uk-form-icon ion-android-person"></span>
                                                    <input name="email" class="uk-input" type="email" placeholder="Email">
                                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                                </div>
                                            </div>

                                            <div class="uk-margin">
                                                <div class="uk-position-relative @error('password') is-invalid @enderror">
                                                    <span class="uk-form-icon ion-locked"></span>
                                                    <input name="password" class="uk-input" type="password" placeholder="Password">
                                                     @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                                </div>
                                            </div>

                                            <div class="uk-margin">
                                                <div class="uk-position-relative">
                                                    <span class="uk-form-icon ion-locked"></span>
                                                    <input name="password_confirmation" class="uk-input" type="password" placeholder="Repeat Password">
                                                </div>
                                            </div>

                                            <div class="uk-margin">
                                                <button type="submit" class="uk-button uk-button-primary">
                                                    <span class="ion-forward"></span>&nbsp; Register
                                                </button>
                                            </div>

                                            <hr />

                                            <center>
                                                <p>
                                                    Already have an account?
                                                </p>
                                                <a href="login.html" class="uk-button uk-button-default">
                                                    <span class="ion-android-person"></span>&nbsp; Login
                                                </a>
                                            </center>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-1-1@s uk-width-1-5@l uk-width-1-3@xl"></div>
                    </div>

@endsection