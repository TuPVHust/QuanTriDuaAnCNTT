<?php

namespace App\Http\Livewire\Admin;

use App\Models\Contact;
use Livewire\Component;

class ContactUs extends Component
{



    public function render()
    {

        $data = Contact::orderBy('id','ASC')->Search()->paginate(4);
        return view('livewire.admin.contact-us',compact('data'))->layout('layout.app');
    }
}
