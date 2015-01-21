<script type='text/javascript'>
	//Verifica se um email é válido
	var verificarEmail = function(email){
		var filtro = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
		return ((email.length != 0) && (!filtro.test(email)))?false:true;
	}
	
	//Verifica se um telefone é válido
	function VerificarTelefone(telefone){
		var filtro = /\(\d{2}\)\ \d{4}\-\d{4}/
		return ((telefone.length != 0) && (!filtro.test(telefone)))?false:true;
	}
	
	//Verifica se uma data é válida
	function VerificarData(data){
		var filtro = /\d{2}\/\d{2}\/\d{4}/
		return ((data.length != 0) && (!filtro.test(data)))?false:true;                    
	}
</script>