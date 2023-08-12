let deshabilitar = document.getElementById("inputhoras") /* IMPORTANTE IMPORTANTE -->  Tuve que cambiar el nombre de la variable por "trigger1" porque se estaba bloqueando este algoritmo. Con ese cambio JS no se cuatrapea (anteriormente el nombre de la variable era "activador") */

deshabilitar.addEventListener("keyup", () => {
if(deshabilitar.value<0){
    document.getElementById("cut").disabled = true
}
else{
    document.getElementById("cut").disabled = false
}
})

/*const DESHABILITAR = document.getElementById("inputhoras") /* IMPORTANTE IMPORTANTE -->  Tuve que cambiar el nombre de la variable por "trigger1" porque se estaba bloqueando este algoritmo. Con ese cambio JS no se cuatrapea (anteriormente el nombre de la variable era "activador") 
let deshabilitar=Math.floor(DESHABILITAR.value)

deshabilitar.addEventListener("keyup", () => {
if(deshabilitar<0){
    document.getElementById("cut").disabled = true
}
else{
    document.getElementById("cut").disabled = false
}
})
*/