<!DOCTYPE html>
<html>
<head>
	<title>cadastro</title>
	<meta charset="utf-8"/>
	<style type="text/css">
		#divCenter{
			 	position: relative;
			 	top: 300px;
			 	margin: 0 auto;
                width: 200px;
                height: 300px;
                background: white;
                background-color: rgba(0,0,0,0.6);
                border-radius: 10px;
                border: 3px green solid;
		}
		.formulario{
			position: absolute;
			left: 30px;
		}
	</style>
</head>
<body>
	<div id="divCenter">
	<h1 align="center">cadastro</h1>

	<form method="POST" action="inserir.php" class="formulario">
    Numero: <input type="text" name="numero" id="numero" size="15" /><br><br>	
    Nome: <input type="text" name="nome" id="nome" size="15"/><br><br>
    Sexo M ou F: <input type="text" name="sexo" id="sexo" size="15"/><br><br>
     
 
    <p><input type="submit" name="cadastrar-se" value="cadastrar-se"/>
	<button><a href="index.php">Voltar</a></button></p>

<?php
          include_once "conexao.php";
          if(isset($_POST['cadastrar-se'])){
              $numero = $_POST['numero'];
              $nome = $_POST['nome'];
              $sexo = $_POST['sexo'];
              mysqli_query($con,"INSERT INTO alunos (numero, nome, sexo)VALUES('$numero', '$nome', '$sexo')");
              mysqli_close($con);
          }
        ?>

</form>
</div>
</body>
</html>
