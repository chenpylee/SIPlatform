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
    .addClass('table table-striped table-bordered');/**
 * Created by tongying on 14-8-8.
 */
function autoAdd()
{
    $input=prompt("请输入淘宝或天猫商品详细页链接：","");
    if($input==null)
    {
        alert("请输入淘宝或天猫商品详细页链接");
    }
    else
    {
        //alert($input);
        //encodeURI()
        var url=$input;
        var encodedUrl=encodeURIComponent(url);
        $('#auto-url').val(encodedUrl);
        $('#autoAddForm').submit();
    }
}
