<!DOCTYPE html>
<html>

<head>
    <?php include('include/head.php');
    $res = mysqli_query($con, "SELECT * FROM activity where id=" . $_GET['id']);
    $activity_row = mysqli_fetch_assoc($res);
    $user_row = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM users where  id=" . $activity_row['userid']));
    $useractivity_done = mysqli_num_rows(mysqli_query($con, "SELECT type FROM activity where  userid=" . $activity_row['userid']));

    $checkjoin = mysqli_num_rows(mysqli_query($con, "SELECT id FROM activity_request where  activity_requestid=" . $activity_row['id'] . " and userid=" . $_SESSION['id']));

    ?>


</head>

<body>
<section class="parent-section">
    <section class="section2 fixed-section bg-primary">
        <div class="container ">
            <div class="row align-items-center">
                <div class="col-3 custom_icon1">
                    <a href="all_activity.php">
                        <i class="mdi mdi-keyboard-backspace mdi-24px text-white"></i>
                    </a>
                </div>

                <div class="col-6">
                    <h2 class="text-white text-center"><span class="logo">Activity Details</span></h2>
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
    <section class="section1">
        <div class="container-fluid">
            <div class="row">
                <!-- Card Start -->
                <div class="col-lg-12 mt-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="bootstrap-media">
                                <div class="media">
                                    <img class="align-self-start mr-3 circle-40" src="images/avatar/1.jpg" alt="">
                                    <div class="media-body">
                                        <h5 class="mt-0">
                                            <?php echo $user_row['name'] ?>

                                            <span class="float-right text-primary">
                                                <?php echo $activity_row['date'] ?>

                                            </span>
                                        </h5>
                                        <p class="p-style" style="margin-top:-5px;"><span style=" color:#FFDF00;"><i
                                                        class="mdi mdi-trophy-variant mdi-18px mr-2"></i></span>
                                            <?php echo $useractivity_done ?> activity Done</p>

                                        <p class="p-style" style="margin-top:-12px;">
                                            <?php echo $user_row['gender'] ?> <span
                                                    class=" float-right">
                                                    English <br>0.00
                                                    km away
                                                </span>
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <h5 class="text-primary">
                                    <?php echo $activity_row['type'] ?>
                                    <span class="icon-text text-primary float-right">
                                            Beginner
                                            <i class="mdi mdi-chart-areaspline mdi-18px mr-1"></i>
                                        </span>
                                </h5>
                                <span class="">
                                        <span class="icon-text text-dark"><i
                                                    class="mdi mdi-timer mdi-18px mr-1"></i>Start Time <?php echo $activity_row['stime'] ?>
                                        </span>
                                        <span class="icon-text text-dark float-right"><i
                                                    class="mdi mdi-timer mdi-18px mr-1"></i>End Time <?php echo $activity_row['etime'] ?>
                                        </span>
                                    </span>
                                <br>
                                <span class="icon-text text-dark mt-4"><i
                                            class="mdi mdi-human-male-female mdi-18px mr-1"></i>1/<?php echo $activity_row['nopeople'] ?>
                                        PM peope have confirmed
                                    </span>
                                <br>
                                <div class="row">

                                    <div class="col-8">

                                            <span class="d-flex icon-text text-dark mb-2">
                                                <i class="mdi mdi-map-marker mdi-18px mr-1 align-center"></i><?php echo $activity_row['location'] ?>
                                            </span>
                                    </div>
                                    <div class="col-4">

                                            <span class="icon-text text-primary">View Map

                                            </span>
                                    </div>
                                </div>
                                <hr>


                                <div class="col-12 text-center">
                                    <!-- Button trigger modal -->
                                    <form method="post" action="addactivityreqtodb.php">

                                        <input name="activityid" value="<?php echo $activity_row['id'] ?>" hidden/>
                                        <input name="userid" value="<?php echo $activity_row['userid'] ?>" hidden/>
                                        <input name="username" value="<?php echo $user_row['name'] ?>" hidden/>

                                        <?php
                                        if ($checkjoin == 0) {
                                            ?>

                                            <button type="submit" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#joinactivity">Join Activity
                                            </button>
                                            <?php
                                        } else {
                                            ?>
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                            >Request Send to Join Activity
                                            </button>
                                            <?php
                                        } ?>
                                    </form>

                                    <!-- Modal -->
                                    <div class="modal fade" id="joinactivity">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Message</h5>
                                                    <button type="button" class="close"
                                                            data-dismiss="modal"><span>&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Your request to join User Name's activity has been sent! Once
                                                        they accept, we'll open a chat for your new group.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="index.php">
                                                        <button type="button"
                                                                class="btn btn-secondary">Close
                                                        </button>
                                                    </a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="bootstrap-modal">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-link link-style"
                                                style="text-decoration:none" data-toggle="modal"
                                                data-target="#exampleModalCenter">Propose a new Time
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModalCenter">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Propose New Time</h5>
                                                        <button type="button" class="close"
                                                                data-dismiss="modal"><span>&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <label class="m-t-20">Enter New Time</label>
                                                        <div class="input-group">
                                                            <input type="time" class="form-control" value="">
                                                            <span class="input-group-append"><span
                                                                        class="input-group-text"><i
                                                                            class="fa fa-clock-o"></i></span></span>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close
                                                        </button>
                                                        <button type="button" class="btn btn-primary">Submit
                                                            Time
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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


    <?php include('include/bottom_bar.php'); ?>
    <!-- Main Body-->
</section><!-- PARENT SECTION -->


<?php include('include/footer.php'); ?>


</body>