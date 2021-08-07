@extends('layout')
@section('dashboard-content')
    <h1>Formulario para actualizar un celular</h1>
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

        <form action="{{URL::to('update-celular-form')}}/{{$celular->id}}" method="post">
            @csrf
            <div class="form-group">
                <label for="modelo">Modelo</label>
                <input type="text" class="form-control" id="modelo" 
                    placeholder="Ingrese el modelo"
                    name="modelo"
                    value="{{$celular->modelo}}">            
            </div>
            <div class="form-group">
                <label for="marca">Marca</label>
                <input type="text" class="form-control" id="marca" 
                    placeholder="Ingrese la marca"
                    name="marca"       
                    value="{{$celular->marca}}">            
            </div>
            <div class="form-group">
                <label for="capacidad_bateria">Capacidad de bateria (mA)</label>
                <input type="number" class="form-control" id="capacidad_bateria" 
                    placeholder="Ingrese la capacidad de bateria"
                    name="capacidad_bateria"         
                    value="{{$celular->capacidad_bateria}}">            
            </div>
            <div class="form-group">
                <label for="total_camaras">Total de camaras</label>
                <input type="number" min="1" max="10" class="form-control" id="total_camaras" 
                    placeholder="Ingrese la cantidad de camaras"
                    name="total_camaras"          
                    value="{{$celular->total_camaras}}">            
            </div>
            <div class="form-group">
                <label for="color">Color</label>
                <input type="text" class="form-control" id="color" 
                    placeholder="Ingrese el color"
                    name="color"
                    value="{{$celular->color}}">
            </div>
            <button type="submit" class="btn btn-primary mt-3">Actualizar</button>
        </form>
@stop