/**
 * Storms Framework (http://storms.com.br/)
 *
 * @author    Vinicius Garcia | vinicius.garcia@storms.com.br
 * @copyright (c) Copyright 2012-2014, Storms Websolutions
 * @license   GPLv2 - GNU General Public License v2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
 * @package   Storms
 * @version   2.0.0
 * 
 * Login.js
 * Script para modificar elementos na pagina de login
 */
jQuery(document).ready(function( $ ) {
	$('#wp-submit')
		// Remove as classes WP do botao
		.removeClass('button button-large button-primary')
		// Inclui as classes Bootstrap para o botao
		.addClass('btn btn-large btn-primary pull-right');

	// Modifica o texto de Voltar para Website
	$('#backtoblog a').html('<span class="fa fa-home"></span> Página principal');
	
	// Modifica o texto de Recuperar a Senha
	$('#nav a').html('<span class="fa fa-unlock"></span> ' + $('#nav a').html());
	
	// Set "Remember Me" To Checked
	$('#rememberme').prop('checked', true);
	
	// Change the default title separator from &rsaquo; (›) to |
	document.title = document.title.replace(/›/g, '|');
});