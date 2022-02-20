<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class Homecomponent extends Component
{
    public function render()
    {
        $lproduct = Product::orderBy('created_at','DESC')->get()->take(8);
        return view('livewire.homecomponent',compact('lproduct'))->layout('layout.app');
    }
}
