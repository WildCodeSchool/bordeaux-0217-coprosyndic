$(document).ready(function () {
    context = (typeof context !== 'undefined') ? context : '';

    getInputFileName(context);
    getDocumentsByCategorie();
    addPlaceholdersOnSelect(context);
    handleCoproprieteChoices();
    selectAllRecipients(context);
    addDocumentFormListener(context);

    // Fonction pour supprimer un document
    $('.btn-delete-doc').on('click', function () {
        let documentId = $(this).data('document');
        let url = "/syndic/documents/delete/" + documentId;
        $('#delete-doc').attr('href', url);
    });

});

function addDocumentFormListener(context, documentId = null) {
    $('.form-document-' + context).on('submit', function (e) {
        e.preventDefault();
        let url = '/syndic/documents/' + context + (context === 'edit' ? '/' + documentId : '');
        $.ajax({
            url: url,
            data: new FormData($(this)[0]),
            processData: false,  contentType: false,  cache: false,
            method: 'post',
            success: function (html, code, xhr) {
                if (xhr.status === 201 || xhr.status === 202) {
                    location.href = xhr.getResponseHeader("Location");
                } else {
                    $('#form-' + context + '-box').html(html);
                    context = 'error';
                    getInputFileName(context);
                    getDocumentsByCategorie();
                    addPlaceholdersOnSelect(context);
                    handleCoproprieteChoices();
                    selectAllRecipients(context);
                }
            },
        });
    });

}

// Fonction pour afficher le nom du fichier sur les 'input file'
function getInputFileName(context) {
    $('.inputfile').each(function () {
        let $input = $(this),
            $label = $input.next('label');

        if (context === 'create' || context === 'error') {
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
}

// Fonction pour récupérer les documents en fonction de la catégorie
function getDocumentsByCategorie() {
    $('.category-link').on('click', function (e) {
        e.preventDefault();

        let $activeCat = $(this).parent().siblings('.active');
        $activeCat.removeClass('active');
        $(this).parent().addClass('active');

        let category = this.dataset.category;
        let typeCompte = this.dataset.compte;
        let loader = startLoader($('#page-content'));
        $.ajax({
            url: "/" + typeCompte + "/documents/categories/" + category,
            method: 'POST',
            dataType: 'json',
            success: function (response) {
                let documents = JSON.parse(response.documents);
                let html = '';
                stopLoader(loader);
                for (let document of documents) {
                    html += '<tr>' +
                        '<td class="text-center" style="display:none">' + document.id + '</td>' +
                        '<td style="padding-left:17px;"><a href="/' + typeCompte + '/documents/show/' + document.id + '"><strong style="cursor: pointer !important;">' + document.titre + '</strong></a></td>' +
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
}

// Fonction pour ajouter les placeholders sur les listes déroulantes en cas de création
function addPlaceholdersOnSelect(context) {
    if (context === 'create') {
        let $selectSingle = $('.select-single');
        $selectSingle.select2("destroy").prepend('<option></option>');
        $("#document_category").select2({
            placeholder: "Sélectionnez une catégorie ..."
        });
        $('#document_copropriete').select2({
            placeholder: "Sélectionnez une copropriété ..."
        });
        $("#document_lots").select2({
            placeholder: "Sélectionnez le(s) lot(s) ..."
        });
        $selectSingle.val('').trigger('change');
    } else if (context === 'error') {
        if ($('label[for="document_category"]').siblings('ul').length) {
            $("#document_category").prepend('<option></option>').select2({
                placeholder: "Sélectionnez une catégorie ..."
            }).val('').trigger('change');
        } else {
            $("#document_category").select2();
        }
        if ($('label[for="document_copropriete"]').siblings('ul').length) {
            $("#document_copropriete").prepend('<option></option>').select2({
                placeholder: "Sélectionnez une copropriété ..."
            }).val('').trigger('change');
        } else {
            $("#document_copropriete").select2();
        }
        if ($('label[for="document_lots"]').siblings('ul').length) {
            $("#document_lots").prepend('<option></option>').select2({
                placeholder: "Sélectionnez le(s) lot(s) ..."
            }).val('').trigger('change');
        } else {
            $("#document_lots").select2();
        }
    }
}

// Fonction de mise à jour des lots en fonction de la copropriété
function handleCoproprieteChoices() {
    $('#document_copropriete').change(function () {
        $('#checkbox-box').show();
        $('#checkbox-all').prop('checked', false);
        let $form = $(this).closest('form');
        let data = {};
        data[$('#document_copropriete').attr('name')] = $('#document_copropriete').val();
        let loader = startLoader($('.modal-content'));
        $.ajax({
            url: "/syndic/documents/create",
            type: $form.attr('method'),
            data: data,
            success: function (html) {
                $('#s2id_document_lots').find('.select2-search-choice').remove();
                stopLoader(loader);
                $('#document_lots').html(
                    $(html).find('#document_lots').html()
                );
            }
        });
    });
}

// Fonction pour la sélection complète des destinataires
function selectAllRecipients(context) {
    if (context === 'edit' || context === 'error') {
        $('#checkbox-box').hide();
    }
    $('#checkbox-all').click(function () {
        let $lots = $('#document_lots');
        if ($("#checkbox-all").is(':checked')) {
            $lots.find('option').prop("selected", "selected");
        } else {
            $lots.find('option').removeAttr("selected");
        }
        $lots.trigger("change");
    });
}

// Fonction de formattage des dates des fichiers
function getFormattedDate(fullDate) {
    let date = new Date(fullDate);

    let day = date.getDate();
    day = day < 10 ? "0" + day : day;
    let month = date.getMonth() + 1;
    month = month < 10 ? "0" + month : month;
    let year = date.getFullYear();

    return day + "/" + month + "/" + year;
}
