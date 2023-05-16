<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>STARS WARS</title>
</head>

<body>

    <video id="background-video" autoplay muted loop>
        <source src="fundo.mp4" type="video/mp4">
    </video>
    <div class="cima">
        <img src="star.png">
    </div>
    <div class="alinhar">
        <div class="baixo">
            <ul class="nave">
                <li><form method="post" action="tudo.php"><a><input type="submit" style="background-color: transparent;border: none;cursor:pointer;" name="personagem" value="Personagens"></a></li>
                <li><form method="post" action="tudo.php"><a><input type="submit"style="background-color: transparent;border: none;cursor:pointer;" name="filme" value="Filmes"></a></li>
                <li><form method="post" action="tudo.php"><a><input type="submit" style="background-color: transparent;border: none;cursor:pointer;" name="planeta" value="Planeta"></a></li>
                <li><form method="post" action="tudo.php"><a><input type="submit" style="background-color: transparent;border: none;cursor:pointer;" name="especies" value="Especies"></a></li>
                <li><form method="post" action="tudo.php"><a><input type="submit" style="background-color: transparent;border: none;cursor:pointer;" name="veiculos" value="Veiculos"></a></li>
                <li><form method="post" action="tudo.php"><a><input type="submit" style="background-color: transparent;border: none;cursor:pointer;" name="naves" value="Naves"></a></li>
            </ul>
        </div>
    </div>

</body>

</html>