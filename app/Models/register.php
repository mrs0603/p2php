<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class register extends Model
{

    protected $fillable = ['nome', 'cpf', 'email', 'casaopt', 'datainput', 'dataoutput', 'qtdopt'];

    private string $nome;

    private string $cpf;

    private string $email;

    private int $casaopt;

    private date $datainput;

    private date $dataoutput;

    private int $qtdopt;


    public function getNome() : string{
        return $this->nome;
    }

    public function setNome(string $nome){
        $this->nome = $nome;
    }

    public function getCpf(): string{
        return $this->cpf;
    }

    public function setCpf(string $cpf){
        $this->cpf = $cpf;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail(string $email){
        $this->email = $email;
    }

    public function getCasaopt(): int{
        return $this->casaopt;
    }

    public function setCasaopt(int $casaopt){
        $this->casaopt = $casaopt;
    }

    public function getDatainput(): date{
        return $this->datainput;
    }

    public function setDatainput(date $datainput){
        $this->datainput = $datainput;
    }

    public function getDataoutput(): date{
        return $this->dataoutput;
    }

    public function setDataoutput(date $dataoutput){
        $this->dataoutput = $dataoutput;
    }

    public function getQtd(): int{
        return $this->qtd;
    }

    public function setQtd(int $qtd){
        $this->qtd = $qtd;
    }
   
}