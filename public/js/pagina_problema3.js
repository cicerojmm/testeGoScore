/**
 * Created by ciceromoura on 27/07/17.
 */


$(document).ready(function() {


    $("#botao_verifica_idade").click(function (e) {
        e.preventDefault();

        $.ajax({

            url: '/problema3/mostraIdade',
            type: 'GET',

            error: function () {
                alert('Erro ao tentar ação!');
            },
            success: function (data) {
               alert(data['qtdAnos'] + ' anos para que Juca seja maior que Chico');

            },

            processData: false,
            cache: false,
            contentType: false

        });
    });
});