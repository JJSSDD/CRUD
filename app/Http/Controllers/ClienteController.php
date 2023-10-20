<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function createPost(Request $request){
        $incomingFields = $request->validate([
            'nombre'=>'required',
            'email'=>'required',
            'fecha'=>'required'
        ]);
        cliente::create($incomingFields);
        return redirect('/');
    }

    public function editCliente(cliente $cliente){
        return view('edit-cliente',['cliente'=>$cliente]);
    }

    public function editCliente2(cliente $cliente, Request $request){
        $incomingFields = $request->validate([
            'nombre'=>'required',
            'email'=>'required',
            'fecha'=>'required'
        ]);
        $cliente->update($incomingFields);
        return redirect('/');
    }

    public function deleteCliente(cliente $cliente){
        $cliente->delete();
        return redirect('/');
    }
        


}
