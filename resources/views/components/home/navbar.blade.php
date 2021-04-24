<div class="navbar-fixed">
  <nav id="navbar-home" class="navbar-home">
    <div class="container">
      <div class="nav-wrapper">

        <a href="/" class="brand-logo"><img class="responsive-img" src="{{asset('asset/img/logo/asset_erlogo_white.png')}}" width="120px"></a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>

        <ul class="right hide-on-med-and-down">
          <li class="item"><a href="{{route('tentang')}}">Tentang</a></li>
          <li class="item"><a href="{{route('paket')}}">Paket</a></li>
          <li class="item"><a href="{{route('dokumentasi')}}">Panduan</a></li>
          <li class="item"><a href="{{route('kontak')}}">Hubungi Kami</a></li>
          <li class="item-button">
            <a href="{{route('login')}}" class="matter-button-outlined white-text white-border">Masuk</a>
          </li>
        </ul>

      </div>
    </div>
  </nav>
</div>

<ul class="sidenav" id="mobile-demo">
  <li><a href="{{route('tentang')}}">Tentang</a></li>
  <li><a href="{{route('paket')}}">Produk</a></li>
  <li><a href="{{route('dokumentasi')}}">Dokumentasi</a></li>
  <li><a href="{{route('kontak')}}">Hubungi Kami</a></li>
  <li><a href="{{route('login')}}">Login</a></li>
</ul>