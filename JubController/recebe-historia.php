<?php 
require '../JubModel/historia.php';
require 'conexao.php';

$cx = new Conexao();

$historia = new Historia();
$historia->titulo = $_POST['titulo'];
$historia->texto = $_POST['texto'];
 $historia->audio = 'kk/'.$_POST['audio'];
 $historia->imagem = 'kk/'.$_POST['imagem'];
$historia->video = $_POST['video'];
$historia->criado = date('Y-m-d H:i:s');

// $nome_temporario=$_FILES["audio"]["tmp_name"];
// $nome_real=$_FILES["audio"]["name"];
// copy($nome_temporario,"ups/kk/$nome_real");

// $historia->audio = 'ups/kk/'.$nome_real.'';


try
{
	$conecta = $cx->Conecta();
	$conecta->exec('SET NAMES UTF8');
	$conecta->exec('INSERT INTO historia(titulo, texto, audio, imagem, video, criado) VALUES 
	("'.$historia->titulo.'", "'.$historia->texto.'", "'.$historia->audio.'", "'.$historia->imagem.'", "'.$historia->video.'", "'.$historia->criado.'")');
	echo 'historia cadastrada com sucesso!<br>
	<a href="../JubView/exibe-historias.php">Ver historias</a>';
}
catch(PDOException $e)
{
	echo 'Deu Erro: '.$e->getMessage();
}
?>