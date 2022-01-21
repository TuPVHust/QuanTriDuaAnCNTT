<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class ChangePass extends Component
{

    public $current_password;
    public $password;
    public $cofPass;

    public function update($fields)
    {
        $this->validateOnly($fields,[
            'current_password' => 'required',
            'password' => 'required|min:6|different:current_password',

        ]);
    }


    public function ChangePass()
    {





        $this->validate(
            [
                'current_password' => 'required',
                'password' => 'required|min:6|different:current_password',
                'cofPass' => 'required|min:6|same:password',
            ],

        );

        if(Hash::check($this->current_password, Auth::user()->pasword))
        {
            $change = User::findOrFail(Auth::user()->id);

            $change->passwod = Hash::make($this->password);
            $change->save();
        session()->flash('sucess','Change Complete');
        }
        else
        {
            session()->flash('fail','Change Fail');
        }

    }



    public function render()
    {
        return view('livewire.user.change-pass')->layout('layout.app');
    }
}
