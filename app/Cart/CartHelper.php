<?php

namespace App\Cart;

use App\Cart\Contracts\CartHelperInterface;
use Illuminate\Session\SessionManager;

class CartHelper implements CartHelperInterface
{
    public function __construct(protected SessionManager $session)
    {
    }

    public function exists()
    {
        return $this->session->has(config('cart.session.key'));
    }

    public function create()
    {
        dd($this->session);
    }
}
