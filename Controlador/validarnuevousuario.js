function agregarfav(){
                swal("Good job!", "You clicked the button!", "success")
            }

function validar(){
    var nombre, apellido, correo, clave, clave2, telefono, expresion;
    nombre = document.getElementById("nombre").value;
    apellido = document.getElementById("apellido").value;
    correo = document.getElementById("correo").value;
    clave = document.getElementById("clave").value;
    clave2 = document.getElementById("clave2").value;
    telefono = document.getElementById("telefono").value;
    
    expresion = /\w+@\w+\.+[a-z]/;
    
    if(nombre === "" || apellido === "" || correo === "" || clave === "" || clave2 === "" || telefono === ""){
        swal({   title: "Todos los campos son obligatorios",   
            type: "warning",  confirmButtonColor: "#00cccc",   
            confirmButtonText: "Continuar",   closeOnConfirm: false });
        return false;
    }
    if(clave !== clave2){
        swal({   title: "Las claves no coinciden",   
            type: "warning",  confirmButtonColor: "#00cccc",   
            confirmButtonText: "Continuar",   closeOnConfirm: false });
        return false;
    }
    else if(nombre.length>60){
        swal({   title: "El nombre es muy largo",   
            type: "warning",  confirmButtonColor: "#00cccc",   
            confirmButtonText: "Continuar",   closeOnConfirm: false });
        return false;
    }
    
    else if(apellido.length>60){
        swal({   title: "El nombre es muy largo",   
            type: "warning",  confirmButtonColor: "#00cccc",   
            confirmButtonText: "Continuar",   closeOnConfirm: false });
        return false;
    }

    else if(correo.length>40){
        swal({   title: "El correo es muy largo",   
            type: "warning",  confirmButtonColor: "#00cccc",   
            confirmButtonText: "Continuar",   closeOnConfirm: false });
        return false;
    }
    else if(!expresion.test(correo)){
        swal({   title: "El correo no es valido",   
            type: "warning",  confirmButtonColor: "#00cccc",   
            confirmButtonText: "Continuar",   closeOnConfirm: false });
        return false;
    }
    else if(clave.length>40){
        swal({   title: "El usuario y la clave solo deben tener 20 caracteres como máximo",   
            type: "warning",  confirmButtonColor: "#00cccc",   
            confirmButtonText: "Continuar",   closeOnConfirm: false });
        return false;
    }
    else if(telefono.length>9){
        swal({   title: "El telefono es muy largo",   
            type: "warning",  confirmButtonColor: "#00cccc",   
            confirmButtonText: "Continuar",   closeOnConfirm: false });
        return false;
    }
    else if(isNaN(telefono)){
        swal({   title: "El telefono ingresado no es un número",   
            type: "warning",  confirmButtonColor: "#00cccc",   
            confirmButtonText: "Continuar",   closeOnConfirm: false });
        return false;
    }
}