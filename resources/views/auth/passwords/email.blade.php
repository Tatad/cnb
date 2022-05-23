@extends('admin.layouts.auth')

@section('content')
    <div class="row">
        <div class="col s12">
            <div class="container">
                <div id="register-page" class="row">
                    <div class="col s12 m6 l4 z-depth-4 offset-m4 card-panel border-radius-6 register-card bg-opacity-8">
                        <div class="row">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    <strong style="color: #00c853">{{session('status')}}</strong>
                                </div>
                            @endif
                            <div class="input-field col s12">
                                <h5 class="ml-4">{{ __('Reset Password') }}</h5>
                            </div>
                        </div>
                        <form class="row" method="POST" action="{{ route('admin.password.email') }}">
                            @csrf
                            <div class="input-field col s12">
                                <i class="material-icons prefix pt-2">person_outline</i>
                                <input name="email" id="email" type="email" class="@error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong style="color: red; padding-left: 3rem">{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label for="email" class="center-align">{{ __('E-Mail Address') }}</label>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <button type="submit" class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12 mb-1">
                                        {{ __('Send Password Reset Link') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="row">
                            <div class="input-field col s6 m6 l6">
                                <p class="margin medium-small"><a href="/login">{{ __('Login') }}</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-overlay"></div>
        </div>
    </div>
@endsection

