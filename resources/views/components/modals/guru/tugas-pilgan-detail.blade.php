{{-- ADD SOAL PILGAN --}}
<div id="modal-add-pilgan" class="modal modal-full">

  <div class="modal-header row nm">
    <div class="col s11">
      <h5>Soal Pilihan Ganda Baru</h5>
      <p>Nama Tugas Pilgan</p>
    </div>
    <div class="col s1 right-align">
      <button class="matter-button-circle modal-close"><i class="material-icons">close</i></button>
    </div>
  </div>

  <div class="modal-content">
    <div class="container w60">
      <form action="" method="POST">
        @csrf

        <div class="row">
          <div class="col s12">
            <h5 class="primary-text semibold">Soal</h5>
          </div>
        </div>

        <div class="row">
          <div class="col s12">
            <textarea class="tinymce-enabled-message" cols="80" id="description1"></textarea>
          </div>
        </div>

        <div class="row">
          <div class="col s12">
            <h5 class="primary-text semibold">Jawaban</h5>
          </div>
        </div>

        <div class="divider primary mb2"></div>

        <div id="soal_pilgans">
          <div class="row">
            <div class="col s12">
              <a id="add_pilhan_btn" class="add-type matter-button-contained button-icon" href="javascript: void(0)" tiitle="Click to add more">
                <i class="material-icons left">add</i>Tambah Pilihan
              </a>
            </div>
          </div>

          <div id="component_pilihan_null" class="row">
            <div class="col s12">
              <div class="center mb4">
                <img class="mb2" src="{{asset('asset/img/illustrasi/component_null/pilgan_pilihan.png')}}" height="200px">
                <p>
                  Belum ada Pilihan Jawaban pada soal ini
                </p>
              </div>
            </div>
          </div>

          <div id="type_container">
            <div class="row" id="edit-0">
              <div class="col s12">

              </div>
            </div>
          </div>

          <div id="type-container" class="hide">
            <div class="row type-rows card outlined noborder hoverable-shadow-nb">
              <div class="card-header row">
                <div class="title col s11">
                  <h6 class="semibold primary-text">Pilihan <span class="no_pilihan"></span></h6>
                </div>
                <div class="link-card col s1">
                  <a id="del_pilihan_btn" class="remove-type matter-button-circle" targetDiv="" data-id="0" href="javascript: void(0)">
                    <i class="material-icons primary-text">delete_forever</i>
                  </a>
                </div>
              </div>

              <div class="card-content">
                <textarea class="tinymce-enabled-message-new" id=""></textarea>
                <div class="mt2">
                  <label class="matter-radio">
                    <input type="radio" name="group">
                    <span>Tetapkan sebagai jawaban <span class="bold">BENAR</span></span>
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="divider mtb2"></div>

        <div class="row">
          <div class="col s12 right-align">
            <button class="matter-button-contained">Terbitkan</button>
          </div>
        </div>

      </form>
    </div>
  </div>
</div>

{{-- ADD SOAL ESAY --}}
<div id="modal-add-esay" class="modal modal-full">

  <div class="modal-header row nm">
    <div class="col s11">
      <h5>Soal Esay Baru</h5>
      <p>Nama Tugas Pilgan</p>
    </div>
    <div class="col s1 right-align">
      <button class="matter-button-circle modal-close"><i class="material-icons">close</i></button>
    </div>
  </div>

  <div class="modal-content">
    <div class="container w60">
      <form action="" method="POST">
        @csrf

        <div class="row">
          <div class="col s12">
            <h5 class="primary-text semibold">Soal</h5>
          </div>
        </div>

        <div class="row">
          <div class="col s12">
            <textarea class="tinymce-enabled-message" cols="80" id="description1"></textarea>
          </div>
        </div>

        <div class="row">
          <div class="col s12">
            <h5 class="primary-text semibold">Jawaban</h5>
          </div>
        </div>

        <div class="divider primary mb2"></div>

        <div class="row">
          <div class="col s12">
            <label class="matter-checkbox">
              <input type="checkbox">
              <span>Siswa dapat mengumpulkan jawaban berupa file</span>
            </label>
          </div>
        </div>

        <div class="divider mtb2"></div>

        <div class="row">
          <div class="col s12 right-align">
            <button class="matter-button-contained">Terbitkan</button>
          </div>
        </div>

      </form>
    </div>
  </div>
</div>

