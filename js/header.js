//$(document).ready(function(){
//   $("#logo").hover(function(){
//       var logo =$("#logo");
//       logo.animate({width: '120%'},"100");
//       
//   }) ;
//});
// $(document).ready(function () {
//     var header = $('#header');
//     var scrolled = false;
//     var logo = $("#logo");
//     var logo2 = $("#logo2");
//     logo2.addClass("hidden");
//     $(window).scroll(function () {


//         if (0 < $(window).scrollTop() && !scrolled) {
//             logo.addClass("hidden");
//             logo2.removeClass("hidden");
//            logo2.css({"marginLeft": "50px",
//                 "marginTop": "20px"
//             });
//             logo2.animate({"marginLeft": "15px",
//                         "marginTop": "0px"
//             });
//             logo2.animate({"marginLeft": "15px"});
//            logo.animate({width: "120%"}, '500');
//             header.animate({height: "100px"}, '500');
//             header.addClass('visible').animate({top: '0px'});
//             scrolled = true;
//         }

//         if (1 > $(window).scrollTop() && scrolled) {
//             header.animate({height: "116px"}, '500');
//             logo2.addClass("hidden");
//             logo.removeClass("hidden");
//             logo.css({
//                 "marginLeft": "-23px",
//                 "marginTop": "-37px"
//             });
//             logo.animate({
//                 "marginLeft": "15px",
//                 "marginTop": "0px"
//             });
//             logo.animate({width: "120%"}, '1000');
//             header.removeClass('visible').css('top', '0px');
//             scrolled = false;
//         }
//     });
// });

             // header-menu.css({ "marginTop": "10px"});
            // menu-li.css({"paddingTop": "15px"});
$(document).ready(function () {
    var header = $('#header');
    var menu_header = $('#menu_header');
    var menu_li = $('.menu_li');
    var logo = $('#logo');
    var logo2 = $('#logo2');
    var color_a = $('.color_a');
    logo2.addClass("hidden");
    var scrolled = false;

    $(window).scroll(function () {
        if (0 < $(window).scrollTop() && !scrolled) {
            $(".hvr-overline-from-center").addClass("hvr-overline-from-center-2 ");
            $(".hvr-overline-from-center-2").removeClass("hvr-overline-from-center");
            // $(".hvr-overline-from-center-2").addClass("<?php if ($active_url == '/Home.php') echo 'bold br-white"; ?>");
            logo.addClass("hidden");
            logo2.removeClass("hidden");
            logo2.css({"marginTop": "-8px"});
            menu_li.css({"paddingTop": "10px"});
            color_a.css({"color": "white"});
            header.css({"background": "#000000"});
            header.animate({height: "80px"}, '500');
            header.addClass('visible').animate({top: '0px'});
            scrolled = true;
        }

        if (1 > $(window).scrollTop() && scrolled) {
            $(".hvr-overline-from-center-2").addClass("hvr-overline-from-center");
            $(".hvr-overline-from-center").removeClass("hvr-overline-from-center-2");
            logo.removeClass("hidden");
            logo2.addClass("hidden");
            color_a.css({"color": "#333333"});
            header.css({"background": "none"});
            header.css({"background": "while"});
            logo.css({"marginTop": "0px"});
            menu_li.css({"paddingTop": "28px"});
            header.animate({height: "116px"}, '500');
            header.removeClass('visible').css('top', '0px');
            scrolled = false;

        }
    });
    
      

});
$(document).ready(function () {
    var opcacity = $('#opacity');
    var scrolled = false;
    opcacity.css('opacity', ' 0.4');
    $(window).scroll(function () {
        if (100 < $(window).scrollTop() && !scrolled) {
            opcacity.animate({opacity: "0.6"},"fast");
            opcacity.animate({opacity: "0.8"},"fast");
            opcacity.animate({opacity: "1"},"fast");
//            whyus_conten.css('opacity', ' 1');
            scrolled = true;

        }

        if (1 > $(window).scrollTop() && scrolled) {
            opcacity.css('opacity', ' 0.4');
            scrolled = false;
        }
    });
});
