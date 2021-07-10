@extends('adminlte::page')

@section('title', 'Escuela Tecno Bravo')

@section('content_header')

@stop

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit Alumno</h1>
                <form action="{{ route('alumno.update',$alumno->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group mb-1">
                            <label for="">Nombre</label>
                            <input type="text" name="Nombre" class="form-control" value="{{$alumno->Nombre}}">
                        </div>
                        <div class="form-group mb-1">
                            <label for="">Apellido</label>
                            <input type="text" name="Apellidos" class="form-control" value="{{$alumno->Apellidos}}">
                        </div>
                        <div class="form-group mb-1">
                            <label for="">Nacimiento</label>
                            <input type="date" name="Nacimiento" class="form-control" value="{{$alumno->Nacimiento}}">
                        </div>
                        <div class="form-group mb-1">
                            <label for="">Ciudad</label>
                            <input type="text" name="Ciudad" class="form-control" value="{{$alumno->Ciudad}}">
                        </div>
                        <div class="form-group mb-2">
                            <label for="">Escuela</label>
                            <select id="escuela_id" name="escuela_id">
                                <option value="{{$alumno->escuela_id}}"></option>
                                @foreach($escuelas as $escuela)
                                    <?php if($alumno->escuela_id == $escuela->id)
                                        {
                                            ?>
                                        <option value="{{ $escuela->id }}" selected="selected"> {{$escuela->Nombre}}</option>

                                    <?php
                                        }
                                        else{
                                            ?>
                                        <option value="{{ $escuela->id }}"> {{$escuela->Nombre}}</option>
                                    <?php

                                        }
                                        ?>
                                @endforeach
                            </select>
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




