<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		
		<link type="text/css" href="recursos/css/jquery-themes/ui-lightness/jquery-ui-1.8.20.custom.css" rel="stylesheet" />
		
		<script type="text/javascript" src="recursos/js/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="recursos/js/ui/jquery-ui-1.8.20.custom.min.js"></script>
		<script type="text/javascript" src="recursos/js/data-tables/jquery.dataTables.min.js"></script>
		
		<title>Jquery Data Table - Jquery UI Style</title>
		
		<style type="text/css">
			/* Conteiner de tabela */
			#tabela {
				width: 600px;
			}
			/* Tabela */
			.dataTable {
				width: 100%;
				font-size: 80%;
			}
			/* Define a altura do cabeçalho */
			.dataTable thead tr th {
				height: 25px;
			}
			/* Estilo para linhas intercaladas */
			.dataTable .odd {
				background-color: #F9F9F9;
			}
			.dataTable .even {
				background-color: #FFFFFF;
			}
			/* Css para Infos ficarem na mesma linha que a paginação e o botão de filtro ficar na mesma linha do filtro */
			.dataTables_info {
				float: left;
				margin: 6px 0;
			}
			/* Alinha as spans dentro de table-thead-tr-th que contém indicadores de ordenação */
			.span-ordenation {
				float: right;
			}
			/* Css para o botão de filtro ficar na mesma linha do filtro */
			.search-button {
				text-align: right;
				float: right;
				margin: 0;
			}
			.search-button .clear-filter-button {
				border: 1px;
				margin: 2px;
			}
			/* Alinha o filtro e a paginação no canto direito da tabela */
			.dataTables_filter, .dataTables_paginate {
				text-align: right;
				margin: 6px 0;
			}
			/* Botões da paginação */
			.paginate_button, .paginate_active {
				color: #0088CC;
				padding: 3px;
				margin: 2px;
				cursor: pointer;
			}
			.paginate_active {
				color: #999999;
				background-color: #F9F9F9;
				cursor: default;
			}
			.paginate_button_disabled {
				color: #999999;
				cursor: default;
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

				dtTable = $('#dttable').dataTable( {
	
					"sDom": '<"search-button">frtip',
					"sPaginationType": "full_numbers",
				
					"oLanguage": {
						"sUrl": "./recursos/css/data-tables/lang/pt_BR/lang.txt"
					},
					
					"iDisplayLength":	5,			// Number of rows to display on a single page when using pagination
					"bLengthChange": 	false,		// Allows the end user to select the size of a formatted page from a select menu (sizes are 10, 25, 50 and 100)
					"bAutoWidth": 		false,		// Enable or disable automatic column width calculation
					
					"aoColumnDefs": [
						{ "bSortable":		false, 	"aTargets": [ -1 ] },	// Coluna de Actions não é ordenável
						{ "bSearchable":	false, 	"aTargets": [ -1 ] }	// Coluna de Actions não participa de buscas
					],
					
					"fnDrawCallback": function( oSettings ) {
						var table = oSettings.sInstance; // Nome do elemento dataTable - Ex. $('#dttable').dataTable( ... );
					
						/* Configura o estilo jQuery UI na tabela */
						$('#'+table).addClass('ui-widget ui-widget-content');
						$('#'+table+' thead tr').addClass('ui-widget-header');
					
						/* Take the brutal approach to cancelling text selection */
						$('.paginate_button').bind( 'mousedown',   function () { return false; } );
						$('.paginate_button').bind( 'selectstart', function () { return false; } );
						
						/* Ação para o botão de limpar filtros */
						$('.search-button').html("<a id='"+table+"-clear-filter' href='#' class='clear-filter-button ui-icon ui-icon-closethick'></a>");
						$('#'+table+'-clear-filter').click(function(){
							dtTable.fnFilter('');
							return false;
						});
						
						/* Animações para o botão de limpar filtros */
						$('.search-button .clear-filter-button').hover(
							function() { $(this).addClass('ui-state-hover');    }, 
							function() { $(this).removeClass('ui-state-hover'); }
						);
						
						/* Inclui imagem jQuery UI para os estados da ordenação */
						$('.sorting').each(function(){
							var content = $(this).html().replace(/<(?:.|\n)*?>/gm, '');
							$(this).html(content+'<span class="span-ordenation ui-icon ui-icon-carat-2-n-s">');
						});
						$('.sorting_asc').each(function(){
							var content = $(this).html().replace(/<(?:.|\n)*?>/gm, '');
							$(this).html(content+'<span class="span-ordenation ui-icon ui-icon-carat-1-n">');
						});
						$('.sorting_desc').each(function(){
							var content = $(this).html().replace(/<(?:.|\n)*?>/gm, '');
							$(this).html(content+'<span class="span-ordenation ui-icon ui-icon-carat-1-s">');
						});
					}
				} );
				
				/* Ações dos botões da tabela */
				$('button').button().click( function(){
					alert($(this).parent().parent().attr('id'));
				});
				
			} );
		</script>
	</head>
	<body>
		<h1>Jquery Data Table - Jquery UI Style</h1>

		<div id="tabela">
			<table id="dttable">
				<thead>
					<tr>
						<th>Id</th>
						<th>Browser</th>
						<th>Platform(s)</th>
						<th class="action_column">Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php
						for($i = 0; $i < 100; $i++){
							echo "
								<tr id='a".$i."'>
									<td>a".$i."</td>
									<td>Firefox 13</td>
									<td>Win 95+</td>
									<td class='action_column'>
										<button id='view'  ><span class='button-icon button-view'></span></button>
										<button id='edit'  ><span class='button-icon button-edit'></span></button>
										<button id='remove'><span class='button-icon button-remove'></span></button>
									</td>
								</tr>
							";
						}
						for($i = 0; $i < 10; $i++){
							echo "
								<tr id='b".$i."'>
									<td>b".$i."</td>
									<td>Internet Explorer 4.0</td>
									<td>Ubuntu baseado em debian</td>
									<td class='action_column'>
										<button id='view'  ><span class='button-icon button-view'></span></button>
										<button id='edit'  ><span class='button-icon button-edit'></span></button>
										<button id='remove'><span class='button-icon button-remove'></span></button>
									</td>
								</tr>
							";
						}
					?>
				</tbody>
			</table>
		</div>
	</body>
</html>