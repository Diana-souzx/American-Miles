<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telainicial</title>
    <link rel="stylesheet" href="inicial.css">
</head>
<body>
    <?php  include('../bdconfig/config.php'); 
    ?>
    <header id="cabeçalho">
        <img id="logo" src="../img/logoAm.png" alt="Logo">
        <div id="botoes">

            <button id="perfil"><img id="imagemPerfil" src="default-profile.png" alt="" ></button>
            
            <button id="carrinho"><img src="../img/carrinho.png" alt="Carrinho" style="width: 40px; height: 40px;"></button>
        </div>
    </header>
    <main id="conteudo">
        <h1>Destinos</h1>
         
        <div id="pagina" clas="pagina">

            <div  id="argentina" class="países">
                <div class="nome-pais">
                    <img src="../img/bandeira-argentina.png" alt="Argenina"><h4>Argentina</h4>
                </div>
                <div class="submit">
                    <button class="descrição" id="descrição"><img src="../img/três pontos.png" alt="..." style="width: 30px; height: 30px;"></button> 
                </div>
            </div>

            <div id="peru" class="países">
                <div class="nome-pais">
                    <img src="../img/bandeira-peru.png" alt="peru"><h4>Peru</h4>
                </div>
                <div class="submit">
                    <button class="descrição" id="descrição1"><img src="../img/três pontos.png" alt="..." style="width: 30px; height: 30px;"></button>
                </div>
            </div>

            <div id="paraguai" class="países">
                <div class="nome-pais">
                    <img src="../img/bandeira-paraguai.png" alt="paraguai"><h4>Paraguai</h4>
                </div>
                <div class="submit">
                    <button class="descrição" id="descrição2"><img src="../img/três pontos.png" alt="..." style="width: 30px; height: 30px;"></button>
                </div>
            </div>

            <div id="chile" class="países">
                <div class="nome-pais">
                    <img src="../img/bandeira-chile.png" alt="chile"><h4>Chile</h4>
                </div>
                <div class="submit">
                    <button class="descrição" id="descrição3"><img src="../img/três pontos.png" alt="..." style="width: 30px; height: 30px;"></button>
                </div>
            </div>

            <div id="equador" class="países">
                <div class="nome-pais">
                    <img src="../img/bandeira-equador.png" alt="equador"><h4>Equador</h4>
                </div>
                <div class="submit">
                    <button class="descrição" id="descrição4"><img src="../img/três pontos.png" alt="..." style="width: 30px; height: 30px;"></button>
                </div>
            </div>

            <div id="colombia" class="países">
                <div class="nome-pais">
                    <img src="../img/bandeira-colombia.png" alt="colombia"><h4>Colômbia</h4>
                </div>
                <div class="submit">
                    <button class="descrição" id="descrição5"><img src="../img/três pontos.png" alt="..." style="width: 30px; height: 30px;"></button>
                </div>
            </div>

            <div id="uruguai" class="países">
                <div class="nome-pais">
                    <img src="../img/bandeira-uruguai.png" alt="uruguai"><h4>Uruguai</h4>
                </div>
                <div class="submit">
                    <button class="descrição" id="descrição6"><img src="../img/três pontos.png" alt="..." style="width: 30px; height: 30px;"></button>
                </div>
            </div>

            <div id="guianaFrancesa" class="países">
                <div class="nome-pais">
                    <img src="../img/bandeira-guianaFrancesa.png" alt="guianaFrancesa"><h4>Guiana Francesa</h4>
                </div>
                <div class="submit">
                    <button class="descrição" id="descrição7"><img src="../img/três pontos.png" alt="..." style="width: 30px; height: 30px;"></button>
                </div>
            </div>

            <div id="bolivia" class="países">
                <div class="nome-pais">
                    <img src="../img/bandeira-bolivia.png" alt="bolivia"><h4>Bolívia</h4>
                </div>
                <div class="submit">
                    <button class="descrição" id="descrição8"><img src="../img/três pontos.png" alt="..." style="width: 30px; height: 30px;"></button>
                </div>
            </div>

            <div id="suriname" class="países">
                <div class="nome-pais">
                    <img src="../img/bandeira-suriname.png" alt="bolivia"><h4>Suriname</h4>
                </div>
                <div class="submit">
                    <button class="descrição" id="descrição9"><img src="../img/três pontos.png" alt="..." style="width: 30px; height: 30px;"></button>
                </div>
            </div>

            <div id="guiana" class="países">
                <div class="nome-pais">
                    <img src="../img/bandeira-guiana.png" alt="guiana"><h4>Guiana</h4>
                </div>
                <div class="submit">
                    <button class="descrição" id="descrição10"><img src="../img/três pontos.png" alt="..." style="width: 30px; height: 30px;"></button>
                </div>
            </div>

            <div id="venezuela" class="países">
                <div class="nome-pais">
                    <img src="../img/bandeira-venezuela.png" alt="vanezuela"><h4>Venezuela</h4>
                </div>
                <div class="submit">
                    <button class="descrição" id="descrição11"><img src="../img/três pontos.png" alt="..." style="width: 30px; height: 30px;"></button>
                </div>
            </div>

            <div id="brasil" class="países">
                <div class="nome-pais">
                    <img src="../img/bandeira-brasil.png" alt="vanezuela"><h4>Brasil</h4>
                </div>
                <div class="submit">
                    <button class="descrição" id="descrição18"><img src="../img/três pontos.png" alt="..." style="width: 30px; height: 30px;"></button>
                </div>
            </div>

            <!--pacotes-->

            <div id="argpac" class="países">
                <div class="nome-pais">
                    <img src="../img/bandeira-argentina.png" alt="argentina"><h4>Argentina + Hotel</h4>
                </div>
                <div class="submit">
                    <button class="descrição" id="descrição12"><img src="../img/três pontos.png" alt="..." style="width: 30px; height: 30px;"></button>
                </div>
            </div>

            <div id="perupac" class="países">
                <div class="nome-pais">
                    <img src="../img/bandeira-peru.png" alt="peru"><h4>Peru + Hotel</h4>
                </div>
                <div class="submit">
                    <button class="descrição" id="descrição13"><img src="../img/três pontos.png" alt="..." style="width: 30px; height: 30px;"></button>
                </div>
            </div>

            <div id="chilepac" class="países">
                <div class="nome-pais">
                    <img src="../img/bandeira-chile.png" alt="peru"><h4>Chile + Hotel</h4>
                </div>
                <div class="submit">
                    <button class="descrição" id="descrição14"><img src="../img/três pontos.png" alt="..." style="width: 30px; height: 30px;"></button>
                </div>
            </div>

            <div id="urupac" class="países">
                <div class="nome-pais">
                    <img src="../img/bandeira-uruguai.png" alt="peru"><h4>Uruguai + Hotel</h4>
                </div>
                <div class="submit">
                    <button class="descrição" id="descrição15"><img src="../img/três pontos.png" alt="..." style="width: 30px; height: 30px;"></button>
                </div>
            </div>

            <div id="bolipac" class="países">
                <div class="nome-pais">
                    <img src="../img/bandeira-bolivia.png" alt="peru"><h4>Bolívia + Hotel</h4>
                </div>
                <div class="submit">
                    <button class="descrição" id="descrição16"><img src="../img/três pontos.png" alt="..." style="width: 30px; height: 30px;"></button>
                </div>
            </div>

            <div id="venepac" class="países">
                <div class="nome-pais">
                    <img src="../img/bandeira-venezuela.png" alt="peru"><h4>Venezuela + Hotel</h4>
                </div>
                <div class="submit">
                    <button class="descrição" id="descrição17"><img src="../img/três pontos.png" alt="..." style="width: 30px; height: 30px;"></button>
                </div>
            </div>


            <!--anuncios-->

            <button id="natura"><img id="nat" src="../img/anuncio-natura.jpg" alt="natura"></button>

            <button id="eudora"><img id="eud" src="../img/eudora.webp" alt="eudora"></button>

            <button id="jequiti"><img id="jeq" src="../img/anuncio-jequiti.jpg" alt="jequiti"></button>

        </div>
        <h1 id="pac">Pacotes </h1>

    </main><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> <br><br>

    <!--aside paises-->
    <?php
    $preço = '';
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['date']) && !empty($_POST['date'])) {
        $Inputdata = $_POST['date'];
        if ($Inputdata) {
            $preçoMin = 1400;
            $preçoMax = 3000;
            $preço = rand($preçoMin, $preçoMax);
        }
    }

    $preço1 = '';
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['date1']) && !empty($_POST['date1'])) {
        $Inputdata = $_POST['date1'];
        if ($Inputdata) {
            $preçoMin = 1400;
            $preçoMax = 3000;
            $preço1 = rand($preçoMin, $preçoMax);
        }
    }
  ?>

