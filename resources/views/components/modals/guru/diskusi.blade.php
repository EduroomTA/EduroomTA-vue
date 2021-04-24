{{-- MODAL DISKUSI --}}

{{-- ADD --}}
<div id="modal-add" class="modal modal-full">

  <div class="modal-header row nm">
    <div class="col s11">
      <h5>Diskusi Baru</h5>
      <p>Nama Kelas</p>
    </div>
    <div class="col s1 right-align">
      <button class="matter-button-circle modal-close"><i class="material-icons">close</i></button>
    </div>
  </div>

  <div class="modal-content">
    <div class="">

      <form action="" method="POST" class="row">
        @csrf
        <div class="col s12 m12 l9 mb1-res">

          <div class="row">
            <div class="col s12">
              <label id="xmas" class="matter-textfield-filled" style="width: 100%">
                <input type="text" name="tugas" placeholder=" "/>
                <span>Judul Diskusi</span>
              </label>
            </div>
          </div>

          <div class="row">
            <div class="col s12">
             <textarea id="konten" name="konten"></textarea>
           </div>
         </div>

         <div class="row">
          <div class="col s12 m12 l4">
            <input id="filepond-add" type="file" class="filepond" name="file" multiple data-max-file-size="3MB" data-max-files="10"/>
          </div>
        </div>

      </div>

      <div class="col s12 m12 l3">
        <div class="row">
            <div class="col s12">
              <p class="dark8-text semibold labeling">Tujuan Kelas</p>
              <label id="select_search" class="matter-textfield-flat center-select select-flat" style="width: 100%">
                <select multiple class="select-search validate" searchable='List of options' name="kelas">
                  <option value="1" selected="">Option 1</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                  <option value="4">Option 4</option>
                </select>
                <span></span>
              </label>
            </div>
          </div>

          <div class="row mb0">
            <div class="col s12">
              <p class="dark8-text semibold labeling">Tipe Penilaian</p>
              <label id="select_standared" class="matter-textfield-flat center-select select-flat" style="width: 100%">
                <select class="validate" required="true" aria-required="true" name="type">
                  <option value="" disabled selected>Pilih Tipe Penilaian</option>
                  <option value="1">Pengetahuan</option>
                  <option value="2">Keterampilan</option>
                </select>
                <span></span>
              </label>
            </div>
          </div>

          <div class="row">
            <div class="col s12">
              <label id="select_standared" class="matter-textfield-flat center-select select-flat" style="width: 100%">
                <select class="validate" required="true" aria-required="true" name="type">
                  <option value="" disabled selected>Pilih Tipe Sub Penilaian</option>
                  <option value="1">Tugas</option>
                  <option value="2">Ulangan</option>
                  <option value="3">UTS</option>
                  <option value="3">UAS</option>
                </select>
                <span></span>
              </label>
            </div>
          </div>

        <div class="row">
          <div class="col s12 mb05">
            <p class="dark8-text semibold labeling">Tenggat</p>
          </div>
          <div class="col s6">
            <label id="xmas" class="matter-textfield-filled icon-input right-icon" style="width: 100%">
              <input type="text" placeholder=" " id="date2" data-select="datepicker" />
              <span>Tanggal</span>
              <i class="material-icons">insert_invitation</i>
            </label>
          </div>
          <div class="col s6">
            <label id="xmas" class="matter-textfield-filled icon-input right-icon time-picker" style="width: 100%">
              <input type="text" placeholder=" " />
              <span>Waktu</span>
              <i class="material-icons asdasd">query_builder</i>
            </label>
          </div>
        </div>

        <div id="penjadwalan_add_diskusi_layout" class="row hide">
          <div class="col s12 mb05">
            <p class="dark8-text semibold labeling">Penerbitan</p>
          </div>
          <div class="col s6">
            <label id="xmas" class="matter-textfield-filled icon-input right-icon" style="width: 100%">
              <input type="text" placeholder=" " id="date2" data-select="datepicker" />
              <span>Tanggal</span>
              <i class="material-icons">insert_invitation</i>
            </label>
          </div>
          <div class="col s6">
            <label id="xmas" class="matter-textfield-filled icon-input right-icon time-picker" style="width: 100%">
              <input type="text" placeholder=" " />
              <span>Waktu</span>
              <i class="material-icons asdasd">query_builder</i>
            </label>
          </div>
        </div>

        <div class="row nm mtb2">
          <div class="col s12">
            <label class="matter-checkbox">
              <input id="penjadwalan_diskusi_add" type="checkbox">
              <span>Jadwalkan Penerbitan</span>
            </label>
          </div>
        </div>

        <div class="row">
          <div class="col s12">
            <button class="matter-button-contained" style="width: 100%">Terbitkan</button>
          </div>
        </div>

      </div>
    </form>

  </div>
