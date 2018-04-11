<?php
	class Conexao
	{
		private $usuario = 'root';
		private $senha = '';
		private $host = '127.0.0.1';
		private $banco = 'jubarte';

		public function Conecta()
		{
			$conecta = new PDO('mysql:host='.$this->host.';port=3306;dbname='.$this->banco.'', $this->usuario, $this->senha);
			$conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$conecta->exec('set names utf8');
			return $conecta;
		}
	}
?>