{{-- ADD SOAL TRUE FALSE --}}
<div id="modal-add-truefalse" class="modal modal-full">

  <div class="modal-header row nm">
    <div class="col s11">
      <h5>Soal True False Baru</h5>
      <p>Nama Tugas Pilgan</p>
    </div>
    <div class="col s1 right-align">
      <button class="matter-button-circle modal-close"><i class="material-icons">close</i></button>
    </div>
  </div>

  <div class="modal-content">
    <div class="container w60">
      <form action="" method="POST">
        @csrf

        <div class="row">
          <div class="col s12">
            <h5 class="primary-text semibold">Soal</h5>
          </div>
        </div>

        <div class="row">
          <div class="col s12">
            <textarea class="tinymce-enabled-message" cols="80" id="description1"></textarea>
          </div>
        </div>

        <div class="row">
          <div class="col s12">
            <h5 class="primary-text semibold">Jawaban</h5>
          </div>
        </div>

        <div class="divider primary mb2"></div>

        <div id="soal_trufalses">

          <table class="mb4">
            <tr>
              <td>
                <h6 class="semibold primary-text">True <span class="no_pilihan"></span></h6>
              </td>
              <td class="right-align">
                <label class="matter-radio">
                  <input type="radio" name="group">
                  <span>Jawaban <span class="bold">BENAR</span></span>
                </label>
              </td>
            </tr>
            <tr style="border-bottom: 0">
              <td>
                <h6 class="semibold primary-text">False <span class="no_pilihan"></span></h6>
              </td>
              <td class="right-align">
                <label class="matter-radio">
                  <input type="radio" name="group">
                  <span>Jawaban <span class="bold">BENAR</span></span>
                </label>
              </td>
            </tr>
          </table>
        </div>

        <div class="divider mtb2"></div>

        <div class="row">
          <div class="col s12 right-align">
            <button class="matter-button-contained">Terbitkan</button>
          </div>
        </div>

      </form>
    </div>
  </div>
</div>

{{-- EDIT SOAL --}}
{{-- EDIT SOAL PILGAN --}}
<div id="modal-edit-soal" class="modal modal-full">

  <div class="modal-header row nm">
    <div class="col s11">
      <h5>Edit Soal</h5>
      <p>Nama Tugas Pilgan</p>
    </div>
    <div class="col s1 right-align">
      <button class="matter-button-circle modal-close"><i class="material-icons">close</i></button>
    </div>
  </div>

  <div class="modal-content">
    <div class="container w60">
      <form action="" method="POST">
        @csrf

        <div class="row">
          <div class="col s12">
            <h5 class="primary-text semibold">Soal</h5>
          </div>
          <div class="col s12">
            <textarea id="konten" name="deskripsi"></textarea>
          </div>
        </div>

        <div class="row">
          <div class="col s4 m8 l8">
            <h5 class="primary-text semibold">Jawaban</h5>
          </div>
          <div class="col s8 m4 l4">
            <label id="select_standared" class="matter-textfield-flat" style="width: 100%">
              <select id="select_jw_edit" class="validate" required="true" aria-required="true" name="kunci">
                <option value="" disabled selected>Pilih Jawaban</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
              </select>
            </label>
          </div>
        </div>

        <ul class="collapsible border right-icon popup expandable">
          <li>
            <div class="collapsible-header">
              <i id="jw_A_edit" class="material-icons primary-text">radio_button_unchecked</i>
              <i class="right material-icons">keyboard_arrow_down</i>
              <span>Jawaban A</span>
            </div>
            <div class="collapsible-body">
              <textarea id="konten" name="deskripsi"></textarea>
            </div>
          </li>
          <li>
            <div class="collapsible-header">
              <i id="jw_B_edit" class="material-icons primary-text">radio_button_unchecked</i>
              <i class="right material-icons">keyboard_arrow_down</i>
              <span>Jawaban B</span>
            </div>
            <div class="collapsible-body">
              <textarea id="konten" name="deskripsi"></textarea>
            </div>
          </li>
          <li>
            <div class="collapsible-header">
              <i id="jw_C_edit" class="material-icons primary-text">radio_button_unchecked</i>
              <i class="right material-icons">keyboard_arrow_down</i>
              <span>Jawaban C</span>
            </div>
            <div class="collapsible-body">
              <textarea id="konten" name="deskripsi"></textarea>
            </div>
          </li>
          <li>
            <div class="collapsible-header">
              <i id="jw_D_edit" class="material-icons primary-text">radio_button_unchecked</i>
              <i class="right material-icons">keyboard_arrow_down</i>
              <span>Jawaban D</span>
            </div>
            <div class="collapsible-body">
              <textarea id="konten" name="deskripsi"></textarea>
            </div>
          </li>
        </ul>

        <div class="row mtb3">
          <div class="col s12 right-align">
            <button class="matter-button-contained">Terbitkan</button>
          </div>
        </div>

      </form>
    </div>
  </div>
