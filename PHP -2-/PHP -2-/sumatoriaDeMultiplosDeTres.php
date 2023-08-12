<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sumatoria de múltiplos de tres</title>
    <link rel="stylesheet" href="static/css/style.css">
</head>
<body>
    <div class="container"> <!--Ya sabes, "container" es para centrar-->
    <h1>Sumatoria de múltiplos de tres</h1>
        <h2>Ingresa tus valores</h2>
        <form action="sumatoriaDeMultiplosDeTres.php" method="post"><!--Todos estos <input> deben estar dentro de este <form> y con un     method="post", porque de lo contrario no funciona -->
            <input type="number" placeholder="Inicio" id="input1" name="valor1" step="any"></input><!--type="number" (para que el navegador solo, permita ingresar números) | id="input1" (es por JS) | name="valor1" (es para mandar el valor a una variable PHP por el método POST) | step="any" (para que permita valores flotantes, números con decimales, en la entrada de datos)  -->
            <br>
            <br>
            <input type="number" placeholder="Final" id="input2" name="valor2" step="any"></input>
            <br>
            <br>
            <button class="calc1" disabled id="corte" name="btnValor" value="Calcular">Calcular</button><!--El value="Calcular" será utilizado dentro del switch que está más abajo | disabled id="corte" es para bloquear el botón, según las condiciones que le demos-->
            <br>
            <br>
            <script src="static/js/sumatoriaDeMultiplosDeTres.js"></script><!--Aunque se ha robustecido el algoritmo, dejo el enlace a JS para analizarlo y mejorarlo despues.-->
          
        </form>

        <?php 
            if($_POST){//Si enviaste información ($_POST = true) entonces guarda esa misma información en estas variables

                $i=0;/*  evito el horrible error FATAL que aparece con negritas al inicio. */
                $limite_inferior=0;/* evito el horrible error FATAL que aparece con negritas al inicio. */
                $limite_superior=0;
                $variable=$limite_inferior;
                $suma_de_numeros_multiplos_de_tres=0;

                $limite_inferior=$_POST['valor1'];/* Guardamos en la variable "$" lo que nos mande HTML con el name="valor1  */
                $limite_superior=$_POST['valor2'];
                
                $btnValor=$_POST['btnValor'];/* Recoje el valor que te haya enviado la parte de HTML y guardala en esta variable $btnValor,que despues será discriminada en el siguiente switch, teniendo en cuenta "value" de HTML   */
                if($limite_inferior<0 || $limite_superior<0){
                    echo "</br> Error. Vuelve a ingresar los datos"; /* Con </br> en esta línea de código, si funcionó el espacio */
                }
                
                else{
                    if($limite_inferior>$limite_superior){
                        echo "</br> Error. Vuelve a ingresar los datos";
                    }
                    else{
                        switch($btnValor){
                            case "Calcular":/* ¿Recuerdas value="Calcular" de <button> ? */
                                while(!($i==($limite_superior-$limite_inferior)+1)){/* Pongo así la lógica de programación porque en Raptor, entra al bucle cuando la premisa es FALSA y en PHP cuando es VERDADERA, por eso uso el operador lógico NOT */
        
                                    if($variable%3==0){$suma_de_numeros_multiplos_de_tres=$suma_de_numeros_multiplos_de_tres+$variable;
                                    }
                                    $i=$i+1;
                                    $variable=$variable+1;
                                }
                                echo"El resultado de la sumatoría es ".$suma_de_numeros_multiplos_de_tres;
                            
                                break;/* break, porque así viene en la documentación y me imagino que para detener el programa */       
                        }

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