<!doctype html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {!! SEOMeta::generate() !!}

    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('image/favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('image/favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('image/favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('image/favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('image/favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('image/favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('image/favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('image/favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('image/favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('image/favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('image/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('image/favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('image/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('image/favicon//manifest.json')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/venobox.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


    <link href="{{asset('css/vendors/bootstrap.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link href="{{asset('css/main.css')}}?version=1" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simplelightbox/2.10.3/simple-lightbox.min.css" integrity="sha512-Ne9/ZPNVK3w3pBBX6xE86bNG295dJl4CHttrCp3WmxO+8NQ2Vn8FltNr6UsysA1vm7NE6hfCszbXe3D6FUNFsA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script>
        const BASE_URL = '{{url()->to('/')}}/';
        const CSRF_TOKEN = '{{csrf_token()}}';
        const SITE_LANG = '{{app()->getLocale()}}';
    </script>

    @stack('scrips.head.bottom')
</head>
<body>

<header class="header  header-two  ">
<nav class="menu-bg ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="nav-main">
                        <div class="nav-main justify-content-between w-100">
                            <div class="logo">
                                @if(!empty(getConstField('phone')))
                                    <h4 class="logo_heading" style="font-size: 25px; font-width: 800;"><a href="tel:{{str_replace(' ', '', getConstField('phone'))}}">{{getConstField('phone')}}</a></h4>
                                @endif
                                @if(!empty(getConstField('phone2')))
                                    <br><h4 class="logo_heading" style="font-size: 25px; font-width: 800;"><a href="tel:{{str_replace(' ', '', getConstField('phone2'))}}">{{getConstField('phone2')}}</a></h4>
                                @endif
                                @if(!empty(getConstField('phone3')))
                                    <br><h4 class="logo_heading" style="font-size: 25px; font-width: 800;"><a href="tel:{{str_replace(' ', '', getConstField('phone3'))}}">{{getConstField('phone3')}}</a></h4>
                                @endif
                                @if(!empty(getConstField('email')))
                                    <br><h4 class="logo_heading" style="font-size: 19px; font-width: 500;"><a href="tel:{{str_replace(' ', '', getConstField('email'))}}">{{getConstField('email')}}</a></h4>
                                @endif
                            </div>
                            <div class="menu">
                                @include('default.nav_item.main', ['name' => 'main'])
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

<!-- mobile navigation start -->
<header class="mobile-header">
    <div class="container-full">
        <div class="mobile-header__container">
            <div class="p-left">
                <div class="logo" style="padding-left: 10px">
                    @if(!empty(getConstField('phone')))
                        <h4 class="logo_heading" style="font-size: 25px; font-width: 800;"><a href="tel:{{str_replace(' ', '', getConstField('phone'))}}">{{getConstField('phone')}}</a></h4>
                    @endif
                    @if(!empty(getConstField('phone2')))
                        <br><h4 class="logo_heading" style="font-size: 25px; font-width: 800;"><a href="tel:{{str_replace(' ', '', getConstField('phone2'))}}">{{getConstField('phone2')}}</a></h4>
                    @endif
                    @if(!empty(getConstField('phone3')))
                        <br><h4 class="logo_heading" style="font-size: 25px; font-width: 800;"><a href="tel:{{str_replace(' ', '', getConstField('phone3'))}}">{{getConstField('phone3')}}</a></h4>
                    @endif
                    @if(!empty(getConstField('email')))
                        <br><h4 class="logo_heading" style="font-size: 19px; font-width: 500;"><a href="tel:{{str_replace(' ', '', getConstField('email'))}}">{{getConstField('email')}}</a></h4>
                    @endif
                </div>
            </div>
            <div class="p-right">
                <button id="nav-opn-btn">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
        </div>
    </div>
</header>
<aside id="offcanvas-nav">
    <nav class="m-nav">
        <button id="nav-cls-btn"><i class="fa-solid fa-xmark"></i></button>
        @include('default.nav_item.main', ['name' => 'main'])

    </nav>
</aside>
<main class="background-opacity-body">
{{--@include('default._helpers.lang_nav')--}}


@yield('content')
</main>
<footer class="footer" style="background: url({{asset('images/Footers-bg.png')}}) no-repeat center/cover">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12">
                <div class="footer-logo">
                    <div class="logo">
                        <img style="width: 250px" src="{{asset('images/logo.png')}}" alt="logo">
                    </div>
                </div>

                <div class="footer-text">
                    <h4>{{getConstField('company_description')}}</h4>
                </div>

                <div class="footer-icon">
                    <div class="icon">
                        <a href="{{getConstField('facebook')}}" target="_blank"><i
                                class="fa-brands fa-facebook-f"></i></a>
                        <a href="{{getConstField('yellow_place')}}" target="_blank"><i class="fa-solid fa-map"></i></a>
                        <a href="{{getConstField('tripadvisor')}}" target="_blank"><i class="fa-solid fa-tag"></i></a>
                    </div>
                </div>
            </div>


            <div class="col-lg-7 mol-md-12 ">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="quick-line-item">
                            <div class="quick-line-item-head">
                                <h3>Dane kontaktowe</h3>
                            </div>


                            <div class="quick-line-menu">
                                <ul>
                                    <li>
                                        @if(!empty(getConstField('phone')))
                                            <a href="tel:{{str_replace(' ', '', getConstField('phone'))}}">Tel: {{getConstField('phone')}}</a>
                                        @endif
                                    </li>
                                    <li>
                                        @if(!empty(getConstField('phone2')))
                                            <a href="tel:{{str_replace(' ', '', getConstField('phone2'))}}">Tel: {{getConstField('phone2')}}</a>
                                        @endif
                                    </li>
                                    <li>
                                        @if(!empty(getConstField('phone3')))
                                            <a href="tel:{{str_replace(' ', '', getConstField('phone3'))}}">Tel: {{getConstField('phone3')}}</a>
                                        @endif
                                    </li>
                                    <li>
                                        @if(!empty(getConstField('email')))
                                            <a href="tel:{{str_replace(' ', '', getConstField('email'))}}">Email: {{getConstField('email')}}</a>
                                        @endif
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="quick-line-item">
                            <div class="quick-line-item-head">
                                <h3>Lokalizacja</h3>
                            </div>

                            <div class="quick-line-menu">
                                <ul>
                                    @if(!empty(getConstField('company_name')))
                                        <li>
                                            <p>{{getConstField('company_name')}}</p>
                                        </li>
                                    @endif
                                    @if(!empty(getConstField('company_address')))
                                        <li>
                                            <a target="_blank" href="{{getConstField('google_map')}}">{{getConstField('company_address')}}</a>
                                        </li>
                                    @endif
                                    <li>
                                        <a target="_blank" href="{{getConstField('google_map')}}">{{getConstField('company_post_code')}} {{getConstField('company_city')}}</a>
                                    </li>
                                    @if(!empty(getConstField('opening_hours')))
                                        <li>
                                            <p>{{getConstField('opening_hours')}}</p>
                                        </li>
                                    @endif
                                        @if(!empty(getConstField('opening_hours_2')))
                                            <li>
                                                <p>{{getConstField('opening_hours_2')}}</p>
                                            </li>
                                        @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="copyright-text">
                    <h4><?php echo date("Y") ?> &copy; Wszelkie prawa zastrzeżone. Strona stworzona przez: <a href="https://palmax.com.pl"><span>Palmax</span></a></h4>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/simplelightbox/2.10.3/simple-lightbox.jquery.min.js" integrity="sha512-iJCzEG+s9LeaFYGzCbDInUbnF03KbE1QV1LM983AW5EHLxrWQTQaZvQfAQgLFgfgoyozb1fhzhe/0jjyZPYbmQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script><script src="{{asset('js/frontend.js')}}"></script>
<script src="{{asset('js/main.min.js')}}"></script>


<script src="{{asset('js/jquery-3.6.3.min.js')}}"></script>
<script src="{{asset('js/venobox.min.js')}}"></script>
<script src="{{asset('js/aos.js')}}"></script>
<script src="{{asset('js/slick.min.js')}}"></script>
<script src="{{asset('js//jquery.shuffle.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>

@stack('scripts.body.bottom')
</body>
</html>
