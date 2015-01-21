<?php
// pega a hora do servidor
$hora = date("H", time()-10800); // Horas
$min  = date("i", time()); // Minutos
$seg = date("s", time()); // Segundos
$relogio = $hora . ":" . $min.":".$seg; // Formata horas
/*** Inicia o leitor de XML ***/
// incluindo a classe
require_once('SimpleLargeXMLParser.class.php');
// seta o caminho do XML
$xml = "ftp://radio:qwe123@ftp.pucpr.br/radiomais.xml";
// cria objeto
$parser = new SimpleLargeXMLParser();
// carrega XML
$parser->loadXML($xml);
// seta no parser o nó a ser listado/percorrido
/*$nomexml = $parser->parseXML("//Playlist/OnAir/CurIns", true);
$nome = $nomexml[0]['Name'][0]['value']['Name']['value'];*/
// seta no parser o nó a ser listado/percorrido
$onair = $parser->parseXML("//Playlist/OnAir/CurIns", true);
// percorre o XML
foreach($onair as $faixas)
{
 //percorre o nó faixa
 foreach($faixas as $faixa => $informacoes)
 {
 if(isset($informacoes[0]['value']['Dur']))
 {
 // armazena no objeto titulo o nó atual
 $info = (object) $informacoes[0]['value']['Dur'];
 // adiciona o nó autor no objeto titulo
 $info->StartedTime = $faixas['StartedTime'][0]['value']['StartedTime']['value'];
 // adiciona o nome da musica no objeto
 $info->Nome = $faixas['Name'][0]['value']['Name']['value'];
 // adiciona o relogio da musica no objeto
 $info->Relogio = $relogio;
 
  echo json_encode($info);
 }
 }
}
?>