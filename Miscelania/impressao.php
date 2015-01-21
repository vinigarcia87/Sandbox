<!DOCTYPE html>
<html>
    <head>
        <meta charset="ISO-8859-1">
		<style type="text/css">
			div {
				background-color: #FFFF00;
			}
			h1 {
				color: #00FFFF;
				border: 1px solid red;
			}
		</style>
		<script type="text/javascript">
			function printDiv(divName)
			{
				var printContents = document.getElementById(divName).innerHTML;
				var originalContents = document.body.innerHTML;

				document.body.innerHTML = printContents;

				window.print();

				document.body.innerHTML = originalContents;
			}
		</script>
	</head>
	<body>
		<div id="printableArea">
			<h1>Print me</h1>
		</div>

		<input type="button" onclick="printDiv('printableArea')" value="print a div!" />
	</body>
</html>
