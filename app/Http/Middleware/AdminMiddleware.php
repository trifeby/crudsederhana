<?php

namespace App\Http\Middleware;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Contracts\Auth\Factory as Authentication;
use Auth;
use Closure;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function __construct(Authentication $auth) {
        $this->auth = $auth;
    }
    
    public function handle($request, Closure $next, ...$guards)
    {
        $this->authenticate($guards);
        if(Auth::user() && Auth::user()->role == '1') {
            return $next($request);
        }else{
            return redirect('/home');
        }
        return redirect('/');
    }

    public function authenticate(array $guards) {
        if(empty($guards)) {
            return $this->auth->authenticate();
        }
        foreach ($guards as $guard) {
            if($this->auth->guard($guard)->check()) {
                return $this->auth->shouldUse($guard);
            }
        }
        throw new AuthenticationException('Unauthentichanted.', $guards);
        
    }
}
