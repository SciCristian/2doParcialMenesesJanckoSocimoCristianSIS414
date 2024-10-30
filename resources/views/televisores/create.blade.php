<!-- resources/views/televisores/create.blade.php -->
@extends('layouts.app')

@section('content')
<h1>Agregar Televisor</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('televisores.store') }}" method="POST">
    @csrf
    <label>Marca:</label>
    <input type="text" name="marca" required>
    <br>
    <label>Modelo:</label>
    <input type="text" name="modelo" required>
    <br>
    <label>Pulgadas:</label>
    <input type="number" name="pulgadas" required>
    <br>
    <label>Precio:</label>
    <input type="number" step="0.01" name="precio" required>
    <br><br>
    <button type="submit">Guardar</button>
</form>
@endsection
