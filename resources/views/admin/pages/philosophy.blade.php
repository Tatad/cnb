@extends('admin.layouts.app')
@section('content')
    <form method="POST" action="{{ url('admin/philosophies' . (isset($philosophy) ? '/update' : '/create')) }}" enctype='multipart/form-data'>
        @csrf
        @if(isset($philosophy))
            @method('PUT')
        @endif
        <div class="row">
            <div class="col s12">
                <h3 class="mt-1 blue-card-title">PHILOSOPHY PAGE</h3>
                <div class="card">
                    <div class="card-content">
                        <h6 class="mt-1 blue-card-title">Philosophy Banner</h6>
                        <div class="row">
                            <div class="input-field col s12">
                                <p>Image</p>
                                @if(isset($philosophy['philosophy_banner_image']))
                                    <input type="hidden" value="{{$philosophy['philosophy_banner_image']}}" name="philosophy_banner_image"/>
                                @endif
                                <input type="file" accept="image/*" name="philosophy_banner_image"
                                       data-default-file="{{$philosophy['philosophy_banner_image'] ?? ''}}" class="dropify"/>
                            </div>

                            <div class="input-field col s12">
                                <input id="philosophy_title" type="text" name="philosophy_title" required
                                       value="{{$philosophy['philosophy_title'] ?? ''}}">
                                <label for="philosophy_title">Title</label>
                            </div>

                            <div class="input-field col s12">
                                <input id="philosophy_text" type="text" name="philosophy_text" required
                                       value="{{$philosophy['philosophy_text'] ?? ''}}">
                                <label for="philosophy_text">Description</label>
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
                                    <p>Big text</p>
                                    <textarea class="ckeditor"
                                              name="philosophy_animated_text_title">{{$philosophy['philosophy_animated_text_title'] ?? ''}}</textarea>
                                </div>

                                <div class="input-field col s12">
                                    <p>Small text</p>
                                    <textarea class="ckeditor"
                                              name="philosophy_animated_text">{{$philosophy['philosophy_animated_text'] ?? ''}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col s12">
                    <div class="card">
                        <div class="card-content">
                            <h6 class="mt-1 blue-card-title">Description</h6>
                            <div class="row">
                                <div class="input-field col s12">
                                    <p>Image</p>
                                    @if(isset($philosophy['info_with_image']))
                                        <input type="hidden" value="{{$philosophy['info_with_image']}}" name="info_with_image"/>
                                    @endif
                                    <input type="file" @if(!isset($philosophy['info_with_image'])) required @endif accept="image/*" name="info_with_image"
                                           data-default-file="{{$philosophy['info_with_image'] ?? ''}}" class="dropify"/>
                                </div>
                                <div class="input-field col s12">
                                    <p>Text</p>
                                    <textarea class="ckeditor"
                                              name="info_with_image_text">{{$philosophy['info_with_image_text'] ?? ''}}</textarea>
                                </div>
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
                                    <p>Text</p>
                                    <textarea class="ckeditor"
                                              name="text_without_image">{{$philosophy['text_without_image'] ?? ''}}</textarea>
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

