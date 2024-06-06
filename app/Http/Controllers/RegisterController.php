<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\register;


class RegisterController extends Controller
{
    public function register(){
        return view('register');
    }

    public function saveregister(){
        register::create([
            'nome' => $_POST['nome'],
            'cpf' => $_POST['cpf'],
            'email' => $_POST['email'],
            'casaopt' => (int) $_POST['casaopt'],
            'datainput' => $_POST['datainput'],
            'dataoutput' => $_POST['dataoutput'],
            'qtdopt' => (int) $_POST['qtdopt']

        ]);        
    
        return redirect()->route('register.show');
    }

   /* public function showregister(){

        $registers = register::all();
        echo $registers[0]->nome;
        echo $registers[0]->nome;
        echo $registers[0]->nome;

        return view('register');
    }*/

    public function show()
{
    $registers = Register::all(); 
    return view('registros', compact('registers'));
}


public function edit($id){
    $register = Register::find($id);
    return view('edit', compact('register'));
}

public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'nome' => 'required|string',
        'cpf' => 'required|string',
        'email' => 'required|string',
        'casaopt' => 'required|integer',
        'datainput' => 'required|date',
        'dataoutput' => 'required|date',
        'qtdopt' => 'required|integer',
    ]);

    $register = Register::findOrFail($id);

    $register->update($validatedData);
    $register->save();

    return redirect()->route('register.show')->with('success', 'Reserva atualizada com sucesso!');
}


    public function destroy($id)
{
    $register = Register::findOrFail($id);
    $register->delete();
    return redirect()->route('site.register')->with('success', 'Reserva deletada com sucesso!');
}


}
