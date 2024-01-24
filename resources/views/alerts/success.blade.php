@if(Session::has('message'))
  <div class="alert alert-dismissible alert-success" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    {{Session::get('message')}}
  </div>  
@endif