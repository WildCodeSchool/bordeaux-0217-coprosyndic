$( document ).ready(function() {

// Fonction de mise à jour des destinataires en fonction du type de compte choisi
    var $typeCompte = $('#message_destinataireCompte');
    $typeCompte.change(function () {
        var $form = $(this).closest('form');
        var data = {};
        $typeCompte = $('input[type="radio"]:checked', '#newMessageForm');
        console.log($typeCompte.val());
        data['message[destinataireCompte]'] = $typeCompte.val();
        var loader = startLoader($('.modal-content'));
        $.ajax({
            url: "/coproprietaire/create/message",
            type: $form.attr('method'),
            data: data,
            success: function (html) {
                stopLoader(loader);
                // console.log($(html).find('#message_destinataire').html());
                // console.log($('#message_destinataires').html());
                // $('#message_destinataires').html(
                //     $(html).find('#message_destinataire').html()
                // );
            }
        });
    });

});