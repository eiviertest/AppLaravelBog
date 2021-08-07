@extends('layout')
@section('dashboard-content')
    <h1>Formulario para actualizar una persona</h1>
        @if (Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" id="gone">
                <strong>{{Session::get('success')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @if (Session::get('failed'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert" id="gone">
            <strong>{{Session::get('failed')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif            

        <form action="{{URL::to('update-persona-form')}}/{{$persona->id}}" method="post">
            @csrf
            <div class="form-group">
              <label for="personaNombre">Nombre (s)</label>
              <input type="text" class="form-control" id="personaNombre" 
               placeholder="Ingrese el nombre"
              name="personaNombre"
              value="{{$persona->nombre}}">            
            </div>
            <div class="form-group">
              <label for="personaApellidoP">Apellido Paterno</label>
              <input type="text" class="form-control" id="personaApellidoP" 
               placeholder="Ingrese el apellido paterno"
              name="personaApellidoP"        
              value="{{$persona->apellido_paterno}}">            
            </div>
            <div class="form-group">
              <label for="personaApellidoM">Apellido Materno</label>
              <input type="text" class="form-control" id="personaApellidoM" 
               placeholder="Ingrese el apellido materno"
              name="personaApellidoM"           
              value="{{$persona->apellido_materno}}">            
            </div>
            <div class="form-group">
              <label for="personaEstadoCivil">Estado civil</label>
              <input type="text" class="form-control" id="personaEstadoCivil" 
               placeholder="Ingrese el estado civil"
              name="personaEstadoCivil"           
              value="{{$persona->estado_civil}}">            
            </div>
            <div class="form-group">
                <label for="inputEstadoCivil">Edad</label>
                <input type="number" min="5" max="80" class="form-control" id="personaEdad" 
                placeholder="Ingrese la edad"
                name="personaEdad"
                value="{{$persona->edad}}">
            </div>
            <div class="form-group">
                <label for="personaSexo">Sexo</label>
                <input type="text" class="form-control" id="personaSexo" 
                placeholder="Ingrese el sexo"
                name="personaSexo"
                value="{{$persona->sexo}}">
            </div>
            <button type="submit" class="btn btn-primary mt-3">Enviar</button>
           
          </form>
@stop