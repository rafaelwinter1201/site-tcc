<?php
  $servidor = "localhost";
  $usuario = "root";
  $senha = "";
  $dbname = "cadastrocasa";

//Criar a conexão 
  $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

  $consulta = "SELECT IDCasa, titulo, bairro, codcasa, nomedono, teldono, visibilidade FROM casas";

  $con = mysqli_query($conn, $consulta) or die ($mysqli->error);
    

?>
<!doctype html>
<html lang="pt-br">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/TCCnovo/administrador/CSS/login.css">

    <link rel="icon" type="imagem/png" href="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/TCCnovo/administrador/Imagens/icons8-home-64.png" />

    <title>Deletar/Editar Cadastro</title>
  </head>
  <body>
  <div style=" padding: 10%">
    <table class="table table-striped" style="background-color: white">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Titulo</th>
          <th scope="col">Bairro</th>
          <th scope="col">Codigo da casa</th>
          <th scope="col">Visibilidade</th>
          <th scope="col">Nome do Dono</th>
          <th scope="col">Telefone do Dono</th>
          <th scope="col">Ação</th>
          <th scope="col">Editar</th>
        </tr>
      </thead>
       <?php while ($dado = $con->fetch_array()){ ?>
      <tbody>
        <tr>
          <th scope="row"><?php echo $dado['IDCasa']?></th>
          <td><?php echo $dado['titulo']?></td>
          <td><?php echo $dado['bairro']?></td>
          <td><?php echo $dado['codcasa']?></td>
          <td>
            <?php if ($dado['visibilidade'] == "sim"){
              echo "<img src='"."http://".$_SERVER['HTTP_HOST']."/TCCnovo/administrador/imagens/icons8-selecionado-48' style='width: 18px'";
            }else {
              echo "<img src='"."http://".$_SERVER['HTTP_HOST']."/TCCnovo/administrador/imagens/X_Icon_clip_art_hight' style='width: 18px'";
            } ?>
          </td>
          <td><?php echo $dado['nomedono']?></td>
          <td><?php echo $dado['teldono']?></td>
          <form method="POST" action="apaga.php?id=<?php echo $dado['IDCasa']?>">
            <td><button type="input" class="btn btn-outline-danger"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/TCCnovo/administrador/imagens/lixo.png" style="width: 18px"></button></td>
          </form>
          <form method="POST" action="edita.php?id=<?php echo $dado['IDCasa']?>">
            <td><button type="input" class="btn btn-outline-warning"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/TCCnovo/administrador/imagens/icons8-editar-64.png" style="width: 18px"></button></td>
          </form>
        </tr>
      </tbody>
      <?php  }  ?>
    </table>
  </div>
  <div class="LOL">
    <a href="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/TCCnovo/administrador/menu.php" >Voltar<<<<<<</a>
  </div>



    

    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>