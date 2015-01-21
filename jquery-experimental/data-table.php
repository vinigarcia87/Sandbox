<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta charset="utf-8">

		<link type="text/css" href="recursos/css/jquery-themes/ui-lightness/jquery-ui-1.8.20.custom.css" rel="stylesheet" />
		<link type="text/css" href="recursos/css/data-tables/dttable_custom.css" rel="stylesheet" />
		
		<script type="text/javascript" src="recursos/js/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="recursos/js/data-tables/jquery.dataTables.min.js"></script>
		
		<title>Jquery Data Table - Custom Style</title>
		
		<style type="text/css">
		.container {
			width: 940px;
			margin-left: 10px;
			margin-top: 10px;
			margin-left: auto;
			margin-right: auto;
		}
		
		.container:before, .container:after {
			content: "";
			display: table;
		}
		.container:after {
			clear: both;
		}
		</style>
		
		<script type="text/javascript">
			$(document).ready(function() {
				$('#dttable').dataTable({
					//"bJQueryUI": true,				// Enable jQuery UI ThemeRoller support
					
					"oLanguage": {
						"sUrl": "./recursos/css/data-tables/lang/pt_BR/lang.txt"
					},
					
					"bPaginate": true,					// Enable or disable pagination
					"sPaginationType": "full_numbers",	// DataTables features two different built-in pagination interaction methods ('two_button' or 'full_numbers')
					
					"sScrollY": 		"150px",		// Enable vertical scrolling
					
					"bSortClasses": 	false,			// Enable or disable the addition of the classes 'sorting_1', 'sorting_2' and 'sorting_3' to the columns which are currently being sorted on					
					"iDisplayLength":	5,				// Number of rows to display on a single page when using pagination
					"bLengthChange": 	false,			// Allows the end user to select the size of a formatted page from a select menu (sizes are 10, 25, 50 and 100)
					"bFilter": 		 	true,			// Enable or disable filtering of data
					"bSort": 		 	true,			// Enable or disable sorting of columns
					"bInfo": 		 	true,			// Enable or disable the table information display
					"bAutoWidth": 	 	false			// Enable or disable automatic column width calculation
				});
			});
		</script>
	</head>
	<body>
		<h1>Jquery Data Table - Custom Style</h1>
		

		
		<div id="tabela" class="container" style="margin-top: 10px; margin-left: 10px;">
			<table id="dttable" class="display">
				<thead>
					<tr>
						<th>Browser</th>
						<th>Platform(s)</th>
					</tr>
				</thead>
				<tbody>
					<tr><td>Internet Explorer 4.0</td><td>Win 95+</td></tr>
					<tr><td>Internet Explorer 5.0</td><td>Win 95+</td></tr>
					<tr><td>Internet Explorer 5.5</td><td>Win 95+</td></tr>
					<tr><td>Internet Explorer 6</td><td>Win 98+</td></tr>
					<tr><td>Internet Explorer 7</td><td>Win XP SP2+</td></tr>
					<tr><td>AOL browser (AOL desktop)</td><td>Win XP</td></tr>
					<tr><td>Firefox 1.0</td><td>Win 98+ / OSX.2+</td></tr>
					<tr><td>Firefox 1.5</td><td>Win 98+ / OSX.2+</td></tr>
					
					<tr><td>Internet Explorer 4.0</td><td>Win 95+</td></tr>
					<tr><td>Internet Explorer 5.0</td><td>Win 95+</td></tr>
					<tr><td>Internet Explorer 5.5</td><td>Win 95+</td></tr>
					<tr><td>Internet Explorer 6</td><td>Win 98+</td></tr>
					<tr><td>Internet Explorer 7</td><td>Win XP SP2+</td></tr>
					<tr><td>AOL browser (AOL desktop)</td><td>Win XP</td></tr>
					<tr><td>Firefox 1.0</td><td>Win 98+ / OSX.2+</td></tr>
					<tr><td>Firefox 1.5</td><td>Win 98+ / OSX.2+</td></tr>
				</tbody>
			</table>
		</div>
	</body>
</html>