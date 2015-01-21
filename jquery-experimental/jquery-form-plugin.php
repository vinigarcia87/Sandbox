<html>
	<head>
		<meta charset="utf-8">
		
		<script type="text/javascript" src="recursos/js/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="recursos/js/form/jquery.form.js"></script>
		
		<title>Jquery Form Plugin</title>
		
		<style type="text/css">
			body { padding: 30px; }
			
			/* Form Style */
			form { display: block; margin: 20px auto; background: #eee; border-radius: 10px; padding: 15px; }
			input, textarea { width: 280px; }
			button { width: 140px; }
			
			/* Progress Bar Style */
			.progress { position:relative; width:400px; border: 1px solid #ddd; padding: 1px; border-radius: 3px; margin-top: 10px; display: none; }
			.bar { background-color: #B4F5B4; width:0%; height:20px; border-radius: 3px; }
			.percent { position:absolute; display:inline-block; top:3px; left:48%; }
		</style>
		
		<script type="text/javascript">
			$(document).ready(function() {

				submitBefore = function(formData, jqForm, options){
					if (!confirm('Tem certeza que deseja continuar?')){
						return false;
					}
				};
				submitSuccess = function(responseText, statusText, xhr, $form){
					alert('status: \n\t' + statusText + '\nResponseText: \n\t' + responseText);
				};
				submitError = function(responseText, statusText){
					alert('status: \n\t' + statusText + '\nResponseText: \n\t' + 'Erro: Por favor, tente novamente!');
				};

				//Progress bar elements
				var progress = $('.progress');
				var bar = $('.bar');
				var percent = $('.percent');
				
				fileBeforeSend = function() {
					progress.show();
					var percentVal = '0%';
					bar.width(percentVal)
					percent.html(percentVal);
				};
				fileUploadProgress = function(event, position, total, percentComplete) {
					var percentVal = percentComplete + '%';
					bar.width(percentVal)
					percent.html(percentVal);
				};
				fileComplete = function(xhr) {
					progress.hide(); //xhr.responseText;
				};
			
				var options = {
					//target:      '#frm-msg',  		// target element(s) to be updated with server response
					beforeSubmit:  submitBefore, 		// pre-submit callback
					success:       submitSuccess, 		// post-submit callback
					error:         submitError,  		// post-submit callback
			 
					beforeSend: fileBeforeSend,
					uploadProgress: fileUploadProgress,
					complete: fileComplete,
			 
					// other available options:
					type: 'post'             // 'get' or 'post', override for form's 'method' attribute
					//url:  'file.php'   	 // override for form's 'action' attribute
					//dataType: 'json'       // null, 'xml', 'script', or 'json' (expected server response type)
					//clearForm: true        // clear all form fields after successful submit
					//resetForm: true        // reset the form after successful submit
				}; 
				
				//Form button actions
				$('button','#frm').click(function() {
					switch($(this).attr('type'))
					{
						case 'submit':
							options.url = 'comment.php';
							$('#frm').ajaxSubmit(options);
							break;
						case 'cancel':
							$('#frm').resetForm(); //.clearForm();
							break;
						default:
							//Botão desconhecido...
					};
					return false; // return false to prevent standard browser submit
				});
			});
		</script>
	</head>
	<body>
		<h1>Jquery Form Plugin</h1>
		
		<div id="formulario">
			<div id="frm-msg"></div>
			<form id="frm" enctype="multipart/form-data">
			<dl>
				<dd><input type="hidden" name="id" /></dd>
				
				<dt><label for="name">Name:</label></dt>
				<dd><input type="text" name="name" /></dd>
				<dt><label for="comment">Comment:</label></dt>
				<dd><textarea name="comment" rows="4"></textarea></dd>
				<dt><label for="file">Images:</label></dt>
				<dd>
					<input type="file" name="file" />
					<div class="progress">
						<div class="bar"></div>
						<div class="percent">0%</div>
					</div>
				</dd>
				<br/>
				<dd>
					<button type="submit">Submit Comment</button>
					<button type="cancel">Clear Form</button>
				</dd>
			</dl>
			</form>
		</div>
	</body>
</html>