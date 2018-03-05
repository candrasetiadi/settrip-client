<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="apple-touch-icon-precomposed" href="images/favicon/favicon-152.png">
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="images/favicon/favicon-152.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/favicon/favicon-144.png">
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="images/favicon/favicon-120.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/favicon/favicon-114.png">
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="images/favicon/favicon-76.png">
    <link rel="apple-touch-icon-precomposed" href="images/favicon/favicon-57.png">
    <meta name="msapplication-TileColor" content="#colorHere"> <!-- put hex color here -->
    <meta name="msapplication-TileImage" content="{{ asset('images/favicon/favicon-144.png') }}">
    <link rel="icon" sizes="16x16 24x24 32x32 48x48 64x64" href="images/favicon/favicon.ico">
    <link rel="mask-icon" href="images/favicon/favicon.svg" color="#colorHere"> <!-- put hex color here -->

    <!-- Configure the font used -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nouislider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Hind+Guntur:300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


    <!-- <script src="{{ asset('js/modernizr-2.8.3.min.js') }}"></script> -->
    <!-- <script>
        var functions = new Array();
    </script> -->
</head>
<body>
    @include('layouts.header')

    <div id="content">
      <!-- <div class="container container-body"> -->
      @yield('content')
      <!-- </div> -->
    </div>
    
    @include('layouts.footer')

    <div id="general--modal" class="general--modal">
      <div class="modal-container panel panel-default">
        <div class="close--modal">
          <em class="fa fa-close"></em>
        </div>
        <div class="modal--child modal--info">
            <div class="modal--img">
              <em class="fa fa-info-circle"></em>
            </div>
            <div class="modal--text">
              <div class="mt--head">
                This is info modal
              </div>
              <div class="mt--body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas reiciendis unde deleniti numquam molestias cum quis neque voluptates sunt voluptatem asperiores, tenetur veniam, veritatis eaque dolore tempora soluta voluptatibus inventore.
              </div>
            </div>
            <div class="modal--button">
              <button type="button" class="mb-sm btn btn-primary btnInfoOk">Ok</button>
            </div>
        </div>
        <div class="modal--child modal--error">
            <div class="modal--img">
              <em class="fa fa-close"></em>
            </div>
            <div class="modal--text">
              <div class="mt--head">
                This is Error modal
              </div>
              <div class="mt--body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas reiciendis unde deleniti numquam molestias cum quis neque voluptates sunt voluptatem asperiores, tenetur veniam, veritatis eaque dolore tempora soluta voluptatibus inventore.
              </div>
            </div>
            <div class="modal--button">
              <button type="button" class="mb-sm btn btn-default btnAlertOk">Ok</button>
            </div>
        </div>
        <div class="modal--child modal--confirmation">
            <div class="modal--text">
              <div class="mt--head">
                Are you sure you want to do this ?
              </div>
              <div class="mt--body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas reiciendis unde deleniti numquam molestias cum quis neque voluptates sunt voluptatem asperiores, tenetur veniam, veritatis eaque dolore tempora soluta voluptatibus inventore.
              </div>
            <div class="modal--button">
              <button type="button" class="mb-sm btn btn-green btnConfirmOk">Do it</button>
              <button type="button" class="mb-sm btn btn-default btnConfirmCancel">Nah</button>
            </div>
        </div>

      </div>
      <div class="modal--child modal--confirmation--notes">
          <div class="modal--text">
            <div class="mt--head">
              Are you sure you want to do this ?
            </div>
            <div class="mt--body">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas reiciendis unde deleniti numquam molestias cum quis neque voluptates sunt voluptatem asperiores, tenetur veniam, veritatis eaque dolore tempora soluta voluptatibus inventore.
            </div>
            <div class="mt--notes">
              <label for="">Notes :</label>
              <textarea name="name" rows="4" ></textarea>
            </div>
          </div>
          <div class="modal--button">
            <button type="button" class="mb-sm btn btn-green">Do it</button>
            <button type="button" class="mb-sm btn btn-default">Nah</button>
          </div>
      </div>
    </div>

    <!-- <script async defer
     src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCB9MAo25mtkZbVK4cKMjLVHFnLq0HL9l8">
     </script> -->
    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
    <!-- <script>window.jQuery || document.write('<script src="{{ asset('js/plugins/jquery.min.js') }}"><\/script>')</script> -->
    <!-- <script src="{{ asset('js/plugins/jquery.min.js') }}"></script>    
    <script src="{{ asset('js/global.js') }}"></script>
    <script src="{{ asset('enginejs/config/config.js') }}"></script>
    <script src="{{ asset('enginejs/list.js') }}"></script>
    <script src="{{ asset('enginejs/template.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/functional.js') }}" type="text/javascript">  </script>
    <script src="{{ asset('js/main.js') }}"></script> -->
    <!-- <script src="{{ asset('js/plugins/nouislider.min.js') }}"></script> -->
    <!-- <script src="{{ asset('js/plugins/moment.min.js') }}" charset="utf-8"></script>
    <script src="{{ asset('js/plugins/daterangepicker.js') }}" charset="utf-8"></script> -->
    <!-- <script src="{{ asset('js/plugins/swiper.min.js') }}" charset="utf-8"></script> -->
    <!-- <script src="{{ asset('js/plugins/fullcalendar.min.js') }}" charset="utf-8"></script>
    <script src="{{ asset('js/plugins/typeahead.jquery.min.js') }}" charset="utf-8"></script> -->

    @yield('jsextra')



    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X','auto');ga('send','pageview');
    </script>
  </body>
</html>
