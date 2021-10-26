<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdoptMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $path=$request->path();
        
        if(($path=="login" || $path=="register") && session()->has('data')){
            $name=$request->session()->get('data');
            if ($name=="Binod") {
                return redirect('/admindetail');
            }
            elseif ($path=="login" || $path=="register" || $path=="admindetail" || $path=="adminadopted" || $path=="adminsurrender"|| $path=="adminregister") {
                return redirect('/homepage');
            }
            // else{
            //     if($path=="login" || $path=="register" || $path=="admindetail" || $path=="adminadopted" || $path=="adminsurrender"|| $path=="adminregister"){
            //         return redirect('/homepage');
            //     }
            // }
        }
        return $next($request);
    }
}
