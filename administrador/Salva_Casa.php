<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "cadastrocasa";

//Criar a conexão 
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
        
    $diretorio = "R:/wamp/www/TCCnovo/administrador/uploadcasa/";
    
    //aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
    if(isset($_FILES['arquivo'])){

        $extensao = strtolower(substr($_FILES ['arquivo'] ['name'], -4));
        $novo_nomeum = rand(0,99999999999);
    
            move_uploaded_file($_FILES ['arquivo'] ['tmp_name'],$diretorio.$novo_nomeum.$extensao); 
        };

    //aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
    if(isset($_FILES['arquivodois'])){

        $extensaodois = strtolower(substr($_FILES ['arquivodois'] ['name'], -4));
        $novo_nomedois = rand(0,999999999);
    
            move_uploaded_file($_FILES ['arquivodois'] ['tmp_name'],$diretorio.$novo_nomedois.$extensaodois); 
        };

    //aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
    if(isset($_FILES['arquivotres'])){

        $extensaotres = strtolower(substr($_FILES ['arquivotres'] ['name'], -4));
        $novo_nometres = rand(0,999999999999);
    
            move_uploaded_file($_FILES ['arquivotres'] ['tmp_name'],$diretorio.$novo_nometres.$extensaotres); 
        };
        
    //aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
    if(isset($_FILES['arquivoquatro'])){

        $extensaoquatro = strtolower(substr($_FILES ['arquivoquatro'] ['name'], -4));
        $novo_nomequatro = rand(0,99999999999);

            move_uploaded_file($_FILES ['arquivoquatro'] ['tmp_name'],$diretorio.$novo_nomequatro.$extensaoquatro); 
        };
        
    //aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa

        $titulo             = $_POST    ['titulo'];//pega oque está no campo e envia pelo methodo POST para a variavel $titulo
        $cep                = $_POST    ['cep']; // mesma coisa pra tudo
        $valor              = $_POST    ['valor'];
        $bairro             = $_POST    ['bairro'];
        $rua                = $_POST    ['rua'];
        $numerocasa         = $_POST    ['numerocasa'];

        $qtquarto           = $_POST    ['qtquarto'];
        $qtbanheiro         = $_POST    ['qtbanheiro'];
        $qtsala             = $_POST    ['qtsala'];
        $qtsuite            = $_POST    ['qtsuite'];
        $qtgaragem          = $_POST    ['qtgaragem'];
        $qtcozinha          = $_POST    ['qtcozinha'];
        $qtchurrasqueira    = $_POST    ['qtchurrasqueira'];
        $qtpiso             = $_POST    ['qtpiso'];

        $Sistemaalarme      = $_POST    ['Sistemaalarme'];
        $Espacogourmet      = $_POST    ['Espacogourmet'];
        $Interfone          = $_POST    ['Interfone'];
        $Varanda            = $_POST    ['Varanda'];

        $iptu               = $_POST    ['iptu'];
        $metro              = $_POST    ['metro'];
        $codcasa            = $_POST    ['codcasa'];

        $imobiliada         = $_POST    ['imobiliada'];
        $iptupago           = $_POST    ['iptupago'];
        $negociacao         = $_POST    ['negociacao'];
        $tipovenda          = $_POST    ['tipovenda'];
        $tipoimovel         = $_POST    ['tipoimovel'];

        $posicaosolar       = $_POST    ['posicaosolar'];
        
        $descricao          = $_POST    ['descricao'];
        
        $nomedono           = $_POST    ['nomedono'];
        $teldono            = $_POST    ['teldono'];

    $result_msg = "INSERT INTO casas (titulo, cep, valor, bairro, rua, numerocasa, qtquarto, qtbanheiro, qtsala, qtsuite, qtgaragem, qtcozinha, qtchurrasqueira, qtpiso, Sistemaalarme, Espacogourmet, Interfone, Varanda, iptu, metro, codcasa, imobiliada, iptupago, negociacao, tipovenda, tipoimovel, posicaosolar, descricao, nomedono, teldono, arquivo, arquivodois, arquivotres, arquivoquatro, visibilidade) VALUES ('$titulo', '$cep', '$valor', '$bairro', '$rua', '$numerocasa', '$qtquarto', '$qtbanheiro', '$qtsala', '$qtsuite', '$qtgaragem', '$qtcozinha', '$qtchurrasqueira', '$qtpiso', '$Sistemaalarme', '$Espacogourmet', '$Interfone', '$Varanda', '$iptu', '$metro', '$codcasa', '$imobiliada', '$iptupago', '$negociacao', '$tipovenda', '$tipoimovel', '$posicaosolar', '$descricao', '$nomedono', '$teldono', '$novo_nomeum', '$novo_nomedois', '$novo_nometres', '$novo_nomequatro', 'sim')";
    //insere cada dado no banco de dados
    // INSERT = insere INTO = no casas = nome da tabela no banco de dados
    //lista todas as colunas existentes no banco
    //VALUES = os valores:
    //lista de todas as variaveis que receberam os dados do formulario
        $resultado_msg = mysqli_query($conn, $result_msg);// executa o comando para inserir os dados no BD

        // BD = Banco de dados! 
         
?>
<!doctype html>
<html lang="pt-br">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/TCCnovo/administrador/CSS/login.css">

    <link rel="icon" type="imagem/png" href="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/TCCnovo/administrador/Imagens/icons8-home-64.png" />

    <title>Casa Cadastrada</title>
  </head>
  <body>
    <div class="a">
        <div class="card" style="width: 18rem;">
            <div class="card-header">
                Casa Cadastrada com Sucesso!
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/TCCnovo/administrador/menu.php">> Voltar</a></li>
            </ul>
        </div>
    </div>
   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>