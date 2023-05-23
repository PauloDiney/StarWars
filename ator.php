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
            echo "Nome:" . $ator->name . "<br>";
            echo "Tamanho:" . $ator->height . "<br>";
            echo "Peso:" . $ator->mass . "<br>";
            echo "Cor do cabelo:" . $ator->hair_color . "<br>";
            echo "Tom de pele:" . $ator->skin_color . "<br>";
            echo "Cor do olho:" . $ator->eye_color . "<br>";
            echo "Ano de aniversario:" . $ator->birth_year . "<br>";
            echo "Genero:" . $ator->gender . "<br>";
            foreach ($ator->homeworld as $mundo) {
                $mundo = file_get_contents($mundo);
                $mundo = json_decode($mundo);
                $mundos = $mundo->name;
                echo "Planeta onde nasceu:" . $mundos . "<br>";
            }
            foreach ($ator->films as $filmes) {
                $filmes = file_get_contents($filmes);
                $filmes = json_decode($filmes);
                $titulo = $filmes->title;
                echo "Filmes:" . $titulo . "<br>";
            }
            foreach ($ator->species as $especies) {
                $especies = file_get_contents($especies);
                $especies = json_decode($especies);
                $especie = $especies->name;
                echo "Especies:" . $especie . "<br>";
            }
            foreach ($ator->vehicles as $veiculo) {
                $veiculo = file_get_contents($veiculo);
                $veiculo = json_decode($veiculo);
                $carro = $veiculo->name;
                echo "Veiculos:" . $carro . "<br>";
            }
            foreach ($ator->starships as $naves) {
                $naves = file_get_contents($naves);
                $naves = json_decode($naves);
                $nave = $naves->name;
                echo "Naves:" . $nave . "<br>";
            }
        } else {
        }
    }
    ?>
    <a href="index.php"><button>Voltar</button></a>
    </div>
</body>

</html>