<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactUScomponent extends Component
{

    public $name;
    public $phone;
    public $email;
    public $comment;

    public function updated($fields)
    {
        $this->validateOnly($fields, [

            'name' => 'required',
            'email' => 'required',
            'phone' => 'required|numeric',
            'comment' => 'required',



        ]);
    }
    public function contactUs()
    {
        $this->validate(
            [

                'name' => 'required',
                'email' => 'required',
                'phone' => 'required|numeric',
                'comment' => 'required'
            ]
        );

        $contact = new Contact();
        $contact->phone = $this->phone;
        $contact->email = $this->email;
        $contact->comment = $this->comment;
        $contact->name = $this->name;
        $contact->save();
        session()->flash('success', 'Send Complete');
    }

    public function render()
    {
        return view('livewire.contact-u-scomponent')->layout('layout.app');
    }
}
