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

    $('.categorie-link').on('click', function (e) {
        e.preventDefault();

        $activeCat = $(this).parent().siblings('.active');
        $activeCat.removeClass('active');
        $(this).parent().addClass('active');

        categorie = this.dataset.categorie;
        console.log(categorie);

        $.ajax({
            url: "/syndic/list/docs/" + categorie,
            method: "post",
            data: categorie,
            success: function(documents){
                for (document in documents) {
                    console.log(JSON.parse(document));
                    $('.documents-rows').first().append('<tr></tr>');
                    $('.documents-rows').children().last('<td></td>');
                }
            }
        })
    });
});