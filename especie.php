<?php
$atores = $_POST['personagem'];
$url = $_POST['link'];
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$resultado = json_decode(curl_exec($ch));
$resultado = array($resultado);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.cdnfonts.com/css/redfive" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/charter-itc-tt" rel="stylesheet">
    <!-- <link href="https://fonts.cdnfonts.com/css/death-star" rel="stylesheet"> -->
    <link rel="stylesheet" href="style.css">
    <title><?php echo "$atores" ?></title>
</head>

<body>
    <video id="background-video" autoplay muted loop>
        <source src="fundo.mp4" type="video/mp4">
    </video>
    <div class="algoai">
        <?php
        foreach ($resultado as $ator) {
            if ($ator->name == $atores) {
                echo "<div class=imgator>";
                echo "<img src='StarFotos/StarFotos/$ator->name.png'>";
                echo "</div>";
                echo "<div class=nomeator>";
                echo "<h1>" . $ator->name . "</h1>";
                echo "</div>";
                echo "<div class=atortudo>";
                echo "Classificação: " . $ator->classification . "<br>";
                echo "Designação: " . $ator->designation . "<br>";
                echo "Altura Média: " . $ator->average_height . "<br>";
                echo "Cores de Pele: " . $ator->skin_colors . "<br>";
                echo "Cores de Cabelo: " . $ator->hair_colors . "<br>";
                echo "Cores dos Olhos: " . $ator->eye_colors . "<br>";
                echo "Tempo de Vida Médio: " . $ator->average_lifespan . "<br>";
                echo "Linguagem: " . $ator->language . "<br><br>";
                if($ator->homeworld == []){}else{
                echo "<h1>Planeta</h1>";
                echo "<form method='post' action='planetas.php'><input type=hidden name=link value='$ator->homeworld'>";
                $mundo = file_get_contents($ator->homeworld);
                $mundo = json_decode($mundo);
                $mundos = $mundo->name;
                echo "<input type=hidden name='personagem' value='$mundos'>";
                echo "<input class=button type=submit name='personagem' style='--color:yellow;cursor:pointer;' value='$mundos'>
                </form>";
                }
                if($ator->people == []){}else{
                    echo "<h1>Personagens</h1>";
                }
                foreach ($ator->people as $pessoas) {
                    echo "<form method='post' action='ator.php'><input type='hidden' name='link' value='$pessoas'>";
                    $pessoas = file_get_contents($pessoas);
                    $pessoas = json_decode($pessoas);
                    $titulo = $pessoas->name;
                    echo "<input type=hidden name='personagem' value='$titulo'>";
                    echo "<input class=button type=submit style='--color:yellow;cursor:pointer;' value='$titulo'></form>";
                }
                echo "<h1>Filmes</h1>";
                foreach ($ator->films as $filmes) {
                    echo "<form method='post' action='filmes.php'><input type='hidden' name='link' value='$filmes'>";
                    $filmes = file_get_contents($filmes);
                    $filmes = json_decode($filmes);
                    $titulo = $filmes->title;
                    echo "<input type=hidden name='filme' value='$titulo'>";
                    echo "<input class=button type=submit style='--color:yellow;cursor:pointer;' value='$titulo'></form>";
                }
                
                echo "<br><form action='tudo.php' method='post'>
                <input class=button type=submit name='especies' style='--color:yellow;cursor:pointer;' value='Voltar'>
                </form>";
                echo "</div>";
            } else {
            }
        }
        ?>
    </div>
</body>

</html>