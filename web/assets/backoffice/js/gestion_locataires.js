$( document ).ready(function() {

    // Fonction pour supprimer un locataire
    $('.btn-delete-locataire').on('click', function (e) {
        var locataireId = $(this).data('locataire');
        var url = "/syndic/delete/locataire/" + locataireId;
        $('#delete-locataire').attr('href',url);
    });



});
