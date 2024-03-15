

<section class="food-details  traditional" style="background-color: unset;">
    <div class="container">
        <div class="row tab-pane fade show in active" role="tabpanel">
            <div class="col-lg-6">
                <div class="blog-details" style="    height: 100%;">
                    <div class="latest-blog-box" style="        height: inherit;">
                        <div class="latest-blog-box-text">
                            <h3>Menu:</h3>
                        </div>

                        <ul class="latest-blog-box-item">
                            @foreach($items as $item)
                                <div class="latest-blog-box-item-inner">
                                    <div class="latest-blog-box-item-inner-text">
                                        <li class="latest-blog-box-item-inner-img"><a href="{{route('offer_category.show.' . $item->id )}}">{{$item->title}}</a></li>
                                    </div>
                                </div>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <img style="border-radius: 13px;    width: inherit;" src="{{asset('images/pizza.jpg')}}" />
            </div>
            {{--                <div class="col-lg-8">--}}
            {{--                    <div class="row popular-item-box-mt shafull-container-menu">--}}
            {{--                        @include('default.offer.home3')--}}
            {{--                    </div>--}}
            {{--                </div>--}}
        </div>
    </div>
</section>
