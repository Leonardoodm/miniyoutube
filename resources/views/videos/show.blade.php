@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card" style="width: 38rem;">
                {{--@if(Storage::disk('images')->has($video->image))
                <img src="{{ url('/miniatura/'.$video->image) }}" class="card-img-top" alt="..."/>
                @endif
                --}}
                    <!--video-->
                    <video controls id="video-player">
                    <source src="{{route('fileVideo',['filename' =>$video->video_path])}}"></source>
                        Tu navegador no es compatible con HTML5
                    </video>
                    <div class="card-body">
                    <h5 class="card-title">{{$video->title}}</h5>
                    <p class="card-text">{{$video->description}}</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                    <h5></br>Cometarios</h5>
                    @if(Auth::check())
                        <form class="col-md-4" method="post" action="{{ route('comments.store') }}">
                        {!! csrf_field() !!}
                        <input type="hidden" name="video_id" value="{{$video->id}}" required>
                        <textarea class="form-control" id="body" rows="3" name="body" style="width: 30rem;"></textarea>
                        </br>
                        <input type="submit" value="Comentar" class="btn btn-success">
                        </form>
                        <div class="clearfix"></div>
                        <hr/>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>