<?php

	function imprimeMensagemStatusConexao($host, $statusConexao){
		if ($statusConexao == 1){
			echo "Sucesso! Uma conexão foi estabelecida com o banco <b>".$host."</b>.";	
		}
		else{
			echo "Não foi possível estabelecer uma conexão com o banco <b>".$host."</b></br> ";
		}	
	}