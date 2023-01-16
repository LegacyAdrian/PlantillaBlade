@extends('layouts.master')

@section('titulo', 'Mi titulo')

@section('menu')
    @parent
<ul> 
    <li><a href="@">Gatito AZUL</a></li>
    <li><a href="@">Patito</a></li>
</ul>
    
@endsection

@section('contenido')
 @forelse ($frutas as $fruta)
     @include('layouts.fruta')
 @empty
     <p>No hay frutas mi bro</p>
 @endforelse
@endsection
