$( document ).ready(function() {

    // Fonction pour supprimer un lot
    $('.btn-delete-lot').on('click', function (e) {
        var lotId = $(this).data('lot');
        var url = "/syndic/delete/lot/" + lotId;
        $('#delete-lot').attr('href',url);
    });

    // Fonction pour supprimer un document
    $('.btn-delete-doc').on('click', function (e) {
        var documentId = $(this).data('document');
        var url = "/syndic/delete/doc/" + documentId;
        $('#delete-doc').attr('href',url);
    });

});
