<?php
	if($_POST)
	{
		//echo '<pre>'; print_r($_POST); echo '</pre>';

		header("Content-type: ".$_POST['blobtype']); //Send the content Type here.
		echo base64_encode($_POST['bloburl']);
		exit();
		
		$blob = $_POST['bloburl'];
		$type = $_POST['blobtype'];
		
		/*
		$image = new Imagick();
		$image->readimageblob($blob);
		echo '<img src="data:image/png;base64,' .  base64_encode($image->getimageblob())  . '" />';
		*/
	}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Blob URL - image</title>
</head>
<body>
<?php
	if($_POST)
	{
		$contents_split = explode(',', $contents);
		$encoded = $contents_split[count($contents_split)-1];
		$decoded = "";
		for ($i=0; $i < ceil(strlen($encoded)/256); $i++) {
		  $decoded = $decoded . base64_decode(substr($encoded,$i*256,256)); 
		}
		$contents = $decoded; // output
	}
?>
	<canvas id="canvas" height="310" width="300"></canvas>
	<img id="imagem"></img>

	<script>
		var ctx = document.getElementById('canvas').getContext('2d');
		var img = new Image();
		img.src = "Tulips.jpg"
		img.onload = function () {
			ctx.drawImage(img,0,0);
		}
		//window.open(document.getElementById('canvas').toDataURL("image/jpg"));
		document.getElementById('imagem').src = document.getElementById('canvas').toDataURL('image/jpg','0.7');
	</script>


  <footer>
    <hr />
    <p>Zobrazte si zdrojový kód.</p>
    <p><a href="http://www.webnt.cz/26-blob-url/">zpět na článek</a></p>
  </footer>
</body>
</html>