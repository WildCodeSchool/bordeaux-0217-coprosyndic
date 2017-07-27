$( document ).ready(function() {

    // Fonction de mise à jour des destinataires en fonction du type de compte choisi
    var $destinataireCompte = $('#message_destinataireCompte');

    $destinataireCompte.change(function() {
        var $form = $(this).closest('form');
        var data = {};
        data[$destinataireCompte.attr('name')] = $destinataireCompte.val();
        var loader = startLoader($('.modal-content'));
        $.ajax({
            url : $form.attr('action'),
            type: $form.attr('method'),
            data : data,
            success: function(html) {
                $newSelect = $(html).find('#message_destinataire');
                $newSelect.prepend('<option></option>');
                stopLoader(loader);
                $('#message_destinataire').replaceWith(
                    $newSelect
                );
            }
        });
    });

});