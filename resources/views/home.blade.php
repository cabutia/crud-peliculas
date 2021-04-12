{{-- Extendemos el template de views/layouts/main.blade.php --}}
@extends('layouts.main')

@section('title', 'Página principal')

{{-- section permite indicar el contenido en qué espacio cedido del layout queremos ubicarlo --}}
@section('main')
    <h1>Bienvenidos a DV Películas</h1>

    <p>Da Vinci con tu cuota ahora te ofrece acceso a múltiples películas de nuestro selecto catálogo.</p>
    <p>Promocion valida hasta 2022.</p>
@endsection
