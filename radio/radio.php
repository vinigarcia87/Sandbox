<!DOCTYPE html>
<HTML>
<head>
	<title>Vagalume API Example</title>
	<link type="text/css" href="skin/jplayer.blue.monday.css" rel="stylesheet" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.jplayer.min.js"></script>
	<script type="text/javascript" src="js/jquery.jplayer.inspector.js"></script>

	<script id="source" language="javascript" type="text/javascript">
  /* EXAMPLE CODE USING VAGALUME API (Lyrics)

		You can make any modifications to this code.
		Please read API Terms at www.vagalume.com.br/api/terms/

		IMPORTANT: VAGALUME LOGO AND LINK MUST BE PRESENT ON THE PAGE

		Copyright Vagalume Midia Ltda. All rights reserved.

		Permission is hereby granted, free of charge, to any person obtaining a copy
		of this software and associated documentation files (the "Software"), to
		deal in the Software without restriction, including without limitation the
		rights to use, copy, modify, merge, publish, distribute, sublicense, and/or
		sell copies of the Software, and to permit persons to whom the Software is
		furnished to do so, subject to the following conditions:

		The above copyright notice and this permission notice shall be included in
		all copies or substantial portions of the Software.

		THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
		IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
		FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
		AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
		LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
		FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS
		IN THE SOFTWARE.
		*/

		function showLetra (data,art,mus,arrayid) {
			if (! arrayid) arrayid = 0;

			if (data.type == 'exact' || data.type == 'aprox') {
				// Print lyrics text
				$('#letra .text').text(data.mus[arrayid].text);

				// Show buttons to open original and portuguese translation
				if (data.mus[arrayid].translate) {
					$('#letra .text').prepend('<input type=button value="Portuguese &raquo;" onClick="$(document).trigger(\'translate\')"><br/>');
					$(document).one('translate',function() {
						$('#letra .text').text(data.mus[arrayid].translate[0].text);
						$('#letra .text').prepend('<input type=button value="&laquo; Original" onClick="$(document).trigger(\'original\')"><br/>');
						$(document).one('original',function() {
							showLetra(data,art,mus,arrayid);
						});
					});
				}

				// If not exact match (ex: U2 / Beautiful)
				if (data.type == 'aprox' && !$('#aprox').is('div')) {
					$('#letra').prepend('<div id=aprox>We found something similar<br/><span class=songname>"' + data.mus[arrayid].name + '"</span></div>');

					// If Vagalume found more than one possible matches
					if (data.mus.length > 0) {
						var html = '<select class=songselect>';
						for (var i = 0; i < data.mus.length; i++) {
							html += '<option value="'+i+'"'+(i==arrayid?' selected':'')+'>'+data.mus[i].name+'</option>';
						}
						html += '</select>';
						$('#aprox span.songname').html(html);
						$('#aprox select.songselect').change(function() {
							var aID = $('option:selected',this).val();
							showLetra (data,art,mus,aID);
						});
					}
				}
			} else if (data.type == 'song_notfound') {
				// Song not found, but artist was found
				// You can list all songs from Vagalume here
				$('#letra .text').html(
					'Song "'+mus+'" from "'+art+'" was not found.<br/>'
					+'<a target=_blank href="http://www.vagalume.com.br/addmusic.php">'
					+'Add this song to Vagalume &raquo;</a>'
				);
			} else {
				// Artist not found
				$('#letra .text').html(
					'Song "'+mus+'" from "'+art+'" was not found<br/>'
					+'(artist not found)<br/>'
					+'<a target=_blank href="http://www.vagalume.com.br/addmusic.php">'
					+'Add this song to Vagalume &raquo;</a>'
				);
			}
		};
		function fetchLetra (art,mus,serial,udig) {
			var data = jQuery.data(document,art + mus); // cache read
			if (data && !data.captcha) {
				showLetra(data, art, mus);
				return true;
			}

			var url = "http://www.vagalume.com.br/api/search.php"
				+"?art="+encodeURIComponent(art)
				+"&mus="+encodeURIComponent(mus);

			// Check if browser supports CORS - http://www.w3.org/TR/cors/
			// If it does, it's better for caching and avoids captcha.
			if (!jQuery.support.cors) {
				url += "&callback=?";
			}

			if (serial && udig) url += "&serial="+encodeURIComponent(serial)+"&udig="+encodeURIComponent(udig);

			jQuery.getJSON(url,function(data) {
				// In case we reach the rate limit, we must ask user to type the captcha
				if (data.captcha) {
					var html = '<div id=captcha>Type the 4 numbers bellow<br/>to load this lyrics:<br/>';
					    html +='<img src="'+data.captcha_img+'"><br/>';
					    html +='<input type=text id=udig size=4 maxlength=4>';
					    html +='<input type=button onClick="$(document).trigger(\'refetch\')" value="Continue &raquo;"></div>';
					$(document).one("refetch",function() { fetchLetra(art,mus,data.serial,document.getElementById("udig").value); });
					$('#letra .text').html(html);
				} else {
					// What we do with the data
					jQuery.data(document,art + mus,data); // cache write
					showLetra(data, art, mus);
				}
			});
		};
		 function teste() 
	  {
		//-----------------------------------------------------------------------
		// 1) declaração das variaveis utilizadas
		//-----------------------------------------------------------------------
		//var processo											// armazena a requisição ajax
		var nome, Dur, StartedTime, Relogio;					// contem os dados das músicas
		var separaIniServ, separaIni, separaDur, separaServ;	// manipulam e contem os horários das  músicas
		var AH, AM, AS, BH, BM, BS, CH, CM, CS					// contem horas, minutos e segundos dos horarios da musica
		var CalculoA, CalculoB, CalculoC;						// contem a conversao de horas e minutos em segundo
		var CalculoTotal;										// contem o intervalo ate a proxima musica em segundos
		var Intervalo, tempo;									// contem o intervalo ate a proxima musica em milésimos
		
	  
		//-----------------------------------------------------------------------
		// 2) envia uma requisição http por AJAX http://api.jquery.com/jQuery.ajax/
		//-----------------------------------------------------------------------
	   var processo = $.ajax({                                      
		  url: 'xml.php',                  // o script que pega os dados         
		  data: "",                        // caso se faça necessario passar dados para o script
		  dataType: 'json',                // formato do retorno dos dados
		  success: function(data)          // o que fazer em caso de sucesso
		  {
			nome = data["Nome"];               // pega o nome do artista - nome da musica
			Dur = data["value"];               // pega a duração da musica
			StartedTime = data["StartedTime"]; // pega a hora de inicio da música
			Relogio = data["Relogio"];         // pega a hora do servidor
			
			separaIniServ=StartedTime.split(" ");  // separa a hora da data
			separaIni=separaIniServ[1].split(":"); // separa horas, minutos e segundos
			separaDur=Dur.split(":");              // separa horas, minutos e segundos
			separaServ=Relogio.split(":"); 		   //separa horas, minutos e segundos
			
			AH = eval(separaServ[0]); // hora servidor
			AM = eval(separaServ[1]); // minuto servidor
			AS = eval(separaServ[2]); // segundo servidor
			//alert(AH+":"+AM+":"+AS);
			
			BH = eval(separaIni[0]); // hora inicio da musica
			BM = eval(separaIni[1]); // minuto inicio da musica
			BS = eval(separaIni[2]); // segundo inicio da musica
			//alert(BH+":"+BM+":"+BS);
			
			CM = eval(separaDur[0]); //  minuto duração
			CS = eval(parseInt(separaDur[1])); //  segundo duração
			//alert(CM +"----"+ CS);
			//alert(CH+":"+CM+":"+CS);
			
			CalculoA = (AH * 3600) + (AM * 60) + AS; // transformando Hora e Minuto em Segundos
			CalculoB = (BH * 3600) + (BM * 60) + BS; // transformando Hora e Minuto em Segundos
			CalculoC = (CM * 60) + CS; // transformando Hora e Minuto em Segundos

			CalculoTotal = CalculoC - (CalculoA - CalculoB); // calculando o tempo restante de música
			
			Intervalo = CalculoTotal*1000;  // transforma segundos em milesimos
			if(Intervalo <= 0){   // caso o Intervalo seja zero ou negativo, por causa das vinhetas de curta duração.
				Intervalo = 3000; // seta o intervalo em 3 min.
			}
			var nomeArray = nome.split(" - ");
			var nomeArtista = nomeArray[0];
			var nomeMusica = nomeArray[1];
			
			$('#artista').html(nomeArtista); //ta printando o nome da musica e o Intervalo para teste
			$('#music').html(nomeMusica); //ta printando o nome da musica e o Intervalo para teste
			fetchLetra(nomeArtista,nomeMusica);
			tempo = parseInt(5000); // converte pra Integer (coloquei só por garantia)
			setTimeout(teste, Intervalo);
		  } 
		});
	  };
		/*mp3: ""*/

		//<![CDATA[
		$(document).ready(function(){
		$("#jquery_jplayer_1").jPlayer({
			ready: function () {
				$(this).jPlayer("setMedia", {
					mp3:"http://200.192.112.45:8000/clubefm.mp3"
				});
			},
			swfPath: "/radio/js",
			supplied: "mp3",
			wmode: "window"
		});

		$("#jplayer_inspector").jPlayerInspector({jPlayer:$("#jquery_jplayer_1")});
});
//]]>
	
  </script>
