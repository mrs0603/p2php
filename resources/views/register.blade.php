@extends('menu\menu')

@section('title','Register')

@section('conteudo')

@component('components.form')
<h1>Bem vindo ao mundo de Potter</h1>
@endcomponent


<p class="returnregister"><a href="{{ route('site.index') }}">Clique aqui</a> para voltar a página inicial.</p>
@endsection