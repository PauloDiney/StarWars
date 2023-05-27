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
    <title><?php echo $atores ?></title>
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
                echo "Modelo: " . $ator->model . "<br>";
                echo "Fabricante: " . $ator->manufacturer . "<br>";
                echo "Custo em Créditos: " . $ator->cost_in_credits . "<br>";
                echo "Comprimento: " . $ator->length . "<br>";
                echo "Velocidade Atmosférica Máxima: " . $ator->max_atmosphering_speed . "<br>";
                echo "Equipe: " . $ator->crew . "<br>";
                echo "Passageiros: " . $ator->passengers . "<br>";
                echo "Capacidade de Carga: " . $ator->cargo_capacity . "<br>";
                echo "Consumíveis: " . $ator->consumables . "<br>";
                echo "Avaliação do Hiperdrive: " . $ator->hyperdrive_rating . "<br>";
                echo "MGLT: " . $ator->MGLT . "<br>";
                echo "Classe de Nave Estelar: " . $ator->starship_class . "<br><br>";
                if($ator->pilots == []){}else{
                    echo "<h1>Pilotos</h1>";
                }
                foreach ($ator->pilots as $pilotos) {
                    echo "<form method='post' action='ator.php'><input type='hidden' name='link' value='$pilotos'>";
                    $pilotos = file_get_contents($pilotos);
                    $pilotos = json_decode($pilotos);
                    $titulo = $pilotos->name;
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
                <input class=button type=submit name='naves' style='--color:yellow;cursor:pointer;' value='Voltar'>
                </form>";
                echo "</div>";
            } else {
            }
        }
        ?>
    </div>
</body>

</html>