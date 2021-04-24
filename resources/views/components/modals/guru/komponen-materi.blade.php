{{-- MODAL KOMPONEN MATERI --}}

{{-- ADD --}}
<div id="modal-add" class="modal modal-full">

  <div class="modal-header row nm">
    <div class="col s11">
      <h5>Materi Baru</h5>
    </div>
    <div class="col s1 right-align">
      <button class="matter-button-circle modal-close"><i class="material-icons">close</i></button>
    </div>
  </div>

  <div class="modal-content">
    <div class="container w95">

      <form action="" method="POST" class="row">
        @csrf
        <div class="col s12 m12 l9 mb1-res">

          <div class="row">
            <div class="col s12">
              <label id="nama_komponen" class="matter-textfield-filled" style="width: 100%">
                <input type="text" class="validate" placeholder=" " name="nama_komponen" required="" />
                <span>Nama Komponen Materi</span>
              </label>
            </div>
          </div>

          <div class="row">
            <div class="col s12">
              <textarea id="konten" name="deskripsi"></textarea>
            </div>
          </div>

          <div class="row">
            <div class="col s12 m12 l4">
              <input id="filepond-add" type="file" 
              class="filepond"
              name="file"
              multiple
              data-max-file-size="3MB"
              data-max-files="10" />
            </div>
          </div>

        </div>

        <div class="col s12 m12 l3">
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
            <div class="col s12">
              <button type="submit" class="matter-button-contained" style="width: 100%">Terbitkan</button>
            </div>
          </div>

        </div>
      </form>

    </div>
  </div>
</div>

{{-- DELETE --}}
<div id="modal-delete" class="modal modal-small">
  <div class="modal-content">
    <h6 class="bold">Hapus Materi ?</h6>
    <p>Materi ... akan terhapus</p>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-close matter-button-text">Batal</a>
    <a href="#!" class="modal-close matter-button-text primary-text">Hapus</a>
  </div>
</div>

{{-- EDIT --}}
<div id="modal-edit" class="modal modal-full">
  <div class="modal-header row nm">
    <div class="col s11">
      <h5>Edit Materi</h5>
      <p>Nama Materi</p>
    </div>
    <div class="col s1 right-align">
      <button class="matter-button-circle modal-close"><i class="material-icons">close</i></button>
    </div>
  </div>

  <div class="modal-content">
    <div class="container w95">

      <form action="" method="POST" class="row">
        @csrf
        <div class="col s12 m12 l9 mb1-res">

          <div class="row">
            <div class="col s12">
              <label id="nama_komponen" class="matter-textfield-filled" style="width: 100%">
                <input type="text" class="validate" placeholder=" " name="nama_komponen" required="" />
                <span>Nama Komponen Materi</span>
              </label>
            </div>
          </div>

          <div class="row">
            <div class="col s12">
              <textarea id="konten" name="deskripsi"></textarea>
            </div>
          </div>

          <div class="row">
            <div class="col s12 m12 l4">
              <input id="filepond-edit" type="file" 
              class="filepond"
              name="file"
              multiple
              data-max-file-size="3MB"
              data-max-files="10" />
            </div>
          </div>

        </div>

        <div class="col s12 m12 l3">
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
            <div class="col s12">
              <button type="submit" class="matter-button-contained" style="width: 100%">Terbitkan</button>
            </div>
          </div>

        </div>
      </form>

    </div>
  </div>
</div>