@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div id="basic-form" class="card card card-default scrollspy">
                <div class="card-content">
                    <h4 class="card-title">Edit profile</h4>
                    <form class="editor_form" enctype='multipart/form-data' method="post"
                          action="{{url('/admin/profile/update')}}">
                        @csrf
                        <input name="_method" type="hidden" value="PUT">
                        <div class="row margin">
                            <div class="input-field col s12">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{Auth::guard('admin')->user()->name}}" required autocomplete="name" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong style="color: red;">{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label for="name" class="center-align">{{ __('Name') }}</label>
                            </div>
                        </div>
                        <div class="row margin">
                            <div class="input-field col s12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{Auth::guard('admin')->user()->email}}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong style="color: red;">{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label for="email">{{ __('E-Mail Address') }}</label>
                            </div>
                        </div>
                        <div class="row margin">
                            <div class="input-field col s12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                            <strong style="color: red;">{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label for="password">{{ __('Password') }}</label>
                            </div>
                        </div>
                        <div class="row margin">
                            <div class="input-field col s12">
                                <input id="password-confirm" type="password" class="form-control" name="confirm_password" required autocomplete="new-password">
                                @error('confirm_password')
                                <span class="invalid-feedback" role="alert">
                                            <strong style="color: red;">{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <button class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange right" type="submit" name="action">
                                    Submit
                                    <i class="material-icons right">send</i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
