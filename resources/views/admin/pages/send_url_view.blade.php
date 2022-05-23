@extends('admin.layouts.app')
@section('content')
    <div class="row">
        <div class="col s6">
            <h6 class="pageTitleText mt-2">Send Email to {{$call_back_user['name'] ?? ''}}</h6>
        </div>
        <div class="col s12 m12 l12">
            <div class="card card card-default scrollspy">
                <div class="card-content">
                    <form action="{{url('/admin/call_back/send_email/' .$call_back_user['id'])}}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        @if(isset($artist))
                            @method('PUT')
                        @endif
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="email" type="text" name="email" required value="{{$call_back_user['email'] ?? ''}}">
                                <label for="email">Email</label>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 100px">
                            <div class="input-field col s12">
                                <button class="btn waves-effect waves-light right" type="submit">Send<i
                                        class="material-icons right">send</i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
