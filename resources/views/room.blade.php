@extends('menu\menu')

@section('title', 'Room')

@section('conteudo')


    
<h1 class="roomsh1">Conheça nossos quartos</h1>



<div class="rooms1">
    <div class="texto">
        <h3>Quarto Grifinória</h3>
        <p>
            O quarto da Casa Grifinória é um verdadeiro refúgio para os destemidos, oferecendo uma experiência luxuosa e confortável em um ambiente ricamente decorado. Com móveis de madeira maciça e detalhes nobres, cada elemento foi cuidadosamente selecionado para criar uma atmosfera acolhedora e elegante. As paredes adornadas com tapeçarias e brasões de família evocam a história e o orgulho da casa, enquanto as grandes janelas inundam o espaço com luz natural. Este santuário é o
             lugar perfeito para descansar e recarregar as energias antes de enfrentar os desafios que aguardam os bravos e destemidos membros da Grifinória.</p>
    </div>
    <div class="imagem">
        <img class="grifimg" src="{{asset('img/grifinoriaroom.png')}}" alt="" srcset="">
    </div>
</div>

<div class="rooms">
    <div class="texto">
        <h3>Quarto Sonserina</h3>
        <p>O quarto da Casa Sonserina oferece um ambiente aconchegante e sóbrio, perfeito para aqueles que valorizam a praticidade e o conforto. Sua arquitetura mais rudimentar reflete uma atmosfera de simplicidade e elegância discreta. Com móveis robustos e linhas limpas, o espaço combina funcionalidade com um toque de sofisticação. As paredes revestidas com tons profundos e a iluminação suave criam uma atmosfera acolhedora e relaxante. É o refúgio ideal 
            para os membros da Sonserina recarregarem suas energias e planejarem suas próximas estratégias com tranquilidade e serenidade.</p>
    </div>
    <div class="imagem">
        <img class="sonsfimg" src="{{asset('img/sonserinaroom.jpg')}}" alt="" srcset="">
    </div>
</div>

<div class="rooms">
    <div class="texto">
        <h3>Quarto Lufa Lufa</h3>
        <p>O quarto da Casa Lufa-Lufa é um espaço dinâmico que atrai pessoas alegres e extrovertidas em busca de uma atmosfera acolhedora e radiante. Com uma mistura de cores vibrantes e tons suaves, o ambiente é ao mesmo tempo estimulante e reconfortante. Sua decoração é marcada por detalhes intricados e uma variedade de elementos que refletem a diversidade e a complexidade dos seus ocupantes. Móveis confortáveis e funcionais convidam ao relaxamento e à interação, criando um ambiente acolhedor e sociável.
            É o local perfeito para os membros da Lufa-Lufa se reunirem, compartilharem momentos felizes e desfrutarem de uma atmosfera calorosa e animada.</p>
    </div>
    <div class="imagem">
        <img class="lufaimg" src="{{asset('img/lufalufaroom.jpg')}}" alt="" srcset="">
    </div>
</div>

<div class="rooms">
    <div class="texto">
        <h3>Quarto Corvinal</h3>
        <p>O quarto da Casa Corvinal é um ambiente elegante que oferece muito mais do que simplesmente seriedade. Ao escolhê-lo, uma pessoa adquire um status de organização, objetividade e clareza, refletindo as qualidades distintivas dessa casa. Com uma decoração refinada e minimalista, o quarto Corvinal transmite uma atmosfera de sofisticação e intelectualidade. Cada detalhe é cuidadosamente projetado para promover a concentração e a reflexão, incentivando o desenvolvimento do pensamento crítico e da criatividade. Além disso, dizem as lendas que em algum lugar oculto dentro de um dos quartos 
            Corvinais está o Diadema Perdido de Rowena Ravenclaw, um artefato lendário que acrescenta um toque de mistério e fascínio ao ambiente.</p>
    </div>
    <div class="imagem">
        <img class="corvimg" src="{{asset('img/corvinalroom.jpg')}}" alt="" srcset="">
    </div>
</div>
<p class="returnrooms"><a href="{{ route('site.index') }}">Clique aqui</a> para voltar a página inicial.</p>


@endsection