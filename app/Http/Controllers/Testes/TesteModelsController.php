<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Painel\Produto;

class TesteModelsController extends Controller
{
    
    // Requests -> Requisição de Dados HTTP
    public function index()
    {
        $produto = new Produto();
        dd($produto->create([
            'nome' => 'Shampoo2',
            'cod'  => 32231
        ]));
    }
    
    
    public function update($id)
    {
        /* Já cria um Objeto do Produto conforme o $id que está
         * Sendo passado.
         */
        $produto = Produto::find($id);
        $produto->update(['nome' => 'Condicionador', 'cod' => 12321]);
    }
    
    public function delete($id)
    {
        $produto = Produto::find($id)->delete();
        dd($produto);
    }
}
