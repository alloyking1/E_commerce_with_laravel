<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProductGalary extends Component
{

    public $product;
    public $selectedImageUrl;

    public function mount()
    {
        $this->selectedImageUrl = $this->product->getFirstMediaUrl();
        // dd($this->product->getMedia());
    }

    public function render()
    {
        return view('livewire.product-galary');
    }
}
