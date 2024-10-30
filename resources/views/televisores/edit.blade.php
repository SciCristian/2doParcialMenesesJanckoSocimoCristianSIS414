<!-- resources/views/televisores/edit.blade.php -->
@extends('layouts.app')

@section('content')
<h1>Editar Televisor</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('televisores.update', $televisor->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label>Marca:</label>
    <input type="text" name="marca" value="{{ $televisor->marca }}" required>
    <br>
    <label>Modelo:</label>
    <input type="text" name="modelo" value="{{ $televisor->modelo }}" required>
    <br>
    <label>Pulgadas:</label>
    <input type="number" name="pulgadas" value="{{ $televisor->pulgadas }}" required>
    <br>
    <label>Precio:</label>
    <input type="number" step="0.01" name="precio" value="{{ $televisor->precio }}" required>
    <br><br>
    <button type="submit">Actualizar</button>
</form>
@endsection
