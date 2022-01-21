<?php

namespace App\Http\Livewire\User;

use App\Models\OrderItem;
use App\Models\Review as ModelsReview;
use Livewire\Component;

class Review extends Component
{

    public $rating;
    public $comment;
    public $rstatus;


    public $order_items_id;


    public function mount($order_items_id)
    {

        $this->order_items_id = $order_items_id;
    }


    public function updated($fileds)
    {
        $this->validateOnly($fileds,[

            'rating' => 'required',
            'comment' => 'required',

        ]);
    }

    public function addRating()
    {
        $this->validate(
            [
                'rating' => 'required',
                'comment' => 'required',

            ],

        );

        $review = new ModelsReview();

        $review->rating = $this->rating;
        $review->comment = $this->comment;
        $review->order_items_id = $this->order_items_id;

        $review->save();


        $orderDetails = OrderItem::find($this->order_items_id);
        $orderDetails->rstatus = true;
        $orderDetails->save();
        session()->flash('sucess','Add Success');

    }

    public function render()
    {
        $data = OrderItem::find($this->order_items_id);
        return view('livewire.user.review',compact('data'))->layout('layout.app');
    }
}
