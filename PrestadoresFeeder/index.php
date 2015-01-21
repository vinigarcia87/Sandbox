<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Alimentador de Prestadores</title>
<?php
	ini_set('default_charset', 'UTF-8'); //ISO-8859-1
	
	require './Progressbar.php';
	require './PrestadoresFeeder.php';
	
	echo '<h2>Alimentador de Prestadores</h2>';
	
	$p = new ProgressBar();
    echo '<div style="width: 300px;">';
    $p->render();
	echo '</div>';

	$conn = mysql_connect("localhost","root",""); 
	$database = mysql_select_db("psi",$conn);
	mysql_set_charset('utf8',$conn);
	
	$mtime = microtime();
	$mtime = explode(" ",$mtime);
	$mtime = $mtime[1] + $mtime[0];
	$starttime = $mtime;
	
	$feeder = new PrestadoresFeeder('PRESTADORES.XML',$conn);
	$feeder->setProgressbar($p);
	$num_prestadores = $feeder->feed();
	
	$mtime = microtime();
	$mtime = explode(" ",$mtime);
	$mtime = $mtime[1] + $mtime[0];
	$endtime = $mtime;
	$totaltime = ($endtime - $starttime);
	
	$feeder->salvarHistorico($totaltime);
	$p->setProgressBarProgress(100);
	
	echo 'Operação finalizada!<br/>';
	echo 'O script foi executado em <strong>'.number_format($totaltime, 2).' segundos</strong>.<br/>';
	echo 'Foram adicionados <strong>'.$num_prestadores.'</strong> novos prestadores na base de dados.<br/>';
?>