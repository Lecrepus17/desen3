<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Chefia
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
               // Verifica se o usuário autenticado é responsável por alguma chefia ativa
            if ($this->userChefia(auth()->user())) {
                return $next($request);
            }
    
            return redirect('/home')->with('error', 'Acesso não autorizado.');
    
    }

    private function userChefia(User $user): bool
    {
        // Obtém as chefias ativas associadas ao usuário
        $chefiasAtivas = Chefia::where('docente_fk', $user->docente->id)
            ->whereDate('inicio', '<=', now())  // Verifica se o início está no passado ou hoje
            ->whereDate('fim', '>=', now())     // Verifica se o fim está no futuro ou hoje
            ->exists();

        return $chefiasAtivas;
    }
}
