@extends('admin.layouts.app')
@section('content')
    <form method="POST" action="{{ url('admin/services' . (isset($service) ? '/update' : '/create')) }}" enctype='multipart/form-data'>
        @csrf
        @if(isset($service))
            @method('PUT')
        @endif
        <div class="row">
            <div class="col s12">
                <h3 class="mt-1 blue-card-title">SERVICE PAGE</h3>
                <div class="card">
                    <div class="card-content">
                        <h6 class="mt-1 blue-card-title">Service Banner</h6>
                        <div class="row">
                            <div class="input-field col s12">
                                <p>Image</p>
                                @if(isset($service['service_banner_image']))
                                    <input type="hidden" value="{{$service['service_banner_image']}}" name="service_banner_image"/>
                                @endif
                                <input type="file" accept="image/*" name="service_banner_image"
                                       data-default-file="{{$service['service_banner_image'] ?? ''}}" class="dropify"/>
                            </div>

                            <div class="input-field col s12">
                                <input id="service_banner_title" type="text" name="service_banner_title" required
                                       value="{{$service['service_banner_title'] ?? ''}}">
                                <label for="service_banner_title">Title</label>
                            </div>

                            <div class="input-field col s12">
                                <input id="service_banner_text" type="text" name="service_banner_text" required
                                       value="{{$service['service_banner_text'] ?? ''}}">
                                <label for="service_banner_text">Description</label>
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
                                              name="service_animated_text_title">{{$service['service_animated_text_title'] ?? ''}}</textarea>
                                </div>

                                <div class="input-field col s12">
                                    <p>Big Text</p>
                                    <textarea class="ckeditor"
                                              name="service_animated_text">{{$service['service_animated_text'] ?? ''}}</textarea>
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
                            <h6 class="mt-1 blue-card-title">Services</h6>
                            <div>
                                @if(isset($service['info_with_image']))
                                    @foreach($service['info_with_image'] as $i=>$info)
                                        <div class="row" data-section="service_info_with_image" style="margin-top: 60px">
                                            @if($i>0)
                                                <div class="col s12"><a href="#" class="delete_btn_service right"><i
                                                            class="material-icons">delete</i></a></div>
                                            @endif
                                            <div class="input-field col s12">
                                                <p>Image</p>
                                                @if(isset($info['image']))
                                                    <input type="hidden" value="{{$info['image']}}"
                                                           name="info_with_image[{{$i}}][image]"/>
                                                @endif
                                                <input type="file" @if(!isset($info['image'])) required @endif accept="image/*" name="info_with_image[0][image]"
                                                       data-default-file="{{$info['image'] ?? ''}}"
                                                       class="dropify"/>
                                            </div>
                                            <div class="input-field col s12">
                                                <input id="info_with_image_title_{{$i}}"
                                                       value="{{$info['title'] ?? ''}}" type="text"
                                                       name="info_with_image[{{$i}}][title]" required>
                                                <label for="info_with_image_title_{{$i}}">Title</label>
                                            </div>
                                            <div class="input-field col s12">
                                        <textarea id="info_with_image_text_{{$i}}" class="materialize-textarea"
                                                  name="info_with_image[{{$i}}][text]"
                                                  required>{{$info['text'] ?? ''}}</textarea>
                                                <label for="info_with_image_text_{{$i}}">Description</label>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="row" data-section="service_info_with_image" style="margin-top: 60px">
                                        <div class="input-field col s12">
                                            <p>Image</p>
                                            <input type="file" required accept="image/*" name="info_with_image[0][image]" class="dropify"/>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="info_with_image_title_0" type="text"
                                                   name="info_with_image[0][title]" required>
                                            <label for="info_with_image_title_0">Title</label>
                                        </div>
                                        <div class="input-field col s12">
                                        <textarea id="info_with_image_text" class="materialize-textarea"
                                                  name="info_with_image[0][text]"
                                                  required></textarea>
                                            <label for="info_with_image_text_0">Description</label>
                                        </div>
                                    </div>
                                @endif
                                <a class="add_btn btn-floating gradient-45deg-light-blue-cyan ui-sortable-handle">
                                    <i class="material-icons">add</i>
                                </a>
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

