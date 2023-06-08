<?php 
if($_POST){//Si enviaste información ($_POST = true) entonces guarda esa misma información en estas variables
    $valorA=$_POST['valorA'];//Recibir información del formulario HTML (método POST)
    $valorB=$_POST['valorB'];/* Lo que importa es que los atributos name de HTML coincidan con los que aquí se declaran dentro del método POST */
    if($valorA > $valorB){
        echo $valorA. " mayor que ".$valorB;
        $valorA=null;/* Los he puesto así, para que se reinicie el valor (apenas estoy empezando en PHP, pero ahí la llevo) */
        $valorB=null;

    }   
    if($valorA < $valorB){
        echo $valorA. " menor que ".$valorB;
        $valorA=null;
        $valorB=null;
    }
    else{/* Si no es ni mayor ni menor, entonces son iguales */
        echo $valorA. " igual a ".$valorB;
        $valorA=null;
        $valorB=null;
    }   /* Tiene un detalle el programa, que a veces amontono las palabras, pero esta bien, para ir agarrando confianza. */
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Operadores aritméticos</title>
</head>
<body>
    <h1>PROGRAMA QUE COMPARA DOS NÚMEROS</h1>
    <form action="Operadores relacionales.php" method="post"><!--Con el action="ejercicio.php" lo enviamos a este mismo doc.  De igual importancia es el método post para enviar la información a PHP-->
        <input type="text" name="valorA" placeholder="Valor A">
        <br><!--Para hacer salto de línea-->
        <br>
        <input type="text" name="valorB" placeholder="Valor B">
        <br>
        <br>
        <input type="submit" value="Enviar"><!--OJO porque si no tiene el type="submit" NO ENVÍA NADA-->
        <br>
        <br>
    </form>
</body>
</html>
