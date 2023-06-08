<?php 

if($_POST){//Si enviaste información ($_POST = true) entonces guarda esa misma información en estas variables
    $nombre=$_POST['name'];//Recibir información del formulario HTML (método POST)
    $apellido=$_POST['apellido'];/* Lo que importa es que los atributos name de HTML coincidan con los que aquí se declaran */
}
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
    <form action="String y concatenacion.php" method="post"><!--Con el action="ejercicio.php" lo enviamos a este mismo doc.  De igual importancia es el método post para enviar la información a PHP-->
        <input type="text" name="name" placeholder="Nombre">
        <br><!--Para hacer salto de línea-->
        <input type="text" name="apellido" placeholder="Apellido">
        <br>
        <input type="submit" value="Enviar"><!--OJO porque si no tiene el type="submit" NO ENVÍA NADA-->
        <?php 
        echo"Hola ".$nombre." ".$apellido;//Fíjate como se concateno un espacio en blanco, para que no se amontone.
        ?>

    </form>
</body>
</html>
