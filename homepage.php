<!DOCTYPE html>
<html>

<head>
    <?php include('include/head.php'); ?>
    <?php include('include/checkuser.php'); ?>

</head>

<body>
<section class="parent-section">
    <section class="section2 fixed-section bg-primary">
        <div class="container ">
            <div class="row align-items-center">
                <div class="col-3 custom_icon1">
                    <a href="explore.php">
                        <i class="mdi mdi-collage mdi-24px text-white"></i>
                    </a>

                </div>
                <div class="col-6">
                    <h2 class="text-white text-center"><span class="logo">Chalo App</span></h2>
                </div>
                <div class="col-3 ">
                    <a href="profile.php">
                        <div class="user-img c-pointer position-relative float-right">
                            <span class="activity active"></span>
                            <img src="images/user/2.png" height="40" width="40" alt="">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <br><br>

    <!-- Main Body-->
    <section class="section1 mt-3">

        <!--        <div style="width: 100%">-->
        <!--            <iframe width="100%" height="400"-->
        <!--                    src="https://maps.google.com/maps?width=100%&amp;height=400&amp;hl=en&amp;coord=18.95471534252734,72.81193256378175&amp;q=Mumbai+(LetsGo%20Walking)&amp;ie=UTF8&amp;t=&amp;z=16&amp;iwloc=A&amp;output=embed"-->
        <!--                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a-->
        <!--                        href="https://www.maps.ie/coordinates.html">find my location</a></iframe>-->
        <!--        </div>-->
        <!--        <br/>-->

        <div class="responsive-map" id="map">
            <!--                <iframe-->
            <!--                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1737.6221882978507!2d-98.48650795000005!3d29.421653200000023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x865c58aa57e6a56f%3A0xf08a9ad66f03e879!2sHenry+B.+Gonzalez+Convention+Center!5e0!3m2!1sen!2sus!4v1393884854786"-->
            <!--                    width="100%" height="700" frameborder="0" style="border:0"></iframe>-->
        </div>
    </section>

    <?php include('include/bottom_bar.php'); ?>

    <!-- Main Body-->
</section><!-- PARENT SECTION -->
<script>
    // Initialize and add the map
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
        var locations = [

            <?php

            $res = mysqli_query($con, "SELECT * FROM activity order by date  ");

            while ($row = mysqli_fetch_assoc($res)) {
                $i = 0;
                echo "    ['" . $row['type'] . "'," . $row['glat'] . " ," . $row['glong'] . ", " . $i . ", " . $row['id'] . ",'images/" . $row['marker'] . "'],";
                $i = $i + 1;

            }
            ?>
//
//            ['Bondi Beach', -33.890542, 151.274856, 4, 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'],
//            ['Coogee Beach', -33.923036, 151.259052, 5, ''],
//            ['Cronulla Beach', -34.028249, 151.157507, 3, ''],
//            ['Manly Beach', -33.80010128657071, 151.28747820854187, 2, ''],
//            ['Maroubra Beach', -33.950198, 151.259302, 1, ''],

        ];

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 10,
            center: new google.maps.LatLng(19.1020922, 72.8459594),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        var infowindow = new google.maps.InfoWindow();

        var marker, i;

        for (i = 0; i < locations.length; i++) {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map,
                icon: locations[i][5]
            });

            google.maps.event.addListener(marker, 'click', (function (marker, i) {
                return function () {
                    infowindow.setContent('<a href=./activity_details.php?id=' + locations[i][4] + '>' + locations [i][0] +
                        '</a>'
                    )
                    ;
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }

    }
</script>


<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyALuAGj6ZTJlUaxCXJLJcR17UaMxaAcWFA&callback=initMap">
</script>
<?php include('include/footer.php'); ?>


</body>