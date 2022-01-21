<div>

    <div class="container" style="padding: 30px 0 ;">

        <div class="row">
            <div class="col-md-12">
                <div class="card" style="padding: 5px 0;font-size:large;">
                    <b> All Cupons</b>
                    <div style="margin: 10px 0; display:flex; justify-content: space-between;" class="search">
                        <form class="form-inline">
                            <div class="form-group">
                                <input type="text" name="key" class="form-control" placeholder="Từ khóa"
                                    aria-describedby="helpId">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                        <a href="{{ route('admin_coupons_add') }}" class="btn btn-success">Add Cupons</a>
                    </div>

                    @if (Session::has('delete'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('delete') }}
                        </div>


                    @endif


                    <div class="card-body">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Code</th>
                                    <th>Tpye</th>
                                    <th>expiry_date</th>
                                    <th>Value</th>

                                    <th>Cart_value</th>


                                    <th class='text-right'>Tools</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $d)
                                    <tr>
                                        <td scope="row">{{ $d->id }}</td>
                                        <td>{{ $d->code }}</td>

                                        <td>{{ $d->type }}</td>
                                        <td>{{ $d->expiry_date }}</td>
                                        <td>{{ $d->value }}</td>

                                        <td>{{ $d->cart_value }}</td>


                                        <td class="text-right">
                                            <a name="" id="" class="btn btn-sm btn-primary"
                                                href="{{ route('admin_coupons_edit', ['coupons_id'=>$d->id]) }}"
                                                role="button">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a name="" id="" class="btn btn-sm btn-danger btndelete" onclick="confirm('Are you sure about this')" href=""
                                                wire:click.prevent='deleteCoupons({{ $d->id }})' role="button">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>












</div>
