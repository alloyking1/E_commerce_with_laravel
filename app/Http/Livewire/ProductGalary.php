<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProductGalary extends Component
{

    public $product;

    public function mount()
    {
        dd($this->product->media);
    }

    public function render()
    {
        return view('livewire.product-galary');
    }
}
