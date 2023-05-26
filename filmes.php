<?php
$filmes = $_POST['filme'];
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
    <title><?php echo $filmes ?></title>
</head>

<body>
    <video id="background-video" autoplay muted loop>
        <source src="fundo.mp4" type="video/mp4">
    </video>
    <div class="algoai">
        <?php
        foreach ($resultado as $titulo) {
            if ($titulo->title == $filmes) {
                echo "<div class=imgator>";
                echo "<img src='StarFotos/StarFilmes/$titulo->title.png'>";
                echo "</div>";
                echo "<div class=nomeator>";
                echo "<h1>" . $titulo->title . "</h1>";
                echo "</div>";
                echo "<div class=atortudo>";
                echo "Episodio: " . $titulo->episode_id . "<br>";
                echo "<font>Abertura: " . $titulo->opening_crawl . "</font><br>";
                echo "Diretor: " . $titulo->director . "<br>";
                echo "Produtor: " . $titulo->producer . "<br>";
                echo "Data de lançamento: " . $titulo->release_date . "<br>";
                echo "<br><br><h1>Personagens que participou</h1>";
                foreach ($titulo->characters as $caracteristicas) {
                    echo "<form action=ator.php method=post><input type=hidden name=link value='$caracteristicas'>";
                    $caracteristicas = file_get_contents($caracteristicas);
                    $caracteristicas = json_decode($caracteristicas);
                    $carac = $caracteristicas->name;
                    echo "<input type=hidden name=personagem value='$carac'>";
                    echo "<input class=button type=submit style='--color:yellow;cursor:pointer;' value='$carac'></form>";
                }
                if ($titulo->planets == []) {
                } else {
                    echo "<br><h1>Planetas</h1>";
                }
                foreach ($titulo->planets as $planets) {
                    $planets = file_get_contents($planets);
                    $planets = json_decode($planets);
                    $planet = $planets->name;
                    echo "<input class=button type=submit style='--color:yellow;cursor:pointer;' value='$planet'></form>";
                }
                if ($titulo->species == []) {
                } else {
                    echo "<br><h1>Especies</h1>";
                }
                foreach ($titulo->species as $species) {
                    $species = file_get_contents($species);
                    $species = json_decode($species);
                    $spe = $species->name;
                    echo "<input class=button type=submit style='--color:yellow;cursor:pointer;' value='$spe'></form>";
                }
                if ($titulo->vehicles == []) {
                } else {
                    echo "<br><h1>Veiculos</h1>";
                }
                foreach ($titulo->vehicles as $veiculo) {
                    $veiculo = file_get_contents($veiculo);
                    $veiculo = json_decode($veiculo);
                    $carro = $veiculo->name;
                    echo "<input class=button type=submit style='--color:yellow;cursor:pointer;' value='$carro'></form>";
                }
                if ($titulo->starships == []) {
                } else {
                    echo "<br><h1>Naves</h1>";
                }
                foreach ($titulo->starships as $naves) {
                    $naves = file_get_contents($naves);
                    $naves = json_decode($naves);
                    $nave = $naves->name;
                    echo "<input class=button type=submit style='--color:yellow;cursor:pointer;' value='$nave'></form>";
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