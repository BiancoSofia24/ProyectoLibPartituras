// Ventana de Sweet Alert ELIMINAR UNA CATEGORÍA   
Swal.fire({
    title: '¿Desea eliminar la categoría seleccionada?',
    text: 'Está acción no puede deshacerse.',
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#d33',
    confirmButtonText: '¡Sí, elimínala!',
    cancelButtonText: 'No, no quiero.'
}).then((result) => {
    if(!result.value){
        // Redirección a admin categorías
        window.location = '../../pages/adminCategorias.php';
    }
})