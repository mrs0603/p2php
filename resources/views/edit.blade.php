@extends('menu.menu')

@section('title', 'Edit Register')

@section('conteudo')
    <div class="container">
        <h1>Editar Reserva</h1>
        <form action="{{ route('registers.update', $register->id) }}" method="POST">
            @csrf
            @method('PUT')
        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ $register->nome }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">CPF</label>
            <input type="text" class="form-control" id="cpf" name="cpf" value="{{ $register->cpf }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">E-mail</label>
            <input type="text" class="form-control" id="email" name="email" value="{{ $register->email }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Casa Hospedagem</label>
            <select id="casaopt" name="casaopt" value="{{$register->casaopt}}" required>
                <option value="1">Grifinória</option>
                <option value="2">Sonserina</option>
                <option value="3">Corvinal</option>
                <option value="4">Lufa-Lufa</option>
            </select>
        </div>

        <div class="mb-3">
        <label id="datainput" name="datainput">Dia de entrada da sua reserva</label>
        <input name="datainput" id="datainput" type="date" value="{{$register->datainput}}" required>
        </div>

        <div class="mb-3">
        <label for="" name="dataoutput">Dia de saída da sua reserva</label>
        <input id="dataoutput" name="dataoutput" type="date" value="{{$register->dataoutput}}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Qtd de pessoas hospedadas</label>
            <select id="qtdopt" name="qtdopt" >
                <option value="1">0</option>
                <option value="2">1</option>
                <option value="3">2</option>
                <option value="4">3</option>
            </select>
        </div>
        
        <button type="submit">Atualizar</button>
        </form>
        <form id="delete-form" action="{{ route('registers.destroy', $register->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button class="delete-button" type="submit">Excluir</button>
        </form>
    </div>
@endsection