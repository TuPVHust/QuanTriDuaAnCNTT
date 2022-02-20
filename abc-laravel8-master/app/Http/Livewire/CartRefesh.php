<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CartRefesh extends Component
{
    public $listeners = ['refreshCart'=>'$refresh'];
    public function render()
    {
        return view('livewire.cart-refesh');
    }
}
