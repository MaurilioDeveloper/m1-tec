<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PromocoesController extends Controller
{
    public function promocaoAniversario()
    {
        return view('painel.promocoes.aniversario');
    }
}
