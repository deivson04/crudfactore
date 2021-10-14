<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuarios;
use Session;


class ApresentarPaginaInicialController extends Controller
{
    public function apresentacaoPagina(Request $request){

        if(!Session::has('login')){return redirect('/');}

        return redirect('home'); 
    }
}
