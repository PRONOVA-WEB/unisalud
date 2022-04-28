<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Iris
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        //dd($request->iris_key,env('IRIS_KEY'));
        if($request->iris_key  !== env('IRIS_KEY'))
        {
            return response()->json([
                'message' => 'Validación fallida',
             ], 400);
        }
        return $next($request);
    }
}
