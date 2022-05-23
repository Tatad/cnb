@extends('admin.layouts.app')
@section('content')
    <form method="POST" action="{{ url('admin/memberships' . (isset($membership) ? '/update' : '/create')) }}" enctype='multipart/form-data'>
        @csrf
        @if(isset($membership))
            @method('PUT')
        @endif
        <div class="row">
            <div class="col s12">
                <h3 class="mt-1 blue-card-title">MEMBERSHIP PAGE</h3>
                <div class="card">
                    <div class="card-content">
                        <h6 class="mt-1 blue-card-title">Membership Banner</h6>
                        <div class="row">
                            <div class="input-field col s12">
                                <p>Image</p>
                                @if(isset($membership['membership_banner_image']))
                                    <input type="hidden" value="{{$membership['membership_banner_image']}}" name="membership_banner_image"/>
                                @endif
                                <input type="file" accept="image/*" name="membership_banner_image"
                                       data-default-file="{{$membership['membership_banner_image'] ?? ''}}" class="dropify"/>
                            </div>

                            <div class="input-field col s12">
                                <input id="membership_title" type="text" name="membership_title" required
                                       value="{{$membership['membership_title'] ?? ''}}">
                                <label for="membership_title">Title</label>
                            </div>

                            <div class="input-field col s12">
                                <input id="membership_text" type="text" name="membership_text" required
                                       value="{{$membership['membership_text'] ?? ''}}">
                                <label for="membership_text">Description</label>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col s12">
                    <div class="card">
                        <div class="card-content">
                            <h6 class="mt-1 blue-card-title">Quote</h6>
                            <div class="row">
                                <div class="input-field col s12">
                                    <p>Small Text</p>
                                    <textarea class="ckeditor"
                                              name="membership_animated_title">{{$membership['membership_animated_title'] ?? ''}}</textarea>
                                </div>

                                <div class="input-field col s12">
                                    <p>Big Text</p>
                                    <textarea class="ckeditor"
                                              name="membership_animated_text">{{$membership['membership_animated_text'] ?? ''}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="action-buttons col s12 mb-2">
                    <button class="btn waves-effect waves-light right" type="submit">Submit</button>
                </div>
            </div>
        </div>
    </form>
@endsection

