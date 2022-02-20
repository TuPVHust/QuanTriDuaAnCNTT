<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Sanpham;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Pagination\Paginator;
use App\Models\Nhomsanpham;



class Shopcomponent extends Component
{

    public $sorting;
    public $pagesize;

    public function mount()
    {
        $this->sorting = 'default';
        $this->pagesize = 3;
    }




    public static function store($product_id, $product_name, $product_price)
    {

        Cart::add($product_id, $product_name,1, $product_price)->associate('App\Models\Sanpham');

        session()->flash('success','Thêm mới một mục vào rỏ hàng');
        return redirect()->route('cart');
    }



    public function render()
    {

        if($this->sorting =="date")
        {

            $data = Sanpham::orderBy('created_at','DESC')->paginate($this->pagesize);
        }
        elseif($this->sorting =="price")
        {
            $data = Sanpham::orderBy('gia','ASC')->paginate($this->pagesize);
        }
        elseif($this->sorting =="price-desc")
        {
            $data = Sanpham::orderBy('gia','DESC')->paginate($this->pagesize);
        }
        else
        {
            $data = Sanpham::paginate($this->pagesize);
        }


        $count1 = Sanpham::count();

        $listCar = Nhomsanpham::all();


        return view('livewire.shopcomponent',compact(['data','count1','listCar']))->layout('layout.app');
    }
}
