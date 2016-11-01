<?php

namespace App\Http\Controllers\Testes;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

class RestFullResourceController extends Controller
{
    
    private $request;
    /**
     *  Dependency Injection
     *  Já cria automaticamente a instância das nossas
     *  Classes que foram passadas ali.
     */
    public function __construct(Request $request) 
    {
        $this->request = $request;
        
        $this->middleware('auth', ['only'=> ['create', 'edit']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teste = 3;
        $arrays = [1,233,23,24,34,2,35,2,5];
       return view('painel.index', compact('teste', 'arrays')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "Create";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
