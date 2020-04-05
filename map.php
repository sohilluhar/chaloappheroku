<!DOCTYPE html>
<html>
<head>

    <?php include('include/head.php'); ?>
    <style>
        /* Set the size of the div element that contains the map */
        #map {
            height: 400px; /* The height is 400 pixels */
            width: 100%; /* The width is the width of the web page */
        }
    </style>
</head>
<body>
<section class="parent-section">
    <section class="section2 fixed-section bg-primary">
        <div class="container ">
            <div class="row align-items-center">
                <div class="col-3 custom_icon1">
                    <a href="edit_activity.php">
                        <i class="mdi mdi-keyboard-backspace mdi-24px text-white"></i>
                    </a>
                </div>

                <div class="col-6">
                    <h2 class="text-white text-center"><span class="logo">Location</span></h2>
                </div>
                <div class="col-3 ">


                </div>
            </div>
    </section>
    <br><br> <br>

    <!-- Main Body-->
    <section class="section1">
        <div class="container-fluid">

            <div id="map"></div>
            <form action="setgeoloc.php" method="post">
                <!--                <input id="address" type="text"/><br/>-->
                <input type="text" id="latitude" name="latitude" placeholder="Latitude"/>
                <input type="text" id="longitude" name="longitude" placeholder="Longitude"/>
                <br>
                <input type="submit" name="Submit">


                <!-- Card End  -->
            </form>

        </div>
        </div>
    </section>
    <!-- Main Body-->
</section><!-- PARENT SECTION -->


<script>


    function initMap() {
        // // The location of Uluru
        //
        // var uluru = {lat: 19.1020922, lng: 72.8459594};
        // var uluru1 = {lat: 19.1020932, lng: 72.8459494};
        // //19.1020922,72.8459594
        // // The map, centered at Uluru
        // var map = new google.maps.Map(
        //     document.getElementById('map'), {zoom: 13, center: uluru});
        // // The marker, positioned at Uluru
        // var marker = new google.maps.Marker({
        //     position: uluru,
        //     map: map,
        //     icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
        //     label: {color: '#00aaff', fontWeight: 'bold', fontSize: '14px', text: 'Your text here'}
        // });
        // var marker1 = new google.maps.Marker({
        //     position: uluru1,
        //     map: map,
        //     icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
        //     label: {color: '#00aaff', fontWeight: 'bold', fontSize: '14px', text: 'Your text here'}
        // });
        var locations = [];

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 10,
            center: new google.maps.LatLng(19.1020922, 72.8459594),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        var infowindow = new google.maps.InfoWindow();

        var marker, i;

        google.maps.event.addListener(map, 'click', function (event) {
                // alert('Lat: ' + event.latLng.lat() + ' and Longitude is: ' + event.latLng.lng());
                // document.getElementById("address").value = event.latLng.lat();
                document.getElementById("latitude").value = event.latLng.lat();
                document.getElementById("longitude").value = event.latLng.lng();


                // var geocoder = new google.maps.Geocoder();
                //
                // geocoder.geocode({'latLng': event.latLng}, function (results, status) {
                //     if (status == google.maps.GeocoderStatus.OK) {
                //         if (results[1]) {
                //             map.setZoom(11);
                //             marker = new google.maps.Marker({
                //                 position: latlng,
                //                 map: map
                //             });
                //             infowindow.setContent(results[1].formatted_address);
                //             infowindow.open(map, marker);
                //         }
                //     } else {
                //         alert("Geocoder failed due to: " + status);
                //     }
                // });

            }
        )
        ;

    }


</script>


<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyALuAGj6ZTJlUaxCXJLJcR17UaMxaAcWFA&callback=initMap">
</script>
</body>
</html>
<!---->
<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <link rel="stylesheet"-->
<!--          href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.3.0/css/ol.css"-->
<!--          type="text/css">-->
<!--    <style>-->
<!--        .map {-->
<!--            height: 400px;-->
<!--            width: 100%;-->
<!--        }-->
<!--    </style>-->
<!--    <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.3.0/build/ol.js"></script>-->
<!--    <title>OpenLayers example</title>-->
<!--</head>-->
<!--<body>-->
<!--<h2>My Map</h2>-->
<!--<div id="map" class="map"></div>-->
<!--<script type="text/javascript">-->
<!--    var map = new ol.Map({-->
<!--        target: 'map',-->
<!--        layers: [-->
<!--            new ol.layer.Tile({-->
<!--                source: new ol.source.OSM()-->
<!--            })-->
<!--        ],-->
<!--        view: new ol.View({-->
<!--            center: ol.proj.fromLonLat([37.41, 8.82]),-->
<!--            zoom: 4-->
<!--        })-->
<!--    });-->
<!---->
<!--    var markers = new OpenLayers.Layer.Markers("Markers");-->
<!--    map.addLayer(markers);-->
<!---->
<!--    var size = new OpenLayers.Size(21, 25);-->
<!--    var offset = new OpenLayers.Pixel(-(size.w / 2), -size.h);-->
<!--    var icon = new OpenLayers.Icon('http://www.openlayers.org/dev/img/marker.png', size, offset);-->
<!--    markers.addMarker(new OpenLayers.Marker(new OpenLayers.LonLat(0, 0), icon));-->
<!--    markers.addMarker(new OpenLayers.Marker(new OpenLayers.LonLat(0, 0), icon.clone()));-->
<!--</script>-->
<!--</body>-->
<!--</html>-->
<!---->
