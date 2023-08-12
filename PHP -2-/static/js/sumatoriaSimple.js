let activador = document.getElementById("inputEl11")/* Guardamos en la variable "activador" lo que nos mande HTML con el id "inputEl1"  */
let activador2= document.getElementById("inputEl22")/* Guardamos en la variable "activador" lo que nos mande HTML con el id "inputEl2"  */

activador2.addEventListener("keyup", () => {/* Si "activador2" es el que recoje el evento y se va a utilizar un condicional, asegurarse de que quien recoje el evento sea el que primero en el argumento. Como se observa. Si lo pones alreves se bloquea el botón y no funciona apropiadamente. INTENTE OTRAS LÓGICAS DE PROGRAMACIÓN, PERO ESTA HA FUNCIONADO SIN PROBLEMA */
if(activador2.value<activador.value){
    document.getElementById("pago").disabled = true
}
else{
    document.getElementById("pago").disabled = false
}
})