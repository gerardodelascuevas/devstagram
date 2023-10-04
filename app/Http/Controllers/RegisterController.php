<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function store(Request $request){
        //dd($request);
        //validando
        $this-> validate($request, [
            'name' => 'required|max:30',
            'username'=> 'required|unique:users|min:3|max:20',
            'email'=> 'required|unique:table,column,except,id',
            'password'=> 'required|confirmed|min:8',
        ]);
        dd('Creando Usuario');
    }
}
