<?php
	/* Variaveis externas necessárias */
	$num_total_noticias;
	$total_itens_por_pagina;
	$pagina_exibida = isset($_GET['pag'])?$_GET['pag']:1;

	/*
	 * @Autor: 	Vinicius Garcia
	 * @Data:	04/07/2011
	 * @Descr:	Menu de páginas
	 *
	 * Return:	« anterior 1  2  3  4  5  [6]  7  8  9  10  11 próximo »
	 */

	$saida .= "<br><div align='center'><b>";
	$quant_paginas = ceil($num_total_noticias/$total_itens_por_pagina);
	//Se esta na primeira pagina, nao habilita o link em ANTERIOR
	if ( $pagina_exibida > 1){
		$saida .= "<a href='?pag=".($pagina_exibida - 1)."'><b>&laquo; anterior</b></a>";
	}else{
		$saida .= "<font color=#CCCCCC>&laquo; anterior</font>";
	}
	//Ajusta o tamanho do menu de paginas
	$tam_janela = ($quant_paginas <= 10)?$quant_paginas:10;
	$meio_janela = $tam_janela/2;
	//No começo...
	if ($pagina_exibida <= ceil($meio_janela)){
		$inicio = 1;
		$fim = $tam_janela;
	}else{
		//No final...
		if ($pagina_exibida >= $quant_paginas - floor($meio_janela)){
		    $inicio = $quant_paginas - ($tam_janela - 1);
		    $fim = $quant_paginas;
		}else{
		    //No meio...
		    $inicio = $pagina_exibida - ($tam_janela - (int) $meio_janela);
		    $fim = $pagina_exibida + ($tam_janela - (int) $meio_janela);
		}
	}
	//Exibe os numeros de paginas
	for($i = $inicio; $i < ($fim + 1); $i++){
		//Desabilita o link para a pagina atual
		if ($pagina_exibida == $i){
		    $saida .= "&nbsp;<span>[".$i."]</span>&nbsp;";
		}else{
		    $saida .= "&nbsp;<a href=\'?pag=".$i."\'><b>".$i."</b></a>&nbsp;";
		}
	}
	//Se esta na ultima pagina, nao habilita o link em PROXIMO
	if ($pagina_exibida < $quant_paginas){
		$saida .= "<a href=\'?pag=".($pagina_exibida + 1)."\'><b>próximo &raquo;</b></a>";
	}else{
		$saida .= "<font color=#CCCCCC>próximo &raquo;</font>";
	}
	$saida .= "</b></div>";
?>