<!--pacotes php -->
    <?php
       $preçoPassagem = 0;
       $preçoTotal = 0;
       $preçoDiária = 588; 
       $desconto = 0.10;
       
       if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['date12']) && isset($_POST['dias']) && !empty($_POST['date12']) && !empty($_POST['dias'])) {
           $Inputdata = $_POST['date12'];
           $dias = $_POST['dias'];

           if(!isset($conect)){
            die("erro: Conexão com o banco de dados não encontrada!" . $conect->connect_error);
          }
       
           $conect->select_db($bd_name);
       
           $tipo_passagem = 'Pacote'; 
           $nome_hotel = 'Eurobuilding Hotel Boutique Buenos Aires';
           $nome_pais = "Argentina";
       
       
           if ($Inputdata && $dias > 0) {
               
               $dataFormatada = DateTime::createFromFormat('Y-m-d', $Inputdata);
               if ($dataFormatada && $dataFormatada->format('Y-m-d') === $Inputdata) {
                $dataParaInsercao = $dataFormatada->format('Y-m-d');
                   $preçoMin = 1400;
                   $preçoMax = 3000;
                   $preçoPassagem = rand($preçoMin, $preçoMax);
                          
                   $preçoTotalSemDesconto = ($preçoDiária * $dias) + $preçoPassagem;
                         
                   $preçoTotal = $preçoTotalSemDesconto * (1 - $desconto);
            
                   $preçoTotal = (float) $preçoTotal;
       
                   $stmt = $conect->prepare("INSERT INTO carrinho (nome_país, tipo_passagem, valor_passagem, dataIda, qtdDias, nome_hotel) VALUES (?, ?, ?, ?, ?, ?);");
       
                       
                    $stmt->bind_param("ssdsis", $nome_pais, $tipo_passagem, $preçoTotal, $dataParaInsercao, $dias, $nome_hotel);
       
                       
                       
               } 
       }}
       
        

        $preçoPassagem = 0;
        $preçoTotal1 = 0;
        $preçoDiária = 500; 
        $desconto = 0.10;

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['date13']) && isset($_POST['dias1']) && !empty($_POST['date13']) && !empty($_POST['dias1'])) {
            $Inputdata = $_POST['date13'];
            $dias = $_POST['dias1'];
            if(!isset($conect)){
                die("erro: Conexão com o banco de dados não encontrada!" . $conect->connect_error);
              }
           
               $conect->select_db($bd_name);
           
               $tipo_passagem = 'Pacote'; 
               $nome_hotel1 = 'Sheraton Lima Historic Center';
               $nome_pais1 = "Peru";
    
            if ($Inputdata && $dias > 0) {
                
                $dataFormatada = DateTime::createFromFormat('Y-m-d', $Inputdata);
                if ($dataFormatada && $dataFormatada->format('Y-m-d') === $Inputdata) {
                 $dataParaInsercao1 = $dataFormatada->format('Y-m-d');
                    $preçoMin = 1400;
                    $preçoMax = 3000;
                    $preçoPassagem = rand($preçoMin, $preçoMax);
                           
                    $preçoTotalSemDesconto = ($preçoDiária * $dias) + $preçoPassagem;
                          
                    $preçoTotal1 = $preçoTotalSemDesconto * (1 - $desconto);
             
                    $preçoTotal1 = (float) $preçoTotal1;
        
                    $stmt = $conect->prepare("INSERT INTO carrinho (nome_país, tipo_passagem, valor_passagem, dataIda, qtdDias, nome_hotel) VALUES (?, ?, ?, ?, ?, ?);");
        
                        
                     $stmt->bind_param("ssdsis", $nome_pais, $tipo_passagem, $preçoTotal1, $dataParaInsercao1, $dias, $nome_hotel);
        
                        
                        
                } 
        }}

        $preçoPassagem = 0;
        $preçoTotal2 = 0;
        $preçoDiária = 2412; 
        $desconto = 0.10;

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['date14']) && isset($_POST['dias2']) && !empty($_POST['date14']) && !empty($_POST['dias2'])) {
            $Inputdata = $_POST['date14'];
            $dias = $_POST['dias2'];

            if(!isset($conect)){
                die("erro: Conexão com o banco de dados não encontrada!" . $conect->connect_error);
              }
           
               $conect->select_db($bd_name);
           
               $tipo_passagem = 'Pacote'; 
               $nome_hotel2 = 'Hotel Magnolia Santiago';
               $nome_pais2 = "Chile";
    
            if ($Inputdata && $dias > 0) {
                
                $dataFormatada = DateTime::createFromFormat('Y-m-d', $Inputdata);
                if ($dataFormatada && $dataFormatada->format('Y-m-d') === $Inputdata) {
                 $dataParaInsercao2 = $dataFormatada->format('Y-m-d');
                    $preçoMin = 1400;
                    $preçoMax = 3000;
                    $preçoPassagem = rand($preçoMin, $preçoMax);
                           
                    $preçoTotalSemDesconto = ($preçoDiária * $dias) + $preçoPassagem;
                          
                    $preçoTotal2 = $preçoTotalSemDesconto * (1 - $desconto);
             
                    $preçoTotal2 = (float) $preçoTotal2;
        
                    $stmt = $conect->prepare("INSERT INTO carrinho (nome_país, tipo_passagem, valor_passagem, dataIda, qtdDias, nome_hotel) VALUES (?, ?, ?, ?, ?, ?);");
        
                        
                     $stmt->bind_param("ssdsis", $nome_pais, $tipo_passagem, $preçoTotal2, $dataParaInsercao2, $dias, $nome_hotel);
        
                        
                        
                } 
        }}

        $preçoPassagem = 0;
        $preçoTotal3 = 0;
        $preçoDiária = 924; 
        $desconto = 0.10;

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['date15']) && isset($_POST['dias3']) && !empty($_POST['date15']) && !empty($_POST['dias3'])) {
            $Inputdata = $_POST['date15'];
            $dias = $_POST['dias3'];

            if(!isset($conect)){
                die("erro: Conexão com o banco de dados não encontrada!" . $conect->connect_error);
              }
           
               $conect->select_db($bd_name);
           
               $tipo_passagem = 'Pacote'; 
               $nome_hotel3 = 'Radisson Montevideo Victoria Plaza Hotel';
               $nome_pais3 = "Uruguai";
    
            if ($Inputdata && $dias > 0) {
                
                $dataFormatada = DateTime::createFromFormat('Y-m-d', $Inputdata);
                if ($dataFormatada && $dataFormatada->format('Y-m-d') === $Inputdata) {
                 $dataParaInsercao3 = $dataFormatada->format('Y-m-d');
                    $preçoMin = 1400;
                    $preçoMax = 3000;
                    $preçoPassagem = rand($preçoMin, $preçoMax);
                           
                    $preçoTotalSemDesconto = ($preçoDiária * $dias) + $preçoPassagem;
                          
                    $preçoTotal3 = $preçoTotalSemDesconto * (1 - $desconto);
             
                    $preçoTotal3 = (float) $preçoTotal3;
        
                    $stmt = $conect->prepare("INSERT INTO carrinho (nome_país, tipo_passagem, valor_passagem, dataIda, qtdDias, nome_hotel) VALUES (?, ?, ?, ?, ?, ?);");
        
                        
                     $stmt->bind_param("ssdsis", $nome_pais, $tipo_passagem, $preçoTotal3, $dataParaInsercao3, $dias, $nome_hotel);
        
                        
                        
                } 
        }}

        $preçoPassagem = 0;
        $preçoTotal4 = 0;
        $preçoDiária = 194; 
        $desconto = 0.10;

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['date16']) && isset($_POST['dias4']) && !empty($_POST['date16']) && !empty($_POST['dias4'])) {
            $Inputdata = $_POST['date16'];
            $dias = $_POST['dias4'];

            if(!isset($conect)){
                die("erro: Conexão com o banco de dados não encontrada!" . $conect->connect_error);
              }
           
               $conect->select_db($bd_name);
           
               $tipo_passagem = 'Pacote'; 
               $nome_hotel4 = 'La Culta, Centro Cultural';
               $nome_pais4 = "Bolívia";
    
            if ($Inputdata && $dias > 0) {
                
                $dataFormatada = DateTime::createFromFormat('Y-m-d', $Inputdata);
                if ($dataFormatada && $dataFormatada->format('Y-m-d') === $Inputdata) {
                 $dataParaInsercao4 = $dataFormatada->format('Y-m-d');
                    $preçoMin = 1400;
                    $preçoMax = 3000;
                    $preçoPassagem = rand($preçoMin, $preçoMax);
                           
                    $preçoTotalSemDesconto = ($preçoDiária * $dias) + $preçoPassagem;
                          
                    $preçoTotal4 = $preçoTotalSemDesconto * (1 - $desconto);
             
                    $preçoTotal4 = (float) $preçoTotal4;
        
                    $stmt = $conect->prepare("INSERT INTO carrinho (nome_país, tipo_passagem, valor_passagem, dataIda, qtdDias, nome_hotel) VALUES (?, ?, ?, ?, ?, ?);");
        
                        
                     $stmt->bind_param("ssdsis", $nome_pais, $tipo_passagem, $preçoTotal4, $dataParaInsercao4, $dias, $nome_hotel);
        
                        
                        
                } 
        }}

        $preçoPassagem = 0;
        $preçoTotal5 = 0;
        $preçoDiária = 2723; 
        $desconto = 0.10;

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['date17']) && isset($_POST['dias5']) && !empty($_POST['date17']) && !empty($_POST['dias5'])) {
            $Inputdata = $_POST['date17'];
            $dias = $_POST['dias5'];

            if(!isset($conect)){
                die("erro: Conexão com o banco de dados não encontrada!" . $conect->connect_error);
              }
           
               $conect->select_db($bd_name);
           
               $tipo_passagem = 'Pacote'; 
               $nome_hotel5 = 'Hotel Cayena Caracas';
               $nome_pais5 = "Venezuela";
    
            if ($Inputdata && $dias > 0) {
                
                $dataFormatada = DateTime::createFromFormat('Y-m-d', $Inputdata);
                if ($dataFormatada && $dataFormatada->format('Y-m-d') === $Inputdata) {
                 $dataParaInsercao5 = $dataFormatada->format('Y-m-d');
                    $preçoMin = 1400;
                    $preçoMax = 3000;
                    $preçoPassagem = rand($preçoMin, $preçoMax);
                           
                    $preçoTotalSemDesconto = ($preçoDiária * $dias) + $preçoPassagem;
                          
                    $preçoTotal5 = $preçoTotalSemDesconto * (1 - $desconto);
             
                    $preçoTotal5 = (float) $preçoTotal1;
        
                    $stmt = $conect->prepare("INSERT INTO carrinho (nome_país, tipo_passagem, valor_passagem, dataIda, qtdDias, nome_hotel) VALUES (?, ?, ?, ?, ?, ?);");
        
                        
                     $stmt->bind_param("ssdsis", $nome_pais, $tipo_passagem, $preçoTotal5, $dataParaInsercao5, $dias, $nome_hotel);
        
                        
                        
                } 
        }}
    ?>

    <aside class="pais" id="pais">
        <div class="cima">
            <img src="../img/bandeira-argentina.png" alt="Argentina"><h2>Argentina</h2>
            <button class="fechardesc" id="fechardesc"> X </button>
        </div><br>
        <div >
            <img class="imgs" src="../img/foto1-buenos.jpg" alt="foto1"><img class="imgs" src="../img/foto2-buenos.jpg" alt="foto2"><img class="imgs" src="../img/foto3-buenos.jpg" alt="">
        </div><br>
        <div class="fala">
            <p>Argentina é um país diversificado e encantador localizado na América do Sul, conhecido por suas vastas paisagens que vão das geleiras da Patagônia aos vinhedos de Mendoza e às florestas de Misiones. Buenos Aires, sua capital, é o centro cultural, oferecendo uma combinação de elegância europeia e paixão latina. A cultura argentina é vibrante, com destaque para o tango, a gastronomia (especialmente vinhos e carnes), e a paixão nacional pelo futebol.</p>
        </div><br>  
        <div class="info" id="info">
            <div id="chega"><h3 class="des">Partida: <p class="destin">Salvador</p></h3><h3 class="des">Destino: <p class="destin">Buenos Aires</p></h3></div> <br> 
            
                <form class="data" action="" method="POST">
                    <label for="dia"><h3>Dia:</h3></label>
                    <input type="date" name="date" id="date" value="<?php echo isset($_POST['date']) ? $_POST['date'] : ''; ?>">
                    <input type="submit" value="Ver Preço" class="verpreço">
                </form>
                <br>
             <h3 id="valor">Valor: <?php echo !empty($preço) ? "R$ $preço,00" : ''; ?></h3>
        </div>
        <div class="comprar">
            <button class="buttoncompra">Comprar</button>
        </div>
    </aside>

    <aside class="pais" id="pais1">
        <div class="cima">
            <img src="../img/bandeira-peru.png" alt="peru"><h2>Peru</h2>
            <button class="fechardesc" id="fechardesc1"> X </button>
        </div><br>
        <div >
            <img class="imgs" src="../img/foto1-lima.jpg" alt="foto1"><img class="imgs" src="../img/foto2-lima.avif" alt="foto2"><img class="imgs" src="../img/foto3-lima.jpg" alt="foto3">
        </div><br>
        <div class="fala">
            <p>O Peru é conhecido por sua rica história, sendo o berço da civilização Inca. Com uma cultura vibrante que mistura tradições indígenas e influências espanholas, o país oferece paisagens diversas, desde a costa até a Amazônia.
                Lima, a vibrante capital do Peru, é uma cidade que harmoniza a história e a modernidade de maneira encantadora. Situada na costa do Oceano Pacífico, Lima é o coração econômico, político e cultural do país.
            </p>
        </div><br>  
        <div class="info" id="info">
            <div id="chega"><h3 class="des">Partida: <p class="destin">Salvador</p></h3><h3 class="des">Destino: <p class="destin">Lima</p></h3></div> <br>
    
                <form class="data" action="" method="POST">
                    <label for="dia"><h3>Dia:</h3></label>
                    <input type="date" name="date1" id="date1" value="<?php echo isset($_POST['date1']) ? $_POST['date1'] : ''; ?>">
                    <input type="submit" value="Ver Preço" class="verpreço">
                </form><br>
        
            <h3 id="valor1">Valor: <?php echo !empty($preço1) ? "R$ $preço1,00" : ''; ?></h3>
        </div>
        <div class="comprar">
            <button class="buttoncompra">Comprar</button>
        </div>
    </aside>

    <aside class="pais" id="pais2">
        <div class="cima">
            <img src="../img/bandeira-paraguai.png" alt="paraguai"><h2>Paraguai</h2>
            <button class="fechardesc" id="fechardesc2"> X </button>
        </div><br>
        <div >
            <img class="imgs" src="../img/foto1-assunção.png" alt="foto1"><img class="imgs" src="../img/foto2-assunção.webp" alt="foto2"><img class="imgs" src="../img/foto3-assunção.jpg" alt="foto3">
        </div><br>
        <div class="fala">
            <p>Paraguai, um país de paisagens deslumbrantes, rica cultura e hospitalidade calorosa. Com natureza exuberante, tradição vibrante e aventuras emocionantes, o Paraguai oferece experiências autênticas e inesquecíveis.
                Assunção é uma cidade vibrante e cheia de história, fundada em 1537. Com um centro histórico rico em arquitetura colonial, uma vida urbana dinâmica, uma cena gastronômica diversificada e várias opções de atividades ao ar livre, Assunção harmoniza o antigo e o novo de maneira encantadora. É um centro de educação e cultura, oferecendo uma hospitalidade calorosa.
            </p>
        </div><br>  
        <div class="info" id="info">
            <div id="chega"><h3 class="des">Partida: <p class="destin">Salvador</p></h3><h3 class="des">Destino: <p class="destin">Assunção</p></h3></div> <br>
            
                <form class="data" action="" method="POST">
                    <label for="dia"><h3>Dia:</h3></label>
                    <input type="date" name="date2" id="date2" value="<?php echo isset($_POST['date2']) ? $_POST['date2'] : ''; ?>">
                    <input type="submit" value="Ver Preço" class="verpreço">
                </form>
        <br>
        <h3 id="valor2">Valor: <?php echo !empty($preço2) ? "R$ $preço2,00" : ''; ?></h3>
        <div class="comprar">
            <button class="buttoncompra">Comprar</button>
        </div>
    </aside>

    <aside class="pais" id="pais3">
        <div class="cima">
            <img src="../img/bandeira-chile.png" alt="chile"><h2>Chile</h2>
            <button class="fechardesc" id="fechardesc3"> X </button>
        </div><br>
        <div >
            <img class="imgs" src="../img/foto1-santiago.jpg" alt="foto1"><img class="imgs" src="../img/foto2-chile.jpg" alt="foto2"><img class="imgs" src="../img/foto3-santiago.jpg" alt="foto3">
        </div><br>
        <div class="fala">
            <p>O Chile oferece uma diversidade incrível, desde o deserto do Atacama até as geleiras da Patagônia. Com uma rica herança cultural e uma culinária deliciosa, é perfeito para aventuras, exploração e experiências autênticas. Os chilenos são conhecidos por sua hospitalidade, fazendo com que todos se sintam bem-vindos.
                Santiago é uma cidade cosmopolita que combina tradição e modernidade. Com bairros históricos, uma vida urbana dinâmica, uma cena gastronômica diversificada e várias opções de atividades ao ar livre, Santiago é o centro cultural do Chile e oferece algo para todos os gostos.
            </p>
        </div><br>  
        <div class="info" id="info">
            <div id="chega"><h3 class="des">Partida: <p class="destin">Salvador</p></h3><h3 class="des">Destino: <p class="destin">Santiago</p></h3></div> <br>
            
                <form class="data" action="" method="POST">
                    <label for="dia"><h3>Dia:</h3></label>
                    <input type="date" name="date3" id="date3" value="<?php echo isset($_POST['date3']) ? $_POST['date3'] : ''; ?>">
                    <input type="submit" value="Ver Preço" class="verpreço">
                </form>
        <br>
        <h3 id="valor3">Valor: <?php echo !empty($preço3) ? "R$ $preço3,00" : ''; ?></h3>
        <div class="comprar">
            <button class="buttoncompra">Comprar</button>
        </div>
    </aside>

    <aside class="pais" id="pais4">
        <div class="cima">
            <img src="../img/bandeira-equador.png" alt="equador"><h2>Equador</h2>
            <button class="fechardesc" id="fechardesc4"> X </button>
        </div><br>
        <div >
            <img class="imgs" src="../img/foto1-quito.jpg" alt="foto1"><img class="imgs" src="../img/foto2-quito.jpg" alt="foto2"><img class="imgs" src="../img/foto3-quito.webp" alt="foto3">
        </div><br>
        <div class="fala">
            <p>O Equador é um país repleto de diversidade natural, cultura rica e uma história vibrante. Desde a Amazônia até os Andes e as ilhas Galápagos, o Equador oferece uma infinidade de experiências inesquecíveis.
                Quito, situada nos Andes, é uma cidade histórica e culturalmente rica, com um centro histórico que é Patrimônio Mundial da UNESCO. Com bairros charmosos, uma gastronomia diversificada e várias opções de atividades ao ar livre, Quito oferece uma combinação única de charme colonial e modernidade.
            </p>
        </div><br>  
        <div class="info" id="info">
            <div id="chega"><h3 class="des">Partida: <p class="destin">Salvador</p></h3><h3 class="des">Destino: <p class="destin">Quito</p></h3></div> <br>
            
            <form class="data" action="" method="POST">
                    <label for="dia"><h3>Dia:</h3></label>
                    <input type="date" name="date4" id="date4" value="<?php echo isset($_POST['date4']) ? $_POST['date4'] : ''; ?>">
                    <input type="submit" value="Ver Preço" class="verpreço">
                </form>
        <br>
        <h3 id="valor4">Valor: <?php echo !empty($preço4) ? "R$ $preço4,00" : ''; ?></h3>
        <div class="comprar">
            <button class="buttoncompra">Comprar</button>
        </div>
    </aside>

    <aside class="pais" id="pais5">
        <div class="cima">
            <img src="../img/bandeira-colombia.png" alt="colombia"><h2>Colômbia</h2>
            <button class="fechardesc" id="fechardesc5"> X </button>
        </div><br>
        <div >
            <img class="imgs" src="../img/foto1-bogota.jpg" alt="foto1"><img class="imgs" src="../img/foto2-bogota.jpg" alt="foto2"><img class="imgs" src="../img/foto3-bogota.jpg" alt="foto3">
        </div><br>
        <div class="fala">
            <p>O Equador é um país repleto de diversidade natural, cultura rica e uma história vibrante. Desde a Amazônia até os Andes e as ilhas Galápagos, o Equador oferece uma infinidade de experiências inesquecíveis.
                Quito, situada nos Andes, é uma cidade histórica e culturalmente rica, com um centro histórico que é Patrimônio Mundial da UNESCO. Com bairros charmosos, uma gastronomia diversificada e várias opções de atividades ao ar livre, Quito oferece uma combinação única de charme colonial e modernidade.
            </p>
        </div><br>  
        <div class="info" id="info">
            <div id="chega"><h3 class="des">Partida: <p class="destin">Salvador</p></h3><h3 class="des">Destino: <p class="destin">Quito</p></h3></div> <br>
           
            <form class="data" action="" method="POST">
                    <label for="dia"><h3>Dia:</h3></label>
                    <input type="date" name="date5" id="date5" value="<?php echo isset($_POST['date5']) ? $_POST['date5'] : ''; ?>">
                    <input type="submit" value="Ver Preço" class="verpreço">
                </form>
        <br>
        <h3 id="valor5">Valor: <?php echo !empty($preço5) ? "R$ $preço5,00" : ''; ?></h3>
        <div class="comprar">
            <button class="buttoncompra">Comprar</button>
        </div>
    </aside>

    <aside class="pais" id="pais6">
        <div class="cima">
            <img src="../img/bandeira-uruguai.png" alt="uruguai"><h2>Uruguai</h2>
            <button class="fechardesc" id="fechardesc6"> X </button>
        </div><br>
        <div >
            <img class="imgs" src="../img/foto1-monte.avif" alt="foto1"><img class="imgs" src="../img/foto2-monte.jpg" alt="foto2"><img class="imgs" src="../img/foto3-monte.jpg" alt="foto3">
        </div><br>
        <div class="fala">
            <p>O Uruguai é conhecido por suas paisagens deslumbrantes, cultura rica e hospitalidade acolhedora. Oferece praias tranquilas, cidades charmosas e uma culinária deliciosa, incluindo o famoso churrasco (asado) e o chivito.
                Montevidéu é uma cidade cheia de vida e história, com um centro histórico encantador, praias bonitas e uma gastronomia diversificada. Explore a Rambla à beira-mar e os bairros vibrantes como Pocitos e Punta Carretas. Montevidéu celebra a cultura com museus, teatros e um dos carnavais mais longos do mundo.
            </p>
        </div><br>  
        <div class="info" id="info">
            <div id="chega"><h3 class="des">Partida: <p class="destin">Salvador</p></h3><h3 class="des">Destino: <p class="destin">Montevidéu</p></h3></div> <br>
            
            <form class="data" action="" method="POST">
                    <label for="dia"><h3>Dia:</h3></label>
                    <input type="date" name="date6" id="date6" value="<?php echo isset($_POST['date6']) ? $_POST['date6'] : ''; ?>">
                    <input type="submit" value="Ver Preço" class="verpreço">
                </form>
            <br>
            <h3 id="valor6">Valor: <?php echo !empty($preço6) ? "R$ $preço6,00" : ''; ?></h3>
        <div class="comprar">
            <button class="buttoncompra">Comprar</button>
        </div>
    </aside>

    <aside class="pais" id="pais7">
        <div class="cima">
            <img src="../img/bandeira-guianaFrancesa.png" alt="guianaFrancesa"><h2>Guiana Francesa</h2>
            <button class="fechardesc" id="fechardesc7"> X </button>
        </div><br>
        <div >
            <img class="imgs" src="../img/foto1-caiena.jpg" alt="foto1"><img class="imgs" src="../img/foto2-caiena.jpg" alt="foto2"><img class="imgs" src="../img/foto3-caiena.jpg" alt="foto3">
        </div><br>
        <div class="fala">
            <p>A Guiana Francesa é um território ultramarino da França com uma rica biodiversidade, cultura diversificada e história única. Participe de festivais coloridos e visite locais históricos como a Ilha do Diabo e o Centro Espacial de Kourou.
                Caiena é uma cidade cheia de vida e cultura, situada na costa atlântica. Com arquitetura colonial, mercados tradicionais e uma gastronomia diversificada, Caiena oferece uma combinação única de charme tropical e influências francesas. A cidade é um ponto de partida ideal para explorar a natureza exuberante e participar de eventos culturais.
            </p>
        </div><br>  
        <div class="info" id="info">
            <div id="chega"><h3 class="des">Partida: <p class="destin">Salvador</p></h3><h3 class="des">Destino: <p class="destin">Caiena</p></h3></div> <br>
            
            <form class="data" action="" method="POST">
                    <label for="dia"><h3>Dia:</h3></label>
                    <input type="date" name="date7" id="date7" value="<?php echo isset($_POST['date7']) ? $_POST['date7'] : ''; ?>">
                    <input type="submit" value="Ver Preço" class="verpreço">
                </form>
            <br>
            <h3 id="valor7">Valor: <?php echo !empty($preço7) ? "R$ $preço7,00" : ''; ?></h3>
        <div class="comprar">
            <button class="buttoncompra">Comprar</button>
        </div>
    </aside>

    <aside class="pais" id="pais8">
        <div class="cima">
            <img src="../img/bandeira-bolivia.png" alt="bolivia"><h2>Bolívia</h2>
            <button class="fechardesc" id="fechardesc8"> X </button>
        </div><br>
        <div >
            <img class="imgs" src="../img/foto1-sucre.jpg" alt="foto1"><img class="imgs" src="../img/foto2-sucre.jpg" alt="foto2"><img class="imgs" src="../img/foto3-sucre.jpg" alt="foto3">
        </div><br>
        <div class="fala">
            <p>A Bolívia oferece uma incrível diversidade de paisagens, desde os majestosos Andes até o Salar de Uyuni, o maior deserto de sal do mundo. Com uma rica herança cultural indígena, festivais vibrantes e uma culinária deliciosa, a Bolívia é um destino que encanta a todos.
                Sucre, conhecida como a "Cidade Branca", é uma cidade cheia de charme e história. Com arquitetura colonial bem preservada, ruas de paralelepípedos e uma rica vida cultural, Sucre oferece uma combinação única de tranquilidade e dinamismo. 
            </p>
        </div><br>  
        <div class="info" id="info">
            <div id="chega"><h3 class="des">Partida: <p class="destin">Salvador</p></h3><h3 class="des">Destino: <p class="destin">Sucre</p></h3></div> <br>
            
            <form class="data" action="" method="POST">
                    <label for="dia"><h3>Dia:</h3></label>
                    <input type="date" name="date8" id="date8" value="<?php echo isset($_POST['date8']) ? $_POST['date8'] : ''; ?>">
                    <input type="submit" value="Ver Preço" class="verpreço">
                </form>
            <br>
            <h3 id="valor8">Valor: <?php echo !empty($preço8) ? "R$ $preço8,00" : ''; ?></h3>
        <div class="comprar">
            <button class="buttoncompra">Comprar</button>
        </div>
    </aside>

    <aside class="pais" id="pais9">
        <div class="cima">
            <img src="../img/bandeira-suriname.png" alt="suriname"><h2>Suriname</h2>
            <button class="fechardesc" id="fechardesc9"> X </button>
        </div><br>
        <div >
            <img class="imgs" src="../img/foto1-paramarimbo.jpg" alt="foto1"><img class="imgs" src="../img/foto2-paramarimbo.jpg" alt="foto2"><img class="imgs" src="../img/foto3-paramaribo.jpg" alt="foto3">
        </div><br>
        <div class="fala">
            <p>A Bolívia oferece uma incrível diversidade de paisagens, desde os majestosos Andes até o Salar de Uyuni, o maior deserto de sal do mundo. Com uma rica herança cultural indígena, festivais vibrantes e uma culinária deliciosa, a Bolívia é um destino que encanta a todos.
                Sucre, conhecida como a "Cidade Branca", é uma cidade cheia de charme e história. Com arquitetura colonial bem preservada, ruas de paralelepípedos e uma rica vida cultural, Sucre oferece uma combinação única de tranquilidade e dinamismo. 
            </p>
        </div><br>  
        <div class="info" id="info">
            <div id="chega"><h3 class="des">Partida: <p class="destin">Salvador</p></h3><h3 class="des">Destino: <p class="destin">Parimaribo</p></h3></div> <br>
            
            <form class="data" action="" method="POST">
                    <label for="dia"><h3>Dia:</h3></label>
                    <input type="date" name="date9" id="date9" value="<?php echo isset($_POST['date9']) ? $_POST['date9'] : ''; ?>">
                    <input type="submit" value="Ver Preço" class="verpreço">
                </form>
            <br>
            <h3 id="valor9">Valor: <?php echo !empty($preço9) ? "R$ $preço9,00" : ''; ?></h3>
        <div class="comprar">
            <button class="buttoncompra">Comprar</button>
        </div>
    </aside>

    <aside class="pais" id="pais10">
        <div class="cima">
            <img src="../img/bandeira-guiana.png" alt="guiana"><h2>Guiana</h2>
            <button class="fechardesc" id="fechardesc10"> X </button>
        </div><br>
        <div >
            <img class="imgs" src="../img/foto1-george.jpg" alt="foto1"><img class="imgs" src="../img/foto2-george.jpg" alt="foto2"><img class="imgs" src="../img/foto3-george].jpg" alt="foto3">
        </div><br>
        <div class="fala">
            <p>Descubra a Guiana e sua capital vibrante, Georgetown! Com paisagens deslumbrantes, florestas tropicais exuberantes e uma rica biodiversidade, a Guiana é um paraíso natural. uma cidade vibrante e acolhedora. Com sua arquitetura colonial encantadora, mercados coloridos e uma cultura rica, Georgetown é uma mistura perfeita de tradição e modernidade. Caminhe pelo animado Stabroek Market, prove delícias locais nos restaurantes à beira do rio Demerara, e explore os tesouros históricos, como a majestosa Catedral de St. George.
            </p>
        </div><br>  
        <div class="info" id="info">
            <div id="chega"><h3 class="des">Partida: <p class="destin">Salvador</p></h3><h3 class="des">Destino: <p class="destin">Georgetown</p></h3></div><br>
            
            <form class="data" action="" method="POST">
                    <label for="dia"><h3>Dia:</h3></label>
                    <input type="date" name="date10" id="date10" value="<?php echo isset($_POST['date10']) ? $_POST['date10'] : ''; ?>">
                    <input type="submit" value="Ver Preço" class="verpreço">
                </form>
            <br>
            <h3 id="valor10">Valor: <?php echo !empty($preço10) ? "R$ $preço10,00" : ''; ?></h3>
        <div class="comprar">
            <button class="buttoncompra">Comprar</button>
        </div>
    </aside>

    <aside class="pais" id="pais11">
        <div class="cima">
            <img src="../img/bandeira-venezuela.png" alt="venezuela"><h2>Venezuela</h2>
            <button class="fechardesc" id="fechardesc11"> X </button>
        </div><br>
        <div >
            <img class="imgs" src="../img/foto1-caracas.jpg" alt="foto1"><img class="imgs" src="../img/foto2-caracas.jpg" alt="foto2"><img class="imgs" src="../img/foto3-caracas.jpg" alt="foto3">
        </div><br>
        <div class="fala">
            <p>Descubra a Venezuela, um país repleto de belezas naturais e culturais! Conhecida por suas paisagens espetaculares, que vão desde as praias caribenhas até as majestosas montanhas dos Andes.
                No coração deste país vibrante está Caracas, sua capital pulsante. Uma metrópole que mistura o tradicional e o moderno. Explore os parques exuberantes como o Parque Nacional El Ávila, onde você pode desfrutar de vistas panorâmicas da cidade e da natureza ao redor. Descubra a rica herança cultural nos museus e teatros, e saboreie a deliciosa culinária local nos mercados e restaurantes.
            </p>
        </div><br>  
        <div class="info" id="info">
            <div id="chega"><h3 class="des">Partida: <p class="destin">Salvador</p></h3><h3 class="des">Destino: <p class="destin">Caracas</p></h3></div> <br>
            
            <form class="data" action="" method="POST">
                    <label for="dia"><h3>Dia:</h3></label>
                    <input type="date" name="date11" id="date11" value="<?php echo isset($_POST['date11']) ? $_POST['date11'] : ''; ?>">
                    <input type="submit" value="Ver Preço" class="verpreço">
                </form>
            <br>
            <h3 id="valor11">Valor: <?php echo !empty($preço11) ? "R$ $preço11,00" : ''; ?></h3>
        <div class="comprar">
            <button class="buttoncompra">Comprar</button>
        </div>
    </aside>

    <aside class="pais" id="pais18">
        <div class="cima">
            <img src="../img/bandeira-brasil.png" alt="brasil"><h2>Brasil</h2>
            <button class="fechardesc" id="fechardesc18"> X </button>
        </div><br>
        <div >
            <img class="imgs" src="../img/foto1-salvador.jpg" alt="foto1"><img class="imgs" src="../img/foto2-salvador.jpg" alt="foto2"><img class="imgs" src="../img/foto3-salvador.jpg" alt="foto3">
        </div><br>
        <div class="fala">
            <p>Descubra o encanto do Brasil, um país vibrante e diverso que desperta a imaginação e o coração. alvador, uma cidade vibrante e rica em cultura. Com suas praias paradisíacas, gastronomia única e o Carnaval mais animado do mundo, Salvador é o destino perfeito para quem busca viver intensamente e se encantar com a beleza do Brasil.
            </p>
        </div><br>  
        <div class="info" id="info">
            <h3 class="des">Destino: <p class="destin">Salvador</p></h3></div> <br>
            
            <form class="data" action="" method="POST">
                    <label for="dia"><h3>Dia:</h3></label>
                    <input type="date" name="date18" id="date18" value="<?php echo isset($_POST['date18']) ? $_POST['date18'] : ''; ?>">
                    <input type="submit" value="Ver Preço" class="verpreço">
                </form>
            <br>
            <h3 id="valor18">Valor: <?php echo !empty($preço18) ? "R$ $preço18,00" : ''; ?></h3>
        <div class="comprar">
            <button class="buttoncompra">Comprar</button>
        </div>
    </aside>

    <!--pacotes-->

    <aside class="pais" id="pais12">
        <div class="cima">
            <img src="../img/bandeira-argentina.png" alt="argentina"><h2>Argentina + Hotel</h2>
            <button class="fechardesc" id="fechardesc12"> X </button>
        </div><br>
        <div>
            <img class="imgs" src="../img/foto1-herobuilding.jpg" alt="foto1"><img class="imgs" src="../img/foto2-herobuilding.jpg" alt="foto2"><img class="imgs" src="../img/foto3-herobuilding.jpg" alt="foto3">
        </div><br>
        <div class="fala">
            <p>Aproveite uma incrível viagem para a Argentina com estadia inclusiva no Eurobuilding Hotel Boutique Buenos Aires! Hotel Confortável: Quartos modernos com hidromassagem, Wi-Fi gratuito, academia e vista panorâmica.
             </p>
               <p> O hotel está localizado na Calle Lima 187, Monserrat, Buenos Aires, Argentina. Quanto aos preços, o hotel oferece uma variedade de opções para atender diferentes necessidades e orçamentos. Os preços podem variar dependendo da temporada e da disponibilidade, mas geralmente os quartos começam em torno de R$588,00 por noite, <span>e receba 10% de desconto!</span> 
            </p>
        </div><br>  
        <div class="info" id="info">
            <div id="chega"><h3 class="des">Partida: <p class="destin">Salvador</p></h3><h3 class="des">Destino: <p class="destin">Buenos Aires</p></h3></div> <br>
            
            <form class="data" action="" method="POST">
                <label for="dia"><h3>Dia:</h3></label>
                <input type="date" id="date12" name="date12" required> 
                <label for="diaria"><h3>Quantidade de dias: </h3></label> 
                <input type="number"  id="dias" name= "dias" min="1" max="5" value="<?php echo isset($_POST['dias']) ? $_POST['dias'] : 1; ?>">

                <input type="submit" value="Ver Preço" class="verpreço">
            </form>
            <br>
             <h3 id="valor12">Valor: <?php 
                if ($preçoTotal > 0) {
                    echo "R$ " . number_format($preçoTotal, 2, ',', '.'); 
                } 
                ?>
             </h3>
        <div class="comprar">
            <button class="buttoncompra" data-nome_pais="Argentina" data-preçoTotal="<?php echo $preçoTotal; ?>" data-tipo_passagem="Pacote" data-dataIda="<?php echo $Inputdata; ?>" data-qtdDias="<?php echo $dias; ?>" data-nome_hotel="Eurobuilding Hotel Boutique Buenos Aires">Comprar</button>
        </div>
    </aside>

    <aside class="pais" id="pais13">
        <div class="cima">
            <img src="../img/bandeira-peru.png" alt="peru"><h2>Peru + Hotel</h2>
            <button class="fechardesc" id="fechardesc13"> X </button>
        </div><br>
        <div >
            <img class="imgs" src="../img/foto1-sheraton.jpg" alt="foto1"><img class="imgs" src="../img/foto2-sheraton.jpg" alt="foto2"><img class="imgs" src="../img/foto3-sheraton.jpg" alt="foto3">
        </div><br>
        <div class="fala">
            <p>Aproveite uma incrível viagem ao Peru com estadia inclusiva no Sheraton Lima Historic Center, com quartos amplos com vista da cidade, varandas privativas, piscina ao ar livre, academia, Wi-Fi gratuito e estacionamento gratuito. Situado no coração do centro histórico de Lima, a apenas 30 minutos de carro do Aeroporto Internacional Jorge Chavez.
             </p>
               <p> Não perca essa oportunidade única! O hotel oferece uma variedade de opções, mas geralmente giram em torno de R$500,00 por noite. Agende sua passagem e aproveite essa experiência com um <span>desconto especial de 10%!</span>
            </p>
        </div><br>  
        <div class="info" id="info">
            <div id="chega"><h3 class="des">Partida: <p class="destin">Salvador</p></h3><h3 class="des">Destino: <p class="destin">Lima</p></h3></div> <br>
            
            <form class="data" action="" method="POST">
                <label for="dia"><h3>Dia:</h3></label>
                <input type="date" id="date13" name="date13" required> 
                <label for="diaria"><h3>Quantidade de dias: </h3></label> 
                <input type="number"  id="dias1" name= "dias1" min="1" max="5" value="<?php echo isset($_POST['dias1']) ? $_POST['dias1'] : 1; ?>">

                <input type="submit" value="Ver Preço" class="verpreço">
            </form>
            <br>
             <h3 id="valor13">Valor: <?php 
                if ($preçoTotal1 > 0) {
                    echo "R$ " . number_format($preçoTotal1, 2, ',', '.'); 
                } 
                ?>
             </h3>
        <div class="comprar">
            <button class="buttoncompra" id="buttoncompra" data-nome_pais="Peru" data-preçoTotal="<?php echo $preçoTotal; ?>" data-tipo_passagem="Pacote" data-dataIda="<?php echo $Inputdata; ?>" data-qtdDias="<?php echo $dias; ?>" data-nome_hotel="Sheraton Lima Historic Center">Comprar</button>
        </div>
    </aside>

    <aside class="pais" id="pais14">
        <div class="cima">
            <img src="../img/bandeira-chile.png" alt="chile"><h2>Chile + Hotel</h2>
            <button class="fechardesc" id="fechardesc14"> X </button>
        </div><br>
        <div >
            <img class="imgs" src="../img/foto1-magnolia.jpg" alt="foto1"><img class="imgs" src="../img/foto2-magnolia.jpg" alt="foto2"><img class="imgs" src="../img/foto3-magnolia.jpg" alt="foto3">
        </div><br>
        <div class="fala">
            <p>Aproveite uma incrível viagem ao Chile com estadia inclusiva no Hotel Magnolia Santiago, com quartos elegantes e confortáveis, localização excelente no coração de Santiago, no bairro Lastarria, Wi-Fi gratuito, café da manhã e mais.
             </p>
               <p> Não perca essa oportunidade única! O hotel oferece uma variedade de opções, mas geralmente giram em torno de R$2412,00 por noite. Agende sua passagem e aproveite essa experiência com um <span>desconto especial de 10%!</span>
            </p>
        </div><br>  
        <div class="info" id="info">
            <div id="chega"><h3 class="des">Partida: <p class="destin">Salvador</p></h3><h3 class="des">Destino: <p class="destin">Santiago</p></h3></div> <br>
        
            <form class="data" action="" method="POST">
                <label for="dia"><h3>Dia:</h3></label>
                <input type="date" id="date14" name="date14" required> 
                <label for="diaria"><h3>Quantidade de dias: </h3></label> 
                <input type="number"  id="dias2" name= "dias2" min="1" max="5" value="<?php echo isset($_POST['dias2']) ? $_POST['dias2'] : 1; ?>">

                <input type="submit" value="Ver Preço" class="verpreço">
            </form>
            </div><br>
             <h3 id="valor14">Valor: <?php 
                if ($preçoTotal2 > 0) {
                    echo "R$ " . number_format($preçoTotal2, 2, ',', '.'); 
                } 
                ?>
             </h3>
        <div class="comprar">
            <button class="buttoncompra" id="buttoncompra" data-nome_pais="Chile" data-preçoTotal="<?php echo $preçoTotal; ?>" data-tipo_passagem="Pacote" data-dataIda="<?php echo $Inputdata; ?>" data-qtdDias="<?php echo $dias; ?>" data-nome_hotel="Hotel Magnolia Santiago">Comprar</button>
        </div>
    </aside>

    <aside class="pais" id="pais15">
        <div class="cima">
            <img src="../img/bandeira-uruguai.png" alt="uruguai"><h2>Uruguai + Hotel</h2>
            <button class="fechardesc" id="fechardesc15"> X </button>
        </div><br>
        <div >
            <img class="imgs" src="../img/foto1-radisson.jpg" alt="foto1"><img class="imgs" src="../img/foto2-radisson.webp" alt="foto2"><img class="imgs" src="../img/foto3-radisson.webp" alt="foto3">
        </div><br>
        <div class="fala">
            <p>Desfrute de uma experiência única em Montevidéu com hospedagem no Radisson Montevideo Victoria Plaza Hotel!, com quartos luxuosos e confortáveis, perto de atrações turísticas como a Plaza Independencia e o Mercado del Puerto, Wi-Fi gratuito, café da manhã e mais.
             </p>
               <p> Não perca essa oportunidade única! O hotel oferece uma variedade de opções, mas geralmente giram em torno de R$924,00 por noite. Agende sua passagem e aproveite essa experiência com um <span>desconto especial de 10%!</span>
            </p>
        </div><br>  
        <div class="info" id="info">
            <div id="chega"><h3 class="des">Partida: <p class="destin">Salvador</p></h3><h3 class="des">Destino: <p class="destin">Montevidéu</p></h3></div> <br>
            <form class="data" action="" method="POST">
                <label for="dia"><h3>Dia:</h3></label>
                <input type="date" id="date15" name="date15" required> 
                <label for="diaria"><h3>Quantidade de dias: </h3></label> 
                <input type="number"  id="dias3" name= "dias3" min="1" max="5" value="<?php echo isset($_POST['dias3']) ? $_POST['dias3'] : 1; ?>">

                <input type="submit" value="Ver Preço" class="verpreço">
            </form>
            </div><br>
             <h3 id="valor15">Valor: <?php 
                if ($preçoTotal3 > 0) {
                    echo "R$ " . number_format($preçoTotal3, 2, ',', '.'); 
                } 
                ?>
             </h3>
        <div class="comprar">
            <button class="buttoncompra" id="buttoncompra" data-nome_pais="Uruguai" data-preçoTotal="<?php echo $preçoTotal; ?>" data-tipo_passagem="Pacote" data-dataIda="<?php echo $Inputdata; ?>" data-qtdDias="<?php echo $dias; ?>" data-nome_hotel="Radisson Montevideo Victoria Plaza Hotel">Comprar</button>
        </div>
    </aside>

    <aside class="pais" id="pais16">
        <div class="cima">
            <img src="../img/bandeira-bolivia.png" alt="bolivia"><h2>Bolívia + Hotel</h2>
            <button class="fechardesc" id="fechardesc16"> X </button>
        </div><br>
        <div >
            <img class="imgs" src="../img/foto1-laculta.avif" alt="foto1"><img class="imgs" src="../img/foto2-laculta.webp" alt="foto2"><img class="imgs" src="../img/foto3-laculta.avif" alt="foto3">
        </div><br>
        <div class="fala">
            <p>Desfrute de uma experiência única em Sucre com hospedagem no La Culta, Centro Cultural!, com ambiente cultural e acolhedor, perto de atrações turísticas como a Plaza 25 de Mayo e a Casa de la Libertad, localização privilegiada no bairro La Castellana, Wi-Fi gratuito, café da manhã e mais.
             </p>
               <p> Não perca essa oportunidade única! O hotel oferece uma variedade de opções, mas geralmente giram em torno de R$194,00 por noite. Agende sua passagem e aproveite essa experiência com um <span>desconto especial de 10%!</span>
            </p>
        </div><br>  
        <div class="info" id="info">
            <div id="chega"><h3 class="des">Partida: <p class="destin">Salvador</p></h3><h3 class="des">Destino: <p class="destin">Sucre</p></h3></div> <br>
            <form class="data" action="" method="POST">
                <label for="dia"><h3>Dia:</h3></label>
                <input type="date" id="date16" name="date16" required> 
                <label for="diaria"><h3>Quantidade de dias: </h3></label> 
                <input type="number"  id="dias4" name= "dias4" min="1" max="5" value="<?php echo isset($_POST['dias4']) ? $_POST['dias4'] : 1; ?>">

                <input type="submit" value="Ver Preço" class="verpreço">
            </form>
            </div><br>
             <h3 id="valor16">Valor: <?php 
                if ($preçoTotal4 > 0) {
                    echo "R$ " . number_format($preçoTotal4, 2, ',', '.'); 
                } 
                ?>
             </h3>
        <div class="comprar">
            <button class="buttoncompra" id="buttoncompra" data-nome_pais="Bolívia" data-preçoTotal="<?php echo $preçoTotal; ?>" data-tipo_passagem="Pacote" data-dataIda="<?php echo $Inputdata; ?>" data-qtdDias="<?php echo $dias; ?>" data-nome_hotel="La Culta, Centro Cultural">Comprar</button>
        </div>
    </aside>

    <aside class="pais" id="pais17">
        <div class="cima">
            <img src="../img/bandeira-venezuela.png" alt="venezuela"><h2>Venezuela + Hotel</h2>
            <button class="fechardesc" id="fechardesc17"> X </button>
        </div><br>
        <div >
            <img class="imgs" src="../img/foto1-cayenas.avif" alt="foto1"><img class="imgs" src="../img/foto2-cayenas.avif" alt="foto2"><img class="imgs" src="../img/foto3-cayena.avif" alt="foto3">
        </div><br>
        <div class="fala">
            <p>Desfrute de uma experiência única em Caracas com hospedagem no Hotel Cayena Caracas!, com quartos elegantes e confortáveis, perto de atrações turísticas como Centro Comercial Centro San Ignacio e o Campo de Golfe Country Club, Wi-Fi gratuito, café da manhã e mais.
             </p>
               <p> Não perca essa oportunidade única! O hotel oferece uma variedade de opções, mas geralmente giram em torno de R$2723,00 por noite. Agende sua passagem e aproveite essa experiência com um <span>desconto especial de 10%!</span>
            </p>
        </div><br>  
        <div class="info" id="info">
            <div id="chega"><h3 class="des">Partida: <p class="destin">Salvador</p></h3><h3 class="des">Destino: <p class="destin">Caracas</p></h3></div> <br>
            <form class="data" action="" method="POST">
                <label for="dia"><h3>Dia:</h3></label>
                <input type="date" id="date17" name="date17" required> 
                <label for="diaria"><h3>Quantidade de dias: </h3></label> 
                <input type="number"  id="dias5" name= "dias5" min="1" max="5" value="<?php echo isset($_POST['dias5']) ? $_POST['dias5'] : 1; ?>">

                <input type="submit" value="Ver Preço" class="verpreço">
            </form>
            </div><br>
             <h3 id="valor17">Valor: <?php 
                if ($preçoTotal5 > 0) {
                    echo "R$ " . number_format($preçoTotal5, 2, ',', '.'); 
                } 
                ?>
             </h3>
        <div class="comprar">
            <button class="buttoncompra" id="buttoncompra" data-nome_pais="Venezela" data-preçoTotal="<?php echo $preçoTotal; ?>" data-tipo_passagem="Pacote" data-dataIda="<?php echo $Inputdata; ?>" data-qtdDias="<?php echo $dias; ?>" data-nome_hotel="Hotel Cayena Caracas">Comprar</button>
        </div>
    </aside>


    <!--carrinho-->
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome_pais = isset($_POST['nome_pais']) ? $_POST['nome_pais'] : '';
        $tipo_passagem = isset($_POST['tipo_passagem']) ? $_POST['tipo_passagem'] : ''; 
        $preçoTotal = isset($_POST['preçoTotal']) ? $_POST['preçoTotal'] : ''; 
        $Inputdata = isset($_POST['dataParaInsercao']) ? $_POST['dataParaInsercao'] : ''; 
        $dias = isset($_POST['dias']) ? $_POST['dias'] : ''; 
        $nome_hotel = isset($_POST['nome_hotel']) ? $_POST['nome_hotel'] : ''; 

        $carrinho = [];
        $sql = "SELECT nome_país, tipo_passagem, valor_passagem, dataIda, qtdDias, nome_hotel FROM carrinho";
        $conect->select_db($bd_name);
        $result = $conect->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $carrinho[] = [
                    'nomePais' => $row["nome_país"],
                    'tipoPassagem' => $row["tipo_passagem"],
                    'preçoTotal' => $row["valor_passagem"],
                    'dataIda' => $row["dataIda"],
                    'qtdDias' => $row["qtdDias"],
                    'nomeHotel' => $row["nome_hotel"]
                ];
            }
        } else {
            $carrinho = []; 
        }}
    ?>
    <script>const carrinho = <?php echo json_encode($carrinho); ?>;
    console.log(carrinho);</script>
    <aside id="janelaCar" class="janelaCar" > 
        <div id="superior">
            <h2>Carrinho de Compras</h2> 
            <button id="fecharCarrinho"> X </button>
        </div>
        <ul id="itens-carrinho"></ul> 
        <button id="botaoFinalizar">Finalizar Compra</button> 
    </aside>
    
