<?php

namespace App\Http\Middleware;

use Closure;

class PromocoesData
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $dia = date('md');
        $horario = date('Hm');;
        // $horario = date('0200');
        //dd($dia, $horario);
        if($dia == '1023' && $horario >= '0210' && $horario <= '0230'){
            return $next($request);
        }else{
            return redirect('/painel');
        }
    }
}
