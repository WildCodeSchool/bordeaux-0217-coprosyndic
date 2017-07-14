$( document ).ready(function() {

    // Fonction pour supprimer une copropriété
    $('#btn-delete-copropriete').on('click', function (e) {
        var coproprieteId = $(this).data('copropriete');
        var url = "/syndic/delete/copropriete/" + coproprieteId;
        $('#delete-copropriete').attr('href',url);
    });

});
