<?php 
    define("NOMBRE","Michell");
    $NOMBRE='Juan';/* Las constantes y variables no se mezclan. Las últimas tienen el signo de peso al principio. SI INTENTAMOS PONER NOMBRE SIN EL SIGNO DE PESO AL PRINCIPIO, te manda error. */
    $apellido='Pérez'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php 
        echo "Hola ".NOMBRE. " ".$apellido;//Fíjate como se concateno un espacio en blanco, para que no se amontone.
        ?>
</body>
</html>
