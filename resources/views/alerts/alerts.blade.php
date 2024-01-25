@if(count($errors) > 0)
  <div class="alert alert-dismissible alert-danger" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    Hubo un error, llene todos los campos!
    <ul>
      @foreach($errors->all() as $error)
    <li>{!!$error!!}</li>
      @endforeach  
    </ul>
  </div>  
@endif