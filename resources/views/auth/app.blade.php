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

  <link rel="stylesheet" href="{{asset('asset/css/file-upload/normalize.css')}}">
  <link rel="stylesheet" href="{{asset('asset/css/file-upload/filepond-plugin-image-preview.css')}}">
  <link rel="stylesheet" href="{{asset('asset/css/file-upload/filepond.css')}}">

  <style type="text/css">
    :root {
      --color-primary:        #20BEEF;
      --color-primary-dark:   #1CACD9;
      --color-primary-soft1:  #BFE4EF;
      --color-primary-soft2:  #E6EEF0;
    }
  </style>

  @yield('css-plus')
</head>
<body>

  @include('components.navbar')
  @include('components.sidebar')

  <div class="
  {{ (request()->routeIs(

    'guru.materi',
    'guru.materi.detail',
    'guru.tugas',
    'guru.tugas.detail',
    'guru.tugas.pilgan.detail',
    'guru.diskusi',
    'guru.diskusi.detail',
    'guru.rekap.kelas',
    'guru.kelas',
    'guru.kelas.anggota',

    'siswa.materi',
    'siswa.materi.detail',
    'siswa.tugas',
    'siswa.tugas.detail',
    'siswa.tugas.pilgan.detail',
    'siswa.tugas.pilgan.pengerjaan',
    'siswa.diskusi',
    'siswa.diskusi.detail',
    'siswa.rekap.kelas',
    'siswa.kelas',
    'siswa.kelas.anggota',

    )) ? 'dash-mobile' : '' }}
    ">

    <div id="main-content" class="main 
    @if(request()->is('admin-sekolah','admin-sekolah/*','admin','admin/*'))
    @if(request()->is('admin-sekolah/kelas/*','admin-sekolah/guru/*','admin-sekolah/siswa/*','admin-sekolah/mapel/*','admin-sekolah/ujian/*','admin-sekolah/penilaian/*'))
    @else
    dashboard-main
    @endif
    @endif
    ">
    @yield('content')
  </div>

</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> --}}
<script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.1.min.js"></script>

<script type="text/javascript" src="{{asset('asset/js/jquery.datepicker2.js')}}"></script>
<script type="text/javascript" src="{{asset('asset/js/timepicker.js')}}"></script>

<script type="text/javascript" src="{{asset('asset/js/materialize.js')}}"></script>
<script type="text/javascript" src="{{asset('asset/js/select-search.js')}}"></script>
<script type="text/javascript" src="{{asset('asset/js/select-required.js')}}"></script>

@yield('js-plus')

<script type="text/javascript">
  $(document).ready(function(){
    $(".time-picker input").timepicker();
  });

  $(document).ready(function(){
    $('.sidenavs').sidenav();
  });

  $(document).ready(function(){
    $('select').formSelect({
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

  $(document).ready(function(){
    $('.tabs').tabs();
  });

  $(document).ready(function(){
    $('.modal').modal();
  });

  $(document).ready(function(){
    $('.collapsible').collapsible();

    var elem = document.querySelector('.collapsible.expandable');
    var instance = M.Collapsible.init(elem, {
      accordion: false
    });
  });
</script>

@if(request()->is('admin-sekolah','admin-sekolah/*','admin','admin/*'))
<script type="text/javascript">
  $("#btn-notif-trial").click(function(){
    $("#notif-trial").addClass('hide');
  });
</script>
@endif

@if(request()->is('admin-sekolah','admin-sekolah/*'))
<script type="text/javascript">
  $(document).ready(function () {
    $('#penjadwalan_ujian_add').click(function () {
      $('#penjadwalan_add_ujian_layout').toggleClass("hide", !$("#penjadwalan_ujian_add").prop("checked")); 
    });

    $('#penjadwalan_ujian_edit').click(function () {
      $('#penjadwalan_edit_ujian_layout').toggleClass("hide", !$("#penjadwalan_ujian_edit").prop("checked")); 
    });
  });
</script>
@endif

</body>
</html>