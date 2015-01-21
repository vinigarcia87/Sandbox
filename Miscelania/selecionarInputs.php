<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript">
	$(document).ready(function() {
		$(":input", this).each(function() {
			//var $this = $(this);
			//$this.attr("value", $this.val());
			
			$("#messages").text($("#messages").text() + ' ' + $(this).val());
		});
	});
	</script>
</head>
<body>
	<div id="dialog">
		<dt><label for="demog-givenName">Given (First) Name:</label></dt>
		<dd><input type="text" id="demog-givenName" value="given" /></dd>
		<dt><label for="demog-familyName">Family (Last) Name:</label></dt>
		<dd><input type="text" id="demog-familyName" value="family" /></dd>
		<dt><label for="demog-location">Your Location:</label></dt>
		<dd><input type="text" id="demog-location" value="location" /></dd>
	</div>
	<div id="messages"></div>
</body>
</html>