<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class TestComponent extends Component
{
    use WithPagination;

    public $sortBy;
    public $perPage;

    public function mount(){
        $this->sortBy="default";
        $this->perPage=21;
    }

    public function render()
    {
        return view('livewire.test-component')->extends('layouts.site')->section('content');
    }
}
