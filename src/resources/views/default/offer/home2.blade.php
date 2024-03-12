@php
    $excludedIds = [2, 3, 4, 6, 5]; // ID do wykluczenia
    $counters = []; // Tablica do zliczania elementów dla każdej kategorii
@endphp

@foreach($items as $item)
    @if(!in_array($item->id, $excludedIds))
        @php
            // Inicjalizacja licznika dla kategorii, jeśli jeszcze nie istnieje
            if (!isset($counters[$item->offer_category_id])) {
                $counters[$item->offer_category_id] = 0;
            }
        @endphp

        @if($counters[$item->offer_category_id] < 6)
    <div class="col-lg-4 col-md-6 shaf-item res-mb-20px  "
         data-groups='["{{$item->offer_category_id}}"]'>
        <div class="featured-item">
            <div class="featured-item-text">
                @if(!empty($item->price_min) || !empty($item->price_max) || !empty($item->price_average))
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
                @endif
                <div class="text-item-center">
                    <h3><a href="{{route('offer.index')}}">{{$item->title}}</a></h3>
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
    @php $counters[$item->offer_category_id]++; @endphp {{-- Inkrementacja licznika dla kategorii --}}
        @endif
    @endif
@endforeach
