/**
 * Created by tongying on 14-8-19.
 */
$(document).ready(function() {
    /**
    $('#search-results').dataTable({

        "aLengthMenu": [
            [20, 50, 100, -1],
            [20, 50, 100, "All"] // change per page values here
        ],

        "iDisplayLength": 20,
    });
    **/

    document.onkeydown = function (e) {
        var theEvent = window.event || e;
        var code = theEvent.keyCode || theEvent.which;
        if (code == 13) {
            $("#auditor-search").click();
        }
    }
    $('input').bind({
        focus:function(){
            //alert('hi focus');
            $(this).addClass('input_focus');
        },
        blur:function(){
            //alert('bye focus');
            $(this).removeClass('input_focus');
        }
    })
    $('#auditor-search').click(function(){
        //parameter validation
        var hasError=false;
        var errMsg="";
        var key_id="";
        var key_name="";
        var key_words=$('#auditor-search-key').val();
        var regExp1=/(\d){1,}/;
        if(regExp1.test(key_words))//含有数字
        {
            var regExp2=/(\d){8,}/;
            if(!regExp2.test(key_words))
            {
                errMsg=errMsg+"请输入完整的身份证号码或姓名\r\n";
            }
            else
            {
                key_id=key_words.trim();
            }
        }
        else
        {
            var regExp2=/^[\u4E00-\u9FA5\uF900-\uFA2D]{2,}$/;
            if(!regExp2.test(key_words))
            {
                errMsg=errMsg+"姓名：至少输入2个中文字符\r\n";
            }
            else
            {
                key_name=key_words.trim();
            }
        }
        if(errMsg!="")
        {
            hasError=true;
            alert(errMsg);
        }
        else
        {
            hasError=false;
            //alert("id:"+key_id+" name:"+key_name);
        }

        //
        if(!hasError)
        {
            $.ajax({
                url:url_auditor_search,
                data:"key_id="+key_id+"&key_name="+key_name,
                dataType:"json",
                success:function(data,txtStatus,xhr){
                    //alert(data.name);
                    //alert(data.status);
                    if(data.status==true)
                    {
                        //console.log(data.data);
                        $('#datas').html("");
                        var msg=data.msg;
                        var search_title=$('#search-title');
                        search_title.html(msg);
                        for(var i=0;i<data.data.length;i++)
                        {
                            var row=$('<tr id="record_template"> <td class="record_id"></td><td class="person_name"></td><td class="person_gender"></td><td class="person_id"></td><td class="si_id"></td><td class="person_affiliate"></td><td class="person_tel"></td><td class="record_operation"></td></tr>');
                            row.attr('id','record-'+i);
                            row.find('.record_id').text(i+1);
                            row.find('.person_name').text(data.data[i].person_name);
                            row.find('.person_gender').text(data.data[i].person_gender);
                            row.find('.person_id').text(data.data[i].person_id);
                            row.find('.si_id').text(data.data[i].si_id);
                            row.find('.person_affiliate').text(data.data[i].person_affiliate);
                            row.find('.person_tel').text(data.data[i].person_tel);
                            row.find('.record_operation').html('添加为稽核人员');
                            row.appendTo('#datas');
                        }

                    }
                    else
                    {
                        var msg=data.msg;
                        var search_title=$('#search-title');
                        search_title.html(msg);
                        $('#datas').html("");
                    }
                },
                error:function(xhr,txtStatus,error){
                    alert(error);

                },
                complete:function( xhr, txtStatus){
                    //alert(txtStatus+xhr);
                    //alert("done");
                },
            });
        }
    });
} );

$('#search-results')
    .removeClass( 'display' )
    .addClass('table table-striped table-bordered');
