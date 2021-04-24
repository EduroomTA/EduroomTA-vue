var copyBtn   = $("#copy-btn"),
input     = $("#copy-me");

function copyToClipboardFF(text) {
  window.prompt ("Copy to clipboard: Ctrl C, Enter", text);
}

function copyToClipboard() {
  var success   = true,
  range     = document.createRange(),
  selection;


  if (window.clipboardData) {
    window.clipboardData.setData("Text", input.val());        
  } else {

    var tmpElem = $('<div>');
    tmpElem.css({
      position: "absolute",
      left:     "-1000px",
      top:      "-1000px",
    });

    tmpElem.text(input.val());
    $("body").append(tmpElem);

    range.selectNodeContents(tmpElem.get(0));
    selection = window.getSelection ();
    selection.removeAllRanges ();
    selection.addRange (range);

    try { 
      success = document.execCommand ("copy", false, null);
    }
    catch (e) {
      copyToClipboardFF(input.val());
    }
    if (success) {

      M.toast({html: 'Berhasil menyalin Kode'})
      tmpElem.remove();
    }
  }
}

copyBtn.on('click', copyToClipboard);