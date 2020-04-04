<!DOCTYPE html>
<html>

<head>
    <?php include('include/head.php'); ?>
    <?php

    ?>

</head>

<body>
<section class="parent-section">
    <section class="section2 fixed-section bg-primary">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-3 custom_icon1">
                    <a href="index.php">
                        <i class="mdi mdi-keyboard-backspace mdi-24px text-white"></i>
                    </a>
                </div>

                <div class="col-6">
                    <h2 class="text-white text-center"><span class="logo">All Activity</span></h2>
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
    <br><br> <br>

    <!-- Main Body-->
    <section class="section1 mt-3">
        <div class="container-fluid">
            <div class="row">

                <?php


                $res = mysqli_query($con, "SELECT * FROM activity order by id desc ");

                while ($row = mysqli_fetch_assoc($res)) {
                    $user_row = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM users where  id=" . $row['userid']));
                    $useractivity_done = mysqli_num_rows(mysqli_query($con, "SELECT type FROM activity where  userid=" . $row['userid']));
                    $usergoingactivity = mysqli_num_rows(mysqli_query($con, "SELECT id FROM activity_request where  activity_requestid=" . $row['id'] . " and status='Accept'"));

                    ?>
                    <!-- Card Start -->
                    <div class="col-lg-12">
                        <a href="activity_details.php?id=<?php echo $row['id'] ?>">
                            <div class="card">
                                <div class="card-body">
                                    <div class="bootstrap-media">
                                        <div class="media">
                                            <img class="align-self-start mr-3 circle-40" src="images/avatar/1.jpg"
                                                 alt="">
                                            <div class="media-body">
                                                <h5 class="mt-0">  <?php echo $user_row['name'] ?>

                                                    <span><i class="mdi mdi-share mdi-24px float-right"></i></span>
                                                </h5>
                                                <p class="p-style text-dark" style="margin-top:-5px; "><span
                                                            style="color:#FFDF00;"><i
                                                                class="mdi mdi-trophy-variant mdi-18px mr-2"></i></span>
                                                    <?php echo $useractivity_done ?> activity Done</p>

                                                <p class="p-style text-dark"
                                                   style="margin-top:-12px;"><?php echo $user_row['gender'] ?>, Mumbai
                                                    <span class="float-right">
                                                        English
                                                        <br>0.00
                                                        km away
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                        <hr style="margin-top:5px;">
                                        <h5 class="text-primary" style="margin-top:-8px;">
                                            <?php echo $row['type'] ?>
                                            <span class="
                                            float-right"> <?php echo $row['date'] ?></span>
                                        </h5>
                                        <span class="icon-text text-dark mr-3"><i
                                                    class="mdi mdi-timer mdi-18px mr-1"></i><?php echo $row['stime'] ?>
                                        </span>
                                        <span class="icon-text text-dark mr-3"><i
                                                    class="mdi mdi-human-male-female mdi-18px mr-1"></i><?php echo $usergoingactivity . " / " . $row['nopeople'] ?>

                                        </span>
                                        <span class="icon-text text-dark mr-3">
                                            <i class="mdi mdi-map-marker mdi-18px mr-1"></i>
                                            <?php echo $row['location'] ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Card End  -->
                    <?php
                } ?>

            </div>
        </div>
    </section>


    <?php include('include/bottom_bar.php'); ?>
    <!-- Main Body-->
</section><!-- PARENT SECTION -->


<?php include('include/footer.php'); ?>


</body>