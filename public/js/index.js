$(function(){

    //サイトトップまでスクロール
    $('.scroll').click(function(){
        $('html,body').animate({
            'scrollTop':0
        },500)
    });

    //トップページのアニメーション
    setTimeout(function(){
        $('.top-title').fadeIn(1600);
    },500);

    setTimeout(function(){
        $('.top-coment').slideDown(2600);
    },10);

    // 詳細ページのアニメーション
    $('.js-detail').css('display','none');
    setTimeout(function(){
        $('.js-detail').fadeIn(2600);
    },10);

    //TOPページコンテンツを可視範囲に入ってから表示させる
    $('.scroll-section').css('display','none');
    $(window).on("scroll",function(){
        $('.scroll-section').each(function(){
            var imgPos = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if(scroll > imgPos - windowHeight + windowHeight / 5){
                $(this).fadeIn(3200);
            }
        });
    });

    //会員登録のスライド
    setTimeout(function(){
        $('.form-container').fadeIn(1000);
    },500);

    //マイページのアニメーション
    setTimeout(function(){
        $('.myPage-container').slideDown(1600);
    },400);

    //投稿ページのアニメーション
    setTimeout(function(){
        $('.create-container').slideDown(1600);
    },400);

    //設定ページのアニメーション
    setTimeout(function(){
        $('.setting-container').slideDown(1600);
    },400);

    //詳細ページのアニメーション
    setTimeout(function(){
        $('.detail-container').slideDown(1600);
    },400);

    //アップデートページのアニメーション
    setTimeout(function(){
        $('.update-container').slideDown(1600);
    },400);

    //アップデートページのアニメーション
    setTimeout(function(){
        $('.delete-container').slideDown(1600);
    },400);

    //アップデートページのアニメーション
    setTimeout(function(){
        $('.post-container').slideDown(1600);
    },400);

    //アップデートページのアニメーション
    setTimeout(function(){
        $('.team-container').slideDown(1600);
    },400);

    //サクセスメッセージ表示
    var $msg_suc = $('.msg-suc');
    var msg = $msg_suc.text();
    if(msg.replace(/^[\s　]+|[\s　]+$/g, "").length){
        $msg_suc.slideToggle('slow');
        setTimeout(function(){ $msg_suc.slideToggle('slow'); }, 4000);
    }

    //画像ビュー
    var $dropArea=$('.area-drop');
    var $fileInput=$('.input-file');
    $dropArea.on('dragover',function(e){
        e.stopPropagation();
        e.preventDefault();
        $(this).css('border','3px #ccc dashed');
    });

    $dropArea.on('dragleave',function(e){
        e.stopPropagation();
        e.preventDefault();
        $(this).css('border','none');
    });

    $fileInput.on('change',function(e){
        $dropArea.css('border','none');
        var file=this.files[0];
        $img=$(this).siblings('.prev-img');
        fileReader=new FileReader();
        fileReader.onload=function(event){
            $img.attr('src',event.target.result).show();
        };
        fileReader.readAsDataURL(file);
    });

    //メニューのCSS
    var $open = $('i.fa-bars');
    var $close = $('i.fa-undo');
    $open.on('click',function(){
        $open.css('display','none');
        $close.fadeIn();
        $('.menu').fadeIn();
    });

    $close.on('click',function(){
        $close.css('display','none');
        $('.menu').fadeOut();
        $open.fadeIn();
    });


});
