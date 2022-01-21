<div>

    <div class="container" style="padding: 30px 0">


        <div class="wrap-review-form">
            @if (Session::has('sucess'))
            <p class="alert alert-success" role="alert">{{Session::get('success')}}</p>

            @endif
            <div id="comments">

                <h2 class="woocommerce-Reviews-title">Add review </h2>
                <ol class="commentlist">
                    <li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1"
                        id="li-comment-20">
                        <div id="comment-20" class="comment_container">
                            <img alt="" src="{{url('file')}}/images/products/{{$data->product->image}}" height="80"
                                width="80">
                            <div class="comment-text">

                                <p class="meta">
                                    <strong class="woocommerce-review__author">{{$data->product->name}}</strong>
                                </p>

                            </div>
                        </div>
                    </li>
                </ol>
            </div><!-- #comments -->

            <div id="review_form_wrapper">
                <div id="review_form">
                    <div id="respond" class="comment-respond">

                        <form id="commentform" class="comment-form" wire:submit.prevent='addRating' >

                            <div class="comment-form-rating">

                                <span>Your rating</span>
                                <p class="stars">

                                    <label for="rated-1"></label>
                                    <input type="radio" id="rated-1" name="rating" wire:model='rating' value="1">
                                    <label for="rated-2"></label>
                                    <input type="radio" id="rated-2" name="rating" wire:model='rating' value="2">
                                    <label for="rated-3"></label>
                                    <input type="radio" id="rated-3" name="rating" wire:model='rating' value="3">
                                    <label for="rated-4"></label>
                                    <input type="radio" id="rated-4" name="rating" wire:model='rating' value="4">
                                    <label for="rated-5"></label>
                                    <input type="radio" id="rated-5" name="rating" wire:model='rating' value="5"
                                        checked="checked">
                                </p>
                            </div>
                            <div class="comment">


                                <p class="comment-form-comment">
                                    <label for="comment">Your review <span class="required">*</span>
                                    </label>
                                    <textarea wire:model='comment' id="comment" name="comment" cols="45" rows="8"></textarea>
                                </p>
                                <p class="form-submit">
                                    <input name="submit" type="submit" id="submit" class="submit" value="Submit">
                                </p>
                            </div>

                        </form>

                    </div><!-- .comment-respond-->
                </div><!-- #review_form -->
            </div><!-- #review_form_wrapper -->

        </div>
    </div>
</div>
</div>
</div>
