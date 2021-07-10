@extends('adminlte::page')

@section('title', 'Escuela Tecno Bravo')


@section('content_header')
    <h1>Welcome</h1>
@stop

@section('content')

    <div class="pull-right">
        <a class="btn btn-success" href="{{ route('escuela.create') }}" title="Create a project"> <i class="fas fa-plus-circle"></i>
        </a>
    </div>
    <table class="table table-bordered data-table">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Direccion</th>
            <th>Logotipo</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>web</th>
            <th width="80px">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($escuelas as $escuela)
            <tr>
                <td>{{$escuela->Nombre}}</td>
                <td>{{$escuela->Direccion}}</td>
                <td>
                    <img src="/uploads/{{ $escuela->logotipo }}" width="100px">
                </td>
                <td>{{$escuela->Correo}}</td>
                <td>{{$escuela->Telefono}}</td>
                <td>{{$escuela->Web}}</td>

                <td>
                    <form action="{{ route('escuela.destroy', $escuela->id) }}" method="POST">

                        <a href="{{ route('escuela.edit', $escuela->id) }}">
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

        {{ $escuelas->links() }}





@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
