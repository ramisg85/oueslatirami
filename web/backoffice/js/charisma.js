$(document).ready(function () {
    //themes, change CSS with JS
    //default theme(CSS) is cerulean, change it if needed
	
    var msie = navigator.userAgent.match(/msie/i);
    $.browser = {};
    $.browser.msie = {};

    $('.navbar-toggle').click(function (e) {
        e.preventDefault();
        $('.nav-sm').html($('.navbar-collapse').html());
        $('.sidebar-nav').toggleClass('active');
        $(this).toggleClass('active');
    });

    var $sidebarNav = $('.sidebar-nav');

    // Hide responsive navbar on clicking outside
    $(document).mouseup(function (e) {
        if (!$sidebarNav.is(e.target) // if the target of the click isn't the container...
            && $sidebarNav.has(e.target).length === 0
            && !$('.navbar-toggle').is(e.target)
            && $('.navbar-toggle').has(e.target).length === 0
            && $sidebarNav.hasClass('active')
            )// ... nor a descendant of the container
        {
            e.stopPropagation();
            $('.navbar-toggle').click();
        }
    });

    //disbaling some functions for Internet Explorer
    if (msie) {
        $('#is-ajax').prop('checked', false);
        $('#for-is-ajax').hide();
        $('#toggle-fullscreen').hide();
        $('.login-box').find('.input-large').removeClass('span10');

    }


    //highlight current / active link
    $('ul.main-menu li a').each(function () {
        if ($($(this))[0].href == String(window.location))
            $(this).parent().addClass('active');
    });

    //ajaxify menus
    $('a.ajax-link').click(function (e) {
        if (msie) e.which = 1;
        if (e.which != 1 || !$('#is-ajax').prop('checked') || $(this).parent().hasClass('active')) return;
        e.preventDefault();
        $('.sidebar-nav').removeClass('active');
        $('.navbar-toggle').removeClass('active');
        $('#loading').remove();
        $('#content').fadeOut().parent().append('<div id="loading" class="center">Loading...<div class="center"></div></div>');
        var $clink = $(this);
        $('ul.main-menu li.active').removeClass('active');
        $clink.parent('li').addClass('active');
    });

    $('.accordion > a').click(function (e) {
        e.preventDefault();
        var $ul = $(this).siblings('ul');
        var $li = $(this).parent();
        if ($ul.is(':visible')) $li.removeClass('active');
        else                    $li.addClass('active');
        $ul.slideToggle();
    });

    $('.accordion li.active:first').parents('ul').slideDown();


    //other things to do on document ready, separated for ajax calls
    docReady();
});


function docReady() {
    //prevent # links from moving to top
    $('a[href="#"][data-top!=true]').click(function (e) {
        e.preventDefault();
    });

    //notifications
    $('.noty').click(function (e) {
        e.preventDefault();
        var options = $.parseJSON($(this).attr('data-noty-options'));
        noty(options);
    });

    $('.btn-close').click(function (e) {
        e.preventDefault();
        $(this).parent().parent().parent().fadeOut();
    });
    $('.btn-minimize').click(function (e) {
        e.preventDefault();
        var $target = $(this).parent().parent().next('.box-content');
        if ($target.is(':visible')) $('i', $(this)).removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
        else                       $('i', $(this)).removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
        $target.slideToggle();
    });
    $('.btn-setting').click(function (e) {
        e.preventDefault();
        $('#myModal').modal('show');
    });
}
