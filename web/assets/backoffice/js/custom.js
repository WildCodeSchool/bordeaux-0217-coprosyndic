$( document ).ready(function() {
   
    $("#coownerships-agenda-link").click(function (e) {
        $("#calendar").fullCalendar( 'changeView', 'month' );
    });


    // Fonction pour afficher le nom du fichier sur les 'input file'

    $('.inputfile').each(function()
    {
        var $input	 = $(this),
            $label	 = $input.next('label');

        $input.on('change', function(e)
        {
            var fileName = e.target.value.split('\\').pop();

            if(fileName) {
                $('#filename-box').val(fileName);
            } else {
                $label.html('');
            }
        });

    });

});
