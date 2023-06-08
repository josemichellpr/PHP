<?php 
if($_POST){//Si enviaste información ($_POST = true) entonces guarda esa misma información en estas variables
    $edad=$_POST['valorA'];//Recibir información del formulario HTML (método POST) | Ya no cambia las variables, solamente que se correspondan bien y listo.
    $peso=$_POST['valorB'];/* Lo que importa es que los atributos name de HTML coincidan con los que aquí se declaran dentro del método POST */
    if($edad >= 12 && $peso >= 45){
        echo "Puedes subir a la atracción";
    }   
    else{/* Si no es ni mayor ni menor, entonces son iguales */
        echo "No puedes subir a la atracción";

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>If anidados</title>
</head>
<body>
    <h1>PROGRAMA QUE SIMULA LA ENTRADA A SIX FLAGS</h1>
    <h2>POR SEGURIDAD, PARA PODER SUBIR TIENES QUE TENER MÁS DE 12 AÑOS Y PESAR MÁS DE 45 KILOS.</h2>
    <!--POR SEGURIDAD, PARA PODER SUBIR TIENES QUE TENER MÁS DE 12 AÑOS Y PESAR MÁS DE 45 KILOS.-->
    <form action="If-else.php" method="post"><!--Con el action="ejercicio.php" lo enviamos a este mismo doc.  De igual importancia es el método post para enviar la información a PHP-->
        <input type="text" name="valorA" placeholder="Edad">
        <br><!--Para hacer salto de línea-->
        <br>
        <input type="text" step="any" name="valorB" placeholder="Peso"><!--Mucho OJO con step="any" porque gracias a esa instrucción, no manda error cuando ingresamos un dato con decimales (flotante) -->
        <br>
        <br>
        <input type="submit" value="Enviar"><!--OJO porque si no tiene el type="submit" NO ENVÍA NADA-->
        <br>
        <br>
    </form>
</body>
</html>
