<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		
		<link rel="stylesheet" type="text/css" href="recursos/css/bootstrap/bootstrap.min.css">
		
		<script type="text/javascript" src="recursos/js/jquery-1.7.2.min.js"></script>
		
		<title>Bootstrap from Twitter - Form Style</title>
		
		<style type="text/css">
			#form {

			}
		</style>
		
		<script type="text/javascript">
			$(document).ready(function() {
				
				// ...
				
			});
		</script>
	</head>
	<body>
		<h1>Bootstrap from Twitter - Form Style</h1>
		<div id="formulario" class="span4">
			<form id="form">
				<fieldset>
					<dt></dt>
					<dd><input name="name" type="text"/></dd>
					<dt></dt>
					<dd>
						<select name="select">
							<option value="0">Zero</option>
							<option value="1">Um</option>
							<option value="2">Dois</option>
							<option value="3">Três</option>
						</select>
					</dd>
					<dt></dt>
					<dd>
						<input type="radio" name="sex[]" value="male" /> Male
						<input type="radio" name="sex[]" value="female" /> Female
					</dd>
					<dt></dt>
					<dd>
						<input type="checkbox" name="check[]" /> CheckBox 1!
						<input type="checkbox" name="check[]" /> CheckBox 2!
						<input type="checkbox" name="check[]" /> CheckBox 3!
					</dd>
					
					<hr/>
					
					<dt>
						<input type="submit" value="Submit!" class="btn span1" />
						<input type="reset" value="Reset" class="btn span1" />
					</dt>
				</fieldset>
			</form>
		</div>
	</body>
</html>