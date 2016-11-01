<?php

namespace App\Http\Controllers\Testes;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TesteController extends Controller
{
    public function index()
    {
        return \Illuminate\Support\Facades\DB::table('users')->get();
    }
}
