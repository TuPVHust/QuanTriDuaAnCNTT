<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order as ModelsOrder;
use Livewire\Component;


class Order extends Component
{
    public function render()
    {


        $od = ModelsOrder::all();

        return view('livewire.admin.order',compact('od'))->layout('layout.app');
    }
}
