$(document).ready(function() {
    $('#dashboard').fadeIn();
});

function switchTab(i) {
    $('.model').fadeOut(function() {
        $('#' + i).fadeIn();
    });
}