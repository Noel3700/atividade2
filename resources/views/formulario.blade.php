@extends('layout')
@section('titulo')

@endsection
@section('header')

@endsection
@section('conteudo')
<br>
<form method="post" action="{{route('formulario.index')}}">
    @csrf
<label for="nome">Nome</label>
<input type="text" name="nome">
    <label for="morada">Morada</label>
    <input type="text" name="Morada">
    <button type="submit">enviar</button>
</form>
@endsection