<!--rodapé-->

    <aside id="sobrenos">
        <div id= "sup">
            <h3>Sobre nós</h3>
            <button id="fecharsobre"> X </button>
        </div><br>
        <div id="empresa">
            <p class="emp">A American Miles é um projeto desenvolvido para facilitar a locomoção entre os países da América do Sul. Com um design funcional, a plataforma permite que os usuários busquem, comparem e reservem passagens aéreas de forma rápida e prática, promovendo a conexão entre diferentes culturas e destinos.</p> 
            <p class="emp">A identidade visual da American Miles é representada por uma arara azul, que simboliza a diversidade da fauna sul-americana e reflete o compromisso da empresa com a natureza. O mascote também evoca a liberdade que cada viagem proporciona, lembrando que cada jornada é uma oportunidade para criar novas memórias.</p> 
            <p class="emp">Seja para uma escapada de fim de semana ou uma longa aventura, a American Miles oferece uma ferramenta eficaz para explorar a riqueza da América do Sul.</p>

        </div>
    </aside>

    <footer id="rodapé">
        <div id="conteudoRoda">
           
        <button id="botao1">Sobre nós ⇩</button>
        <a href="https://pin.it/7yxmng0dQ" id="botao3">Pinterest</a>
        <p> <b>Contato</b> <br><br>
            0800 4002 <br>
            americammiles@gmail.com</p>
        </div>
    </footer>
</body>
<script src="../PaginaInicial/inicial.js"></script>
</html>