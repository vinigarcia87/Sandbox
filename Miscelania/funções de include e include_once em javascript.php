<script type="text/javascript">
	function include(file_path){
		/* criando um elemento script: </script><script></script> */
		var j = document.createElement("script");
		/* informando o type como text/javacript: <script type="text/javascript"></script>*/
		j.type = "text/javascript";
		/* Inserindo um src com o valor do parâmetro file_path: <script type="javascript" src="+file_path+"></script>*/
		j.src = file_path;
		/* Inserindo o seu elemento(no caso o j) como filho(child) do  BODY: 
		 * <html><body><script type="javascript" src="+file_path+"></script></body></html>
		 */
		document.body.appendChild(j);
	}

	//incluindo um arquivo com a função include()
	include("arquivo.js");

	function include_once(file_path){
		var sc = document.getElementsByTagName("script");
		for (var x in sc){
			if (sc[x].src != null && sc[x].src.indexOf(file_path) != -1){ return; }
		}
		include(file_path);
	}

	//incluindo um arquivo com a função include_once()
	include_once("arquivo.js");
</script>