<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		
		<link rel="stylesheet" type="text/css" href="recursos/css/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="recursos/css/bootstrap/css/custom.bootstrap.css">
		
		<script type="text/javascript" src="recursos/js/jquery-1.7.2.min.js"></script>
		
		<title>Form Custom Style with Bootstrap, from Twitter</title>
		
		<style type="text/css">
			
		</style>
		
		<script type="text/javascript">
			$(document).ready(function() {
				
				// ...
				
			});
		</script>
	</head>
	<body>
		<h1>Form Custom Style with Bootstrap, from Twitter</h1>
		<div id="formulario" class="container" style="margin-top: 10px; margin-left: 10px;">
			<form id="form">

				<label for="name">Inserir um nome:</label>
					<input name="name" type="text"/>

				<label for="name">Selecione um número:</label>
					<select name="select">
						<option value="0">Zero</option>
						<option value="1">Um</option>
						<option value="2">Dois</option>
						<option value="3">Três</option>
					</select>

				<label for="texto">Inserir um texto:</label>
					<textarea name="texto"></textarea>
				
				<label for="arquivo">Inserir um arquivo:</label>
					<input name="arquivo" type="file"/>
				
				
				<label for="">Selecione os breganights:</label>
				<div>
					<label for="c1" class="checkbox">
						<input type="checkbox" id="c1" name="c" class="checkbox">
						Check me!
					</label>
					<label for="c2" class="checkbox">
						<input type="checkbox" id="c2" name="c" class="checkbox">
						Check me too!
					</label>
					<label for="c3" class="checkbox">
						<input type="checkbox" id="c3" name="c" class="checkbox">
						Don't forget me!
					</label>
					<label for="c4" class="checkbox">
						<input type="checkbox" id="c4" name="c" class="checkbox">
						Here! Choose me!
					</label>
				</div>
				
				<fieldset class="well">
					<label for=""></label>
					<textarea name="texto" disabled="" class="disabled" placeholder="desabilitado pela class 'disabled'"></textarea>
					
					<label for=""></label>
					<span class="input-xlarge uneditable-input">desabilitado pela class 'uneditable-input'</span>
					
					<label for=""></label>
					<input type="text" disabled="disabled" placeholder="desabilitado pelo parâmetro 'disabled'">
				</fieldset>
				
				<fieldset>
					<label for="r1" class="radio inline">
						<input id="r1" type="radio" name="r" class="radio">
						radio goo goo!
					</label>
					<label for="r2" class="radio inline">
						<input id="r2" type="radio" name="r" class="radio">
						radio gaa gaa!
					</label>
					<label for="r3" class="radio inline">
						<input id="r3" type="radio" name="r" class="radio">
						uhuu!
					</label>
				</fieldset>
				
				<hr/>
				
				<button class="btn">Alo!</button>

			</form>
		</div>
	</body>
</html>