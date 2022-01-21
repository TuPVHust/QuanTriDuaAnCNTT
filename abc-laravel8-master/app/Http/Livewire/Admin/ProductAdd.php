<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class ProductAdd extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $shortDescription;
    public $Description;
    public $List_image;
    public $Image;
    public $Quantity;
    public $Regular_price;
    public $Sale_price;
    public $Category_id;
    public $featured;


    public function mount()
    {
        $this->featured =0;
    }
    public function genSlug()
    {
        $this->slug = Str::slug($this->name,'-');
    }

    public function addproduct()
    {
        $product = new Product();
        $product->name = $this->name;
        $product->slug = $this->slug;

        $product->short_description = $this->shortDescription;
        $product->description = $this->Description;
        $product->sale_price = $this->name;
        $product->quatity = $this->Quantity;
        $product->regular_price = $this->Regular_price;
        $product->sale_price = $this->Sale_price;
        $product->category_id = $this->Category_id;


        $this->Image->storeAs('products',$Imagename);
        $product->image = $Imagename;
        $product->featured = $this->featured;
        $product->save();
        session()->flash('sucess','Thêm Product mới thành công');







    }
    public function render()
    {
        $subcat = Category::all();
        return view('livewire.admin.product-add',compact('subcat'))->layout('layout.app');
    }
}
