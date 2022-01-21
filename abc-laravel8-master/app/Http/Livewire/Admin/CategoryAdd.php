<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Subcategory;
use Livewire\Component;
use Illuminate\Support\Str;

class CategoryAdd extends Component
{

    public $name;
    public $slug;
    public $Subcategory;
    public function rederSlug()
    {

        $this->slug = Str::slug($this->name);
    }


    public function addCategory()
    {

        if($this->Subcategory)
        {
            $cat = new Subcategory();
            $cat->name = $this->name;
            $cat->slug = $this->slug;
            $cat->category_id = $this->Subcategory;
            $cat->save();
            session()->flash('sucess','Thêm Subcategory mới thành công');
        }
        else
        {
            $cat = new Category();

            $cat->name = $this->name;
            $cat->slug = $this->slug;

            $cat->save();
            session()->flash('sucess','Thêm mới thành công');
        }




    }
    public function render()
    {
        $subcat = Category::all();
        return view('livewire.admin.category-add',compact('subcat'))->layout('layout.app');
    }
}
