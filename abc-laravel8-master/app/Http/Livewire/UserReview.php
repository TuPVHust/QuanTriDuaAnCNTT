<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;
class UserReview extends Component
{
    public $rating;
    public $comment;
    public $order_item_id;
    public $user_id;
    public function storeRating($value1, $value2)
    {
        $this->rating = $value1;
        $this->order_item_id = $value2;
    } 
    public function danhgia()
    {

        $review = new Review();
        $review->rating = $this->rating;
        $review->comment = $this->comment;
        $review->order_item_id = $this->order_item_id;
        $review->user_id = Auth::user()->id;
        $review->save();
    }

    protected $listeners = ['storeRating',];

    public function render()
    {
        return view('livewire.user-review');
    }
}
