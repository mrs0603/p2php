
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}"> 
    <title>Document</title>
</head>
<body>
    <form class="formregister" action="{{ route('site.register') }}" method="post">

        @csrf
        <label class="label" for="" name="nome">Nome</label>
        <input class="input" name="nome" type="text" placeholder="Nome do titular da reserva"></input>
        </br>

        <label class="label" for="" name="cpf">CPF</label>
        <input class="input" name="cpf" type="text" placeholder="000.000.000-00"></input>
        </br>

        <label class="label" for="" name="email">E-mail</label>
        <input class="input" name="email" type="text" placeholder="teste@teste.com.br"></input>
        </br>

        <label class="label" for="" name="casa">A qual casa deseja pertencer?</label>

        <select class="input" name="casaopt" >
            <option value="1">Grifinória</option>
            <option value="2">Sonserina</option>
            <option value="3">Corvinal</option>
            <option value="4">Lufa-Lufa</option>
        </select>
        </br>

        <label class="label"  name="datainput">Dia de entrada da sua reserva</label>
        <input class="input" name="datainput" type="date"></input>
        </br>


        <label class="label" for="" name="dataoutput">Dia de saída da sua reserva</label>
        <input class="input" name="dataoutput" type="date"></input>
        </br>

        <label class="label" name='qtd'>Quantas pessoas se hospedarão com você?</label>
        <select class="input" name="qtdopt" id="qtdopt">
            <option value="1">0</option>
            <option value="1">1</option>
            <option value="1">2</option>
            <option value="1">3</option>
            <option value="1">4</option>
        </select>
    </br>
    </br>

        <button class="buttonenv" type="submit" id="button" name="button">Enviar</button>
    </form>
</body>
</html>

