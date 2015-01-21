<!DOCTYPE html>
<html lang="pt">
<head>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="recursos/equalheights/jQuery.equalHeights.js"></script>
</head>
<body>
<style>
	.btn {
		border-color: rgba(0, 0, 0, 0.15) rgba(0, 0, 0, 0.15) rgba(0, 0, 0, 0.25);
	}
	.btn {
		-moz-border-bottom-colors: none;
		-moz-border-left-colors: none;
		-moz-border-right-colors: none;
		-moz-border-top-colors: none;
		background-color: #F5F5F5;
		background-image: linear-gradient(to bottom, #FFFFFF, #E6E6E6);
		background-repeat: repeat-x;
		border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) #A2A2A2;
		border-image: none;
		border-radius: 4px 4px 4px 4px;
		border-style: solid;
		border-width: 1px;
		box-shadow: 0 1px 0 rgba(255, 255, 255, 0.2) inset, 0 1px 2px rgba(0, 0, 0, 0.05);
		color: #333333;
		cursor: pointer;
		display: inline-block;
		font-size: 14px;
		line-height: 20px;
		margin-bottom: 0;
		padding: 4px 12px;
		text-align: center;
		text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
		vertical-align: middle;
	}
	a {
		color: #0088CC;
		text-decoration: none;
	}
	/**
	 * Estilos para a visualizacao de thumbs no upload de imagens
	 */
	.thumb {
		height: 75px;
		/* width: 100px; */
		border: 1px solid #000;
		margin: 10px 5px 0 0;
		display: block;
	}
	.thumb-description {
	
	}
	.container-imgshow {
		display:inline-block;
	}
	.container-imgshow .imgshow {
		float: left;
	}
	#progress_bar {
		margin: 10px 0;
		padding: 3px;
		border: 1px solid #000;
		font-size: 14px;
		clear: both;
		opacity: 0;
		-moz-transition: opacity 1s linear;
		-o-transition: opacity 1s linear;
		-webkit-transition: opacity 1s linear;
	}
	#progress_bar.loading {
		opacity: 1.0;
	}
	#progress_bar .percent {
		background-color: #99ccff;
		height: auto;
		width: 0;
	}
