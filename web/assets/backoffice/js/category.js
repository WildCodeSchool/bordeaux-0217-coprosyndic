$( document ).ready(function() {

    // Fonction pour supprimer une categorie
    $('.btn-delete-category').on('click', function () {
        let categorieId = $(this).data('category');
        let url = "/syndic/categories/delete/" + categorieId;
        $('#delete-category').attr('href',url);
    });

    // Fonction pour éditer une categorie
    $('.btn-edit-category').on('click', function () {
        let categorieId = $(this).data('category');
        let loader = startLoader($('#page-content'));
        $.ajax({
            url : "/syndic/categories/edit/" + categorieId,
            method: 'post',
            success: function(html) {
                stopLoader(loader);
                $('#modal-edit-form').html(html);
                $('.colorpicker-component').colorpicker();
                $('#modal-fade-edit-category').modal();

            }
        });
    });

});
