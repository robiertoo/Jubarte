<?php 
require '../JubController/conexao.php';

$cx = new Conexao();

$conecta = $cx->Conecta();

$dados = $conecta->query('SELECT * FROM historia');
foreach($dados as $linhas)
{
	echo $linhas['titulo'] .'<br>'.
	$linhas['texto'] .'<br>'.
	$linhas['audio'] .'<br>'.
	$linhas['imagem'] .'<br>'.
	$linhas['criado'];
}

echo '<br><br><a href="../JubView/cadastrar-historia.html">Cadastrar</a>'

?>