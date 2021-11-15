function mensaje() {
    alert ("Operación exitosa")
}

function notificacion() {
    alert ("Mensaje enviado")
}


/*Intento de calcular la edad*/
const fechaNacimiento = document.getElementById(fecNac)
const edad = document.getElementById(edad)
const calcularEdada=(fecNac)=>{
    const fechaActual=new Date();
    const anioActual=parseInt(fechaActual.getFullYear());
    const mesActual=parseInt(fechaActual.getMonth()) + 1;
    const diaActual=parseInt(fechaActual.getDate());

    const anoNacimiento=parseInt(String(fechaNacimiento).substring(0, 4))
    const mesNacimiento=parseInt(String(fechaNacimiento).substring(5, 7))
    const diaNacimiento=parseInt(String(fechaNacimiento).substring(8, 10))



    let edad= anioActual - anoNacimiento;
    if(mesActual<mesNacimiento){
        edad = edad - 1;
    }else if(mesActual==mesNacimiento){
        if(diaActual<diaNacimiento){
            edad--;
        }
    }
    return edad;
};

window.addEventListener('load',function(){
    fechaNacimiento.addEventListener('change',function(){
        if(this.value){
            edad.innerText = 'la edad es: ${calcularEdad(this.value)} años';
        }
        
    })
})