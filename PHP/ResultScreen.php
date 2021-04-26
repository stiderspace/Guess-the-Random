<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Get The Number</title>
        <meta charset="utf-8">
        <meta name="author" content="B sparrius">
        <link rel="stylesheet" type="text/css" href="../CSS/Standard.css">
    </head>
    <body>
        <header>
            <h1>The Guessing Game</h1>
        </header>
        <section class="row">
            <nav class="column nav">
                <a href="../index.php">Reset En speel opnieuw</a>
            </nav>
            <article class="column info" >
                <h2>Je hebt gewonnen!!</h2>
                <h3>Het willekeurige nummer was: <?php echo $_SESSION['number']?></h3>
                <p>Je hebt:
                    <?php
                        echo count($_SESSION['guesses']). " ponging";
                        if(count($_SESSION['guesses']) != 1 ){echo "en";}
                    ?> gedaan</p>

                <p>Jou gokken waren: </p>
                <ol>
                    <?php
                     foreach ($_SESSION['guesses'] as $num)
                     {
                         echo "<li>".$num."</li>";
                     }
                    ?>
                </ol>
            </article>
        </section >
        <footer>
            made by: bart sparrius
        </footer>
    </body>
</html>

