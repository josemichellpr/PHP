<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor a horas y minutos</title>
    <link rel="stylesheet" href="static/css/style.css">
</head>
<body>

    <div class="container"> 
    <h1>Conversor a horas y minutos</h1>
    <h2>Ingresa tus valores</h2>
    <form action="ConvertidorAhoras.php" method="post"><!--Todos estos <input> deben estar dentro de este <form> y  con un     method="post", porque de lo contrario no funciona. En action="" a donde se dirige -->
        <input type="number" placeholder="Tiempo en segundos"  name="tiempo_en_segundos" step="any"></input><!--type="number" (para que el navegador solo, permita ingresar números) | name="" (es para mandar el valor a una variable PHP por el método POST) | step="any" (para que permita valores flotantes, números con decimales, en la entrada de datos)  -->
        <br>
        <br>
        <button class="calc1"  name="btnValor" value="Calcular" >Calcular</button><!--class="calc1" es por CSS | name="btnValor"  (es para mandar el valor a una variable PHP por el método POST) y guardarlo en una variable | value="Humano-perro" es por el SWITCH (php) |  -->
        <br>
        <br>
    </form>
   

<?php
/* Programa que convierte segundos en horas y minutos */
if($_POST){//Si enviaste información ($_POST = true) entonces guarda esa misma información en estas variables

    $tiempo_en_segundos="";/* Con las comillas vacias, evito el horrible error FATAL que aparece con negritas al inicio. */
    $tiempo_en_segundos=$_POST['tiempo_en_segundos'];/* Recoje el valor que te haya enviado la parte de HTML y guardala en esta variable */
    
    $btnValor=$_POST['btnValor'];/* Recoje el valor que te haya enviado la parte de HTML y guardala en esta variable $btnValor  */
    if($tiempo_en_segundos<0){/*Pongo esta restricción por la obvia razón de que no existe el tiempo negativo. */
        echo "</br> Error. Vuelve a ingresar los datos";
    }
    else{
        switch($btnValor){
            case "Calcular":
                $segundos_que_contiene_una_hora=3600;
                $segundos_que_contiene_un_minuto=60;
                $minutos_que_contiene_una_hora=$segundos_que_contiene_un_minuto;
                $residuo_en_segundos= ($tiempo_en_segundos%$segundos_que_contiene_una_hora);
                $horas=floor($tiempo_en_segundos/$segundos_que_contiene_una_hora);
                $minutos=floor($residuo_en_segundos/$segundos_que_contiene_un_minuto);
                $segundos=$residuo_en_segundos%$minutos_que_contiene_una_hora;
                echo "Horas: " .$horas,  "; minutos: " .$minutos,  "; segundos: " .$segundos; /* Con </br> en esta línea de código, si funcionó el espacio */
                break;
        }
    }  
}
?>
    <br>
    <br>
     <a href="calculadoras.php">Regresar</a>
    </div><!--close container--><!--Todo lo anterior va en esta clase, para que este centrado-->
</body>
</html>
