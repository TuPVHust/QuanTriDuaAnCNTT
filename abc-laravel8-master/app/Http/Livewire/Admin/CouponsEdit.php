<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\discount;

class CouponsEdit extends Component
{

    public $code;
    public $type;

    public $value;
    public $cart_value;
    public $coupons_id;
    public function mount($coupons_id)
    {
        $couponEdit = discount::find($coupons_id);
        $this->code = $couponEdit->code;
        $this->type = $couponEdit->type;
        $this->value = $couponEdit->value;
        $this->cart_value = $couponEdit->cart_value;
        $this->coupons_id = $couponEdit->id;
    }





    public function updateCoupon()
    {
        $this->validate(
            [
                'code'=>'required|unique:discounts,code',
                'type'=>'required',
                'value'=>'required',
                'cart_value'=>'required',




            ],
            [
                'code.required'=>'Khong dien a ??',
                'type.required'=>'Khong dien a ??',
                'value.required'=>'Khong dien a ??',
                'cart_value.required'=>'Khong dien a ??',

            ]
        );
        $coupons = discount::find($this->coupons_id);
        $coupons->id = $this->coupons_id;
        $coupons->code = $this->code;
        $coupons->type = $this->type;
        $coupons->value = $this->value;
        $coupons->cart_value = $this->cart_value;
        $coupons->save();
        session()->flash('succesCoupon','Complete ');






    }


    public function render()
    {
        return view('livewire.admin.coupons-edit')->layout('layout.app');
    }
}
