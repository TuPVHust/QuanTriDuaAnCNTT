<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Blog extends Component
{

    public function render()
    {
       dd( isset( $_SESSION['newsession'] )) ;
        return view('livewire.blog')->layout('layouts.base');
    }
}
