<?php
$host = "localhost";
$usuario = "root";
$password = "";
$banco = "banco-da-popy";

// Criei uma conexao
$conexao = new mysqli($host, $usuario, $password, $banco);

// Verifica se a conexão foi bem sucedida, caso nao for o banco será encerrado
if ($conexao->connect_error) {
  die("Connection failed: " . $conexao->connect_error);
}
$sql = "SELECT * FROM produto";
$resultado = $conexao->query($sql);

// Verifica se há resultados
if ($resultado->num_rows > 0) {

  // exibe  os dados na tela 
  while($row = $resultado->fetch_assoc()) 
  
    echo " - Nome: "       . $row["nome"] .
         " - Descrição: "  . $row["descricao"] .
         "<br>";
}
 else {
  echo "nenhum resultado";
}
// Fechamento da conexão 
$conexao->close();  