<?php
	/*
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