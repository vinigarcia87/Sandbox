<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

		<meta http-equiv="Content-type" content="text/html;charset=UTF-8" /> 
		<title>Jcrop &raquo; Tutorials &raquo; aspectRatio w/ Preview</title>
		<script src="virtual-cards/js/jquery.min.js" type="text/javascript"></script>
		<script src="virtual-cards/js/jquery.Jcrop.js" type="text/javascript"></script>
		<link rel="stylesheet" href="virtual-cards/css/jquery.Jcrop.css" type="text/css" />
		<link rel="stylesheet" href="virtual-cards/files/demos.css" type="text/css" />
		<script type="text/javascript">

		jQuery(function($){
			// Create variables (in this scope) to hold the API and image size
			var jcrop_api, boundx, boundy;

			$('#target').Jcrop({
					onChange: updatePreview,
					onSelect: updatePreview,
					aspectRatio: 1.8
				},function(){
					// Use the API to get the real image size
					var bounds = this.getBounds();
					boundx = bounds[0];
					boundy = bounds[1];
					// Store the API in the jcrop_api variable
					jcrop_api = this;
				});

				function updatePreview(c)
				{
					if (parseInt(c.w) > 0)
					{
						var rx = 270 / c.w;
						var ry = 150 / c.h;

						$('#preview').css({
							width: Math.round(rx * boundx) + 'px',
							height: Math.round(ry * boundy) + 'px',
							marginLeft: '-' + Math.round(rx * c.x) + 'px',
							marginTop: '-' + Math.round(ry * c.y) + 'px'
						});
					}
				};
			});
		</script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<?php
	$imagem1 = "1";
	$imagem2 = "casal";
	
	$imagemt1 = "imagem1";
	$imagemt2 = "imagem2";
	
	
	$imagem_input = "1";
?>

<!-- <link href="css.css" rel="stylesheet" type="text/css" /> -->

<style type="text/css">
*{ margin:0 auto;}

#esquerda { width:400px; height:200px; float:left; display:inline-block;}
#direita{ width:400px; height:200px; float:left; display:inline-block;}

.imagem {width:270px;height:150px; overflow:hidden; float:left; margin:-150px 0 0 15px;}
</style>
</head>



<body>
		<div id="esquerda">
        	<img  src="img/<?php echo $imagemt2; ?>.png" />
	        <div class="imagem">
	            <img src="img/<?php echo $imagem2; ?>.jpg" id="preview" />
            </div>
        </div>
	
         <div id="direita">
          <img src="img/<?php echo $imagem2; ?>.jpg" id="target" class="jcrop-preview" />
        </div>
   

</body>
</html>