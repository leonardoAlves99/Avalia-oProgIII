<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Listar Usuários</title>
  </head>
  <body>
    <header><h1>Usuários já Cadastrados</h1></header>

<table border="1">
  <tr>
    <td class="celula_fixa">
    </td>
  </tr>
  <thead>
    <th>Id</th> <th>Nome</th> <th>Apelido</th> <th>E-mail</th> <th>Telefone</th>
  </thead>
  <tbody>

    <?php
    require_once "banco.php";
    $sql = "select id,nome, email, apelido, telefone from pessoa";
    foreach (getConnection()->query($sql) as $row) {
      echo "<tr>";
      echo "<td>".$row['id']."</td>";
      echo "<td>".$row['nome']."</td>";
      echo "<td>".$row['apelido']."</td>";
      echo "<td>".$row['email']."</td>";
      echo "<td>".$row['telefone']."</td>";


      echo "</tr>";
    }
    ?>
  </body>
</table>
    <div class="excluir">
      <form method="POST" action="excluir.php">
        <input type = "text" name="id" placeholder="Informe o ID">
        <input type = "submit" value = "Remover">
      </form>
    </div>


  </body>
</html>
