<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Bucle For</title>
</head>
<body>
    <h1>PROGRAMA "TABLAS DE MULTIPLICAR"</h1>
    <h2></h2>
    <form action="Ciclo for.php" method="post"><!--Con el action="ejercicio.php" lo enviamos a este mismo doc.  De igual importancia es el método post para enviar la información a PHP-->
        <input type="tel" name="numero" placeholder="Ingresa el número"><!--Con el método type="tel" solo va a admitir números -->
        <br><!--Para hacer salto de línea-->
        <br>
        <input type="submit" value="Enviar"><!--OJO porque si no tiene el type="submit" NO ENVÍA NADA | Con value="enviar"-->
        <br>
        <br>
    </form>
</body>
</html>

<?php 
if($_POST){//Si enviaste información ($_POST = true) entonces guarda esa misma información en estas variables.
    
$numero=$_POST['numero'];;//Recibir información del formulario HTML (método POST) y guardarlo en esta variable|
for($i=1;$i<11;$i++){
    echo $numero*$i.'<br/>';/* br para el salto de línea */
   }
   
}
?>
