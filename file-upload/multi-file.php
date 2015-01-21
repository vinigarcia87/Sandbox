<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Multi File Upload</title>
		
		<script src="recursos/javascript/jquery/jquery-1.7.2.min.js" type="text/javascript" language="javascript"></script>
		<script src="recursos/javascript/multifile/jquery.MultiFile.js" type="text/javascript" language="javascript"></script>
		
		<script type="text/javascript">
			$(function(){
				$('.multi-pt').MultiFile({
					accept:'gif|jpg',
					max:3,
					STRING: {
						remove:'Remover',
						selected:'Selecionado: $file',
						denied:'Arquivo de tipo $ext não são permitidos.',
						duplicate:'Este arquivo já foi incluido: $file!'
					}
				});
			});
		</script>
	</head>
	<body>
		<h1>Multi File Upload</h1>
		<p>
			<form name="form" method="POST" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF'] ?>">
				
				<input name="fileupload[]" type="file" class="multi-pt" />
				
				<input type="submit" name="submit" value="Enviar arquivos" />
			</form>	
		</p>
		<p>
			<?php
				print_r($_POST);
				if($_POST)
				{
					echo "<pre>";
					print_r($_FILES);
					echo "</pre>";
				}
			?>
		</p>
	</body>
</html>