<header>
 <div class="navbar-fixed">
  <nav class="nav-dash">
    <div class="nav-wrapper">
      <div class="row">
        <div class="col s12">

          {{-- LEFT CONTENT --}}
          <ul class="left">
            <li>
              @if(request()->is('guru','guru/*'))
              <a href="#" data-target="sidenav-guru" class="sidenav-trigger show-on-large show-on-medium show-on-small primary-text nm">
                <i class="material-icons">menu</i>
              </a>
              @endif
              @if(request()->is('siswa','siswa/*'))
              <a href="#" data-target="sidenav-siswa" class="sidenav-trigger show-on-large show-on-medium show-on-small primary-text">
                <i class="material-icons">menu</i>
              </a>
              @endif
              @if(request()->is('admin-sekolah','admin-sekolah/*'))
              <a href="#" data-target="sidenav-admin-sekolah" class="sidenav-trigger show-on-large show-on-medium show-on-small primary-text">
                <i class="material-icons">menu</i>
              </a>
              @endif
              @if(request()->is('admin','admin/*'))
              <a href="#" data-target="sidenav-admin" class="sidenav-trigger hide-on-med-and-up show-on-small primary-text">
                <i class="material-icons">menu</i>
              </a>
              @endif
            </li>
            <li>
              @if(request()->is('guru','guru/*'))
              @if(request()->is('guru/kelas/mapel','guru/kelas/mapel/*'))

              <a class="brand-logo dark-text text-logo" href="{{route('guru.mapel')}}" style="position: absolute;top: -0.5rem;">
                <span>Pendidikan Pancasila dan Kewarganegaraan</span>
                <span class="primary-text" style="position: absolute;left: 0;top: 1.4rem;font-size: 0.9rem;letter-spacing: 0.03rem;">
                  8C | 2020/2021
                </span>
              </a>

              @elseif(request()->is('guru/ujian/*'))
              <a class="brand-logo dark-text text-logo" href="{{route('guru.ujian.detail')}}" style="position: absolute;top: -0.5rem;">
                <span>Pendidikan Pancasila dan Kewarganegaraan</span>
                <span class="primary-text" style="position: absolute;left: 0;top: 1.4rem;font-size: 0.9rem;letter-spacing: 0.03rem;">
                  Ujian | UAS | 2020/2021
                </span>
              </a>

              @elseif(request()->is('guru/kelas','guru/kelas/e-raport','guru/kelas/anggota'))
              <a class="brand-logo dark-text text-logo" href="{{route('guru.kelas')}}" style="position: absolute;top: -0.5rem;">
                <span>8C</span>
                <span class="primary-text" style="position: absolute;left: 0;top: 1.4rem;font-size: 0.9rem;letter-spacing: 0.03rem;">
                  2020/2021
                </span>
              </a>

              @else
              <a class="brand-logo" href="{{route('guru.dashboard')}}">
                <img class="responsive-img" src="{{asset('asset/img/logo/asset_erlogo_blue.png')}}" width="100px">
              </a>
              @endif
              @endif

              @if(request()->is('siswa','siswa/*'))
              <a class="brand-logo" href="{{route('siswa.dashboard')}}">
                <img class="responsive-img" src="{{asset('asset/img/logo/asset_erlogo_blue.png')}}" width="100px">
              </a>
              @endif

              @if(request()->is('admin-sekolah','admin-sekolah/*'))
              <a class="brand-logo" href="{{route('admin-sekolah.dashboard')}}">
                <img class="responsive-img" src="{{asset('asset/img/logo/asset_erlogo_blue.png')}}" width="100px">
              </a>
              @endif

              @if(request()->is('admin','admin/*'))
              <a class="brand-logo" href="{{route('admin.dashboard')}}">
                <img class="responsive-img" src="{{asset('asset/img/logo/asset_erlogo_blue.png')}}" width="100px">
              </a>
              @endif
            </li>
          </ul>





          {{-- MIDDLE CONTENT --}}
          {{-- GURU --}}
          @if(request()->is('guru','guru/*'))
          @if(request()->is('guru/kelas','guru/kelas/e-raport','guru/kelas/anggota'))
          <ul class="nav-center nav-menu-large hide-on-med-and-down">
            <li class="
            {{ (request()->routeIs(

              'guru.kelas'

              )) ? 'active' : '' }}
              ">
              <a href="{{route('guru.kelas')}}">Mapel</a>
              <div class="nav-actives"></div>
            </li>
            <li class="
            {{ (request()->routeIs(

              'guru.kelas.e_raport'

              )) ? 'active' : '' }}
              ">
              <a href="{{route('guru.kelas.e_raport')}}">E-Raport</a>
              <div class="nav-actives"></div>
            </li>
            <li class="
            {{ (request()->routeIs(

              'guru.kelas.anggota'

              )) ? 'active' : '' }}
              ">
              <a href="{{route('guru.kelas.anggota')}}">Anggota</a>
              <div class="nav-actives"></div>
            </li>
          </ul>
          @endif

          @if(request()->is('guru/ujian/*'))
          <ul class="nav-center nav-menu-large hide-on-med-and-down">
            <li class="
            {{ (request()->routeIs(

              'guru.ujian.detail'

              )) ? 'active' : '' }}
              ">
              <a href="{{route('guru.ujian.detail')}}">Soal</a>
              <div class="nav-actives"></div>
            </li>
            <li class="">
              <a href="#!">Rekap</a>
              <div class="nav-actives"></div>
            </li>
          </ul>
          @endif
          
          @if(request()->is('guru/kelas/mapel','guru/kelas/mapel/*','guru/kelas/mapel/komponen/*'))
          <ul class="nav-center nav-menu-large hide-on-med-and-down">

            @if(request()->is('guru/kelas/mapel/komponen/*'))
            <li class="
            {{ (request()->routeIs(

              'guru.materi',
              'guru.materi.detail'

              )) ? 'active' : '' }}
              ">
              <a href="{{route('guru.materi')}}">Materi</a>
              <div class="nav-actives"></div>
            </li>
            <li class="
            {{ (request()->routeIs(

              'guru.tugas',
              'guru.tugas.detail',
              'guru.tugas.pilgan.detail'

              )) ? 'active' : '' }}
              ">
              <a href="{{route('guru.tugas')}}">Tugas</a>
              <div class="nav-actives"></div>
            </li>
            <li class="
            {{ (request()->routeIs(

              'guru.diskusi',
              'guru.diskusi.detail'

              )) ? 'active' : '' }}
              ">
              <a href="{{route('guru.diskusi')}}">Diskusi</a>
              <div class="nav-actives"></div>
            </li>

            @else
            <li class="
            {{ (request()->routeIs(

              'guru.mapel'

              )) ? 'active' : '' }}
              ">
              <a href="{{route('guru.mapel')}}">Beranda</a>
              <div class="nav-actives"></div>
            </li>
            <li class="
            {{ (request()->routeIs(

              'guru.mapel.rekap'

              )) ? 'active' : '' }}
              ">
              <a href="{{route('guru.mapel.rekap')}}">Nilai</a>
              <div class="nav-actives"></div>
            </li>
            @endif

          </ul>
          @endif
          @endif

          {{-- SISWA --}}
          @if(request()->is('siswa/kelas','siswa/kelas/anggota'))
          <ul class="nav-center nav-menu-large hide-on-med-and-down">
            <li class="
            {{ (request()->routeIs(

              'siswa.kelas'

              )) ? 'active' : '' }}
              ">
              <a href="{{route('siswa.kelas')}}">Mapel</a>
              <div class="nav-actives"></div>
            </li>
            <li class="
            {{ (request()->routeIs(

              'siswa.kelas.anggota'

              )) ? 'active' : '' }}
              ">
              <a href="{{route('siswa.kelas.anggota')}}">Anggota</a>
              <div class="nav-actives"></div>
            </li>
          </ul>
          @endif
          @if(request()->is('siswa/kelas/mapel/*'))
          <ul class="nav-center nav-menu-large hide-on-med-and-down">
            <li class="
            {{ (request()->routeIs(

              'siswa.materi',
              'siswa.materi.detail'

              )) ? 'active' : '' }}
              ">
              <a href="{{route('siswa.materi')}}">Materi</a>
              <div class="nav-actives"></div>
            </li>
            <li class="
            {{ (request()->routeIs(

              'siswa.tugas',
              'siswa.tugas.detail',
              'siswa.tugas.pilgan.detail',
              'siswa.tugas.pilgan.pengerjaan'

              )) ? 'active' : '' }}
              ">
              <a href="{{route('siswa.tugas')}}">
                {{-- <div class="property-notif" style="position: absolute;top: 1.1rem;margin: 0 0.1rem;">
                  <div class="land">
                    <div class="property-notif danger white-text num">1</div>
                  </div>
                </div> --}}
                Tugas
              </a>
              <div class="nav-actives"></div>
            </li>
            <li class="
            {{ (request()->routeIs(

              'siswa.diskusi',
              'siswa.diskusi.detail'

              )) ? 'active' : '' }}
              ">
              <a href="{{route('siswa.diskusi')}}">
                {{-- <div class="property-notif" style="position: absolute;top: 1.1rem;margin: 0 0.1rem;">
                  <div class="land">
                    <div class="property-notif danger white-text num">1</div>
                  </div>
                </div> --}}
                Diskusi
              </a>
              <div class="nav-actives"></div>
            </li>
            <li class="
            {{ (request()->routeIs(

              'siswa.rekap.kelas'

              )) ? 'active' : '' }}
              ">
              <a href="{{route('siswa.rekap.kelas')}}">Rekap</a>
              <div class="nav-actives"></div>
            </li>
          </ul>
          @endif





          {{-- RIGHT CONTENT --}}
          @if(request()->is('guru','guru/*'))
          <ul class="right">
            {{-- <li class="
            {{ (request()->is(

              'guru/kelas/mapel',
              'guru/kelas/mapel/*'

              )) ? 'hide-on-small-only' : '' }}
              ">
              <a class="matter-button-circle dropdown-trigger drop" data-target="dropdown-notif-guru">
                <i class="material-icons">notifications_none</i>
                <div class="property-notif" style="position: absolute; top: 3px; left: -1px;">
                  <div class="land">
                    <div class="property-notif primary white-text num">3</div>
                  </div>
                </div>
              </a>
            </li> --}}
            <li class="
            {{ (request()->is(

              'guru/kelas/mapel',
              'guru/kelas/mapel/*'

              )) ? 'hide-on-small-only' : '' }}
              ">
              <div class="dropdown-trigger drop badge-img-in-navbar" data-target="dropdown-akun-guru">
                <div class="badge-ed img-text">
                  <div class="img">
                    <img src="https://ui-avatars.com/api/?background=0D8ABC&color=fff&name=Bima+Susila">
                  </div>
                </div>
              </div>
            </li>
          </ul>
          @endif

          @if(request()->is('siswa','siswa/*'))
          <ul class="right">
            <li>
              <a class="matter-button-circle dropdown-trigger drop" data-target="dropdown-notif-siswa">
                <i class="material-icons">notifications_none</i>
                <div class="property-notif" style="position: absolute; top: 3px; left: -1px;">
                  <div class="land">
                    <div class="property-notif primary white-text num">3</div>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <div class="dropdown-trigger drop badge-img-in-navbar" data-target="dropdown-akun-siswa">
                <div class="badge-ed img-text">
                  <div class="img">
                    <img src="{{asset('asset/img/user/foto/foto.jpg')}}">
                  </div>
                </div>
              </div>
            </li>
          </ul>
          @endif

          @if(request()->is('admin-sekolah','admin-sekolah/*'))
          <ul class="right">
            <li>
              <a class="matter-button-circle dropdown-trigger drop" data-target="dropdown-notif-adminsekolah">
                <i class="material-icons">notifications_none</i>
                <div class="property-notif" style="position: absolute; top: 3px; left: -1px;">
                  <div class="land">
                    <div class="property-notif primary white-text num">3</div>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <div class="dropdown-trigger drop badge-img-in-navbar" data-target="dropdown-akun-admin-sekolah">
                <div class="badge-ed img-text">
                  <div class="img">
                    <img src="{{asset('asset/img/user/foto/foto.jpg')}}">
                  </div>
                </div>
              </div>
            </li>
          </ul>
          @endif

          @if(request()->is('admin','admin/*'))
          <ul class="right">
            <li>
              <div class="dropdown-trigger drop badge-img-in-navbar" data-target="dropdown-akun-admin">
                <div class="badge-ed img-text">
                  <div class="img">
                    <img src="{{asset('asset/img/user/foto/foto.jpg')}}">
                  </div>
                </div>
              </div>
            </li>
          </ul>
          @endif
        </div>



        {{-- NAVBAR SECOND IN MOBILE --}}
        @if(request()->is('guru/kelas','guru/kelas/anggota'))
        <div class="col s12 nav-second">
          <div class="nav-content nav-plus show-on-medium-and-down hide-on-large-only">
            <ul class="tabs2">
              <li class="
              {{ (request()->routeIs(

                'guru.kelas'

                )) ? 'active' : '' }}
                tab-link center" style="width: 50%">
                <a class="dark-text" href="{{route('guru.kelas')}}">Mapel</a>
              </li>
              <li class="
              {{ (request()->routeIs(

                'guru.kelas.anggota'

                )) ? 'active' : '' }}
                tab-link center" style="width: 50%">
                <a class="dark-text" href="{{route('guru.kelas.anggota')}}">Anggota</a>
              </li>
            </ul>
          </div>
        </div>
        @endif

        @if(request()->is('guru/kelas/mapel','guru/kelas/mapel/*'))
        <div class="col s12 nav-second">
          <div class="nav-content nav-plus show-on-medium-and-down hide-on-large-only">
            <ul class="tabs2">
              <li class="
              {{ (request()->routeIs(

                'guru.materi',
                'guru.materi.detail'

                )) ? 'active' : '' }}
                tab-link center" style="width: 25%">
                <a class="dark-text" href="{{route('guru.materi')}}">Materi</a>
              </li>
              <li class="
              {{ (request()->routeIs(

                'guru.tugas',
                'guru.tugas.detail',
                'guru.tugas.pilgan.detail'

                )) ? 'active' : '' }}
                tab-link center" style="width: 25%">
                <a class="dark-text" href="{{route('guru.tugas')}}">Tugas</a>
              </li>
              <li class="
              {{ (request()->routeIs(

                'guru.diskusi',
                'guru.diskusi.detail'

                )) ? 'active' : '' }}
                tab-link center" style="width: 25%">
                <a class="dark-text" href="{{route('guru.diskusi')}}">Diskusi</a>
              </li>
              <li class="
              {{ (request()->routeIs(

                'guru.komponen.rekap',

                )) ? 'active' : '' }}
                tab-link center" style="width: 25%">
                <a class="dark-text" href="{{route('guru.komponen.rekap')}}">Rekap</a>
              </li>
            </ul>
          </div>
        </div>
        @endif

        @if(request()->is('siswa/kelas','siswa/kelas/anggota'))
        <div class="col s12 nav-second">
          <div class="nav-content nav-plus show-on-medium-and-down hide-on-large-only">
            <ul class="tabs2">
              <li class="
              {{ (request()->routeIs(

                'siswa.kelas'

                )) ? 'active' : '' }}
                tab-link center" style="width: 50%">
                <a class="dark-text" href="{{route('siswa.kelas')}}">Mapel</a>
              </li>
              <li class="
              {{ (request()->routeIs(

                'siswa.kelas.anggota'

                )) ? 'active' : '' }}
                tab-link center" style="width: 50%">
                <a class="dark-text" href="{{route('siswa.kelas.anggota')}}">Anggota</a>
              </li>
            </ul>
          </div>
        </div>
        @endif

        @if(request()->is('siswa/kelas/mapel/*'))
        <div class="col s12 nav-second">
          <div class="nav-content nav-plus show-on-medium-and-down hide-on-large-only">
            <ul class="tabs2">
              <li class="
              {{ (request()->routeIs(

                'siswa.materi',
                'siswa.materi.detail'

                )) ? 'active' : '' }}
                tab-link center" style="width: 25%">
                <a class="dark-text" href="{{route('siswa.materi')}}">Materi</a>
              </li>
              <li class="
              {{ (request()->routeIs(

                'siswa.tugas',
                'siswa.tugas.detail',
                'siswa.tugas.pilgan.detail',
                'siswa.tugas.pilgan.pengerjaan'

                )) ? 'active' : '' }}
                tab-link center" style="width: 25%">
                <a class="dark-text" href="{{route('siswa.tugas')}}">Tugas</a>
              </li>
              <li class="
              {{ (request()->routeIs(

                'siswa.diskusi',
                'siswa.diskusi.detail'

                )) ? 'active' : '' }}
                tab-link center" style="width: 25%">
                <a class="dark-text" href="{{route('siswa.diskusi')}}">Diskusi</a>
              </li>
              <li class="
              {{ (request()->routeIs(

                'siswa.rekap.kelas',

                )) ? 'active' : '' }}
                tab-link center" style="width: 25%">
                <a class="dark-text" href="{{route('siswa.rekap.kelas')}}">Rekap</a>
              </li>
            </ul>
          </div>
        </div>
        @endif

      </div>
    </div>
  </nav>
