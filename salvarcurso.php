<?php
  //recebem os dados que estão chegando por POST
  $curso = $_POST['curso'];
  
  //fazendo conexão com o banco de dados
  include('banco.php');

  $curso_maiusculo = strtoupper($curso);
  
  //criar sql do insert
  $sql = "insert into tbcurso values (null,'$curso_maiusculo')";
		  
  
  //realizar o insert
  $consulta = $conexao->query($sql);
  
  //testar se insert deu certo
  if ($consulta == true){
	 header('Location: frmcadcurso.php?cad=ok');	 
  }else{
	 header('Location: frmcadcurso.php?cad=erro'); 	  
  }
?>




