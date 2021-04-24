{{-- MODAL TUGAS DETAIL --}}

{{-- JAWABAN --}}
<div id="modal-jawaban" class="modal modal-full">

  <div class="modal-header row nm">
    <div class="col s11">
      <h5>Jawaban</h5>
      <p class="normal">Nama Kelas <i class="material-icons line-icon-p">stop_circle</i> Nama Mapel</p>
    </div>
    <div class="col s1 right-align">
      <button class="matter-button-circle modal-close"><i class="material-icons">close</i></button>
    </div>
  </div>

  <div class="modal-content">
    <div class="container w95">

      <form action="" method="">
        @csrf
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

          <div class="col s12">
            <h6 class="semibold">Jawaban</h6>
            <p>
              Buatlah program android sederhana yang terdiri dari 2 activity (bebas nama activity) yang activity 1 dapat berpindah ke activity 2. Kirim file Java dan XML serta video capture hasil aplikasi (bisa dari emulator/HP). Dan tambahkan file TXT dengan format NIM_NAMA
            </p>
          </div>
        </div>

        <div class="divider mtb1"></div>

        <div class="row">
          <div class="col s12">
            <label class="matter-checkbox">
              <input id="yakin" type="checkbox">
              <span>Saya telah mengkoreksi pekerjaan ini</span>
            </label>
          </div>
        </div>

        <div class="divider mtb1"></div>

        <div class="row">
          <div class="col s12 m12 l9">
            <label class="matter-textfield-filled" style="width: 100%; height: 120px">
              <textarea id="catatan" placeholder=" " disabled></textarea>
              <span>Catatan</span>
            </label>
          </div>

          <div class="col s12 m12 l3">
            <label class="matter-textfield-outlined icon-input left-icon no-span" style="width: 100%">
              <input id="formnilai" type="text" placeholder="Nilai" disabled/>
              <span></span>
              <i class="material-icons">grading</i>
            </label>

            <button id="btnnilai" type="submit" class="matter-button-contained mt2" style="width: 100%" disabled="">Kirim Nilai</button>
          </div>
        </div>
      </form>

    </div>
  </div>
</div>