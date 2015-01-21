<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
	"http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<title>Menu em abas simples</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		var tabAtual = 1
 
		mudarTab = function(numeroTab) {
			$("#tab_"+tabAtual).toggle()
			$("#tab_"+numeroTab).toggle()
			tabAtual = numeroTab
		}
	</script>
</head>
<body id="index">
 
	<div id="tabs">
 
		<a href="#tab_1" onclick="mudarTab(1)">Tab 1</a>
		<a href="#tab_2" onclick="mudarTab(2)">Tab 2</a>
		<a href="#tab_3" onclick="mudarTab(3)">Tab 3</a>
		<a href="#tab_4" onclick="mudarTab(4)">Tab 4</a>
 
		<div id="tab_1">conteudo tab 1</div>
		<div id="tab_2" style="display:none">conteudo tab 2</div>
 
		<div id="tab_3" style="display:none">conteudo tab 3</div>
		<div id="tab_4" style="display:none">conteudo tab 4</div>
	</div>
 
</body>
</html>