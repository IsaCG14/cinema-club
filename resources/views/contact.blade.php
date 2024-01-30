@extends('layouts.principal')

@section('content')
<h2 class="m-4">Registro</h2>
{!! Form::open(['route'=>'log.store', 'method'=>'POST']) !!}
    {!! Form::text('name', null, ['class'=>'form-control m-3', 'placeholder'=>'Nombre']) !!}
    {!! Form::email('email', null, ['class'=>'form-control m-3', 'placeholder'=>'Correo']) !!}
    {!! Form::password('password', ['class'=>'form-control m-3', "id"=>"pass", 'placeholder'=>'Contraseña']) !!}
    {!! Form::password('confirm', ['class'=>'form-control m-3', 'id' => 'pass-confirm', 'placeholder'=>'Repetir contraseña']) !!}
    <span id="notice"></span>
    <div class="row m-3" style="width: 150px;">
        {!! Form::submit('Registrarse', ['class'=>'btn btn-primary mx-3']) !!}
    </div>
{!! Form::close() !!}
<script>
    function validarContraseña(){
            var pass = $("#pass").val();
            var passConfirm = $("#pass-confirm").val();
            if(pass != passConfirm){
                $("#notice").text("Las contraseñas no coinciden.");
                $("#notice").css("color", "#ff6c3e");
                $(".btn").attr("disabled", "true")
            } else {
                $("#notice").text(""); 
                $(".btn").removeAttr("disabled")
            }
        }
    $("#pass-confirm").on("blur", validarContraseña)
    //$("#pass").on("blur", validarContraseña)
</script>
@endsection