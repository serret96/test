@extends('adminlte::page')

@section('title', 'Escuela Tecno Bravo')


@section('content_header')
    <h1>Welcome</h1>
@stop

@section('content')

    <div class="pull-right">
        <a class="btn btn-success" href="{{ route('alumno.create') }}" title="Create a project"> <i class="fas fa-plus-circle"></i>
        </a>
    </div>
    <table class="table table-bordered data-table">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Nacimiento</th>
            <th>Ciudad</th>
            <th>Escuela</th>
            <th width="80px">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($alumnos as $alumno)
            <tr>
                <td>{{$alumno->Nombre}}</td>
                <td>{{$alumno->Apellidos}}</td>
                <td>{{$alumno->Nacimiento}}</td>
                <td>{{$alumno->Ciudad}}</td>
                <td>
                        @foreach ($escuelas as $escuela)

                            <?php
                                if ($escuela->id == $alumno->escuela_id)
                                    {
                                        echo $escuela->Nombre;
                                    }
                            ?>
                        @endforeach
                </td>
                <td>
                    <form action="{{ route('alumno.destroy', $alumno->id) }}" method="POST">

                        <a href="{{ route('alumno.edit', $alumno->id) }}">
                            <i class="fas fa-edit  fa-lg"></i>
                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>

                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div>
        {{ $alumnos->links() }}
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
