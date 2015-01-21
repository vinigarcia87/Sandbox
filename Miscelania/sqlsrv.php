<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
	</head>
	<body>
<?php
	ini_set('display_errors', 1);
	error_reporting(E_ALL);

	//Desenvolvimento...
	$param = array(
		'dsn'	 => '',
		'hostdb' => 'sqldescorp.cwb.pucpr.br',
		'port'	 => '2200',
		'dbname' => 'marista_teste',
		'usr'    => 'marista_teste',
		'psw'    => 'marista_teste',
	);
	
	try {
		// Conexão com MS SQL SERVER via Linux [ driver unixODBC - SQL Server Native Client 11.0 ]
		//$conn = new PDO( 'odbc:DSN='.$param['dsn'].';UID='.$param['usr'].';PWD='.$param['psw'] );

		// Conexão com MS SQL SERVER via Linux [ driver dblib - FreeTDS ]
		//$conn = new PDO( 'dblib:host='.$param['dsn'].';dbname='.$param['dbname'], $param['usr'], $param['psw'] );
		
		// Conexão com MS SQL SERVER via Windows [ driver sqlsrv ]
		$conn = new PDO( 'sqlsrv:Server='.$param['hostdb'].','.$param['port'].';Database='.$param['dbname'], $param['usr'], $param['psw'] );
		
		//$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	}
	catch( PDOException $e ) {
	   die( "Error connecting to SQL Server:<br/><pre>".$e."</pre>" ); 
	}

	echo "<h2>Yes! We are connected to SQL Server!</h2>";

	/* ========================================================================================== */
	
	$valores = array(
		'€ €',
		'短语 短语',
		'Фраза очень большой',
		'ááÈÈüe ááÈÈüe',
	);
	
	$conn->setAttribute( PDO::SQLSRV_ATTR_ENCODING,PDO::SQLSRV_ENCODING_UTF8 );
	
	/*
	foreach($valores as $valor)
	{
		$stmt = $conn->prepare("insert into mar_regions (name,n_name) values (:name,:n_name)",array(PDO::SQLSRV_ATTR_ENCODING => PDO::SQLSRV_ENCODING_UTF8));
		$resp = $stmt->execute(array(':name' => $valor, ':n_name' => $valor));
	}
	*/
	
	echo "<br/><hr/><br/>";

	$stmt = $conn->prepare('select * from mar_regions');
	$resp = $stmt->execute();
	if($resp == true){
		while ($row = $stmt->fetch( PDO::FETCH_ASSOC ))
		{
			echo "<pre>"; print_r($row); echo "</pre>";
		}
	}else{
		echo "Cannot read from the database...<br/>";
		echo "<pre>"; print_r($stmt->errorInfo()); echo "</pre>";
	}
?>
	</body>
</html>
