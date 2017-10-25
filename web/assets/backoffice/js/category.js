$( document ).ready(function() {

    // Fonction pour supprimer une categorie
    $('.btn-delete-category').on('click', function () {
        let categorieId = $(this).data('category');
        let url = "/syndic/categories/delete/" + categorieId;
        $('#delete-category').attr('href',url);
    });

    // Fonction pour afficher la modale d'édition
    $('.btn-edit-category').on('click', function () {
        let categorieId = $(this).data('category');
        let loader = startLoader($('#page-content'));
        $.ajax({
            url : "/syndic/categories/edit/" + categorieId,
            method: 'post',
            success: function(html) {
                stopLoader(loader);
                $('#form-edit-box').html(html);
                $('.colorpicker-component').colorpicker();
                $('#modal-fade-edit-category').modal();
            }
        });
    });

    addCategoryFormListener('create');
});

function addCategoryFormListener(context, categoryId = null) {
    $('.form-category-'+context).on('submit', function (e) {
        e.preventDefault();
        let url = '/syndic/categories/'+context + (context === 'edit' ? '/'+categoryId : '');
        $.ajax({
            url: url,
            data: $(this).serialize(),
            method: 'post',
            success: function (html, code, xhr) {
                if (xhr.status === 201 || xhr.status === 202) {
                    location.href = xhr.getResponseHeader("Location");
                } else {
                    $('#form-'+context+'-box').html(html);
                }
            },
        });
    });
    $('.colorpicker-component').colorpicker();
}
