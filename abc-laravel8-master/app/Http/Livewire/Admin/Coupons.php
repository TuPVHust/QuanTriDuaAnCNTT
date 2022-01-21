<?php

namespace App\Http\Livewire\Admin;

use App\Models\discount;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class Coupons extends Component
{



    public function deleteCoupons($coupon_id)
    {

        $coupon = discount::find($coupon_id);
        $coupon->delete();
        session()->flash('delete','Complete Delete');
    }


    public function render()
    {
        $data = discount::all();
        return view('livewire.admin.coupons',compact('data'))->layout('layout.app');
    }
}
