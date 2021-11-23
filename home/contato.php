
<html lang="pt-br">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/TCCnovo/home/CSS/estilovermais.css">

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
                        <a class="nav-link" href="#">Contato</a>
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

        <section>
            <center style="padding-top: 50px;">
                <div class="card mb-3" style="max-width: 540px;box-shadow: 0px 4px 4px 0px;">
                  <div class="row no-gutters">
                    <div class="col-md-4">
                      <img src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/TCCnovo/home/Imagens/fotorafael.jpg" style="max-width: 540px;height: 180px"  class="card-img" alt=" Foto de Rafael Winter Felipe">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Rafael Winter Felipe</h5>
                        <p class="card-text">
                            17 Anos<br>
                            <img src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/TCCnovo/home/Imagens/icons8-correio-100" height="20px">
                            rafawinter123456789@gmail.com<br>
                        </p>
                        <p class="card-text" style="padding-top: 20px"><small class="text-muted">TCC 2019</small></p>
                      </div>
                    </div>
                  </div>
                </div>
            </center>

            <center style="padding-top: 20px">
                <div class="card mb-3" style="max-width: 540px;box-shadow: 0px 4px 4px 0px;">
                  <div class="row no-gutters">
                    <div class="col-md-4">
                      <img src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/TCCnovo/home/Imagens/fotojoao.jpg" style="max-width: 540px;height: 180px"  class="card-img" alt="Foto de João Gabriel do Nascimento">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">João Gabriel do Nascimento</h5>
                        <p class="card-text">
                            18 Anos<br>
                            <img src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/TCCnovo/home/Imagens/icons8-correio-100" height="20px">
                           joaomelovascaino6@gmail.com<br>
                        </p>
                        <p class="card-text" style="padding-top: 20px"><small class="text-muted">TCC 2019</small></p>
                      </div>
                    </div>
                  </div>
                </div>
            </center>

            <center style="padding-top: 20px;padding-bottom: 20px">
                <div class="card mb-3" style="max-width: 540px;box-shadow: 0px 4px 4px 0px;">
                  <div class="row no-gutters">
                    <div class="col-md-4">
                      <img src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/TCCnovo/home/Imagens/fotoiza.jpg" style="max-width: 540px;height: 180px"  class="card-img" alt=" Foto de Izabel Laurentino Ferreira">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Izabel Laurentino Ferreira</h5>
                        <p class="card-text">
                            18 Anos<br>
                            <img src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/TCCnovo/home/Imagens/icons8-correio-100" height="20px">
                            izabellaurentinoferreira61@gmail.com<br>
                        </p>
                        <p class="card-text" style="padding-top: 20px"><small class="text-muted" >TCC 2019</small></p>
                      </div>
                    </div>
                  </div>
                </div>
            </center>
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