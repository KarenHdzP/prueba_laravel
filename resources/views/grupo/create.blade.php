@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">

            <h1 class="ml-2 mt-2 mb-2 mr-2">
                Crear grupo
            </h1>
            <form class="ml-2 mr-2" method="POST" action="{{ route('grupo.store') }}">
                @csrf
                <div class="form-group">
                    <label for="semestre">Semestre</label>
                    <input type="text" class="form-control" id="semestre" name="semestre" placeholder="Semestre">
                </div>
                <div class="form-group">
                    <label for="grupo">Grupo</label>
                    <input type="text" class="form-control" id="grupo" name="grupo" placeholder="Grupo">
                </div>
                <div class="form-group">
                    <label for="turno">Turno</abel>
                    <input type="text" class="form-control" id="turno" name="turno" placeholder="Turno">               
                 </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection