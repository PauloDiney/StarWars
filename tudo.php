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
            $a = 0;
            foreach ($resultado->results as $ator) {
                $a = $a + 1;
                echo "<form method=post action=ator.php>";
                echo "<button class=quad>";
                echo "<img src='StarFotos/StarFotos/$ator->name.png' width=auto height=150px>";
                echo "<input type=hidden name='personagem' value='$ator->name'>";
                echo "<input type=hidden name='link' value='$url$a'>";
                echo "<center><h1>" . $ator->name . "</h1><br></center>";
                echo "</button>";
                echo "</form>";
            }
            $url = "https://swapi.dev/api/people/?page=2";
            $url2 = "https://swapi.dev/api/people/";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $resultado = json_decode(curl_exec($ch));
            foreach ($resultado->results as $ator) {
                if($a == 16){
                    $a = $a + 1;
                }
                $a = $a + 1;
                echo "<form method=post action=ator.php>";
                echo "<button class=quad>";
                echo "<img src='StarFotos/StarFotos/$ator->name.png' width=auto height=150px>";
                echo "<input type=hidden name=personagem value='$ator->name'>";
                echo "<input type=hidden name='link' value='$url2$a'>";
                echo "<center><h1>" . $ator->name . "</h1><br></center>";
                echo "</button>";
                echo "</form>";
            }
            $url = "https://swapi.dev/api/people/?page=3";
            $url2 = "https://swapi.dev/api/people/";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $resultado = json_decode(curl_exec($ch));
            foreach ($resultado->results as $ator) {
                $a = $a + 1;
                echo "<form method=post action=ator.php>";
                echo "<button class=quad>";
                echo "<img src='StarFotos/StarFotos/$ator->name.png' width=auto height=150px>";
                echo "<input type=hidden name=personagem value='$ator->name'>";
                echo "<input type=hidden name='link' value='$url2$a'>";
                echo "<center><h1>" . $ator->name . "</h1><br></center>";
                echo "</button>";
                echo "</form>";
            }
            $url = "https://swapi.dev/api/people/?page=4";
            $url2 = "https://swapi.dev/api/people/";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $resultado = json_decode(curl_exec($ch));
            foreach ($resultado->results as $ator) {
                $a = $a + 1;
                echo "<form method=post action=ator.php>";
                echo "<button class=quad>";
                echo "<img src='StarFotos/StarFotos/$ator->name.png' width=auto height=150px>";
                echo "<input type=hidden name=personagem value='$ator->name'>";
                echo "<input type=hidden name='link' value='$url2$a'>";
                echo "<center><h1>" . $ator->name . "</h1><br></center>";
                echo "</button>";
                echo "</form>";
            }
            $url = "https://swapi.dev/api/people/?page=5";
            $url2 = "https://swapi.dev/api/people/";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $resultado = json_decode(curl_exec($ch));
            foreach ($resultado->results as $ator) {
                $a = $a + 1;
                echo "<form method=post action=ator.php>";
                echo "<button class=quad>";
                echo "<img src='StarFotos/StarFotos/$ator->name.png' width=auto height=150px>";
                echo "<input type=hidden name=personagem value='$ator->name'>";
                echo "<input type=hidden name='link' value='$url2$a'>";
                echo "<center><h1>" . $ator->name . "</h1><br></center>";
                echo "</button>";
                echo "</form>";
            }
            $url = "https://swapi.dev/api/people/?page=6";
            $url2 = "https://swapi.dev/api/people/";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $resultado = json_decode(curl_exec($ch));
            foreach ($resultado->results as $ator) {
                $a = $a + 1;
                echo "<form method=post action=ator.php>";
                echo "<button class=quad>";
                echo "<img src='StarFotos/StarFotos/$ator->name.png' width=auto height=150px>";
                echo "<input type=hidden name=personagem value='$ator->name'>";
                echo "<input type=hidden name='link' value='$url2$a'>";
                echo "<center><h1>" . $ator->name . "</h1><br></center>";
                echo "</button>";
                echo "</form>";
            }
            $url = "https://swapi.dev/api/people/?page=7";
            $url2 = "https://swapi.dev/api/people/";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $resultado = json_decode(curl_exec($ch));
            foreach ($resultado->results as $ator) {
                $a = $a + 1;
                echo "<form method=post action=ator.php>";
                echo "<button class=quad>";
                echo "<img src='StarFotos/StarFotos/$ator->name.png' width=auto height=150px>";
                echo "<input type=hidden name=personagem value='$ator->name'>";
                echo "<input type=hidden name='link' value='$url2$a'>";
                echo "<center><h1>" . $ator->name . "</h1><br></center>";
                echo "</button>";
                echo "</form>";
            }
            $url = "https://swapi.dev/api/people/?page=8";
            $url2 = "https://swapi.dev/api/people/";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $resultado = json_decode(curl_exec($ch));
            foreach ($resultado->results as $ator) {
                $a = $a + 1;
                echo "<form method=post action=ator.php>";
                echo "<button class=quad>";
                echo "<img src='StarFotos/StarFotos/$ator->name.png' width=auto height=150px>";
                echo "<input type=hidden name=personagem value='$ator->name'>";
                echo "<input type=hidden name='link' value='$url2$a'>";
                echo "<center><h1>" . $ator->name . "</h1><br></center>";
                echo "</button>";
                echo "</form>";
            }
            $url = "https://swapi.dev/api/people/?page=9";
            $url2 = "https://swapi.dev/api/people/";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $resultado = json_decode(curl_exec($ch));
            foreach ($resultado->results as $ator) {
                $a = $a + 1;
                echo "<form method=post action=ator.php>";
                echo "<button class=quad>";
                echo "<img src='StarFotos/StarFotos/$ator->name.png' width=auto height=150px>";
                echo "<input type=hidden name=personagem value='$ator->name'>";
                echo "<input type=hidden name='link' value='$url2$a'>";
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
            $url = "https://swapi.dev/api/films/";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $resultado = json_decode(curl_exec($ch));
            echo "<div class=quadarruma>";
            $a = 0;
            foreach ($resultado->results as $ator) {
                $a = $a + 1;
                echo "<form method=post action=filmes.php>";
                echo "<button class=quad>";
                echo "<input type=hidden name='filme' value='$ator->title'>";
                echo "<input type=hidden name='link' value='$url$a'>";
                echo "<img src='StarFotos/StarFilmes/$ator->title.png' width=auto height=150px>";
                echo "<center><h1>" . $ator->title  . "</h1><br></center>";
                echo "</button>";
                echo "</form>";
            }
            echo "</div>";
        } else if ($_POST["planeta"]) {
            echo "<div class=nomeator>";
            echo "<h1>Planetas</h1>";
            echo "<a href=index.php><input class=button type=submit name='personagem' style='--color:yellow;cursor:pointer;' value='Voltar'></a>";
            echo "</div>";
            $url = "https://swapi.dev/api/planets";
            $url2 = "https://swapi.dev/api/planets/";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $resultado = json_decode(curl_exec($ch));
            echo "<div class=quadarruma>";
            $a = 0;
            foreach ($resultado->results as $ator) {
                $a = $a + 1;
                echo "<form method=post action=planetas.php>";
                echo "<button class=quad>";
                echo "<img src='StarFotos/StarPlanetas/$ator->name.png' width=auto height=150px>";
                echo "<input type=hidden name=personagem value='$ator->name'>";
                echo "<input type=hidden name='link' value='$url2$a'>";
                echo "<center><h1>" . $ator->name . "</h1><br></center>";
                echo "</button>";
                echo "</form>";
            }
            $url = "https://swapi.dev/api/planets/?page=2";
            $url2 = "https://swapi.dev/api/planets/";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $resultado = json_decode(curl_exec($ch));
            foreach ($resultado->results as $ator) {
                $a = $a + 1;
                echo "<form method=post action=planetas.php>";
                echo "<button class=quad>";
                echo "<img src='StarFotos/StarPlanetas/$ator->name.png' width=auto height=150px>";
                echo "<input type=hidden name=personagem value='$ator->name'>";
                echo "<input type=hidden name='link' value='$url2$a'>";
                echo "<center><h1>" . $ator->name . "</h1><br></center>";
                echo "</button>";
                echo "</form>";
            }
            $url = "https://swapi.dev/api/planets/?page=3";
            $url2 = "https://swapi.dev/api/planets/";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $resultado = json_decode(curl_exec($ch));
            foreach ($resultado->results as $ator) {
                $a = $a + 1;
                echo "<form method=post action=planetas.php>";
                echo "<button class=quad>";
                echo "<img src='StarFotos/StarPlanetas/$ator->name.png' width=auto height=150px>";
                echo "<input type=hidden name=personagem value='$ator->name'>";
                echo "<input type=hidden name='link' value='$url2$a'>";
                echo "<center><h1>" . $ator->name . "</h1><br></center>";
                echo "</button>";
                echo "</form>";
            }
            $url = "https://swapi.dev/api/planets/?page=4";
            $url2 = "https://swapi.dev/api/planets/";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $resultado = json_decode(curl_exec($ch));
            foreach ($resultado->results as $ator) {
                $a = $a + 1;
                echo "<form method=post action=planetas.php>";
                echo "<button class=quad>";
                echo "<img src='StarFotos/StarPlanetas/$ator->name.png' width=auto height=150px>";
                echo "<input type=hidden name=personagem value='$ator->name'>";
                echo "<input type=hidden name='link' value='$url2$a'>";
                echo "<center><h1>" . $ator->name . "</h1><br></center>";
                echo "</button>";
                echo "</form>";
            }
            $url = "https://swapi.dev/api/planets/?page=5";
            $url2 = "https://swapi.dev/api/planets/";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $resultado = json_decode(curl_exec($ch));
            foreach ($resultado->results as $ator) {
                $a = $a + 1;
                echo "<form method=post action=planetas.php>";
                echo "<button class=quad>";
                echo "<img src='StarFotos/StarPlanetas/$ator->name.png' width=auto height=150px>";
                echo "<input type=hidden name=personagem value='$ator->name'>";
                echo "<input type=hidden name='link' value='$url2$a'>";
                echo "<center><h1>" . $ator->name . "</h1><br></center>";
                echo "</button>";
                echo "</form>";
            }
            echo "</div>";
        } else if ($_POST["especies"]) {
            echo "<div class=nomeator>";
            echo "<h1>Especies</h1>";
            echo "<a href=index.php><input class=button type=submit name='personagem' style='--color:yellow;cursor:pointer;' value='Voltar'></a>";
            echo "</div>";
            $url = "https://swapi.dev/api/species";
            $url2 = "https://swapi.dev/api/species/";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $resultado = json_decode(curl_exec($ch));
            $a = 0;
            echo "<div class=quadarruma>";
            foreach ($resultado->results as $ator) {
                $a = $a + 1;
                echo "<form method=post action=especie.php>";
                echo "<button class=quad>";
                echo "<img src='$ator->name.png' width=150px height=150px>";
                echo "<input type=hidden name=personagem value=" . $ator->name . ">";
                echo "<input type=hidden name='link' value='$url2$a'>";
                echo "<center><h1>" . $ator->name . "</h1><br></center>";
                echo "</button>";
                echo "</form>";
            }
            $url = "https://swapi.dev/api/species/?page=2";
            $url2 = "https://swapi.dev/api/species/";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $resultado = json_decode(curl_exec($ch));
            foreach ($resultado->results as $ator) {
                $a = $a + 1;
                echo "<form method=post action=especie.php>";
                echo "<button class=quad>";
                echo "<img src='$ator->name.png' width=150px height=150px>";
                echo "<input type=hidden name=personagem value=" . $ator->name . ">";
                echo "<input type=hidden name='link' value='$url2$a'>";
                echo "<center><h1>" . $ator->name . "</h1><br></center>";
                echo "</button>";
                echo "</form>";
            }
            $url = "https://swapi.dev/api/species/?page=3";
            $url2 = "https://swapi.dev/api/species/";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $resultado = json_decode(curl_exec($ch));
            foreach ($resultado->results as $ator) {
                $a = $a + 1;
                echo "<form method=post action=especie.php>";
                echo "<button class=quad>";
                echo "<img src='$ator->name.png' width=150px height=150px>";
                echo "<input type=hidden name=personagem value=" . $ator->name . ">";
                echo "<input type=hidden name='link' value='$url2$a'>";
                echo "<center><h1>" . $ator->name . "</h1><br></center>";
                echo "</button>";
                echo "</form>";
            }
            $url = "https://swapi.dev/api/species/?page=4";
            $url2 = "https://swapi.dev/api/species/";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $resultado = json_decode(curl_exec($ch));
            foreach ($resultado->results as $ator) {
                $a = $a + 1;
                echo "<form method=post action=especie.php>";
                echo "<button class=quad>";
                echo "<img src='$ator->name.png' width=150px height=150px>";
                echo "<input type=hidden name='personagem' value=" . $ator->name . ">";
                echo "<input type=hidden name='link' value='$url2$a'>";
                echo "<center><h1>" . $ator->name . "</h1><br></center>";
                echo "</button>";
                echo "</form>";
            }
            echo "</div>";
        } else if ($_POST["veiculos"]) {
            echo "<div class=nomeator>";
            echo "<h1>Veiculos</h1>";
            echo "<a href=index.php><input class=button type=submit name='personagem' style='--color:yellow;cursor:pointer;' value='Voltar'></a>";
            echo "</div>";
            $url = "https://swapi.dev/api/vehicles";
            $url2 = "https://swapi.dev/api/vehicles/";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $resultado = json_decode(curl_exec($ch));
            echo "<div class=quadarruma>";
            $a = 0;
            foreach ($resultado->results as $ator) {
                if($a == 0){
                    $a = $a + 3;
                }
                if($a == 4){
                    $a = $a + 1;
                }
                if($a == 8){
                    $a = $a + 5;
                }
                if($a == 14){
                    $a = $a + 1;
                }
                if($a == 16){
                    $a = $a + 1;
                }
                if($a == 20){
                    $a = $a + 3;
                }
                $a = $a + 1;
                echo "<form method=post action=carro.php>";
                echo "<button class=quad>";
                echo "<img src='$ator->name.png' width=150px height=150px>";
                echo "<input type=hidden name='personagem' value='$ator->name'>";
                echo "<input type=hidden name='link' value='$url2$a'>";
                echo "<center><h1>" . $ator->name . "</h1><br></center>";
                echo "</button>";
                echo "</form>";
            }
            $url = "https://swapi.dev/api/vehicles/?page=2";
            $url2 = "https://swapi.dev/api/vehicles/";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $resultado = json_decode(curl_exec($ch));
            foreach ($resultado->results as $ator) {
                if($a == 26){
                    $a = $a + 3;
                }
                if($a == 30){
                    $a = $a + 2;
                }
                if($a == 38){
                    $a = $a + 3;
                }
                $a = $a + 1;
                echo "<form method=post action=carro.php>";
                echo "<button class=quad>";
                echo "<img src='$ator->name.png' width=150px height=150px>";
                echo "<input type=hidden name='personagem' value='$ator->name'>";
                echo "<input type=hidden name='link' value='$url2$a'>";
                echo "<center><h1>" . $ator->name . "</h1><br></center>";
                echo "</button>";
                echo "</form>";
            }
            $url = "https://swapi.dev/api/vehicles/?page=3";
            $url2 = "https://swapi.dev/api/vehicles/";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $resultado = json_decode(curl_exec($ch));
            foreach ($resultado->results as $ator) {
                if($a == 46){
                    $a = $a + 3;
                }
                if($a == 51){
                    $a = $a + 2;
                }
                $a = $a + 1;
                echo "<form method=post action=carro.php>";
                echo "<button class=quad>";
                echo "<img src='$ator->name.png' width=150px height=150px>";
                echo "<input type=hidden name='personagem' value='$ator->name'>";
                echo "<input type=hidden name='link' value='$url2$a'>";
                echo "<center><h1>" . $ator->name . "</h1><br></center>";
                echo "</button>";
                echo "</form>";
            }
            $url = "https://swapi.dev/api/vehicles/?page=4";
            $url2 = "https://swapi.dev/api/vehicles/";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $resultado = json_decode(curl_exec($ch));
            foreach ($resultado->results as $ator) {
                if($a == 57){
                    $a = $a + 2;
                }
                if($a == 60){
                    $a = $a + 1;
                }
                if($a == 62){
                    $a = $a + 4;
                }
                if($a == 67){
                    $a = $a + 1;
                }
                if($a == 73){
                    $a = $a + 2;
                }
                $a = $a + 1;
                echo "<form method=post action=carro.php>";
                echo "<button class=quad>";
                echo "<img src='$ator->name.png' width=150px height=150px>";
                echo "<input type=hidden name='personagem' value='$ator->name'>";
                echo "<input type=hidden name='link' value='$url2$a'>";
                echo "<center><h1>" . $ator->name . "</h1><br></center>";
                echo "</button>";
                echo "</form>";
            }
            echo "</div>";
        } else if ($_POST["naves"]) {
            echo "<div class=nomeator>";
            echo "<h1>Naves</h1>";
            echo "<a href=index.php><input class=button type=submit name='personagem' style='--color:yellow;cursor:pointer;' value='Voltar'></a>";
            echo "</div>";
            $url = "https://swapi.dev/api/starships";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $resultado = json_decode(curl_exec($ch));
            echo "<div class=quadarruma>";
            $a = 0;
            foreach ($resultado->results as $ator) {
                $url2 = $ator->url;
                $a = $a + 1;
                echo "<form method=post action=nave.php>";
                echo "<button class=quad>";
                echo "<img src='$ator->name.png' width=150px height=150px>";
                echo "<input type=hidden name='personagem' value='$ator->name'>";
                echo "<input type=hidden name='link' value='$url2'>";
                echo "<center><h1>" . $ator->name . "</h1><br></center>";
                echo "</button>";
                echo "</form>";
            }
            $url = "https://swapi.dev/api/starships/?page=2";
            $url2 = "https://swapi.dev/api/starships/";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $resultado = json_decode(curl_exec($ch));
            foreach ($resultado->results as $ator) {
                $url2 = $ator->url;
                $a = $a + 1;
                echo "<form method=post action=nave.php>";
                echo "<button class=quad>";
                echo "<img src='$ator->name.png' width=150px height=150px>";
                echo "<input type=hidden name='personagem' value='$ator->name'>";
                echo "<input type=hidden name='link' value='$url2'>";
                echo "<center><h1>" . $ator->name . "</h1><br></center>";
                echo "</button>";
                echo "</form>";
            }
            $url = "https://swapi.dev/api/starships/?page=3";
            $url2 = "https://swapi.dev/api/starships/";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $resultado = json_decode(curl_exec($ch));
            foreach ($resultado->results as $ator) {
                $url2 = $ator->url;
                $a = $a + 1;
                echo "<form method=post action=nave.php>";
                echo "<button class=quad>";
                echo "<img src='$ator->name.png' width=150px height=150px>";
                echo "<input type=hidden name='personagem' value='$ator->name'>";
                echo "<input type=hidden name='link' value='$url2'>";
                echo "<center><h1>" . $ator->name . "</h1><br></center>";
                echo "</button>";
                echo "</form>";
            }
            $url = "https://swapi.dev/api/starships/?page=4";
            $url2 = "https://swapi.dev/api/starships/";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $resultado = json_decode(curl_exec($ch));
            foreach ($resultado->results as $ator) {
                $url2 = $ator->url;
                $a = $a + 1;
                echo "<form method=post action=nave.php>";
                echo "<button class=quad>";
                echo "<img src='$ator->name.png' width=150px height=150px>";
                echo "<input type=hidden name='personagem' value='$ator->name'>";
                echo "<input type=hidden name='link' value='$url2'>";
                echo "<center><h1>" . $ator->name . "</h1><br></center>";
                echo "</button>";
                echo "</form>";
            }
            echo "</div>";
        }
        ?>
    </div>


</body>

</html>