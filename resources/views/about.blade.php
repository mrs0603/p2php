@extends('menu\menu')

@section('title', 'About')

@section('conteudo')

<h1>Bem vindo ao mundo de Potter</h1>
<p><a href="{{ route('site.index') }}">Clique aqui</a> para voltar a página inicial.</p>


@extends('menu\footer')
@endsection