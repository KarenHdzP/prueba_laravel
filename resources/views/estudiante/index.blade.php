@extends('layout')

@section('content')
<div>
    <div class="ml-2 mt-2 mb-2 mr-2">
        <a type="button" class="btn btn-primary" href="{{route('estudiante.create')}}">Agregar estudiate</a>
    </div>
    <table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Edad</th>
            <th scope="col">Email</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Grupo</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
        <!-- for para estudiantes -->
        @foreach ($estudiantes as $estudiante)
            <tr>
                <th scope="row">{{$estudiante->id}}</th>
                <td>{{$estudiante->nombre_estudiante}}</td>
                <td>{{$estudiante->apellidos}}</td>
                <td>{{$estudiante->edad}}</td>
                <td>{{$estudiante->correo_electronico}}</td>
                <td>{{$estudiante->telefono}}</td>
                <td>{{$estudiante->grupo_id}}</td>
                <td><a type="button" class="btn btn-success {{$estudiante->id}}" href="{{ route('estudiante.edit', $estudiante->id)}}">Edit</a></td>
                <td>
                <form action="{{ route('estudiante.destroy',$estudiante->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete<button>
                </form>
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>
</div>
@endsection
