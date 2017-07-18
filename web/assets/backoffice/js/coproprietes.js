$( document ).ready(function() {

    console.log('adazdaz');
    // Fonction pour afficher le nom du fichier sur les 'input file'
    $('.inputfile-copropriete').each(function () {
        var $input = $(this),
            $label = $input.next('label');

        console.log($label);
        $input.on('change', function (e) {
            var fileName = e.target.value.split('\\').pop();

            console.log(fileName);
            if (fileName) {
                $('#filename-box-copropriete').val(fileName);
            } else {
                $label.html('');
            }
        });
    });

});
