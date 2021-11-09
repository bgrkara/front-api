(function( $ ){
$(document).ready(function (){
    $("#register").click(function (){
        var data = $("form").serialize();
        $.ajax({
            url:'http://localhost/api/user/add',
            type:'POST',
            data:data,
            dataType:'json',
            success:function (result){
                if (result.status === false){
                    $('.statusInfo').html(result.message).show();
                    // window.location = './login.php';
                }else{
                    // $('.statusInfo').html(result.message).show();
                    $.post('./api/index.php', data);
                    $('form')[0].reset();
                    window.location = './login.php';

                }
            }
        })
    });

});
})( jQuery );


(function( $ ){
    $(document).ready(function (){
        $("#login").click(function (){
            var data = $("form").serialize();
            $.ajax({
                url:'http://localhost/api/user/login',
                type:'POST',
                data:data,
                dataType:'json',
                success:function (result){
                    if (result.status === false){
                        $('.statusInfo').html(result.message).show();
                        // window.location = './';
                    }else{
                        // $('.statusInfo').html(result.message).show();
                        $.post('./api/index.php', data);
                        $('form')[0].reset();
                        window.location = './';
                    }
                }
            });
        });

    });
})( jQuery );


(function( $ ){
    $(document).ready(function (){
        $.ajax({
            url:'http://localhost/api/product/list',
            type:'GET',
            dataType:'json',
            success:function (result){
                if (result.data.length !=0){
                    $.each(result.data, function (i,e){
                        html+='<tr>\n' +
                            '                            <td>'+e.product_name+'</td>\n' +
                            '                            <td>'+e.product_description+'</td>\n' +
                            '                            <td>'+e.product_price+'</td>\n' +
                            '                            <td>'+e.product_discount+'</td>\n' +
                            '                            <td>'+e.sales_status+'</td>\n' +
                            '                            <td>\n' +
                            '                                <div class="d-flex">\n' +
                            '                                    <a href="./product-update.php?id='+e.id+'" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>\n' +
                            '                                </div>\n' +
                            '                            </td>\n' +
                            '                        </tr>';
                    });
                    $('#table-body').html(html);
                }else{
                    $('.product-warn').html('Ürün Kaydı Bulunamadı').show();
                }
            }
        });
    });
})( jQuery );


(function( $ ){
    $(document).ready(function (){
        $("#product-update").click(function (){
            var data = $("form").serialize();
            $.ajax({
                url:'http://localhost/api/product/update',
                type:'POST',
                data:data,
                dataType:'json',
                success:function (result){
                    if (result.status === false){
                        $('.product-warn').html(result.message).show();
                    }else{
                        $('.product-warn').html(result.message).show();
                        $('form')[0].reset();
                    }
                }
            })
        });
    });
})( jQuery );

(function( $ ){
    $(document).ready(function (){
        $("#product-add").click(function (){
            var data = $("form").serialize();
            $.ajax({
                url:'http://localhost/api/product/add',
                type:'POST',
                data:data,
                dataType:'json',
                success:function (result){
                    if (result.status === false){
                        $('.product-warn').html(result.message).show();
                    }else{
                        $('.product-warn').html(result.message).show();
                        $('form')[0].reset();
                    }
                }
            })
        });
    });
})( jQuery );