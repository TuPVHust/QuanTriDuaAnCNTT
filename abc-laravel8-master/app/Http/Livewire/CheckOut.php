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
         $order->subtotal = 1213;
         $order->tax = 123;
         $order->total = Cart::Total();
         $order->firstname= $this->firstname;
         $order->lastname= $this->lastname;
         $order->email= $this->email;
         $order->phone= $this->phone;

         $order->address= $this->address;
         $order->zipcode= $this->zipcode;



         $order->save();
            $items =Cart::content();
            foreach ($items as $i) {
                $order_item = new OrderItem();

                $order_item->product_id= $i->id;
                $order_item->order_id= $order->id;
                $order_item->price= $i->price;
                $order_item->quantity= $i->qty;
                $order_item->save();

            }
            Cart::destroy();
           return redirect()->route('home');


    }
    public function render()
    {
        $items=Cart::content();



        return view('livewire.check-out',compact('items'))->layout('layouts.base');

    }
}
