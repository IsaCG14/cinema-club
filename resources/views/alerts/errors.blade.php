@if(Session::has('message-error'))
  <div class="alert alert-dismissible alert-danger" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    {{Session::get('message-error')}}
  </div>  
@endif