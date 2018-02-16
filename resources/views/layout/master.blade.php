
<!DOCTYPE html>
<html lang="en" >

<!-- Mirrored from www.bigto.in/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Feb 2018 16:07:21 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    @include('partials.header.head')
</head>
<div id="focus-overlay" style="display: none"></div>
<body class='light' id="body">


<a href="#body" id="back-to-top"><i class="zmdi zmdi-chevron-up"></i></a>
@include('partials.navigation.nav')

<style>.other-header{display:none}</style>
@include('partials.header.header')

<section class="under-head-cont main-index-top" style="background-image:url(themes/infinity/img/back.jpg);">

@section('main-content')

    @show

@include('partials.footer.footer')

    <script type="text/javascript">
        var lang={"del":"Delete","url":"URL","count":"Country","copied":"Copied","geo":"Geotargeting data for","error":"Please enter a valid URL.","success":"URL has been successfully shortened. Click Copy or CRTL+C to Copy it.","stats":"You can access the statistic page via this link","copy":"Copied to clipboard.","from":"Redirect from","to":"Redirect to","share":"Share this on","congrats":"Congratulation! Your URL has been successfully shortened. You can share it on Facebook or Twitter by clicking the links below.","qr":"Copy QR Code","continue":"Continue"};
    </script>

    <script type="text/javascript" src="{{ url('themes/infinity/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('themes/infinity/js/application.fn.js') }}"></script>
    <script type="text/javascript" src="{{ url('themes/infinity/js/application.js') }}"></script>
    <script type="text/javascript" src="{{ url('themes/infinity/js/server.js') }}"></script>
    <script type="text/javascript" src="{{ url('themes/infinity/js/snackbar.min.js') }}"></script>
    <script type="text/javascript">
        $(window).on("scroll", function() {
            if($(window).scrollTop() > 50) {
                $("header").addClass("activehead");
            } else {
                //remove the background property so it comes transparent again (defined in your css)
                $("header").removeClass("activehead");
            }
        });

        function In_headerFunction() {
            var element = $("header");
            element.toggleClass("activeheadmenu2");
        }

        function In_ShowPosInfo() {
            $(".short-adv-sett").fadeIn(100);
            $(".main-index-top #main-form .main-options").slideDown(100);
        }

        //Custom Link Modal
        var $modallink = $('.link-shared'),
            $overlaylink = $('.overlaylink'),
            $showModallink = $('.show-modal'),
            $closelink = $('.closelink');

        function In_ShowLinkModal(){
            e.preventDefault();

            var windowHeight = $(window).height(),
                windowWidth = $(window).width(),
                modalWidth = windowWidth/2; //50% of window

            $overlaylink.show();
            $modallink.css({
                'width' : modalWidth,
                'margin-left' : -modalWidth/2
            });
        }

        $closelink.on('click', function(){
            $overlaylink.hide();
        });

        //Sidebar Menu
        $(document).on('click','.quicklinks-toggle__btn',function(){

            $('#focus-overlay').fadeIn(100);
            $('section .sidebar').css('zIndex',999999);
            $('section .sidebar').fadeIn(100);
        });

        $('#focus-overlay').on('click',function (){
            $(this).fadeOut(200);
            $('section .sidebar').css('display','none');

        });

        $(document).ready(function(){
            $("#widget_news h3").append(" <i class='zmdi zmdi-info' style='color: #00BCD4;'></i>");
            $("#widget_activities h3").append(" <i class='zmdi zmdi-swap-vertical-circle' style='color: #ff9800;'></i>");
            $("#widget_top_urls h3").append(" <i class='zmdi zmdi-trending-up' style='color: #4caf50;'></i>");
            $("#splash h3, #splash_create h3").append(" <i class='zmdi zmdi-info' style='color: #673ab7;'></i>");
            $("#overlay h3").append(" <i class='zmdi zmdi-info' style='color: #4CAF50;'></i>");
            $("#widget_tools h3").append(" <i class='zmdi zmdi-wrench' style='color: #9c27b0;'></i>");
            $("#widget_export h3").append(" <i class='zmdi zmdi-hourglass-alt' style='color: #4CAF50;'></i>");
        });

        //Smooth Scroll
        $('a[href*="#"]').not('[href="#"]').not('[href="#0"]').click(function(t){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var e=$(this.hash);(e=e.length?e:$("[name="+this.hash.slice(1)+"]")).length&&(t.preventDefault(),$("html, body").animate({scrollTop:e.offset().top},1e3,function(){var t=$(e);if(t.focus(),t.is(":focus"))return!1;t.attr("tabindex","-1"),t.focus()}))}})
    </script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>

</html>