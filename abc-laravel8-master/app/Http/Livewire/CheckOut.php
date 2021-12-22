<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;
class CheckOut extends Component
{
    public $firstname;
    public $lastname;
    public $email;
    public $phone;
    public $address;
    // public $country;
    public $zipcode;
    public function placeOder1()
    {
        // $this->validate([
        //     'firstname' =>'required',
        //     'lastname' =>'required',
        //     'email' =>'required',
        //     'phone' =>'required',
        //     'address' =>'required',
        //     'country' =>'required',
        //     'zipcode' =>'required',

        // ]);


        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->subtotal = Cart::Subtotal(0);//session()->get('checkout')['subtotal'];
       // $order->discount = Cart::Total(0); //session()->get('checkout')['discount'];
        $order->tax = Cart::Tax(0);//session()->get('checkout')['tax'];
        $order->total = Cart::Total(0);
        $order->firstname= $this->firstname;
        $order->lastname= $this->lastname;
        $order->email= $this->email;
        $order->phone= $this->phone;
        // $order->line1= $this->line1;
        // $order->line2= $this->line2;
        // $order->city= $this->city;
        // $order->provine= $this->provine;
        $order->address= $this->address;
        $order->zipcode= $this->zipcode;
        dump($order);
        // dd($order);
        // $order->status = "ordered";
        // $order->is_shipping_different = $this->ship_to_different ? 1:0;
        // $order->save();

    }
    public function render()
    {
        $items=Cart::content();
        return view('livewire.check-out',compact('items'))->layout('layouts.base');
    }
}
