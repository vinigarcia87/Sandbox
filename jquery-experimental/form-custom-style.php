<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		
		<link rel="stylesheet" href="recursos/css/jqtransform/jqtransform.css" type="text/css"/>
		
		<script type="text/javascript" src="recursos/js/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="recursos/js/jqtransform/jquery.jqtransform.js"></script>
		
		<title>Form Custom Style</title>
		
		<style type="text/css">
			* {
				
			}
		</style>
		
		<script type="text/javascript">
			$(document).ready(function() {
				
				$('form').jqTransform({imgPath:'recursos/css/jqtransform/img/'});
				
			});
		</script>
	</head>
	<body>
		<h1>Form Custom Style</h1>
		<div id="formulario">
			<form id="form">
				<fieldset>
					<div class="rowElem">
						<label for="name">Textbox</label>
						<input name="name" type="text" />
					</div>
					
					<div class="rowElem">
						<label for="combo">Combobox</label>
						<select name="combo">
							<option value="0">Zero</option>
							<option value="1">Um</option>
							<option value="2">Dois</option>
							<option value="3">Três</option>
						</select>
					</div>
					
					<div class="rowElem">
						<label for="sex">Radio buttons</label>
						<input type="radio" name="sex[]" value="male" /><label>Male</label>
						<input type="radio" name="sex[]" value="female" /><label>Female</label>
					</div>
					
					<div class="rowElem">
						<label for="check">Checkboxes</label>
						<input type="checkbox" name="check[]" /><label>CheckBox 1!</label>
						<input type="checkbox" name="check[]" /><label>CheckBox 2!</label>
						<input type="checkbox" name="check[]" /><label>CheckBox 3!</label>
					</div>
					
					<div class="rowElem">
						<input type="submit" value="Submit!" />
						<input type="reset" value="Reset" />
					</div>
				</fieldset>
			</form>
		</div>
	</body>
</html>