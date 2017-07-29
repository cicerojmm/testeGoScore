/**
 * Created by ciceromoura on 27/07/17.
 */


$(document).ready(function() {


    $("#form_sequencia_fibonacci").submit(function (e) {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        e.preventDefault();

        var fd = new FormData();
        var linhas = '';

        fd.append('numeros', $('#numeros').val());
;
        $.ajax({

            url: '/problema5/mostraSequencia',
            type: 'POST',
            data: fd,
            dataType: 'json',

            error: function () {
                alert('Erro ao tentar ação!');
            },
            success: function (data) {

                linhas += '<tr><td>';
                linhas += data['numeroSequencia'];
                linhas += '</td></tr>';

                $('#tabelaMostraConteudo').slideDown();
                $('#tabelaMostraConteudo').append(linhas);

            },

            processData: false,
            cache: false,
            contentType: false

        });
    });
});