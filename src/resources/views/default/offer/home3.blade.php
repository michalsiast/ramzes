@foreach($items as $item)
    <div class="col-lg-12 shaf-item" style="margin-bottom: 15px;" data-groups='["{{$item->offer_category_id}}" ]'>
        <div class="popular-item-box">
            <div class="popular-inner-box">
                <div class="popular-item-box-text">
                    <h3>{{$item->title}}</h3>
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
                            <h3>@if(!empty($item->price_min))<span style="padding-right: 20px; white-space: nowrap;">@if($item->price_min_label_active === 1) Mała: @endif {{$item->price_min}}zł</span>@endif @if(!empty($item->price_average))<span style="padding-right: 20px; white-space: nowrap;">@if($item->price_average_label_active === 1) Średnia: @endif {{$item->price_average}}zł</span>@endif @if(!empty($item->price_max))<span style="white-space: nowrap;">@if($item->price_max_label_active === 1) Familijna:@endif  {{$item->price_max}}zł</span>@endif</h3>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endforeach