<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class registrocontroller extends Controller
{
    public function create(){
       return view('auth.registro');
    }
    public function store(){

        $this->validate(request(),[
            'name'=>'required|min:3',
            'email'=>'required|email|unique:users|min:7',
            'password'=>'required',
        ]
    );
        $usuario=User::create(request(['name', 'email','password']));
        auth()->login($usuario);
        return redirect()->to('/');
     }
}
