<?php

session_start();

$guessError = $hint = "";

if(is_null($_SESSION['number'] ))
{
    $_SESSION['number'] = rand(1,1000);
    $_SESSION['guesses']  = array();

}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(empty($_POST["guess"])){
        $guessError = "please fill in a guess";
    }elseif (is_nan($_POST["guess"])){
        $guessError = "please give a number between 1 and 1000";
    }else{
        $_SESSION['guesses'][] = $_POST["guess"];

        if($_POST["guess"] > $_SESSION['number']){
            $hint = "too high";

        }
        elseif ($_POST["guess"] < $_SESSION['number']){
            $hint = "too Low";
        }else{
            header("Location: ResultScreen.php");
            exit;
        }

    }
}
?>

<!DOCTYPE html>
<html lang="nl">
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
            <article class="column data">

                <p>Je laatste gok was: <?php echo $_POST["guess"] ?></p>
                <p>Hint:<?php if(!empty($hint)){echo " your last Guess was ". $hint;} ?> </p>
            </article>

            <article class="column form">
                <form class="guess" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    Jouw Gok: <input type="number" name="guess" min="1" max="1000" required>
                    <span class="form_name">
                        <input type="submit" value="Ik doe een gok">
                    </span>
                </form>
            </article>
        </section>
        <footer>
            made by: bart sparrius
        </footer>
        <?php
        print_($_SESSION['guesses']);
        echo $hint;
        ?>
    </body>
</html>


