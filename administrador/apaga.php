<?php
  $servidor = "localhost";
  $usuario = "root";
  $senha = "";
  $dbname = "cadastrocasa";

//Criar a conexão 
  $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
		$IDCasa = $_GET['id'];
  $consulta = "DELETE FROM casas WHERE IDCasa = '$IDCasa'";

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

    <title>Deletado com Sucesso!</title>
  </head>
  <body>
  	<div class="a">
	    <div class="card" style="width: 18rem;">
			<div class="card-header">
				Casa Deletada!
			</div>
			<ul class="list-group list-group-flush">
			    <li class="list-group-item"><a href="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/TCC19/Admin/menu.php">> Voltar</a></li>
			</ul>
		</div>
	</div>
   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>