/**
 * Created by tongying on 14-8-12.
 */
$(document).ready(function() {
    $('#goods').dataTable({
        "aLengthMenu": [
            [50, 100, -1],
            [50, 100, "All"] // change per page values here
        ],
        "iDisplayLength": 50,
    });
} );
$('#goods')
    .removeClass( 'display' )
    .addClass('table table-striped table-bordered');
