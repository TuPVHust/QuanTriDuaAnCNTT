<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Review;
class UserReview extends Component
{
    public $rating;
    public $comment;
    public $order_item_id;
    public function danhgia()
    {
        $review = new Review();
        $review->rating = $this->rating;
        $review->comment = $this->comment;
        $review->order_item_id = $this->order_item_id;
        dd($review);


    }
    public function render()
    {
        return view('livewire.user-review');
    }
}
