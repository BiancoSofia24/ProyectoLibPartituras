// Ventana de Sweet Alert ELIMINAR UNA CATEGORÍA   
Swal.fire({
    title: 'Do you want to delete the selected category?',
    text: 'This action cannot be undone.',
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#d33',
    confirmButtonText: 'Yes! Do it.',
    cancelButtonText: 'No, i don´t want to.'
}).then((result) => {
    if(!result.value){
        // Redirección a admin categorías
        window.location = '';
    }
})