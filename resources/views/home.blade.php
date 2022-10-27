@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <h3>Videos Subidos</h3>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach ($videos as $video)
              
              
                    <div class="card" style="width: 18rem;">
              @if(Storage::disk('images')->has($video->image))
                <img src="{{ url('/miniatura/'.$video->image) }}" class="card-img-top" alt="..."/>
                @endif
                
  <div class="card-body">
    <h5 class="card-title">{{$video->title}}</h5>
    <p class="card-text">{{$video->description}}</p>
    <a href="{{route('videos.show',$video->id)}}" class="btn btn-primary">Escuchala</a>
  </div>
</div>
                        
                    @endforeach
               

        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
