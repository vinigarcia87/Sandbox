<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />

		<link rel="stylesheet" type="text/css" href="recursos/css/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="recursos/css/data-tables/dttable_bootstrap.css">
		
		<script type="text/javascript" src="recursos/js/jquery-1.7.2.min.js"></script>
		
		<script type="text/javascript" src="recursos/js/data-tables/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="recursos/js/data-tables/jquery.dataTables.bootstrap.custom.js"></script>
		
		<title>Jquery Data Table - Bootstrap from Twitter</title>
		
		<style type="text/css">
			/* Css para o botão de filtro ficar na mesma linha do filtro */
			.dataTables_processing {
				border: 1px solid #DDDDDD;
				color: #999999;
				font-size: 11px;
				left: 0;
				margin: 250px 0 0 350px;
				padding: 2px 0;
				position: absolute;
				text-align: center;
				top: 0;
				width: 250px;
			}
			.search-button {
				text-align: right;
				float: right;
				margin: 0;
			}
			.search-button .clear-filter-button {
				border: 1px;
				margin: 2px;
			}
			.clear-filter-button {
				margin-top: -32px;
			}
			/* Alinha o filtro e a paginação no canto direito da tabela */
			.dataTables_filter, .dataTables_paginate {
				text-align: right;
			}
		
			/* Coluna de Actions */
			.action_column {
				text-align: center;
				width: 150px;
			}
			
			.button-icon {
				display: block;

				height: 16px;
				width: 16px;
			}
			.button-view {
				background-image: url("recursos/icons/16x16_eye_inv.png");
			}
			.button-edit {
				background-image: url("recursos/icons/16x16_edit.png");
			}
			.button-remove {
				background-image: url("recursos/icons/16x16_trash.png");
			}
		</style>
		
		<script type="text/javascript">
			/* Table initialisation */
			$(document).ready(function() {
				dtTable = $('#dttable').dataTable({
					"sDom": "<'row'<'span6'l><'span12'f>r>t<'row'<'span6'i><'span6'p>>",
					"sPaginationType": "bootstrap",
					
					"oLanguage": {
						"sUrl": "./recursos/css/data-tables/lang/pt_BR/lang.txt"
					},
					
					"iDisplayLength":	6,			// Number of rows to display on a single page when using pagination
					"bLengthChange": 	false,		// Allows the end user to select the size of a formatted page from a select menu (sizes are 10, 25, 50 and 100)
					"bAutoWidth": 		false,		// Enable or disable automatic column width calculation
					"sScrollY": 		"270px",
					
					"aoColumnDefs": [
						{ "bSortable":		false, 	"aTargets": [ -1 ] },	// Coluna de Actions não é ordenável
						{ "bSearchable":	false, 	"aTargets": [ -1 ] }	// Coluna de Actions não participa de buscas
					],

					/* -------------------------------------------------------------- */
					
					"bProcessing": true,
					"bServerSide": true,
					"sAjaxSource": "dttable.php",
					
					"fnServerParams": function ( aoData ) {
						aoData.push({ 
							"name": "informacao", "value": "extra"
						});
					},
					
					/* -------------------------------------------------------------- */

					"fnDrawCallback": function( oSettings ) {
						var table = oSettings.sInstance; // Nome do elemento dataTable - Ex. $('#dttable').dataTable( ... );
					
						/* Take the brutal approach to cancelling text selection */
						$('.paginate_button').bind( 'mousedown',   function () { return false; } );
						$('.paginate_button').bind( 'selectstart', function () { return false; } );
						
						/* Ação para o botão de limpar filtros */
						if(!$('.input-append', $('#'+table+'_filter')).length){
							$('#'+table+'_filter').wrapInner('<div class="input-append"/>').append("<button id='"+table+"-clear-filter' type='button' class='clear-filter-button btn'><i class='icon-remove'></i></button>");
						}
						$('#'+table+'-clear-filter').click(function(){
							dtTable.fnFilter('');
							return false;
						});
						
						/* Ações dos botões da tabela */
						$('button').click( function(){
							//alert($(this).parent().parent().attr('id'));
						});
					}
				});
			});
		</script>
	</head>
	<body>
		<h1>Jquery Data Table - Bootstrap from Twitter</h1>
		
		<div id="tabela" class="container" style="margin-top: 10px; margin-left: 10px;">
			<table id="dttable" class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>Id</th>
						<th>Browser</th>
						<th>Platform(s)</th>
						<th class="action_column">Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php /* Informações da tabela */ ?>
				</tbody>
			</table>
		</div>
	</body>
</html>