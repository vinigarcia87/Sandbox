<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		
		<link type="text/css" href="recursos/css/jquery-themes/ui-lightness/jquery-ui-1.8.20.custom.css" rel="stylesheet" />
		
		<script type="text/javascript" src="recursos/js/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="recursos/js/ui/jquery-ui-1.8.20.custom.min.js"></script>
		
		<title>Jquery UI - CSS Helpers</title>
		
		<style type="text/css">
			ul#icons {
				margin: 0;
				padding: 0;
			}
			ul#icons li {
				border: 1px;
				cursor: pointer;
				float: left;
				list-style: none outside none;
				margin: 2px;
				padding: 4px 0;
				position: relative;
			}
			ul#icons span.ui-icon {
				float: left;
				margin: 0 4px;
			}
		</style>
		
		<script type="text/javascript">
			$(document).ready(function() {

				$('ul#icons li').hover(
					function() { $(this).addClass('ui-state-hover');    }, 
					function() { $(this).removeClass('ui-state-hover'); }
				);
				
			} );
		</script>
	</head>
	<body>
		<h1>Jquery UI - CSS Helpers</h1>

		<div id="container">
			<ul id='icons' class='ui-widget ui-helper-clearfix'>
				<li class='ui-state-default ui-corner-all'>
					<span class='ui-icon ui-icon-closethick'></span>
				</li>
				<li class='ui-state-default ui-corner-all'>
					<span class='button-icon button-remove'></span>
				</li>
				<li>
					<span class='ui-icon ui-icon-closethick'></span>
				</li>
				<li class='ui-state-disabled ui-corner-all'>
					<span class='ui-icon ui-icon-closethick'></span>
				</li>
				<li class='ui-state-active ui-corner-all'>
					<span class='ui-icon ui-icon-closethick'></span>
				</li>
			</ul>
			<form>
				<input type='text' class='ui-state-default ui-corner-all'/><br/>
				<input type='password' class='ui-state-default ui-corner-all'/><br/>
				<select name='select' class='ui-state-default ui-corner-all'>
					<option value='0'>Zero</option>
					<option value='1'>Um</option>
					<option value='2'>Dois</option>
					<option value='3'>Três</option>
				</select>
			</form>
		</div>
	</body>
</html>