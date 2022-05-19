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