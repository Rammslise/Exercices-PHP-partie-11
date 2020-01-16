<?php

function result() {
    //on vérifie que number1 et number2 existent bien
    if (isset($_POST['number1']) && isset($_POST['number2'])) {

        //on sécurise et on détermine les variables
        $number1 = htmlspecialchars($_POST['number1']);
        $number2 = htmlspecialchars($_POST['number2']);

        //on vérifie leur valeur
        if (isset($_POST['division']) && $number2 != 0) {
            return $result = $number1 / $number2;
        } elseif (isset($_POST['addition'])) {
            return $result = $number1 + $number2;
        } elseif (isset($_POST['substraction'])) {
            return $result = $number1 - $number2;
        } elseif (isset($_POST['multiplication'])) {
            return $result = $number1 * $number2;
        } else {
            return 'Division par 0, impossible';
        }
    } else {
        return 'Opération non reçue';
    }
}

?>