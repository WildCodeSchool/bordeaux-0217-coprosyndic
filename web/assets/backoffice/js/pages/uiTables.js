/*
 *  Document   : uiTables.js
 *  Author     : pixelcave
 *  Description: Custom javascript code used in Tables page
 */

var UiTables = function() {

    return {
        init: function() {
            /* Initialize Bootstrap Datatables Integration */
            App.datatables();

            /* Initialize Datatables */
            $('#files-datatable').dataTable({
                columnDefs: [ { orderable: false, targets: [ 5 ] } ],
                pageLength: 10,
                lengthMenu: [[5, 10, 20], [5, 10, 20]],
                "oLanguage": {
                    "sSearch": "<div class=\"input-group\">" + "_INPUT_" +
                    "<span class=\"input-group-addon\">" +
                    "<i class=\"fa fa-search\"></i>" +
                    "</span>" +
                    "</div>" +
                    "<div class=\"input-group\">" +
                    "<a href=\"/syndic/list/docs\" class=\"btn btn-effect-ripple btn-primary\" style=\"margin-left:15px;\">" +
                    "Gérer mes documents</a></div>",

                }
            });
            $('#providers-datatable').dataTable({
                columnDefs: [ { orderable: false, targets: [ 3, 4 ] } ],
                pageLength: 10,
                lengthMenu: [[5, 10, 20], [5, 10, 20]],
                "oLanguage": {
                    "sSearch": "<div class=\"input-group\">_INPUT_<span class=\"input-group-addon\"><i class=\"fa fa-search\"></i></span></div><div class=\"input-group\"><a href=\"\" id=\"btn-add-artisan\" class=\"btn btn-effect-ripple btn-primary\" style=\"margin-left:15px;\">Ajouter un fournisseur</a></div>",

                }
            });
            $('#full-files-datatable').dataTable({
                columnDefs: [ { orderable: false, targets: [ 4 ] } ],
                pageLength: 10,
                lengthMenu: [[5, 10, 20], [5, 10, 20]],
            });

            /* Add placeholder attribute to the search input */
            $('.dataTables_filter input').attr('placeholder', 'Rechercher');

            /* Select/Deselect all checkboxes in tables */
            $('thead input:checkbox').click(function() {
                var checkedStatus   = $(this).prop('checked');
                var table           = $(this).closest('table');

                $('tbody input:checkbox', table).each(function() {
                    $(this).prop('checked', checkedStatus);
                });
            });

            /* Table Styles Switcher */
            var genTable        = $('#general-table');
            var styleBorders    = $('#style-borders');

            $('#style-default').on('click', function(){
                styleBorders.find('.btn').removeClass('active');
                $(this).addClass('active');

                genTable.removeClass('table-bordered').removeClass('table-borderless');
            });

            $('#style-bordered').on('click', function(){
                styleBorders.find('.btn').removeClass('active');
                $(this).addClass('active');

                genTable.removeClass('table-borderless').addClass('table-bordered');
            });

            $('#style-borderless').on('click', function(){
                styleBorders.find('.btn').removeClass('active');
                $(this).addClass('active');

                genTable.removeClass('table-bordered').addClass('table-borderless');
            });

            $('#style-striped').on('click', function() {
                $(this).toggleClass('active');

                if ($(this).hasClass('active')) {
                    genTable.addClass('table-striped');
                } else {
                    genTable.removeClass('table-striped');
                }
            });

            $('#style-condensed').on('click', function() {
                $(this).toggleClass('active');

                if ($(this).hasClass('active')) {
                    genTable.addClass('table-condensed');
                } else {
                    genTable.removeClass('table-condensed');
                }
            });

            $('#style-hover').on('click', function() {
                $(this).toggleClass('active');

                if ($(this).hasClass('active')) {
                    genTable.addClass('table-hover');
                } else {
                    genTable.removeClass('table-hover');
                }
            });
        }
    };
}();