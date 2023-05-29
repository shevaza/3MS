$(document).ready(function() {
    $('table.table').DataTable({
        "scrollX": true,
        "lengthMenu": [
            [10, 25, 50, 100, -1],
            [10, 25, 50, 100, "All"]
        ]
    });
});

$('#done').click(function() {
    if ($('#done').hasClass('active')) {
        $('#end_date').attr('disabled', 'disabled');
        console.log('disable');
    } else {
        $('#end_date').removeAttr('disabled');
        console.log('enable');
    }
});

$('#close').click(function() {
    document.getElementById("menu").style.width = "0";
});

/* Set the width of the side navigation to 250px */
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

var myModal = new bootstrap.Modal(document.getElementById('myModal'));
$('.actionbtn').click(function(e) {
    e.preventDefault();
    myModal.show();
});