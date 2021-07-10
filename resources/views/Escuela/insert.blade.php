@extends('adminlte::page')

@section('title', 'Escuela Tecno Bravo')

@section('content_header')

@stop

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h1>Generate Escuela</h1>
                <form action="{{ route('escuela.store') }}" method="POST">
                    @csrf
                <div class="card-body">
                    <div class="form-group mb-1">
                        <label for="">Nombre</label>
                        <input type="text" name="Nombre" class="form-control">
                    </div>
                    <div class="form-group mb-1">
                        <label for="">Direccion</label>
                        <input type="text" name="Direccion" class="form-control">
                    </div>
                    <div class="form-group mb-1">
                        <label for="">Correo</label>
                        <input type="text" name="Correo" class="form-control">
                    </div>
                    <div class="form-group mb-1">
                        <label for="">Telefono</label>
                        <input type="text" name="Telefono" class="form-control">
                    </div>
                    <div class="form-group mb-1">
                        <label for="">Web</label>
                        <input type="text" name="Web" class="form-control">
                    </div>
                    <div class="form-group mb-1">
                        <label for="">Logotipo</label>
                        <input type="file" name="logotipo" class="form-control" placeholder="image">
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




