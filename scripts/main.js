require(["jquery", "scrollTo"], function () {
    $(function () {

        $('#loadingDiv').hide().ajaxStart(function () {
            $(this).show();  // show Loading Div
        }).ajaxStop(function () {
            $(this).hide(); // hide loading div
        });

        var content, visibleHeight, navSwitch;
        content = $(".content");
        visibleHeight = window.innerHeight;
        //onload homepage is loaded by default
        content.children("#home").load("home.php", function () {
            $(this).children().attr("style", "min-height:" + (visibleHeight - 100) + "px;");
        });
        //$('.wrapper').attr("style", "min-height:" + visibleHeight + "px;");

        navSwitch = $("nav ul li");

        navSwitch.click(function () {
            var that, loadPage;
            that = $(this);


            navSwitch.removeClass("selected");
            that.addClass("selected");

            loadPage = that.html().toLowerCase().replace(/\s/g, '');

            $("#" + loadPage).load(loadPage + ".php", function () {
                $(".wrapper").attr("style", "min-height:" + visibleHeight + "px;");
                $(window).scrollTo($(this), 300);
            });

        });

    });
});