<?php

namespace App\Http\Middleware;

use Closure;

class PermisoCajero
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
        if ($this->permiso()) {
            return $next($request);
        }
        return redirect('/')
            ->with('title', 'Acceso Denegado')
            ->with('subtitle', 'No tiene permisos con este Rol de Usuario');
    }
    private function permiso(){
        return session()->get('rol_nombre') == 'CAJERO';
    }
}
