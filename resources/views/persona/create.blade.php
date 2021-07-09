@extends('layout')
@section('dashboard-content')
    <h1>Formulario para registrar una persona</h1>
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

        <form action="{{URL::to('post-persona-form')}}" method="post">
            @csrf
            <div class="form-group">
              <label for="personaNombre">Nombre (s)</label>
              <input type="text" class="form-control" id="personaNombre" 
               placeholder="Ingrese el nombre"
              name="personaNombre">            
            </div>
            <div class="form-group">
              <label for="personaApellidoP">Apellido Paterno</label>
              <input type="text" class="form-control" id="personaApellidoP" 
               placeholder="Ingrese el apellido paterno"
              name="personaApellidoP">            
            </div>
            <div class="form-group">
              <label for="personaApellidoM">Apellido Materno</label>
              <input type="text" class="form-control" id="personaApellidoM" 
               placeholder="Ingrese el apellido materno"
              name="personaApellidoM">            
            </div>
            <div class="form-group">
                <label for="personaEstadoCivil">Estado civil</label>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="personaEstadoCivil" id="personaEstadoCivil" checked value="Soltero">
                            <label class="form-check-label" for="personaEstadoCivil">
                                Soltero
                            </label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="personaEstadoCivil" id="personaEstadoCivil" value="Casado">
                            <label class="form-check-label" for="personaEstadoCivil">
                                Casado
                            </label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="personaEstadoCivil" id="personaEstadoCivil" value="Viudo">
                            <label class="form-check-label" for="personaEstadoCivil">
                                Viudo
                            </label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="personaEstadoCivil" id="personaEstadoCivil" value="Divorciado">
                            <label class="form-check-label" for="personaEstadoCivil">
                                Divorciado
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEstadoCivil">Edad</label>
                <input type="number" min="5" max="80" class="form-control" id="personaEdad" 
                placeholder="Ingrese la edad"
                name="personaEdad">    
            </div>
            <div class="form-group">
                <label for="personaSexo">Sexo</label>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="personaSexo" id="personaSexo" checked value="Masculino">
                                <label class="form-check-label" for="personaSexo">
                                    Masculino
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="personaSexo" id="personaSexo" value="Femenino">
                                <label class="form-check-label" for="personaSexo">
                                    Femenino
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Enviar</button>
           
          </form>
@stop