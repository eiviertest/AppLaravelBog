@extends('layout')
@section('dashboard-content')
@if (Session::get('success'))
<div class="alert alert-danger alert-dismissible fade show" role="alert" id="gone">
    <strong>{{Session::get('deleted')}}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
@if (Session::get('delete-failed'))
<div class="alert alert-warning alert-dismissible fade show" role="alert" id="gone">
<strong>{{Session::get('failed')}}</strong>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
</div>
@endif
    <div id="content-wrapper">
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Lista de celulares</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Modelo</th>
                      <th>Marca</th>
                      <th>Capacidad de bateria mA</th>
                      <th>Total de camaras</th>
                      <th>Color</th>
                      <th>Acción</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($celulares as $celular)  
                    <tr>
                      <td> {{$celular->modelo}}<br /></td>
                      <td> {{$celular->marca}}<br /></td>
                      <td> {{$celular->capacidad_bateria}}<br /></td>
                      <td> {{$celular->total_camaras}}<br /></td>
                      <td> {{$celular->color}}<br /></td>
                      <td>
                          <a href="{{URL::to('edit-celular')}}/{{$celular->id}}" class="btn btn-outline-primary btn-sm">Editar</a>
                          |
                          <a href="{{URL::to('delete-celular')}}/{{$celular->id}}" 
                            class="btn btn-outline-danger btn-sm"
                            onclick="return checkDelete();"
                            >Eliminar</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>
<script>
    function checkDelete(){
        var check = confirm('¿Estás seguro de eliminar el registro?');
        if(check){
            return true;
        }
        return false;
    }

</script>
    
@stop