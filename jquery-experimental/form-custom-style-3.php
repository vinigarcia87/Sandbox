<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		
		<link rel="stylesheet" type="text/css" href="custom.css">
		
		<script type="text/javascript" src="recursos/js/jquery-1.7.2.min.js"></script>
		
		<title>Form Custom Style 3</title>
		
		<style type="text/css">
			html {
			  font-size: 100%;
			  -webkit-text-size-adjust: 100%;
				  -ms-text-size-adjust: 100%;
			}

			a:focus {
			  outline: thin dotted #333;
			  outline: 5px auto -webkit-focus-ring-color;
			  outline-offset: -2px;
			}

			a:hover,
			a:active {
			  outline: 0;
			}

			body {
			  margin: 0;
			  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
			  font-size: 13px;
			  line-height: 18px;
			  color: #333333;
			  background-color: #ffffff;
			}

			a {
			  color: #0088cc;
			  text-decoration: none;
			}

			a:hover {
			  color: #005580;
			  text-decoration: underline;
			}

			.well {
			  min-height: 20px;
			  padding: 19px;
			  margin-bottom: 20px;
			  background-color: #f5f5f5;
			  border: 1px solid #eee;
			  border: 1px solid rgba(0, 0, 0, 0.05);
			  -webkit-border-radius: 4px;
				 -moz-border-radius: 4px;
					  border-radius: 4px;
			  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
				 -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
					  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
			}

			.pull-right {
			  float: right;
			}

			.pull-left {
			  float: left;
			}

			.hide {
			  display: none;
			}

			.show {
			  display: block;
			}

			.invisible {
			  visibility: hidden;
			}
			hr {
			  margin: 18px 0;
			  border: 0;
			  border-top: 1px solid #eeeeee;
			  border-bottom: 1px solid #ffffff;
			}
		</style>
		
		<script type="text/javascript">
			$(document).ready(function() {
				
				// ...
				
				$('input[type=checkbox]').each(function(k,v){
					alert($.trim($(this).parent().text()));
				});
				
				// ...
			});
		</script>
	</head>
	<body>
		<h1>Form Custom Style 3</h1>
		<div id="formulario">
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
				<div class="block">
					<label for="c1">
						<input type="checkbox" id="c1" name="c" title="Check me!">
						Check me!
					</label>
					<label for="c2">
						<input type="checkbox" id="c2" name="c" title="Check me!">
						Check me too!
					</label>
					<label for="c3">
						<input type="checkbox" id="c3" name="c" title="Check me!">
						Don't forget me!
					</label>
					<label for="c4">
						<input type="checkbox" id="c4" name="c" title="Check me!">
						Here! Choose me!
					</label>
				</div>
				
				<label for="">Selecione os breganights:</label>
				<textarea name="texto" placeholder="Disabled input here…" disabled="" class="disabled"></textarea>
				
				<label for="">Selecione os breganights:</label>
				<input type="text" class="uneditable-input" value="não editável..." disabled="disabled">
				
				<label for="">Selecione os breganights:</label>
				<input type="text" disabled="disabled" placeholder="Disabled input here…">
				
				<fieldset class="well">
				<div class="inline">
					<label for="r1">
						<input id="r1" type="radio" name="r">
						radio goo goo!
					</label>
					<label for="r2">
						<input id="r2" type="radio" name="r">
						radio gaa gaa!
					</label>
					<label for="r3">
						<input id="r3" type="radio" name="r">
						uhuu!
					</label>
				</div>
				</fieldset>
				
				<hr/>
				
				<button>Alo!</button>
			</form>
		</div>
	</body>
</html>