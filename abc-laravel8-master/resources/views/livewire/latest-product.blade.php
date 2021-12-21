<div>
  <div class="sidebar__item">
    <div class="latest-product__text">
      <h4>Latest Products</h4>
      <div class="latest-product__slider owl-carousel">
        <div class="latest-prdouct__slider__item">
          @foreach (range(0,2) as $i )
          <a href="#" class="latest-product__item">
            <div class="latest-product__item__pic">
              <img src="{{url('thumbs')}}/{{$products[$i]->anh}}" alt="">
            </div>
            <div class="latest-product__item__text">
              <h6>{{Str::limit($products[$i]->ten, 30, $end='...')}}</h6>
              <span>
                @if ($products[$i]->giaban)
                {{number_format($products[$i]->giaban,0)}} <br /> <del class="font-weight-light">
                  {{number_format($products[$i]->gia,0)}} </del>
                @else
                {{number_format($products[$i]->gia,0)}}
                @endif
              </span>
            </div>
          </a>
          @endforeach
        </div>


        <div class="latest-prdouct__slider__item">
          @foreach (range(3,5) as $i )
          <a href="#" class="latest-product__item">
            <div class="latest-product__item__pic">
              <img src="{{url('thumbs')}}/{{$products[$i]->anh}}" alt="">
            </div>
            <div class="latest-product__item__text">
              <h6>{{Str::limit($products[$i]->ten, 30, $end='...')}}</h6>
              <span>
                @if ($products[$i]->giaban)
                {{number_format($products[$i]->giaban,0)}} <br />
                <del class="font-weight-light">
                  {{number_format($products[$i]->gia,0)}}
                </del>
                @else
                {{number_format($products[$i]->gia,0)}}
                @endif </span>
            </div>
          </a>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
