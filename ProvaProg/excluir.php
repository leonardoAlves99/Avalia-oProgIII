<?php
require_once "banco.php";
$id = $_POST['id'];
try{
  $sql = "DELETE FROM pessoa WHERE id=:id";
  $stmt = getConnection()->prepare($sql);
  $stmt->bindParam(':id', $id);
if ($stmt->execute())
  include ("listar.php");
else
  echo "Falhou";
}catch(PDOException $e) {
echo 'Erro: ' . $e->getMessage();
}
?>
