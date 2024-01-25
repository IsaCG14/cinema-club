@extends('layouts.principal')

@section('content')
@include('alerts.errors')
@include('alerts.success')
{!! Form::open(['route'=>'login', 'method'=>'POST']) !!}
<h5 class="m-4">Iniciar sesión:</h5>
<div class="row m-4">
    <div class="col">
        {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'Correo']) !!}
    </div> 
    <div class="col">
        {!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'Contraseña']) !!}
    </div>
    <div class="col">
        {!! Form::submit('Entrar', ['class'=>'btn btn-primary']) !!}
    </div>
</div>
{!! Form::close() !!}
<div class="lista">
    @foreach($pelis as $peli)
        <div class="peliculas"><a href="{{ route("update", ['id'=>$peli->id]) }}"><img data-bs-custom-class="my-popover" src="images/poster{{$peli->id}}.jpg"></a></div>
    @endforeach
</div> 
<script>
    $(document).ready(function() {
        //Recuperar datos de pelis
        const pelis = @json($pelis);
        
        // Agrega el evento click a la imagen
        $(".peliculas img").each(function(contador = 0) {
            //Poner su identificador
            $(this).attr("id", pelis[contador].id)

                $(this).on("mouseenter", function() {
                    let genero;
                    switch(pelis[contador].genero_id){
                        case 1: genero = "Aventura";
                        break;
                        case 2: genero = "Acción";
                        break;
                        case 3: genero = "Fantasia";
                        break;
                        case 4: genero = "Sobrenatural";
                        break;
                        default: genero = "Terror";
                        break;
                    }

                    // Activa el popover en la imagen
                    $(this).popover({
                        title: pelis[contador].name,
                        content: "Cast: "+pelis[contador].cast+". Dirección: "+pelis[contador].direction+". Duración: "+pelis[contador].duration+". Género: "+genero,
                        placement: "bottom",
                        trigger: "hover"
                    });
                    contador++
                });
        });
    });
  </script>
@endsection