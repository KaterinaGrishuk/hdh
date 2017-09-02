$(document).ready(function() {
    $('.bxslider1').bxSlider({
        pager: true,
        controls: false,
        auto: true,
        pause: 4000,
        speed: 1000
    });

    $('.bxslider2').bxSlider({
        pager: false,
        slideWidth: 260,
        minSlides: 4,
        maxSlides: 4,
        slideMargin: 15,
        moveSlides: 2,
        nextText: '<i class="fa fa-angle-right" aria-hidden="true"></i>',
        prevText: '<i class="fa fa-angle-left" aria-hidden="true"></i>'
    });

    $('.bxslider3').bxSlider({
        pager: false,
        slideWidth: 200,
        minSlides: 4,
        maxSlides: 5,
        slideMargin: 20,
        moveSlides: 2,
        nextText: '<i class="fa fa-angle-right" aria-hidden="true"></i>',
        prevText: '<i class="fa fa-angle-left" aria-hidden="true"></i>'
    });
    $('.dog_wrap').hover(function () {
            $(this).children('a').css('display', 'block')
        },
        function () {
            $(this).children('a').css('display', 'none')
        });

    $(document).scroll(function () {
        if ($(document).scrollTop() > 150) {
            $('.fix_menu').addClass('active');
        } else {
            $('.fix_menu').removeClass('active');
        }
    });
    $(".foto").fancybox({
        fitToView: false,
        maxWidth: "90%",
        scrolling: 'no',
        cyclic: true,
        showNavArrows: true
    });

    // POPUP HOME-HELP

    // $('.help').mousemove(function (eventObject) {
    //     $('.popup').css({
    //         "top": eventObject.pageY + 5,
    //         "left": eventObject.pageX + 5
    //     }).append($('.popup_pr'))
    //         .show();
    //     $('.popup_pr').css('display', 'block');
    // }).mouseout(function () {
    //     $('.popup').hide()
		// 	.css({
    //         	"top": 0,
    //         	"left": 0
    //     	});
    //
    // });
    $('.help').mousemove(function (eventObject) {
        $(this).children('.popup').css({
            "display": "block"
        })
    }).mouseout(function () {
        $(this).children('.popup').css({
            "display": "none"
        })
    });
        $("#phone").mask("+375 (99) 999-99-99");

    // script for timetable
    $(".js-write-cell").on('click', function (e) {
        var el = event.target || event.srcElement;
        var tagName = el.tagName.toLowerCase();
        if(tagName == 'input') {return false;}
        var val = $(this).text();
        var codeInput = '<input type="text" id="edit" value="'+val+'" />';
        var codeHidden = '<input type="hidden" name="user_name" class="save-edit" value="+val+" />';
        $(this).empty().append(codeHidden).append(codeInput);
        $('#edit').focus();
        $('#edit').blur(function()	{
            var text = $(this).val();
            var codeHidden = '<input type="hidden" name="user_name" class="save-edit" value="'+text+'" />';
            $(this).parent().empty().append(codeHidden).append(text);
        });
        // alert(tagName);
    });
    $(window).keydown(function (e) {
        if(e.keyCode == 13){
            $('#edit').blur()
        }
    });
    $('#js-save-timetable').on('click', function () {
        $('#js-timetable').submit();
    });

});