document.querySelectorAll('.favorito-bt').forEach(button => {
    button.addEventListener('click', function() {
        const productId = this.getAttribute('data-id');
        fetch('/salva-favorito', {
            method: 'POST',
            body: JSON.stringify({ productId }),
            headers: { 'Content-Type': 'application/json' }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Produto adicionado aos favoritos!');
            } else {
                alert('Erro ao adicionar produto aos favoritos.');
            }
        });
    });
});
