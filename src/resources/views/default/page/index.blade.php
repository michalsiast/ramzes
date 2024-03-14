@extends('default.layout')
@section('content')
{{--{!! getPhoneLink('phone', 'phone', '<b>icon</b> ') !!}--}}
{{--{!! getEmailLink('email', 'email',  '<b>icon</b> ') !!}--}}
{{--    <span style="display: block">{!! getAddressString() !!}</span>--}}
{{--    <span style="display: block">{!! getFooterCreator() !!}</span>--}}

    @include('default.rotator.base', ['id_rotator' => $fields->rotator, 'type' => 'main'])

@if(!empty($fields->important_message))
<div class="promotions promotions-two" style="padding-top: 80px">
    <div class="container">
            <div class="popular-head">
                <h2 class="text-center" style="color: #ed1c24; font-weight: 700; font-size: 38px">{{$fields->important_message}}</h2>
            </div>
    </div>
</div>
@endif
<section class="categories categories-two s-padding" style="background-image: url({{asset('images/categories-bg.png')}})">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6  ">
                @if(!empty($fields->category_heading))
                    <div class="categories-head">
                        <h2>{{$fields->category_heading}}</h2>
                    </div>
                @endif
            </div>

            <div class="col-lg-6">
                <div class="categories-head-btn">
                    <a href="{{route('offer.index')}}" class="main-btn">Zobacz więcej</a>
                </div>
            </div>
        </div>
        <div class="row categories-mt-48px  ">
            @include('default.offer.category.home2')
        </div>
    </div>
</section>

<div class="promotions promotions-two" style="padding-bottom: 80px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5">
                <div class="promotions-img promotions-img-two">
                    @if(!empty($fields->promo_link_1))
                    <a href="{{$fields->promo_link_1}}"> <img src="{{asset('images/promobanner.jpg')}}"
                                                       class="w-100" style="border-radius: 15px;object-fit: cover;" alt="thumb"></a>
                    @else
                        <img src="{{asset('images/promobanner.jpg')}}"
                                                                  class="w-100" style="border-radius: 15px;object-fit: cover;" alt="thumb">
                    @endif
                </div>
            </div>
            <div class="col-lg-7 col-md-7">
                <div class="promotions-img">
                    @if(!empty($fields->promo_link_2))
                        <a href="{{$fields->promo_link_2}}"> <img src="{{asset('images/promobanner_2.jpg')}}"
                                                                  class="w-100" style="border-radius: 15px;object-fit: cover;" alt="thumb"></a>
                    @else
                        <img src="{{asset('images/promobanner_2.jpg')}}"
                             class="w-100" style="border-radius: 15px;object-fit: cover;" alt="thumb">
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<div class="promotions promotions-two" style="padding-bottom: 80px;">
    <div class="container">
        @if(!empty($fields->promo_text_1))
        <div class="popular-head">
            <h2 class="text-center" style="color: #ed1c24; font-weight: 600">{{$fields->promo_text_1}}</h2>
        </div>
        @endif
            @if(!empty($fields->promo_text_2))
        <div class="popular-head">
            <h2 class="text-center" style="color: #ed1c24; font-weight: 600">{{$fields->promo_text_2}}</h2>
        </div> @endif
    </div>
</div>

<section class="process s-padding" style="background-image: url({{ asset('images/Process-bg.png')}})">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 ">
                <div class="process-img-box">
                    <div class="process-img">
                        <img src="{{ asset('images/zamow_u_nas.jpg')}}" alt="thumb" style="object-fit: cover">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                @if(!empty($fields->ordering_process_heading))
                    <div class="process-head">
                        <h2>{{$fields->ordering_process_heading}}</h2>
                    </div>
                @endif

                <div class="process-item-box">
                    @include('default.article.home')
                </div>
            </div>
        </div>
    </div>
</section>
<section class="popular s-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                @if(!empty($fields->popular_products_heading))
                    <div class="popular-head">
                        <h2>{{$fields->popular_products_heading}}</h2>
                    </div>
                @endif
            </div>
        </div>

        <div class="row popular-item-box-mt">
            @include('default.offer.home')
        </div>
    </div>
</section>


@endsection
