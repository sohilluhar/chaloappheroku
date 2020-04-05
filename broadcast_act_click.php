<!DOCTYPE html>
<html>

<head>
    <?php include('include/head.php');
    $current_activity_id = $_GET['id'];

    $row = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM activity where id=" . $_GET['id']));
    $usergoingactivity = mysqli_num_rows(mysqli_query($con, "SELECT id FROM activity_request where  activity_requestid=" . $_GET['id'] . " and status='Accept'"));

    ?>

</head>

<body>
<section class="parent-section">
    <section class="section2 fixed-section bg-primary">
        <div class="container ">
            <div class="row align-items-center">
                <div class="col-3 custom_icon1">
                    <a href="broadcast.php">
                        <i class="mdi mdi-keyboard-backspace mdi-24px text-white"></i>
                    </a>
                </div>

                <div class="col-6">
                    <h2 class="text-white text-center"><span class="logo"><?php echo $row['type'] ?></span></h2>
                </div>
                <div class="col-3 ">

                    <div class="bootstrap-modal">
                        <!-- Button trigger modal -->
                        <span class="float-right mr-2" style="text-decoration:none;" data-toggle="modal"
                              data-target="#edit_broadcast1"><i class="mdi mdi-dots-horizontal mdi-24px"></i></span>
                    </div>
                </div>
            </div>
    </section>
    <br><br> <br><br>

    <!-- Main Body-->
    <section class="section1">
        <div class="container-fluid">
            <div class="row">
                <!-- Card Start -->
                <div class="col-lg-12 mt-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="bootstrap-media">
                                <div class="media">
                                    <div class="position-relative mr-2">
                                        <img class="align-self-start circle-40" style="margin-top:-50px;"
                                             src="images/avatar/1.jpg" alt="">
                                        <i
                                                class="mdi mdi-star-circle text-success position-absolute icon-style"></i>
                                        <p class="text-center user_text">You</p>
                                    </div>

                                    <?php
                                    $activity_requestres = mysqli_query($con, "SELECT * FROM activity_request where activity_requestid=" . $row['id'] . " and status='Accept' order by id desc ");

                                    while ($activity_requestrow = mysqli_fetch_assoc($activity_requestres)) {
                                        $user_row = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM users where  id=" . $activity_requestrow['userid']));
                                        $useractivity_done = mysqli_num_rows(mysqli_query($con, "SELECT type FROM activity where  userid=" . $activity_requestrow['userid']));
                                        ?>
                                        <div class="position-relative mr-2">
                                            <img class="align-self-start circle-40" style="margin-top:-50px;"
                                                 src="images/avatar/1.jpg" alt="">
                                            <p class="text-center user_text"><?php $arr = explode(" ", $user_row['name']);
                                                echo $arr[1];
                                                ?>
                                            </p>

                                        </div>    <?php

                                    } ?>
                                </div>
                                <hr style="margin-top:-9px">

                                <div class="row">
                                        <span class="icon-text text-dark col-4 d-flex"><i
                                                    class="mdi mdi-timer mdi-18px mr-1"></i><?php echo $row['stime'] ?>
                                        </span>
                                    <span class="icon-text text-dark col-4 d-flex"><i
                                                class="mdi mdi-timer mdi-18px mr-1"></i><?php echo $row['etime'] ?>
                                        </span>
                                    <span class="icon-text text-dark col-4 d-flex"><i
                                                class="mdi mdi-calendar mdi-18px mr-1"></i><?php echo $row['date'] ?>
                                        </span>
                                </div>

                                <div class="icon-text text-dark mt-2"><i
                                            class="mdi mdi-human-male-female mdi-18px mr-1"></i><?php echo $usergoingactivity . "/" . $row['nopeople'] ?>
                                </div>

                                <div class="row mt-2">

                                    <div class="col-8">

                                            <span class="d-flex icon-text text-dark mb-2">
                                                <i class="mdi mdi-map-marker mdi-18px mr-1 align-center"></i><?php echo $row['location'] ?>
                                            </span>
                                    </div>
                                    <div class="col-4">

                                            <span class="icon-text text-primary">View Map

                                            </span>
                                    </div>
                                </div>
                                <hr>


                                <div class="col-12 text-center">
                                    <p class="p-style">chat away, organize and enjoy..</p>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <!-- Card End  -->

        </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="edit_broadcast1">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-body text-center">
                    <p><a href="edit_activity.php?id=<?php echo $_GET['id'] ?>" class="btn-link"
                          style="text-decoration:none;">Edit Activity</a>
                    </p>
                    <!--                    TODO:: Replace text-->
                    <p><a class="btn-link"
                          href="whatsapp://send?text=Hey, I am Inviting to join my activity on Chalo App Download Chalo App from http://sohilluhar.co/chaloapp/"
                          data-action="share/whatsapp/share"
                        >Share</a></p>
                    <p>Mute Chat</p>
                    <p>Cancel Activity</p>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>


    <?php include('include/bottom_bar.php'); ?>
    <!-- Main Body-->
</section><!-- PARENT SECTION -->


<?php include('include/footer.php'); ?>


</body>