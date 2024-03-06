@extends('default.layout')
@section('content')
{{--{!! getPhoneLink('phone', 'phone', '<b>icon</b> ') !!}--}}
{{--{!! getEmailLink('email', 'email',  '<b>icon</b> ') !!}--}}
{{--    <span style="display: block">{!! getAddressString() !!}</span>--}}
{{--    <span style="display: block">{!! getFooterCreator() !!}</span>--}}

    @include('default.rotator.base', ['id_rotator' => $fields->rotator, 'type' => 'main'])
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

<div class="promotions promotions-two">
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

<section class="traditional s-padding" style="background-image: url({{asset('images/traditional-bg.png')}})">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                @if(!empty($fields->menu_heading))
                    <div class="traditional-head">
                        <h2>{{$fields->menu_heading}}</h2>
                    </div>
                @endif
            </div>
        </div>

        <!-- Grid Tab -->
        <div class="tab-pane fade show in active" id="grid" role="tabpanel">
            <!-- Filter Title -->
            @include('default.offer.category.home')
            <!-- Filter Title -->
            <!-- Filter Content -->
            <div class="row shafull-container">
                @include('default.offer.home2')
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="traditional-btn">
                        <a href="{{route('offer.index')}}" class="main-btn-four">Zobacz więcej</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="process s-padding" style="background-image: url({{ asset('images/Process-bg.png')}})">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 " data-aos="fade-right">
                <div class="process-img-box">
                    <div class="process-img">
                        <img src="{{ asset('images/zamow_u_nas.jpg')}}" alt="thumb" style="object-fit: cover">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                @if(!empty($fields->ordering_process_heading))
                    <div class="process-head" data-aos="fade-up">
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
