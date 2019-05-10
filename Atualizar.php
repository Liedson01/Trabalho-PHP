<?php
include_once 'conexao.php';
$num = $_POST['numero'];
$name= $_POST['nome'];
$sex = $_POST['sexo'];
$sql "UPDATE * FROM alunos SET nome = '$aluno' sexo = '$sex' WHERE '$numero' = numero";
$r = mysqli_query($con, $sql);
if($r){
	echo "Atualizado com Sucesso!";
}else{
	echo "Ops ocorreu um erro!";
}?>