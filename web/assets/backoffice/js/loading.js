function startLoader(modalParent) {
    var spinner = new Spinner().spin();

    modalParent.append('<div id="loading-modal"></div>');
    $("body").addClass("loading");
    $('#loading-modal').append(spinner.el);

    return spinner;
}

function stopLoader(spinner) {
    $("body").removeClass("loading");
    $('#loading-modal').remove();
    spinner.stop();
}