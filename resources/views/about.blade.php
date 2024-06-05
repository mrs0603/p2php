@extends('menu\menu')

@section('title', 'About')

@section('conteudo')

<h1 class="abouth1">Conheça um pouco sobre nossa história</h1>

<p class="about">
    O Grupo Potter Hotéis é um coletivo apaixonado pela rica história do bruxo mais famoso dos cinemas, Harry Potter. 
    Inspirados por essa fascinante saga, decidimos levar essa paixão além das páginas dos livros e das telas dos filmes.
    Comprometidos em proporcionar uma experiência mágica e memorável para outros apaixonados como nós, criamos um hotel que 
    evoca toda a magia e o encanto da lendária Escola de Magia e Bruxaria de Hogwarts. Cada detalhe do nosso hotel é 
    meticulosamente projetado para transportar os hóspedes para o universo mágico de Harry Potter, oferecendo uma estadia
    verdadeiramente única e inesquecível.Seja bem-vindo ao Potter Hotéis, onde a magia ganha vida e as aventuras de Hogwarts esperam por você.
    </br>
</br>
</br>
</br>
    Desde o início, nosso objetivo foi transformar nossos quartos e espaços dos edifícios em extensões autênticas das Casas de Sonserina, Grifinória, Lufa-Lufa e Corvinal de Hogwarts. Cada detalhe
     foi cuidadosamente planejado para capturar a essência única de cada casa, proporcionando aos hóspedes uma experiência imersiva e mágica. Com tons característicos, emblemas e decorações temáticas,
     nosso objetivo é fazer com que os fãs se sintam como se estivessem verdadeiramente em Hogwarts. Estamos
     empenhados em tornar cada estadia uma aventura inesquecível, onde a magia de Harry Potter ganha vida em cada canto.
    </br>
</br>
</br>
</br>
Desde 2015, o Grupo Potter Hotéis cresceu de uma paixão compartilhada por Harry Potter para cinco 
estabelecimentos em três países: Reino Unido, Estados Unidos e Brasil. Cada hotel oferece uma experiência 
imersiva na atmosfera encantadora da saga. Animados em compartilhar a magia de Harry Potter com fãs ao redor
do mundo, continuamos a expandir e a escrever novos capítulos nessa jornada mágica.
</br>
</p>
<p class="aboutreturn"><a href="{{ route('site.index') }}">Clique aqui</a> para voltar a página inicial.</p>
<img class="wallpaperabout" src="{{asset ('img/wallpaperhogwarts.webp')}}" alt="">

<div class="profile">
    <img src="{{asset('img/profile.jpeg')}}" class="profile-img">
    <h3 class="profile-title">Fundadores Mariana Rocha e João Victor</h3>
</div>

@endsection