


{{-- SIDEBAR GURU --}}
@if(request()->is('guru','guru/*'))
<ul id="sidenav-guru" class="sidenavs sidenav">
  <li class="
  {{ (request()->routeIs(

    'guru.dashboard'

    )) ? 'active' : '' }}
    ">
    <a href="{{route('guru.dashboard')}}"><i class="material-icons">dashboard</i>Dashboard</a>
  </li>
  <li class="
  {{ (request()->routeIs(

    'guru.ujian',
    'guru.ujian.detail'

    )) ? 'active' : '' }}
    ">
    <a href="{{route('guru.ujian')}}"><i class="material-icons">content_paste</i>Ujian</a>
  </li> 
{{--   <li class="
  {{ (request()->routeIs(

    'guru.kkm'

    )) ? 'active' : '' }}
    ">
    <a href="{{route('guru.kkm')}}"><i class="material-icons">corporate_fare</i>KKM</a>
  </li>  --}}

  <li><a class="subheader">Kelas Wali</a></li>
  <li class="
  {{ (request()->routeIs(

    'guru.materi',
    'guru.materi.detail',
    'guru.tugas',
    'guru.tugas.detail',
    'guru.diskusi',
    'guru.diskusi.detail',
    'guru.rekap.kelas',
    'guru.kelas',
    'guru.kelas.e_raport',
    'guru.kelas.anggota',
    'guru.tugas.pilgan.detail',
    'guru.mapel',
    'guru.mapel.rekap'

    )) ? 'active' : '' }}
    ">
    <a href="{{route('guru.kelas')}}"><i class="material-icons">home_work</i>10 Mipa 1</a>
  </li>

  <li class="
{{--   {{ (request()->routeIs(

    'guru.materi',
    'guru.materi.detail',
    'guru.tugas',
    'guru.tugas.detail',
    'guru.diskusi',
    'guru.diskusi.detail',
    'guru.rekap.kelas',
    'guru.kelas',
    'guru.kelas.anggota',
    'guru.tugas.pilgan.detail'

    )) ? 'active' : '' }} --}}
    ">
    <a href="{{route('guru.kelas')}}"><i class="material-icons">home_work</i>
      8C
    </a>
  </li> 
  <li><a class="subheader">Kelas Ajar</a></li>
  <li class="
{{--   {{ (request()->routeIs(

    'guru.materi',
    'guru.materi.detail',
    'guru.tugas',
    'guru.tugas.detail',
    'guru.diskusi',
    'guru.diskusi.detail',
    'guru.rekap.kelas',
    'guru.kelas',
    'guru.kelas.anggota',
    'guru.tugas.pilgan.detail'

    )) ? 'active' : '' }} --}}
    ">
    <a href="{{route('guru.kelas')}}"><i class="material-icons">home_work</i>
      8C
    </a>
  </li> 
</ul>
@endif








{{-- SIDEBAR SISWA --}}
@if(request()->is('siswa','siswa/*'))
<ul id="sidenav-siswa" class="sidenavs sidenav">
  <li class="
  {{ (request()->routeIs(

    'siswa.dashboard'

    )) ? 'active' : '' }}
    ">
    <a href="{{route('siswa.dashboard')}}"><i class="material-icons">dashboard</i>Dashboard</a>
  </li> 

  <li><a class="subheader">Kelas</a></li>

  <li class="
  {{ (request()->routeIs(

    'siswa.materi',
    'siswa.materi.detail',
    'siswa.tugas',
    'siswa.tugas.detail',
    'siswa.diskusi',
    'siswa.diskusi.detail',
    'siswa.setting.kelas',
    'siswa.kelas',
    'siswa.rekap.kelas',
    'siswa.kelas.anggota',
    'siswa.tugas.pilgan.detail',
    'siswa.tugas.pilgan.pengerjaan'

    )) ? 'active' : '' }}
    ">
    <a href="{{route('siswa.kelas')}}"><i class="material-icons">home_work</i>Nama Kelas</a>
  </li>
</ul>
@endif







