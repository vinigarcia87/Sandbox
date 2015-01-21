<?php 
	/**
	 * Teste de conexao PDO MySQL
	 * @author Vinicius Garcia
	 * @date 20014-08-21
	 */

	// Informaçoes de acesso ao banco de dados
	$host = 'mysql01.paranageo.hospedagemdesites.ws';
	$dbname = 'paranageo';
	$username = 'paranageo';
	$password = 'paranageoBD1';
	// Uma tabela do banco de dados para realizar um select
	$table = '';
	try {
		$conn = new PDO('mysql:host='.$host.';dbname='.$dbname.'', $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		if($table != '')
		{
			$data = $conn->query('SELECT * FROM '.$table.'');
			foreach($data as $row)
				print_r($row);
		}	
	} catch(PDOException $e) {
		echo 'ERROR: ' . $e->getMessage();
	}

	/*
	// Conexao sem PDO
	$link = mysql_connect('hostname','dbuser','dbpassword'); 
	if (!$link) die('Could not connect to MySQL: ' . mysql_error()); 
	echo 'Connection OK'; mysql_close($link); 
	*/