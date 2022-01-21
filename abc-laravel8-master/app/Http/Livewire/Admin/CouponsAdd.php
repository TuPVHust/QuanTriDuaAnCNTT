<?php

namespace App\Http\Livewire\Admin;

use App\Models\discount;
use Livewire\Component;

class CouponsAdd extends Component
{

    public $code;
    public $type;

    public $value;
    public $cart_value;
    public $expiry_date;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'code' => 'required',
            'type' => 'required',
            'value' => 'required',
            'cart_value' => 'required',
            'expiry_date' => 'required',




        ]);
    }





    public function addCoupon()
    {
        $this->validate(
            [
                'code' => 'required',
                'type' => 'required',
                'value' => 'required',
                'cart_value' => 'required',
                'expiry_date' => 'required',




            ],
            [
                'code.required' => 'Khong dien a ??',
                'type.required' => 'Khong dien a ??',
                'value.required' => 'Khong dien a ??',
                'cart_value.required' => 'Khong dien a ??',
                'expiry_date.required' => 'Khong dien a ??',

            ]
        );
        $coupons = new discount();

        $coupons->code = $this->code;
        $coupons->type = $this->type;
        $coupons->value = $this->value;
        $coupons->cart_value = $this->cart_value;
        $coupons->expiry_date = $this->expiry_date;
        $coupons->save();
        session()->flash('succesCoupon', 'Complete ');
    }




    public function render()
    {
        return view('livewire.admin.coupons-add')->layout('layout.app');
    }
}
