@extends('admin.layouts.auth')

@section('content')
    <div class="row">
        <div class="col s12">
            <div class="container">
                <div id="register-page" class="row">
                    <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 register-card bg-opacity-8">
                        <form class="login-form" method="POST" action="{{ route('admin.login') }}">
                            @csrf
                            <div class="row">
                                <div class="input-field col s12">
                                    <h5 class="ml-4">{{ __('Login') }}</h5>
                                </div>
                            </div>
                            <div class="row margin">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix pt-2">person_outline</i>
                                    <input class="@error('email') is-invalid @enderror" id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red; padding-left: 3rem">{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <label for="email" class="center-align">{{ __('E-Mail Address') }}</label>
                                </div>
                            </div>
                            <div class="row margin">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix pt-2">lock_outline</i>
                                    <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red; padding-left: 3rem">{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <label for="password">{{ __('Password') }}</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m12 l12 ml-2 mt-1">
                                    <p>
                                        <label for="remember">
                                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <span>{{ __('Remember Me') }}</span>
                                        </label>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <button type="submit" class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">{{ __('Login') }}</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6 m6 l6"></div>
                                @if (Route::has('admin.password.request'))
                                    <div class="input-field col s6 m6 l6">
                                        <p class="margin right-align medium-small"><a href="{{ route('admin.password.request') }}">{{ __('Forgot Your Password?') }}</a></p>
                                    </div>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="content-overlay">
            </div>
        </div>
    </div>
@endsection
