<div>

    <div class="container" style="padding: 30px 0 ;">

      <div class="row">


          <div class="col-md-12">
            @if (Session::has('sucess'))
            <div class="alert alert-success" role="alert">
              {{Session::get('success')}}
            </div>
            @endif

            @if (Session::has('succesCoupon'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('succesCoupon') }}
            </div>
            @endif
              <div class="card" style="padding: 5px 0;font-size:large " >
                  <b > Update Coupons</b>
                  <div style="margin: 10px 0; display:flex; justify-content: flex-end;" class="search">

                      <a href="{{route('admin_coupons')}}" class="btn btn-success">All Coupons</a>

                  </div>
                  <form wire:submit.prevent='updateCoupon' >
                    @csrf
                    <div class="form-group">
                      <label for="">Code Coupons</label>
                      <input style="height: 40px" type="text" value="" class="form-control" name="code" id="code"  placeholder="code..." wire:model='code'>
                      @error('code')
                      <small class="text-danger">{{$message}}</small>
                      @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Type Coupons</label>
                        <div >
                            <select class="form-control" wire:model='type'>
                                <option value="">Selection</option>
                                <option value="fixed">Fixed</option>
                                <option value="percent">Percent</option>
                            </select>
                        </div>

                        @error('type')
                        <small class="text-danger">{{$message}}</small>
                        @enderror

                      </div>


                      <div class="form-group">
                        <label for="">Expiry_date </label>
                        <input style="height: 40px" type="text" value="" class="form-control" name="expiry_date" id="expiry_date"  placeholder="expiry_date..." wire:model='expiry_date'>
                        @error('expiry_date')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label for="">Value Coupons</label>
                        <input style="height: 40px" type="text" value="" class="form-control" name="value" id="value"  placeholder="value..." wire:model='value'>
                        @error('value')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label for="">Cart_Value Coupons</label>
                        <input style="height: 40px" type="text" value="" class="form-control" name="cart_value" id="cart_value"  placeholder="cart_value..." wire:model='cart_value'>
                        @error('cart_value')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                      </div>


                    <button type="submit" class="btn btn-primary"> Update </button>
                </form>
              </div>
          </div>
      </div>
  </div>

</div>

<script>
    $(function () {
        $('#expiry_date').datetimepicker({
            format:'Y-MM-DD'
        })
        .on('dp.change',function (ev) {
            var data = $('#expiry_date').val();
            @this.set('$expiry_date',data);

        });

    });
</script>

