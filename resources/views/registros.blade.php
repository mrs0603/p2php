
            @foreach($registers as $register)
                <div class='reserva-card'>
                    <div class="card-body">
                        <p>Nome: {{ $register->nome }}</p>
                        <p >CPF: {{ $register->cpf }}</p>
                        <p >E-mail: {{ $register->email }}</p>
                        <p >Casa hospedagem: {{ $register->casaopt }}</p>
                        <p >Data de entrada:{{ $register->datainput }}</p>
                        <p >Data de saída: {{ $register->dataoutput }}</p>
                        <p >Qtd de pessoas hospedadas: {{ $register->qtdopt }}</p>
                        <form id="delete-form-{{$register->id}}" action="{{ route('site.register.destroy', $register->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="delete-button" type="submit">Excluir</button>
                        </form>
                        <a href="{{route('site.register.edit', $register->id)}}">Editar</a>
                </div>  
            </div>
            @endforeach
        </tbody>
    </table>
</body>
</html>