</style>
<?php
	//echo '<pre>'; print_r($_FILES); echo '</pre>';
	//echo '<pre>'; print_r($_POST); echo '</pre>';
		
	if($_POST) 
	{
		$files = $_FILES['files'];
		$arqQtde = count($files['name']);
		$arqNomes = explode(' @ ',$_POST['selectedfiles-files']);
		if(!empty($arqNomes))
		{
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
	}
?>
<form method="POST" action="fileAPI4.php" name="frm" id="frm" enctype="multipart/form-data">
	<input type="file" id="files" name="files[]" multiple />
	<div id="progress_bar"><div class="percent">0%</div></div>
	<output id="list" for="files" style="display: block;"></output>
	<hr/>
	<input type="submit" value="Enviar!">
</form>

<script>
	(function($) {$.fn.exist = function() {
		return (this.length > 0) ? true : false;
	};})(jQuery);
	
	/**
	 * getFileType()
	 * ------------------------------
	 * Função que retorna o mime type e a terminacao de um arquivo
	 * 
	 * @require : none
	 * @date    : 2012-12-26
	 * @author  : Vinicius Oliveira Garcia
	 * 
	 * .. Exemplo de uso
		// Check for the various File API support.
		if(window.File && window.FileReader && window.FileList && window.Blob){
			var files = evt.target.files[0]; // FileList object
			var reader = new FileReader();
			reader.onload = (function(f){
				return function(e) {
					var MIMEType = getFileType(f);
					console.log('MIME type      : ' + MIMEType[0]);
					console.log('MIME subtype   : ' + MIMEType[1]);
					console.log('File extension : ' + MIMEType[2]);
				};
			})(f);
		}
	 * 
	 */
	getFileType = function(file) {
		var mime = file.type.split('/');
		var fileType = new Array();
		fileType.push(mime[0]);						// type
		fileType.push(mime[1]); 					// subtype
		fileType.push(file.name.split('.').pop()); 	// file extension

		return fileType;
	}
	
	var FileUploadManager = {
		/**
		 * Altera e cria na pagina os elementos necessarios:
		 * - Esconde o input file #fileInputId do formulario #formId
		 * - Adiciona um botao para ativar o upload de arquivos
		 * - No evento change do input file #fileInputId, eh criado um elemento output onde serao exibidos os thumbnails dos arquivos 
		 * - A exibicao de thumbs permite que um arquivo seja excluido da selecao
		 * 
		 * - TODO : criar imagem para exibicao de outros arquivos q nao sejam uma imagem, por exemplo, um arq Excel deve mostrar o icone do Excel...
		 * - TODO : Permitir que sejam incluidos mais elementos html junto com os arquivos - como, por exemplo, checkbox de destaque, nome de exibicao, ...
		 */
		prepareFormElements : function(formId,fileInputId){
			// Criacao da estrutura base do upload de imagens...
			$('#'+fileInputId,'#'+formId).attr('style','display:none;')
			   .before('<a id="btnFile-'+fileInputId+'" class="btn" href="#"><i class="icon-download"></i>Incluir imagens</a>');
			$('#btnFile-'+fileInputId,'#'+formId).bind('click', function(evt) {
				$('#'+fileInputId,'#'+formId).trigger('click');
			});
			
			// Quando for selecionado um arquivo, criamos a visualizacao de thumbs...
			$('#'+fileInputId,'#'+formId).bind('change', function(evt) {
				// Check for the various File API support.
				if(window.File && window.FileReader && window.FileList && window.Blob){
					if($('output[for="'+fileInputId+'"]','#'+formId).exist())
						$('output[for="'+fileInputId+'"]','#'+formId).html('');

					// Div que vai conter as imagens exibidas...
					$('output[for="'+fileInputId+'"]','#'+formId).html('<div class="container-imgshow"></div>');
						
					var files = evt.target.files; // FileList object

					// Loop through the FileList and render image files as thumbnails.
					for (var i = 0, f; f = files[i]; i++) {
						
						// Only process image files.
						//if (f.type.match('image.*'))
						//{
							var reader = new FileReader();
							
							// Closure to capture the file information.
							reader.onload = (function(f){
								return function(e) {
									// Render thumbnail.
									var thumbsrc = '';
									var MIMEType = getFileType(f);
									if(MIMEType[0] == 'image'){
										thumbsrc = e.target.result;
									}else{
										thumbsrc = 'recursos/images/icons/file-type/'+MIMEType[2]+'.png';
									}
									
									var closebtn = '<button class="close" type="button" data-dismiss="imgshow">×</button>';
									var thumb = '<img class="thumb" src="'+thumbsrc+'" title="'+(f.name || f.fileName)+'"/>';
									var description = '<span class="thumb-description">'+(f.name || f.fileName)+'</span>';
									
									$('output[for="'+fileInputId+'"] .container-imgshow','#'+formId).append('<div class="imgshow">'+closebtn+'<br/>'+thumb+description+'</div>');
								};
							})(f);
							
							// Read in the image file as a data URL.
							reader.readAsDataURL(f);
						//}
					}
					
					$('output[for="'+fileInputId+'"] .container-imgshow','#'+formId).children().attr('style','border: 1px solid red;');//.equalWidths(); //.equalHeights();
				}else{
					// The File APIs are not fully supported in this browser
					console.log('The File APIs are not fully supported in this browser');
				}
			});
		},		
		/**
		 * Captura informacoes sobre os arquivos para enviar junto com o formulario:
		 * - Procura pelo nome dos arquivos que estao na visualizacao e por demais caracteristicas
		 * - A ideia, eh fazer o upload apenas dos arquivos que constem na listagem passada pelo input #selectedfiles-#fileInputId
		 * - Demais caracteristicas do arquivo podem ser passadas por meio deste input tbem - como, por exemplo, checkbox de destaque, nome de exibicao, ...
		 * 
		 * - TODO : capturar demais informacoes alem do nome dos arquivos
		 * - TODO : formatar as informacoes enviadas com json - nao usar mais o separador ' @ '
		 */
		grabFileNamesOnSubmit : function(formId,fileInputId){
			// Criacao de um input com o nome das imagens que devem ser salvas no sistema...
			if($('output[for="'+fileInputId+'"]', '#'+formId).exist())
			{
				var imagens = new Array();
				$('output[for="'+fileInputId+'"] .container-imgshow > div > img', '#'+formId).each(function(index){
					imagens.push($(this).attr('title'));
				});
				
				if(!$('#selectedfiles-'+fileInputId, '#'+formId).exist())
					$('output[for="'+fileInputId+'"]', '#'+formId).before('<input type="hidden" id="selectedfiles-'+fileInputId+'" name="selectedfiles-'+fileInputId+'">');

				$('#selectedfiles-'+fileInputId, '#'+formId).val(imagens.join(' @ ')).attr('type','text');
			}else{
				// There's no output tag for this form
				console.log('There\'s no output tag for this form');
			}
		}
	}

	$(document).ready(function() {
		
		// Prepara todos os elementos que serao necessarios
		FileUploadManager.prepareFormElements('frm','files'); // form id="frm" e campo input type="files" id="files"
		
		$('#frm').unbind('submit').submit(function(e) {
		
			// Prepara um input com o nome dos arquivos presentes no container de arquivos
			FileUploadManager.grabFileNamesOnSubmit('frm','files'); // form id="frm" e campo input type="files" id="files"
			
			return false; // return false to prevent standard browser submit
		});
		
	});
</script>
</body>
</html>