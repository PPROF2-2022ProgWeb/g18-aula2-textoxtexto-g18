function ValidarDatos() {
    var nombre, formulario;
    formulario= document.getElementById("formcito").value
    if(document.getElementById("name").value.length < 3){
    
        alert("Ingrese un valor valido en el campo nombre")
    }else{
        alert("Campo Nombre valido")
    }

    if(document.getElementById("lastame").value.length < 3){
    
        alert("Ingrese un valor valido en el campo apellido")
    }else{
        alert("Campo Apellido valido")
    }

    if(document.getElementById("pais").value.length < 3){
    
        alert("Ingrese un valor valido en el campo pais")
    }else{
        alert("Campo Pais valido")
    }

    if(document.getElementById("provincia").value.length < 3){
    
        alert("Ingrese un valor valido en el campo provincia")
    }else{
        alert("Campo Provincia valido")
    }

    if(document.getElementById("usuario").value.length < 3){
    
        alert("Ingrese un valor valido en el campo usuario")
    }else{
        alert("Campo Usuario valido")
    }

    if(document.getElementById("contraseña").value.length < 9){
    
        alert("Ingrese un valor de 8 caracteres o mas, en el campo contraseña")
    }else{
        alert("Campo Contraseña valido")
    }

    if(document.getElementById("contraseña").value.length > 9){
    
        alert("Datos enviados correctamente")
    } else{
        alert("Error: Ingrese datos nuevamente")
    }
}