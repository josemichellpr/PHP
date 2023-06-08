<!DOCTYPE html>
<html lang="en">
<head>
    <link href="RadioButtonsDocente.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RadioButtons en PHP</title>
</head>
<body>
    <div class="container">
    <form action="RadioButtonsDocente.php" method="post"><!--Los tres radioButton tienen el mismo name="language", DE LO CONTRARIO, se podría elegir más de uno al MISMO TIEMPO-->
        <input type="radio" name="language" value="JavaScript"><!--value="JavaScript" serán utilizados dentro del switch que está más abajo-->
        JavaScript <br> <!--Si no pones el "JavaScript", solo aparece el radioButton, sin nungun texto que lo acompañe-->
        <input type="radio" name="language" value="Python"><!-- value="Python" serán utilizados dentro del switch que está más abajo-->
        Python <br> <!--Si no pones el "Python", solo aparece el radioButton, sin nungun texto que lo acompañe-->
        <input type="radio" name="language" value="PHP"><!-- value="PHP" serán utilizados dentro del switch que está más abajo-->
        PHP <br> 
        <input type="submit" name="Enviar" value="Enviar">
        <br>
    </form>

    <?php

        if(isset($_POST["language"])){/* Estaba confundiendome y poniendo el name del botón Enviar, pero no es así, esta es la manera correcta */
            $language=null;/* Para que no arroje un terrible ERROR. Es indiferente si declaramos esta variable, dentro del if o fuera */
            $language=$_POST['language'];/* Se guarda en  $language la información de los radioButton. Se guardan los value, por eso se usan despues en el switch()  */
            switch($language){
                case 'JavaScript':
                    echo "Has elegido JavaScript";
                    break;/* Se oprime el break, porque así viene en la documentación y me imagino que para detener el programa */

                case 'Python':
                    echo "Has elegido Python";
                    break;

                case 'PHP':
                    echo "Has elegido PHP";
                    break;
                
                default:
                    echo "Por favor elige una opción";

            }
        }

        else{
            echo "Elige una opción porfavor";
        }

?>
    </div>
</body>
</html>


<!--FUNCIONA MUY BIEN. SIN FALLAS.-->
