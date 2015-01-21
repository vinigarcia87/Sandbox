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
<input type="file" id="fileinput" />
<script type="text/javascript">
  function readSingleFile(evt) {
    //Retrieve the first (and only!) File from the FileList object
    var f = evt.target.files[0]; 

	if (!f) {
        alert("Failed to load file");
    } else if (!f.type.match('image.*')) {
		alert(f.name + " is not a valid image file.");
    } else {
      var r = new FileReader();
      r.onload = function(e) { 
	      var contents = e.target.result;
        alert( "Got the file\n" 
              +"name: " + f.name + "\n"
              +"type: " + f.type + "\n"
              +"size: " + f.size + " bytes\n"
              + "starts with: " + contents.substr(1, contents.indexOf("\n"))
        );  
      }
      r.readAsText(f);
    }
  }

  document.getElementById('fileinput').addEventListener('change', readSingleFile, false);
</script>
</body>
</html>