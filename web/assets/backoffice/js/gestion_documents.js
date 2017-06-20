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

        var categorie = this.dataset.categorie;

        $.ajax({
            url: "/syndic/list/docs/" + categorie,
            method: "post",
            dataType: 'json',
            success: function(response){
                var documents = JSON.parse(response.data);
                console.log(documents);
                var html= '';
                for (document in response) {
                    for (i=0; i<documents.length; i++) {
                        html += "<td>"+ documents[i].nom + "</td>";
                    }
                    $('.documents-rows').first().append('<tr></tr>');
                    $('.documents-rows').children().last('<td></td>');
                }
            }
        })
    });
});

$(document).ready(function () {

    $("#appbundle_contact_town").on('keyup', function () {
        var town = $(this).val();
        if (town.length >= 2) {

            $.ajax({
                url: '/ajax/' + town,
                type: 'POST',
                dataType: 'json',
                success: function (response) {
                    var html= "";
                    var towns = JSON.parse(response.data);
                    for (i=0; i<towns.length; i++) {
                        html += "<li>"+ towns[i].town + "</li>";
                    }
                    $("#autocompletion").html(html);
                    $("#autocompletion li").on("click", function (e) {
                        $("#appbundle_contact_town").val($(this).text());
                        $("#autocompletion").html('');
                    })

                },
                error: function () {
                    $("#autocompletion").html('');
                }



            });

        }
    })

});
