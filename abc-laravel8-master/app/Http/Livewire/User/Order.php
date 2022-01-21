<?php

namespace App\Http\Livewire\User;

use App\Models\Order as ModelsOrder;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Order extends Component
{
    public function render()
    {

        $od = ModelsOrder::where('user_id',Auth::user()->id)->paginate(20);

        return view('livewire.user.order',compact('od'))->layout('layout.app');
    }
}
