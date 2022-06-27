<!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php
    require_once __DIR__ . "/classes/Movie.php";

    $movies = [
        new movie("Harry Potter e la pietra filosofale", "2001", "en", "7.6", "Chris Columbus", "Daniel Radcliffe, Emma Watson, Rupert Grint", "WB"),
        new movie("Harry Potter e la camera dei segreti", "2002", "en", "7.4", "Chris Columbus", "Daniel Radcliffe, Emma Watson, Rupert Grint", "WB"),
        new movie("Harry Potter e il prigioniero di Azkaban", "2004", "en", "7.2", "Alfonso Cuarón", "Daniel Radcliffe, Emma Watson, Rupert Grint", "WB"),
        new movie("Harry Potter e il calice di fuoco", "2005", "en", "7.0", "Mike Newell", "Daniel Radcliffe, Emma Watson, Rupert Grint", "WB"),
        new movie("Harry Potter e l'Ordine della Fenice", "2007", "en", "6.8", "David Yates", "Daniel Radcliffe, Emma Watson, Rupert Grint", "WB"),
        new movie("Harry Potter e il principe mezzosangue", "2019", "en", "6.6", "David Yates", "Daniel Radcliffe, Emma Watson, Rupert Grint", "WB"),
        new movie("Harry Potter e i Doni della Morte - Parte 1", "2010", "en", "6.4", "David Yates", "Daniel Radcliffe, Emma Watson, Rupert Grint", "WB"),
        new movie("Harry Potter e i Doni della Morte - Parte 2", "2011", "en", "6.2", "David Yates", "Daniel Radcliffe, Emma Watson, Rupert Grint", "WB"),
    ]
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Movie PhP OOP</title>
    </head>

    <body>
        <h1>Movie OOP</h1>
        <ul>
            <?php foreach($movies as $movie) { ?>
            <li>
                <h2><?= $movie->title; ?></h2>
                <p><strong>Year:</strong> <?= $movie->year?> <strong>Language:</strong> <?= $movie->language?></p>
                <p><strong>Vote:</strong> <?= $movie->valutation?></p>
                <p><strong>Director:</strong> <?= $movie->director?></p>
                <p><strong>Cast:</strong> <?= $movie->cast?></p>
                <p><strong>Production:</strong> <?= $movie->production?></p>
            </li>
            <?php } ?>
        </ul>
    </body>
</html>