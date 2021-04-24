{{-- MODAL DISKUSI DETAIL --}}

{{-- DELETE --}}
<div id="modal-delete" class="modal modal-small">
  <div class="modal-content center">
    <h5>Hapus Kontribusi</h5>
    <p>Anda akan menghapus kontribusi diskusi anda</p>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-close matter-button-text danger-text">Cancel</a>
    <a href="#!" class="modal-close matter-button-text">Hapus</a>
  </div>
</div>

{{-- EDIT --}}
<div id="modal-edit" class="modal modal-full">
  <div class="modal-header row nm">
    <div class="col s11">
      <h5>Edit Kontribusi Diskusi</h5>
      <p>Nama Diskusi</p>
    </div>
    <div class="col s1 right-align">
      <button class="matter-button-circle modal-close"><i class="material-icons">close</i></button>
    </div>
  </div>

  <div class="modal-content">
    <div class="container w95">
      <form action="" method="POST" class="row">
        @csrf
        <div class="col s12">
          <textarea id="konten" name="konten"></textarea>
          <div class="pl4-res ptb1">
            <div class="ptb1 right-align">
              <button type="submit" class="matter-button-contained">Kirim</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

{{-- DETAIL --}}
<div id="modal-detail" class="modal modal-full">
  <div class="modal-header row nm">
    <div class="col s11">
      <h5>Detail Kontribusi</h5>
      <p>Nama Diskusi</p>
    </div>
    <div class="col s1 right-align">
      <button class="matter-button-circle modal-close"><i class="material-icons">close</i></button>
    </div>
  </div>

  <div class="modal-content">
    <div class="container w95">

      <div class="row">
        <div class="col s12">
          <div class="badge-ed img-text-center mb2">
            <div class="img">
              <img src="{{asset('asset/img/user/foto/foto.jpg')}}">
            </div>
            <div class="text">
              <h6 class="semibold">Nama Siswa</h6>
              <p>1202170035</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col s6 m3 l3">
          <label id="select_search" class="matter-textfield-flat center-select select-flat" style="width: 100%;">
            <select>
              <option value="" disabled selected>Status</option>
              <option value="1">Kontribusi Utama</option>
              <option value="2">Kontribusi Balasan</option>
            </select>
            <span></span>
          </label>
        </div>
        <div class="col s12 m7 l7 hide-on-small-only"></div>
        <div class="col s6 m2 l2 right-align-res">
          <button class="matter-button-text button-icon dropdown-trigger drop mtb05 primary-text" href="#!" data-target="dropdown-rekap2">
            <i class="material-icons left dark8-text">save_alt</i>Rekap
          </button>
        </div>
      </div>

      <table class="mb5">
        <thead>
          <tr>
            <th>Konteks</th>
            <th>Waktu</th>
            <th style="width: 800px">Kontribusi</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>
              <div class="semibold">Kontribusi Utama</div>
            </td>
            <td>13:00, 12 Juni 2020</td>
            <td>
              <p class="semibold">Siswa <i class="material-icons line-icon-p">trending_flat</i> Diskusi</p>
              <p>
                Buatlah program android sederhana yang terdiri dari 2 activity (bebas nama activity) yang activity 1 dapat berpindah ke activity 2. Kirim file Java dan XML serta video capture hasil aplikasi (bisa dari emulator/HP). Dan tambahkan file TXT dengan format NIM_NAMA
              </p>
            </td>
          </tr>
          <tr>
            <td>
              <div class="semibold">Kontribusi Balasan</div>
            </td>
            <td>13:00, 12 Juni 2020</td>
            <td>
              <p class="semibold">Siswa <i class="material-icons line-icon-p">trending_flat</i> Nama Tujuan</p>
              <p>
                Buatlah program android sederhana yang terdiri dari 2 activity (bebas nama activity) yang activity 1 dapat berpindah ke activity 2. Kirim file Java dan XML serta video capture hasil aplikasi (bisa dari emulator/HP). Dan tambahkan file TXT dengan format NIM_NAMA
              </p>
            </td>
          </tr>
        </tbody>
      </table>

    </div>
  </div>
</div>