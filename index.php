<html>    
    <head>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="./style.css" rel="stylesheet" type="text/css">
        <title>Detalhes da saga Star Wars</title>
    </head>
    <body>
        <div class="container bg-secondary bg-gradient">
            <?php
            $opcoes = array("inicio","personagens","planetas","filmes","naves");
            echo "
                    <ul class='nav justify-content-center'>";
            foreach($opcoes as $item){
                echo "<li class='nav-item'>";
                echo "<a href='?show=$item' class='nav-link text-white'>".ucwords($item)."</a>";
                echo "</li>";
            }
            echo"   </ul>
                
                <hr>";
            
            $exibir = isset($_GET["show"]) ? $_GET['show'] : "";
            switch ($exibir){

                case "planetas":
                    include_once("planetas.php");
                    break;

                case "personagens":
                    include_once("personagens.php");
                    break;

                case "filmes":
                    include_once("filmes.php");
                    break;
                
                case "naves":
                    include_once("naves.php");
                    break;
                
                default:
                    echo "
                    <h2 class='text-white'>Ideia do projeto</h2>
                    <p class='text-white'>Projeto criado para demonstrar o consumo de uma API com PHP utilizando a <a href='swapi.dev' class='text-white'>SWAPI.</a>
                    <h2 class='text-white'>SWAPI</h2>
                    <p class='text-white'>Segundo <a href='swapi.dev' class='text-white'>swapi.dev</a>:<br>\"A API Star Wars, ou 'swapi' (Swah-pee) é a primeira fonte de dados quantificada e programaticamente acessível para todos os dados do universo canônico de Star Wars!
                    <br>Pegamos todo o material contextual rico do universo e formatamos em algo mais fácil de consumir com software. Em seguida, colocamos uma API na frente para que você possa acessar tudo!\"</p>
                    <div class='text-center'>
                        <img src='./imagens/image.jpg' class='img-fluid mx-auto' alt='Imagem Star Wars'>
                    </div>
                    ";
            }
            ?>
            <hr>
        </div>
    </body>
</html>
