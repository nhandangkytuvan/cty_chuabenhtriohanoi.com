$(document).ready(function() {
    var inter1;
    $('#my_popup').popup({
        blur:false,
        transition: 'all 0.3s',
        scrolllock: false,
        background: false,
        backgroundactive:false,
        onclose: function() {setTimeout(showchat, 12000);}
    });
    var d = new Date();
    var gio = d.getHours();
    var phut = d.getMinutes();
    if((7<gio&&gio<22)||(gio==22&&phut<=30)||(gio==7&&phut>=30)){
        setTimeout(showchat, 10000);
    }
    // 
    $('.home .row3 .flex1col1').click(function(event) {
        /* Act on the event */
        clearInterval(inter1);
        var index = $(this).index();
        $(this).addClass('active');
        $(this).siblings('div').removeClass('active');
        $('.home .row3 .tab-contents-1').children('div').eq(index).addClass('active');
        $('.home .row3 .tab-contents-1').children('div').eq(index).siblings('div').removeClass('active');
        inter1 = setInterval(alertFunc, 5000);
    });
    // 
    $('.footer-toolbar').scrollToFixed( { bottom: 0} );
    $('.topheader').scrollToFixed();
    //
    inter1 = setInterval(alertFunc, 5000);
    //my_popup3
    setTimeout(toogleMessenger, 10000);
    setInterval(toogleMessenger, 18000);
    //
    $("a[href='#top']").click(function() {
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });
    //listen to shake event
    var shakeEvent = new Shake({threshold: 5,timeout: 1000});
    shakeEvent.start();
    window.addEventListener('shake', function(){
        window.location.href = "tel:18006181";
    }, false);
});
function showchat() {
    $('#my_popup').popup('show');
    // setTimeout(function(){ 
    //     $('#my_popup p').each(function(index, el) {
    //         if($(el).hasClass('dis-none')){
    //             $(el).slideDown().removeClass('dis-none');
    //             $(el).siblings('p').slideUp().addClass('dis-none');
    //             return false;
    //         }
    //     });
    // }, 5000);
}
function alertFunc() {
    var obj = $('.home .row3 .flex1col1.active');
    var index = obj.next().index();
    obj.removeClass('active');
    if(obj.next().length){
        obj.next().addClass('active');
        $('.home .row3 .tab-contents-1').children('div').eq(index).addClass('active');
        $('.home .row3 .tab-contents-1').children('div').eq(index).siblings('div').removeClass('active');
    }
    else{
        $('.home .row3 .flex1col1').first().addClass('active');
        $('.home .row3 .tab-contents-1').children('div').first().addClass('active');
        $('.home .row3 .tab-contents-1').children('div').first().siblings('div').removeClass('active');
    }
}

$(function(){
    // $('.home .row1 .flex.flex1col1.order1.arrow_box').css({'height':($('menu .flex1col1').height())+'px'});
    // $(window).resize(function(){
    //     $('menu .flex1col1 >.box').css({'height':($('menu .flex1col1').height())+'px'});
    // });
});

function toogleMessenger(){
    $("#my_popup3").toggleClass('active');
    if(!$("#my_popup3").hasClass('active')){
        setTimeout(toogleMessenger, 10000);
    }
}