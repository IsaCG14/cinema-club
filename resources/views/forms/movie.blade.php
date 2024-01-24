<div class="row">
    <div class="col">
     {!! Form::text('name', null, ['class'=>'form-control m-3', 'placeholder'=>'Nombre']) !!}
     {!! Form::text('cast', null, ['class'=>'form-control m-3', 'placeholder'=>'Cast']) !!}
     {!! Form::text('direction', null, ['class'=>'form-control m-3', 'placeholder'=>'Dirección']) !!}
     <textarea class="form-control m-3" placeholder="Descripción" rows="3" name="sinopsis"></textarea>
 </div>
 <div class="col">
     {!! Form::text('duration', null, ['class'=>'form-control m-3', 'placeholder'=>'Duración']) !!}
     {!! Form::select('genero_id', array(
         '1' => 'Aventura',
         '2' => 'Acción',
         '3' => 'Fantasia',
         '4' => 'Sobrenatural',
         '5' => 'Terror'
     ), null, ['class'=>'form-select m-3']) !!}
     <input type="file" class="form-control m-3" name="image">
 </div>  
 </div>