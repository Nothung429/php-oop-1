<?php
    require_once __DIR__ . "/classes/MovieConstructor.php";
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
                    <img src=<?= $movie->poster ?> alt=<?= $movie->title ?>>
                    <p><strong>Year:</strong> <?= $movie->year?> <strong>Language:</strong> <?= $movie->language?></p>
                    <p><strong>Vote:</strong> <?= $movie->valutation?></p>
                    <p><strong>Director:</strong> <?= $movie->director?></p>
                    <p><strong>Cast:</strong> <?= $movie->cast?></p>
                    <p><strong>Production:</strong> <?= $movie->production?></p>
                    <h4>
                        <?php if($movie->discount !== 0) { ?>
                            Discount Price: <?= $movie->discount; ?> £
                        <?php } ?>
                    </h4>
                    <h4>
                        Price: <?= $movie->price; ?> £
                    </h4>
                </li>
            <?php } ?>
        </ul>
    </body>
</html>

<!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->