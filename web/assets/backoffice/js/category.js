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
                $('#modal-edit-form').html(html);
                $('.colorpicker-component').colorpicker();
                $('#modal-fade-edit-category').modal();
            }
        });
    });

    addFormListener('create');
});

function addFormListener(context, categoryId = null) {
    $('.form-'+context).on('submit', function (e) {
        e.preventDefault();
        let url = '/syndic/categories/'+context + (context === 'edit' ? '/'+categoryId : '');
        $.ajax({
            url: url,
            data: $(this).serialize(),
            method: 'post',
            success: function (html, code, xhr) {
                console.log(xhr.status);
                if (xhr.status === 201 || xhr.status === 202) {
                    location.href = xhr.getResponseHeader("Location");
                } else {
                    $('#form-box').html(html);
                    $('.colorpicker-component').colorpicker();
                }
            },
        });
    });
    $('.colorpicker-component').colorpicker();
}
