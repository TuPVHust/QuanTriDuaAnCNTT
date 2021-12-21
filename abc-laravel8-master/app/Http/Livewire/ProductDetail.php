<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Sanpham;
class ProductDetail extends Component
{  public $id;
    public function mount($param)
    {

        $this->id = $param;
    }

    public function render()
    {
        $product = Sanpham::where('id',$this->id)->first();
        return view('livewire.product-detail',compact('product'))->layout('layouts.base');
    }
}
