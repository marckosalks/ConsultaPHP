$(document).ready(function () {
    const codemp = 9;
    // const URL_HUB = '{{env('URL_HUB')}}servicos/lista?codemp=' + codemp;
    const URL_HUB = 'https://api.github.com/users/marckosalks/repos';
    // const TOKEN_HUB = process.env.BEARER_HUB;

    $.ajax({
        url: URL_HUB,
        method: 'GET',
        // headers: {
        //     'Authorization': `Bearer ${TOKEN_HUB}`
        // },
        // data: { servico:  },
        success: function (resposta) {
            console.log("resposta:", resposta);
            const data = resposta;

            const select = $('#tipoServico');

            data.forEach(servico => {
                // console.log(element.name);

                //adciona options com os retonos da api
                select.append(`<option value="${servico.id}">${servico.name}</option>`);
            });
        },
        error: function (xhr) {
            console.error('Erro ao buscar dados:', xhr.status, xhr.responseText);
        }
    });

});