</head>
<style>
	#aprox {color:black;font-weight:bold;padding:10px 0}
	#captcha{padding:10px}
</style>
<body>
	<div style='width:500px'>

		<!--- Here you can specify the artist and music to fetch -->
		<span style='color:green'>
			<b>Artist:</b> <i id='artista'></i> /
			<b>Song:</b> <i id='music'></i>
		</span>

		<!--- Where lyrics should be placed. Don't remove Vagalume logo and link. -->
		<a target=_blank style='float:right;font-size:10px;color:#000;text-decoration:none;font-weight:bold' href="http://www.vagalume.com.br/"><img border=0 src="http://www.vagalume.com.br/images/logo_small2.jpg" alt="Vagalume"><br/>Letras de Músicas</a>
		<div id='letra' style='width:400px;text-align:left'>
			<pre class=text>buscando letra... <img src="http://www.vagalume.com.br/images/processing.gif"></pre>
		</div>
	</div>
	<div id="jquery_jplayer_1"></div>
	<div id="jp_container_1" class="jp-audio">
    <div class="jp-type-single">
      <div class="jp-gui jp-interface">
        <ul class="jp-controls">
          <li><a href="javascript:;" class="jp-play" tabindex="1">play</a></li>
          <li><a href="javascript:;" class="jp-pause" tabindex="1">pause</a></li>
          <li><a href="javascript:;" class="jp-stop" tabindex="1">stop</a></li>
          <li><a href="javascript:;" class="jp-mute" tabindex="1" title="mute">mute</a></li>
          <li><a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute">unmute</a></li>
          <li><a href="javascript:;" class="jp-volume-max" tabindex="1" title="max volume">max volume</a></li>
        </ul>
        <!--iv class="jp-progress">
          <div class="jp-seek-bar">
            <div class="jp-play-bar"></div>
          </div>
        </div-->
        <div class="jp-volume-bar">
          <div class="jp-volume-bar-value"></div>
        </div>
        <!-- div class="jp-time-holder">
          <div class="jp-current-time"></div>
          <div class="jp-duration"></div>
          <ul class="jp-toggles">
            <li><a href="javascript:;" class="jp-repeat" tabindex="1" title="repeat">repeat</a></li>
            <li><a href="javascript:;" class="jp-repeat-off" tabindex="1" title="repeat off">repeat off</a></li>
          </ul>
        </div-->
      </div>
      <div class="jp-title">
        <ul>
          <li>Bubble</li>
        </ul>
      </div>
      <div class="jp-no-solution">
        <span>Update Required</span>
        To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
      </div>
    </div>
  </div>
  <div id="jplayer_inspector"></div>
	<script>
		teste();
		// Just an example of how you can call this using elements on the page
	</script>
</BODY>
</HTML>
