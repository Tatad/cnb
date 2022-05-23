@extends('admin.layouts.app')
@section('content')
    <form method="POST" action="{{ url('admin/banners' . (isset($banner) ? '/update' : '/create')) }}" enctype='multipart/form-data'>
        @csrf
        @if(isset($banner))
            @method('PUT')
        @endif
        <div class="row">
            <div class="col s12">
                <h3 class="mt-1 blue-card-title">HOME PAGE</h3>
                <div class="card">
                    <div class="card-content">
                        <h6 class="mt-1 blue-card-title">Home Banner</h6>
                        <div class="row">
                            <div class="input-field col s12">
                                <p>Video (Mp4 Format)</p>
                                @if(isset($banner['banner_video']))
                                    <input type="hidden" value="{{$banner['banner_video']}}" name="banner_video"/>
                                @endif
                                <input type="file" @if(!isset($banner['banner_video'])) required @endif accept="video/mp4" name="banner_video"
                                       data-default-file="{{$banner['banner_video'] ?? ''}}" class="dropify"/>
                            </div>
                            @if(isset($banner['banner_video']))
                                <div class="input-field col s12">
                                    <video style="width: 100%;" height="260" controls>
                                        <source src="{{$banner['banner_video'] ?? ''}}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                            @endif
                            <div class="input-field col s12">
                                <p>Title Logo</p>
                                @if(isset($banner['banner_title_logo']))
                                    <input type="hidden" value="{{$banner['banner_title_logo']}}" name="banner_title_logo"/>
                                @endif
                                <input type="file" accept="image/*" @if(!isset($banner['banner_title_logo'])) required @endif name="banner_title_logo" class="dropify"
                                       data-default-file="{{$banner['banner_title_logo'] ?? ''}}"/>
                            </div>

                            <div class="input-field col s12">
                                <input id="email" type="text" name="banner_title" required
                                       value="{{$banner['banner_title'] ?? ''}}">
                                <label for="email">Title</label>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col s12">
                    <div class="card">
                        <div class="card-content">
                            <h6 class="mt-1 blue-card-title">Philosophy Section</h6>
                            <div class="row">
                                <div class="input-field col s12">
                                    <p>Image</p>
                                    @if(isset($banner['philosophy_image']))
                                        <input type="hidden" value="{{$banner['philosophy_image']}}" name="philosophy_image"/>
                                    @endif
                                    <input type="file" @if(!isset($banner['philosophy_image'])) required @endif accept="image/*" name="philosophy_image"
                                           data-default-file="{{$banner['philosophy_image'] ?? ''}}" class="dropify"/>
                                </div>
                                <div class="input-field col s12">
                                    <p>Text 1</p>
                                    <textarea class="ckeditor"
                                              name="philosophy_text[]">{{$banner['philosophy_text'][0] ?? ''}}</textarea>
                                </div>
                                <div class="input-field col s12">
                                    <p>Text 2</p>
                                    <textarea class="ckeditor"
                                              name="philosophy_text[]">{{$banner['philosophy_text'][1] ?? ''}}</textarea>
                                </div>
                                <div class="input-field col s12">
                                    <p>Text 3</p>
                                    <textarea class="ckeditor"
                                              name="philosophy_text[]">{{$banner['philosophy_text'][2] ?? ''}}</textarea>
                                </div>
                                <div class="input-field col s12">
                                    <p>Text 4</p>
                                    <textarea class="ckeditor"
                                              name="philosophy_text[]">{{$banner['philosophy_text'][3] ?? ''}}</textarea>
                                </div>

{{--                                <div class="input-field col s12" >--}}
{{--                                    <input id="link_title" value="{{$banner['philosophy_link_title'] ?? ''}}" type="text" name="philosophy_link_title" required>--}}
{{--                                    <label for="link_title">Philosophy Link Title</label>--}}
{{--                                </div>--}}

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col s12">
                    <div class="card">
                        <div class="card-content">
                            <h6 class="mt-1 blue-card-title">Our Team Section</h6>
                            <div class="row">
                                <div class="input-field col s12">
                                    <p>Quote</p>
                                    <textarea class="ckeditor"
                                              name="our_team_top_text">{{$banner['our_team_top_text'] ?? ''}}</textarea>
                                </div>
                                <div class="input-field col s12">
                                    <p>Background Image</p>
                                    @if(isset($banner['our_team_background_image']))
                                        <input type="hidden" value="{{$banner['our_team_background_image']}}" name="our_team_background_image"/>
                                    @endif
                                    <input type="file" @if(!isset($banner['our_team_background_image'])) required @endif accept="image/*" name="our_team_background_image"
                                           data-default-file="{{$banner['our_team_background_image'] ?? ''}}"    class="dropify"/>
                                </div>
                                <div class="input-field col s12">
                                    <input id="our_team_title" value="{{$banner['our_team_title'] ?? ''}}" type="text" name="our_team_title" required>
                                    <label for="our_team_title">Title</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="our_team_bottom_text" value="{{$banner['our_team_bottom_text'] ?? ''}}" type="text" name="our_team_bottom_text" required>
                                    <label for="our_team_bottom_text">Bottom Text</label>
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
                            <h6 class="mt-1 blue-card-title">Gallery Section</h6>
                            <div class="row">
                                <div class="input-field col s12">
                                    <p>Quote Small Text</p>
                                    <textarea class="ckeditor"
                                              name="gallery_small_text">{{$banner['gallery_small_text'] ?? ''}}</textarea>
                                </div>
                                <div class="input-field col s12">
                                    <p>Quote Big Text</p>
                                    <textarea class="ckeditor"
                                              name="gallery_big_text">{{$banner['gallery_big_text'] ?? ''}}</textarea>
                                </div>
                                <div class="input-field col s12">
                                    <p>Photos</p>
                                    <div>
                                        @if(isset($banner['galleries']))
                                            @foreach($banner['galleries'] as $i=>$gallery)
                                                <div class="input-field col s12">
                                                    <div class="input-field col offset-s1 s10">
                                                        @if(isset($gallery))
                                                            <input type="hidden" value="{{$gallery}}" name="galleries[]"/>
                                                        @endif
                                                        <input type="file" @if(!isset($gallery)) required @endif class="dropify" accept="image/*" name="galleries[]"
                                                               data-default-file="{{$gallery ?? ''}}"/>
                                                    </div>
                                                    @if($i > 0)
                                                        <div class="col s1"><a href="#" class="delete_btn right"><i class="material-icons">delete</i></a></div>
                                                    @endif
                                                </div>
                                            @endforeach
                                        @else
                                            <div class="input-field col s12">
                                                <div class="input-field col offset-s1 s10">
                                                    <input type="file" required class="dropify" accept="image/*" name="galleries[]"/>
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

