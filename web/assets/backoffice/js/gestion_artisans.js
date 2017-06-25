$( document ).ready(function() {

    // Charge la modale (formulaire) au clic sur le bouton 'Ajouter un fournisseur'
    $('#btn-add-artisan').on('click', function (e) {
        e.preventDefault();
        $('#modal-fade-add-artisan').modal();
    })

    // Fonction pour éditer un artisan
    $('.btn-edit-artisan').on('click', function (e) {
        var artisanId = $(this).data('artisan');
        var loader = startLoader($('#page-content'));
        $.ajax({
            url : "/syndic/edit/artisan/" + artisanId,
            method: 'post',
            success: function(html) {
                stopLoader(loader);
                $('#modal-edit-form').html(html);
                $('#modal-fade-edit-artisan').modal();
            }
        });
    });

    // Fonction pour supprimer un artisan
    $('.btn-delete-artisan').on('click', function (e) {
        var artisanId = $(this).data('artisan');
        var url = "/syndic/delete/artisan/" + artisanId;
        $('#delete-artisan').attr('href',url);
    });

});
