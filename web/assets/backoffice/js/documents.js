$( document ).ready(function() {

    // Fonction pour afficher le nom du fichier sur les 'input file'
    $('.inputfile').each(function () {
        let $input = $(this),
            $label = $input.next('label');

        $input.on('change', function (e) {
            let fileName = e.target.value.split('\\').pop();

            if (fileName) {
                $('#filename-box').val(fileName);
            } else {
                $label.html('');
            }
        });
    });

    // Fonction pour récupérer les documents en fonction de la catégorie
    $('.categorie-link').on('click', function (e) {
        e.preventDefault();

        let $activeCat = $(this).parent().siblings('.active');
        $activeCat.removeClass('active');
        $(this).parent().addClass('active');

        let categorie = this.dataset.categorie;
        let typeCompte = this.dataset.compte;
        let loader = startLoader($('#page-content'));
        $.ajax({
            url: "/"+typeCompte+"/list/docs/"+categorie,
            method: 'POST',
            dataType: 'json',
            success: function (response) {
                let documents = JSON.parse(response.data);
                let html = '';
                stopLoader(loader);
                for (let i = 0; i < documents.length; i++) {
                    html += '<tr>' +
                        '<td class="text-center" style="display:none">' + documents[i].doc_id + '</td>' +
                        '<td style="padding-left:17px;"><a href="/'+typeCompte+'/show/doc/' + documents[i].doc_id + '"><strong style="cursor: pointer !important;">' + documents[i].doc_titre + '</strong></a></td>' +
                        '<td><span class="label label-' + documents[i].cat_nom + '" style="background-color:' + documents[i].couleur + '">' + documents[i].cat_nom + '</span></td>' +
                        '<td class="text-center">' + getFormattedDate(documents[i].dateAjout.timestamp) + '</td>' +
                        '<td class="text-center">' +
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

    // Fonction de mise à jour des copropriétaires en fonction de la copropriété choisie
    // --> Ajout 'placeholder' pour listes déroulantes
    let $copropriete = $('#create_document_copropriete');
    $("#create_document_categorie").select2("destroy").prepend('<option></option>').select2({
        placeholder: "Sélectionnez une catégorie ...",
    }).val('').trigger('change');
    $copropriete.select2("destroy").prepend('<option></option>').select2({
        placeholder: "Sélectionnez une copropriété ...",
    }).val('').trigger('change');
    $("#create_document_lots").select2({
        placeholder: "Sélectionnez le(s) lot(s) ...",
    });
    // --> Mise à jour
    $copropriete.change(function() {
        let $form = $(this).closest('form');
        let data = {};
        data[$copropriete.attr('name')] = $copropriete.val();
        let loader = startLoader($('.modal-content'));
        $.ajax({
            url : "/syndic/create/doc",
            type: $form.attr('method'),
            data : data,
            success: function(html) {
                $('#s2id_create_document_lots').find('.select2-search-choice').remove();
                stopLoader(loader);
                $('#create_document_lots').html(
                    $(html).find('#create_document_lots').html()
                );
            }
        });
    });
    // --> Sélection complète des destinataires
    $('#checkbox-all').click(function(){
        let $lots = $('#create_document_lots');
        if($("#checkbox-all").is(':checked') ){
            $lots.find('option').prop("selected","selected");
        } else{
            $lots.find('option').removeAttr("selected");
        }
        $lots.trigger("change");
    });

    // Fonction pour supprimer un document
    $('.btn-delete-doc').on('click', function () {
        let documentId = $(this).data('document');
        let url = "/syndic/delete/doc/" + documentId;
        $('#delete-doc').attr('href',url);
    });

    // Fonction pour supprimer une categorie
    $('.btn-delete-categorie').on('click', function () {
        let categorieId = $(this).data('categorie');
        let url = "/syndic/delete/categorie/" + categorieId;
        $('#delete-categorie').attr('href',url);
    });

    // Fonction pour éditer une categorie
    $('.btn-edit-categorie').on('click', function () {
        let categorieId = $(this).data('categorie');
        let loader = startLoader($('#page-content'));
        $.ajax({
            url : "/syndic/edit/categorie/" + categorieId,
            method: 'post',
            success: function(html) {
                stopLoader(loader);
                $('#modal-edit-form').html(html);
                $('.colorpicker-component').colorpicker();
                $('#modal-fade-edit-categorie').modal();

            }
        });
    });

});

// Fonction de formattage des dates des fichiers
function getFormattedDate(timestamp) {
    let date = new Date(timestamp * 1000);

    let day = date.getDate();
    day = day < 10 ? "0"+day : day;
    let month = date.getMonth() + 1;
    month = month < 10 ? "0"+month : month;
    let year = date.getFullYear();

    return day + "/" + month + "/" + year;
}