<?php

namespace App\Http\Livewire;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Shipping;
use App\Models\Trancision;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Checkoutcomponent extends Component
{
    public $is_shipping_different;

    public $fisrtname;
    public $lastname;
    public $phone;
    public $email;
    public $line1;
    public $line2;
    public $city;
    public $country;
    public $zipcode;
    //shipping defferent
    public $s_fisrtname;
    public $s_lastname;
    public $s_phone;
    public $s_email;
    public $s_line1;
    public $s_line2;
    public $s_city;
    public $s_country;
    public $s_zipcode;
    //

    public $paymode;
    public $thankyou;


    public function updated($fields)
    {
        $this->validateOnly($fields, [

            'fisrtname' => 'required',
            'lastname' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'line1' => 'required',
            'line2' => 'required',
            'city' => 'required',
            'country' => 'required',
            'zipcode' => 'required',
            'paymode' => 'required'



        ]);

        if ($this->is_shipping_different) {
            $this->validateOnly(
                $fields,
                [
                    's_fisrtname' => 'required',
                    's_lastname' => 'required',
                    's_phone' => 'required|numeric',
                    's_email' => 'required|email',
                    's_line1' => 'required',
                    's_line2' => 'required',
                    's_city' => 'required',
                    's_country' => 'required',
                    's_zipcode' => 'required',
                    'paymode' => 'required'
                ]
            );
        }
    }



    public function placeOrder()
    {


        $this->validate(
            [
                'fisrtname' => 'required',
                'lastname' => 'required',
                'phone' => 'required|numeric',
                'email' => 'required|email',
                'line1' => 'required',
                'line2' => 'required',
                'city' => 'required',
                'country' => 'required',
                'zipcode' => 'required',
                'paymode' => 'required'
            ]
        );

        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->subtotal = session()->get('checkout')['subtotal'];
        $order->discount = session()->get('checkout')['discount'];
        $order->tax = session()->get('checkout')['tax'];
        $order->total = session()->get('checkout')['total'];

        $order->fisrtname = $this->fisrtname;
        $order->lastname = $this->lastname;
        $order->phone = $this->phone;
        $order->email = $this->email;
        $order->line1 = $this->line1;
        $order->line2 = $this->line2;
        $order->city = $this->city;

        $order->country = $this->country;
        $order->zipcode = $this->zipcode;
        $order->status = 'ordered';
        $order->is_shipping_different = $this->is_shipping_different ? 1 : 0;

        $order->save();

        foreach (Cart::content() as $item) {
            $orderItem = new OrderItem();
            $orderItem->order_id = $order->id;
            $orderItem->product_id = $item->id;
            $orderItem->price = $item->price;
            $orderItem->quantity = $item->qty;
            $orderItem->save();
        }
        if ($this->is_shipping_different) {
            $this->validate(
                [
                    's_fisrtname' => 'required',
                    's_lastname' => 'required',
                    's_phone' => 'required|numeric',
                    's_email' => 'required|email',
                    's_line1' => 'required',
                    's_line2' => 'required',
                    's_city' => 'required',
                    's_country' => 'required',
                    's_zipcode' => 'required',
                    'paymode' => 'required'
                ]
            );


            $shipping = new Shipping();
            $shipping->order_id = $order->id;
            $shipping->fisrtname = $this->s_fisrtname;
            $shipping->lastname = $this->s_lastname;
            $shipping->phone = $this->s_phone;
            $shipping->email = $this->s_email;
            $shipping->line1 = $this->s_line1;
            $shipping->line2 = $this->s_line2;
            $shipping->city = $this->s_city;


            $shipping->country = $this->s_country;
            $shipping->zipcode = $this->s_zipcode;
            $shipping->save();
        }

        if ($this->paymode == 'code') {

            $transi = new Trancision();

            $transi->user_id = Auth::user()->id;
            $transi->order_id = $order->id;
            $transi->mode = 'code';
            $transi->status = 'chưa giải quyết';
            $transi->save();
        }
        $this->thankyou = 1;
        Cart::destroy();
        session()->forget('checkout');
    }


    public function verifyforCheckout()
    {
        if ($this->thankyou) {
            return redirect()->route('thankyou');
        } else if (!session()->get('checkout')) {
            return redirect()->route('shop');
        }
    }




    public function render()
    {
        $this->verifyforCheckout();
        return view('livewire.checkoutcomponent')->layout('layout.app');
    }
}
