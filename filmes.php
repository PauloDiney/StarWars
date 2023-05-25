<?php
$filmes = $_POST['filme'];
$url = $_POST['link'];
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$resultado = json_decode(curl_exec($ch));
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
    <title><?php echo $filmes ?></title>
</head>

<body>
    <video id="background-video" autoplay muted loop>
        <source src="fundo.mp4" type="video/mp4">
    </video>
    <div class="algoai">
        <?php
        foreach ($resultado->results as $ator) {
            if ($ator->title == $filmes) {
                echo "<div class=imgator>";
                echo "<img src='StarFotos/StarFilmes/$ator->title.png'>";
                echo "</div>";
                echo "<div class=nomeator>";
                echo "<h1>" . $ator->title . "</h1>";
                echo "</div>";
                echo "<div class=atortudo>";
                echo "Tamanho: " . $ator->episode_id . "<br>";
                echo "Peso: " . $ator->opening_crawl . "<br>";
                echo "Cor do cabelo: " . $ator->director . "<br>";
                echo "Tom de pele: " . $ator->producer . "<br>";
                echo "Cor do olho: " . $ator->release_date . "<br>";
                echo "<br><br><h1>Atores que participou</h1>";
                foreach ($ator->characters as $caracteristicas) {
                    $caracteristicas = file_get_contents($caracteristicas);
                    $caracteristicas = json_decode($caracteristicas);
                    $carac = $caracteristicas->name;
                    echo $carac . "<br>";
                }
                if ($ator->planets == []) {
                } else {
                    echo "<br><h1>Planetas</h1>";
                }
                foreach ($ator->planets as $planets) {
                    $planets = file_get_contents($planets);
                    $planets = json_decode($planets);
                    $planet = $planets->name;
                    echo $planet . "<br>";
                }
                if ($ator->species == []) {
                } else {
                    echo "<br><h1>Especies</h1>";
                }
                foreach ($ator->species as $species) {
                    $species = file_get_contents($species);
                    $species = json_decode($species);
                    $spe = $species->name;
                    echo $spe . "<br>";
                }
                if ($ator->vehicles == []) {
                } else {
                    echo "<br><h1>Veiculos</h1>";
                }
                foreach ($ator->vehicles as $veiculo) {
                    $veiculo = file_get_contents($veiculo);
                    $veiculo = json_decode($veiculo);
                    $carro = $veiculo->name;
                    echo $carro . "<br>";
                }
                if ($ator->starships == []) {
                } else {
                    echo "<br><h1>Naves</h1>";
                }
                foreach ($ator->starships as $naves) {
                    $naves = file_get_contents($naves);
                    $naves = json_decode($naves);
                    $nave = $naves->name;
                    echo $nave . "<br>";
                }
                echo "<form action='tudo.php' method='post'>
                <input class=button type=submit name='filme' style='--color:yellow;cursor:pointer;' value='Voltar'>
                </form>";
                echo "</div>";
            } else {
            }
        }
        ?>
    </div>
</body>

</html>