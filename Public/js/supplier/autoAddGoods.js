/**
 * Created by tongying on 14-8-4.
 */
function isBookCat(brand_id)
{
    var int_brand_id=parseInt(brand_id);
    if(bookCats.indexOf(int_brand_id)>-1)
    {
        return true;
    }
    else
    {
        return false;
    }

}
$(document).ready(function(){
    $( "#supplierForm" ).submit(function( event ) {

        var errorMsg="";
        var hasError=false;
        /**required fields validation **/
        var goods_name=$('#goods_name').val();
        var cat_id=$("#cat_id").val();
        if(goods_name.trim()=="")
        {
            errorMsg="-商品名称不能为空\n";
            hasError=true;
        }
        if(cat_id==0)
        {
            errorMsg=errorMsg+"-商品分类必须选择\n";
            hasError=true;
        }
        /**检查价格是否为数值**/
        var shop_price=parseFloat($('#shop_price').val());
        var market_price=parseFloat($('#market_price').val());
        var commission_value=parseFloat($('#commission_value').val());
        if(isNaN(shop_price))
        {
            hasError=true;
            errorMsg=errorMsg+"-本店售价不能为空，且必须为数值\n";
            $('#shop_price').val('0');
        }
        if(isNaN(market_price))
        {
            hasError=true;
            errorMsg=errorMsg+"-市场售价不能为空，且必须为数值\n";
            $('#market_price').val('0');
        }
        if(isNaN(commission_value))
        {
            hasError=true;
            errorMsg=errorMsg+"-［通用信息］佣金数值不能为空，且必须为数值\n";
            $('#commission_value').val('0');
        }
        /**检查库存数量是否为大于零的整数**/
        var goods_number=$('#goods_number').val();
        goods_number=Number(goods_number);
        if (!isNaN(goods_number)) {
            if (parseInt(goods_number)==parseFloat(goods_number)) {

            } else {
                hasError=true;
                errorMsg=errorMsg+"-商品库存数量必须为大于0的整数\n";
            }
        } else {
            hasError=true;
            errorMsg=errorMsg+"-商品库存数量必须为大于0的整数\n";
        }
        if(hasError)
        {
            alert(errorMsg);
        }
        else
        {
            $("#supplierForm").submit();
        }
        event.preventDefault();
    });
    $("#gallery").on('click','.add-image-to-gallery',function(){
        //$(this).parent().remove();
        $( "#gallery" ).append('<div class="gallery_input_container"><input type="hidden" name="oldGallery[]" value=""><div class="input-group"><span class="input-group-addon">商品图片：</span><input id="uploadImage" class="form-control gallery_input" type="file" name="gallery[]" /></div><img id="uploadPreview" class="gallery_preview" style="width: 200px; height: 200px;" /><button type="button" class="btn btn-sm btn-danger remove-image-from-gallery"><span class="glyphicon glyphicon-minus"></span></button></div>');
    });
    $("#gallery").on('click','.remove-image-from-gallery',function(){
        var answer = confirm("确定要删除此图片么？")
        if(answer){
            $(this).parent().remove();
        }

    });
    $("#gallery").on('change','.gallery_input',function(){
        //alert(this.files);
        var preview=$(this).parent().parent().find('.gallery_preview');
        var oFReader = new FileReader();
        oFReader.readAsDataURL(this.files[0]);
        oFReader.onload = function (oFREvent) {
            //preview.src = oFREvent.target.result;
            preview.attr('src',oFREvent.target.result);
        };

    });
    $("#brand_id").change(function(){
        //alert('hello');
        var brand_id=$('#brand_id').val();
        //alert(brand_id);
        if(brand_id!=0)
        {
            var brand_name=$("#brand_id option:selected" ).text();
            $('#brand_name').val(brand_name);
            $('#brand_name').prop('disabled', true);
        }
        else
        {
            $('#brand_name').prop('disabled',false);
            $('#brand_name').val('');
        }
    });

    if($("#brand_id").val()==0)
    {
        $('#brand_name').prop('disabled',false);
        $('#brand_name').val('');
    }

    $("#cat_id").change(function(){
        if(isBookCat($('#cat_id').val()))
        {
            //alert('Book');
            $(".isPublisher").show();
            $(".isBrand").hide();
        }
        else
        {
            //alert('Not Book');
            $(".isPublisher").hide();
            $(".isBrand").show();
        }
    });
    $("#publisher_id").change(function(){
        //alert('hello');
        var publisher_id=$('#publisher_id').val();
        //alert(brand_id);
        if(publisher_id!=0)
        {
            var publisher_name=$("#publisher_id option:selected" ).text();
            $('#publisher_name').val(publisher_name);
            $('#publisher_name').prop('disabled', true);
        }
        else
        {
            $('#publisher_name').prop('disabled',false);
            $('#publisher_name').val('');
        }
    });
    if(isBookCat($('#cat_id').val()))
    {
        //alert('Book');
        $(".isPublisher").show();
        $(".isBrand").hide();
    }
    else
    {
        $(".isPublisher").hide();
        $(".isBrand").show();
    }

});