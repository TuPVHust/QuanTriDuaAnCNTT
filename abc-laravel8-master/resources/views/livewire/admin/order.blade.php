<div>

    <style>
        nav svg{
            height: 20px;

        }
        nav .hidden{
            display: block !important;
        }
    </style>
    <div class="container" style="padding: 30px 0">
        <div class="row">


            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        All Orders

                    </div>
                    <div class="panel-body">

                        <table class="table table-striped">
                            <thead>
                                <tr>

                                    <th>Id</th>
                                    <th>Subtotal</th>
                                    <th>Discount</th>

                                    <th>Total</th>
                                    <th>Email</th>
                                    <th>Fisrtname</th>
                                    <th>Lastname</th>

                                    <th>Phone</th>
                                    <th>City</th>
                                    <th>Country</th>

                                    <th>Zipcode</th>
                                    <th>Created_at</th>
                                    <th>Tools</th>

                                </tr>



                            </thead>
                            <tbody>

                                @foreach ($od as $item)




                                    <tr>
                                        <th>{{ $item->id }}</th>
                                        <th>${{ $item->subtotal }}</th>
                                        <th>${{ $item->discount }}</th>

                                        <th>${{ $item->total }}</th>
                                        <th>{{ $item->email }} </th>
                                        <th>{{ $item->fisrtname }}</th>
                                        <th>{{ $item->lastname }}</th>
                                        <th>{{ $item->phone }}</th>
                                        <th>{{ $item->city }}</th>
                                        <th>{{ $item->country }}</th>
                                        <th>{{ $item->zipcode }}</th>
                                        <th>{{ $item->created_at }}</th>
                                        <th class="text-right">
                                            <a name="" id="" class="btn btn-sm btn-primary" href="{{route('admin_order_details',$item->id)}}" role="button">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a name="" id="" class="btn btn-sm btn-danger btndelete" href="" role="button">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                            </form>
                                        </th>


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
