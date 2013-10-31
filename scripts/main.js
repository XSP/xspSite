$(function () {
    var map;
    function initialize() {
        var mapOptions = {
            zoom: 8,
            center: new google.maps.LatLng(-34.397, 150.644),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);
    }

    $('.selected').click(initialize);


    $('#loadingDiv').hide();
    $(document).ajaxStart(function () {
        $('#loadingDiv').show();
    })
    $(document).ajaxStop(function () {
        $('#loadingDiv').hide();
    });

    var content, visibleHeight, navSwitch;
    content = $(".content");
    visibleHeight = window.innerHeight;


    //onload homepage is loaded by default
    content.children("#home").load("home.php", function () {
        //$(this).children().attr("style", "min-height:" + (visibleHeight - 200) + "px;");
    });

    navSwitch = $("nav ul li");

    navSwitch.click(function () {
        var that, loadPage;
        that = $(this);


        navSwitch.removeClass("selected");
        that.addClass("selected");

        loadPage = that.html().toLowerCase().replace(/\s/g, '');

        if ($("#" + loadPage).is(":empty")) {
            $("#" + loadPage).load(loadPage + ".php", function () {
                //$(".wrapper").attr("style", "min-height:" + visibleHeight + "px;");
                $(window).scrollTo($("#" + loadPage + " " + ".scroll"), 300);
            });
        }
        else {
            $(window).scrollTo($("#" + loadPage + " " + ".scroll"), 300);
        }
    });


    /*$(window).scroll(function () {
     $(".wrapper div").one('inview', function () {
     console.log($(this).children('h2').html());
     });
     });*/
});