@extends('admin.layouts.app')
@section('content')
    <form method="POST" action="{{ url('admin/careers' . (isset($career) ? '/update' : '/create')) }}" enctype='multipart/form-data'>
        @csrf
        @if(isset($career))
            @method('PUT')
        @endif
        <div class="row">
            <div class="col s12">
                <h3 class="mt-1 blue-card-title">CAREER PAGE</h3>
                <div class="card">
                    <div class="card-content">
                        <h6 class="mt-1 blue-card-title">Career Banner</h6>
                        <div class="row">
                            <div class="input-field col s12">
                                <p>Image</p>
                                @if(isset($career['career_banner_image']))
                                    <input type="hidden" value="{{$career['career_banner_image']}}" name="career_banner_image"/>
                                @endif
                                <input type="file" @if(!isset($career['career_banner_image'])) required @endif accept="image/*" name="career_banner_image"
                                       data-default-file="{{$career['career_banner_image'] ?? ''}}" class="dropify"/>
                            </div>

                            <div class="input-field col s12">
                                <input id="form_title" type="text" name="form_title" required
                                       value="{{$career['form_title'] ?? ''}}">
                                <label for="form_title">Form Title</label>
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

