<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pessoa;

class PessoaController extends Controller
{
    
    private $pessoa; 
    
    private $request;
    
    public function __construct(Pessoa $pessoa, Request $request) {
        $this->pessoa = $pessoa;
        $this->request = $request;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pessoas = $this->pessoa->get();
        $titulo = "Listagem de Pessoas";
        return view('painel.pessoas.index', compact('titulo', 'pessoas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('painel.pessoas.create-edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $dadosForm = $this->request->all();
        
        $validator = validator($dadosForm, Pessoa::$rules);
        
        if( $validator->fails() ){
            return redirect('/painel/pessoas/create')
                    ->withErrors($validator)
                    ->withInput();
        }
        
        
        
        $insert = $this->pessoa->create($dadosForm);
         if( $insert ){
            return redirect('/painel/pessoas');
        }
        return redirect("/painel/pessoas/create")
                ->withErrors('errors', 'Falha ao Cadastrar');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pessoa = $this->pessoa->find($id);
        
        return view('painel.pessoas.create-edit', compact('pessoa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dadosForm = $this->request->all();
        $pessoa = $this->pessoa->find($id);
        //$this->authorize('update-user', $usuario);
        
        // Regras para Edição 
        $rules =  [
           'nome'   => 'required|min:3|max:100',
           'email'  => "required|min:4|unique:pessoas,email,{$id}",
           'rg'     => 'required'
        ];
//        dd($rules);
        $validator = validator($dadosForm, $rules);
        
        if( $validator->fails() ){
            return redirect("/painel/pessoas/{$id}/edit")
                    ->withErrors($validator)
                    ->withInput();
        }
        
        
        $update = $pessoa->update($dadosForm);
        if( $update ){
            return redirect('/painel/pessoas');
        }
        return redirect("/painel/pessoas/{$id}/edit")
                ->withErrors('errors', 'Falha ao Editar');
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pessoa = $this->pessoa->find($id);
        $pessoa->delete();    
        
        if( $pessoa ){
            return redirect('/painel/usuarios');
        }
    }
}
