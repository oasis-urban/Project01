<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="description"
        content="">
    <meta property="og:url" content="http://{{url('/')}}.com/" />
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{\App\Setting\App::title ?? ''}}" />
    <meta property="og:description"
        content="{{\App\Setting\App::description}}" />
    <link rel="shortcut icon" href="{{ asset('/image/manufacturer_logo/') }}/{{\App\Setting\App::favicon}}" type="image/x-icon">  
    <link rel="stylesheet" href="{{ asset('/') }}front_asset/style.css">
    <link rel="stylesheet" href="{{ asset('/') }}front_asset/responsive.css">
    <link rel="stylesheet" href="{{ asset('/') }}front_asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}front_asset/css/normalize.css">

    <link rel="stylesheet" href="{{ asset('/') }}slider-asset/css/owl.carousel.min.css">


    <link rel="stylesheet" href="{{ asset('/') }}front_asset/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('/') }}front_asset/css/etalage.css">
    <link rel="stylesheet" href="{{ asset('/') }}front_asset/css/socialbtn.css">


    <link rel="stylesheet" href="{{ asset('/') }}front_asset/css/mega_menu.css">
    <link rel="stylesheet" href="{{ asset('/') }}front_asset/css/customshop_style.css">

    <link rel="stylesheet" href="{{ asset('/') }}front_asset/etalage.css" type="text/css" media="all" />
    <script src="{{ asset('/') }}front_asset/jquery.min.js"></script>
    <script src="{{ asset('/') }}front_asset/jquery.etalage.min.js"></script>
    <!-- <link rel="shortcut icon"  href="front_asset/icon.png"/> -->

    <script>
        jQuery(document).ready(function ($) {

            $('.etalage').etalage({
                thumb_image_width: 400,
                thumb_image_height: 400,
                source_image_width: 500,
                source_image_height: 500,
                show_hint: true,
                click_callback: function (image_anchor, instance_id) {
                    // alert('Callback example:\nYou clicked on an image with the anchor: "' + image_anchor + '"\n(in Etalage instance: "' + instance_id + '")');
                }
            });
        });

        <script>
  !function(g,s,q,r,d){r=g[r]=g[r]||function(){(r.q=r.q||[]).push(arguments)};
  d=s.createElement(q);d.src='//d1l6p2sc9645hc.cloudfront.net/gosquared.js';q=
  s.getElementsByTagName(q)[0];q.parentNode.insertBefore(d,q)}(window,document
  ,'script','_gs');

  _gs('GSN-622523-L');
  _gs('set', 'anonymizeIP', true);
</script>


    </script>


</head>

<body style="background-color:#fff">

    <!--<body style="background-color:#fff" ondragstart="return false;" ondrop="return false;" oncontextmenu="return false;" >-->

    <!--	=======================header top section=========================-->
    @include('front-end.includes.header')
    <!--=========================header bottom section==================-->


    <div class="wrapper">
        @yield('content')
    </div>

    <!--content area end-->
 <!-- Messenger Chat plugin Code -->
 <div id="fb-root"></div>

 <!-- Your Chat plugin code -->
 <div id="fb-customer-chat" class="fb-customerchat">
 </div>


    <!--<footer class="navbar-fixed-bottom " style="width: 100%;background: none;" id="SidebarCardMenu">-->
    @include('front-end.includes.footer')


    <script src="{{ asset('/') }}slider-asset/js/jquery.min.js"></script>
    <script src="{{ asset('/') }}slider-asset/js/owl.carousel.min.js"></script>

    <script>
        $(document).ready(function () {
            //owl carousel

            if ($('.product-category').hasClass('owl-carousel')) {

                $('.owl-carousel').owlCarousel({
                    items: 6,
                    margin: 15,
                    nav: true,
                    dots: false,
                    autoplay: true,
                    slideBy: 6,
                    autoplayHoverPause: true,
                    rewind: true,
                    responsive: {
                        0: {
                            items: 3
                        },
                        760: {
                            items: 3
                        },
                        960: {
                            items: 4
                        },
                        1170: {
                            items: 6
                        }
                    }
                })
            }
            $("#searchpro,#msearchpro").keyup(function () {
                var text = $(this).val();
                if (text == "") {
                    text = "null";
                }
                var url = "{{ url('/') }}/search/" + text;

                $(document).prop('title', 'Search Result');
                //console.log(url);
                $.ajax({
                    type: 'GET',
                    url: url,
                    success: function (data) {
                        $(".wrapper").html(data);
                    }
                });
            });
        });
    </script>
    <script src="{{ asset('/') }}front_asset/js/bootstrap.min.js"></script>
    <script>
        $('.megaDropMenu').hover(function () {
            $(this).addClass('open');
        }, function () {
            $(this).removeClass('open');
        });
    </script>

    <script>
        $(window).scroll(function () {
            var wScroll = $(this).scrollTop();
            if (wScroll > 88) {
                $('#SidebarCardMenu').css({
                    'display': 'block'
                });
            }
            if (wScroll < 88) {
                $('#SidebarCardMenu').css({
                    'display': 'none'
                });
            }
        });


        var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "103916037887695");
      chatbox.setAttribute("attribution", "biz_inbox");
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v11.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));

    </script>


    <script>
        @yield('script')
    </script>

</body>



</html>