</div>

{{-- ADD SOAL ESAY --}}
<div id="modal-edit-esay" class="modal modal-full">

  <div class="modal-header row nm">
    <div class="col s11">
      <h5>Edit Soal Esay</h5>
      <p>Nama Tugas Pilgan</p>
    </div>
    <div class="col s1 right-align">
      <button class="matter-button-circle modal-close"><i class="material-icons">close</i></button>
    </div>
  </div>

  <div class="modal-content">
    <div class="container w60">
      <form action="" method="POST">
        @csrf

        <div class="row">
          <div class="col s12">
            <h5 class="primary-text semibold">Soal</h5>
          </div>
        </div>

        <div class="row">
          <div class="col s12">
            <textarea class="tinymce-enabled-message" cols="80" id="description1"></textarea>
          </div>
        </div>

        <div class="row">
          <div class="col s12 right-align">
            <button class="matter-button-contained">Terbitkan</button>
          </div>
        </div>

      </form>
    </div>
  </div>
</div>

{{-- HAPUS SOAL PILGAN --}}
<div id="modal-delete-soal" class="modal modal-small">
  <div class="modal-content center">
    <h5>Hapus Soal</h5>
    <p>Anda akan menghapus Soal ...</p>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-close matter-button-text danger-text">Cancel</a>
    <a href="#!" class="modal-close matter-button-text">Hapus</a>
  </div>
</div>

{{-- LIHAT KUNCI --}}
<div id="modal-detail-esay" class="modal modal-full">

  <div class="modal-header row nm">
    <div class="col s11">
      <h5>Soal Esay</h5>
      <p>Soal No 1 Tugas Pilgan</p>
    </div>
    <div class="col s1 right-align">
      <button class="matter-button-circle modal-close"><i class="material-icons">close</i></button>
    </div>
  </div>

  <div class="modal-content">
    <div class="container w60">
      <div class="row">

        <div class="col s12">
          <h5 class="primary-text semibold">Soal</h5>
        </div>
        <div class="col 12">
          <p class="ltext">
            Buatlah program android sederhana yang terdiri dari 2 activity (bebas nama activity) yang activity 1 dapat 
            berpindah ke activity 2. Kirim file Java dan XML serta video capture hasil aplikasi (bisa dari emulator/HP). 
            Dan tambahkan file TXT dengan format NIM_NAMA
          </p>
        </div>

      </div>
    </div>
  </div>
</div>

