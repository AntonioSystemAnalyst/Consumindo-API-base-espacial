<?php 


 $cont = 0;

 function Carrocel ()
 {
     $cont = $cont + 1;
     
     if ($cont == 0)
     {
          echo ' <h1>Estação Espacial Internacional</h1> <img src="img/logoCab1.png" alt="Orphew" class="w3-image" width="80%">';
     }
     if ($cont == 1)
     {
        echo '<h1>Estação Espacial Internacional</h1><img src="img/logoCab2.jpg" alt="Orphew" class="w3-image" width="80%">';
     }
     if ($cont == 2)
     {
        echo '<h1>Estação Espacial Internacional</h1><img src="img/logoCab2.jpg" alt="Orphew" class="w3-image" width="80%">';
     } 
 }


?>
<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rastreando ISS</title>
    <link rel="stylesheet" href="framwork\w3.css">
    </link>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </link>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="shortcut icon" href="img/Satelite.ico" type="image/x-icon">
    <style>


        .w3-sidebar {
            width: 180px;
            background: #222;
        }

        body,
        p,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Montserrat", sans-serif
        }

        #main {
            margin-left: 180px;
        }

        div {
            background-image: url("img/sky.png");
            background-position: right center;
            background-size: 1000px;
        }
    </style>
    <script>
        var tag = document.createElement('script');
        tag.src = "https://www.youtube.com/player_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        var player;
        function onYouTubePlayerAPIReady() {
            player = new YT.Player('ytplayer', {
                playerVars: { 'autoplay': 1 },
                height: '500',
                width: '1000',
                videoId: 'DDU-rZs-Ic4'

            });
            player.playVideo();
        }
        function onPlayerReady(event) {
            player.playVideo();
        }
    </script>
</head>