{{-- SIDEBAR ADMIN SEKOLAH --}}
@if(request()->is('admin-sekolah','admin-sekolah/*'))
<ul id="sidenav-admin-sekolah" class="sidenavs sidenav sidenav-dash-t sidenav-no-shadow
{{ (request()->routeIs(

  'admin-sekolah.dashboard',
  'admin-sekolah.guru',
  'admin-sekolah.siswa',
  'admin-sekolah.mapel',
  'admin-sekolah.tagihan',
  'admin-sekolah.setting',
  'admin-sekolah.penilaian',
  'admin-sekolah.kelas',
  'admin-sekolah.tahunajaran',
  'admin-sekolah.ujian'


  )) ? 'sidenav-fixed' : '' }}
  ">
  <li class="mb3"><div class="logo-nav"><h5>Admin</h5></div></li>

  <li class="center mtb1">
    <button class="matter-button-contained button-icon dropdown-trigger drop" data-target="dropdown-add">
      <i class="material-icons left">add</i>Tambah Baru
    </button>
  </li>
  <li class="
  {{ (request()->routeIs(

    'admin-sekolah.dashboard'

    )) ? 'active' : '' }}
    ">
    <a href="{{route('admin-sekolah.dashboard')}}"><i class="material-icons">dashboard</i>Dashboard</a>
  </li>
  <li><a class="subheader">Komponen</a></li>
  <li class="
  {{ (request()->routeIs(

    'admin-sekolah.tahunajaran'

    )) ? 'active' : '' }}
    ">
    <a href="{{route('admin-sekolah.tahunajaran')}}"><i class="material-icons">dns</i>Tahun Ajaran</a>
  </li>
  <li class="
  {{ (request()->routeIs(

    'admin-sekolah.mapel',
    'admin-sekolah.mapel.detail'

    )) ? 'active' : '' }}
    ">
    <a href="{{route('admin-sekolah.mapel')}}"><i class="material-icons">cast_for_education</i>Mapel</a>
  </li>
  <li class="
  {{ (request()->routeIs(

    'admin-sekolah.penilaian',
    'admin-sekolah.penilaian.akademik.detail',
    'admin-sekolah.penilaian.nonakademik.detail'

    )) ? 'active' : '' }}
    ">
    <a href="{{route('admin-sekolah.penilaian')}}"><i class="material-icons">grading</i>Penilaian</a>
  </li>
  <li class="
  {{ (request()->routeIs(

    'admin-sekolah.kelas',
    'admin-sekolah.kelas.detail'

    )) ? 'active' : '' }}
    ">
    <a href="{{route('admin-sekolah.kelas')}}"><i class="material-icons">home_work</i>Kelas</a>
  </li>
  <li class="
  {{ (request()->routeIs(

    'admin-sekolah.ujian',
    'admin-sekolah.ujian.detail'

    )) ? 'active' : '' }}
    ">
    <a href="{{route('admin-sekolah.ujian')}}"><i class="material-icons">content_paste</i>Ujian</a>
  </li>
  <li><a class="subheader">Entitas</a></li>
  <li class="
  {{ (request()->routeIs(

    'admin-sekolah.guru',
    'admin-sekolah.guru.detail'

    )) ? 'active' : '' }}
    ">
    <a href="{{route('admin-sekolah.guru')}}"><i class="material-icons">support_agent</i>Guru</a>
  </li>
  <li class="
  {{ (request()->routeIs(

    'admin-sekolah.siswa',
    'admin-sekolah.siswa.detail'

    )) ? 'active' : '' }}
    ">
    <a href="{{route('admin-sekolah.siswa')}}"><i class="material-icons">sentiment_satisfied</i>Siswa</a>
  </li>
  <li><a class="subheader">Setting Akun</a></li>
  <li class="
  {{ (request()->routeIs(

    'admin-sekolah.tagihan'

    )) ? 'active' : '' }}
    ">
    <a href="{{route('admin-sekolah.tagihan')}}"><i class="material-icons">account_balance_wallet</i>Tagihan</a>
  </li>
</li>
<li class="
{{ (request()->routeIs(

  'admin-sekolah.setting'

  )) ? 'active' : '' }}
  ">
  <a href="{{route('admin-sekolah.setting')}}"><i class="material-icons">settings</i>Pengaturan</a>
</li>
</ul>

<ul id="dropdown-add" class="dropdown-content medium">
{{--   <li>
    <a class="with-icon modal-trigger" href="#modal-add-sekolah"><i class="material-icons">dns</i>Sekolah</a>
  </li> --}}
  <li>
    <a class="with-icon modal-trigger" href="#modal-add-tahunajaran"><i class="material-icons">dns</i>Tahun Ajaran</a>
  </li>
  <li>
    <a class="with-icon modal-trigger" href="#modal-add-guru"><i class="material-icons">support_agent</i>Guru</a>
  </li>
  <li>
    <a class="with-icon modal-trigger" href="#modal-add-kelas"><i class="material-icons">home_work</i>Kelas</a>
  </li>
  <li>
    <a class="with-icon modal-trigger" href="#modal-add-penilaian"><i class="material-icons">grading</i>Penilaian</a>
  </li>
  <li>
    <a class="with-icon modal-trigger" href="#modal-add-mapel"><i class="material-icons">cast_for_education</i>Mapel</a>
  </li>
  <li>
    <a class="with-icon modal-trigger" href="#modal-add-ujian"><i class="material-icons">content_paste</i>Ujian</a>
  </li>
</ul>

@include('components.modals.admin-sekolah.add')
@endif


{{-- SIDEBAR ADMIN --}}
@if(request()->is('admin','admin/*'))
<ul id="sidenav-admin" class="sidenav sidenav-fixed sidenav-dash-t" style="z-index: 0">
  <li class="mb3"><div class="logo-nav"><h5>Admin</h5></div></li>

</ul>
@endif