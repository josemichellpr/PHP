<?php 
if($_POST){//Si enviaste información ($_POST = true) entonces guarda esa misma información en estas variables
    $tuEdad=$_POST['valorA'];//Recibir información del formulario HTML (método POST) | Ya no cambia las variables, solamente que se correspondan bien y listo.
    $edadTuamigo=$_POST['valorB'];/* Lo que importa es que los atributos name de HTML coincidan con los que aquí se declaran dentro del método POST */
    if($tuEdad > $edadTuamigo){
        echo "Eres mayor que tu amigo";
        $valorA=null;/* Los he puesto así, para que se reinicie el valor (apenas estoy empezando en PHP, pero ahí la llevo) */
        $valorB=null;
    }   
    
    else{/* Si no es ni mayor ni menor, entonces son iguales */
        if ($tuEdad==$edadTuamigo){
            echo "Tienen la mismo edad ambos";
        }
        else{
            echo "Tu amigo es mayor que tu";
        }
    }   /* Tiene un detalle el programa, que aveces amontono las palabras, pero esta bien, para ir agarrando confianza. */
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
    <h1>PROGRAMA QUE COMPARA EDADES</h1>
    <form action="If anidado.php" method="post"><!--Con el action="ejercicio.php" lo enviamos a este mismo doc.  De igual importancia es el método post para enviar la información a PHP-->
        <input type="text" name="valorA" placeholder="Tu edad">
        <br><!--Para hacer salto de línea-->
        <br>
        <input type="text" name="valorB" placeholder="La edad de tu amigo">
        <br>
        <br>
        <input type="submit" value="Enviar"><!--OJO porque si no tiene el type="submit" NO ENVÍA NADA-->
        <br>
        <br>
    </form>
</body>
</html>
