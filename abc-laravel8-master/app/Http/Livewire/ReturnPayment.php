<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\URL;
use Livewire\Component;

class ReturnPayment extends Component
{

    public $id;
    protected $listeners = ['updateSelection1'];



    public function updateSelection1($id)
    {
        $this->id = $id;

    }

    public $currentUrl;

    public function mount()
    {

        // $this->currentUrl = url()->current();
        // $key = $_GET['vnp_Amount'];
        // $key = $_GET;
        // dd( $key);

    }

    public function render()
    {
     //   $data = $request->all();
        // $data1 = $request->vnp_Amount;
        // return view('vnpay.vnpay_return',compact('data','data1'));
        $value = session()->get('key');
        dd($value);
        $this->currentUrl = url()->current();
        // dd( $this->currentUrl);
        dd($this->id);
        return view('livewire.return-payment');
    }
}
