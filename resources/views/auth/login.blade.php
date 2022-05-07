@extends('layouts.app')

@section('content')
<div class="uk-section uk-section-muted uk-flex uk-flex-middle uk-animation-fade" uk-height-viewport>
	<div class="uk-width-1-1">
		<div class="uk-container">
			<div class="uk-grid-margin uk-grid uk-grid-stack" uk-grid>
				<div class="uk-width-1-1@m">
					<div class="uk-margin uk-width-large uk-margin-auto uk-card uk-card-default uk-card-body uk-box-shadow-large">
						<h3 class="uk-card-title uk-text-center">Login to Food Delivery Software</h3>
                        <form method="POST" action="{{ route('login') }}">
                        @csrf 
							<div class="uk-margin">
								<div class="uk-inline uk-width-1-1">
									<span class="uk-form-icon" uk-icon="icon: mail"></span>
									<input class="uk-input uk-form-large @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="Email" autofocus required>
								</div>
                                @error('email') 
                                <div class="uk-alert-danger" uk-alert>
                                    <a class="uk-alert-close" uk-close></a>
                                    <p>{{ $message }}</p>
                                </div>
                                @enderror
							</div>
							<div class="uk-margin">
								<div class="uk-inline uk-width-1-1">
									<span class="uk-form-icon" uk-icon="icon: lock"></span>
									<input class="uk-input uk-form-large @error('password') is-invalid @enderror" type="password" id="password" name="password" autocomplete="current-password" placeholder="Password" required>	
								</div>
                                @error('password') 
                                <div class="uk-alert-danger" uk-alert>
                                    <a class="uk-alert-close" uk-close></a>
                                    <p>{{ $message }}</p>
                                </div> 
                                @enderror
							</div>
							<div class="uk-margin">
								<button type="submit" class="uk-button uk-button-primary uk-button-large uk-width-1-1 btn-login" onclick="this.disabled=true; this.value='Submitting...'; this.form.submit()">Login</button>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div> 
							<!-- <div class="uk-text-small uk-text-center">
								Not registered? <a href="#">Create an account</a>
							</div> -->
                              
                            
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> 
@endsection
