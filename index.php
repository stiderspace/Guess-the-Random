<?php
session_start();
?>
<!DOCTYPE html>
<html lang="nl">
    <head>
        <title>Get The Number</title>
        <meta charset="utf-8">
        <meta name="author" content="B sparrius">
        <link rel="stylesheet" type="text/css" href="CSS/Standard.css">
    </head>
    <body>
        <header>
            <h1>The Guessing Game</h1>
        </header>
        <section class="row">
            <nav class="column nav">
                <a href="/PHP/GameScreen.php">Start Game</a>
            </nav>

            <article class="column info">
                <h2>Het Spel</h2>
                <p>Er word voor jouw een wilekeurig nummer gemaakt dit nummer is tussen de 1 en de 1000. het is de bedoeling dat jij dit nummner raad</p>
                <p>In het volgende scherm kan je een nummer in vullen en dan krijg je te zien of je te hoog of te laag zit. elke poging word bij gehouden all je het raad win je het spel</p>
            </article>
        </section>
        <footer>
            made by: bart sparrius
        </footer>
    </body>
</html>

<?php
// just to make sure the game starts clean

// remove all session variables
session_unset();

// destroy the session
session_destroy();
?>


