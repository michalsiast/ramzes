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

    <section class="food-details  traditional">
        <div class="container">
            <div class="row tab-pane fade show in active" role="tabpanel">
                <div class="col-lg-4">
                    @include('default.offer.category.home3')
                </div>
                <div class="col-lg-8">
                    <div class="row popular-item-box-mt shafull-container-menu">
                        @include('default.offer.home3')
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
