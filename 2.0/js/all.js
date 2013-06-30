require(['jquery'], function ($) {

    var loadPage;
    loadPage = function () {
        var id;
        id = $(this).attr('id');
        $('.wrapper').load(id+'.php');
    };
    $('nav li').click(function () {
        $('nav li').removeClass('selected');
        $(this).addClass('selected');
        $(this).loadPage();
    });
});