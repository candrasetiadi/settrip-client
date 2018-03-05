<!-- Configure the font used -->
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/nouislider.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/daterangepicker.css') }}">
<link rel="stylesheet" href="{{ asset('css/swiper.min.css') }}">
<link href="https://fonts.googleapis.com/css?family=Poppins:700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Hind+Guntur:300,400,600,700" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">


<script src="{{ asset('js/modernizr-2.8.3.min.js') }}"></script>
<script>
    var functions = new Array();
</script>

<header class="fixed-header">
    <div class="header-container solid">
        <div class="container">
        <div class="header-logo-dark" onclick="location.href='/';">
            <img class="svg-image" src="{{ asset('images/logo/logo-dark.svg') }}" alt="Setrip logo">
        </div>
        <ul class="header-menu">
            <a href=""><li>@lang('trns.article')</li></a>
            <a href=""><li>@lang('trns.help')</li></a>
            <a href=""><li>@lang('trns.myplan')</li></a>
            <a class="open--login-head"><li><button class="btn transparent small">@lang('trns.login')</button></li></a>
        </ul>
        </div>
    </div>
</header>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCB9MAo25mtkZbVK4cKMjLVHFnLq0HL9l8"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- <script>window.jQuery || document.write('<script src="{{ asset('js/plugins/jquery.min.js') }}"><\/script>')</script> -->
<script src="{{ asset('js/plugins/jquery.min.js') }}"></script>    
<script src="{{ asset('js/global.js') }}"></script>
<script src="{{ asset('enginejs/config/config.js') }}"></script>
<script src="{{ asset('enginejs/list.js') }}"></script>
<script src="{{ asset('enginejs/template.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/functional.js') }}" type="text/javascript">  </script>
<script src="{{ asset('js/main.js') }}"></script>
<!-- <script src="{{ asset('js/plugins/nouislider.min.js') }}"></script> -->
<script src="{{ asset('js/plugins/moment.min.js') }}" charset="utf-8"></script>
<script src="{{ asset('js/plugins/daterangepicker.js') }}" charset="utf-8"></script>
<!-- <script src="{{ asset('js/plugins/swiper.min.js') }}" charset="utf-8"></script> -->
<script src="{{ asset('js/plugins/fullcalendar.min.js') }}" charset="utf-8"></script>
<script src="{{ asset('js/plugins/typeahead.jquery.min.js') }}" charset="utf-8"></script>

@yield('jsextra')