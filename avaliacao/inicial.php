<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/aval.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>

<script type="text/javascript">
	/**
	 * Lógica para seleção de imagens para exibição
	 * de acordo com as opções do menu de topo
	 * @require: jquery 1.7.1 or higher
	 * 
	 * @author: Vinicius Oliveira Garcia
	 * @date: 06/03/2012
	 */
	$(function(){

		$("#opt_escola").change(function () {
			$("#opt_curso").html("");
			$("<option value='0' selected>Todos</option>").appendTo("#opt_curso");
			if ($(this).val() == 0) { //Todas
				$("<option value='1'>Engenharia de Software</option>").appendTo("#opt_curso");
				$("<option value='2'>Gestão de Projetos</option>").appendTo("#opt_curso");
				$("<option value='3'>Odontologia</option>").appendTo("#opt_curso");
				$("<option value='4'>Psicologia</option>").appendTo("#opt_curso");
			} else if ($(this).val() == 1) { //Escola de Saúde e Biociências
				$("<option value='1'>Engenharia de Software</option>").appendTo("#opt_curso");
				$("<option value='2'>Gestão de Projetos</option>").appendTo("#opt_curso");
			} else if ($(this).val() == 2) { //Escola Politécnica
				$("<option value='3'>Odontologia</option>").appendTo("#opt_curso");
				$("<option value='4'>Psicologia</option>").appendTo("#opt_curso");
			}
			$("#opt_curso option[value=0]").attr("selected", true);
			$("#totalImagens").html("<img src='./imagens/0+0.jpg' />");
		})
		.trigger('change');

		$("#opt_curso").change(function () {
			var opcEscola = $("#opt_escola").val();
			if ($(this).val() == 0) { //Todas
				$("#totalImagens").html("<img src='./imagens/"+opcEscola+"+0.jpg' />");
			} else if ($(this).val() == 1) { //Engenharia de Software
				$("#totalImagens").html("<img src='./imagens/"+opcEscola+"+1.jpg' />");
			} else if ($(this).val() == 2) { //Gestão de Projetos
				$("#totalImagens").html("<img src='./imagens/"+opcEscola+"+2.jpg' />");
			} else if ($(this).val() == 3) { //Odontologia
				$("#totalImagens").html("<img src='./imagens/"+opcEscola+"+3.jpg' />");
			} else if ($(this).val() == 4) { //Psicologia
				$("#totalImagens").html("<img src='./imagens/"+opcEscola+"+4.jpg' />");
			}
		})
		.trigger('change');
	});
</script>

</head>

<body>
	<div id="totalTopo">
    
    	<div class="labelAno">
        	Ano
        </div>
        <div class="labelSemestre">
        	Semestre
        </div>
        <div class="labelEscola">
        	Escola
        </div>
        <div class="labelCurso">
        	Curso
        </div>
        
        <div class="labelAno">
			<select>
	            <option selected>Todos</option>
            	<option>2009</option>
                <option>2010</option>
                <option>2011</option>
            </select>        	
        </div>
        <div class="labelSemestre">
        	<select>
	            <option selected>Todos</option>
            	<option>1º</option>
                <option>2º</option>
            </select>
        </div>
        <div class="labelEscola">
        	<select id="opt_escola">
	            <option value="0" selected>Todas</option>
                <option value="1">Escola de Saúde e Biociências</option>
                <option value="2">Escola Politécnica</option>
            </select>
        </div>
        <div class="labelCurso">
        	<select id="opt_curso">

            </select>
        </div>
    </div>
    
    <div id="bread"><a href="#">Todos</a> >
    </div>

	<div id="totalImagens"></div>
    
</body>
</html>