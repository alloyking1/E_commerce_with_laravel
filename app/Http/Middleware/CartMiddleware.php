<?php

namespace App\Http\Middleware;

use App\Cart\Contracts\CartHelperInterface;
use Closure;
use Illuminate\Http\Request;

class CartMiddleware
{
    public function __construct(protected CartHelperInterface $cart)
    {
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!$this->cart->exists()) {
            $this->cart->create();
        }
        return $next($request);
    }
}
