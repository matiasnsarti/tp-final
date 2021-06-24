<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon Data Site</title>
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

        <h1>Welcome to <br>Pokemon Data Site</h1>

        <article id="main_article">
            <p>In this site you can find cards with information of every first generation's pokemon.</p>
            <p>You have to just find for name or number of id. We hope you enjoy it!.</p>
        </article>

        <!-- Creación del buscador -->

        <form action="search.php" method="get">
            <label>
                Search one or more pokemons!!!
                <section id="searcher">
                    <input type="text" id="search" name="search" required>
                    <button type="submit"><img src="img/search.png" id="search_icon"></button>
                </section>
            </label>
        </form>
        
    </main>
    <?php require_once 'footer.php'?>
</body>

<script src="js/code.js"></script>

</html>
