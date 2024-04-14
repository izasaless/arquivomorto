<?php
  //recebem os dados que estão chegando por POST
  $codcurso = $_POST['codcurso'];
  $curso = $_POST['curso'];
  
  //fazendo conexão com o banco de dados
  include('banco.php');
  
  //criar sql do update
  $sql = "update tbcurso set curso='$curso' where codcurso='$codcurso'";

  echo $sql;
		  
  
  //realizar o update
  $consulta = $conexao->query($sql);
  
  //testar se update deu certo
  if ($consulta == true){
	 header('Location: buscacurso.php?alter=ok');	 
  }else{
	 header('Location: buscacurso.php?alter=erro'); 	  
  }
?>




