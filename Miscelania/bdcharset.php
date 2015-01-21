<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	header('Content-Type: text/html; charset=UTF-8');
	setlocale(LC_ALL, 'pt_BR.UTF-8');
	date_default_timezone_set('America/Sao_Paulo');
	try
	{
		$dbh = new PDO('dblib:host=HomMarista;dbname=marista', 'marista', 'marista123');
		/*
		$param = '€ зеленый банан ÀÀÀÀáááááá';
		$stmt = $dbh->prepare("insert into mar_regions (name) values (:name)");
		$resp = $stmt->execute(array(':name' => $param));
		*/
		$param = '€ зеленый банан ÀÀÀÀáááááá';
		$stmt = $dbh->prepare("insert into mar_teste (name) values (N'ンから初・配信 € зеленый банан ÀÀÀÀáááááá')");
		$resp = $stmt->execute();
	
		if($resp == true){
			echo "An element was inserted on the data base!<br/>";
		}else{
			echo "Cannot insert on the database:<br/>";
			echo "<pre>"; print_r($stmt->errorInfo()); echo "</pre>";
		}

		$stmt = $dbh->prepare("SELECT * FROM mar_teste");
		$stmt->execute();
		while ($row = $stmt->fetch()) {
			// the returned values are UTF-8 encoded
			echo "<pre>"; var_dump($row); echo "</pre>";
		}
	}
	catch (PDOException $e)
	{
		die($e);
	}