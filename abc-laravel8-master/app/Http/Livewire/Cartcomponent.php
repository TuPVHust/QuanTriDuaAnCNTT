<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Gloudemans\Shoppingcart\Facades\Cart;
use Gloudemans\Shoppingcart\CartItem;
use Gloudemans\Shoppingcart\CartItemOptions;
use App\Models\discount;
use Illuminate\Support\Facades\Auth;

class Cartcomponent extends Component
{

    public $havecode;
    public $cuponCode;
    public $discount;
    public $subAfter;
    public $taxAfter;
    public $totalAfter;



    public function upqty($rowId)
    {

        $get = Cart::get($rowId);
        $qty = $get->qty + 1;
        Cart::update($rowId, $qty);
        $this->emitTo('cart-refesh', 'refreshCart');
    }

    public function downqty($rowId)
    {

        $get = Cart::get($rowId);
        $qty = $get->qty - 1;
        Cart::update($rowId, $qty);
        $this->emitTo('cart-refesh', 'refreshCart');
    }

    public function deleteOne($rowId)
    {

        Cart::remove($rowId);
        Session()->flash('success', 'Delete complete');
        $this->emitTo('cart-refesh', 'refreshCart');
    }

    public function deleteAll()
    {

        Cart::destroy();
    }

    public function apply()
    {

        $codeApp = discount::where('code', $this->cuponCode)->where('cart_value', '<=', Cart::subtotal())->first();
        if (!$codeApp) {

            session()->flash('false', 'Code does not exist');
            return;
        } else {
            session()->put(
                'coupon',
                [
                    'code' => $codeApp->code,
                    'type' => $codeApp->type,
                    'value' => $codeApp->value,
                    'cart_value' => $codeApp->cart_value,
                ]
            );
        }
    }


    public function removeCoupon()
    {
        session()->forget('coupon');
    }


    public function caculatorDiscount()
    {


        if (session()->has('coupon')) {
            if (session()->get('coupon')['type'] == 'fixed') {
                $this->discount = session()->get('coupon')['value'];
            } else {
                $this->discount = (Cart::subtotal() * session()->get('coupon')['value']) / 100;
            }
            $this->subAfter = Cart::subtotal() - $this->discount;
            $this->taxAfter = ($this->subAfter * config('cart.tax')) / 100;
            $this->totalAfter = $this->subAfter + $this->taxAfter;
        }
    }


    public function checkout()
    {

        if(Auth::check())
        {
            return redirect()->route('checkout');

        }
        else
        {
            return redirect()->route('login');
        }
    }

    public function setAmountForCheckOut()
    {

        if(!Cart::count() > 0)
        {
            session()->forget('checkout');
            return;
        }

        if (session()->has('coupon')) {

            session()->put(
                'checkout',
                [
                    'discount' => $this->discount,
                    'subtotal' => $this->subAfter,
                    'tax' => $this->taxAfter,
                    'total' => $this->totalAfter,
                ]
            );
        } else {
            session()->put(
                'checkout',
                [
                    'discount' => 0,
                    'subtotal' => Cart::subtotal(),
                    'tax' =>  Cart::tax(),
                    'total' =>  Cart::total(),

                ]
            );
        }
    }


    public function render()
    {


        $dataCart = Cart::content();

        if (session()->has('coupon')) {
            if (Cart::subtotal() < session()->get('coupon')['cart_value']) {
                session()->forget('coupon');
            } else {
                $this->caculatorDiscount();
            }
        }


        $this->setAmountForCheckOut();

        return view('livewire.cartcomponent', compact('dataCart'))->layout('layout.app');
    }
}
