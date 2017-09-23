$( document ).ready(function() {
    context = (typeof context !== 'undefined') ? context : '';

    // Fonction pour afficher le nom du fichier sur les 'input file'
    $('.inputfile').each(function () {
        let $input = $(this),
            $label = $input.next('label');

        if (context === 'create') {
            $input.on('change', function (e) {
                let fileName = e.target.value.split('\\').pop();

                if (fileName) {
                    $('#filename-box').val(fileName);
                } else {
                    $label.html('');
                }
            });
        } else if (context === 'edit') {
            $('#filename-box').val(originalFileName);
        }
    });

    // Fonction pour récupérer les documents en fonction de la catégorie
    $('.category-link').on('click', function (e) {
        e.preventDefault();

        let $activeCat = $(this).parent().siblings('.active');
        $activeCat.removeClass('active');
        $(this).parent().addClass('active');

        let category = this.dataset.category;
        let typeCompte = this.dataset.compte;
        let loader = startLoader($('#page-content'));
        $.ajax({
            url: "/"+typeCompte+"/documents/categories/"+category,
            method: 'POST',
            dataType: 'json',
            success: function (response) {
                let documents = JSON.parse(response.documents);
                let html = '';
                stopLoader(loader);
                console.log(documents);
                for (let document of documents) {
                    html += '<tr>' +
                        '<td class="text-center" style="display:none">' + document.id + '</td>' +
                        '<td style="padding-left:17px;"><a href="/'+typeCompte+'/documents/show/' + document.id + '"><strong style="cursor: pointer !important;">' + document.titre + '</strong></a></td>' +
                        '<td><span class="label label-' + document.category.nom + '" style="background-color:' + document.category.couleur + '">' + document.category.nom + '</span></td>' +
                        '<td class="text-center">' + getFormattedDate(document.dateAjout.date) + '</td>' +
                        '<td class="text-center">' +
                        //TODO : implémenter le téléchargement et la suppression
                        '<a href="javascript:void(0)" data-toggle="tooltip" title="Télécharger le fichier" class="btn btn-effect-ripple btn-xs btn-primary">' +
                        '<i class="fa fa-download"></i></a>' + ' ' +
                        '<a href="javascript:void(0)" data-toggle="tooltip" title="Supprimer le fichier" class="btn btn-effect-ripple btn-xs btn-danger">' +
                        '<i class="fa fa-times"></i></a>' +
                        '</td>' +
                        '</tr>'
                }
                $('.documents-rows').first().html(html);
            }
        })
    });

    let $copropriete = $('#document_copropriete');

    // Fonction pour ajouter les placeholders sur les listes déroulantes en cas de création
    if (context === 'create') {
        let $selectSingle = $('.select-single');
        $selectSingle.select2("destroy").prepend('<option></option>');
        $("#document_category").select2({
            placeholder: "Sélectionnez une catégorie ..."
        });
        $copropriete.select2({
            placeholder: "Sélectionnez une copropriété ..."
        });
        $("#document_lots").select2({
            placeholder: "Sélectionnez le(s) lot(s) ..."
        });
        $selectSingle.val('').trigger('change');
    }

    // --> Mise à jour
    $copropriete.change(function() {
        $('#checkbox-box').show();
        $('#checkbox-all').prop('checked', false);
        let $form = $(this).closest('form');
        let data = {};
        data[$copropriete.attr('name')] = $copropriete.val();
        let loader = startLoader($('.modal-content'));
        $.ajax({
            url : "/syndic/documents/create",
            type: $form.attr('method'),
            data : data,
            success: function(html) {
                $('#s2id_document_lots').find('.select2-search-choice').remove();
                stopLoader(loader);
                $('#document_lots').html(
                    $(html).find('#document_lots').html()
                );
            }
        });
    });
    // --> Sélection complète des destinataires
    if (context === 'edit') {
        $('#checkbox-box').hide();
    }
    $('#checkbox-all').click(function(){
        let $lots = $('#document_lots');
        if($("#checkbox-all").is(':checked') ){
            $lots.find('option').prop("selected","selected");
        } else {
            $lots.find('option').removeAttr("selected");
        }
        $lots.trigger("change");
    });

    // Fonction pour supprimer un document
    $('.btn-delete-doc').on('click', function () {
        let documentId = $(this).data('document');
        let url = "/syndic/documents/delete/" + documentId;
        $('#delete-doc').attr('href',url);
    });

});

// Fonction de formattage des dates des fichiers
function getFormattedDate(fullDate) {
    let date = new Date(fullDate);

    let day = date.getDate();
    day = day < 10 ? "0"+day : day;
    let month = date.getMonth() + 1;
    month = month < 10 ? "0"+month : month;
    let year = date.getFullYear();

    return day + "/" + month + "/" + year;
}
