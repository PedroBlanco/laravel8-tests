<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, string $role)
    {
        if ( ($role == 'super') && (auth()->user()->role()->first()->nombre != 'SuperAdministrador') ) {
            // abort( 403 );
            abort ( Response::HTTP_FORBIDDEN );
        }

        if ( ($role == 'admin') && (auth()->user()->role()->first()->nombre != 'Administrador') ) {
            // abort( 403 );
            abort ( Response::HTTP_FORBIDDEN );
        }

        if ( ($role == 'editor') && (auth()->user()->role()->first()->nombre != 'Editor') ) {
            // abort( 403 );
            abort ( Response::HTTP_FORBIDDEN );
        }

        if ( ($role == 'user') && (auth()->user()->role()->first()->nombre != 'Usuario autenticado') ) {
            // abort( 403 );
            abort ( Response::HTTP_FORBIDDEN );
        }

        return $next($request);
    }
}
