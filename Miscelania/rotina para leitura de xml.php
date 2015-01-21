<?php
	//Classe incluida para utilizar as funcionalidades do SimpleXML no Php4 - Adicionado por Vinicius Garcia em 14/06/2010
	include_once "simplexml.class.php";

	/* Varre o diretorio de noticias em xml para exibição */
	$endXML = $caminho . "xml/noticias/" . $conteudo . "/";
	if(is_dir($endXML)){
		if ($dh = opendir($endXML)) {
			$num_itens = 1;
			//Leio arquivos do diretorio...
			//...e a cada vez que encontrar o num de itens maximo por pag, incremento a pagina
			while (($num_itens <= $limite_linhas) && (($file = readdir($dh)) !== false)){
				//Leio somente caso seja um arquivo .xml
				if (strtolower(strrchr($endXML.$file, ".")) == ".xml"){
					//Se o arquivo existe, eu trabalho com ele
					//Caso contrario, informo o problema
					if(file_exists($endXML.$file)){
						$sxml = new simplexml;
						$xml_conteudo = $sxml->xml_load_file($endXML.$file,"object","ISO-8859-1");

						$dataNoticia = (!isset($xml_conteudo->dataNoticia))?"":$xml_conteudo->dataNoticia;
						$conteudo = str_replace(".xml","",$file);
						$titulo = (!isset($xml_conteudo->titulo))?"":$xml_conteudo->titulo;
						$chamada = (!isset($xml_conteudo->chamada))?"":$xml_conteudo->chamada;
						
						/* (( Do Something... )) */
					}else{
						$saidaLocal .= "Arquivo da notícia não foi encontrado! <br>";
					}
					$num_itens++;
				}
			}
			closedir($dh);
		}
	}else{
		$saidaLocal .= "Diretório da notícia não foi encontrado!";
	}
?>