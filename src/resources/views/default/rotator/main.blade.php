<div class="mainRotator">
    @if($rotator->arrows)
        <button class="prev"> ❰</button>
    @endif
    <div class="mainRotator__items banner-two" id="rotator{{$rotator->id}}">
        @foreach($rotator->gallery->items as $item)
            <div class="mainRotator__item"
                 style="background-image: url('{{renderImage($item->url, 1920, 700, `fit`)}}')">
                <div class="mainRotator__itemBody banner-two-taitel">
                    <img class="mainRotator__itemBody--image-logo" src="{{asset('images/logo.png')}}" alt="logo">
                    <h1>{!! $item->text !!}</h1>
                </div>
            </div>
        @endforeach
    </div>
    @if($rotator->arrows)
        <button class="next"> ❱</button>
    @endif
</div>
@push('scripts.body.bottom')
    <script>
        $('#rotator{{$rotator->id}}').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: {{$rotator->time ?? 3000}},
            speed: {{$rotator->speed ?? 500}},
            arrows: {{$rotator->arrows ? 'true' : 'false'}},
            dots: {{$rotator->pager ? 'true' : 'false'}},
            prevArrow: $('.prev'),
            nextArrow: $('.next'),
            pauseOnHover: false
        });
    </script>
@endpush
