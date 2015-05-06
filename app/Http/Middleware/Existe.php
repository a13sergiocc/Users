<?php namespace App\Http\Middleware;

use Closure;
use Redirect;
use App\User;

class Existe {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		// Comprobamos si el usuario existe
		$id = $request->segment(2);

		$usuario = USer::find($id);

		if($usuario == null)
			return Redirect::to('users');

		return $next($request);
	}

}
