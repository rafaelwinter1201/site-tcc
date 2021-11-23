<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "cadastrocasa";

//Criar a conexão 
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

    if(isset($_POST ['pesquisa'])){

        $pesquisa = $_POST ['pesquisa'];
        $consulta = "SELECT IDCasa, titulo, valor, qtquarto, qtbanheiro, qtgaragem, tipoimovel, tipovenda, arquivo, visibilidade FROM casas WHERE bairro LIKE '%$pesquisa%' ";
        $con = mysqli_query($conn, $consulta) or die ($mysqli->error);
    }else{

        $consulta = "SELECT * FROM casas";
        $con = mysqli_query($conn, $consulta) or die ($mysqli->error);
    };
?>
<!doctype html>

<html lang="pt-br">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <link rel="stylesheet" href="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/TCCnovo/home/CSS/Estilo">

        <title>Imobiliária's TCC</title>

        <link rel="icon" type="imagem/png" href="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/TCCnovo/home/Imagens/icons8-home-100" />

    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a href="index.php"><img class="navbar-brand" src="Imagens/Logo_Home.png" width="250px"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Página Inicial <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/TCCnovo/home/contato.php" >Contato</a>
                    </li>
                </ul>

                <form class="form-inline my-2 my-lg-0" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <input class="form-control mr-sm-2" type="text" name="pesquisa" placeholder="Pesquisa por Bairro" aria-label="Search">

                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                        <img src="Imagens/icons8-pesquisa-google-na-web-50.png" width="15px">
                        Buscar
                    </button>
                </form>
            </div>
        </nav>
        
        <div style="min-height: 330px;">
            <section>
                <?php   
                        while ($dado = $con->fetch_array()){ 
                            if ($dado['visibilidade'] == "sim") {
                    
                ?>
                            <div class="card" style="width: 16rem;">
                                <a href="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/TCCnovo/home/vermais.php?id=<?php echo $dado['IDCasa']; ?>">

                                    <img src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/TCCnovo/administrador/uploadcasa/<?php echo $dado['arquivo'];?>" style="width: 16rem; height: 150px">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $dado['titulo']; ?></h5>
                                </div>

                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        ㅤ
                                        <img src="Imagens/icons8-quarto-30" class="imgB" height="18px"/>
                                        <?php echo $dado['qtquarto']; ?>
                                        ㅤㅤ
                                        <img src="Imagens/icons8-vaso-sanitário-40" class="imgB" height="20px"/>
                                        <?php echo $dado['qtbanheiro']; ?>
                                        ㅤㅤ
                                        <img src="Imagens/icons8-garagem-50" class="imgB" height="18px"/>
                                        <?php echo $dado['qtgaragem'] ?>
                                    </li>
                                    <li class="list-group-item" style="color: red;">
                                        Tipo de Imóvel: <?php echo $dado['tipoimovel']?><br>
                                        Tipo de Venda:  <?php echo $dado['tipovenda']?>
                                    </li>

                                    <li class="list-group-item">
                                        Valor:ㅤ<?php echo $dado['valor']; ?>
                                    </li>
                                </ul>

                                <div class="card-body">
                                    <form method="POST" action="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/TCCnovo/home/vermais.php?id=<?php echo $dado['IDCasa']; ?>">
                                            <button type="input" class="btn btn-outline-info">Ver Mais</button>
                                    </form>
                                </div>
                            </div>
                    
                <?php  
                        }//fecha while
                    }//fecha IF
                ?> 
            </section>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
        
    
    </body>
    <footer class="foot">
        <p>
            CRECI: NA1201<br>
            Desenvolvido por:<br>
            Rafael Winter Felipe.<br>
            Izabel Laurentino Ferreira.<br>
            joão Gabriel do Nascimento.<br>
            <a href="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/TCCnovo/administrador/menu.php ?>">Parte do Administrador</a>
        </p>
    </footer>
</html>