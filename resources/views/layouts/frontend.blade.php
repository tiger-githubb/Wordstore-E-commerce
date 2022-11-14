<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="images/favicon.png" rel="shortcut icon">
    <title>World Store - Électronique, vêtements, ordinateurs, livres et plus</title>

    <!--====== Google Font ======-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">

    <!--====== Vendor Css ======-->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/vendor.css')}}">

    <!--====== Utility-Spacing ======-->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/utility.css')}}">

    <!--====== App ======-->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/app.css')}}">


    <!-- Template Stylesheet -->
    @yield('style')
</head>

<body class="config">
    <div class="preloader is-active">
        <div class="preloader__wrap">

            <img class="preloader__img" src="images/preloader.png" alt="">
        </div>
    </div>

    <!--====== Main App ======-->
    <div id="app">
        <div class="fixed-list">
            <ul class="nav" id="init-scrollspy" style="border: solid 2px ; border-color:#ff450047;">
                <li>
                    <a class="nav-link" href="#electronic-01" data-click-scroll="#electronic-01"><i class="fas fa-tv"></i></a>
                </li>
                <li>
                    <a class="nav-link" href="#female-02" data-click-scroll="#female-02"><i class="fas fa-female"></i></a>
                </li>
                <li>
                    <a class="nav-link" href="#male-03" data-click-scroll="#male-03"><i class="fas fa-male"></i></a>
                </li>
                <li>
                    <a class="nav-link"><i class="fas fa-fighter-jet"></i></a>
                </li>
                <li>
                    <a class="nav-link"><i class="fas fa-cookie-bite"></i></a>
                </li>
                <li>
                    <a class="nav-link"><i class="fas fa-futbol"></i></a>
                </li>
                <li>
                    <a class="nav-link"><i class="fas fa-book-open"></i></a>
                </li>
                <li>
                    <a class="nav-link"><i class="fas fa-briefcase-medical"></i></a>
                </li>
            </ul>
        </div>

        @include('components.frontend.header')

        <!--====== App Content ======-->
        <div class="app-content">
            @yield('content')
        </div>
        <!--====== End - Main App ======-->


        <!--====== Google Analytics: change UA-XXXXX-Y to be your site's ID ======-->
        <script>
            window.ga = function() {
                ga.q.push(arguments)
            };
            ga.q = [];
            ga.l = +new Date;
            ga('create', 'UA-XXXXX-Y', 'auto');
            ga('send', 'pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>

        <!--====== Vendor Js ======-->
        <script src="{{ asset('assets/frontend/js/vendor.js')}}"></script>

        <!--====== jQuery Shopnav plugin ======-->
        <script src="{{ asset('assets/frontend/js/jquery.shopnav.js')}}"></script>

        <!--====== App ======-->
        <script src="{{ asset('assets/frontend/js/app.js')}}"></script>

        @yield('script')

        <!--====== Noscript ======-->
        <noscript>
            <div class="app-setting">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="app-setting__wrap">
                                <h1 class="app-setting__h1">JavaScript is disabled in your browser.</h1>

                                <span class="app-setting__text">Please enable JavaScript in your browser or upgrade to a
                                    JavaScript-capable browser.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </noscript>
</body>

</html>