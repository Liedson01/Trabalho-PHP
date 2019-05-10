<?php  

include_once'conexao.php';
$num = $_POST['numero'];
$name= $_POST['nome'];
@$sex = $_POST['sexo'];

$sql = "INSERT INTO alunos (numero,nome,sexo) VALUES ('$num','$name', '$sex')";
$r = mysqli_query($con,$sql);

if($r){
	echo "cadastrado com sucesso";
}else{
	echo "errro ao cadastrar";
}

?>