{{-- MODAL MAPEL --}}

{{-- BAB / KD --}}

{{-- ADD --}}
<div id="modal-add-bab" class="modal modal-full">

  <div class="modal-header row nm">
    <div class="col s11">
      <h5>BAB Baru</h5>
    </div>
    <div class="col s1 right-align">
      <button class="matter-button-circle modal-close"><i class="material-icons">close</i></button>
    </div>
  </div>

  <div class="modal-content">
    <div class="container w40">

      <form action="" method="POST" class="row">
        @csrf
        <div class="col s12 mb1-res">
          <div class="row">
            <div class="col s12">
              <label id="nama_materi" class="matter-textfield-filled" style="width: 100%">
                <input type="text" placeholder=" " name="nama_materi" required="" />
                <span>Nama BAB</span>
              </label>
            </div>
          </div>

          <div class="row">
            <div class="col s12">
              <p class="dark8-text semibold labeling">Tujuan Kelas</p>
              <label id="select_search" class="matter-textfield-flat center-select select-flat" style="width: 100%">
                <select multiple class="select-search" searchable='List of options' name="id_pelajaran">
                  <option value="" disabled>Pilih Kelas</option>
                  <option value="1">Option 1</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                  <option value="4">Option 4</option>
                </select>
                <span></span>
              </label>
            </div>
          </div>


          <div class="row">
            <div class="col s12 right-align">
              <button type="submit" class="matter-button-contained">Terbitkan</button>
            </div>
          </div>
        </div>
      </form>

    </div>
  </div>
</div>

{{-- DELETE --}}
<div id="modal-delete-bab" class="modal modal-small">
  <div class="modal-content center">
    <h5>Hapus BAB</h5>
    <p>Anda akan menghapus BAB ...</p>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-close matter-button-text danger-text">Cancel</a>
    <a href="#!" class="modal-close matter-button-text">Hapus</a>
  </div>
</div>

{{-- EDIT --}}
<div id="modal-edit-bab" class="modal modal-full">

  <div class="modal-header row nm">
    <div class="col s11">
      <h5>Edit BAB</h5>
    </div>
    <div class="col s1 right-align">
      <button class="matter-button-circle modal-close"><i class="material-icons">close</i></button>
    </div>
  </div>

  <div class="modal-content">
    <div class="container w40">

      <form action="" method="POST" class="row">
        @csrf
        <div class="col s12 mb1-res">
          <div class="row">
            <div class="col s12">
              <label id="nama_materi" class="matter-textfield-filled" style="width: 100%">
                <input type="text" placeholder=" " name="nama_materi" required="" />
                <span>Nama BAB</span>
              </label>
            </div>
          </div>

          <div class="row">
            <div class="col s12">
              <p class="dark8-text semibold labeling">Tujuan Kelas</p>
              <label id="select_search" class="matter-textfield-flat center-select select-flat" style="width: 100%">
                <select multiple class="select-search" searchable='List of options' name="id_pelajaran">
                  <option value="" disabled>Pilih Kelas</option>
                  <option value="1">Option 1</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                  <option value="4">Option 4</option>
                </select>
                <span></span>
              </label>
            </div>
          </div>


          <div class="row">
            <div class="col s12 right-align">
              <button type="submit" class="matter-button-contained">Terbitkan</button>
            </div>
          </div>
        </div>
      </form>

    </div>
  </div>
</div>








{{-- UJIAN --}}
{{-- ADD --}}
<div id="modal-add-ujian" class="modal modal-full">

  <div class="modal-header row nm">
    <div class="col s11">
      <h5>Ujian Baru</h5>
    </div>
    <div class="col s1 right-align">
      <button class="matter-button-circle modal-close"><i class="material-icons">close</i></button>
    </div>
  </div>

  <div class="modal-content">
    <div class="container w40">

      <form action="" method="POST" class="row">
        @csrf
        <div class="col s12 mb1-res">
          <div class="row">
            <div class="col s12">
              <p class="dark8-text semibold labeling">Tipe Penilaian</p>
              <label id="select_standared" class="matter-textfield-flat center-select select-flat" style="width: 100%">
                <select class="validate" required="true" aria-required="true" name="type">
                  <option value="" disabled selected>Pilih Tipe Penilaian</option>
                  <option value="1">UTS</option>
                  <option value="2">UAS</option>
                </select>
                <span></span>
              </label>
            </div>
          </div>

          <div class="row">
            <div class="col s12">
              <p class="dark8-text semibold labeling">Tujuan Kelas</p>
              <label id="select_search" class="matter-textfield-flat center-select select-flat" style="width: 100%">
                <select multiple class="select-search" searchable='List of options' name="id_pelajaran">
                  <option value="" disabled>Pilih Kelas</option>
                  <option value="1">Option 1</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                  <option value="4">Option 4</option>
                </select>
                <span></span>
              </label>
            </div>
          </div>


          <div class="row">
            <div class="col s12 right-align">
              <button type="submit" class="matter-button-contained">Terbitkan</button>
            </div>
          </div>
        </div>
      </form>

    </div>
  </div>
</div>

{{-- DELETE --}}
<div id="modal-delete-ujian" class="modal modal-small">
  <div class="modal-content center">
    <h5>Hapus Ujian</h5>
    <p>Anda akan menghapus Ujian ...</p>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-close matter-button-text danger-text">Cancel</a>
    <a href="#!" class="modal-close matter-button-text">Hapus</a>
  </div>
</div>

{{-- EDIT --}}
<div id="modal-edit-ujian" class="modal modal-full">

  <div class="modal-header row nm">
    <div class="col s11">
      <h5>Edit Ujian</h5>
    </div>
    <div class="col s1 right-align">
      <button class="matter-button-circle modal-close"><i class="material-icons">close</i></button>
    </div>
  </div>

  <div class="modal-content">
    <div class="container w40">

      <form action="" method="POST" class="row">
        @csrf
        <div class="col s12 mb1-res">
          <div class="row">
            <div class="col s12">
              <p class="dark8-text semibold labeling">Tipe Penilaian</p>
              <label id="select_standared" class="matter-textfield-flat center-select select-flat" style="width: 100%">
                <select class="validate" required="true" aria-required="true" name="type">
                  <option value="" disabled selected>Pilih Tipe Penilaian</option>
                  <option value="1">UTS</option>
                  <option value="2">UAS</option>
                </select>
                <span></span>
              </label>
            </div>
          </div>

          <div class="row">
            <div class="col s12">
              <p class="dark8-text semibold labeling">Tujuan Kelas</p>
              <label id="select_search" class="matter-textfield-flat center-select select-flat" style="width: 100%">
                <select multiple class="select-search" searchable='List of options' name="id_pelajaran">
                  <option value="" disabled>Pilih Kelas</option>
                  <option value="1">Option 1</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                  <option value="4">Option 4</option>
                </select>
                <span></span>
              </label>
            </div>
          </div>


          <div class="row">
            <div class="col s12 right-align">
              <button type="submit" class="matter-button-contained">Terbitkan</button>
            </div>
          </div>
        </div>
      </form>

    </div>
  </div>
</div>