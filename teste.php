<html>
<head>
	<meta charset="UTF-8"/>
	<title>Document</title>
	<link rel="stylesheet" href=""/>
</head>
<body>
	<?php
		include 'conexao.php';
		include 'historia.php';

		$cx = new Conexao();
		$conecta = $cx->Conecta();

		$teste = new Historia();
		$teste->nome = 'Roberto';
		$teste->titulo = 'Lá vem eles de novo!';

		echo $teste->nome .' : '. $teste->titulo;

		
	?>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</body>
</html>