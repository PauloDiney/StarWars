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
                echo "Tamanho: " . $ator->height . "<br>";
                echo "Peso: " . $ator->mass . "<br>";
                echo "Cor do cabelo: " . $ator->hair_color . "<br>";
                echo "Tom de pele: " . $ator->skin_color . "<br>";
                echo "Cor do olho: " . $ator->eye_color . "<br>";
                echo "Ano de aniversario: " . $ator->birth_year . "<br>";
                echo "Genero: " . $ator->gender . "<br><br>";
                $mundo = file_get_contents($ator->homeworld);
                $mundo = json_decode($mundo);
                $mundos = $mundo->name;
                echo "<h1>Planeta onde nasceu</h1> <form method='post' action='planetas.php'><input class=button type=submit name='personagem' style='--color:yellow;cursor:pointer;' value='$mundos'></form>";
                echo "<h1>Filmes que participou</h1>";
                foreach ($ator->films as $filmes) {
                    echo "<form method='post' action='filmes.php'><input type='hidden' name='link' value='$filmes'>";
                    $filmes = file_get_contents($filmes);
                    $filmes = json_decode($filmes);
                    $titulo = $filmes->title;
                    echo "<input type=hidden name='filme' value='$titulo'>";
                    echo "<input class=button type=submit style='--color:yellow;cursor:pointer;' value='$titulo'></form>";
                }
                if ($ator->species == []) {
                } else {
                    echo "<br><h1>Especies</h1>";
                }
                foreach ($ator->species as $especies) {
                    $especies = file_get_contents($especies);
                    $especies = json_decode($especies);
                    $especie = $especies->name;
                    echo "<form method='post' action='especie.php'><input class=button type=submit name='personagem' style='--color:yellow;cursor:pointer;' value='$especie'></form>";
                }
                if ($ator->vehicles == []) {
                } else {
                    echo "<br><h1>Veiculos</h1>";
                }
                foreach ($ator->vehicles as $veiculo) {
                    $veiculo = file_get_contents($veiculo);
                    $veiculo = json_decode($veiculo);
                    $carro = $veiculo->name;
                    echo "<form method='post' action='carro.php'><input class=button type=submit name='personagem' style='--color:yellow;cursor:pointer;' value='$carro'></form>";
                }
                if ($ator->starships == []) {
                } else {
                    echo "<br><h1>Naves</h1>";
                }
                foreach ($ator->starships as $naves) {
                    $naves = file_get_contents($naves);
                    $naves = json_decode($naves);
                    $nave = $naves->name;
                    echo "<form method='post' action='nave.php'><input class=button type=submit name='personagem' style='--color:yellow;cursor:pointer;' value='$nave'></form>";
                }
                echo "<br><form action='tudo.php' method='post'>
                <input class=button type=submit name='personagem' style='--color:yellow;cursor:pointer;' value='Voltar'>
                </form>";
                echo "</div>";
            } else {
            }
        }
        ?>
    </div>
</body>

</html>