</div>
</header>

@if(request()->is('guru','guru/*'))
<ul id='dropdown-akun-guru' class='dropdown-content'>
  <li><a href="{{route('guru.setting')}}">Setting</a></li>
  <li><a href="{{route('get.logout')}}">Logout</a></li>
</ul>

<div id='dropdown-notif-guru' class='dropdown-content dropdown-layout'>
  <div class="content">
    <h5 class="dark-text nm bold mb2">Notifikasi</h5>

    <div class="collection stripped borderles linked hoverabel-bg nm">
      <a href="#1" class="collection-item waves-effect row">
        <div class="col s2">
          <i class="material-icons icon-list">assignment</i>
        </div>
        <div class="col s10">
          <h6 class="dark-text semibold nm">Tugas 1</h6>
          <p class="semibold dark2-text nm font-small">12 Juni 2020</p>
        </div>
      </a>

      <a href="#2" class="collection-item waves-effect row">
        <div class="col s2">
          <i class="material-icons icon-list">book</i>
        </div>
        <div class="col s10">
          <h6 class="dark-text semibold nm">Tugas 1</h6>
          <p class="semibold dark2-text nm font-small">12 Juni 2020</p>
        </div>
      </a>

      <a href="#3" class="collection-item waves-effect row">
        <div class="col s2">
          <i class="material-icons icon-list">forum</i>
        </div>
        <div class="col s10">
          <h6 class="dark-text semibold nm">Tugas 1</h6>
          <p class="semibold dark2-text nm font-small">12 Juni 2020</p>
        </div>
      </a>

      <a href="#3" class="collection-item waves-effect row">
        <div class="col s2">
          <i class="material-icons icon-list">forum</i>
        </div>
        <div class="col s10">
          <h6 class="dark-text semibold nm">Tugas 1</h6>
          <p class="semibold dark2-text nm font-small">12 Juni 2020</p>
        </div>
      </a>

      <a href="#3" class="collection-item waves-effect row">
        <div class="col s2">
          <i class="material-icons icon-list">forum</i>
        </div>
        <div class="col s10">
          <h6 class="dark-text semibold nm">Tugas 1</h6>
          <p class="semibold dark2-text nm font-small">12 Juni 2020</p>
        </div>
      </a>

      <a href="#3" class="collection-item waves-effect row">
        <div class="col s2">
          <i class="material-icons icon-list">forum</i>
        </div>
        <div class="col s10">
          <h6 class="dark-text semibold nm">Tugas 1</h6>
          <p class="semibold dark2-text nm font-small">12 Juni 2020</p>
        </div>
      </a>

      <a href="#3" class="collection-item waves-effect row">
        <div class="col s2">
          <i class="material-icons icon-list">forum</i>
        </div>
        <div class="col s10">
          <h6 class="dark-text semibold nm">Tugas 1</h6>
          <p class="semibold dark2-text nm font-small">12 Juni 2020</p>
        </div>
      </a>

      <a href="#3" class="collection-item waves-effect row">
        <div class="col s2">
          <i class="material-icons icon-list">forum</i>
        </div>
        <div class="col s10">
          <h6 class="dark-text semibold nm">Tugas 1</h6>
          <p class="semibold dark2-text nm font-small">12 Juni 2020</p>
        </div>
      </a>

      <a href="#3" class="collection-item waves-effect row">
        <div class="col s2">
          <i class="material-icons icon-list">forum</i>
        </div>
        <div class="col s10">
          <h6 class="dark-text semibold nm">Tugas 1</h6>
          <p class="semibold dark2-text nm font-small">12 Juni 2020</p>
        </div>
      </a>

      <a href="#3" class="collection-item waves-effect row">
        <div class="col s2">
          <i class="material-icons icon-list">forum</i>
        </div>
        <div class="col s10">
          <h6 class="dark-text semibold nm">Tugas 1</h6>
          <p class="semibold dark2-text nm font-small">12 Juni 2020</p>
        </div>
      </a>
    </div>
  </div>
