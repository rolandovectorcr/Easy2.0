function validarart() {
    var titulo, precio, categoria, zona, descripcion;
    precio = document.getElementById("precio").value;
    categoria = document.getElementById("categoria").value;
    zona = document.getElementById("zona").value;
    descripcion = document.getElementById("descripcion").value;
    if (isNaN(precio)) {
        swal({   title: "El precio no es valido",   
            type: "warning",  confirmButtonColor: "#00cccc",   
            confirmButtonText: "Continuar",   closeOnConfirm: false });
        return false;
    }
}