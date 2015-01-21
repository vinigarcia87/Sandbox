<?php
	/* Autor: Vinicius GARCIA
	 * Data: 22/07/2011
	 *
	 * Esta pagina recebe o arquivo que o usuario esta tentando incluir
	 * e o salva em um diretorio temporario para que, em seguida, a imagem
	 * possa ser editada para assumir o tamanho padrão do sistema.
	 */

	require "recursos/canvas.php";

	//Variaveis que manipulam o crop da imagem
	$crop_x = $_POST['crop_x'];
	$crop_y = $_POST['crop_y'];
	$crop_w = $_POST['crop_w'];
	$crop_h = $_POST['crop_h'];
	$imagem = $_POST['imagem_original'];

	$objImage = new canvas($imagem);

	$dst_nome = 'imagens/thumbs/'.rand()."_".time().".".$objImage->get_extensao();

	$dst_r = ImageCreateTrueColor(215, 138);
	imagecopyresampled($dst_r, $objImage->get_img()
		/* $dst_x */	,0
		/* $dst_y */	,0
		/* $src_x */	,$crop_x
		/* $src_y */	,$crop_y
		/* $dst_w */	,215
		/* $dst_h */	,138
		/* $src_w */	,$crop_w
		/* $src_h */	,$crop_h
		);
	imagejpeg($dst_r, $dst_nome, 90);

	echo $dst_nome;
?>