<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokmon Data Site: Meet them all!</title>
    <link rel="stylesheet" href="style.css?version_1">
    <link rel="shortcut icon" href="img/pokeball.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <?php

    require_once 'header.php';

    ?>
    <main>
        <div class="shadow_bg"> </div>

        <h1>Meet them all!</h1>

        <article id="main_article">
            <p>Here you can find every pokemon of the first generation.</p>
            <p>Cards of pokemons like Pikachu, Charmander, Mew or Bulbasaur are avalaible for you read their information.</p>
        </article>

        <figure id="arrows_down">
            <a href="/php/tp_final/all_pokemons.php#container-slider">
                <img src="img/arrows_down.png">
            </a>
        </figure>

        <div id="container-slider" class="container-slider">
            <button id="btn_left">
                &#60;
            </button>

            <button id="btn_right">
                &#62;
            </button>
            <div class="slider" id="slider">

                <?php
                // Consumo de primer API.
                $api_response = file_get_contents('https://pokeapi.co/api/v2/pokemon?limit=151');
                $pokemones = json_decode($api_response, true);
                $pokemon = $pokemones['results'];



                for ($i = 0; $i < count($pokemon); $i++) {
                    echo '<section class="card">';

                    echo '<h2>' . $pokemon[$i]['name'] . '</h2>';
                    echo '<div class="shadow"> </div>';

                    // Consumiendo API dentro API para extraer la info.

                    // https://pokeapi.co/api/v2/pokemon/1/ abrir en mozilla para ver detalles.

                    $api2_response = file_get_contents($pokemon[$i]['url']);
                    $info_pokemon = json_decode($api2_response, true);
                    echo '<article class="id_and_img">';
                    echo '<p class="id_number"><strong>#' . $info_pokemon['id'] . '</strong></p>';
                    echo '<figure class="img_pokemon"><img src=\'' . $info_pokemon['sprites']['front_default'] . '\'></figure>';
                    echo '<div class="shadow"> </div>';
                    echo '<div class=' . $info_pokemon['types'][0]['type']['name'] . '> </div>';
                    echo '</article>';

                    echo '<article class="info">';
                    echo '<p><strong>Type:</strong> ' . $info_pokemon['types'][0]['type']['name'] . '</p>';
                    echo '<p><strong>Weight:</strong> ' . $info_pokemon['height'] . ' lbs.</p>';
                    echo '<p><strong>Height:</strong> ' . $info_pokemon['weight'] . '"</p>';
                    echo '<div class="shadow_info"> </div>'; //SI SALE MAL BORRAR ESTE
                    echo '<div class=' . $info_pokemon['types'][0]['type']['name'] . '> </div>';
                    echo '</article>';

                    echo '</section>';
                }

                ?>
            </div>
        </div>


    </main>

    <?php

    require_once 'footer.php';

    ?>
</body>

</html>

<script src="js/code.js"></script>