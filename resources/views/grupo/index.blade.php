@extends('layout')

@section('content')
<div>
    <div class="ml-2 mt-2 mb-2 mr-2">
        <a type="button" class="btn btn-primary" href="{{route('grupo.create')}}">Agregar grupo</a>
    </div>
    <table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Semestre</th>
            <th scope="col">Grupo</th>
            <th scope="col">Turno</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
        <!-- for para estudiantes -->
        @foreach ($grupos as $grupo)
            <tr>
                <th scope="row">{{$grupo->id}}</th>
                <td>{{$grupo->semestre}}</td>
                <td>{{$grupo->grupo}}</td>
                <td>{{$grupo->turno}}</td>
                <td><a type="button" class="btn btn-success {{$grupo->id}}" href="{{ route('grupo.edit', $grupo->id)}}">Edit</a></td>
                <td>
                <form action="{{ route('grupo.destroy',$grupo->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete<button>
                </form>
                </td>
        @endforeach
    </tbody>
    </table>
</div>
@endsection