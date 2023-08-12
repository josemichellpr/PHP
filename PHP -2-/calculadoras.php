<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadoras PHP</title>
    <link rel="stylesheet" href="static/css/style.css">
</head>
<body>

<header>
<h1>JOSÉ MICHELL PÉREZ RODRÍGUEZ</h1>
    <img src="" alt="">
    <nav>
        <ul class="menu-horizontal">
            <li><a  class="bolder" href="../index2.html">Inicio</a></li>
            <li><a  class="bolder" href="../docencia2.html">Docencia</a></li>
            <li><a  class="bolder" href="../Formulario_contacto/contacto2.php">Contacto</a></li>
            <li>
                <a   class="bolder" href="#">Calculadoras</a>
                <ul class="menu-vertical">
                    <li><a target=”_blank” href="../CALCULADORA/CalcTrect.html">Teorema de Pitágoras</a></li>
                    <li><a target=”_blank” href="calculadoras.php">Varias</a></li>
                </ul>
            </li>
            <li><a  target=”_blank” class="bolder" href="../BLACKJACK/blackjack.html">Juegos</a></li>
            <li>
                <a   class="bolder" href="#">Mi Tienda</a>
                <ul class="menu-vertical">
                    <li><a target=”_blank” href="../Mi_Tienda_clases.html">Clases</a></li>
                    <li><a target=”_blank” href="../proyectoE-commerce.html"> Proyecto E-Commerce</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</header>
    
<div class="container"> 
<section>
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

?>
</section><!--Termina section-->




<section>
<h1>Conversor a horas y minutos</h1>
<h2>Ingresa tus valores</h2>
<form action="ConvertidorAhoras.php" method="post"><!--Todos estos <input> deben estar dentro de este <form> y  con un     method="post", porque de lo contrario no funciona. En action="" a donde se dirige -->
    <input type="number" placeholder="Tiempo en segundos"  name="tiempo_en_segundos" step="any"></input><!--type="number" (para que el navegador solo, permita ingresar números) | name="" (es para mandar el valor a una variable PHP por el método POST) | step="any" (para que permita valores flotantes, números con decimales, en la entrada de datos)  -->
    <br>
    <br>
    <button class="calc1"  name="btnValor" value="Calcular" >Calcular</button><!--class="calc1" es por CSS | name="btnValor"  (es para mandar el valor a una variable PHP por el método POST) y guardarlo en una variable | value="Humano-perro" es por el SWITCH (php) |  -->
    
</form>
   

<?php
?>
</section><!--Termina section-->

<section>
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
    ?>
</section><!--Termina section-->


<section>
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
    
</form>

    <?php 
    ?>

</section><!--Termina section-->


<section>
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
    <script src="static/js/sumatoriaDeMultiplosDeTres.js"></script><!--Aunque se ha robustecido el algoritmo, dejo el enlace a JS para analizarlo y mejorarlo despues.-->
    
</form>

        <?php 
        ?>

</section><!--Termina section-->

    </div><!--close container--><!--Todo lo anterior va en esta clase, para que este centrado-->



<footer>
    <div class="container_footer">
        <div class= "column_footer">
            <div class="col_footer">
                <h2>JMPR</h2>
                <p>Espero que hayas disfrutado mi web personal, en la cual quiero demostrar mis habilidades como Full Stack Web Developer.</p>
                </div><!--Termina 'col'-->
        
            <div class="col_footer">
                <h2>Navegar</h2>
                <p>
                <a href="index2.html">Inicio</a>
                <br>
                <a href="Formulario_contacto/contacto2.php">Contacto</a>
                <br>
                <a href="CALCULADORA/CalcTrect.html">Calculadora</a>
                <br>
                <a href="BLACKJACK/blackjack.html">Juegos</a>
                <br>
                <a href="Mi_Tienda_clases.html">Clases</a>
                <br>
                <a href="proyectoE-commerce.html">proyecto E-commerce</a>
                <br>
                </p>
            </div>

            <div class="col_footer">
                <h2>Servicios</h2>
                <p>Profesor de Física, Matemáticas y Programación.</p>
                <p>Full Stack Web Developer</p>
                
            </div>

            <div class="col_footer">
                <h2>Contacto</h2>
                <p>&#9993 michellp439@outlook.es</p>
                <p>&#9742 2216279820</p>
                
            </div>
        </div><!--Termina COLUMN-->

        <div class="ultimate_footer">
            <p>Sitio web diseñado por José Michell Pérez Rodríguez</p>
        </div>
    
        </div><!--Termina container_footer-->
        
    </footer>

</body>
<!-- 
    10 de julio de 2023
    He puesto el script de JS  que bloquea los botones en otra carpeta. En ese caso, si me parecia un poco spaguetti. 
    Noto que ahora que el <button> está dentro del <form> no necesito de una nueva clase como "BtnCenter" con un text align:center. SE CENTRA SIN NECESIDAD DE ESO. 
        He quitado el CÓDIGO PHP de esta parte porque te puedes confundir, haciendo cambias a PHP aquí y no en el archivo  que esta dentro del <form action="">. Por eso he decidido quitarlo, para tener más claridad en lo que hago.
        HAY VECES QUE ME HE PERCATADO QUE AUNQUE NO HAY FALLAS en mi lógica, el bloqueo del botón con JS no funciona. Lo que he hecho es cambiar el nombre de los name que están dentro de los <input> y de esa forma funciona. Debe ser por la memoria de la página web, tantos name iguales, confunden a la máquina. 
-->
</html>
