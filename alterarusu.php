<?php
  //recebem os dados que estão chegando por POST
  $codusu = $_POST['codusu'];
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  
  //fazendo conexão com o banco de dados
  include('banco.php');
  
  //criar sql do update
  $sql = "update tbusuario set nome='$nome', email='$email', senha='$senha'
          where codusu='$codusu'";

  echo $sql;
		  
  
  //realizar o update
  $consulta = $conexao->query($sql);
  
  //testar se update deu certo
  if ($consulta == true){
	 header('Location: buscausu.php?alter=ok');	 
  }else{
	 header('Location: buscausu.php?alter=erro'); 	  
  }
?>




