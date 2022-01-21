<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use Livewire\Component;

class OrderDetails extends Component
{

    public $order_id;

    public function mount($order_id)
    {

        $this->$order_id = $order_id;


    }


    public function render()
    {

        $ordetails = Order::find($this->order_id);

        return view('livewire.admin.order-details',compact('ordetails'))->layout('layout.app');
    }
}
