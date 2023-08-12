<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sumatoria Simple</title>
    <link rel="stylesheet" href="static/css/style.css">
</head>
<body>
    <div class="container"> <!--Ya sabes, "container" es para centrar-->
    <h1>Sumatoria Simple</h1>
    <h2>Ingresa tus valores</h2>
    <form action="sumatoriaSimple.php" method="post"><!--Todos estos <input> deben estar dentro de este <form> y con un     method="post", porque de lo contrario no funciona -->
        <input type="number" placeholder="Inicio" id="inputEl11" name="valor1" step="any"></input><!--type="number" (para que el navegador solo, permita ingresar números) | id="inputEl1" (es por JS) | name="valor1" (es para mandar el valor a una variable PHP por el método POST) | step="any" (para que permita valores flotantes, números con decimales, en la entrada de datos)  -->
        <br>
        <br>
        <input type="number" placeholder="Límite de sumatoria" id="inputEl22" name="valor2" step="any"></input>
        <br>
        <br>
        <button class="calc1" disabled id="pago" name="btnValor" value="Calcular">Calcular</button><!--El value="Calcular" será utilizado dentro del switch que está más abajo | disabled id="pago" es para bloquear el botón, según las condiciones que le demos-->
        <script src="static/js/sumatoriaSimple.js"></script>
        <br>
        <br>
        
    </form>

        <?php 
            if($_POST){//Si enviaste información ($_POST = true) entonces guarda esa misma información en estas variables

                $inicio=0;
                $limite=0;/* Con el cero, evito el horrible error FATAL que aparece con negritas al inicio. */
                $sumatoria=0;
                $inicio=$_POST['valor1'];/* Guardamos en la variable "$" lo que nos mande HTML con el name=""  */
                $limite=$_POST['valor2'];

                
                $btnValor=$_POST['btnValor'];/* Recoje el valor que te haya enviado la parte de HTML y guardala en esta variable $btnValor,que despues será discriminada en el siguiente switch, teniendo en cuenta "value" de HTML   */
                switch($btnValor){
                    case "Calcular":/* ¿Recuerdas value="Calcular" de <button> ? */
                        while(!($inicio==$limite+1)){/* Pongo así la lógica de programación porque en Raptor, entra al bucle cuando la premisa es FALSA y en PHP cuando es VERDADERA, por eso uso el operador lógico NOT */
                            $sumatoria=$sumatoria+$inicio;
                            $inicio=$inicio+1;   
                        }
                        echo "El resultado de la sumatoría es ".$sumatoria;
                    
                        break;/* break, porque así viene en la documentación y me imagino que para detener el programa */
 
                }
            
            }
?>
    <br>
    <br>
     <a href="calculadoras.php">Regresar</a>
     
    </div><!--close container--><!--Todo lo anterior va en esta clase, para que este centrado-->
   
</body>
</html>