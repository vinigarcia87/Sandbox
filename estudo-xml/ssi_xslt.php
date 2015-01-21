<?php
	/**
	 * Transforma um xml utilizando uma folha de estilos xsl
	 *
	 * @param  $xml
	 * @param  $xsl
	 * @return string xml
	 */
	function transformar_xml($xml, $xsl){
	   $xslt = new XSLTProcessor();
	   $xslt->importStylesheet(new  SimpleXMLElement($xsl, NULL, TRUE));
	   return $xslt->transformToXml(new SimpleXMLElement($xml, NULL, TRUE));
	}
?>
<?php
	echo transformar_xml('noticias.xml', 'noticias.xsl');
?>
<?php
	/*
	// Load the XML source
	$xml = new DOMDocument;
	$xml->load('noticias.xml');

	$xsl = new DOMDocument;
	$xsl->load('noticias.xsl');

	// Configure the transformer
	$proc = new XSLTProcessor;
	$proc->importStyleSheet($xsl); // attach the xsl rules

	echo $proc->transformToXML($xml);
	*/
?>