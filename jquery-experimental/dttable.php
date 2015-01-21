<?php
	sleep(2); // Soh para forçar a exibição do campo 'processando'...
	
	$informacoes = array(
		'sEcho' 				=> 0,		// Página em exibição
		'iTotalRecords' 		=> 0,		// Total máximo de itens que pode ser retornado
		'iTotalDisplayRecords' 	=> 0,		// Número de itens que a consulta retorna - para a paginação!
		'aaData' 				=> array(),	// Array de itens que serão exibidos na tabela
	);
	
	// Preenchimento das informações...
	$informacoes = array(
		'sEcho' 				=> $_GET['sEcho'],
		'iTotalRecords' 		=> count($informacoes['aaData']),
		'iTotalDisplayRecords' 	=> 100,
		'aaData' 				=> array(),
	);
	
	$id = $_GET['iDisplayStart'];
	for($i = $_GET['iDisplayStart']; $i < ($_GET['iDisplayStart'] + $_GET['iDisplayLength']); $i++){
		$item = array(
			$id,
			'browser firefox 13.'.$id,
			'win 9'.$id,
			'
			<button id="view"   class="btn"><span class="button-icon button-view"></span></button>
			<button id="edit"   class="btn"><span class="button-icon button-edit"></span></button>
			<button id="remove" class="btn"><span class="button-icon button-remove"></span></button>
			',
		);
		$informacoes['aaData'][] = $item;
		$id++;
	}
	
	echo json_encode($informacoes);
?>