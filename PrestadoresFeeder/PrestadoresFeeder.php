<?php
/**
 * Alimentador de Prestadores para o Sistema PSI
 * @author : Vinicius Oliveira Garcia
 * @create : 08/10/2012
 */ 
set_time_limit(90);

class PrestadoresFeeder
{
    private $xml;
	private $conn;
	private $progressbar;
	
	public function setProgressbar(ProgressBar $p)
	{
		$this->progressbar = $p;
	}
	
    public function __construct($xml_file,$conn)
    {
        if(!is_string($xml_file) ||
                !file_exists($xml_file))
        {
            throw new Exception('PrestadoresFeeder : Ocorreu um erro com o arquivo de Prestadores;');
        }

        if (!$conn)
        {
        	throw new Exception('PrestadoresFeeder : Ocorreu um erro com a conexão com o Banco de Dados;');
        }
        
        $this->xml = simplexml_load_file($xml_file);
        $this->conn = $conn;
    }

    /**
     * Salva os dados de execucao do script na tabela de historico
     */
    public function salvarHistorico($tempoExecucao)
    {
		$xml = $this->xml;
		$numEntradas  = '';
		$numEntradas .= count($xml->cadastroPlanos->plano).' planos; ';
		$numEntradas .= count($xml->cadastroEspecialidades->especialidade).' especialidades; ';
		$numEntradas .= count($xml->cadastroServicoContratado->servico).' serviços; ';
		$numEntradas .= count($xml->prestadores->prestador).' prestadores; ';
		
		$tempoExecucao = number_format($tempoExecucao, 2).'s';
				
		$insert_stmt = "insert into psi_historico(dataAtualizacao,tempoScript,numEntradas)values(now(),'".$tempoExecucao."','".$numEntradas."')";
		$this->executarSql($insert_stmt);
    }
	
    /**
     * Executa um comando sql na base de dados
     */
    private function executarSql($sql = '')
    {
    	$r = mysql_query($sql, $this->conn);
		
		if(!$r)
		{
			throw new Exception('PrestadoresFeeder : Ocorreu um erro na execução de um comando - '.mysql_error($this->conn).';');
		}
    }
    
    /**
     * Cadastro de Planos
     */
    private function cadastrarPlanos()
    {
        $xml = $this->xml;
        foreach($xml->cadastroPlanos->plano as $plano)
        {
            $values = array(
                'codigoPlano'       => $plano->codigoPlano,
                'situacaoPlanoANS'  => $plano->situacaoPlanoANS,
                'classificacoPlano' => $plano->classificacoPlano,
                'nomeComercial'     => $plano->nomeComercial,
                'registroANS'       => $plano->registroANS,
                'tipoRede'          => $plano->tipoRede,
            );
            $values_stmt[] = "('".implode("','",$values)."')";
        }
        $insert_stmt = "insert into psi_planos(".implode(",",array_keys($values)).")values".implode(",",$values_stmt);
        $this->executarSql($insert_stmt);
        
        return $this;
    }

    /**
     * Cadastro de Especialidades
     */
    private function cadastrarEspecialidades()
    {
        $xml = $this->xml;
        foreach($xml->cadastroEspecialidades->especialidade as $especialidade)
        {
            $values = array(
                'codigoEspecialidade' => $especialidade->codigoEspecialidade,
                'descricao'           => $especialidade->descricao,
            );
            $values_stmt[] = "('".implode("','",$values)."')";
        }
        $insert_stmt = "insert into psi_especialidades(".implode(",",array_keys($values)).")values".implode(",",$values_stmt);
        $this->executarSql($insert_stmt);
        
        return $this;
    }

    /**
     * Cadastro de Sevicos
     */
    private function cadastrarSevicos()
    {
        $xml = $this->xml;
        foreach($xml->cadastroServicoContratado->servico as $servico)
        {
            $values = array(
                'codigoServico' => $servico->codigoServico,
                'descricao' 	=> $servico->descricao,
            );
            $values_stmt[] = "('".implode("','",$values)."')";
        }
        $insert_stmt = "insert into psi_servicos(".implode(",",array_keys($values)).")values".implode(",",$values_stmt);
        $this->executarSql($insert_stmt);
        
        return $this;
    }

    /**
     * Cadastro de Enderecos de Atendimento do Prestador 
     */
    private function cadastrarPrestadoresEnderecos($codPrestador, $prestadorEnderecos)
    {
    	if(!empty($prestadorEnderecos))
    	{
    		$enderecosAtendimento = $prestadorEnderecos;
    		foreach($enderecosAtendimento->enderecoAtendimento as $enderecoAtendimento)
    		{
    			$endereco = $enderecoAtendimento->tipoLogradouro.' '.
    					$enderecoAtendimento->logradouro.', '.
    					$enderecoAtendimento->numero;
    			$endereco .= ($enderecoAtendimento->complemento != '')? ' - '.$enderecoAtendimento->complemento : '';
    	
    			$values = array(
					'endereco' => $endereco,
					'bairro'   => $enderecoAtendimento->bairro,
					'cidade'   => $enderecoAtendimento->cidade,
					'uf' 	   => $enderecoAtendimento->uf,
					'cep' 	   => $enderecoAtendimento->cep,
					'telefone' => $enderecoAtendimento->telefone,
					'site' 	   => $enderecoAtendimento->site,
    			);
    			$values_stmt[] = "(".$codPrestador.",'".implode("','",$values)."')";
    		}
    		$insert_stmt = "insert into psi_prestador_enderecos(codPrestador,".implode(",",array_keys($values)).")values".implode(",",$values_stmt);
    		$this->executarSql($insert_stmt);
    	}
    	
    	return $this;
    }
    
