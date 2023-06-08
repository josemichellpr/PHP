<?php
$skills =array("math degree","python degree","php degree","js degree","frontend developer","papasito");
//echo $skills; // Tiene razón el profe, con echo te arroja un terrible ERROR
for($i=0;$i<count($skills);$i++){/* Con el bucle for, me pareció más sencillo pintar por pantalla los elementos del array. No digo que no se pueda con otros, pero este no falló | count($skills) es para contar la magnitud del array  */
    print_r($skills[$i].'</br>');/* br para el salto de línea */
   }

?>
