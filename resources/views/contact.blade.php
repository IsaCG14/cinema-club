@extends('layouts.principal')

@section('content')
<h2 class="m-4">Registro</h2>
{!! Form::open(['route'=>'log.store', 'method'=>'POST']) !!}
    {!! Form::text('name', null, ['class'=>'form-control m-3', 'placeholder'=>'Nombre']) !!}
    {!! Form::email('email', null, ['class'=>'form-control m-3', 'placeholder'=>'Correo']) !!}
    {!! Form::password('password', ['class'=>'form-control m-3', 'placeholder'=>'Contraseña']) !!}
    {!! Form::submit('Registrarse', ['class'=>'btn btn-primary mx-3']) !!}
{!! Form::close() !!}
@endsection