</div>
</div>

{{-- DELETE --}}
<div id="modal-delete" class="modal modal-small">
  <div class="modal-content center">
    <h5>Hapus Diskusi</h5>
    <p>Anda akan menghapus Diskusi ...</p>
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
      <h5>Edit Diskusi</h5>
      <p>Nama Kelas</p>
    </div>
    <div class="col s1 right-align">
      <button class="matter-button-circle modal-close"><i class="material-icons">close</i></button>
    </div>
  </div>

  <div class="modal-content">
    <div class="">

      <form action="" method="POST" class="row">
        @csrf
        <div class="col s12 m12 l9 mb1-res">

          <div class="row">
            <div class="col s12">
              <label id="xmas" class="matter-textfield-filled" style="width: 100%">
                <input type="text" name="tugas" placeholder=" "/>
                <span>Judul Diskusi</span>
              </label>
            </div>
          </div>

          <div class="row">
            <div class="col s12">
             <textarea id="konten" name="konten"></textarea>
           </div>
         </div>

         <div class="row">
          <div class="col s12 m12 l4">
            <input id="filepond-edit" type="file" class="filepond" name="file" multiple data-max-file-size="3MB" data-max-files="10"/>
          </div>
        </div>

      </div>

      <div class="col s12 m12 l3">
        <div class="row">
            <div class="col s12">
              <p class="dark8-text semibold labeling">Tujuan Kelas</p>
              <label id="select_search" class="matter-textfield-flat center-select select-flat" style="width: 100%">
                <select multiple class="select-search validate" searchable='List of options' name="kelas">
                  <option value="1" selected="">Option 1</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                  <option value="4">Option 4</option>
                </select>
                <span></span>
              </label>
            </div>
          </div>

          <div class="row mb0">
            <div class="col s12">
              <p class="dark8-text semibold labeling">Tipe Penilaian</p>
              <label id="select_standared" class="matter-textfield-flat center-select select-flat" style="width: 100%">
                <select class="validate" required="true" aria-required="true" name="type">
                  <option value="" disabled selected>Pilih Tipe Penilaian</option>
                  <option value="1">Pengetahuan</option>
                  <option value="2">Keterampilan</option>
                </select>
                <span></span>
              </label>
            </div>
          </div>

          <div class="row">
            <div class="col s12">
              <label id="select_standared" class="matter-textfield-flat center-select select-flat" style="width: 100%">
                <select class="validate" required="true" aria-required="true" name="type">
                  <option value="" disabled selected>Pilih Tipe Sub Penilaian</option>
                  <option value="1">Tugas</option>
                  <option value="2">Ulangan</option>
                  <option value="3">UTS</option>
                  <option value="3">UAS</option>
                </select>
                <span></span>
              </label>
            </div>
          </div>

        <div class="row">
          <div class="col s12 mb05">
            <p class="dark8-text semibold labeling">Tenggat</p>
          </div>
          <div class="col s6">
            <label id="xmas" class="matter-textfield-filled icon-input right-icon" style="width: 100%">
              <input type="text" placeholder=" " id="date2" data-select="datepicker" />
              <span>Tanggal</span>
              <i class="material-icons">insert_invitation</i>
            </label>
          </div>
          <div class="col s6">
            <label id="xmas" class="matter-textfield-filled icon-input right-icon time-picker" style="width: 100%">
              <input type="text" placeholder=" " />
              <span>Waktu</span>
              <i class="material-icons asdasd">query_builder</i>
            </label>
          </div>
        </div>

        <div id="penjadwalan_edit_diskusi_layout" class="row hide">
          <div class="col s12 mb05">
            <p class="dark8-text semibold labeling">Penerbitan</p>
          </div>
          <div class="col s6">
            <label id="xmas" class="matter-textfield-filled icon-input right-icon" style="width: 100%">
              <input type="text" placeholder=" " id="date2" data-select="datepicker" />
              <span>Tanggal</span>
              <i class="material-icons">insert_invitation</i>
            </label>
          </div>
          <div class="col s6">
            <label id="xmas" class="matter-textfield-filled icon-input right-icon time-picker" style="width: 100%">
              <input type="text" placeholder=" " />
              <span>Waktu</span>
              <i class="material-icons asdasd">query_builder</i>
            </label>
          </div>
        </div>

        <div class="row nm mtb2">
          <div class="col s12">
            <label class="matter-checkbox">
              <input id="penjadwalan_diskusi_edit" type="checkbox">
              <span>Jadwalkan Penerbitan</span>
            </label>
          </div>
        </div>

        <div class="row">
          <div class="col s12">
            <button class="matter-button-contained" style="width: 100%">Terbitkan</button>
          </div>
        </div>

      </div>
    </form>

  </div>
</div>
</div>