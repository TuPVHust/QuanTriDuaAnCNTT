<?php

namespace App\Http\Livewire;

use App\Models\Sanpham;
use Livewire\Component;

class Homecomponent extends Component
{
    public function render()
    {
        $lproduct = Sanpham::orderBy('created_at','DESC')->get()->take(8);
        return view('livewire.homecomponent',compact('lproduct'))->layout('layout.app');
    }
}
