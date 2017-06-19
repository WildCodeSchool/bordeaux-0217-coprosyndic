$( document ).ready(function() {

    // Fonction pour afficher le nom du fichier sur les 'input file'
    $('.inputfile').each(function () {
        var $input = $(this),
            $label = $input.next('label');

        $input.on('change', function (e) {
            var fileName = e.target.value.split('\\').pop();

            if (fileName) {
                $('#filename-box').val(fileName);
            } else {
                $label.html('');
            }
        });

    });

    console.log('afzafa');
    $('.categorie-link').on('click', function (e) {
        e.preventDefault();
        $activeCat = $(this).parent().siblings('.active');
        console.log($activeCat);

    });
});