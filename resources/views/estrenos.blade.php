@extends('layouts.principal')

@section('content')
@include('alerts.alerts')
<h2 class="m-4">Nuevo estreno</h2>
{!! Form::open(array('route'=>'movie.store', 'accept'=>'image/*', 'method'=>'post', 'enctype'=>"multipart/form-data")) !!}
    @include("forms.movie")
    {!! Form::submit('Guardar', ['class'=>'btn btn-primary mx-3']) !!}
{!! Form::close() !!} 
@endsection