<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $guarded = ['id'];
    
    protected $table = 'pessoas';


    static $rules =  [
           'nome' => 'required|min:3|max:100',
           'email' => 'required|min:4|unique:pessoa',
           'rg' => 'required'
    ];
}
