$( document ).ready(function() {


    // Fonction pour supprimer un coproprietaire
    $('.btn-delete-coproprietaire').on('click', function (e) {
        var coproprietaireId = $(this).data('coproprietaire');
        var url = "/syndic/delete/coproprietaire/" + coproprietaireId;
        $('#delete-coproprietaire').attr('href',url);
    });



});
