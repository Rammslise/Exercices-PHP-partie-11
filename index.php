<?php
include 'controller.php'
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <meta name= "viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="assets/bootstrap-4.3.1-dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/style.css" />
        <title>PHP - Partie supplémentaire</title>
    </head>   
    <body> 
        <h1>Une calculatrice en PHP</h1>
        <form action="index.php" method="POST">
            <input type="text" name="number1" value="0"/>
            <input type="text" name="number2" value="0"/>
                <input type="submit" name="addition" value="+"/>
                <input type="submit" name="substraction" value="-"/>
                <input type="submit" name="multiplication" value="*"/>
                <input type="submit" name="division" value="/"/> 
        </form>
       <!--fonction result pour appeler le résultat et l'afficher ici -->
        <p>Résultat : <?= result(); ?></p>
        <script src = "assets/js/jquery-3.4.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="assets/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
        <script src="assets/js/script.js"></script>     
    </body>
</html>