<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Bucle While</title>
</head>
<body>
    <h1>PROGRAMA PARA HACER "LOGIN"</h1>
    <h2></h2>
    <form action="Autentificacion de contrasenia.php" method="post"><!--Con el action="ejercicio.php" lo enviamos a este mismo doc.  De igual importancia es el método post para enviar la información a PHP-->
        <input type="text" name="password1" placeholder="Ingresa tu contraseña">
        <br><!--Para hacer salto de línea-->
        <br>
        <input type="text" name="password2" placeholder="Confirma tu contraseña">
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
    
$password1="";/*Las declaramos vacias, ambas, para que no arroje error. */
$password2="";
$password1=$_POST['password1'];
$password2=$_POST['password2'];
while ($password1 != $password2){
    echo "Contraseñas no coinciden";
    break; /* SIN ESTE BENDITO BREAK EL CICLO SE SIGUE HASTA QUE TENGAS QUE CORTAR EL PROGRAMA */
}
if($password1==$password2){/* Con este if nos aseguramos de que solo si sucede la condición, manda el mensaje. Es que solo hay de dos, o coinciden las contraseñas o NO coinciden. */
    echo "Gracias por registrarte";
}

}
?>
