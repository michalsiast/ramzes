@foreach($items as $item)
    <div class="col-lg-3 col-md-6 res-mb-20px" data-aos="fade-right">
        <div class="categories-item  ">
                <div class="categories-icon">
                    <div class="icon">
                        <span>
                            <img src="{{ renderImage($item->galleryCover(), 45, 45, 'resize') }}" alt="">
                        </span>
                    </div>
                </div>
                <div class="categories-item-text">
                    <h3><a style="color: #000;" href="{{route('offer_category.show.' . $item->id )}}">{{$item->title}}</a></h3>
                    {{--                <h4>Produktów</h4>--}}
                </div>
        </div>
    </div>
@endforeach


