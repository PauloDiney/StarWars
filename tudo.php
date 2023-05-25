<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.cdnfonts.com/css/redfive" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/charter-itc-tt" rel="stylesheet">
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
            echo "<div class=nomeator>";
            echo "<h1>Personagem</h1>";
            echo "<a href=index.php><input class=button type=submit name='personagem' style='--color:yellow;cursor:pointer;' value='Voltar'></a>";
            echo "</div>";
            $url = "https://swapi.dev/api/people/";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $resultado = json_decode(curl_exec($ch));
            echo "<div class=quadarruma>";
            foreach ($resultado->results as $ator) {
                echo "<form method=post action=ator.php>";
                echo "<button class=quad>";
                echo "<img src='StarFotos/StarFotos/$ator->name.png' width=auto height=150px>";
                echo "<input type=hidden name='personagem' value='$ator->name'>";
                echo "<input type=hidden name='link' value='$url'>";
                echo "<center><h1>" . $ator->name . "</h1><br></center>";
                echo "</button>";
                echo "</form>";
            }
            $url = "https://swapi.dev/api/people/?page=2";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $resultado = json_decode(curl_exec($ch));
            foreach ($resultado->results as $ator) {
                echo "<form method=post action=ator.php>";
                echo "<button class=quad>";
                echo "<img src='StarFotos/StarFotos/$ator->name.png' width=auto height=150px>";
                echo "<input type=hidden name=personagem value='$ator->name'>";
                echo "<input type=hidden name='link' value='$url'>";
                echo "<center><h1>" . $ator->name . "</h1><br></center>";
                echo "</button>";
                echo "</form>";
            }
            $url = "https://swapi.dev/api/people/?page=3";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $resultado = json_decode(curl_exec($ch));
            foreach ($resultado->results as $ator) {
                echo "<form method=post action=ator.php>";
                echo "<button class=quad>";
                echo "<img src='StarFotos/StarFotos/$ator->name.png' width=auto height=150px>";
                echo "<input type=hidden name=personagem value='$ator->name'>";
                echo "<input type=hidden name='link' value='$url'>";
                echo "<center><h1>" . $ator->name . "</h1><br></center>";
                echo "</button>";
                echo "</form>";
            }
            $url = "https://swapi.dev/api/people/?page=4";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $resultado = json_decode(curl_exec($ch));
            foreach ($resultado->results as $ator) {
                echo "<form method=post action=ator.php>";
                echo "<button class=quad>";
                echo "<img src='StarFotos/StarFotos/$ator->name.png' width=auto height=150px>";
                echo "<input type=hidden name=personagem value='$ator->name'>";
                echo "<input type=hidden name='link' value='$url'>";
                echo "<center><h1>" . $ator->name . "</h1><br></center>";
                echo "</button>";
                echo "</form>";
            }
            $url = "https://swapi.dev/api/people/?page=5";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $resultado = json_decode(curl_exec($ch));
            foreach ($resultado->results as $ator) {
                echo "<form method=post action=ator.php>";
                echo "<button class=quad>";
                echo "<img src='StarFotos/StarFotos/$ator->name.png' width=auto height=150px>";
                echo "<input type=hidden name=personagem value='$ator->name'>";
                echo "<input type=hidden name='link' value='$url'>";
                echo "<center><h1>" . $ator->name . "</h1><br></center>";
                echo "</button>";
                echo "</form>";
            }
            $url = "https://swapi.dev/api/people/?page=6";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $resultado = json_decode(curl_exec($ch));
            foreach ($resultado->results as $ator) {
                echo "<form method=post action=ator.php>";
                echo "<button class=quad>";
                echo "<img src='StarFotos/StarFotos/$ator->name.png' width=auto height=150px>";
                echo "<input type=hidden name=personagem value='$ator->name'>";
                echo "<input type=hidden name='link' value='$url'>";
                echo "<center><h1>" . $ator->name . "</h1><br></center>";
                echo "</button>";
                echo "</form>";
            }
            $url = "https://swapi.dev/api/people/?page=7";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $resultado = json_decode(curl_exec($ch));
            foreach ($resultado->results as $ator) {
                echo "<form method=post action=ator.php>";
                echo "<button class=quad>";
                echo "<img src='StarFotos/StarFotos/$ator->name.png' width=auto height=150px>";
                echo "<input type=hidden name=personagem value='$ator->name'>";
                echo "<input type=hidden name='link' value='$url'>";
                echo "<center><h1>" . $ator->name . "</h1><br></center>";
                echo "</button>";
                echo "</form>";
            }
            $url = "https://swapi.dev/api/people/?page=8";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $resultado = json_decode(curl_exec($ch));
            foreach ($resultado->results as $ator) {
                echo "<form method=post action=ator.php>";
                echo "<button class=quad>";
                echo "<img src='StarFotos/StarFotos/$ator->name.png' width=auto height=150px>";
                echo "<input type=hidden name=personagem value='$ator->name'>";
                echo "<input type=hidden name='link' value='$url'>";
                echo "<center><h1>" . $ator->name . "</h1><br></center>";
                echo "</button>";
                echo "</form>";
            }
            $url = "https://swapi.dev/api/people/?page=9";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $resultado = json_decode(curl_exec($ch));
            foreach ($resultado->results as $ator) {
                echo "<form method=post action=ator.php>";
                echo "<button class=quad>";
                echo "<img src='StarFotos/StarFotos/$ator->name.png' width=auto height=150px>";
                echo "<input type=hidden name=personagem value='$ator->name'>";
                echo "<input type=hidden name='link' value='$url'>";
                echo "<center><h1>" . $ator->name . "</h1><br></center>";
                echo "</button>";
                echo "</form>";
            }
            echo "</div>";
        } else if ($_POST["filme"]) {
            echo "<div class=nomeator>";
            echo "<h1>Filmes</h1>";
            echo "<a href=index.php><input class=button type=submit name='personagem' style='--color:yellow;cursor:pointer;' value='Voltar'></a>";
            echo "</div>";
            $url = "https://swapi.dev/api/films";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $resultado = json_decode(curl_exec($ch));
            echo "<div class=quadarruma>";
            foreach ($resultado->results as $ator) {
                echo "<form method=post action=filmes.php>";
                echo "<button class=quad>";
                echo "<input type=hidden name='filme' value='$ator->title'>";
                echo "<input type=hidden name='link' value='$url'>";
                echo "<img src='StarFotos/StarFilmes/$ator->title.png' width=auto height=150px>";
                echo "<center><h1>" . $ator->title  . "</h1><br></center>";
                echo "</button>";
                echo "</form>";
            }
            echo "</div>";
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
                echo "<img src='StarFotos/StarPlanetas/$ator->name.png' width=auto height=150px>";
                echo "<center><h1>" . $ator->name . "</h1><br></center>";
                echo "</div>";
            }
            $url = "https://swapi.dev/api/planets/?page=2";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $resultado = json_decode(curl_exec($ch));
            foreach ($resultado->results as $ator) {
                echo "<div class=quad>";
                echo "<img src='StarFotos/StarPlanetas/$ator->name.png' width=auto height=150px>";
                echo "<center><h1>" . $ator->name . "</h1><br></center>";
                echo "</div>";
            }
            $url = "https://swapi.dev/api/planets/?page=3";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $resultado = json_decode(curl_exec($ch));
            foreach ($resultado->results as $ator) {
                echo "<div class=quad>";
                echo "<img src='StarFotos/StarPlanetas/$ator->name.png' width=auto height=150px>";
                echo "<center><h1>" . $ator->name . "</h1><br></center>";
                echo "</div>";
            }
            $url = "https://swapi.dev/api/planets/?page=4";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $resultado = json_decode(curl_exec($ch));
            foreach ($resultado->results as $ator) {
                echo "<div class=quad>";
                echo "<img src='StarFotos/StarPlanetas/$ator->name.png' width=auto height=150px>";
                echo "<center><h1>" . $ator->name . "</h1><br></center>";
                echo "</div>";
            }
            $url = "https://swapi.dev/api/planets/?page=5";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $resultado = json_decode(curl_exec($ch));
            foreach ($resultado->results as $ator) {
                echo "<div class=quad>";
                echo "<img src='StarFotos/StarPlanetas/$ator->name.png' width=auto height=150px>";
                echo "<center><h1>" . $ator->name . "</h1><br></center>";
                echo "</div>";
            }
            echo "</div>";
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
                echo "<img src='$ator->name.png' width=150px height=150px>";
                echo "<center><h1>" . $ator->name . "</h1><br></center>";
                echo "</div>";
            }
            $url = "https://swapi.dev/api/species/?page=2";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $resultado = json_decode(curl_exec($ch));
            foreach ($resultado->results as $ator) {
                echo "<div class=quad>";
                echo "<img src='$ator->name.png' width=150px height=150px>";
                echo "<center><h1>" . $ator->name . "</h1><br></center>";
                echo "</div>";
            }
            $url = "https://swapi.dev/api/species/?page=3";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $resultado = json_decode(curl_exec($ch));
            foreach ($resultado->results as $ator) {
                echo "<div class=quad>";
                echo "<img src='$ator->name.png' width=150px height=150px>";
                echo "<center><h1>" . $ator->name . "</h1><br></center>";
                echo "</div>";
            }
            $url = "https://swapi.dev/api/species/?page=4";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $resultado = json_decode(curl_exec($ch));
            foreach ($resultado->results as $ator) {
                echo "<div class=quad>";
                echo "<img src='$ator->name.png' width=150px height=150px>";
                echo "<center><h1>" . $ator->name . "</h1><br></center>";
                echo "</div>";
            }
            echo "</div>";
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
                echo "<img src='$ator->name.png' width=150px height=150px>";
                echo "<center><h1>" . $ator->name . "</h1><br></center>";
                echo "</div>";
            }
            $url = "https://swapi.dev/api/vehicles/?page=2";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $resultado = json_decode(curl_exec($ch));
            foreach ($resultado->results as $ator) {
                echo "<div class=quad>";
                echo "<img src='$ator->name.png' width=150px height=150px>";
                echo "<center><h1>" . $ator->name . "</h1><br></center>";
                echo "</div>";
            }
            $url = "https://swapi.dev/api/vehicles/?page=3";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $resultado = json_decode(curl_exec($ch));
            foreach ($resultado->results as $ator) {
                echo "<div class=quad>";
                echo "<img src='$ator->name.png' width=150px height=150px>";
                echo "<center><h1>" . $ator->name . "</h1><br></center>";
                echo "</div>";
            }
            $url = "https://swapi.dev/api/vehicles/?page=4";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $resultado = json_decode(curl_exec($ch));
            foreach ($resultado->results as $ator) {
                echo "<div class=quad>";
                echo "<img src='$ator->name.png' width=150px height=150px>";
                echo "<center><h1>" . $ator->name . "</h1><br></center>";
                echo "</div>";
            }
            echo "</div>";
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
                echo "<img src='$ator->name.png' width=150px height=150px>";
                echo "<center><h1>" . $ator->name . "</h1><br></center>";
                echo "</div>";
            }
            $url = "https://swapi.dev/api/starships/?page=2";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $resultado = json_decode(curl_exec($ch));
            foreach ($resultado->results as $ator) {
                echo "<div class=quad>";
                echo "<img src='$ator->name.png' width=150px height=150px>";
                echo "<center><h1>" . $ator->name . "</h1><br></center>";
                echo "</div>";
            }
            $url = "https://swapi.dev/api/starships/?page=3";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $resultado = json_decode(curl_exec($ch));
            foreach ($resultado->results as $ator) {
                echo "<div class=quad>";
                echo "<img src='$ator->name.png' width=150px height=150px>";
                echo "<center><h1>" . $ator->name . "</h1><br></center>";
                echo "</div>";
            }
            $url = "https://swapi.dev/api/starships/?page=4";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $resultado = json_decode(curl_exec($ch));
            foreach ($resultado->results as $ator) {
                echo "<div class=quad>";
                echo "<img src='$ator->name.png' width=150px height=150px>";
                echo "<center><h1>" . $ator->name . "</h1><br></center>";
                echo "</div>";
            }
            echo "</div>";
        }
        ?>
    </div>


</body>

</html>