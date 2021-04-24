<script src="{{asset('asset/js/tyni-5.min.js')}}" referrerpolicy="origin"></script>
<script type="text/javascript">
  $(document ).ready(function() {   
    function applyMCE() {
      tinymce.init({
        mode : "textareas",
        editor_selector : "tinymce-enabled-message",
        menubar: false,
        min_height: 250,
        skin: "tes",
        plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table paste",
        "autoresize"
        ],

        image_title: true,
        automatic_uploads: true,
        file_picker_types: 'image',

        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",

        file_picker_callback: function (cb, value, meta) {
          var input = document.createElement('input');
          input.setAttribute('type', 'file');
          input.setAttribute('accept', 'image/*');


          input.onchange = function () {
            var file = this.files[0];

            var reader = new FileReader();
            reader.onload = function () {

              var id = 'blobid' + (new Date()).getTime();
              var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
              var base64 = reader.result.split(',')[1];
              var blobInfo = blobCache.create(id, file, base64);
              blobCache.add(blobInfo);

              cb(blobInfo.blobUri(), { title: file.name });
            };
            reader.readAsDataURL(file);
          };

          input.click();
        }
      });       
    }

    function AddRemoveTinyMce(editorId) {
      if(tinyMCE.get(editorId)) 
      {
        tinyMCE.EditorManager.execCommand('mceFocus', false, editorId);                    
        tinyMCE.EditorManager.execCommand('mceRemoveEditor', true, editorId);

      } else {
        tinymce.EditorManager.execCommand('mceAddEditor', false, editorId);       
      }
    }

    applyMCE();
    
    var indicator = 0;

    $('a.add-type').die('click').live('click', function(e) {
      e.preventDefault(); 
      var content = jQuery('#type-container .type-rows'),
      element = null;

      indicator++;

      for(var i = 0; i<1; i++){
        element = content.clone();
        var divId = 'id_'+jQuery.now();
        element.attr('id', divId);
        element.find('.remove-type').attr('targetDiv', divId);
        element.find('.tinymce-enabled-message-new').attr('id', 'txt_'+divId);
        element.appendTo('#type_container');
        AddRemoveTinyMce('txt_'+divId);

        $("#"+divId+" .no_pilihan").text(indicator);
      }

      if (indicator != 0) {
        $("#component_pilihan_null").addClass("hide");
      } else {
        $("#component_pilihan_null").removeClass("hide");
      }

    });

    jQuery(".remove-type").die('click').live('click', function (e) {
      var didConfirm = confirm("Are you sure You want to delete");
      indicator--;

      if (didConfirm == true) {
        var id = jQuery(this).attr('data-id');
        var targetDiv = jQuery(this).attr('targetDiv');
        jQuery('#' + targetDiv).remove();
        console.log(indicator);

        if (indicator != 0) {
          $("#component_pilihan_null").addClass("hide");
        } else {
          $("#component_pilihan_null").removeClass("hide");
        }

        return true;

      } else {
        return false;
      }


    });
  });
</script>