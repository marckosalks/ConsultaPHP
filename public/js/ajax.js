$(document).ready(function() {
    $('#enviar').on('click', function () {
        $.ajax({
            url: '/ajax',
            type: 'POST',
            data: {
                nome: $('#nome').val(),
                email: $('#email').val(),
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            success: function (resposta) {
                $('#resultado').html(`
                    <p>${resposta.mensagem}</p>
                    <p><strong>Nome:</strong> ${resposta.nome}</p>
                    <p><strong>Email:</strong> ${resposta.email}</p>
                `);
            },
            error: function (erro) {
                console.error('Erro na requisição:', erro);
            }
        });
    });
});
