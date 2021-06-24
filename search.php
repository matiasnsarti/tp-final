<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon Data Site: Your search</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <?php

    require_once 'header.php';

    ?>
    <main id="main_search">
        <div class="shadow_bg"> </div>

        <?php
        if (!empty($_GET)) {
            $search_get = $_GET["search"];
            $search_checked = 'https://pokeapi.co/api/v2/pokemon/' . $search_get;
            $api_response = file_get_contents($search_checked);
            if ($api_response !== false) {
                $pokemon = json_decode($api_response, true);

                echo '<h1>' . $pokemon['name'] . '</h1>';

                echo '<section id="img_info_searched">';

                echo '<figure id="img_pokemon_search_done"><img src=\'' . $pokemon['sprites']['other']['dream_world']['front_default'] . '\'></figure>';
                
                echo '<article id="info_search_done">';
                echo '<p><strong>Type:</strong> ' . $pokemon['types'][0]['type']['name'] . '</p>';
                echo '<p><strong>Weight:</strong> ' . $pokemon['height'] . ' lbs.</p>';
                echo '<p><strong>Height:</strong> ' . $pokemon['weight'] . '"</p>';
                echo '<p><strong>Moves:</strong></p><ul id="moves">';
                for ($i = 0; $i < count($pokemon['moves']); $i++) {
                    if ($i < 5) {
                        echo '<li>' . $pokemon['moves'][$i]['move']['name'] . '</li>';
                    }
                    continue;
                }
                echo '</ul></article>';
                echo '</section>';
            } else {
                echo '<article id="search_error_message">';
                echo '<p>You typed wrong the pokemon\'s name or you searched a number that isn\'t 1 or 151 or that isn \'t among them.</p>';
                echo '<button><a href="http://localhost/php/tp_final/">Try it again !</a></button>';
                echo '</article>';
            }
        } else {
            echo '<article id="search_error_message">';
            echo '<p>You didn\'t make a search yet.</p>';
            echo '<button><a href="http://localhost/php/tp_final/">Do it now !</a></button>';
            echo '</article>';
        }
        ?>

    </main>

    <?php

    require_once 'footer.php';

    ?>
</body>

</html>