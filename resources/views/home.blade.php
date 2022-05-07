@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in !') }}
{{Session::get('variableName')}}
                @if(Auth::check())
                @if (Auth::user()->roles==1)
                        <h2>Admin user enter code here<h2>
                    @endif
                @endif

                </div>
            </div>
        </div>
    </div>
</div>
 
@endsection
