<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/estilo.css" />
    <title>Avaliação Programação III</title>
  </head>
  <body>
    <header><h1>Cadastre seu Contato</h1></header>


    <div class="cadastro">
      <form  method="POST" action="cadastro.php">

      <h1>Informe seus dados!</h1>

      <div>
        <input class="inp" type="text" name="nome" required="true" placeholder="Digite seu nome">
      </div>

      <div>
        <input class = "inp" type="text" name="apelido" required="true" placeholder="Digite seu apelido">
        </div>

        <div>
          <input class="inp" type="text" name="telefone" required="true" placeholder="Digite seu telefone">
          </div>

          <div>
            <input class="inp" type="email" name="email" required="true" placeholder="Digite seu email">
            </div>

            <div class = "botao">
              <input class = "botao" type="submit" value="Cadastrar">
            </div>
   </form>
       </div>

    </div>

  </body>
</html>
