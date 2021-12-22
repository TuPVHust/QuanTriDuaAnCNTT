<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Sanpham;
use Cart;
class ProductDetail extends Component
{


    public $id;
    public function mount($param)
    {

        $this->id = $param;
    }
    public function store($product_id, $product_name, $product_price)
    {
        Cart::add($product_id, $product_name, 1, $product_price)->associate('App\Models\SanPham');
        session()->flash('success','Thêm mới một mục vào rỏ hàng');
        return redirect()->route('cart');
    }
    public function render()
    {
        $product = Sanpham::where('id',$this->id)->first();
        return view('livewire.product-detail',compact('product'))->layout('layouts.base');
    }
}
