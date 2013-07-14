$(function () {

    var content = $(".content");
    content.children(".home").load("home.php");

    var navSwitch = $("nav ul li");

    navSwitch.click(function () {
        var that = $(this)
        loadPage = "";

        navSwitch.removeClass("selected");
        that.addClass("selected");

        loadPage = that.html().toLowerCase().replace(/\s/g,'');

        //content.children().addClass('moveout');
        //console.log(content.children());
        //content.load(loadPage+".php");

        content.children().removeClass("in-view");
        $("."+loadPage).addClass("in-view");
        $("."+loadPage).load(loadPage+".php");
    });

});