@extends('layouts.app')
@section('content')
<div class="container">
@if(Auth::chex())
    <div class="row">
        Esta logueado
    </div>
@else
    
        <div class="row">
            <div class="col">
            <h5>Acceso no valido. Por Favor de iniciar secion</h5>
            </div>
        </div>
        
    @endif
     </div>
@endsection
