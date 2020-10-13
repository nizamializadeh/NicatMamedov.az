<!--
Developer:
Nizami Alizade    nizamializade85@gmail.com
-->


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from trendytheme.net/demo/matrox/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Jun 2019 11:19:32 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="description" content="http://nidjatmamedov.com">
    <meta property="og:url" content="http://nidjatmamedov.com">
    <meta property="og:title" content="nidjatmamedov">
    <meta property="og:description" content="Nicat.Mamedov.Trainer">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Nicat Mamedov Trainer">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="http://nidjatmamedov.com">
    <meta name="twitter:title" content="Amazonbizneskurslaris">
    <meta name="twitter:description" content="http://nidjatmamedov.com">
    <meta name="twitter:creator" content="kuchessacademy ">
    <meta name="twitter:domain" content="http://nidjatmamedov.com">
    <meta name="keywords" content="kuchessacademy  Nicat Mamedov Trainer nidjatmamedov şahmat kurslari chees academy">

    <title>Nicat Mamedov</title>

    <link rel="shortcut icon" href="">

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="">
    <link rel="apple-touch-icon-precomposed" href="">
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,700,900' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


    <link href="{{asset('site/assets/img/ico/favicon.png')}}" rel="stylesheet" />
    <link href="{{asset('site/assets/img/ico/apple-touch-icon-144-precomposed.png')}}" rel="stylesheet" />
    <link href="{{asset('site/assets/img/ico/apple-touch-icon-114-precomposed.png')}}" rel="stylesheet" />
    <link href="{{asset('site/assets/img/ico/apple-touch-icon-72-precomposed.png')}}" rel="stylesheet" />
    <link href="{{asset('site/assets/img/ico/apple-touch-icon-57-precomposed.png')}}" rel="stylesheet" />


    <link href="{{asset('site/assets/fonts/iconfont/material-icons.css')}}" rel="stylesheet" />




    <link href="{{asset('site/assets/fonts/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />

    <link href="{{asset('site/assets/magnific-popup/magnific-popup.css')}}" rel="stylesheet" />


    <link href="{{asset('site/assets/css/animated-headline.css')}}" rel="stylesheet" />

    <link href="{{asset('site/assets/owl.carousel/assets/owl.carousel.css')}}" rel="stylesheet" />

    <link href="{{asset('site/assets/owl.carousel/assets/owl.theme.default.min.css')}}" rel="stylesheet" />
    <link href="{{asset('site/assets/flexSlider/flexslider.css')}}" rel="stylesheet" />


    <link href="{{asset('site/assets/materialize/css/materialize.min.css')}}" rel="stylesheet" />

    <link href="{{asset('site/assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />

    <link href="{{asset('site/assets/css/shortcodes/shortcodesae52.css?v=5')}}" rel="stylesheet" />

    <link href="{{asset('site/styleae52.css?v=5')}}" rel="stylesheet" />





    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>


    <![endif]-->
</head>
<body id="top" class="has-header-search">

<header id="header" class="tt-nav transparent-header ">
    <div class="header-sticky semi-transparent">
        <div class="container">

            <div id="materialize-menu" class="menuzord">

                <a href="/" class="logo-brand">
                    <img src="site/assets/img/logo-white.png" alt="" />
                </a>


                <ul class="menuzord-menu pull-right light">
                    <li class="">
                        <a href="/">Ana səhifə</a>
                    </li>
                    <li>
                        <a href="about">Haqqımızda</a>


                        </a>

                    </li>
                    <li> <a href="history">Şahmat</a>
                        <ul class="dropdown">
                            @foreach($histories as $history)
                                <li><a href="chesshistory{{$history->id}}">{{$history->nav}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li>
                        <a href="portfolio">Portfolio</a>


                    </li>
                    <li><a href="gallery">Qalereya</a>
                    </li>

                    <li>
                        <a href="blog">Xəbərlər</a>


                    </li>
                    <li>
                        <a href="faq">Suallar</a>


                    </li>
                    <li>
                        <a href="contact">Əlaqə</a>

                    </li>



                </ul>

            </div>
        </div>
    </div>
</header>

@yield('content')




<footer class="footer footer-three">
    <div class="primary-footer brand-bg">
        <div class="container">
            <a href="#top" class="page-scroll btn-floating btn-large pink back-top waves-effect waves-light tt-animate btt" data-section="#top">
                <i class="material-icons">&#xE316;</i>
            </a>
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="footer-logo">
                        <img src="site/assets/img/logo-white.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="secondary-footer brand-bg">
        <div class="container">
            <hr class="mb-20">
            <div class="row">
                <div class="col-md-6">
                    <span class="copy-text">Copyright &copy; 2019 &nbsp; | &nbsp; All Rights Reserved &nbsp; | &nbsp; Site by <a target="_blank" href="https://www.facebook.com/Nizamializadah
">Nizami Alizade</a></span>
                </div>
                <div class="col-md-6">
                    <ul class="social-link tt-animate ltr">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>


{{--<div id="preloader">--}}
    {{--<div class="preloader-position">--}}
        {{--<img src="site/assets/img/logo-colored.png" alt="logo">--}}
        {{--<div class="progress">--}}
            {{--<div class="indeterminate"></div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}


<script src="{{asset('site/assets/js/jquery-2.1.3.min.js')}}"></script>
<script src="{{asset('site/assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('site/assets/js/jquery.magnific-popup.min.js')}}"></script>

<script src="{{asset('site/assets/materialize/js/materialize.min.js')}}"></script>
<script src="{{asset('site/assets/js/menuzord.js')}}"></script>
<script src="{{asset('site/assets/js/jquery.easing.min.js')}}"></script>
<script src="{{asset('site/assets/js/jquery.sticky.min.js')}}"></script>
<script src="{{asset('site/assets/js/smoothscroll.min.html')}}"></script>
<script src="{{asset('site/assets/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('site/assets/js/imagesloaded.js')}}"></script>
<script src="{{asset('site/assets/js/jquery.inview.min.js')}}"></script>
<script src="{{asset('site/assets/js/animated-headline.js')}}"></script>
<script src="{{asset('site/assets/js/jquery.shuffle.min.js')}}"></script>
<script src="{{asset('site/assets/owl.carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('site/assets/flexSlider/jquery.flexslider-min.js')}}"></script>
<script src="{{asset('site/assets/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('site/assets/js/gallery.js')}}"></script>
<script src="{{asset('site/assets/js/jquery.shuffle.min.js')}}"></script>
<script src="{{asset('site/assets/js/bootstrap-tabcollapse.min.js')}}"></script>
<script src="{{asset('site/assets/js/equalheight.js')}}"></script>
<script src="{{asset('site/assets/js/jquery.shuffle.min.js')}}"></script>
<script src="{{asset('site/assets/js/twitterFetcher.min.js')}}"></script>
<script src="{{asset('site/assets/js/scriptsae52.js?v=5')}}"></script>













</body>

<!-- Mirrored from trendytheme.net/demo/matrox/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Jun 2019 11:19:34 GMT -->
</html>