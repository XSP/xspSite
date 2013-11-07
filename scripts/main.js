$(function () {


    var map;
    var mapCenter = new google.maps.LatLng(12.921497 , 77.631058);
    var XSPoffice = new google.maps.LatLng(12.921497, 77.635121);

    function initialize() {
        // Create an array of styles.
        var styles = [
            {
                stylers: [
                    { hue: "#9788BB" },
                    { saturation: -20 }
                ]
            },
            {
                featureType: "road",
                elementType: "geometry",
                stylers: [
                    { lightness: 100 },
                    { visibility: "simplified" }
                ]
            },
            {
                featureType: "road",
                elementType: "labels",
                stylers: [
                    { visibility: "off" }
                ]
            }
        ];

        // Create a new StyledMapType object, passing it the array of styles,
        // as well as the name to be displayed on the map type control.
        var styledMap = new google.maps.StyledMapType(styles, {name: "Styled Map"});

        // Create a map object, and include the MapTypeId to add
        // to the map type control.
        var mapOptions = {
            zoom: 15,
            center: mapCenter,
            scrollwheel: false,
            mapTypeControl: false,
            streetViewControl: false,
            overviewMapControl: false,
            mapTypeControlOptions: {
                mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
            }
        };
        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

        var XSPicon = "images/map-marker.png";
        var marker = new google.maps.Marker({
            position: XSPoffice,
            map: map,
            title: 'XSP web & mobile solutions',
            icon: XSPicon
        });

        //Associate the styled map with the MapTypeId and set it to display.
        map.mapTypes.set('map_style', styledMap);
        map.setMapTypeId('map_style');
    }

    $('#loadingDiv').hide();
    $(document).ajaxStart(function () {
        $('#loadingDiv').show();
    })
    $(document).ajaxComplete(function () {
        $('#loadingDiv').hide();
        initialize();
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
                $(window).scrollTo($("#" + loadPage + " " + ".scroll"), 600);
            });
        }
        else {
            $(window).scrollTo($("#" + loadPage + " " + ".scroll"), 600);
        }
    });
});