<div>

    <main id="main" class="main-site">

        <div class="container">

            <div class="wrap-breadcrumb">
                <ul>
                    <li class="proDetails-link"><a href="#" class="link">home</a></li>
                    <li class="proDetails-link"><span>detail</span></li>
                </ul>
            </div>
            <div class="row">

                <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
                    <div class="wrap-product-detail">
                        <div class="detail-media">
                            <div class="product-gallery">
                                <ul class="slides">

                                    <li data-thumb="{{url('youtube')}}/file/images/products/digital_18.jpg">
                                        <img src="{{url('youtube')}}/file/images/products/{{$proDetails->image}}"
                                            alt="product thumbnail" />
                                    </li>

                                    <li data-thumb="{{url('youtube')}}/file/images/products/digital_17.jpg">
                                        <img src="{{url('youtube')}}/file/images/products/{{$proDetails->image}}"
                                            alt="product thumbnail" />
                                    </li>

                                    <li data-thumb="{{url('youtube')}}/file/images/products/digital_15.jpg">
                                        <img src="{{url('youtube')}}/file/images/products/digital_15.jpg"
                                            alt="product thumbnail" />
                                    </li>

                                    <li data-thumb="{{url('youtube')}}/file/images/products/digital_12.jpg">
                                        <img src="{{url('youtube')}}/file/images/products/digital_12.jpg"
                                            alt="product thumbnail" />
                                    </li>

                                    <li data-thumb="{{url('youtube')}}/file/images/products/digital_18.jpg">
                                        <img src="{{url('youtube')}}/file/images/products/{{$proDetails->image}}"
                                            alt="product thumbnail" />
                                    </li>

                                    <li data-thumb="{{url('youtube')}}/file/images/products/digital_10.jpg">
                                        <img src="{{url('youtube')}}/file/images/products/digital_10.jpg"
                                            alt="product thumbnail" />
                                    </li>

                                    <li data-thumb="{{url('youtube')}}/file/images/products/digital_12.jpg">
                                        <img src="{{url('youtube')}}/file/images/products/digital_12.jpg"
                                            alt="product thumbnail" />
                                    </li>

                                    <li data-thumb="{{url('youtube')}}/file/images/products/digital_14.jpg">
                                        <img src="{{url('youtube')}}/file/images/products/digital_14.jpg"
                                            alt="product thumbnail" />
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="detail-info">
                            <div class="product-rating">
                                <style>
                                    .color-gray {
                                        color: #e6e6e6 !important
                                    }
                                </style>
                                @php
                                $star = 0;
                                @endphp
                                @foreach ($proDetails->orderItem->where('rstatus',1) as $ordetails )
                                @php
                                $star = $star + $ordetails->review->rating;
                                @endphp
                                @endforeach

                                @for ($i=1;$i<=5;$i++)
                                    @if ($i<=$star)
                                     <i class="fa fa-star" aria-hidden="true"></i>
                                    @else
                                    <i class="fa fa-color-gray" aria-hidden="true"></i>
                                    @endif
                                @endfor

                                    <a href="#"
                                        class="count-review">({{$proDetails->orderItem->where('rstatus',1)->count()}}
                                        review)</a>
                            </div>
                            <h2 class="product-name">{{$proDetails->name}}</h2>
                            <div class="short-desc">
                                <ul>
                                    <li>7,9-inch LED-backlit, 130Gb</li>
                                    <li>Dual-core A7 with quad-core graphics</li>
                                    <li>FaceTime HD Camera 7.0 MP Photos</li>
                                </ul>
                            </div>
                            <div class="wrap-social">
                                <a class="link-socail" href="#"><img src="{{url('youtube')}}/file/images/social-list.png"
                                        alt=""></a>
                            </div>
                            <div class="wrap-price"><span class="product-price">${{$proDetails->regular_price}}</span>
                            </div>
                            <div class="stock-info in-stock">
                                <p class="availability">Availability: <b>In Stock</b></p>
                            </div>
                            <div class="quantity">
                                <span>Quantity:</span>
                                <div class="quantity-input">
                                    <input  type="text" name="product-quatity" value="1" data-max="120" pattern="[0-9]*" >

                                    <a class="btn btn-reduce" wire:click ='downqty' ></a>
                                    <a class="btn btn-increase" wire:click ='upqty'  ></a>
                                </div>
                            </div>
                            <div class="wrap-butons">
                                <a href="#" wire:click.prevent="store({{$proDetails->id}},'{{$proDetails->name}}', {{$proDetails->regular_price}})" class="btn add-to-cart">Add to Cart</a>
                                <div class="wrap-btn">
                                    <a href="#" class="btn btn-compare">Add Compare</a>
                                    <a href="#" class="btn btn-wishlist">Add Wishlist</a>
                                </div>
                            </div>
                        </div>
                        <div class="advance-info">
                            <div class="tab-control normal">
                                <a href="#description" class="tab-control-proDetails active">description</a>
                                <a href="#add_infomation" class="tab-control-proDetails">Addtional Infomation</a>
                                <a href="#review" class="tab-control-proDetails">Reviews</a>
                            </div>
                            <div class="tab-contents">
                                <div class="tab-content-proDetails active" id="description">
                                    <p>Lorem ipsum dolor sit amet, an munere tibique consequat mel, congue albucius no
                                        qui, a t everti meliore erroribus sea. ro cum. Sea ne accusata voluptatibus. Ne
                                        cum falli dolor voluptua, duo ei sonet choro facilisis, labores officiis
                                        torquatos cum ei.</p>
                                    <p>Cum altera mandamus in, mea verear disputationi et. Vel regione discere ut,
                                        legere expetenda ut eos. In nam nibh invenire similique. Atqui mollis ea his,
                                        ius graecis accommodare te. No eam tota nostrum eque. Est cu nibh clita. Sed an
                                        nominavi, et stituto, duo id rebum lucilius. Te eam iisque deseruisse, ipsum
                                        euismod his at. Eu putent habemus voluptua sit, sit cu rationibus scripserit,
                                        modus taria . </p>
                                    <p>experian soleat maluisset per. Has eu idque similique, et blandit scriptorem
                                        tatibus mea. Vis quaeque ocurreret ea.cu bus scripserit, modus voluptaria ex
                                        per.</p>
                                </div>
                                <div class="tab-content-proDetails " id="add_infomation">
                                    <table class="shop_attributes">
                                        <tbody>
                                            <tr>
                                                <th>Weight</th>
                                                <td class="product_weight">1 kg</td>
                                            </tr>
                                            <tr>
                                                <th>Dimensions</th>
                                                <td class="product_dimensions">12 x 15 x 23 cm</td>
                                            </tr>
                                            <tr>
                                                <th>Color</th>
                                                <td>
                                                    <p>Black, Blue, Grey, Violet, Yellow</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-content-proDetails " id="review">

                                    <div class="wrap-review-form">
                                        <style>
                                            .width-0-percent {
                                                width: 0%;

                                            }

                                            .width-20-percent {
                                                width: 20%;
                                            }

                                            .width-40-percent {
                                                width: 40%;
                                            }

                                            .width-60-percent {
                                                width: 60%;
                                            }

                                            .width-80-percent {
                                                width: 80%;
                                            }

                                            .width-100-percent {
                                                width: 100%;
                                            }
                                        </style>
                                        <div id="comments">
                                            <h2 class="woocommerce-Reviews-title">
                                                {{$proDetails->orderItem->where('rstatus',1)->count()}} review for
                                                <span>{{$proDetails->name}}</span>
                                            </h2>
                                            <ol class="commentlist">
                                                @foreach ($proDetails->orderItem->where('rstatus',1) as $orderItem)
                                                <li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1"
                                                    id="li-comment-20">
                                                    <div id="comment-20" class="comment_container">
                                                        <img alt="" src="{{url('youtube')}}/file/images/author.jpg"
                                                            height="80" width="80">
                                                        <div class="comment-text">
                                                            <div class="star-rating">
                                                                <span class="width-80-percent">Rated <strong
                                                                        class="rating">{{$orderItem->review->rating
                                                                        *20}}</strong>
                                                                    {{$orderItem->review->rating}}</span>
                                                            </div>
                                                            <p class="meta">
                                                                <strong
                                                                    class="woocommerce-review__author">{{$orderItem->order->user->name}}</strong>
                                                                <span class="woocommerce-review__dash">–</span>
                                                                <time class="woocommerce-review__published-date"
                                                                    datetime="2008-02-14 20:00">{{Carbon\Carbon::parse($orderItem->review->created_at)->format('d
                                                                    F y g:i A')}}</time>
                                                            </p>
                                                            <div class="description">
                                                                <p>{{$orderItem->review->comment}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                @endforeach
                                            </ol>
                                        </div><!-- #comments -->


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end main products area-->

                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
                    <div class="widget widget-our-services ">
                        <div class="widget-content">
                            <ul class="our-services">

                                <li class="service">
                                    <a class="link-to-service" href="#">
                                        <i class="fa fa-truck" aria-hidden="true"></i>
                                        <div class="right-content">
                                            <b class="title">Free Shipping</b>
                                            <span class="subtitle">On Oder Over $99</span>
                                            <p class="desc">Lorem Ipsum is simply dummy text of the printing...</p>
                                        </div>
                                    </a>
                                </li>

                                <li class="service">
                                    <a class="link-to-service" href="#">
                                        <i class="fa fa-gift" aria-hidden="true"></i>
                                        <div class="right-content">
                                            <b class="title">Special Offer</b>
                                            <span class="subtitle">Get a gift!</span>
                                            <p class="desc">Lorem Ipsum is simply dummy text of the printing...</p>
                                        </div>
                                    </a>
                                </li>

                                <li class="service">
                                    <a class="link-to-service" href="#">
                                        <i class="fa fa-reply" aria-hidden="true"></i>
                                        <div class="right-content">
                                            <b class="title">Order Return</b>
                                            <span class="subtitle">Return within 7 days</span>
                                            <p class="desc">Lorem Ipsum is simply dummy text of the printing...</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- Categories widget-->

                    <div class="widget mercado-widget widget-product">
                        <h2 class="widget-title">Popular Products</h2>
                        <div class="widget-content">
                            <ul class="products">
                                <li class="product-proDetails">
                                    <div class="product product-widget-style">
                                        <div class="thumbnnail">
                                            <a href="detail.html"
                                                title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                                                <figure><img
                                                        src="{{url('youtube')}}/file/images/products/{{$proDetails->image}}"
                                                        alt=""></figure>
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>{{$proDetails->name}}</span></a>
                                            <div class="wrap-price"><span
                                                    class="product-price">${{$proDetails->regular_price}}</span></div>
                                        </div>
                                    </div>
                                </li>

                                <li class="product-proDetails">
                                    <div class="product product-widget-style">
                                        <div class="thumbnnail">
                                            <a href="detail.html"
                                                title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                                                <figure><img src="{{url('youtube')}}/file/images/products/digital_17.jpg"
                                                        alt=""></figure>
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless
                                                    Omnidirectional Speaker...</span></a>
                                            <div class="wrap-price"><span class="product-price">$168.00</span></div>
                                        </div>
                                    </div>
                                </li>

                                <li class="product-proDetails">
                                    <div class="product product-widget-style">
                                        <div class="thumbnnail">
                                            <a href="detail.html"
                                                title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                                                <figure><img src="{{url('youtube')}}/file/images/products/digital_18.jpg"
                                                        alt=""></figure>
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless
                                                    Omnidirectional Speaker...</span></a>
                                            <div class="wrap-price"><span class="product-price">$168.00</span></div>
                                        </div>
                                    </div>
                                </li>

                                <li class="product-proDetails">
                                    <div class="product product-widget-style">
                                        <div class="thumbnnail">
                                            <a href="detail.html"
                                                title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                                                <figure><img src="{{url('youtube')}}/file/images/products/digital_20.jpg"
                                                        alt=""></figure>
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless
                                                    Omnidirectional Speaker...</span></a>
                                            <div class="wrap-price"><span class="product-price">$168.00</span></div>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>

                </div>
                <!--end sitebar-->

                <div class="single-advance-box col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wrap-show-advance-info-box style-1 box-in-site">
                        <h3 class="title-box">Related Products</h3>
                        <div class="wrap-products">
                            <div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-proDetailss="5"
                                data-loop="false" data-nav="true" data-dots="false"
                                data-responsive='{"0":{"proDetailss":"1"},"480":{"proDetailss":"2"},"768":{"proDetailss":"3"},"992":{"proDetailss":"3"},"1200":{"proDetailss":"5"}}'>

                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            <figure><img src="{{url('youtube')}}/file/images/products/digital_14.jpg"
                                                    width="214" height="214"
                                                    alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                        </a>
                                        <div class="group-flash">
                                            <span class="flash-proDetails new-label">new</span>
                                        </div>
                                        <div class="wrap-btn">
                                            <a href="#" class="function-link">quick view</a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional
                                                Speaker [White]</span></a>
                                        <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                    </div>
                                </div>

                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            <figure><img src="{{url('youtube')}}/file/images/products/digital_17.jpg"
                                                    width="214" height="214"
                                                    alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                        </a>
                                        <div class="group-flash">
                                            <span class="flash-proDetails sale-label">sale</span>
                                        </div>
                                        <div class="wrap-btn">
                                            <a href="#" class="function-link">quick view</a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional
                                                Speaker [White]</span></a>
                                        <div class="wrap-price"><ins>
                                                <p class="product-price">$168.00</p>
                                            </ins> <del>
                                                <p class="product-price">$250.00</p>
                                            </del></div>
                                    </div>
                                </div>

                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            <figure><img src="{{url('youtube')}}/file/images/products/digital_15.jpg"
                                                    width="214" height="214"
                                                    alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                        </a>
                                        <div class="group-flash">
                                            <span class="flash-proDetails new-label">new</span>
                                            <span class="flash-proDetails sale-label">sale</span>
                                        </div>
                                        <div class="wrap-btn">
                                            <a href="#" class="function-link">quick view</a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional
                                                Speaker [White]</span></a>
                                        <div class="wrap-price"><ins>
                                                <p class="product-price">$168.00</p>
                                            </ins> <del>
                                                <p class="product-price">$250.00</p>
                                            </del></div>
                                    </div>
                                </div>

                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            <figure><img src="{{url('youtube')}}/file/images/products/digital_11.jpg"
                                                    width="214" height="214"
                                                    alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                        </a>
                                        <div class="group-flash">
                                            <span class="flash-proDetails bestseller-label">Bestseller</span>
                                        </div>
                                        <div class="wrap-btn">
                                            <a href="#" class="function-link">quick view</a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional
                                                Speaker [White]</span></a>
                                        <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                    </div>
                                </div>

                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            <figure><img src="{{url('youtube')}}/file/images/products/digital_21.jpg"
                                                    width="214" height="214"
                                                    alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                        </a>
                                        <div class="wrap-btn">
                                            <a href="#" class="function-link">quick view</a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional
                                                Speaker [White]</span></a>
                                        <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                    </div>
                                </div>

                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            <figure><img src="{{url('youtube')}}/file/images/products/digital_13.jpg"
                                                    width="214" height="214"
                                                    alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                        </a>
                                        <div class="group-flash">
                                            <span class="flash-proDetails sale-label">sale</span>
                                        </div>
                                        <div class="wrap-btn">
                                            <a href="#" class="function-link">quick view</a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional
                                                Speaker [White]</span></a>
                                        <div class="wrap-price"><ins>
                                                <p class="product-price">$168.00</p>
                                            </ins> <del>
                                                <p class="product-price">$250.00</p>
                                            </del></div>
                                    </div>
                                </div>

                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            <figure><img src="{{url('youtube')}}/file/images/products/digital_14.jpg"
                                                    width="214" height="214"
                                                    alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                        </a>
                                        <div class="group-flash">
                                            <span class="flash-proDetails new-label">new</span>
                                        </div>
                                        <div class="wrap-btn">
                                            <a href="#" class="function-link">quick view</a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional
                                                Speaker [White]</span></a>
                                        <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                    </div>
                                </div>

                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            <figure><img src="{{url('youtube')}}/file/images/products/digital_15.jpg"
                                                    width="214" height="214"
                                                    alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                        </a>
                                        <div class="group-flash">
                                            <span class="flash-proDetails bestseller-label">Bestseller</span>
                                        </div>
                                        <div class="wrap-btn">
                                            <a href="#" class="function-link">quick view</a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional
                                                Speaker [White]</span></a>
                                        <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--End wrap-products-->
                    </div>
                </div>

            </div>
            <!--end row-->

        </div>
        <!--end container-->

    </main>
</div>
