<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>

  <title>@yield('title')</title>
  <link rel="icon" href="{{asset('asset/img/logo/asset_ersolid_blue.png')}}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/materialize.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/app.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/animation.css')}}">

  @yield('css-plus')
</head>
<body>

  @if (Route::currentRouteName() != 'login' && Route::currentRouteName() != 'register' && Route::currentRouteName() != 'register.siswa' && Route::currentRouteName() != 'register.sekolah')

  @include('components.home.navbar')

  @endif

  @yield('content')

  @if (Route::currentRouteName() != 'login' && Route::currentRouteName() != 'register' && Route::currentRouteName() != 'register.siswa' && Route::currentRouteName() != 'register.sekolah')

  @include('components.home.footer')
  
  @endif

  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script type="text/javascript" src="{{asset('asset/js/jquery-3.3.1.js')}}"></script>
  <script type="text/javascript" src="{{asset('asset/js/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('asset/js/materialize.js')}}"></script>
  @yield('js-plus')

  <script type="text/javascript">
    $(document).ready(function(){
      $('.sidenav').sidenav();
      $('.tabs').tabs();
      $('select').formSelect();
    });
  </script>

  <script type="text/javascript">
    $(document).ready(function(){
      var scrollTop = 0;

      $(window).scroll(function(){
        scrollTop = $(window).scrollTop();
        $('.counter').html(scrollTop);

        if (scrollTop >= 100) {
          $('#navbar-home').addClass('navbar-active');

        } else if (scrollTop < 100) {
          $('#navbar-home').removeClass('navbar-active');
        } 
      }); 
    });
  </script>

 @if (Route::currentRouteName() != 'home')
  <script type="text/javascript">
    $(document).ready(function(){
      $('#navbar-home').addClass('primary');
    });
  </script>
  @endif
  
</body>
</html>