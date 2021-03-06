<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;
class CheckOut extends Component
{


    public $firstname;
    public $lastname;
    public $email;
    public $phone;
    public $address;

    public $zipcode;
    public function placeOder1()
    {
        // $this->validate([
        //     'firstname' =>'required',
        //     'lastname' =>'required',
        //     'email' =>'required',
        //     'phone' =>'required',
        //     'address' =>'required',
        //     'country' =>'required',
        //     'zipcode' =>'required',

        // ]);



           $order = new Order();
         $order->user_id = Auth::user()->id;
         $order->subtotal = 1213;
         $order->tax = 123;
         $order->total = Cart::Total();
         $order->firstname= $this->firstname;
         $order->lastname= $this->lastname;
         $order->email= $this->email;
         $order->phone= $this->phone;

         $order->address= $this->address;
         $order->zipcode= $this->zipcode;



         $order->save();
            $items =Cart::content();
            foreach ($items as $i) {
                $order_item = new OrderItem();

                $order_item->product_id= $i->id;
                $order_item->order_id= $order->id;
                $order_item->price= $i->price;
                $order_item->quantity= $i->qty;
                $order_item->save();

            }
            Cart::destroy();
           return redirect()->route('home');


    }
    public function create()
    {
        // Request $request
        // session(['cost_id' => $request->id]);
        // session(['url_prev' => url()->previous()]);
        $vnp_TmnCode = "UDOPNWS1"; //Mã website tại VNPAY
        $vnp_HashSecret = "EBAHADUGCOEWYXCMYZRMTMLSHGKNRPBN"; //Chuỗi bí mật
        $vnp_Url = "http://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = "http://localhost:8000/return-vnpay";
        $vnp_TxnRef = date("YmdHis"); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = "Thanh toán hóa đơn phí dich vụ";
        $vnp_OrderType = 'billpayment';
        // $vnp_Amount = $request->input('amount') * 100;
        $vnp_Locale = 'vn';
        $vnp_IpAddr = request()->ip();

        $inputData = array(
            "vnp_Version" => "2.0.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . $key . "=" . $value;
            } else {
                $hashdata .= $key . "=" . $value;
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
           // $vnpSecureHash = md5($vnp_HashSecret . $hashdata);
            $vnpSecureHash = hash('sha256', $vnp_HashSecret . $hashdata);
            $vnp_Url .= 'vnp_SecureHashType=SHA256&vnp_SecureHash=' . $vnpSecureHash;
        }
        return redirect($vnp_Url);
    }
    public function render()
    {
        $items=Cart::content();



        return view('livewire.check-out',compact('items'))->layout('layouts.base');

    }
}
