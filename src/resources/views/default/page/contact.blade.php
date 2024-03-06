@extends('default.layout')
@section('content')
{{--    @include('default.subheader', ['pageName' => $page->name])--}}
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
{{--    @include('default.form.contact_form')--}}
    <section class="contact-us s-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="contact-us-head">
                        <h2>Dane kontaktowe</h2>
                    </div>

                    <div class="contact-us-item">
                        <div class="contact-us-inner">
                            <div class="icon">
                                    <span>
                                        <svg width="80" height="80" viewBox="0 0 80 80" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M63.4375 4.84375H44.6875C35.642 4.84375 28.2812 12.2045 28.2812 21.25C28.2812 29.5012 34.4039 36.3494 42.3438 37.4892V44.6875C42.3438 45.635 42.9136 46.4911 43.7903 46.8527C44.6548 47.2134 45.6689 47.02 46.3447 46.3445L55.033 37.6562H63.4375C72.483 37.6562 80 30.2955 80 21.25C80 12.2045 72.483 4.84375 63.4375 4.84375ZM44.6875 23.5934C43.3928 23.5934 42.3438 22.5441 42.3438 21.2497C42.3438 19.9553 43.3928 18.9059 44.6875 18.9059C45.9819 18.9059 47.0312 19.9553 47.0312 21.2497C47.0312 22.5441 45.9819 23.5934 44.6875 23.5934ZM54.0625 23.5934C52.7678 23.5934 51.7188 22.5441 51.7188 21.2497C51.7188 19.9553 52.7678 18.9059 54.0625 18.9059C55.3569 18.9059 56.4062 19.9553 56.4062 21.2497C56.4062 22.5441 55.3569 23.5934 54.0625 23.5934ZM63.4375 23.5934C62.1428 23.5934 61.0938 22.5441 61.0938 21.2497C61.0938 19.9553 62.1428 18.9059 63.4375 18.9059C64.7319 18.9059 65.7812 19.9553 65.7812 21.2497C65.7812 22.5441 64.7319 23.5934 63.4375 23.5934Z"
                                                fill="#cfae2b" />
                                            <path
                                                d="M52.6562 75.1562C56.5334 75.1562 59.6875 72.0022 59.6875 68.125V58.75C59.6875 57.7406 59.042 56.8456 58.0853 56.5275L44.0558 51.84C43.3691 51.6089 42.6184 51.7141 42.0142 52.1123L36.0495 56.088C29.7323 53.0759 22.2366 45.58 19.2244 39.2628L23.2 33.2981C23.6005 32.6961 23.7013 31.9431 23.4723 31.2566L18.7848 17.227C18.4669 16.2705 17.5719 15.625 16.5625 15.625H7.03125C3.15406 15.625 0 18.7461 0 22.6233C0 49.6267 25.6528 75.1562 52.6562 75.1562Z"
                                                fill="#90791e" />
                                        </svg>
                                    </span>
                            </div>

                            <div class="text">
                                <h5>Zadzwoń do nas</h5>
                                @if(!empty(getConstField('phone')))
                                    <a href="tel:{{str_replace(' ', '', getConstField('phone'))}}"><p>Tel: {{getConstField('phone')}}</p></a>
                                @endif
                                @if(!empty(getConstField('phone2')))
                                    <a href="tel:{{str_replace(' ', '', getConstField('phone2'))}}"><p>Tel: {{getConstField('phone2')}}</p></a>
                                @endif
                                @if(!empty(getConstField('phone3')))
                                    <a href="tel:{{str_replace(' ', '', getConstField('phone3'))}}"><p>Tel: {{getConstField('phone3')}}</p></a>
                                @endif

                            </div>
                        </div>
                    </div>
                    <div class="contact-us-item">
                        <div class="contact-us-inner">
                            <div class="icon">
                                    <span>
                                        <svg width="82" height="66" viewBox="0 0 82 66" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M59.6871 14.9219H5C2.23858 14.9219 0 17.1605 0 19.9219V66.0003L14.9218 58.5394H59.6871V14.9219Z"
                                                fill="#cfae2b" />
                                            <path
                                                d="M25.6562 0H81.4912V53.3741L64.8477 43.9224H20.6562V5C20.6562 2.23858 22.8948 0 25.6562 0Z"
                                                fill="#90791e" />
                                            <rect opacity="0.7" x="5.73438" y="0.574219" width="8.50744"
                                                  height="8.03481" fill="#cfae2b" />
                                        </svg>
                                    </span>
                            </div>

                            <div class="text text-two ">
                                <h5>Napisz do nas</h5>
                                @if(!empty(getConstField('email')))
                                    <a href="tel:{{str_replace(' ', '', getConstField('email'))}}"><p>Email: {{getConstField('email')}}</p></a>
                                @endif


                            </div>
                        </div>
                    </div>

                </div>


                <div class="col-lg-7 col-md-6">
                    <div class="map-section">
                        <div class="container">
                            <div class="rwo">
                                <div class="col-lg-12">
                                    <div>
                                        <iframe src="{{getConstField('google_map_iframe')}}" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>

    <!-- contact part end  -->


<div class="map-section" style="display: none">
    <div class="container">
        <div class="rwo">
            <div class="col-lg-12">
                <div>
                    <iframe src="{{getConstField('google_map_iframe')}}" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- map part start  -->


@endsection
