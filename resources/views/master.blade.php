<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  
  <title>Home</title>

  <link rel="icon" href="{{asset('asset/img/logo/asset_ersolid_blue.png')}}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/materialize.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/app.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/animation.css')}}">
  {{--   <link rel="stylesheet" type="text/css" href="{{asset('asset/css/web.css')}}"> --}}
</head>
<body>

  <div id="app">
    <navbar-component></navbar-component>
    <sidebar-component></sidebar-component>
    <sidebar-second-component></sidebar-second-component>
    <router-view></router-view>
    <footer-component></footer-component>
  </div>

  <script src="{{ asset('js/app.js') }}"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.1.min.js"></script>
  <script type="text/javascript" src="{{asset('asset/js/jquery.datepicker2.js')}}"></script>
  <script type="text/javascript" src="{{asset('asset/js/timepicker.js')}}"></script>
  <script type="text/javascript" src="{{asset('asset/js/materialize.js')}}"></script>
  <script type="text/javascript" src="{{asset('asset/js/select-search.js')}}"></script>
  <script type="text/javascript" src="{{asset('asset/js/select-required.js')}}"></script>
  <script type="text/javascript" src="{{asset('asset/js/sticky.js')}}"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      $('.table-container table').sticky({
        cellWidth: 150,
        columnCount: 1
      });
    });
    
    $(document).ready(function(){
      $('.sidenavs').sidenav();

      $('.select').formSelect({
        closeOnClick: true
      });
      $('.dropdown-trigger.drop').dropdown({
        closeOnClick: true
      });
      $('.dropdown-trigger.no-drop').dropdown({
        closeOnClick: false
      });
      $('.select-search').formSelect2({
        closeOnClick: false
      });
    });
  </script>

</body>
</html>