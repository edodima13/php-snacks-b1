<?php
//Passare come parametri GET name, mail e age
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];
//verificare che name sia più lungo di 3 caratteri,
    if(strlen($name) > 3){
        echo 'il nome è valido';
    };
//che mail contenga un punto e una chiocciola ,
//che age sia un numero.
//stampare “Accesso riuscito”, altrimenti “Accessonegato”
?>
<?php
    
?>
