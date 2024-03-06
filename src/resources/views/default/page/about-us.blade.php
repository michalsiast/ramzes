@extends('default.layout')
@section('content')
    <div class="inner-banner" style="background: url({{ renderImage($page->galleryCover(), 1900, 500, 'cover') }}) no-repeat center/cover">
        <div class="container">
            <div class="row  ">
                <div class="col-lg-12">
                    <div class="inner-banner-head">
                        <h1>{{$page->name}}</h1>
                    </div>

                    <div class="inner-banner-item">
                        <div class="left">
                            <a href="/">Strona główna</a>
                        </div>
                        <div class="icon">
                                <span>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 7L14 12L10 17" stroke="#E5E6EB" stroke-width="2"
                                              stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                        </div>
                        <div class="left">
                            <span>{{$page->name}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="about-us s-padding">
        <div class="container">
            <div class="row align-items-center ">
                <div class="col-lg-6 ">
                    <div class="about-us-img">
                        <img src="{{asset('images/about-thumb.png')}}" class="w-100" alt="thumb">
                        <div class="about-us-img-btn-img">
                            <div class="about-us-img-btn-img-main">
                                <img src="{{asset('images/Button.png')}}" alt="img">
                                <div class="about-us-img-btn-img-overlay">
                                    <h2>{{ date('Y') - 1997 }}</h2>
                                    <span>Lat</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 about-pl-45px" data-aos="fade-left">
                    <div class="about-us-head">
                        @if(!empty($fields->about_us_heading))
                            <h2>{{$fields->about_us_heading}}</h2>
                        @endif
                            @if(!empty($fields->about_us_description))
                        <h5>{!! $fields->about_us_description !!} </h5>
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

{{--    @foreach($gallery->items as $galleryItem)--}}
{{--        <img src="{{renderImage($galleryItem->url, 400, 200, 'resize')}}" alt="{{$galleryItem->name ?? ''}}">--}}
{{--    @endforeach--}}

@endsection
