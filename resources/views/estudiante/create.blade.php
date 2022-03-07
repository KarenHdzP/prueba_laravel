@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">

            <h1 class="ml-2 mt-2 mb-2 mr-2">
                Crear estudiante
            </h1>
            <form class="ml-2 mr-2" method="POST" action="{{ route('estudiante.store') }}">
                @csrf
                <div class="form-group">
                    <label for="nombre_estudiante">Nombre</label>
                    <input type="text" class="form-control" id="nombre_estudiante" name="nombre_estudiante" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <label for="apellidos">Apellidos</label>
                    <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos">
                </div>
                <div class="form-group">
                    <label for="edad">Edad</label>
                    <input type="number" class="form-control" id="edad" name="edad" placeholder="Edad">
                </div>
                <div class="form-group">
                    <label for="correo_electronico">Email</label>
                    <input type="email" class="form-control" id="correo_electronico" name="correo_electronico" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="telefono">Telefono</label>
                    <input type="number" class="form-control" id="telefono" name="telefono" placeholder="Telefono">
                </div>
                <div class="form-group">
                    <label for="grupo_id">Grupo</label>
                    <select class="form-control" id="grupo_id" name="grupo_id">
                        @foreach ($grupos as $grupo)
                            <option value="{{$grupo->id}}">{{ $grupo->semestre }}, {{ $grupo->grupo }}, {{ $grupo->turno }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection