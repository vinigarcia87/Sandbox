<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Upload normal de arquivos</title>
	</head>
	<body>
		<h1>Upload normal de arquivos</h1>
		<p>
			<form name="form" method="POST" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF'] ?>">
				
				<input name="fileupload" type="file" />
				
				<input type="submit" name="submit" value="Enviar arquivos" />
			</form>	
		</p>
		<p>
			<?php
				require_once('recursos/php/upload.php');
				
				print_r($_POST);
				if($_POST)
				{
					echo "<pre>";
					print_r($_FILES);
					echo "</pre>";
					
					if (!empty($_FILES['fileupload']["name"]))
					{
						$destino = "arquivos/".md5(uniqid(time())).".jpg";
						$result = baixar_imagem($_FILES['fileupload'], $destino, array(408,328));
						
						echo $result['msg'];
					}
				}
			?>
		</p>
	</body>
</html>