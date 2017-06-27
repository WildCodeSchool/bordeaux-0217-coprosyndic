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

    // Fonction de formattage des dates des fichiers
    function getFormattedDate(timestamp) {
        var date = new Date(timestamp * 1000);

        var day = date.getDate();
        day = day < 10 ? "0"+day : day;
        var month = date.getMonth() + 1;
        month = month < 10 ? "0"+month : month;
        var year = date.getFullYear();

        return day + "/" + month + "/" + year;
    }

    // Fonction pour récupérer les documents en fonction de la catégorie
    $('.categorie-link').on('click', function (e) {
        e.preventDefault();

        $activeCat = $(this).parent().siblings('.active');
        $activeCat.removeClass('active');
        $(this).parent().addClass('active');

        var categorie = this.dataset.categorie;

        $.ajax({
            url: "/syndic/list/docs/" + categorie,
            method: 'POST',
            dataType: 'json',
            success: function (response) {
                var documents = JSON.parse(response.data);
                var html = '';
                for (i = 0; i < documents.length; i++) {
                    html += '<tr>' +
                        '<td class="text-center" style="display:none">' + documents[i].doc_id + '</td>' +
                        '<td style="padding-left:17px;"><a href="/show/doc/' + documents[i].doc_id + '"><strong style="cursor: pointer !important;">' + documents[i].doc_nom + '</strong></a></td>' +
                        '<td><span class="label label-' + documents[i].cat_nom + '" style="background-color:' + documents[i].couleur + '">' + documents[i].cat_nom + '</span></td>' +
                        '<td class="text-center">' + getFormattedDate(documents[i].dateModif.timestamp) + '</td>' +
                        '<td class="text-center">' +
                        '<a href="javascript:void(0)" data-toggle="tooltip" title="Télécharger le fichier" class="btn btn-effect-ripple btn-xs btn-primary">' +
                        '<i class="fa fa-download"></i></a>' +
                        '<a href="javascript:void(0)" data-toggle="tooltip" title="Supprimer le fichier" class="btn btn-effect-ripple btn-xs btn-danger">' +
                        '<i class="fa fa-times"></i></a>' +
                        '</td>' +
                        '</tr>'
                }
                $('.documents-rows').first().html(html);
            }
        })
    });

    // Fonction pour supprimer un document
    $('.btn-delete').on('click', function (e) {
        var documentId = $(this).data('document');
        var url = "../delete/doc/" + documentId;
        $('#delete-doc').attr('href',url);
    });



});
