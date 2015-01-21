<meta charset="utf-8">

	<link type="text/css" href="recursos/css/jquery-themes/ui-lightness/jquery-ui-1.8.20.custom.css" rel="stylesheet" />
	<script type="text/javascript" src="recursos/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="recursos/js/ui/jquery-ui-1.8.20.custom.min.js"></script>
	
	<style>
		body {
			font-size: 62.5%;
		}
		#button {
			padding: 0.4em 1em 0.4em 1em;
			position: relative;
			text-decoration: none;
		}
		.button-icon {
			float: left;
			margin-right: .3em;
		}
	</style>
	
	<script>
		$(function() {
			$( "#button" ).button();
			$( "#button" ).click(function() { alert("Botão clicado!"); return false; });
		});
	</script>
	
	<div>
		<!-- Button -->
		<h2>Button</h2>
		<button id="button"><span class="button-icon ui-icon ui-icon-newwin"></span>A button element</button>
	</div>
