<div class="d-flex justify-content-center row">
    <div class="d-flex flex-column col-md-8">
        {{-- <div class="d-flex flex-row align-items-center text-left comment-top p-2 bg-white border-bottom px-4">
            <div class="profile-image"><img class="rounded-circle" src="{{ url('uploads') }}/download.png" width="70">
            </div>
            <div class="d-flex flex-column-reverse flex-grow-0 align-items-center votings ml-1"><i
                    class="fa fa-sort-up fa-2x hit-voting"></i><span>127</span><i
                    class="fa fa-sort-down fa-2x hit-voting"></i></div>
            <div class="d-flex flex-column ml-3">
                <div class="d-flex flex-row post-title">
                    <h5>Is sketch 3.9.1 stable?</h5><span class="ml-2">(Jesshead)</span>
                </div>
                <div class="d-flex flex-row align-items-center align-content-center post-title"><span
                        class="bdge mr-1">video</span><span class="mr-2 comments">13 comments&nbsp;</span><span
                        class="mr-2 dot"></span><span>6 hours ago</span></div>
            </div>
        </div> --}}
        <div id="rateYo"> </div>
        <div class="coment-bottom bg-white p-2 px-4">
            <div class="d-flex flex-row add-comment-section mt-4 mb-4">
                <img class="img-fluid img-responsive rounded-circle mr-2" src="{{ url('uploads') }}/download.png"
                    width="38">
                <input type="text" class="form-control mr-3" wire:model='comment' placeholder="Add comment">
                <button class="btn btn-primary" type="button" wire:click.prevent='danhgia()'>Comment</button>
            </div>
            <div class="commented-section mt-2">
                <div class="d-flex flex-row align-items-center commented-user">
                    <h5 class="mr-2">Corey oates</h5><span class="dot mb-1"></span><span
                        class="mb-1 ml-2">4 hours ago</span>
                </div>
                <div class="comment-text-sm"><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></div>
                <div class="reply-section">
                    <div class="d-flex flex-row align-items-center voting-icons"><i
                            class="fa fa-sort-up fa-2x mt-3 hit-voting"></i><i
                            class="fa fa-sort-down fa-2x mb-3 hit-voting"></i><span
                            class="ml-2">10</span><span class="dot ml-2"></span>
                        <h6 class="ml-2 mt-1">Reply</h6>
                    </div>
                </div>
            </div>
            <div class="commented-section mt-2">
                <div class="d-flex flex-row align-items-center commented-user">
                    <h5 class="mr-2">Samoya Johns</h5><span class="dot mb-1"></span><span
                        class="mb-1 ml-2">5 hours ago</span>
                </div>
                <div class="comment-text-sm"><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua..</span></div>
                <div class="reply-section">
                    <div class="d-flex flex-row align-items-center voting-icons"><i
                            class="fa fa-sort-up fa-2x mt-3 hit-voting"></i><i
                            class="fa fa-sort-down fa-2x mb-3 hit-voting"></i><span
                            class="ml-2">15</span><span class="dot ml-2"></span>
                        <h6 class="ml-2 mt-1">Reply</h6>
                    </div>
                </div>
            </div>
            <div class="commented-section mt-2">
                <div class="d-flex flex-row align-items-center commented-user">
                    <h5 class="mr-2">Makhaya andrew</h5><span class="dot mb-1"></span><span
                        class="mb-1 ml-2">10 hours ago</span>
                </div>
                <div class="comment-text-sm"><span>Nunc sed id semper risus in hendrerit gravida rutrum. Non odio
                        euismod lacinia at quis risus sed. Commodo ullamcorper a lacus vestibulum sed arcu non odio
                        euismod. Enim facilisis gravida neque convallis a. In mollis nunc sed id. Adipiscing elit
                        pellentesque habitant morbi tristique senectus et netus. Ultrices mi tempus imperdiet nulla
                        malesuada pellentesque.</span></div>
                <div class="reply-section">
                    <div class="d-flex flex-row align-items-center voting-icons"><i
                            class="fa fa-sort-up fa-2x mt-3 hit-voting"></i><i
                            class="fa fa-sort-down fa-2x mb-3 hit-voting"></i><span
                            class="ml-2">25</span><span class="dot ml-2"></span>
                        <h6 class="ml-2 mt-1">Reply</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- @push('scripts')
    <script>
        $(function() {
            $("#rateYo").rateYo({
                rating: 3.2,
                starWidth: "20px"
            }).on("rateyo.set", function(e, data) {

                // alert("The rating is set to " + data.rating + "!");
                // });
                Livewire.emit('storeRating', `${data.rating}`, "{{ $product->id }}");
            });
        });
    </script>
@endpush --}}
