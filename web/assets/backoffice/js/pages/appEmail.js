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
            $('tbody input:checkbox').click(function() {
                var checkedStatus   = $(this).prop('checked');
                var tableRow        = $(this).closest('tr');

                if (checkedStatus) {
                    tableRow.addClass(rowHighlightClass);
                } else {
                    tableRow.removeClass(rowHighlightClass);
                }
            });
            
            $('#selecctall').click(function ( evt ) {
                if($(this).prop('checked')){
                    $('tbody input:checkbox').each(function() {
                        this.checked = true;
                        $(this).closest('tr').addClass(rowHighlightClass);;
                    });
                }
                else{
                    $('tbody input:checkbox').each(function() {
                        this.checked = false;
                        $(this).closest('tr').removeClass(rowHighlightClass);;
                    });
                }
            });

        }
    };
}();