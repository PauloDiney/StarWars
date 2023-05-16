<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Star Wars</title>
</head>

<body>
    <video id="background-video" autoplay muted loop>
        <source src="fundo.mp4" type="video/mp4">
    </video>
    <div>
        <?php
        error_reporting(0);
        if ($_POST["personagem"]) {
            echo "<h1 style=color:white;>Personagem</h1>";
            echo "<a href=index.php>Voltar</a>";
            $url = "https://swapi.dev/api/people";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $resultado = json_decode(curl_exec($ch));
            echo "<div class=quadarruma>";
            foreach ($resultado->results as $ator) {
                echo "<div class=quad>";
                echo "<img src='$ator->name.png' width=150px height=150px>";
                echo "<h1>" . $ator->name . "</h1><br>";
                echo "</div>";
            }
            echo "</div>";
        } else if ($_POST["filme"]) {
            echo "<h1 style=color:white;>Filmes</h1>";
            echo "<a href=index.php>Voltar</a>";
            $url = "https://swapi.dev/api/films";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $resultado = json_decode(curl_exec($ch));
            echo "<div class=quadarruma>";
            foreach ($resultado->results as $ator) {
                echo "<div class=quad>";
              
                echo "Nome: " . $ator->title . "<br>";
                echo "</div>";
            }
        } else if ($_POST["planeta"]) {
            echo "<h1 style=color:white;>Planetas</h1>";
            echo "<a href=index.php>Voltar</a>";
            $url = "https://swapi.dev/api/planets";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $resultado = json_decode(curl_exec($ch));
            echo "<div class=quadarruma>";
            foreach ($resultado->results as $ator) {
                echo "<div class=quad>";
              
                echo "Nome: " . $ator->name . "<br>";
                echo "</div>";
            }
        } else if ($_POST["especies"]) {
            echo "<h1 style=color:white;>Especies</h1>";
            echo "<a href=index.php>Voltar</a>";
            $url = "https://swapi.dev/api/species";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $resultado = json_decode(curl_exec($ch));
            echo "<div class=quadarruma>";
            foreach ($resultado->results as $ator) {
                echo "<div class=quad>";
              
                echo "Nome: " . $ator->name . "<br>";
                echo "</div>";
            }
        } else if ($_POST["veiculos"]) {
            echo "<h1 style=color:white;>Veiculos</h1>";
            echo "<a href=index.php>Voltar</a>";
            $url = "https://swapi.dev/api/vehicles";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $resultado = json_decode(curl_exec($ch));
            echo "<div class=quadarruma>";
            foreach ($resultado->results as $ator) {
                echo "<div class=quad>";
              
                echo "Nome: " . $ator->name . "<br>";
                echo "</div>";
            }
        } else if ($_POST["naves"]) {
            echo "<h1 style=color:white;>Naves</h1>";
            echo "<a href=index.php>Voltar</a>";
            $url = "https://swapi.dev/api/starships";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $resultado = json_decode(curl_exec($ch));
            echo "<div class=quadarruma>";
            foreach ($resultado->results as $ator) {
                echo "<div class=quad>";
              
                echo "Nome: " . $ator->name . "<br>";
                echo "</div>";
            }
        }
        ?>
    </div>


</body>

</html>