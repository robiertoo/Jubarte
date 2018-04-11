<?php 
	class Historia
	{

		private $props = [];
		// nome aqui significa o nome que está na propriedade!
		public function __get($nome)
		{
			if(isset($this->props[strtolower($nome)]))
			{
				return $this->props[strtolower($nome)];
			}
			else
			{
				return false;
			}
		}

		public function __set($nome, $valor)
		{
			$this->props[strtolower($nome)] = $valor;
		}		
	}
?>