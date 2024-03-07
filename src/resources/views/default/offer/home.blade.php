@php
    $allowedIds = [49, 36, 28, 44]; // ID dozwolonych elementów
    $filteredItems = $items->filter(function ($item) use ($allowedIds) {
        return in_array($item->id, $allowedIds);
    });
@endphp

@foreach($filteredItems as $item)
<div class="col-lg-6 popular-item-mt-30px">
    <div class="popular-item-box">
        <div class="popular-inner-box">
            <div class="popular-item-box-text">
                <h3>{{$item->title}}</h3>
            </div>

            <div class="popular-inner-item">
                <div class="text">
                    <h5>{!! $item->text !!}</h5>
                </div>
            </div>
            <div class="popular-inner-item-btm">
                <div class="text">
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
        </div>
    </div>
</div>
@endforeach
