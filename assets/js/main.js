
$(function() {

    $(".maskDate").mask("99/99/9999");
    $(".maskHour").mask("99:99");

    $('#filtrar').click(function(e){
        e.preventDefault();

        var el = $(this);
        var elem = el.parents('.form');
        $.ajax({
            cache: false,
            async: true,
            url: urlSite + '/consultas/filtro',
            dataType: 'json',
            type: 'POST',
            data: {
                nome: elem.find('#nome').val(),
                data_init: elem.find('#data_init').val(),
                data_end: elem.find('#data_end').val()
            },
            success: function(data){
                if(data.status == 'nada'){
                    $('.list-items').find('.items').html('<tr><td colspan="5" class="msg"><strong>Nenhum resultado encontrado para a busca!</strong></td></tr>');

                } else {
                    items = [];
                    for (var i=0; i < data.length; i++) {
                        dta = data[i].dt_consulta.split("-");
                        dtaNew = dta[2] + '/' + dta[1] + '/' + dta[0];

                        hra = data[i].hora_consulta.split(":");
                        hraNew = hra[0] + ':' + hra[1];

                        if(data[i].compareceu == 'S') {
                            compareceu = 'Sim';
                        } else {
                            compareceu = 'Não';
                        }

                        item = '<tr>';
                        item += '<td>' + dtaNew + '</td>';
                        item += '<td>' + hraNew + '</td>';
                        item += '<td>' + data[i].pc_nome + '</td>';
                        item += '<td>' + data[i].me_nome + '</td>';
                        item += '<td>' + compareceu + '</td>';
                        item += '</td>';
                        item += '</tr>';
                        items.push(item);
                    }
                    $('.list-items').find('.items').html(items);
                }
            },
            error: function(data) {
                console.log('Ops...', 'Algo deu errado, tente novamente mais tarde!');
            }
        });

    });

});
