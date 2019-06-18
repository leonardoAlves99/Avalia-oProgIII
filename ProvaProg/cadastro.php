<?php
require_once "banco.php";

$nome = $_POST['nome'];
$apelido = $_POST['apelido'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];

if(empty($nome)){
  echo "Erro";
  die;
}

if(empty($telefone)){
  echo "Erro";
  die;

}
if(empty($email)){
  echo "Erro";
  die;
}

try{
  $sql = "INSERT INTO pessoa(nome, apelido, telefone, email) VALUES (:nome, :apelido, :telefone, :email)";
  $stmt = getConnection()->prepare($sql);
  $stmt->bindParam(':nome', $nome);
  $stmt->bindParam(':apelido', $apelido);
  $stmt->bindParam(':telefone', $telefone);
  $stmt->bindParam(':email', $email);
  if ($stmt->execute())
    include ("listar.php");
  else
    echo "Falhou";
}catch(PDOException $e) {
  echo 'Erro: ' . $e->getMessage();
}
?>
