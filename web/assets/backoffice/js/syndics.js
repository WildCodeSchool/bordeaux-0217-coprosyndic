$( document ).ready(function() {

    // Fonction pour afficher le nom du fichier sur les 'input file'
    $('.inputfile-syndic').each(function () {
        var $input = $(this),
            $label = $input.next('label');

        $input.on('change', function (e) {
            var fileName = e.target.value.split('\\').pop();
            if (fileName) {
                $('#filename-box-syndic').val(fileName);
            } else {
                $label.html('');
            }
        });
    });

    // Fonction pour supprimer un syndic
    $('.btn-delete-syndic').on('click', function (e) {
        var syndicId = $(this).data('syndic');
        var url = "/admin/delete/syndic/" + syndicId;
        $('#delete-syndic').attr('href',url);
    });
});
