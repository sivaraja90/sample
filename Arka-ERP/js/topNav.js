/*function for Top Navigation Menus */
var timeout1 = 0;
var closetimer1 = 0;
var ddmenuitem1 = 0;
var ddmenutab1 = 0;

//alert("onload");
function dropdown_open1() {
   
    dropdown_canceltimer();
    dropdown_close1();
    ddmenuitem1 = $(this).find('ul').eq(0).css('visibility', 'visible');
}

function dropdown_close1() {
    if (ddmenuitem1) ddmenuitem1.css('visibility', 'hidden');
	
}

function dropdown_timer1() {
    closetimer1 = window.setTimeout(dropdown_close1, timeout1);
}

function dropdown_canceltimer() {
    if (closetimer1) {
        window.clearTimeout(closetimer1);
        closetimer1 = null;
    }
}



$(document).ready(function () {


    $('#topNav-menu > li ').hover(function () {
        var i = $('#topNav-menu > li ').index(this);
        $(this).find('a').eq(0).addClass('topNav-tabHover' + i).addClass('top-common');
    }, function () {

        for (j = 0; j < $('#topNav-menu > li ').length; j++) {
            $('#topNav-menu > li:eq(' + j + ')').find('a').eq(0).removeClass('topNav-tabHover' + j).removeClass('top-common');
        }

    });

    /*function for ipad*/
    $('#topNav-menu > li').bind('mouseover', dropdown_open1);
    $('#topNav-menu > li').bind('mouseout', dropdown_timer1);
    if (navigator.platform == 'iPad' || navigator.platform == 'iPhone' || navigator.platform == 'iPod') {
        $('.topLi').css('width', '181px');
        $('.btmLi').css('width', '181px');
        $('#topNav-menu > li > ul > li > a').css('margin', '0 0 0 1px');
        $('#topNav-menu > li > ul > li > a').css('padding', '5px 9px 5px 7px');
        $('.btmLi').css('margin-top', '-1px');
    } /*function for search box focus and blur */
    $('#txtSearch').focus(function () {
        if (this.value == "") {
            this.value = "";
        }
    });
    $('#txtSearch').blur(function () {
        if (this.value == "") {
            this.value = "";
        }
    });
});
document.onclick = dropdown_close1;