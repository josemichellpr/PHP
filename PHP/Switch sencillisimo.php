<?php 
if($_POST){//Si enviaste información ($_POST = true) entonces guarda esa misma información en estas variables
    
    $btnValor=$_POST['btnValor'];
    switch($btnValor){
        case 1:
            echo "Se oprimió el botón 1";
            break;/* Se orime el break, porque así viene en la documentación y me imagino que para detener el programa */

        case 2:
            echo "Se oprimió el botón 2";
            break;

        case 3:
            echo "Se oprimió el botón 3";
            break;

    }
   
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    <h1>PROGRAMA PARA ENTENDER switch PHP</h1>
    <h2></h2>
    <!--POR SEGURIDAD, PARA PODER SUBIR TIENES QUE TENER MÁS DE 12 AÑOS Y PESAR MÁS DE 45 KILOS.-->
    <form action="Switch sencillisimo.php" method="post"><!--Con el action="ejercicio.php" lo enviamos a este mismo doc.  De igual importancia es el método post para enviar la información a PHP-->
        <input type="submit" name="btnValor" value="1"><!--Es un botón que tiene como etiqueta "1" -->
        <br><!--Para hacer salto de línea-->
        <br>
        <input type="submit"  name="btnValor" value="2"><!-- Pueden los tres botones, tener el mismo "name", pero con diferente "value"-->
        <br>
        <br>
        <input type="submit" name="btnValor" value="3"><!--OJO porque si no tiene el type="submit" NO ENVÍA NADA-->
        <br>
        <br>
    </form>
</body>
</html>
