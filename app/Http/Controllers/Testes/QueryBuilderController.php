<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class QueryBuilderController extends Controller
{
    public function tests()
    {
       //$users = DB::table('users')->get();
       //dd($users);
       /*
        * $insert = DB::table('users')
            ->insert([
                [
                    'name'        => 'Aleatorio',
                    'email'       => 'aleatoro2@aleatorio.com',
                    'password'    => bcrypt('123456')
                ],
                [
                    'name'        => 'Aleatorio2',
                    'email'       => 'aleatorio3@aleatorio.com',
                    'password'    => bcrypt('123456')
                ],
            ]);
       dd($insert);
       */
       /*
       $update = DB::table('users')->where('id', 1)->update([
            'name'        => 'Henrique',
            'email'       => 'henrique@email.com',
       ]);
       dd($update);
        * 
        */
       
       //$delete = DB::table('users')->where('id', 2)->delete();
    }
    
    public function tests2()
    {
        // return DB::table('users')->count();
        // return DB::table('produtos')->min('preco');
        // return DB::table('produtos')->max('preco');
        // return DB::table('produtos')->avg('preco');
        
    }
    
    public function tests3()
    {
//        return DB::select('SELECT * FROM users');
//        return DB::table('users')->select('name as Nome', 'email')->get();
        // Retorna um Array com todos os nomes
//        return DB::table('users')->pluck('name');
        dd(DB::table('users')->where('id', 1)->first());
        
    }
    
    public function tests4()
    {
        $users = DB::table('users')->select('id', 'name as nome', 'email')
                ->skip(1)
                ->take(1)
                ->orderBy('id', 'DESC')->get();
        return $users;
    }
    
    public function tests5()
    {
        
//        $users = DB::table('users')->get();
//        return response($users, 200)
//            ->header('Content-Type', 'text/xml');
//          $users = DB::table('users')->where([['id', '<>', 1], ['id', '<>', '4']])->get();
//          return $users;
//          return DB::table('users')->where('id', 10)->orWhere('id', 1)->get();
//          return DB::table('users')->whereIn('id', [1, 4])->select('id', 'name', 'email')->get();
//          return DB::table('users')->where('name', 'like', '%lea%')->get();
//          return DB::table('users')->whereNull('created_at')->get();
//          return DB::table('users')->whereNotNull('created_at')->get();
//          return DB::table('produtos')->whereBetween('preco', [100, 500])->get();
          return DB::table('produtos')->whereNotBetween('preco', [100, 500])->get();
        
        
    }
}
