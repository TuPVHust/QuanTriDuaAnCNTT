<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class RegistrationController extends Controller
{
    public $currentUrl;

    public function payment(Request $request)
    {

        $data = $request->all();
        dd(($data));
        $tien_thanh_toan = $request->vnp_BankCode;
        $ma_ngan_hang = $request->vnp_BankTranNo;
        $ma = $request->vnp_CardType;
        $data1 = $request->vnp_OrderInfo;
        $data1 = $request->vnp_PayDate;
        $data1 = $request->vnp_ResponseCode;
        $data1 = $request->vnp_TmnCode;
        $data1 = $request->vnp_TransactionNo;
        $data1 = $request->vnp_TransactionStatus;
        $data1 = $request->vnp_TxnRef;
        dd($data);
        return view('vnpay.vnpay_return',compact('data','data1'));
    }
    public function create() {
        return view('admin.registration');
    }

    // ----------- [ Form validate ] -----------
    public function store(Request $request) {

        $request->validate(
            [
                "name" => 'required',
                "email" => 'required|email|unique:users',
                "password" => 'required|confirmed',
            ],
            [
                "name.required" => "Tên không được để trống",
                "email.required" => "Email không được để trống",
                "email.unique" => "Email đã tồn tại",
                "email.email" => "Email không đúng định dạng",
                "password.required" => "Mật khẩu không được để trống",
                "password.confirmed" => "Nhập lại mật khẩu không chính xác",
            ]
        );
        $password = bcrypt($request->password);
        $request->merge(['password' => $password]);

        $dataArray = array(
            "name" => $request->name,
            "email" => $request->email,
            "password" => $request->password
        );

        $user = User::create($dataArray);
        auth()->login($user);

        return redirect()->route('home');;

    }
}
