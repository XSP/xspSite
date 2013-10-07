<script>
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

    google.maps.event.addDomListener(window, 'load', initialize);

</script>
<div class="wrapper">
    <div class="enquiry">
        <div class="t-w above"></div>
        <div class="container">
            <div id="map-canvas"></div>
            <h2>Contact us</h2>

            <div class="contact-us">
                <div class="needField" id="results"></div>
                <div class="unit">
                    <form name="myform" id="myform" action="" method="POST">
                        <input class="input" name="name" type="text" placeholder="Name">
                        <br/>
                        <input class="input" name="contact_no" type="text" placeholder="Contact number">
                        <br/>
                        <input class="input" name="email" type="text" placeholder="eMail">
                        <br/>
                        <textarea class="input" placeholder="Message" style="height:60px;"
                                  name="message"></textarea>
                        <br/>
                        <input type="hidden" value="1" name="priority"/>
                        <input type="submit" class="btn floatR clear clearWidth" name="submit"
                               value="submit">
                    </form>
                </div>
            </div>
        </div>
        <div class="d-w"></div>
    </div>
</div>