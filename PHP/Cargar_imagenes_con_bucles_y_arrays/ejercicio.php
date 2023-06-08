<!DOCTYPE html>
<html lang="en">
<head>
    <link href="ejercicio.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container"><!--Meto todo en un container, para estilizarlo y centrarlo-->
    <?php
    $nombres=array("Rey Atanagildo","Rey Ataulfo","Rey Ervigio","Rey Incógnito","Rey Leogivildo","Rey Recesvinto","Rey Sisebuto","Rey Teodorico"
    );
    $n= sizeof($nombres);/* Para que se guarde en una variable, el tamaño del array, para despues ponerla como límite. */
    for($i=0;$i<$n;$i++){/* Con el bucle for, me pareció más sencillo pintar por pantalla los elementos del array. No digo que no se pueda con otros, pero este no falló | count($skills) es para contar la magnitud del array  */
    echo '<img src=img/rey_'.$i.'.png/>'.'</br>';/* br para el salto de línea */
    echo $nombres[$i].'</br>';
    echo '</br>';
   }
    ?>
    </div>  
</body><!--Solo que están un poco pesadas las imágenes y de primera se tarda un poco en cargar dichas imágenes. Si fuera para un trabajo profesional, habría que encontrar la manera de "aligerar" esa información-->
</html>


