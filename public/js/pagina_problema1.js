/**
 * Created by ciceromoura on 27/07/17.
 */


$(document).ready(function() {


    $("#form_livro_empretado").submit(function (e) {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        e.preventDefault();

        var fd = new FormData();

        fd.append('livro_nome', $('#livro_nome').val());
        fd.append('livro_usuario', $('#livro_usuario').val());
        fd.append('livro_tipo_usuario', $('#livro_tipo_usuario').val());
        fd.append('livro_data_emprestimo', '');
        fd.append('livro_data_entrega', '');


        $.ajax({

            url: '/problema1/salvaFormulario',
            type: 'POST',
            data: fd,
            dataType: 'json',

            error: function () {
                alert('Erro ao tentar ação!');
            },
            success: function (data) {
                window.location.href = "/problema1/emprestimo/" + data['id'];

            },

            processData: false,
            cache: false,
            contentType: false

        });
    });
});