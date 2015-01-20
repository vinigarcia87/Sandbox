<title>Compilador</title>
<?php
	ini_set('max_execution_time', 300); //300 seconds = 5 minutes
	
	require_once './less.php/1.7.0.2/lessc.inc.php';
	
	function imprimir($var)
	{
		echo '<pre>';
		print_r( $var );
		echo '</pre><hr/>';
	}
	
	/*
	echo '<h3>Parsing CSS</h3>';
	$parser = new Less_Parser();
	$less = '@color: #4D926F; #header { color: @color; } h2 { color: @color; }';
	//imprimir( $less );
	$parser->parse( $less );
	$css = $parser->getCss();
	//imprimir( $css );
	*/
	
	echo '<h3>Parsing Bootstrap LESS Files</h3>';
	try {
		$options = array( 'compress' => true );
		$parser = new Less_Parser( $options );
		$parser->parseFile( './assets/vendor/bootstrap/3.2.0/less/bootstrap.less' );
		$css = $parser->getCss();
		//imprimir( $css );
		$fp = fopen('./bootstrap.css', 'wb');
		fwrite($fp, $css);
		fclose($fp);
	} catch(Exception $e) {
		$error_message = $e->getMessage();
	}

	/*
	echo '<h3>Parsing Metro UI LESS Files</h3>';
	try {
		$options = array( 'compress' => true );
		$parser = new Less_Parser( $options );
		$parser->parseFile( './assets/vendor/metro-ui/metro-ui-css/2.0.31/less/metro-bootstrap.less' );
		$css = $parser->getCss();
		//imprimir( $css );
		$fp = fopen('./metro-bootstrap.css', 'wb');
		fwrite($fp, $css);
		fclose($fp);
	} catch(Exception $e) {
		$error_message = $e->getMessage();
	}
	*/