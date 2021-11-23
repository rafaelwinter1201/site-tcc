<?php
        
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "cadastrocasa";

//Criar a conexão 
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

        $idcasa = $_GET['id'];
    $consulta = "SELECT * FROM casas WHERE IDCasa = ".$idcasa;
    $con = mysqli_query($conn, $consulta) or die ($mysqli->error);
        
?> 
<!doctype html>

<html lang="pt-br">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="CSS/estilovermais.css">

        <title>Imobiliária's TCC</title>

        <link rel="icon" type="imagem/png" href="Imagens/icons8-home-100.png" />

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
                        <a class="nav-link" href="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/TCCnovo/home/contato.php">Contato</a>
                    </li>
                </ul>

                <form class="form-inline my-2 my-lg-0" method="POST" action="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/TCCnovo/home/index.php">
                    <input class="form-control mr-sm-2" type="text" name="pesquisa" placeholder="Pesquisa por Bairro" aria-label="Search">

                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                        <img src="Imagens/icons8-pesquisa-google-na-web-50.png" width="15px">
                        Buscar
                    </button>
                </form>
            </div>
        </nav>

        <?php $dado = $con->fetch_array() ?>
        
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                </ol>

                    <div class="carousel-inner">
                        <div align="center">
                            <div class="carousel-item active">
                                    <img src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/TCCnovo/administrador/uploadcasa/<?php echo $dado['arquivo'];?>" height="300px" class="d-block" alt="...">
                            </div>

                            <div class="carousel-item">
                              <img src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/TCCnovo/administrador/uploadcasa/<?php echo $dado['arquivodois'];?>" height="300px" class="d-block" alt="...">
                            </div>

                            <div class="carousel-item">
                              <img src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/TCCnovo/administrador/uploadcasa/<?php echo $dado['arquivotres'];?>" height="300px" class="d-block" alt="...">
                            </div>

                            <div class="carousel-item">
                              <img src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/TCCnovo/administrador/uploadcasa/<?php echo $dado['arquivoquatro'];?>" height="300px" class="d-block" alt="...">
                            </div>
                        </div>
                    </div>

                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>

                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                                    </div>
            <br>

            <section class="sec">
                <div class="cardb">
                    <div class="card">
                        <div class="card-body">
                           Valor: <?php echo $dado['valor']; ?>
                        </div>
                    </div>
                </div>

                <div class="cardp">
                    <div class="card border-dark mb-3" style="width: 18rem;">
                        <div class="card-header">Dados Gerais da(o) <?php echo $dado['tipoimovel']?>:</div>

                        <div class="card-body text-dark">
                            <h5 class="card-title">Tipo de Venda:  <?php echo $dado['tipovenda']?></h5>

                            <div class="dropdown-divider"></div>
                                <img src="Imagens/icons8-quarto-30" class="imgB" height="18px"/> Dormitórios:                                   
                                <?php echo $dado['qtquarto']; ?>
                            <div class="dropdown-divider"></div>
                                <img src="Imagens/icons8-vaso-sanitário-40" class="imgB" height="20px"/> Banheiros:
                                <?php echo $dado['qtbanheiro']; ?>
                            <div class="dropdown-divider"></div>
                                <img src="Imagens/icons8-garagem-50" class="imgB" height="18px"/> Garagem:
                                <?php echo $dado['qtgaragem'] ?>
                            <div class="dropdown-divider"></div>
                                <img src="Imagens/icons8-sala-de-estar-24" class="imgB" height="18px"/> Salas:
                                <?php echo $dado['qtsala'] ?>
                            <div class="dropdown-divider"></div>
                                <img src="Imagens/icons8-vaso-sanitário-40" class="imgB" height="18px"/> Quarto com Suite:
                                <?php echo $dado['qtsuite'] ?>
                            <div class="dropdown-divider"></div>
                                <img src="Imagens/icons8-comida-24" class="imgB" height="18px"/> Cozinhas:
                                <?php echo $dado['qtcozinha'] ?>
                            <div class="dropdown-divider"></div>
                                <img src="Imagens/icons8-churrasqueira-24" class="imgB" height="18px"/> Churrasqueiras:
                                <?php echo $dado['qtchurrasqueira'] ?>
                            <div class="dropdown-divider"></div>
                                <img src="Imagens/icons8-casa-64" class="imgB" height="18px"/> Andares:
                                <?php echo $dado['qtpiso'] ?> 
                        </div>
                    </div>
                </div>

                <div class="cardp">
                    <div class="card border-dark mb-3" style="width: 18rem;">
                        <div class="card-header">Localidade:</div>

                        <div class="card-body text-dark">
                            <h5 class="card-title">Bairro: <?php echo $dado['bairro'] ?> </h5>
                            
                            
                            <div class="dropdown-divider"></div>
                                <img src="Imagens/icons8-endereço-96" class="imgB" height="18px">Endereço:
                                <?php echo $dado['rua'] ?>
                            <div class="dropdown-divider"></div>
                                 <img src="Imagens/icons8-praça-numerológica-60" class="imgB" height="18px">Número da Casa:
                                <?php echo $dado['numerocasa'] ?>
                            <div class="dropdown-divider"></div>
                                <img src="Imagens/icons8-tamanho-de-cama-96" class="imgB" height="18px">Tamanho do Terreno:
                                <?php echo $dado['metro'] ?>
                            <div class="dropdown-divider"></div>
                                <img src="Imagens/icons8-dinheiro-64" class="imgB" height="18px">Valor do IPTU:
                                <?php echo $dado['iptu'] ?>
                            <div class="dropdown-divider"></div>
                                <img src="Imagens/icons8-dinheiro-64" class="imgB" height="18px">IPTU Pago:
                                <?php echo $dado['iptupago'] ?>
                            <div class="dropdown-divider"></div>
                                <img src="Imagens/icons8-sol-150" class="imgB" height="18px">Posição Solar:
                                <?php echo $dado['posicaosolar'] ?>
                            <div class="dropdown-divider"></div>
                                <img src="Imagens/icons8-armário-de-roupa-50" class="imgB" height="18px">Casa Mobiliada:
                                <?php echo $dado['imobiliada'] ?>
                            <div class="dropdown-divider"></div>
                                <img src="Imagens/icons8-aperto-de-mão-50" class="imgB" height="18px">
                                <?php echo $dado['negociacao'] ?>
                        </div>
                    </div>
                </div>

                <div class="cardp">
                    <div class="card border-dark mb-3" style="width: 18rem;">
                        <div class="card-header">Dados Extras da(o) <?php echo $dado['tipoimovel']?>:</div>

                        <div class="card-body text-dark">
                            <h5 class="card-title">Tipo de Venda:  <?php echo $dado['tipovenda']?></h5>

                            <div class="dropdown-divider"></div>
                                <img src="Imagens/icons8-alarme-30" class="imgB" height="18px"/> Sistema de  Alarme:                                   
                                <?php echo $dado['Sistemaalarme']; ?>

                            <div class="dropdown-divider"></div>
                                <img src="Imagens/icons8-cozinha-50" class="imgB" height="20px"/> Espaço Gourmet:
                                <?php echo $dado['Espacogourmet']; ?>

                            <div class="dropdown-divider"></div>
                                <img src="Imagens/icons8-telefone-comercial-32" class="imgB" height="18px"/> Interfone:
                                <?php echo $dado['Interfone'] ?>

                            <div class="dropdown-divider"></div>
                                <img src="Imagens/icons8-varanda-50" class="imgB" height="18px"/> Varanda:
                                <?php echo $dado['Varanda'] ?>

                            <div class="dropdown-divider"></div> 
                        </div>
                    </div>
                </div>
                <div class="cardp">
                    <div class="card text-left" style="width: 64rem;padding-left: 4%">
                        <div class="card-body">
                            Descrição:<br>
                            <p style="padding-left: 6%"><?php echo $dado['descricao'] ?></p>
                        </div>
                    </div>
                </div>
                    
                
            
            </section>
            
            

            <footer class="foot">
                <p class="fot">
                    Desenvolvido por:<br>
                    Rafael Winter Felipe.<br>
                    Izabel Laurentino Ferreira.<br>
                    joão Gabriel do Nascimento.<br>
                </p>
            </footer>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    </body>
</html>