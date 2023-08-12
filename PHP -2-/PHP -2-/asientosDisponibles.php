<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¿Hay asientos disponibles?</title>
    <link rel="stylesheet" href="static/css/style.css">
</head>
<body>
    <div class="container"> <!--Ya sabes, "container" es para centrar-->
    <h1>¿Hay asientos disponibles?</h1>
    <h2>Ingresa tus valores</h2>
    <p>40 son los asientos disponibles.</p>
    <form action="asientosDisponibles.php" method="post"><!--Todos estos <input> deben estar dentro de este <form> y con un     method="post", porque de lo contrario no funciona -->
        <input type="number" placeholder="Asientos ocupados" id="inputEl1" name="valor1" step="any"></input><!--type="number" (para que el navegador solo, permita ingresar números) | id="inputEl1" (es por JS) | name="valor1" (es para mandar el valor a una variable PHP por el método POST) | step="any" (para que permita valores flotantes, números con decimales, en la entrada de datos)  -->
        <br>
        <br>
        <input type="number" placeholder="Asientos reservados" id="inputEl2" name="valor2" step="any"></input>
        <br>
        <br>
        <button class="calc1"  name="btnValor" value="Calcular">Calcular</button><!--El value="Calcular" será utilizado dentro del switch que está más abajo | disabled id="pago" es para bloquear el botón, según las condiciones que le demos-->
        <!--No le he puesto un <SCRIPT>  de js porque el algoritmo me parece robusto-->
    </form>

        <?php 
            if($_POST){//Si enviaste información ($_POST = true) entonces guarda esa misma información en estas variables

                define("ASIENTOS_TOTALES",40); 
                $asientosOcupados=0;
                $asientosReservados=0;
                $asientosOcupados=$_POST['valor1'];/* Guardamos en la variable "$" lo que nos mande HTML con el name="valor1  */
                $asientosReservados=$_POST['valor2'];
                $btnValor=$_POST['btnValor'];/* Recoje el valor que te haya enviado la parte de HTML y guardala en esta variable $btnValor,que despues será discriminada en el siguiente switch, teniendo en cuenta "value" de HTML   */
                if($asientosOcupados<0 || $asientosReservados<0){
                    echo "</br> Error. Vuelve a ingresar los datos"; /* Con </br> en esta línea de código, si funcionó el espacio */
                }
                else{
                    if($asientosOcupados>ASIENTOS_TOTALES){
                        echo "</br> Error. Vuelve a ingresar los datos"; /* Con </br> en esta línea de código, si funcionó el espacio */
                    }
                    else{
                        if($asientosReservados>ASIENTOS_TOTALES){
                            echo "</br> Error. Vuelve a ingresar los datos"; 
                        }
                        else{
                            if(($asientosReservados+$asientosOcupados)>ASIENTOS_TOTALES){
                                echo "</br> Error. Vuelve a ingresar los datos"; 
                            }
                            else{
                                switch($btnValor){
                                    case "Calcular":/* ¿Recuerdas value="Calcular" de <button> ? */
                                        $asientos_disponibles=ASIENTOS_TOTALES-($asientosReservados+$asientosOcupados);
                                       
                                        echo "</br> Existen " .$asientos_disponibles. " asientos disponibles";
                                    
                                        break;/* break, porque así viene en la documentación y me imagino que para detener el programa */
                 
                                }
                            }
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