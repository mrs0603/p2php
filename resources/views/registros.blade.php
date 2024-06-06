
@extends('menu.menu')

@section('title', 'Registers')

@section('conteudo')
    <div class="container" style="margin-top: 20px;">
        @foreach($registers as $register)
            <div class='reserva-card'>
                <div class="card">
                    <h2 class="card-title">Reserva</h2>
                    <p class="cardtext">Nome: {{ $register->nome }}</p>
                    <p class="cardtext" >CPF: {{ $register->cpf }}</p>
                    <p class="cardtext" >E-mail: {{ $register->email }}</p>
                    <p class="cardtext" >Casa hospedagem: {{ $register->casaopt }}</p>
                    <p class="cardtext">Data de entrada:{{ $register->datainput }}</p>
                    <p class="cardtext">Data de saída: {{ $register->dataoutput }}</p>
                    <p class="cardtext">Qtd de pessoas hospedadas: {{ $register->qtdopt }}</p>
                    <div class="card-buttons">
                        <form id="delete-form-{{$register->id}}" action="{{ route('site.register.destroy', $register->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="delete-button" type="submit">Excluir</button>
                        </form>
                        <!-- Link para editar -->
                       <button class="edit-button" > <a href="{{ route('registers.edit', $register->id) }}">Editar</a></button>
                    </div>
                    </div>
                </div>     
                @endforeach
            </div>
        @endsection