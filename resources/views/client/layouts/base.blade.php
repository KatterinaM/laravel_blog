<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Adamina' rel='stylesheet' type='text/css'>
    <script src="js/jquery-1.6.3.min.js" type="text/javascript"></script>
    <script src="js/cufon-yui.js" type="text/javascript"></script>
    <script src="js/cufon-replace.js" type="text/javascript"></script>
    <script src="js/Lobster_13_400.font.js" type="text/javascript"></script>
    <script src="js/NewsGoth_BT_400.font.js" type="text/javascript"></script>
    <script src="js/FF-cash.js" type="text/javascript"></script>
    <script src="js/easyTooltip.js" type="text/javascript"></script>
    <script src="js/script.js" type="text/javascript"></script>
    <script src="js/bgSlider.js" type="text/javascript"></script>
    <script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
    <script src="js/tms-0.3.js" type="text/javascript"></script>
    <script src="js/tms_presets.js" type="text/javascript"></script>

    @section ('head_styles')
    @show

    <!--[if lt IE 7]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
            <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
    </div>
    <![endif]-->

    <!--[if lt IE 9]>
    <script type="text/javascript" src="js/html5.js"></script>
    <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
    <![endif]-->

    @section('head_scripts')
    @show
</head>

    <body>
        <div id="bgSlider"></div>
        <div class="bg_spinner"></div>
        <div class="extra">
            @yield('header_logo')

            @yield('search_panel')

            @section('header_menu')
                @show

            @yield('content')
        </div>
            @yield('footer_links')

            @yield('footer_copy')

            @section('app_scripts')

                <script type="text/javascript"> Cufon.now(); </script>
                <script type="text/javascript">
                    {(window)}.load(function() {
                        {('.slider')}._TMS({
                            duration:1000,
                            easing:'easeOutQuart',
                            preset:'simpleFade',
                            slideshow:10000,
                            banners:'fade',
                            pauseOnHover:true,
                            waitBannerAnimation:false,
                            pagination:'.pags'
                        });
                    });
                </script>

            @endsection
    </body>
</html>