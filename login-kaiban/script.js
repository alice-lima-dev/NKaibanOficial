function confirmarExclusao(taskId) {
    Swal.fire({
        title: 'Tem certeza?',
        text: 'Você realmente deseja excluir esta tarefa?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sim, confirmar!',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = 'lixeira.php?id=' + taskId + '&confirm=true';
        }
    });
}
