<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;
use App\Models\Coordenacao;

class IsCoordenacao
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($this->userCoordenacao(auth()->user())) {
            return $next($request);
        }

        return redirect('/home')->with('error', 'Acesso não autorizado.');

}

private function userCoordenacao(User $user): bool
{
    // Obtém as chefias ativas associadas ao usuário
    $coordenAtivas = Coordenacao::where('docente_fk', $user->docente->id)
        ->whereDate('inicio', '<=', now())  // Verifica se o início está no passado ou hoje
        ->whereDate('fim', '>=', now())     // Verifica se o fim está no futuro ou hoje
        ->exists();

    return $coordenAtivas;
}
}
