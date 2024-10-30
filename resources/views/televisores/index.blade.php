<!-- resources/views/televisores/index.blade.php -->
@extends('layouts.app')

@section('content')
<h1>Lista de Televisores</h1>
<a href="{{ route('televisores.create') }}" class="btn btn-primary">Agregar Televisor</a>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table border="1" cellpadding="10">
    <thead>
        <tr>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Pulgadas</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($televisores as $televisor)
        <tr>
            <td>{{ $televisor->marca }}</td>
            <td>{{ $televisor->modelo }}</td>
            <td>{{ $televisor->pulgadas }}</td>
            <td>{{ $televisor->precio }}</td>
            <td>
                <a href="{{ route('televisores.show', $televisor->id) }}">Ver</a>
                <a href="{{ route('televisores.edit', $televisor->id) }}">Editar</a>
                <form action="{{ route('televisores.destroy', $televisor->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('¿Seguro que deseas eliminar este televisor?')">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
