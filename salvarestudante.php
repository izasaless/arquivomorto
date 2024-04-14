<?php
  //recebem os dados que estão chegando por POST
  $nome = $_POST['nome'];
  $responsavel = $_POST['responsavel'];
  $ano = $_POST['ano'];
  $curso = $_POST['curso'];
  $estante = $_POST['estante'];
  
  //fazendo conexão com o banco de dados
  include('banco.php');

  $nome_M = strtoupper($nome);
  $responsavel_M = strtoupper($responsavel);
  $curso_M = strtoupper($curso);
  $estante_M = strtoupper($estante);
  
  //criar sql do insert
  $sql = "INSERT INTO tbestudante VALUES (null,'$nome','$responsavel','$curso','$ano','$estante')";
		  
  
  //realizar o insert
  $consulta = $conexao->query($sql);

  if ($consulta == true) {
    header('Location: frmcadestudante.php?cad=ok');
    exit(); // Importante para evitar que o script continue a ser executado após o redirecionamento
} else {
    echo "Erro ao executar a consulta: " . $conexao->error; // Exibe mensagem de erro SQL
    // Ou redirecione para uma página de erro
    header('Location: frmcadestudante.php?cad=erro');
    exit(); // Importante para evitar que o script continue a ser executado após o redirecionamento
}
?>




