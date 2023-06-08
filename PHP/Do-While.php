<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Bucle Do-While</title>
</head>
<body>
    <h1>PROGRAMA "TABLAS DE MULTIPLICAR"</h1>
    <h2></h2>
    <form action="Do-While.php" method="post"><!--Con el action="ejercicio.php" lo enviamos a este mismo doc.  De igual importancia es el método post para enviar la información a PHP-->
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
    
$numero=$_POST['numero'];//Recibir información del formulario HTML (método POST) y guardarlo en esta variable|
$i=1;/* Se declara de una vez, para no tener problemas*/
do{
    echo $numero*$i.'<br/>';/* br para el salto de línea */
    $i++; /* Te incrementas en una unidad por cada ciclo completado */
   }
   while($i<11);/* Muy importante este punto y coma */
   
}
?>
