@foreach($items as $item)
{{--    <li>--}}
{{--        <a href="{{route('offer.show.'.$item->id)}}">{{$item->title}}</a>--}}
{{--        {{$item->price_min}}-{{$item->price_max}}zł--}}
{{--        {!! $item->text !!}--}}
{{--    </li>--}}
    <div class="col-lg-4 col-md-6 shaf-item res-mb-20px  "
         data-groups='["{{$item->offer_category_id}}" ]'>
        <div class="featured-item  " data-aos="fade-up">
            <div class="featured-item-text">
                <div class="text-item">
                    <div class="left">
                        @if(!empty($item->price_min) && empty($item->price_max) && empty($item->price_average)) {{-- Tylko price_min jest dostępne --}}
                        <h3>{{$item->price_min}}zł</h3>
                        @elseif(empty($item->price_min) && !empty($item->price_max) && empty($item->price_average)) {{-- Tylko price_max jest dostępne --}}
                        <h3>{{$item->price_max}}zł</h3>
                        @elseif(empty($item->price_min) && empty($item->price_max) && !empty($item->price_average)) {{-- Tylko price_average jest dostępne --}}
                        <h3>{{$item->price_average}}zł</h3>
                        @elseif(empty($item->price_max) && !empty($item->price_min)) {{-- price_max jest puste, ale price_min jest dostępne --}}
                        <h3>{{$item->price_min}}-{{$item->price_average}}zł</h3>
                        @elseif(empty($item->price_min) && !empty($item->price_max)) {{-- price_min jest puste, ale price_max jest dostępne --}}
                        <h3>{{$item->price_average}}-{{$item->price_max}}zł</h3>
                        @else {{-- Wszystkie wartości są dostępne --}}
                        <h3>{{$item->price_min}}-{{$item->price_max}}zł</h3>
                        @endif
                    </div>
                </div>
                <div class="text-item-center">
                    <h3><a href="{{route('offer.show.'.$item->id)}}">{{$item->title}}</a></h3>
                </div>
                <div class="text-item-center-item-box">
                    <div class="text-item-center-item">
                        <div class="text">
                            <h5>{!! $item->text !!}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
