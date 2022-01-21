<div>

    <style>
        nav svg {
            height: 20px;

        }

        nav .hidden {
            display: block !important;
        }

    </style>

    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Ordered Item
                    </div>
                    <div class="panel-body">
                        <div class="wrap-iten-in-cart">
                            <h3 class="box-title">Products Name</h3>

                            <ul class="products-cart">
                                @foreach ($ordetails->orderIteam as $item)
                                    <li class="pr-cart-item">
                                        <div class="product-image">
                                            <figure><img
                                                    src="{{ url('file') }}/images/products/{{ $item->product->image }}"
                                                    alt=""></figure>
                                        </div>
                                        <div class="product-name">
                                            <a class="link-to-product"
                                                href="{{ route('product_details', ['slug' => $item->product->slug]) }}">{{ $item->product->name }}</a>
                                        </div>
                                        <div class="price-field produtc-price">
                                            <p class="price">${{ $item->product->regular_price }}</p>
                                        </div>
                                        <div class="quantity">
                                            <h5 style="padding: 0 0 5px 50px">{{ $item->quantity }}</h5>

                                        </div>
                                        <div class="price-field sub-total">
                                            <p class="price">${{ $item->price * $item->quantity }}</p>
                                        </div>
                                        <div class="product-name">
                                            <a class="link-to-product"
                                                href="{{route('user_review')}}">Writing Review</a>
                                        </div>


                                    </li>
                                @endforeach
                            </ul>

                        </div>
                        <div class="order-summary">
                            <h4 class="title-box">Order Summary</h4>
                            <p class="summary-info"><span class="title">Subtotal</span><b
                                    class="index">${{ $ordetails->subtotal }}</b></p>
                            <p class="summary-info"><span class="title">Tax</span><b
                                    class="index">${{ $ordetails->tax }}</b></p>
                            <p class="summary-info"><span class="title">Shipping</span><b
                                    class="index">Free Shipping</b></p>
                            <p class="summary-info total-info "><span class="title">Total</span><b
                                    class="index">${{ $ordetails->total }}</b></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Billing Details
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <tr>
                                <th>Fisrtname</th>
                                <td>{{ $ordetails->fisrtname }}</td>
                                <th>Lastname</th>
                                <td>{{ $ordetails->lastname }}</td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td>{{ $ordetails->phone }}</td>
                                <th>Email</th>
                                <td>{{ $ordetails->email }}</td>
                            </tr>
                            <tr>
                                <th>Line1</th>
                                <td>{{ $ordetails->line1 }}</td>
                                <th>Line2</th>
                                <td>{{ $ordetails->line2 }}</td>
                            </tr>

                            <tr>
                                <th>City</th>
                                <td>{{ $ordetails->city }}</td>
                                <th>Country</th>
                                <td>{{ $ordetails->country }}</td>
                            </tr>

                            <tr>
                                <th>Zipcode</th>
                                <td>{{ $ordetails->zipcode }}</td>
                                <th>Created_at</th>
                                <td>{{ $ordetails->created_at }}</td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Shipping Details
                    </div>
                    <div class="panel-body">
                        @if ($ordetails->is_shipping_different)
                            <table class="table table-striped">
                                <tr>
                                    <th>Fisrtname</th>
                                    <td>{{ $ordetails->shipping->fisrtname }}</td>
                                    <th>Lastname</th>
                                    <td>{{ $ordetails->shipping->lastname }}</td>
                                </tr>
                                <tr>
                                    <th>Phone</th>
                                    <td>{{ $ordetails->shipping->phone }}</td>
                                    <th>Email</th>
                                    <td>{{ $ordetails->shipping->email }}</td>
                                </tr>
                                <tr>
                                    <th>Line1</th>
                                    <td>{{ $ordetails->shipping->line1 }}</td>
                                    <th>Line2</th>
                                    <td>{{ $ordetails->shipping->line2 }}</td>
                                </tr>

                                <tr>
                                    <th>City</th>
                                    <td>{{ $ordetails->shipping->city }}</td>
                                    <th>Country</th>
                                    <td>{{ $ordetails->shipping->country }}</td>
                                </tr>

                                <tr>
                                    <th>Zipcode</th>
                                    <td>{{ $ordetails->shipping->zipcode }}</td>
                                    <th>Created_at</th>
                                    <td>{{ $ordetails->shipping->created_at }}</td>
                                </tr>
                            </table>
                        @endif

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Trancision Details
                    </div>
                    <div class="panel-body">

                        <table class="table table-striped">
                            <tr>

                                <th>Mode</th>
                                <td>{{ $ordetails->trancision->mode }}</td>

                            </tr>
                            <tr>

                                <th>Status</th>
                                <td>{{ $ordetails->trancision->status }}</td>
                            </tr>

                            <tr>
                                <th>Created_at</th>
                                <td>{{ $ordetails->trancision->created_at }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
