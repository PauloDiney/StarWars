<?php
$atores = $_POST['personagem'];
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
    <title><?php echo $atores ?></title>
</head>

<body>
    <video id="background-video" autoplay muted loop>
        <source src="fundo.mp4" type="video/mp4">
    </video>
    <div class="algoai">
        <?php
        foreach ($resultado->results as $ator) {
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
                echo "Genero: " . $ator->gender . "<br>";
                $mundo = file_get_contents($ator->homeworld);
                $mundo = json_decode($mundo);
                $mundos = $mundo->name;
                echo "Planeta onde nasceu:" . $mundos;
                echo "<br><br><h1>Filmes que participou</h1>";
                foreach ($ator->films as $filmes) {
                    $filmes = file_get_contents($filmes);
                    $filmes = json_decode($filmes);
                    $titulo = $filmes->title;
                    echo $titulo . "<br>";
                }
                if ($ator->species == []) {
                } else {
                    echo "<br><h1>Especies</h1>";
                }
                foreach ($ator->species as $especies) {
                    $especies = file_get_contents($especies);
                    $especies = json_decode($especies);
                    $especie = $especies->name;
                    echo $especie . "<br>";
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
                <input class=button name='Personagem' href=tudo.php style=--color:#1e9bff; value='Voltar'>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </form>";
                echo "</div>";
            } else {
            }
        }
        ?>
    </div>
</body>

</html>