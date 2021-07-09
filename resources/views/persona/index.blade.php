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
     <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              User List</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Apellido Paterno</th>
                      <th>Apellido Materno</th>
                      <th>Edad</th>
                      <th>Sexo</th>
                      <th>Estado civil</th>
                      <th>Acción</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nombre</th>
                      <th>Apellido Paterno</th>
                      <th>Apellido Materno</th>
                      <th>Edad</th>
                      <th>Sexo</th>
                      <th>Estado civil</th>
                      <th>Acción</th>
                    </tr>
                  </tfoot>
                  <tbody>
                     @foreach ($personas as $persona)  
                    <tr>
                      <td> {{$persona->nombre}}<br /></td>
                      <td> {{$persona->apellido_paterno}}<br /></td>
                      <td> {{$persona->apellido_materno}}<br /></td>
                      <td> {{$persona->edad}}<br /></td>
                      <td> {{$persona->sexo}}<br /></td>
                      <td> {{$persona->estado_civil}}<br /></td>
                      <td>
                          <a href="{{URL::to('edit-persona')}}/{{$persona->id}}" class="btn btn-outline-primary btn-sm">Editar</a>
                          |
                          <a href="{{URL::to('delete-persona')}}/{{$persona->id}}" 
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
        var check = confirm('Are you sure you want DELETE this?');
        if(check){
            return true;
        }
        return false;
    }

</script>
    
@stop