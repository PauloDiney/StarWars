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
                echo "<img src='StarFotos/StarPlanetas/$ator->name.png'>";
                echo "</div>";
                echo "<div class=nomeator>";
                echo "<h1>" . $ator->name . "</h1>";
                echo "</div>";
                echo "<div class=atortudo>";
                echo "Período de Rotação: " . $ator->rotation_period . "<br>";
                echo "Período Orbital: " . $ator->orbital_period . "<br>";
                echo "Diâmetro: " . $ator->diameter . "<br>";
                echo "Clima: " . $ator->climate . "<br>";
                echo "Gravidade: " . $ator->gravity . "<br>";
                echo "Terreno: " . $ator->terrain . "<br>";
                echo "Água da Superfície: " . $ator->surface_water . "<br>";
                echo "População: " . $ator->population . "<br><br>";
                if($ator->residents == []){}else{
                    echo "<h1>Residentes</h1>";
                }
                foreach ($ator->residents as $filmes) {
                    echo "<form method='post' action='ator.php'><input type='hidden' name='link' value='$filmes'>";
                    $filmes = file_get_contents($filmes);
                    $filmes = json_decode($filmes);
                    $titulo = $filmes->name;
                    echo "<input type=hidden name='personagem' value='$titulo'>";
                    echo "<input class=button type=submit style='--color:yellow;cursor:pointer;' value='$titulo'></form>";
                }
                if ($ator->films == []) {
                } else {
                    echo "<br><h1>Filmes</h1>";
                }
                foreach ($ator->films as $especies) {
                    echo "<form method='post' action='filmes.php'><input type='hidden' name='link' value='$especies'>";
                    $especies = file_get_contents($especies);
                    $especies = json_decode($especies);
                    $especie = $especies->title;
                    echo "<input type=hidden name='filme' value='$especie'>";
                    echo "<input class=button type=submit name='personagem' style='--color:yellow;cursor:pointer;' value='$especie'></form>";
                }
                echo "<form action='tudo.php' method='post'>
                <input class=button type=submit name='planeta' style='--color:yellow;cursor:pointer;' value='Voltar'>
                </form>";
            } else {
            }
        }
        ?>
    </div>
</body>

</html>