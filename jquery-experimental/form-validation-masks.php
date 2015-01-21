<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		
		<link rel="stylesheet" type="text/css" href="recursos/css/.css">
		
		<script type="text/javascript" src="recursos/js/jquery-1.7.2.min.js"></script>
		
		<title>Form Validations and Masks</title>
		
		<style type="text/css">
			
		</style>
		
		<script type="text/javascript">
			$(document).ready(function() {
				
				// ...
				
			});
		</script>
	</head>
	<body>
		<h1>Form Validations and Masks</h1>
		
		<div id="formulario">
			<form id="form">

				<label for="name">Inserir um nome:</label>
					<input name="name" type="text"/>
				<br/>
				
				<label for="email">Inserir um email:</label>
					<input name="email" type="text"/>
				<br/>

				<label for="date">Inserir uma data:</label>
					<input name="date" type="text"/>
				<br/>
				
				<label for="name">Selecione um número:</label>
					<select name="select">
						<option value="0">Zero</option>
						<option value="1">Um</option>
						<option value="2">Dois</option>
						<option value="3">Três</option>
					</select>
				<br/>
				
				<label for="texto">Inserir um texto:</label>
					<textarea name="texto"></textarea>
				<br/>
				
				<label for="arquivo">Inserir um arquivo:</label>
					<input name="arquivo" type="file"/>
				<br/>
				
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
				<br/>
				
				<label for="">Selecione uma das opções:</label>
				<div>
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
				</div>
				
				<hr/>
				
				<button class="btn">Alo!</button>

			</form>
		</div>
	</body>
</html>