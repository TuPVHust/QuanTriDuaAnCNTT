<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ReturnPayment extends Component
{
    public $currentUrl;

    public function mount()
    {
        $this->currentUrl = url()->current();
        dd($this->currentUrl);
    }

    public function render()
    {
        $this->currentUrl = url()->current();
        dd($this->currentUrl);
        return view('livewire.return-payment');
    }
}
