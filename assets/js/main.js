$(function() {

    $('#filtrar').click(function(e){
        e.preventDefault();
        console.log('FILTRAR');

        // var el = $(this);
        // var elem = el.parent().find('#mailLead');
        // var val = elem.val();

        // if(validateEmail(val) == true) {
        //     elem.removeClass('error');
        //     $.ajax({
        //         cache: false,
        //         async: true,
        //         type: 'POST',
        //         url: urlSite + 'new-lead',
        //         dataType: 'json',
        //         data: {
        //             mail: val
        //         },
        //         success: function(data){
        //             // console.log("Ok, tudo feito.");
        //             if(data.status == 'ok'){
        //                 openModal('Obrigado!', data.message);
        //                 elem.val('');

        //             } else {
        //                 openModal('Ops!', data.message);
        //             }
        //         },
        //         error: function(data) {
        //             // console.log("Error not idenfied!");
        //             openModal('Ops...', 'Algo deu errado, tente novamente mais tarde!');
        //         }
        //     });
        // } else {
        //     elem.addClass('error');
        // }
    });

});