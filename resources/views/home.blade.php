@extends('menu\menu')

@section('title', 'Home')

@section('conteudo')
<img class="wallpaperhome" src="{{asset('img/wallpaper.jpg')}}" alt="" srcset="">
<h1 class="homeh1">Bem vindo ao mundo de Potter</h1>
<h2 class="homeh2">Hogwarts sempre ajuda, a quem à ela recorrer - Alvo, Dumbledore.</h2>

<p class="homep1">A qual casa você pertence em Hogwarts? </p>
<p class="homep2">Saiba mais sobre os Hotéis.Potter. Venha se hospedar com a gente</p>

<img class="casas" src="{{asset('img/casa.png')}}" alt="" srcset="">

@endsection