</div>
@endif

@if(request()->is('siswa','siswa/*'))
<ul id='dropdown-akun-siswa' class='dropdown-content'>
  <li><a href="{{route('siswa.setting')}}">Setting</a></li>
  <li><a href="{{route('get.logout')}}">Logout</a></li>
</ul>

<div id='dropdown-notif-siswa' class='dropdown-content dropdown-layout'>
  <div class="content">
    <h5 class="dark-text nm bold mb2">Notifikasi</h5>

    <div class="collection stripped borderles linked hoverabel-bg nm">
      <a href="#1" class="collection-item waves-effect row">
        <div class="col s2">
          <i class="material-icons icon-list">assignment</i>
        </div>
        <div class="col s10">
          <h6 class="dark-text semibold nm">Tugas 1</h6>
          <p class="semibold dark2-text nm font-small">12 Juni 2020</p>
        </div>
      </a>

      <a href="#2" class="collection-item waves-effect row">
        <div class="col s2">
          <i class="material-icons icon-list">book</i>
        </div>
        <div class="col s10">
          <h6 class="dark-text semibold nm">Tugas 1</h6>
          <p class="semibold dark2-text nm font-small">12 Juni 2020</p>
        </div>
      </a>

      <a href="#3" class="collection-item waves-effect row">
        <div class="col s2">
          <i class="material-icons icon-list">forum</i>
        </div>
        <div class="col s10">
          <h6 class="dark-text semibold nm">Tugas 1</h6>
          <p class="semibold dark2-text nm font-small">12 Juni 2020</p>
        </div>
      </a>

      <a href="#3" class="collection-item waves-effect row">
        <div class="col s2">
          <i class="material-icons icon-list">forum</i>
        </div>
        <div class="col s10">
          <h6 class="dark-text semibold nm">Tugas 1</h6>
          <p class="semibold dark2-text nm font-small">12 Juni 2020</p>
        </div>
      </a>

      <a href="#3" class="collection-item waves-effect row">
        <div class="col s2">
          <i class="material-icons icon-list">forum</i>
        </div>
        <div class="col s10">
          <h6 class="dark-text semibold nm">Tugas 1</h6>
          <p class="semibold dark2-text nm font-small">12 Juni 2020</p>
        </div>
      </a>

      <a href="#3" class="collection-item waves-effect row">
        <div class="col s2">
          <i class="material-icons icon-list">forum</i>
        </div>
        <div class="col s10">
          <h6 class="dark-text semibold nm">Tugas 1</h6>
          <p class="semibold dark2-text nm font-small">12 Juni 2020</p>
        </div>
      </a>

      <a href="#3" class="collection-item waves-effect row">
        <div class="col s2">
          <i class="material-icons icon-list">forum</i>
        </div>
        <div class="col s10">
          <h6 class="dark-text semibold nm">Tugas 1</h6>
          <p class="semibold dark2-text nm font-small">12 Juni 2020</p>
        </div>
      </a>

      <a href="#3" class="collection-item waves-effect row">
        <div class="col s2">
          <i class="material-icons icon-list">forum</i>
        </div>
        <div class="col s10">
          <h6 class="dark-text semibold nm">Tugas 1</h6>
          <p class="semibold dark2-text nm font-small">12 Juni 2020</p>
        </div>
      </a>

      <a href="#3" class="collection-item waves-effect row">
        <div class="col s2">
          <i class="material-icons icon-list">forum</i>
        </div>
        <div class="col s10">
          <h6 class="dark-text semibold nm">Tugas 1</h6>
          <p class="semibold dark2-text nm font-small">12 Juni 2020</p>
        </div>
      </a>

      <a href="#3" class="collection-item waves-effect row">
        <div class="col s2">
          <i class="material-icons icon-list">forum</i>
        </div>
        <div class="col s10">
          <h6 class="dark-text semibold nm">Tugas 1</h6>
          <p class="semibold dark2-text nm font-small">12 Juni 2020</p>
        </div>
      </a>
    </div>
  </div>
