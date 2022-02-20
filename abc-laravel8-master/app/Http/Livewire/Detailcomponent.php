<?php

namespace App\Http\Livewire;

use App\Models\Sanpham;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class Detailcomponent extends Component
{

    public $id;


    public function mount($id)
    {

        $this->id = $id;

    }

    public $qty = 1;



    public function upqty()
    {
        $this->qty = $this->qty + 1;
    }

    public function downqty()
    {
        $this->qty = $this->qty - 1;
    }


    public function store($product_id,$product_name,$product_price)
    {

        Cart::add($product_id, $product_name,$this->qty, $product_price)->associate('App\Models\Product');

        session()->flash('success','Thêm mới một mục vào rỏ hàng');
        return redirect()->route('cart');

    }

    public function render()
    {



        $proDetails = Sanpham::where('id',$this->id)->first();


        return view('livewire.detailcomponent',compact('proDetails'))->layout('layout.app');
    }
}
