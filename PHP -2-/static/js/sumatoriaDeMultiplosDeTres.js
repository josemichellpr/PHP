let trigger1 = document.getElementById("input1") /* IMPORTANTE IMPORTANTE -->  Tuve que cambiar el nombre de la variable por "trigger1" porque se estaba bloqueando este algoritmo. Con ese cambio JS no se cuatrapea (anteriormente el nombre de la variable era "activador") */
let trigger2= document.getElementById("input2")  

trigger2.addEventListener("keyup", () => {
if(trigger2.value<trigger1.value){
    document.getElementById("corte").disabled = true
}
else{
    document.getElementById("corte").disabled = false
}
})