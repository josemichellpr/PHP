<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de edades</title>
    <link rel="stylesheet" href="static/css/style.css">
</head>
<body>

    <div class="container"> 
    <h1>Conversor de edades "Humana-perruna"</h1>
    <h2>Ingresa tus valores</h2>
    <form action="ConversorDeEdadesHumanaPerruna.php" method="post"><!--Todos estos <input> deben estar dentro de este <form> y con un     method="post", porque de lo contrario no funciona. En action="" a donde se dirige -->
        <input type="number" placeholder="Tu edad" id="inputEl1" name="mi_edad" step="any"></input><!--type="number" (para que el navegador solo, permita ingresar números) | id="inputEl1" (es por JS) | name="mi_edad" (es para mandar el valor a una variable PHP por el método POST) | step="any" (para que permita valores flotantes, números con decimales, en la entrada de datos)  -->
        <br>
        <br>
        <button class="calc1" name="btnValor" value="Humano-perro" >Calcular</button><!--class="calc1" es por CSS | name="btnValor"  (es para mandar el valor a una variable PHP por el método POST) y guardarlo en una variable | value="Humano-perro" es por el SWITCH (php) |  -->
        <!--No le he puesto un <SCRIPT>  de js porque el algoritmo me parece robusto-->
    </form>
   

<?php
/* Programa que convierte la edad humana en edad perruna y viceversa */
if($_POST){//Si enviaste información ($_POST = true) entonces guarda esa misma información en estas variables

    $mi_edad="";/* Con las comillas vacias, evito el horrible error FATAL que aparece con negritas al inicio. */
    $mi_edad=$_POST['mi_edad'];/* Recoje el valor que te haya enviado la parte de HTML y guardala en esta variable */
    
    $btnValor=$_POST['btnValor'];/* Recoje el valor que te haya enviado la parte de HTML y guardala en esta variable $btnValor  */
    if($mi_edad<=0){/*Pongo esta restricción por la obvia razón de que no existe el tiempo negativo. */
        echo "</br> Error. Vuelve a ingresar los datos"; /* Con </br> en esta línea de código, si funcionó el espacio */
    }
    else{
         switch($btnValor){
        case "Humano-perro":
            $primer_anio_perruno= 4;
            $multiplicador_edad_perro=7;
            $mi_edad_perruna=$primer_anio_perruno+($mi_edad-1)*$multiplicador_edad_perro;
            echo "</br> Tu edad perruna es: " .$mi_edad_perruna. " años"; /* Con </br> en esta línea de código, si funcionó el espacio */
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
