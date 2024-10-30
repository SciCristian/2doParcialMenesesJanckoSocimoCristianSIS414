<!-- resources/views/televisores/show.blade.php -->
@extends('layouts.app')

@section('content')
<h1>Detalles del Televisor</h1>

<p><strong>Marca:</strong> {{ $televisor->marca }}</p>
<p><strong>Modelo:</strong> {{ $televisor->modelo }}</p>
<p><strong>Pulgadas:</strong> {{ $televisor->pulgadas }}</p>
<p><strong>Precio:</strong> {{ $televisor->precio }}</p>

<a href="{{ route('televisores.index') }}">Volver a la lista</a>
@endsection
