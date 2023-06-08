<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RadioButtons en PHP</title>
</head>
<body>
    <form action="RadioButtonsSencillo.php" method="post"><!--Los tres radioButton tienen el mismo name="creditCard", DE LO CONTRARIO, se podría elegir más de uno al MISMO TIEMPO-->
        <input type="radio" name="creditCard" value="Visa"><!--value="Visa" serán utilizados dentro del switch que está más abajo-->
        Visa <br> <!--Si no pones el "Visa", solo aparece el radioButton, sin nungun texto que lo acompañe-->
        <input type="radio" name="creditCard" value="MasterCard"><!-- value="MasterCard" serán utilizados dentro del switch que está más abajo-->
        MasterCard <br> <!--Si no pones el "MasterCard", solo aparece el radioButton, sin nungun texto que lo acompañe-->
        <input type="radio" name="creditCard" value="AmericanExpress"><!-- value="AmericanExpress" serán utilizados dentro del switch que está más abajo-->
        AmericanExpress <br> 
        <input type="submit" name="Enviar" value="Enviar">
        <br>
    </form>
</body>
</html>

<?php

if(isset($_POST["creditCard"])){/* Estaba confundiendome y poniendo el name del botón Enviar, pero no es así, esta es la manera correcta */
    $creditCard=null;/* Para que no arroje un terrible ERROR. Es indiferente si declaramos esta variable, dentro del if o fuera */
    $creditCard=$_POST['creditCard'];/* Se guarda en  $creditCard la información de los radioButton. Se guardan los value, por eso se usan despues en el switch()  */
    switch($creditCard){
        case 'Visa':
            echo "Has elegido Visa";
            break;/* Se oprime el break, porque así viene en la documentación y me imagino que para detener el programa */

        case 'MasterCard':
            echo "Has elegido MasterCard";
            break;

        case 'AmericanExpress':
            echo "Has elegido AmericanExpress";
            break;
        
        default:
            echo "Por favor elige una opción";

    }
}

else{
    echo "Elige una opción porfavor";
}

?>

<!--FUNCIONA MUY BIEN. SIN FALLAS.-->
