$(document).ready(function() {
    $('#dashboard').fadeIn();
});

function switchTab(i) {
    $('.model').fadeOut();
    $('#' + i).fadeIn();
}