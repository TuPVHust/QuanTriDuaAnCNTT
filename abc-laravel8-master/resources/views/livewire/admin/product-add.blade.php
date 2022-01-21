<div>
    <div>

        <div class="container" style="padding: 30px 0 ;">

            <div class="col-md-12">
             {{Session::get('success')}}
                </div>
            @if (Session::has('sucess'))
                <div class="alert alert-success" role="alert">


                @endif
          <div class="row">


              <div class="col-md-12">
                  <div class="card" style="padding: 5px 0;font-size:large " >
                      <b > Add Product</b>
                      <div style="margin: 10px 0; display:flex; justify-content: flex-end;" class="search">

                          <a href="{{route('admin_product')}}" class="btn btn-success">All Product</a>

                      </div>

                <form action="{{route('admin_product_add')}}" wire:submit.prevent='addproduct' enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                          <label for="">Name Product</label>
                          <input style="height: 40px" wire:model='name' type="text" wire:keyup='genSlug'  value="" class="form-control" style="width: 60%" name="name" id="name" aria-describedby="helpId" placeholder="Name...">
                          @error('name')
                          <small class="text-danger">{{$message}}</small>
                          @enderror
                        </div>

                        <div class="form-group">
                          <label for="">Slug Product</label>
                          <input style="height: 40px" wire:model='slug' type="text" value="" class="form-control"  aria-describedby="helpId" placeholder="...">
                          @error('slug')
                          <small class="text-danger">{{$message}}</small>
                          @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Short Description</label>
                            <textarea name="form-control" type="text" wire:model='shortDescription'  value="" class="form-control"  aria-describedby="helpId" placeholder="..." style="width: 100%" id="" ></textarea>
                            @error('slug')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                          </div>

                            <div class="form-group">
                                <label for="">Quantity</label>
                                <input style="height: 40px" wire:model='Quantity' type="number" value="" class="form-control"  aria-describedby="helpId" placeholder="...">
                                @error('slug')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                              </div>

                              <div class="form-group">
                                <label for="">Regular_price</label>
                                <input style="height: 40px" wire:model='Regular_price' type="text" value="" class="form-control"  aria-describedby="helpId" placeholder="...">
                                @error('slug')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                              </div>
                              <div class="form-group">
                                <label for="">Sale_price</label>
                                <input style="height: 40px" wire:model='Sale_price' type="text" value="" class="form-control"  aria-describedby="helpId" placeholder="...">
                                @error('slug')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                              </div>
                              <div class="form-group">
                                <label for="">Description</label>
                                <textarea name="form-control" type="text" wire:model='Description' value="" class="form-control"  aria-describedby="helpId" placeholder="..." style="width: 100%" id="" ></textarea>
                                @error('slug')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                              </div>


                        <div class="form-group">
                            <label for="">Image</label>
                            <input style="height: 40px" wire:model='Image' type="file" value="" class="file-input">
                           @if ($Image)
                           <img src="{{$Image->temporaryUrl()}}" style="width: 200px; height: 100px;" alt="">

                           @endif
                          </div>




                          <div class="form-group">
                            <label for="">Category </label>
                            <div >
                                <select class="form-control" wire:model='Category_id' >
                                    <option value="">None</option>
                                    @foreach ($subcat as $item)
                                      <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach

                                </select>
                            </div>
                            @error('type')
                            <small class="text-danger">{{$message}}</small>
                            @enderror

                        </div>

                        <div class="form-group">
                            <label for="">Featured </label>
                            <div >
                                <select class="form-control" wire:model='featured' >
                                    <option value="">None</option>

                                      <option value="0">No</option>
                                      <option value="1">Yes</option>


                                </select>
                            </div>
                            @error('type')
                            <small class="text-danger">{{$message}}</small>
                            @enderror

                        </div>
                        <button type="submit" class="btn btn-primary"> Create </button>
                    </div>



                    </form>

                  </div>
              </div>
          </div>
      </div>
    </div>

</div>
