<?php

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Fine Uploader</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script src="recursos/fine-uploader/2.1.2/fileuploader.min.js"></script>
	<link href="recursos/fine-uploader/2.1.2/fileuploader.css" rel="stylesheet">
	<style>
	.qq-upload-file {
		display:none;
	}
	.container-imgshow {
		margin: 20px 10px 20px 10px;
	}
	.container-imgshow .imgshow {
		float: left;
		margin: 10px 0 0 10px;
	}
	.thumb {
		height: 64px;
		clear: both;
	}
	.thumb-extra {
		display: block;
		margin: 10px auto 5px;
	}
	</style>
</head>
<body>
	<div id="manual-fine-uploader">
		<noscript>
			<p>Please enable JavaScript to use file uploader.</p>
			<!-- or put a simple form for upload here -->
		</noscript>
	</div>
	<div id="triggerUpload" class="btn btn-primary" style="margin-top: 10px;"><i class="icon-upload icon-white"></i> Upload now</div>
	
	<script>
		// Sobreescrevendo a funcao que formata nomes extensos...
		qq.extend(qq.FileUploader.prototype, {
			_formatFileName: function(name){
				return name;
			}
		});

		function FineUploadManager()
		{
			var manualuploader;
		
			// Esquema de templates para exibir thumbnails
			var tmplThumb = {
				template : '<div class="qq-uploader">' +
								'<pre class="qq-upload-drop-area"><span>{dragText}</span></pre>' +
								'<div class="qq-upload-button btn" style="width: auto;">{uploadButtonText}</div>' +
								'<div class="qq-upload-list container-imgshow thumbnails"></div>'+
						   '</div>',
					   
				fileTemplate : '<div class="imgshow thumbnail">' +
									'<button class="qq-upload-cancel close" data-dismiss="imgshow" type="button">×</button>'+
									'<div class="qq-progress-bar"></div>'+
									'<span class="qq-upload-spinner" style="display: none;"></span>'+
									'<span class="qq-upload-finished"></span>'+
									'<img class="thumb"/>'+
									'<span class="qq-upload-file"></span>'+
									'<span class="qq-upload-size" style="display: none;"></span>'+
									'<span class="qq-upload-failed-text">Upload failed</span>'+
							  '</div>'
			}
			
			// Esquema de templates para exibir lista de arquivos
			var tmplList = {
				template : '<div class="qq-uploader">' +
								'<div class="qq-upload-drop-area"><span>{dragText}</span></div>' +
								'<div class="qq-upload-button btn">{uploadButtonText}</div>' +
								'<ul class="qq-upload-list"></ul>'+
						   '</div>',
					   
				fileTemplate : '<li>' +
								'<div class="qq-progress-bar"></div>' +
								'<span class="qq-upload-spinner"></span>' +
								'<span class="qq-upload-finished"></span>' +
								'<span class="qq-upload-file"></span>' +
								'<span class="qq-upload-size"></span>' +
								'<a class="qq-upload-cancel" href="#">{cancelButtonText}</a>' +
								'<span class="qq-upload-failed-text">{failUploadtext}</span>' +
							'</li>'
			}
			
			var fineOptions = {
				//element: document.getElementById('manual-fine-uploader'), // $('#manual-fine-uploader')[0]
				//action: 'upload.php',
				
				forceMultipart: true,
				autoUpload: false,
				debug: true,
				uploadButtonText: '<i class="icon-download"></i> Incluir imagens', // <i class="icon-plus"></i>

				
				//template: template, // template for the main element
				//fileTemplate: fileTemplate, // template for one item in file list

				onCancel: function(id, fileName) {
					//alert('onCancel!');
				},
				onSubmit: function(id, fileName)
				{
					//alert('onSubmit!');
				},
				onUpload: function(id, fileName)
				{
					//alert('onUpload!');
				},
				onProgress: function(id, fileName, loaded, total)
				{
					//alert('onProgress!');
				},
				onComplete: function(id, fileName, responseJSON)
				{
					//alert('onComplete!');
				}
			};
			
			this.initializeUploader = function(element,action){
				// Seta opcoes para o uploader...
				fineOptions.element = element;
				fineOptions.action = action;

				// Check for the various File API support.
				if(window.File && window.FileReader && window.FileList && window.Blob)
				{
					fineOptions.template = tmplThumb.template;
					fineOptions.fileTemplate = tmplThumb.fileTemplate;
				}else{
					fineOptions.template = tmplList.template;
					fineOptions.fileTemplate = tmplList.fileTemplate;
				}
			
				// Inicializacao do File Uploader...
				manualuploader = new qq.FileUploader(fineOptions);
				
				// Criacao dos thumbs...
				$('input[name="file"]').live('change',function(evt){
					// Check for the various File API support.
					if(window.File && window.FileReader && window.FileList && window.Blob)
					{
						// Cria um blob url a partir de um arquivo
						var cbu = function(file)
						{
							if (window.URL){ return window.URL.createObjectURL(file);}
							else if (window.webkitURL){ return window.webkitURL.createObjectURL(file);}
							else if (window.createObjectURL){ return window.createObjectURL(file);}
							else if (window.createBlobURL){ return window.createBlobURL(file); }
						};
						// Decide se mostra um thumb ou um icone
						var getSrc = function(f){
							var mime = f.type.split('/');
							var fileType = mime[0];
							var fileSubType = mime[1];
							var fileExt = f.name.split('.').pop();
							
							// Pega as informacoes do tipo da imagem
							return (fileType == 'image') ? cbu(f) : './recursos/images/icons/file-type/'+fileExt+'.png';
						}
						var files = evt.target.files; // FileList object
						for (var i = 0, f; f = files[i]; i++)
						{
							$('.qq-upload-file').each(function(){
								if($(this).html() == (f.name || f.fileName))
									$(this).parent().children('img.thumb').attr('src',getSrc(f)).attr('title',(f.name || f.fileName));
							});
						}
					}
				});
			};
		
			this.startUpload = function(){
				manualuploader.uploadStoredFiles();
			};
		}
		
		$(document).ready(function(){
            var fineUpManager = new FineUploadManager();
            fineUpManager.initializeUploader($('#manual-fine-uploader')[0],'upload.php');

            $('#triggerUpload').click(function(){
                fineUpManager.startUpload();
            });
		});
	</script>
</body>
</html>
