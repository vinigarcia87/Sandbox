<?php
	﻿/*
	 * @Autor: 	Vinicius Garcia
	 * @Data:	16/06/2011
	 * @Descr:	Retorna a extensão de um arquivo
	 * 
	 * $nome_arquivo: nome de um arquivo - ex. '/xml/lista de cliente.xml'
	 * Return:	  extensão do arquivo $nome_arquivo - ex. '.xml'
	 * */
	function retorna_extensao($nome_arquivo){
		return strtolower(strrchr($nome_arquivo, "."));
	}

	﻿/*
	 * @Autor: 	Vinicius Garcia
	 * @Data:	17/06/2011
	 * @Descr:	Informa se uma substring está ou não contida em uma string - case sensitive
	 * 
	 * $string: 	string que pode ou não conter a substring - ex. 'a casa de doces'
	 * $sub_string: substring que procuramos na string - ex. 'casa'
	 * Return:	boolean indicando se a substring foi encontrada (true) ou não (false) - ex. 'true'
	 * */
	function procura_substr($string, $sub_string){
		return (strpos($string, $sub_string) !== false)?true:false;
	}

	﻿/*
	 * @Autor: 	Vinicius Garcia
	 * @Data:	24/06/2011
	 * @Descr:	Cria uma estrutura de diretorios, caso ela não exista
	 * 
	 * $dir_root: 	Diretório onde vai se encontrar a arvore a ser criada - ex. www.pucpr.br/
	 * $arvore_new: Árvore a ser criada, caso ainda não exista - ex. xml/noticias/1
	 * Return:	boolean indicando se houve sucesso (true) ou não (false) - ex. true
	 * */
	function cria_arvore($dir_root, $arvore_new){
		$lista_diretorios = explode("/", $arvore_new);
		foreach ($lista_diretorios as $dir){
			if (!is_dir($dir_root."/".$dir)){
				mkdir($dir_root."/".$dir, 0777);
			}
			$dir_root = $dir_root."/".$dir;
		}
		return true;
	}

	﻿/*
	 * @Autor: 	Vinicius Garcia
	 * @Data:	01/07/2011
	 * @Descr:	Transforma uma data dd/mm/aaaa em aaaa-mm-dd
	 * 
	 * $data: 	Data no formato dd/mm/aaaa - ex. 01/07/2011
	 * Return:	Data no formato aaaa-mm-dd - ex. 2011-07-01
	 * */
	 function converte_data($data){
		return implode("-", array_reverse(explode("/", $data)));
	 }

	﻿/*
	 * @Autor: 	Vinicius Garcia
	 * @Data:	01/07/2011
	 * @Descr:	Compara duas datas
	 * 
	 * $data1: 	Data no formato dd/mm/aaaa - ex. 01/07/2011
	 * $data2: 	Data no formato dd/mm/aaaa - ex. 01/07/2011
	 * Return:	< 0 : data1 eh menor que data2
	 * 		    > 0 : data1 eh maior que data2
	 * 		      0 : data1 eh igual a data2 - ex. 0
	 * */
	function compara_datas_asc($data1, $data2){ 
		return ($data1 == $data2)?0:($data1 > $data2)?+1:-1; 
	}
	function compara_datas_desc($data1, $data2){ 
		return ($data1 == $data2)?0:($data1 > $data2)?-1:+1; 
	}

	﻿/*
	 * @Autor: 	Vinicius Garcia
	 * @Data:	04/07/2011
	 * @Descr:	Retira itens duplicados em um array de dois niveis
	 * 
	 * $array: 	Array em dois niveis a ser avaliado - ex. $array = array(array('a' => 1, 'b' => 2), array('a' => 1, 'b' => 2), array('a' => 2, 'b' => 3))
	 * Return:	Array de dois niveis sem itens repetidos - ex. array(array('a' => 1, 'b' => 2), array('a' => 2, 'b' => 3))
	 * 		Nota - a vantagem aqui eh que as chaves NÃO são preservadas - ie, ao inves de (0 => array, 2 => array) temos (0 => array, 1 => array)
	 * */
	function super_unique($array){
		return array_map('unserialize', array_values(array_map('serialize', $array)));
	}
	
	﻿/*
	 * @Autor: 	Vinicius Garcia
	 * @Data:	07/07/2011
	 * @Descr:	Trunca uma string sem cortar palavras
	 * 
	 * $texto: 	string a ser truncada - ex. "tipo 0! noticia cumpridinha mas nem tanto considerando o espaço que tem desponivel e tudo mais tah ligado?"
	 * $limite:	limite de caracteres que a string poderá ter - ex. 40
	 * Return:	string com no máximo $limite caracteres - ex. "tipo 0! noticia cumpridinha mas nem..."
	 * 		Nota - respeita as palavras, caso contrário retornaria "tipo 0! noticia cumpridinha mas nem tant"
	 * */
	function truncar_texto($texto, $limite){
		if(strlen($texto) > $limite){
			do{
				$limite--;
				$last = substr($texto, ($limite - 1), 1);
			}while(($last != ' ') && ($limite > 0));

			$last = substr($texto, ($limite - 2), 1);
			if (($last == ',') || ($last == ';')  || ($last == ':')){
				 $texto = substr($texto, 0, ($limite - 2)).'...';
			}elseif (($last == '.') || ($last == '?') || ($last == '!')){
				 $texto = substr($texto, 0, ($limite - 1));
			}else{
				 $texto = substr($texto, 0, ($limite - 1)).'...';
			}
		}
		return $texto;
	}
	
	/* @Autor: 	Vinicius Garcia
	 * @Data : 	05/08/2011
	 * @Descr:	Retira acentos e troca espaços por caracteres '+' - próprio para url's
	 * 
	 * $texto	string que será limpa - ex. "Ação comunitária faz 10 anos"
	 * Return	string sem acentos nem espaços em branco - ex. "Acao+comunitaria+faz+10+anos"
	 */
	function limpar_texto($texto){
		return ereg_replace("[^a-zA-Z0-9_.+-]", "", strtr($texto, "áàãâéêíóôõúüçÁÀÃÂÉÊÍÓÔÕÚÜÇ ", "aaaaeeiooouucAAAAEEIOOOUUC+"));
	}

	/*
	 * @Autor: 	Vinicius Garcia
	 * @Data:	08/06/2012
	 * @Descr:	Retorna o tamanho de um arquivo de forma legivel
	 * 
	 * $bytes: quantidade ded bytes de um arquivo - ex. 1024 * 1024
	 * $decimals: digitos decimais a serem levados em consideração - ex. 2
	 * Return: tamanho escrito de forma legivel - ex. 1.00Mb
	 * */
	function filesize_legivel($bytes, $decimals = 2){
		$sz = 'BKMGTP';
		$factor = floor((strlen($bytes) - 1) / 3);
		return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$sz[$factor].'b';
	}
	
	/*
	 * @Autor: 	Vinicius Garcia
	 * @Data:	07/06/2012
	 * @Descr:	Baixa uma imagem, salvando-a em um diretório apropriado
	 * 
	 * $arquivo	  : imagem a ser baixada - ex. $_FILES['imagem']
	 * $destino	  : destino da imagem (já com o nome do arquivo!) - ex. /imagens/nova_imagem.jpg
	 * $dimensoes : dimensões máximas permitidas (largura e altura, nesta ordem!) - ex. array( 'largura' => 800, 'altura' => 600 )
	 * Return	  : array contendo o 'status' da função e uma 'msg' apropriada - ex. array( 'status' => 'error', "msg" => 'Ocorreu um erro' );
	 * */
	function baixar_imagem($arquivo, $destino, $dimensoes = array()){
		// Verifica se houve algum erro com o upload. Se sim, exibe a mensagem do erro
		if ($arquivo['error'] != 0)
		{
			// Array com os tipos de erros de upload do PHP
			$up_erros[0] = 'Não houve erro';
			$up_erros[1] = 'O arquivo no upload é maior do que o limite do PHP';
			$up_erros[2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
			$up_erros[3] = 'O upload do arquivo foi feito parcialmente';
			$up_erros[4] = 'Não foi feito o upload do arquivo';
			
			return array(
				"status" => "error",
				"msg" 	 => "Erro ao copiar arquivo: Não foi possível fazer o upload do arquivo. ".$up_erros[$arquivo['error']]
			);
		}

		// Faz a verificação da extensão do arquivo
		$extensao = retorna_extensao($arquivo['name']);
		if((!empty($extensoes)) && (!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $arquivo["type"])))
		{
			return array(
				"status" => "error",
				"msg" 	 => "Erro ao copiar arquivo: Apenas arquivos com as seguintes extensões são permitidos: ".implode(', ',$extensoes)
			);
		}

		// Faz a verificação do tamanho do arquivo
		$tamanho_maximo = (1024 * 1024) * 2; // 2Mb
		if ($tamanho_maximo < $arquivo['size'])
		{
			return array(
				"status" => "error",
				"msg" 	 => "Erro ao copiar arquivo: O arquivo enviado é muito grande. Tamanho máximo suportado de ".filesize_legivel($tamanho_maximo, 0)
			);
		}

		// Verifica se a largura da imagem é maior que a largura permitida
		if(!empty($dimensoes))
		{
			list($largura_maxima, $altura_maxima) = $dimensoes;
			list($width, $height, $type, $attr) = getimagesize($arquivo["tmp_name"]);
			if(($width > $largura_maxima) || ($height > $altura_maxima))
			{
				return array(
					"status" => "error",
					"msg" 	 => "Erro ao copiar arquivo: Dimensões da imagem devem ser no máximo ".$largura_maxima."x".$altura_maxima
				);
			}
		}
		
		// Depois verifica se é possível mover o arquivo para a pasta escolhida
		if(move_uploaded_file($arquivo['tmp_name'], $destino))
		{
			return array(
				"status" => "success",
				"msg" 	 => "<img src='".$destino."' />"
			);			
		}
		else
		{
			return array(
				"status" => "error",
				"msg" 	 => "Erro ao copiar arquivo: Não foi possível fazer o upload do arquivo. Tente novamente.",
			);
		}
	}
?>