<body class="w3-black">
    <nav class="w3-sidebar w3-bar-block w3-center w3-hide-small">
        <!-- Home -->
        <a href="#home" class="w3-bar-item w3-button w3-padding-large w3-hover-black w3-hover-text-cyan w3-text-white">
            <i class='fas fa-satellite  w3-xxlarge'></i>
            <p>Home</p>
        </a>
        <!-- Sobre -->
        <a href="#sobre" class="w3-bar-item w3-button w3-padding-large w3-hover-black w3-hover-text-cyan w3-text-white">
            <i class="fas fa-user-astronaut w3-xxlarge"></i>
            <p>ISS</p>
        </a>
        <!-- Grade Curricular -->

        <!-- Grade Curricular -->
        <a href="#dados"
            class="w3-bar-item w3-button w3-padding-large w3-hover-black w3-hover-text-cyan w3-text-white">
            <i class="fa fa-satellite-dish w3-xxlarge"></i>
            <p>Dados em tempo real</p>
        </a>
        <!-- Mercado de trabalho fab fa-youtube -->
        <a href="#live" class="w3-bar-item w3-button w3-padding-large w3-hover-black w3-hover-text-cyan w3-text-white">
            <i class="fab fa-youtube w3-xxlarge"></i>
            <p>Tempo real</p>
        </a>

        <!-- Tecnologias -->
        <!-- Contato -->
        <a href="#contato"
            class="w3-bar-item w3-button w3-padding-large w3-hover-black w3-hover-text-cyan w3-text-white">
            <i class="fa fa-envelope w3-xxlarge"></i>
            <p>Contato</p>
        </a>
    </nav>


    <div class="w3-padding-large" id="main">
        <header class="w3-container w3-padding-32 w3-center" id="home">
             <?php Carrocel(); ?>
            <br>
        </header>

        <div class="w3-content" id="sobre">
            <h2 class="w3-text-white"> International Space Station - ISS</h2>
            <hr style="width:200px" class="w3-opacity">
            <p style="font-size: large;">É um laboratório espacial completamente concluído, cuja montagem em órbita
                começou em 1998 e terminou oficialmente em 8 de julho de 2011 na missão STS-135, com o ônibus espacial
                Atlantis. A estação encontra-se em uma órbita baixa de 408 x 418 km, que possibilita ser vista da Terra
                a olho nu, e viaja a uma velocidade média de 27 700 km/h, completando 15,70 órbitas por dia. </p>
            <p style="font-size: large;">A estação espacial encontra-se em órbita da Terra a uma altitude de
                aproximadamente 400 quilômetros, uma órbita tipicamente designada de órbita terrestre baixa. Devido à
                baixa altitude, a estação precisa ser constantemente reposicionada na órbita devido ao arrasto
                aerodinâmico. A estação perde, em média, 100 metros de altitude por dia e orbita a Terra num período de
                cerca de 92 minutos. Em 27 de junho de 2008 (às 01h01 UTC) completou 55 mil órbitas desde o lançamento
                do módulo Zarya, o primeiro a ser lançado ao espaço. É comum associar à estação um estado de "gravidade
                zero", criando-se assim alguma confusão, pois tal gravidade zero não ocorre. A gravidade na estação
                espacial, tendo em conta um raio terrestre de 6 378,1 km, é de 8,3 m/s² a 8,4 m/s², pela igualdade da
                Lei da Gravitação Universal (LGU) e o peso, o que é considerável. O efeito "gravidade zero" ocorre
                porque a estação está "a cair eternamente" devido à curva originada pela "força centrípeta" a que está
                sujeita. </p>
            <p style="font-size: large;">A construção da EEI dependeu de mais de 50 missões de montagem e utilização.
                Destas, 39 foram assistidas pelo ônibus espacial. Adicionalmente a estas missões, aproximadamente 30
                missões da nave Progress foram necessárias para providenciar a logística. No final, a EEI ficou a operar
                com um volume de pressurização de 1 200 metros cúbicos, uma massa total superior a 419 000 quilogramas,
                110 kilowatts de potência e uma estrutura de suporte de 108,4 metros de comprimento, com módulos de 74
                metros e tripulações de seis elementos. Fonte: <a href="https://pt.wikipedia.org/wiki/Esta%C3%A7%C3%A3o_Espacial_Internacional"
                    target="_blank">https://pt.wikipedia.org</a></p>
        </div>

        <div class="w3-content" id="dados">
        <h2 class="w3-text-white"> Rastreando dados da ISS em tempo real</h2>
            <hr style="width:200px" class="w3-opacity">
            <?php
               $url= "https://api.wheretheiss.at/v1/satellites/25544";
               $dados = json_decode(file_get_contents($url));
            ?>
            <table class="w3-ul w3-hoverable w3-center w3-black">
             <tr colspan="2">
                 <td  class="w3-cyan w3-xlarge w3-padding-32" style = " width: 200px;">Nome</td>
                 <td  class="w3-cyan w3-xlarge w3-padding-32">ID</td>
                 <td  class="w3-cyan w3-xlarge w3-padding-32">Latitude</td>
                 <td  class="w3-cyan w3-xlarge w3-padding-32">Longitude</td>
                 <td  class="w3-cyan w3-xlarge w3-padding-32">Altitude</td>
                 <td  class="w3-cyan w3-xlarge w3-padding-32">Velocidade</td>
            </tr>
            <tr>
                 <td  class="w3-cyan w3-xlarge w3-padding-32" style = " width: 200px;"> <?php echo ''.$dados->name?></td>
                 <td  class="w3-cyan w3-xlarge w3-padding-32" style = " width: 200px;"><?php echo ''.$dados->id?></td>
                 <td  class="w3-cyan w3-xlarge w3-padding-32" style = " width: 200px;"><?php echo ''.round($dados->latitude, 3); ?></td>
                 <td  class="w3-cyan w3-xlarge w3-padding-32" style = " width: 200px;"><?php echo ''.round($dados->longitude,3);?></td>
                 <td  class="w3-cyan w3-xlarge w3-padding-32" style = " width: 200px;"><?php echo ''.round($dados->altitude,3)?></td>
                 <td  class="w3-cyan w3-xlarge w3-padding-32 "style = "width: 200px;"><?php echo ''.round($dados->velocity,3)?></td>
            </tr>
            </table>
            <table class="w3-ul w3-hoverable w3-center w3-black">
             <tr>
                 <td  class="w3-cyan w3-xlarge w3-padding-32"  style = " width: 200px;">Visibilidade</td>
                 <td  class="w3-cyan w3-xlarge w3-padding-32"  style = " width: 200px;">Latitude Solar</td>
                 <td  class="w3-cyan w3-xlarge w3-padding-32"  style = " width: 200px;">Longitude Solar</td>
                 <td  class="w3-cyan w3-xlarge w3-padding-32"  style = " width: 200px;">FootPrint</td>
                 <td  class="w3-cyan w3-xlarge w3-padding-32"  style = " width: 200px;">TimesTamp</td>
            </tr>
            <br>
            <tr>
                 <td  class="w3-cyan w3-xlarge w3-padding-32"  style = " width: 200px;"> <?php echo ''.$dados->visibility?></td>
                 <td  class="w3-cyan w3-xlarge w3-padding-32"  style = " width: 200px;"><?php echo ''.round($dados->solar_lat,3)?></td>
                 <td  class="w3-cyan w3-xlarge w3-padding-32"  style = " width: 200px;"><?php echo ''.round($dados->solar_lon,3)?></td>
                 <td  class="w3-cyan w3-xlarge w3-padding-32"  style = " width: 200px;"><?php echo ''.round($dados->footprint,3)?></td>
                 <td  class="w3-cyan w3-xlarge w3-padding-32"  style = " width: 200px;"><?php echo ''.round($dados->timestamp,3)?></td>
            </tr>
            </table>
            <br>
            <div class="w3-center">
            <button onClick="window.location.reload();" name="btn" class="w3-button w3-block w3-cyan w3-cell " style="width: 50%;">
            Valores em unidades de (km) - Atualizar &nbsp <i class="fas fa-satellite-dish"></i>
            </button>
            </div>

           
        </div>
        
        <br>
        <br>
        <div class="w3-content" id="live">
            <h2 class="w3-text-white"> ISS em tempo real</h2>
            <hr style="width:200px" class="w3-opacity">
            <div id="ytplayer">
                <script> player.playVideo();</script>
            </div>
        </div>


        <div class="w3-content" id="contato">
            <h2 class="w3-text-cyan">Contato</h2>
            <hr style="width:200px" class="w3-opacity">
            <div class="w3-section">

                <p>
                    <i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"></i>
                </p>
            </div>
            <p>Entre em contato conosco:</p>
            <form>
                <p>
                    <imput class="w3-input w3-padding-16" type="text" placeholder="Nome" required name="Nome">
                </p>
                <p>
                    <input class="w3-input w3-padding-16" type="text" placeholder="Email" required name="Email">
                </p>
                <p>
                    <input class="w3-input w3-padding-16" type="text" placeholder="Assunto" required name="Assunto">
                <p>
                    <input class="w3-input w3-padding-16" placeholder="Menssagem" required name="Mensagem">
                </p>
                <br>
                <br>
                <br>
                <p>
                    <button class="w3-button w3-light-grey w3-padding-large" type="submit">
                        <i class="fa fa-paper-plane"></i> Enviar Mensagem </button>
                </p>
            </form>
            <br>
            <br>
            <br>
            <br>
        </div>

    </div>
</body>

</html>