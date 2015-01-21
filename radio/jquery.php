<html>
  <head>
    <script language="javascript" type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
  </head>
  <body onload="teste()">

  <!-------------------------------------------------------------------------
  1) Create some html content that can be accessed by jquery
  -------------------------------------------------------------------------->
  <h2> Client example </h2>
  <h3>Output: </h3>
  <div id="output">this element will be accessed by jquery and this text replaced</div>

  <script id="source" language="javascript" type="text/javascript">

  function teste() 
  {
    //-----------------------------------------------------------------------
    // 2) envia uma requisição http por AJAX http://api.jquery.com/jQuery.ajax/
    //-----------------------------------------------------------------------
    $.ajax({                                      
      url: 'xml.php',                  // o script que pega os dados         
      data: "",                        // caso se faça necessario passar dados para o script
      dataType: 'json',                // formato do retorno dos dados
      success: function(data)          // o que fazer em caso de sucesso
      {
        var nome = data["Nome"];               // pega o nome do artista - nome da musica
        var Dur = data["value"];               // pega a duração da musica
        var StartedTime = data["StartedTime"]; // pega a hora de inicio da música
        var Relogio = data["Relogio"];         // pega a hora do servidor
		
		var separaIniServ=StartedTime.split(" ");  // separa a hora da data
		var separaIni=separaIniServ[1].split(":"); // separa horas, minutos e segundos
		var separaDur=Dur.split(":");              // separa horas, minutos e segundos
		var separaServ=Relogio.split(":"); 		   //separa horas, minutos e segundos
		
		var AH = eval(separaServ[0]); // hora servidor
		var AM = eval(separaServ[1]); // minuto servidor
		var AS = eval(separaServ[2]); // segundo servidor
		//alert(AH+":"+AM+":"+AS);
		
		var BH = eval(separaIni[0]); // hora inicio da musica
		var BM = eval(separaIni[1]); // minuto inicio da musica
		var BS = eval(separaIni[2]); // segundo inicio da musica
		//alert(BH+":"+BM+":"+BS);

		var CH = eval(separaDur[0]); //  hora duração
		var CM = eval(separaDur[1]); //  minuto duração
		var CS = eval(separaDur[2]); //  segundo duração
		//alert(CH+":"+CM+":"+CS);
		
		var CalculoA = (AH * 3600) + (AM * 60) + AS; // transformando Hora e Minuto em Segundos
		var CalculoB = (BH * 3600) + (BM * 60) + BS; // transformando Hora e Minuto em Segundos
		var CalculoC = (CH * 3600) + (CM * 60) + CS; // transformando Hora e Minuto em Segundos

		var CalculoTotal = CalculoC - (CalculoA - CalculoB); // calculando o tempo restante de música
		
		var Intervalo = CalculoTotal*1000;  // transforma segundos em milesimos
		
        $('#output').html("<b>Nome do Artista e Música: </b>"+nome+"<b> -- "+Intervalo); //ta printando o nome da musica e o Intervalo para teste
		
		if(Intervalo <= 0){   // caso o Intervalo seja zero ou negativo, por causa das vinhetas de curta duração.
			Intervalo = 3000; // seta o intervalo em 3 min.
		}
		tempo = parseInt(Intervalo); // converte pra Integer (coloquei só por garantia)
		setInterval(teste(), tempo); // aqui deveria esperar o tempo do intervalo antes de a função recomeçar, mas ta atualizando de segundo em segundo e em momentos aleatórios trava
      } 
    });
  }; 
  </script>
  </body>
</html>