<?php 
if($_POST){//Si enviaste información ($_POST = true) entonces guarda esa misma información en estas variables
    $valorA=$_POST['valorA'];//Recibir información del formulario HTML (método POST)
    $valorB=$_POST['valorB'];/* Lo que importa es que los atributos name de HTML coincidan con los que aquí se declaran dentro del método POST */
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
    <h1>PROGRAMA QUE SUMA DOS NÚMEROS</h1>
    <form action="Operadores aritmeticos.php" method="post"><!--Con el action="ejercicio.php" lo enviamos a este mismo doc.  De igual importancia es el método post para enviar la información a PHP-->
        <input type="text" name="valorA" placeholder="Valor A">
        <br><!--Para hacer salto de línea-->
        <br>
        <input type="text" name="valorB" placeholder="Valor B">
        <br>
        <br>
        <input type="submit" value="Enviar"><!--OJO porque si no tiene el type="submit" NO ENVÍA NADA-->
        <?php 
        echo $valorA." más ".$valorB." es igual a "  .($valorA+$valorB); /*Fíjate como no use una variable "suma" que guarde el valor (de la suma obvio)*/
        ?>

    </form>
</body>
</html>
