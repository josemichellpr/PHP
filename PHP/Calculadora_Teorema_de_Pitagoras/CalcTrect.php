<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calc.T.dePitágoras PHP</title>
    <link rel="stylesheet" href="CalcTrect.css">
</head>
<body>
    <div id="container"> 
    <h1>TEOREMA DE PITÁGORAS - CALCULADORA</h1>
        <img src="imgC/Teorema-de-pitagoras.png" alt="">
        <h2>Ingresa tus valores</h2>
        <form action="CalcTrect.php" method="post"><!--Todos estos <input> deben estar dentro de este <form> y con un     method="post", porque de lo contrario no funciona -->
            <input type="number"  id="inputEl1" name="valor1" step="any"></input><!--type="number" (para que el navegador solo, permita ingresar números) | id="inputEl1" (es por CSS) | name="valor1" (es para mandar el valor a una variable PHP por el método POST) | step="any" (para que permita valores flotantes, números con decimales, en la entrada de datos)  -->
            <input type="number" id="inputEl2" name="valor2" step="any"></input>
            <br>
            <br>
            <input id="calc" name="btnValor" value="Me falta un cateto" type="submit"></input><!--Los value="Me falta un cateto" serán utilizados dentro del switch que está más abajo-->
            <input id="calc1" name="btnValor" value="Me falta la hipotenusa" type="submit"></input>
        </form>

        <?php 
            if($_POST){//Si enviaste información ($_POST = true) entonces guarda esa misma información en estas variables

                $valor1="";/* Con las comillas vacias, evito el horrible error FATAL que aparece con negritas al inicio. */
                $valor2="";/* Con las comillas vacias, evito el horrible error FATAL que aparece con negritas al inicio. */
                $valor1=$_POST['valor1'];
                $valor2=$_POST['valor2'];

                
                $btnValor=$_POST['btnValor'];/* Recoje el valor que te haya enviado la parte de HTML y guardala en esta variable $btnValor,que despues será discriminada en el siguiente switch, teniendo en cuenta los "value" en el <input> de HTML   */
                switch($btnValor){
                    case "Me falta un cateto":
                        $arg= $valor1**2-$valor2**2;
                        if($arg < 0){
                            $arg1 = -1*$arg; /* Si el argumento es negativo, mandará un error (muchas calculadoras fallan con NUMEROS IMAGINARIOS), en ese caso deberá multiplicar por -1, para enmendar el fallo.  */
                            $resc = sqrt($arg1); /*Aplica la raiz cuadrada a arg1 */
                            $resCT = bcdiv($resc, '1', 4); /* $resc (primer argumento), se divide por 1(segundo argumento) y solo se permite cuatro decimales para el resultado */
                            echo $resCT;
                        }
                        else { /*Si es que el argumento no es negativo (evitando el "error" por números IMAGINARIOS) procede con normalidad */
                        $resc = sqrt($arg);
                        $resCT = bcdiv($resc, '1', 4);/* $resc (primer argumento), se divide por 1(segundo argumento) y solo se permite cuatro decimales para el resultado */
                        echo $resCT;
                        }
                        break;/* break, porque así viene en la documentación y me imagino que para detener el programa */

                    case "Me falta la hipotenusa":
                        $hip=hypot($valor1,$valor2); /* hypot es una función predeterminado de PHP para obtener hipotenusa */
                        $hip1= bcdiv($hip, '1', 4);/* $hip1 (primer argumento), se divide por 1(segundo argumento) y solo se permite cuatro decimales para el resultado */
                        echo $hip1;
                        break;
                }
            
            }
?>
     
    </div><!--close container--><!--Todo lo anterior va en esta clase, para que este centrado-->
</body>
</html>