{{-- HASIL PILGAN --}}
<div id="modal-hasil-pilgan" class="modal modal-full">

  <div class="modal-header row nm">
    <div class="col s11">
      <h5>Hasil Tugas</h5>
      <p class="normal">Nama Kelas <i class="material-icons line-icon-p">stop_circle</i> Nama Mapel</p>
    </div>
    <div class="col s1 right-align">
      <button class="matter-button-circle modal-close"><i class="material-icons">close</i></button>
    </div>
  </div>

  <div class="modal-content">
    <div class="container w30">
      <div class="row nm">
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
        <div class="col s12">
          <div class="card outlined noborder">
            <div class="row nm">
              <div class="col s12 m12 l4 center">
                <h6 class="nm mtb05 primary-text">Nilai</h6>
                <h5 class="bold nm mtb05 primary-text">100</h5>
              </div>
              <div class="col s12 m12 l4 center">
                <h6 class="success-text nm mtb05">Benar</h6>
                <h5 class="bold nm mtb05">10</h5>
              </div>
              <div class="col s12 m12 l4 center">
                <h6 class="danger-text nm mtb05">Salah</h6>
                <h5 class="bold nm mtb05">10</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container mb5">
      <div class="row mb3">
        <div class="col s12 m12 l6">
          <div class="row">
            <div class="col s6">
             <label id="select_search" class="matter-textfield-flat center-select select-flat" style="width: 100%;">
              <select>
                <option value="" disabled selected>Tipe Soal</option>
                <option value="benar">Esay</option>
                <option value="salah">Pilihan Ganda</option>
                <option value="salah">True False</option>
              </select>
              <span></span>
            </label>
          </div>
          <div class="col s6">
           <label id="select_search" class="matter-textfield-flat center-select select-flat" style="width: 100%;">
            <select>
              <option value="" disabled selected>Jawaban</option>
              <option value="benar">Benar</option>
              <option value="salah">Salah</option>
            </select>
            <span></span>
          </label>
        </div>
      </div>
    </div>
    <div class="col s12 m12 l6 right-align-res">
      <button class="matter-button-text button-icon dropdown-trigger drop mtb05 primary-text" href="#!" data-target="dropdown-rekap-jawaban">
        <i class="material-icons left dark8-text">save_alt</i>Rekap
      </button>
    </div>
  </div>

  <table>
    <thead>
      <tr>
        <th>No</th>
        <th>Soal</th>
        <th>Jawaban</th>
        <th></th>
      </tr>
    </thead>

    <tbody>
      <tr>
        <td>1</td>
        <td>
          <p class="ltext">
            Buatlah program android sederhana yang terdiri dari 2 activity (bebas nama activity) yang activity 1 dapat 
            berpindah ke activity 2. Kirim file Java dan XML serta video capture ...
          </p>
          <p class="normal dark7-text">True False</p>
        </td>
        <td>
          <h6 class="success-text">Benar</h6>
        </td>
        <td>
          <a class="matter-button-circle dropdown-trigger drop dark-text" href="#!" data-target="dropdown-menu-jawaban">
            <i class="material-icons">more_vert</i>
          </a>
        </td>
      </tr>
      <tr>
        <td>2</td>
        <td>
          <p class="ltext">
            Buatlah program android sederhana yang terdiri dari 2 activity (bebas nama activity) yang activity 1 dapat 
            berpindah ke activity 2. Kirim file Java dan XML serta video capture ...
          </p>
          <p class="normal dark7-text">Pilihan</p>
        </td>
        <td>
          <h6 class="danger-text">Salah</h6>
        </td>
        <td>
          <a class="matter-button-circle dropdown-trigger drop dark-text" href="#!" data-target="dropdown-menu-jawaban">
            <i class="material-icons">more_vert</i>
          </a>
        </td>
      </tr>
      <tr>
        <td>3</td>
        <td>
          <p class="ltext">
            Buatlah program android sederhana yang terdiri dari 2 activity (bebas nama activity) yang activity 1 dapat 
            berpindah ke activity 2. Kirim file Java dan XML serta video capture ...
          </p>
          <p class="normal dark7-text">Esay</p>
        </td>
        <td>
          <h6 class="dark-text">Belum Dikoreksi</h6>
        </td>
        <td>
          <a class="matter-button-circle dropdown-trigger drop dark-text" href="#!" data-target="dropdown-menu-jawaban">
            <i class="material-icons">more_vert</i>
          </a>
        </td>
      </tr>
    </tbody>
  </table>
</div>
</div>
</div>

{{-- JAWABAN DETAIL --}}
<div id="modal-jawaban-detail" class="modal modal-full">

  <div class="modal-header row nm">
    <div class="col s11">
      <h5>Jawaban</h5>
      <p>Soal No 1 Tugas Pilgan</p>
    </div>
    <div class="col s1 right-align">
      <button class="matter-button-circle modal-close"><i class="material-icons">close</i></button>
    </div>
  </div>

  <div class="modal-content">
    <div class="container w60">
      <div class="row">

        <div class="col s12">
          <h5 class="primary-text semibold">Soal</h5>
        </div>
        <div class="col 12">
          <p class="ltext">
            Buatlah program android sederhana yang terdiri dari 2 activity (bebas nama activity) yang activity 1 dapat 
            berpindah ke activity 2. Kirim file Java dan XML serta video capture hasil aplikasi (bisa dari emulator/HP). 
            Dan tambahkan file TXT dengan format NIM_NAMA
          </p>
        </div>

        <div class="col s12">
          <div class="divider mtb2"></div>
        </div>

        <div class="col s12">
          <h5 class="primary-text semibold nm"><span class="material-icons success-text">check_circle</span> Jawaban Siswa</h5>
        </div>
        <div class="col s12">
          <p class="ltext">
            Buatlah program android sederhana yang terdiri dari 2 activity (bebas nama activity) yang activity 1 dapat 
            berpindah ke activity 2. Kirim file Java dan XML serta video capture hasil aplikasi (bisa dari emulator/HP). 
            Dan tambahkan file TXT dengan format NIM_NAMA
          </p>
        </div>

        <div class="col s12 mtb1"></div>

        <div class="col s12">
          <h5 class="primary-text semibold nm"><span class="material-icons success-text">check_circle</span> Kunci Jawaban</h5>
        </div>
        <div class="col s12">
          <p class="ltext">
            Buatlah program android sederhana yang terdiri dari 2 activity (bebas nama activity) yang activity 1 dapat 
            berpindah ke activity 2. Kirim file Java dan XML serta video capture hasil aplikasi (bisa dari emulator/HP). 
            Dan tambahkan file TXT dengan format NIM_NAMA
          </p>
        </div>

      </div>
    </div>
  </div>
</div>