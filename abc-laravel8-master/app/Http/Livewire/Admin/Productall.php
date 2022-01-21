<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
 use App\Models\Sanpham;

class Productall extends Component
{
    public function render()
    {
        $data = Sanpham::orderBy('id','ASC')->Search()->paginate(5);
        return view('livewire.admin.productall',compact('data'))->layout('layout.app');

    }
}
