<!DOCTYPE html>
<html lang="pt">
<head>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script>
	// Check for the various File API support.
	if (window.File && window.FileReader && window.FileList && window.Blob) {
	  alert('The File APIs are fully supported in this browser!!!');
	} else {
	  alert('The File APIs are not fully supported in this browser.');
	}
</script>
</head>
<body>
<input type="file" id="files" name="files[]" multiple />
<output id="list"></output>
<script type="text/javascript">
  function handleFileSelect(evt) {
    var files = evt.target.files; // FileList object

    // files is a FileList of File objects. List some properties.
    var output = [];
    for (var i = 0, f; f = files[i]; i++) {
      output.push('<li><strong>', escape(f.name), '</strong> (', f.type || 'n/a', ') - ',
                  f.size, ' bytes, last modified: ',
                  f.lastModifiedDate.toLocaleDateString(), '</li>');
    }
    document.getElementById('list').innerHTML = '<ul>' + output.join('') + '</ul>';
  }

  document.getElementById('files').addEventListener('change', handleFileSelect, false);
</script>
</body>
</html>
