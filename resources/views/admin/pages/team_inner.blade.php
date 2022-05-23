@extends('admin.layouts.app')
@section('content')
    <form method="POST" action="{{ url('admin/team' . (isset($team) ? '/'.$team->id : '')) }}"
          enctype='multipart/form-data'>
        @csrf
        @if(isset($team))
            @method('PUT')
        @endif
        <div class="row">
            <div class="col s12">
                <h3 class="mt-1 blue-card-title">TEAM INNER PAGE</h3>
                <div class="card">
                    <div class="card-content">
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="name" type="text" name="name" required
                                       value="{{$team['name'] ?? ''}}">
                                <label for="name">Name</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="position" type="text" name="position" required
                                       value="{{$team['position'] ?? ''}}">
                                <label for="position">Position</label>
                            </div>
                            <div class="input-field col s12">
                                <p>Avatar</p>
                                @if(isset($team['avatar']))
                                    <input type="hidden" value="{{$team['avatar']}}" name="avatar"/>
                                @endif
                                <input type="file" @if(!isset($team['avatar']))  @endif accept="image/*" name="avatar"
                                       data-default-file="{{$team['avatar'] ?? ''}}" class="dropify"/>
                            </div>
                            <div class="input-field col s12">
                                <p>Description</p>
                                <textarea class="ckeditor"
                                          name="description">{{$team['description'] ?? ''}}</textarea>
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

