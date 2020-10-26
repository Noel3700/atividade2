@extends('layout')
@section('titulo')
A minha APP
@endsection
@section('header')

@endsection
@section('conteudo')
<h1><div class="col-md-2">Notícias:</div></h1>


@foreach($noticias as  $noticia)
@foreach($noticia as $chave=>$not)

@if($chave=='imagem')
<div class="col-md-2">
<img src="{{asset($not)}}" widht=500px height=200px >
</div>
@else
<div class="col-md-8">
<p><a href="{{($not)}}">{{$chave}}</a></p>
</div>

@endif
@endforeach
@endforeach



@endsection