    /**
     * Cadastro de Planos do Prestador
     */
    private function cadastrarPrestadoresPlanos($codPrestador, $prestadorPlanos)
    {
        if(!empty($prestadorPlanos))
        {
            $planos = explode(';',$prestadorPlanos->plano);
            foreach($planos as $plano)
            {
            	$values_stmt[] = "(".$codPrestador.",'".$plano."')";
            }
            $insert_stmt = "insert into psi_prestador_planos(codPrestador,codigoPlano)values".implode(",",$values_stmt);
			$this->executarSql($insert_stmt);
        }
        
        return $this;
    }
    
    /**
     * Cadastro de Especialidades do Prestador
     */
    private function cadastrarPrestadoresEspecialidades($codPrestador, $prestadorEspecialidades)
    {
    	if(!empty($prestadorEspecialidades))
    	{
    		$especialidades = explode(';',$prestadorEspecialidades->especialidade);
    		foreach($especialidades as $especialidade)
    		{
    			$values_stmt[] = "(".$codPrestador.",'".$especialidade."')";
    		}
    		$insert_stmt = "insert into psi_prestador_especialidades(codPrestador,codigoEspecialidade)values".implode(",",$values_stmt);
    		$this->executarSql($insert_stmt);
    	}
    	
    	return $this;
    }
    
    /**
     * Cadastro de Servicos Contratados pelo Prestador
     */
    private function cadastrarPrestadoresServicos($codPrestador, $prestadorServicos)
    {
    	if(!empty($prestadorServicos))
    	{
    		$servicosContratatos = explode(';',$prestadorServicos->servicoContratado);
    		foreach($servicosContratatos as $servicoContratado)
    		{
    			$values_stmt[] = "(".$codPrestador.",'".$servicoContratado."')";
    		}
    		$insert_stmt = "insert into psi_prestador_servicos(codPrestador,codigoServico)values".implode(",",$values_stmt);
    		$this->executarSql($insert_stmt);
    	}
    	
    	return $this;
    }
    
    /**
     * Cadastro de Prestadores
     */
    private function cadastrarPrestadores()
    {
		$i = 0;
        $xml = $this->xml;
        foreach($xml->prestadores->prestador as $prestador)
        {
            $dadosCadastrais = $prestador->dadosCadastrais;
            $values = array(
                'tipoEstabelecimento' => $dadosCadastrais->tipoEstabelecimento,
                'nomeCompleto'        => $dadosCadastrais->nomeCompleto,
                'nomeReduzido'        => $dadosCadastrais->nomeReduzido,
            );
            if(isset($dadosCadastrais->cnpj))
            {
                $values['cnpj'] = $dadosCadastrais->cnpj;
            }
            elseif(isset($dadosCadastrais->conselhoProfissional))
            {
                $conselhoProfissional = $dadosCadastrais->conselhoProfissional;
                $values['conselhoProfissional'] = $conselhoProfissional->siglaConselho.' '.
                                                  $conselhoProfissional->codigoConselho.' '.
                                                  $conselhoProfissional->ufConselho;
            }

            $insert_stmt = "insert into psi_prestadores(".implode(",",array_keys($values)).")values('".implode("','",$values)."')";
            $this->executarSql($insert_stmt);
            $codPrestador = mysql_insert_id(); 
            
            //Cadastro de Enderecos de Atendimento do Prestador
			$this->cadastrarPrestadoresEnderecos($codPrestador, $prestador->enderecosAtendimento);

            //Cadastro de Planos do Prestador
            $this->cadastrarPrestadoresPlanos($codPrestador, $prestador->planos);

            //Cadastro de Especialidades do Prestador
            $this->cadastrarPrestadoresEspecialidades($codPrestador, $prestador->especialidades);
            
            //Cadastro de Servicos Contratados pelo Prestador
            $this->cadastrarPrestadoresServicos($codPrestador, $prestador->servicosContratatos);
			
			$this->progressbar->setProgressBarProgress(++$i*100/count($xml->prestadores->prestador));
        }
        
        return count($xml->prestadores->prestador);
    }

    /**
     * Limpa a base de dados para atualizar os dados
     */
    private function limparBasePsi()
    {
    	$delete_stmts[] = "delete from psi_prestador_enderecos";
    	$delete_stmts[] = "delete from psi_prestador_planos";
    	$delete_stmts[] = "delete from psi_prestador_especialidades";
    	$delete_stmts[] = "delete from psi_prestador_servicos";
    	
    	$delete_stmts[] = "delete from psi_planos";
    	$delete_stmts[] = "delete from psi_especialidades";
    	$delete_stmts[] = "delete from psi_servicos";
    	$delete_stmts[] = "delete from psi_prestadores";

    	foreach($delete_stmts as $delete_stmt)
    	{
    		$this->executarSql($delete_stmt);
    	}
    	
    	return $this;
    }
    
    /**
     * Executa a atualizacao da base do PSI
     */
	public function feed()
	{
		return $this->limparBasePsi()
			->cadastrarPlanos()
			->cadastrarEspecialidades()
			->cadastrarSevicos()
			->cadastrarPrestadores();
	}
}
