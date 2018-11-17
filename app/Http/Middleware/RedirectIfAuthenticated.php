<?php

namespace SoftVet\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
  public function __construct(Guard $auth)
  {
    $this->auth = $auth;
  }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if ($this->auth->guest()) {
          if ($request->ajax()) {
            return response('Unauthorized.', 401);
          }else {
            return redirect()->guest('/login');
          }
        }

        return $next($request);
    }
}
