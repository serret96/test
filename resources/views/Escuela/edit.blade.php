@extends('adminlte::page')

@section('title', 'Escuela Tecno Bravo')

@section('content_header')

@stop

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit Escuela</h1>
                <form action="{{ route('escuela.update',$escuela->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group mb-1">
                            <label for="">Nombre</label>
                            <input type="text" name="Nombre" class="form-control" value="{{$escuela->Nombre}}">
                        </div>
                        <div class="form-group mb-1">
                            <label for="">Direccion</label>
                            <input type="text" name="Direccion" class="form-control"value="{{$escuela->Direccion}}">
                        </div>
                        <div class="form-group mb-1">
                            <label for="">Correo</label>
                            <input type="text" name="Correo" class="form-control" value="{{$escuela->Correo}}">
                        </div>
                        <div class="form-group mb-1">
                            <label for="">Telefono</label>
                            <input type="text" name="Telefono" class="form-control" value="{{$escuela->Telefono}}">
                        </div>
                        <div class="form-group mb-1">
                            <label for="">Web</label>
                            <input type="text" name="Web" class="form-control" value="{{$escuela->Web}}">
                        </div>
                        <div class="form-group mb-1">
                            <label for="">Logotipo</label>
                            <input type="file" name="logotipo" class="form-control" value="{{$escuela->logotipo}}">
                        </div>

                        <div class="form-group mb-4">
                            <button type="submit" class="btn btn-primary">Continue</button>
                        </div>
                    </div>
                </form>
            </div>


        </div>



    </div>

@stop



@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop




