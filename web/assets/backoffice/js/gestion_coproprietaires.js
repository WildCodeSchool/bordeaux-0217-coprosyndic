$( document ).ready(function() {

    // Fonction pour supprimer un coproprietaire
    $('.btn-delete-coproprietaire').on('click', function (e) {
        var coproprietaireId = $(this).data('coproprietaire');
        var url = "/syndic/delete/coproprietaire/" + coproprietaireId;
        $('#delete-coproprietaire').attr('href',url);
    });

    // Fonction pour supprimer un document
    $('.btn-delete-doc').on('click', function (e) {
        var documentId = $(this).data('document');
        var url = "/syndic/delete/doc/" + documentId;
        $('#delete-doc').attr('href',url);
    });

    // Fonction pour supprimer un coproprietaire
    $('.btn-delete-artisan').on('click', function (e) {
        var artisanId = $(this).data('artisan');
        var url = "/syndic/delete/artisan/" + artisanId;
        $('#delete-artisan').attr('href',url);
    });
});
