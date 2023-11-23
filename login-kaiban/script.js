
document.addEventListener('DOMContentLoaded', function () {
    const confirmButton = document.getElementById('confirmButton');

    confirmButton.addEventListener('click', function () {
        // Usando SweetAlert2 para confirmar a ação
        Swal.fire({
            title: 'Tem certeza?',
            text: 'Você realmente deseja realizar esta ação?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim, confirmar!',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(window.location.href='lixeira.php' );
            }
        });
    });
});
