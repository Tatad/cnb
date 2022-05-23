@extends('admin.layouts.app')
@section('content')
    <form method="POST" action="{{ url('admin/contacts' . (isset($contact) ? '/update' : '/create')) }}"
          enctype='multipart/form-data'>
        @csrf
        @if(isset($contact))
            @method('PUT')
        @endif
        <div class="row">
            <div class="col s12">
                <h3 class="mt-1 blue-card-title">Contact PAGE</h3>
                <div class="card">
                    <div class="card-content">
                        <h6 class="mt-1 blue-card-title">Contact Banner</h6>
                        <div class="row">
                            <div class="input-field col s12">
                                <p>Image</p>
                                @if(isset($contact['contact_banner_image']))
                                    <input type="hidden" value="{{$contact['contact_banner_image']}}"
                                           name="contact_banner_image"/>
                                @endif
                                <input type="file" @if(!isset($contact['contact_banner_image'])) required @endif accept="image/*" name="contact_banner_image"
                                       data-default-file="{{$contact['contact_banner_image'] ?? ''}}" class="dropify"/>
                            </div>

                            <div class="input-field col s12">
                                <input id="title" type="text" name="title" required
                                       value="{{$contact['title'] ?? ''}}">
                                <label for="title">Title</label>
                            </div>

                            <div class="input-field col s12">
                                <input id="send_request_title" type="text" name="send_request_title" required
                                       value="{{$contact['send_request_title'] ?? ''}}">
                                <label for="send_request_title">Send Request Title</label>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-content">
                        <h6 class="mt-1 blue-card-title">Contact's Info</h6>
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="left_content_text_1" type="text" name="left_content_text_1" required
                                       value="{{$contact['left_content_text_1'] ?? ''}}">
                                <label for="left_content_text_1">Left Content Text 1</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="left_content_text_2" type="text" name="left_content_text_2" required
                                       value="{{$contact['left_content_text_2'] ?? ''}}">
                                <label for="left_content_text_2">Left Content Text 2</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="phone" type="text" name="phone" required
                                       value="{{$contact['phone'] ?? ''}}">
                                <label for="phone">Phone</label>
                            </div>

                            <div class="input-field col s6">
                                <input id="form_title" type="text" name="form_title" required
                                       value="{{$contact['form_title'] ?? ''}}">
                                <label for="form_title">Form Title</label>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-content">
                        <h6 class="mt-1 blue-card-title">Maps Section</h6>
                        <div class="row">
                            <div class="input-field col s12">
                                <p>Map Image</p>
                                @if(isset($contact['map_image']))
                                    <input type="hidden" value="{{$contact['map_image']}}" name="map_image"/>
                                @endif
                                <input type="file" accept="image/*" name="map_image"
                                       data-default-file="{{$contact['map_image'] ?? ''}}" class="dropify"/>
                            </div>
                            <div class="input-field col s12">
                                <input id="map_url" type="text" name="map_url" required
                                       value="{{$contact['map_url'] ?? ''}}">
                                <label for="map_url">Map Url</label>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-content">
                        <h6 class="mt-1 blue-card-title">Footer Section</h6>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="social_media_title" type="text" name="social_media_title" required
                                       value="{{$contact['social_media_title'] ?? ''}}">
                                <label for="social_media_title">Social Media Title</label>
                            </div>

                            <div class="input-field col s12">
                                <p>Social Media's Links</p>
                                <div>
                                    @if(isset($contact['social_medias']))
                                        @foreach($contact['social_medias'] as $i=>$media)
                                            <div class="input-field col s12">
                                                <div class="input-field col s5">
                                                    <select class="browser-default project_types" required
                                                            name="social_medias[{{$i}}][type]">
                                                        <option @if($media['type'] === 'facebook') selected
                                                                @endif value="facebook">
                                                            Facebook
                                                        </option>
                                                        <option @if($media['type'] === 'instagram') selected
                                                                @endif value="instagram">Instagram
                                                        </option>
                                                        <option @if($media['type'] === 'youtube') selected
                                                                @endif value="youtube">YouTube
                                                        </option>
                                                        <option @if($media['type'] === 'twitter') selected
                                                                @endif value="twitter">Twitter
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="input-field col s6">
                                                    <input id="social_medias_url{{$i}}" type="text"
                                                           name="social_medias[{{$i}}][url]" required
                                                           value="{{$media['url'] ?? ''}}">
                                                    <label for="social_medias_url{{$i}}">Social Medias Link</label>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="input-field col s12">
                                            <div class="input-field col s5">
                                                <select class="browser-default project_types" required
                                                        name="social_medias[0][type]">
                                                    <option value="facebook">Facebook</option>
                                                    <option value="instagram">Instagram</option>
                                                    <option value="youtube">YouTube</option>
                                                    <option value="twitter">Twitter</option>
                                                </select>
                                            </div>
                                            <div class="input-field col s6">
                                                <input id="social_medias_url" type="text" name="social_medias[0][url]"
                                                       required>
                                                <label for="social_medias_url">Social Medias Link</label>
                                            </div>
                                        </div>
                                    @endif
                                    <a class="add_btn btn-floating gradient-45deg-light-blue-cyan ui-sortable-handle">
                                        <i class="material-icons">add</i>
                                    </a>
                                </div>
                            </div>

                            <div class="input-field col s12">
                                <input id="contacts_info_title" type="text" name="contacts_info_title" required
                                       value="{{$contact['contacts_info_title'] ?? ''}}">
                                <label for="contacts_info_title">Contacts Info Title</label>
                            </div>

                            <div class="input-field col s12">
                                <input id="contacts_info_phone" type="text" name="contacts_info_phone" required
                                       value="{{$contact['contacts_info_phone'] ?? ''}}">
                                <label for="contacts_info_phone">Contacts Info Phone</label>
                            </div>

                            <div class="input-field col s12">
                                <input id="contacts_info_address" type="text" name="contacts_info_address" required
                                       value="{{$contact['contacts_info_address'] ?? ''}}">
                                <label for="contacts_info_address">Contacts Info Address</label>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card">
                    <div class="card-content">
                        <h6 class="mt-1 blue-card-title">Call-Back Request Section</h6>
                        <div class="row">
                            <div class="input-field col s12">
                                <p>Call-Back Request Form (Mp4 Format)</p>
                                @if(isset($contact['call_back_form_video']))
                                    <input type="hidden" value="{{$contact['call_back_form_video']}}" name="call_back_form_video"/>
                                @endif
                                <input type="file" @if(!isset($contact['call_back_form_video'])) required @endif accept="video/mp4" name="call_back_form_video"
                                       data-default-file="{{$contact['call_back_form_video'] ?? ''}}" class="dropify"/>
                            </div>
                            @if(isset($contact['call_back_form_video']))
                                <div class="input-field col s12">
                                    <video style="width: 100%;" height="260" controls>
                                        <source src="{{$contact['call_back_form_video'] ?? ''}}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                            @endif
                            <div class="input-field col s12">
                                <p>Call-Back Request Form Image</p>
                                @if(isset($contact['call_back_form_image']))
                                    <input type="hidden" value="{{$contact['call_back_form_image']}}"
                                           name="call_back_form_image"/>
                                @endif
                                <input type="file" @if(!isset($contact['call_back_form_image'])) required @endif accept="image/*" name="call_back_form_image" class="dropify"
                                       data-default-file="{{$contact['call_back_form_image'] ?? ''}}"/>
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

