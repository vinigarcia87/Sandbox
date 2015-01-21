<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>.:Pontifícia Universidade Católica do Paraná - PUCPR:.</title>

	<style type="text/css">
		a:link 		{ color: red; text-decoration: none; }
		a:visited 	{ color: red; text-decoration: none; } 
		a:hover 	{ color: blue; cursor: pointer; } 
	</style>
	<script src="./recursos/jquery/jquery.1.6.2.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		function iniciar_menu(){
			$('#accordion-menu ul').hide();
			$('#accordion-menu li a').click( function(){ $(this).next().slideToggle('normal'); } );
		}
		$(document).ready(
			function(){ iniciar_menu(); }
		);
	</script>
</head>
<body>
<?php
	//$debug = false; if(isset($_GET['debug'])){ error_reporting(E_ALL); ini_set('display_errors',true); $debug = true; echo '<br/><br/><br/><br/><br/><br/><strong>(( MoDo de DeBuG ))</strong><br/><br/><br/>'; }

	function vasculhar_diretorios($endereco){
		static $contador = 0;
		
		$retorno = '';
		$lista_arquivos = array();
		$lista_diretorios = array();
		if(is_dir($endereco)){
			if($dh = opendir($endereco)){
				while((($arquivo = readdir($dh)) !== false)){
					if(($arquivo != '.') && ($arquivo != '..')){
						if(is_file($endereco.'/'.$arquivo)){
							$lista_arquivos[] = '<li><a href="'.$endereco.'/'.$arquivo.'">'.$arquivo.'</a></li>';
						}else{
							$lista_diretorios[] =   '<li><a>'.$arquivo.'/</a>'
									      . vasculhar_diretorios($endereco.'/'.$arquivo)
									      . '</li>';
						}
					}
				}
				closedir($dh);
			}
			
			sort($lista_diretorios);
			sort($lista_arquivos);		
			
			$retorno .= ($contador == 0)?'<ul id="accordion-menu">':'<ul>';
			foreach($lista_diretorios as $diretorios){ $retorno .= $diretorios; }
			foreach(array_reverse($lista_arquivos) as $arquivo){ $retorno .= $arquivo; }
			$retorno .= '</ul>';
		}
		
		//$contador++;
		return $retorno;
	}
?>
	<center><h1>Listagem de Arquivos</h1></center>
	<?php echo vasculhar_diretorios('.'); ?>
</body>
</html>