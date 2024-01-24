@extends('layouts.principal')

@section('content')
@include("alerts.alerts")
<h2 class="m-4">{{$movie->name}}</h2>
<div class="container-fluid">
  <div class="row">
    <div class="col-auto">
        <img src="../../images/poster{{$movie->id}}.jpg" width="250px">
    </div>
    <div class="col">
        {!! Form::model($movie, ['route'=>['movie.update', $movie->id], "method"=>"PUT", 'class'=>'form-inline'])!!}
        <div class="align-items-center row">
            <div class="col-auto">
                {!! Form::label('name', 'Nombre:', ['class'=>'form-label']) !!}
            </div>
            <div class="col-auto">
                {!! Form::text('name', null, ['class'=>'form-control m-3', 'placeholder'=>'Nombre']) !!}
            </div>
        </div>
        <div class="align-items-center row">
            <div class="col-auto">
                {!! Form::label('cast', 'Cast:', ['class'=>'form-label']) !!}
            </div>
            <div class="col-auto">
                {!! Form::text('cast', null, ['class'=>'form-control m-3', 'placeholder'=>'Cast']) !!}
            </div>
        </div>
        <div class="align-items-center row">
            <div class="col-auto">
                {!! Form::label('direction', 'Dirección:', ['class'=>'form-label']) !!}
            </div>
            <div class="col-auto">
                    {!! Form::text('direction', $movie->direction, ['class'=>'form-control m-3', 'placeholder'=>'Dirección']) !!}
            </div>
        </div>
        <div class="align-items-center row">
            <div class="col-auto">
                {!! Form::label('duration', 'Duración:', ['class'=>'form-label']) !!}
            </div>
            <div class="col-auto">
                    {!! Form::text('duration', $movie->duration, ['class'=>'form-control m-3', 'placeholder'=>'Duración']) !!}
            </div>
        </div>
        <div class="align-items-center row">
            <div class="col-auto">
                {!! Form::label('genero_id', 'Género:', ['class'=>'form-label']) !!}
            </div>
            <div class="col-auto">
                    {!! Form::select('genero_id', array(
                        '1' => 'Aventura',
                        '2' => 'Acción',
                        '3' => 'Fantasia',
                        '4' => 'Sobrenatural',
                        '5' => 'Terror'
                    ), $movie->genero_id, ['class'=>'form-select m-3']) !!}
            </div>
        </div>
        <div class="btn-group" role="group">
            {!! Form::submit('Guardar', ['class'=>'btn btn-primary my-3']) !!}
            {!! Form::close() !!}
            {!! Form::open(['route'=>['movie.destroy',$movie->id],"method"=>"DELETE"]) !!}
            {!! Form::submit('Eliminar', ['class'=>'btn btn-danger my-3 mx-3']) !!}
            {!! Form::close() !!}
        </div>
    </div>
    <h3>Sinopsis</h3>
    <p>{{ $movie->sinopsis }}</p>
</div>  
</div>
<iframe class="m-4" width="95%" height="550px" src={{asset("files/universal.mp4")}}></iframe>
@endsection