<!DOCTYPE html>
<html lang="pt">
<head>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
</head>
<body>
<style>
	.thumb {
		height: 75px;
		border: 1px solid #000;
		margin: 10px 5px 0 0;
	}
	.container-imgshow {
		display:inline-block;
	}
	.container-imgshow .imgshow {
		float: left;
	}
</style>
<?php
	if($_POST) 
	{
		$files = $_FILES['files'];
		$arqQtde = count($files['name']);
		$arqNomes = explode(' @ ',$_POST['selectedfiles']);
		for($i = 0; $i < $arqQtde; $i++)
		{
			if(in_array($files['name'][$i],$arqNomes))
			{
				echo '-> '.$files['name'][$i].' foi copiado para o servidor;'.'<br/>';
			}else{
				echo 'X '.$files['name'][$i].' não foi;'.'<br/>';
			}
		}
	}
?>
<form method="POST" action="fileAPI3.php" name="frm" id="frm" enctype="multipart/form-data">
	<fieldset id="file-upload">
		<input type="file" id="files" name="files[]" multiple style="display:none;"/>
		<output id="list" for="files" style="display: block;"></output>
	</fieldset>
	<hr/>
	<input type="submit" value="Enviar!">
</form>

<script>
	(function($) {$.fn.exist = function() {
		return (this.length > 0) ? true : false;
	};})(jQuery);

	$('#frm').unbind('submit').submit(function(e) {
	
		// Criacao de um input com o nome das imagens que devem ser salvas no sistema...
		if($('output[for="files"]', this).exist())
		{
			var imagens = new Array();
			$('output[for="files"] .container-imgshow > div > img', this).each(function(index){
				imagens.push($(this).attr('title'));
			});
			if(!$('#selectedfiles', this).exist())
				$('output[for="files"]', this).before('<input type="hidden" id="selectedfiles" name="selectedfiles">');
			$('#selectedfiles', this).val(imagens.join(' @ ')).attr('type','text');
		}
		
		return false; // return false to prevent standard browser submit
	});
	
	// Criacao da estrutura base do upload de imagens...
	$(document).ready(function() {
		$('#files').attr('style','display:none;')
				   .before('<div class="control-group"><div class="controls"><img src="fileupload.png" id="btnFile" style="cursor:pointer" /></div></div>');
		$('#btnFile').bind('click', function(evt) {
			$('#files').trigger('click');
		});
	});
	
	// Quando for selecionado um arquivo, criamos a visualizacao de thumbs...
	$('#files').bind('change', function(evt) {
		// Check for the various File API support.
		if(window.File && window.FileReader && window.FileList && window.Blob){
			if($('output[for="files"]').exist())
				$('output[for="files"]').html('');

			// Div que vai conter as imagens exibidas...
			$('output[for="files"]').html('<div class="container-imgshow"></div>');
				
			var files = evt.target.files; // FileList object

			// Loop through the FileList and render image files as thumbnails.
			for (var i = 0, f; f = files[i]; i++) {

				// Only process image files.
				if (f.type.match('image.*'))
				{
					var reader = new FileReader();
					
					// Closure to capture the file information.
					reader.onload = (function(theFile){
						return function(e) {
							// Render thumbnail.
							var closebtn = '<button class="close" type="button" data-dismiss="imgshow">×</button>';
							var thumb = '<img class="thumb" src="'+e.target.result+'" title="'+(theFile.name || theFile.fileName)+'"/>';
							$('output[for="files"] .container-imgshow').append('<div class="imgshow">'+closebtn+'<br/>'+thumb+'</div>');
						};
					})(f);

					// Read in the image file as a data URL.
					reader.readAsDataURL(f);
				}
			}
		}else{
			// The File APIs are not fully supported in this browser
		}
	});
</script>
</body>
</html>