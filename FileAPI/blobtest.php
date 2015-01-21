<?php
	if($_POST)
	{
		//echo '<pre>'; print_r($_POST); echo '</pre>';
		
		$blob = $_POST['bloburl'];
		$type = $_POST['blobtype'];
		$data = $_POST['dataurl'];

		$contents_split = explode(',', $data);
		$encoded = $contents_split[count($contents_split)-1];
		$decoded = "";
		for ($i=0; $i < ceil(strlen($encoded)/256); $i++) {
			$decoded = $decoded . base64_decode(substr($encoded,$i*256,256)); 
		}

		$fp = fopen('imagembaixada.jpg', 'w');
			fwrite($fp, $decoded);
			fclose($fp);
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Blob URL - image</title>
</head>
<body>
	<p><input id="blob" name="blob" type="file" size="75" multiple /></p>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<input id="blobtype" name="blobtype" type="text" size="20" />
	<input id="bloburl" name="bloburl" type="text" size="50" />
	<input id="dataurl" name="dataurl" type="text" size="50" />
	<input id="salvar" name="salvar" type="submit" value="salvar" />
	</form>
	<h2>IMAGEM COM BLOB</h2>
	<p id="result"></p>
	<h2>CANVAS COM BLOB</h2>
	<canvas id="MyCanvas">This browser or document mode doesn't support canvas</canvas>
	<button onclick="putImage()">blah!</button>
	<h2>IMG COM DATA URI</h2>
	<img id="MyPix"/>
	
	<script>
	function cbu(file)
	{
		if (window.URL){ return window.URL.createObjectURL(file);}
		else if (window.webkitURL){ return window.webkitURL.createObjectURL(file);}
		else if (window.createObjectURL){ return window.createObjectURL(file);}
		else if (window.createBlobURL){ return window.createBlobURL(file); }
	}

	document.getElementById("blob").onchange = function(event)
	{
		var result = document.getElementById("result");
		var i = 0, j = event.target.files.length;
		for (i = 0; i < j; i++)
		{
			var url = cbu(event.target.files[i]);
			var img = document.createElement("img");
			img.onload = function(){ }
			result.appendChild(img);
			img.id = "img1";
			img.src = url;
			document.getElementById("blobtype").value = event.target.files[i].type;
			document.getElementById("bloburl").value = url;
		}
	};
	
	function putImage(){
		var url = document.getElementById("img1").src;
		var canvas = document.getElementById("MyCanvas");
		if (canvas.getContext) {
			var ctx = canvas.getContext("2d");

			var img = new Image();
			img.src = url;
			img.onload = function () {
				// Desenha a imagem no canvas...
				ctx.drawImage(img,0,0);
				
				// Grava o Data URL na imagem...
				var myImage = canvas.toDataURL("image/png");
				var imageElement = document.getElementById("MyPix");
				imageElement.src = myImage;
				
				document.getElementById("dataurl").value = myImage;
			}
		}
	};
	</script>


  <footer>
    <hr />
    <p>Zobrazte si zdrojový kód.</p>
    <p><a href="http://www.webnt.cz/26-blob-url/">zpět na článek</a></p>
  </footer>
</body>
</html>