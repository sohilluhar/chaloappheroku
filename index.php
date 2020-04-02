<!DOCTYPE html>
<html>

<head>
    <?php include('include/head.php');?>

</head>

<body>
    <section class="parent-section">
        <section class="section2 fixed-section bg-primary">
            <div class="container ">
                <div class="row align-items-center">
                    <div class="col-3 custom_icon1">
                        <i class="mdi mdi-settings mdi-24px text-white"></i>
                    </div>
                    <div class="col-6">
                        <h2 class="text-white text-center"><span class="logo">Chalo App</span></h2>
                    </div>
                    <div class="col-3 ">
                        <div class="user-img c-pointer position-relative float-right">
                            <span class="activity active"></span>
                            <img src="images/user/2.png" height="40" width="40" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br><br>

        <!-- Main Body-->
        <section class="section1 mt-3">
            <div class="responsive-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1737.6221882978507!2d-98.48650795000005!3d29.421653200000023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x865c58aa57e6a56f%3A0xf08a9ad66f03e879!2sHenry+B.+Gonzalez+Convention+Center!5e0!3m2!1sen!2sus!4v1393884854786"
                    width="100%" height="700" frameborder="0" style="border:0"></iframe>
            </div>
        </section>

        <?php include('include/bottom_bar.php');?>

        <!-- Main Body-->
    </section><!-- PARENT SECTION -->

    <?php include('include/footer.php');?>



</body>