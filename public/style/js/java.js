$(document).ready(function (){
/*    $(".Form_F_New_News").on('submit',function (e){
        e.preventDefault();
        $('.PageNewNews4').fadeOut(100);
        $('.PageNewNews5').fadeIn(100);
        var Chat=$('select[name=OkChat]').val();
                $.ajax({
            url:'/New/News/Lv4/Save',
            data:{Chat:Chat},
            type:"POST"
        })
    })*/
    $(".btn_border_bg_red3").click(function (){
        $('.PageNewNews3').fadeOut(100);
        $('.PageNewNews4').fadeIn(100);
        var Parent=$('select[name=SelectCity]').val();
        var item=$("select[name=SelectAddress]").val();
        $.ajax({
            url:'/New/News/Lv3/Save',
            data:{Parent:Parent , item:item},
            type:"POST"
        })
    })
    $(".btn_set_city").click(function (){
        var val=$('select[name=SelectCity]').val();
        $.ajax({
            url:'/New/News/Lv3',
            data: {val: val},
            type:"POST"
        }).done(function (data){
            $('select[name=SelectAddress]').html(data);
        })
    });
    $(".Form_News_L2").on('submit',function (e){
        e.preventDefault();
        $('.PageNewNews2').fadeOut(100);
        $('.PageNewNews3').fadeIn(100);
        var Data= new FormData(this);
        Data.append('Title',$('input[name=SetTitle]').val());
        Data.append('Desc',$('textarea[name=SetDesc]').val());
        Data.append('Price',$('input[name=SetPrice]').val());
        $.ajax({
            url:'/New/News/Lv2/Save',
            data:Data,
            type:"post",
            processData: false,
            cache:false,
            contentType:false,
        })
    })
    $(".btn_border_bg_red1").click(function (){
        $('.PageNewNews1').fadeOut(100);
        $('.PageNewNews2').fadeIn(100);
        var Parent=$('select[name=SelectSubMenu]').val();
        var item=$("select[name=SelectMenu]").val();
        $.ajax({
            url:'/New/News/Lv1/Save',
            data:{Parent:Parent , item:item},
            type:"POST"
        })
    })
    $(".btn_set_sub_menu").click(function (){
        var val=$('select[name=SelectSubMenu]').val();
        $.ajax({
            url:'/New/News/Lv1',
            data: {val: val},
            type:"POST"
        }).done(function (data){
            $('select[name=SelectMenu]').html(data);
        })
    });
    $(".InputChat button").click(function (){
        var id_chat = $(this).attr('class');
        var mobile_shop = $(this).attr('id');
        var text = $('.TextChat').val();
            $.ajax({
                url:'/New/Pm',
                type:"POST",
                data:{id:id_chat , mobile:mobile_shop , text:text}
            }).done(function (data){
                alert(data);
            })

    })
    $(".btn_back_red_dirk_bg_ok_mobile").click(function (){
        $(".ViewShowNumberPhone").stop().slideToggle(200)
    })
    $(".FilterAll button").click(function (){
       var id = $(this).parent('div').find('select[name=SelectOption]').val();
        $.ajax({
            url:'/Select/Filter/News',
            type:"POST",
            data:{id:id}
        }).done(function (data){
        }).done(function (data){
            $("#ViewNewsSelectMenu").html(data);

        })

    });
    $(".ImageViewImageSlid").click(function (){
        var src = $(this).attr('src');
        $("#ViewImage img").attr('src' , src);
    })
    $("input[name=InputSearchIndexPage]").keyup(function (){
        var val=$(this).val();
        var City=$(this).attr('class');
        $.ajax({
           url:'/Search/News',
           type:"POST",
           data:{val:val , City:City}
        }).done(function (data){
            $("#PageSearchView").html(data);
        })
    })
    $("#btn_Search_BAR_Price").click(function (){
        var PriceU=$("#amountU").val();
        var PriceD=$("#amountD").val();
        var Parent = $(this).attr('class');
        $.ajax({
            url:'/View/Price/',
            type:"POST",
            data:{PriceU:PriceU , PriceD:PriceD , Parent:Parent},
        }).done(function (data){
            $('#ViewNewsSelectMenu').html(data);
        })
    });


    $(".ViewNewsSelectMenuSelectAddress button").click(function (){
        var Address = $('select[name=SelectAddress]').val();
        var City = $('select[name=SelectAddress]').attr('id');
        var Parent = $(this).attr('class');
        $.ajax({
            url:'/View/Address/',
            type:"POST",
            data:{Address:Address , City:City , Parent:Parent},
        }).done(function (data){
            $('#ViewNewsSelectMenu').html(data);
        })
    })
    $("#btn_menu_phone").click(function (){
        $("#ViewMenuItemTopHeaderPageIndexPhone").stop().slideToggle(200);
    });
    $("#btnSelectTypeNews").click(function (){
        $("#MenuTypeTopMenu").stop().slideToggle(200);
    });
    $(".btnMenuTypeTopMenu").hover(function (){
        var id = $(this).attr('id');
        $("#MenuSub"+id).stop().slideToggle();
    });
    $(".MenuSub").hover(function (){
        $(this).stop().slideDown();
    },function (){
        $(this).stop().slideUp();
    })

})
