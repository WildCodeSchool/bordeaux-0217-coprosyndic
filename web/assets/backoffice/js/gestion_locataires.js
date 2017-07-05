$( document ).ready(function() {

    // Fonction pour supprimer un locataire
    $('.btn-delete-locataire').on('click', function (e) {
        var lotId = $(this).data('lot');
        var url = "/syndic/delete/lot/" + lotId;
        $('#delete-lot').attr('href',url);
    });



});
