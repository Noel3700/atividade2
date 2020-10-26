@extends('layout')
@section('titulo')
A minha APP
@endsection
@section('header')

@endsection
@section('conteudo')
<br>
<h1><div class="col-md-2">Fornecedores:</div></h1>
    
@foreach($sites as $chave=> $site)
<div class="col-md-8">
<p><a href="{{($site)}}">{{$chave}}</a></p>
</div>
@endforeach




@endsection