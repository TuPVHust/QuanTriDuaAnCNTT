<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Category;

class Headercomponent extends Component
{

    public $search;
    public $product_cat;

    public $product_cat_id;

    public function mount()
    {
        $this->product_cat = 'All Category';
        $this->fill(request()->only('search','product_cat','product_cat_id'));

    }




    public function render()
    {

        $categoryhead = Category::all();
        return view('livewire.headercomponent',compact(['categoryhead']))->layout('layout.app');
    }
}
