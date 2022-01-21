<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;

class CategoryEdit extends Component
{
    public function render()
    {
        $cat = Category::where('slug',request()->slug)->first();


        return view('livewire.admin.category-edit',compact('cat'))->layout('layout.app');
    }
}
