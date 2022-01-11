<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function form()
    {
        return view('form_login');
    }

    public function login()
    {
       $credenciais = Request::only('email', 'password');

       if (Auth::attempt($credenciais))
       {
           return 'Usuário logado com sucesso';
       }

       return 'Usuário não existe';
    }
}