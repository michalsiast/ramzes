@foreach($items as $item)
    <div class="col-lg-12 shaf-item" style="margin-bottom: 15px;" data-groups='["{{$item->offer_category_id}}" ]'>
        <div class="popular-item-box">
            <div class="popular-inner-box">
                <div class="popular-item-box-text">
                    @if($item->vegan_active === 1)
                        <h3 style="color: #44c744;">{{$item->title}}</h3>
                    @elseif($item->sharp_active === 1)
                        <h3 style="color: #ed1c24;">{{$item->title}}</h3>
                        @elseif($item->kids_active === 1)
                        <h3 style="color: #FFB6C1;">{{$item->title}} <i class="fa-solid fa-children" style="margin-left: 10px"></i></h3>
                    @else
                        <h3>{{$item->title}}</h3>
                    @endif
                </div>
                @if(!empty($item->text))
                <div class="popular-inner-item">
                    <div class="text">
                        <h5>{!! $item->text !!}</h5>
                    </div>
                </div>
                @endif
                @if(!empty($item->price_min) || !empty($item->price_max) || !empty($item->price_average))
                    <div class="popular-inner-item-btm">
                        <div class="text">
                            <h3>@if(!empty($item->price_min))<span style="padding-right: 20px; white-space: nowrap;">@if($item->price_min_label_active === 1) Mała (22cm): @endif {{$item->price_min}}zł</span>@endif @if(!empty($item->price_average))<span style="padding-right: 20px; white-space: nowrap;">@if($item->price_average_label_active === 1) Średnia (30cm): @endif {{$item->price_average}}zł</span>@endif @if(!empty($item->price_max))<span style="white-space: nowrap;">@if($item->price_max_label_active === 1) Familijna (40cm):@endif  {{$item->price_max}}zł</span>@endif</h3>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endforeach
