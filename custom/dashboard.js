$(document).ready(function() {
    $('#dashboard').fadeIn();
});

function switchTab(i) {
    $('.model').hide();
    $('#' + i).fadeIn();
}