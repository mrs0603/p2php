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
        return view('register');

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
    $registers = register::all(); 
    return view('registros', compact('registers')); // Passa os registros para a view
}


    public function edit($id)
    {
        $registers = register::findOrFail($id);
        return view('edit', compact('registers'));
    }


    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nome' => 'required|string',
            'cpf' => 'required|string',
            'email' => 'required|string',
            'casaopt' => 'required|interger',
            'datainput' => 'required|date',
            'dataoutput' => 'required|date',
            'qtdopt' => 'required|interger',
        ]);
    
        $registers = register::findOrFail($id);
    
    
        $registers->update($validatedData);
        $registers->save();
    
        return redirect()->route('site.register')->with('success', 'Reserva atualizado com sucesso!');
    }

    public function destroy($id)
{
    $register = register::findOrFail($id);
    $register->delete();
    return redirect()->route('site.register')->with('success', 'Reserva deletada com sucesso!');
}


}
