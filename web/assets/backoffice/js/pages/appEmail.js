/*
 *  Document   : appEmail.js
 *  Author     : pixelcave
 *  Description: Custom javascript code used in Email Center page
 */

var AppEmail = function() {

    return {
        init: function() {
            // Choose one of the highlight classes for the message list rows: 'active', 'success', 'warning', 'danger'
            var rowHighlightClass = 'info';

            /* Add/Remove row highlighting on checkbox click */
            $('tbody').on('click', 'input:checkbox', function() {

                let checkedStatus   = $(this).prop('checked');
                let tableRow        = $(this).closest('tr');

                if (checkedStatus) {
                    tableRow.addClass(rowHighlightClass);
                } else {
                    tableRow.removeClass(rowHighlightClass);
                }
            });
            
            $('#selecctall').on('click', function () {

                if($(this).prop('checked')){
                    $('tbody input:checkbox').each(function() {
                        this.checked = true;
                        $(this).closest('tr').addClass(rowHighlightClass);
                    });
                }
                else{
                    $('tbody input:checkbox').each(function() {
                        this.checked = false;
                        $(this).closest('tr').removeClass(rowHighlightClass);
                    });
                }
            });


        }
    };
}();

