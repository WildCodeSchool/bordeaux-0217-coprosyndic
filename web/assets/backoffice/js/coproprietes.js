$( document ).ready(function() {

    // Fonction pour afficher le nom du fichier sur les 'input file'
    $('.inputfile-copropriete').each(function () {
        var $input = $(this),
            $label = $input.next('label');

        $input.on('change', function (e) {
            var fileName = e.target.value.split('\\').pop();

            if (fileName) {
                $('#filename-box-copropriete').val(fileName);
            } else {
                $label.html('');
            }
        });
    });

});
