$( document ).ready(function() {

    // Fonction pour supprimer un lot
    $('.btn-delete-lot').on('click', function (e) {
        var lotId = $(this).data('lot');
        var url = "/syndic/delete/lot/" + lotId;
        $('#delete-lot').attr('href',url);
    });



});
