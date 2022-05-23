@extends('admin.layouts.app')
@section('content')
    <form method="POST" action="{{ url('admin/galleries' . (isset($gallery) ? '/'.$gallery->id : '')) }}" enctype='multipart/form-data'>
        @csrf
        @if(isset($gallery))
            @method('PUT')
        @endif
        <div class="row">
            <div class="col s12">
                <h3 class="mt-1 blue-card-title">GALLERIES PAGE</h3>
                <div class="card">
                    <div class="card-content">
                        <h6 class="mt-1 blue-card-title">Gallery Type</h6>
                        <div class="row">
                            <div class="input-field col s10">
                                <input id="title" type="text" name="title" required
                                       value="{{$gallery['title'] ?? ''}}">
                                <label for="title">Title</label>
                            </div>
                            <div class="input-field col s2">
                                <input id="order" type="number" name="order" required
                                       value="{{$gallery['order'] ?? ''}}">
                                <label for="order">Order</label>
                            </div>
                            <div class="input-field col s12">
                                <p>Images</p>
                                <div>
                                    @if(isset($gallery['galleries']))
                                        @foreach($gallery['galleries'] as $i=>$gallery)
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
                                                <input type="file" class="dropify" accept="image/*" name="galleries[]"/>
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

            <div class="row">
                <div class="action-buttons col s12 mb-2">
                    <button class="btn waves-effect waves-light right" type="submit">Submit</button>
                </div>
            </div>
        </div>
    </form>
@endsection

