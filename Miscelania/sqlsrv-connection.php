<?php
	ini_set('display_errors', 1);
	error_reporting(E_ALL);

	//Homologação...
	$hom = array(
		'dsn'	 => '',
		'hostdb' => 'sqlhomcorp.cwb.pucpr.br',
		'port'	 => '2200',
		'dbname' => 'marista',
		'usr'    => 'marista',
		'psw'    => 'marista123',
	);
	
	//Produção...
	$prod = array(
		'dsn'    => 'Marista',
		'hostdb' => '10.100.1.22',
		'port'	 => '2700',
		'dbname' => 'marista',
		'usr'    => 'marista',
		'psw'    => 'marista2010@prod',
	);
	
	try {
		// Conexão com MS SQL SERVER via Linux [ driver unixODBC - SQL Server Native Client 11.0 ]
		//$conn = new PDO( 'odbc:DSN='.$prod['dsn'].';UID='.$prod['usr'].';PWD='.$prod['psw'] );

		// Conexão com MS SQL SERVER via Linux [ driver mssql - FreeTDS ]
		$conn = new PDO( 'dblib:host='.$prod['dsn'].';dbname='.$prod['dbname'], $prod['usr'], $prod['psw'] );
		
		// Conexão com MS SQL SERVER via Windows [ driver sqlsrv ]
		//$conn = new PDO( 'sqlsrv:Server='.$hom['hostdb'].','.$hom['port'].';Database='.$hom['dbname'], $hom['usr'], $hom['psw'] ); 
		
		//$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	}
	catch( PDOException $e ) {
	   die( "Error connecting to SQL Server:<br/><pre>".$e."</pre>" ); 
	}

	echo "<h2>Yes! We are connected to SQL Server!</h2>";

	$param = 'new item by sqlsrv-connect #'.rand();
	$stmt = $conn->prepare("insert into mar_regions (name) values ('".$param."') SELECT SCOPE_IDENTITY() as Current_Identity");
	$resp = $stmt->execute();//array('name' => $param));
	
	if($resp == true){
		echo "An element was inserted on the data base:<br/>";
		$row = $stmt->fetch( PDO::FETCH_ASSOC );
		echo "<pre>"; print_r($row); echo "</pre>";
	}else{
		echo "Cannot insert on the database:<br/>";
		echo "<pre>"; print_r($stmt->errorInfo()); echo "</pre>";
	}

	$param = 'new item by sqlsrv-connect #'.rand();
	$stmt = $conn->prepare("insert into mar_regions (name) values (:name) SELECT SCOPE_IDENTITY() as Current_Identity");
	$resp = $stmt->execute(array(':name' => $param));
	
	if($resp == true){
		echo "An element was inserted on the data base:<br/>";
		$row = $stmt->fetch( PDO::FETCH_ASSOC );
		echo "<pre>"; print_r($row); echo "</pre>";
	}else{
		echo "Cannot insert on the database:<br/>";
		echo "<pre>"; print_r($stmt->errorInfo()); echo "</pre>";
	}
	
	$param = 'new item by sqlsrv-connect #'.rand();
	$stmt = $conn->prepare("insert into mar_regions (name) values (?) SELECT SCOPE_IDENTITY() as Current_Identity");
	$stmt->bindParam(1, $param);
	$resp = $stmt->execute();
	
	if($resp == true){
		echo "An element was inserted on the data base:<br/>";
		$row = $stmt->fetch( PDO::FETCH_ASSOC );
		echo "<pre>"; print_r($row); echo "</pre>";
	}else{
		echo "Cannot insert on the database:<br/>";
		echo "<pre>"; print_r($stmt->errorInfo()); echo "</pre>";
	}
	
	echo "<br/><hr/><br/>";
	
	$stmt = $conn->prepare('select * from mar_regions');
	$resp = $stmt->execute();
	if($resp == true){
		echo "Reading elements from the data base:<br/>";
		while ($row = $stmt->fetch( PDO::FETCH_ASSOC )) {
			echo "<pre>"; print_r($row); echo "</pre>";
		}
	}else{
		echo "Cannot read from the database...<br/>";
		echo "<pre>"; print_r($stmt->errorInfo()); echo "</pre>";
	}
?>