</div>
@endif

@if(request()->is('admin-sekolah','admin-sekolah/*'))
<ul id='dropdown-akun-admin-sekolah' class='dropdown-content'>
  <li><a href="#!">Setting</a></li>
  <li><a href="{{route('get.logout')}}">Logout</a></li>
</ul>

<div id='dropdown-notif-adminsekolah' class='dropdown-content dropdown-layout'>
  <div class="content">
    <h5 class="dark-text nm bold mb2">Notifikasi</h5>

    <div class="collection stripped borderles linked hoverabel-bg nm">
      <a href="#1" class="collection-item waves-effect row">
        <div class="col s2">
          <i class="material-icons icon-list">assignment</i>
        </div>
        <div class="col s10">
          <h6 class="dark-text semibold nm">Tugas 1</h6>
          <p class="semibold dark2-text nm font-small">12 Juni 2020</p>
        </div>
      </a>

      <a href="#2" class="collection-item waves-effect row">
        <div class="col s2">
          <i class="material-icons icon-list">book</i>
        </div>
        <div class="col s10">
          <h6 class="dark-text semibold nm">Tugas 1</h6>
          <p class="semibold dark2-text nm font-small">12 Juni 2020</p>
        </div>
      </a>

      <a href="#3" class="collection-item waves-effect row">
        <div class="col s2">
          <i class="material-icons icon-list">forum</i>
        </div>
        <div class="col s10">
          <h6 class="dark-text semibold nm">Tugas 1</h6>
          <p class="semibold dark2-text nm font-small">12 Juni 2020</p>
        </div>
      </a>

      <a href="#3" class="collection-item waves-effect row">
        <div class="col s2">
          <i class="material-icons icon-list">forum</i>
        </div>
        <div class="col s10">
          <h6 class="dark-text semibold nm">Tugas 1</h6>
          <p class="semibold dark2-text nm font-small">12 Juni 2020</p>
        </div>
      </a>

      <a href="#3" class="collection-item waves-effect row">
        <div class="col s2">
          <i class="material-icons icon-list">forum</i>
        </div>
        <div class="col s10">
          <h6 class="dark-text semibold nm">Tugas 1</h6>
          <p class="semibold dark2-text nm font-small">12 Juni 2020</p>
        </div>
      </a>

      <a href="#3" class="collection-item waves-effect row">
        <div class="col s2">
          <i class="material-icons icon-list">forum</i>
        </div>
        <div class="col s10">
          <h6 class="dark-text semibold nm">Tugas 1</h6>
          <p class="semibold dark2-text nm font-small">12 Juni 2020</p>
        </div>
      </a>

      <a href="#3" class="collection-item waves-effect row">
        <div class="col s2">
          <i class="material-icons icon-list">forum</i>
        </div>
        <div class="col s10">
          <h6 class="dark-text semibold nm">Tugas 1</h6>
          <p class="semibold dark2-text nm font-small">12 Juni 2020</p>
        </div>
      </a>

      <a href="#3" class="collection-item waves-effect row">
        <div class="col s2">
          <i class="material-icons icon-list">forum</i>
        </div>
        <div class="col s10">
          <h6 class="dark-text semibold nm">Tugas 1</h6>
          <p class="semibold dark2-text nm font-small">12 Juni 2020</p>
        </div>
      </a>

      <a href="#3" class="collection-item waves-effect row">
        <div class="col s2">
          <i class="material-icons icon-list">forum</i>
        </div>
        <div class="col s10">
          <h6 class="dark-text semibold nm">Tugas 1</h6>
          <p class="semibold dark2-text nm font-small">12 Juni 2020</p>
        </div>
      </a>

      <a href="#3" class="collection-item waves-effect row">
        <div class="col s2">
          <i class="material-icons icon-list">forum</i>
        </div>
        <div class="col s10">
          <h6 class="dark-text semibold nm">Tugas 1</h6>
          <p class="semibold dark2-text nm font-small">12 Juni 2020</p>
        </div>
      </a>
    </div>
  </div>
</div>
@endif

@if(request()->is('admin','admin/*'))
<ul id='dropdown-akun-admin' class='dropdown-content'>
  <li><a href="#!">Setting</a></li>
  <li><a href="{{route('get.logout')}}">Logout</a></li>
</ul>
@endif