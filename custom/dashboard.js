var T = localStorage.getItem("T");
$(document).ready(function() {
    $('.model').hide();
    $('#' + T).fadeIn();
});

function switchTab(i) {
    localStorage.setItem("T", i);
    console.log(T);
    $('.model').hide();
    $('#' + i).fadeIn();
}