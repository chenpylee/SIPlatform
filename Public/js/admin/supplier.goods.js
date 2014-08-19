/**
 * Created by tongying on 14-8-12.
 */
$(document).ready(function() {
    $('#goods').dataTable({
        "aLengthMenu": [
            [20, 50, 100, -1],
            [20, 50, 100, "All"] // change per page values here
        ],
        "iDisplayLength": 20,
    });
} );
$('#goods')
    .removeClass( 'display' )
    .addClass('table table-striped table-bordered');
