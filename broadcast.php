<!DOCTYPE html>
<html>

<head>
    <?php include('include/head.php'); ?>

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
                    <h2 class="text-white text-center"><span class="logo">Broadcast Activity</span></h2>
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
    <br><br><br>


    <!-- Main Body-->
    <section class="section1 mt-3">
        <div class="container-fluid">
            <div class="row">


                <div class="col-lg-12">
                    <div class="card">

                        <div class="col-lg-12 text-center mb-3">
                            <div class="text-center">
                                        <span class="display-1"><i
                                                    class="mdi mdi-access-point gradient-3-text"></i></span>
                                <a href="add_activity.php"
                                   class="btn gradient-1 btn-lg border-0 btn-rounded px-5"><span
                                            class="btn-icon-right"><i class="fa fa-plus mr-2"></i></span>Broadcast
                                    new
                                    activity
                                </a>
                                <p class="mt-3">Broadcasted Activities</p>
                            </div>
                        </div>

                    </div>
                    <!-- Card End  -->
                </div>

                <?php

                //                SELECT * FROM `activity` WHERE 1
                $res = mysqli_query($con, "SELECT * FROM activity where userid=" . $_SESSION['id']);

                while ($activityrow = mysqli_fetch_assoc($res)) {
                    $usergoingactivity = mysqli_num_rows(mysqli_query($con, "SELECT id FROM activity_request where  activity_requestid=" . $activityrow['id'] . " and status='Accept'"));

                    ?>

                    <!-- Card Start -->

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="bootstrap-media">
                                    <a href="broadcast_act_click.php">
                                        <h5 class="text-primary"><?php echo $activityrow['type'] ?><span class="
                                            float-right"> <?php echo $activityrow['date'] ?> <i
                                                        class="mdi mdi-delete mdi-18px ml-2 text-danger"></i></span>
                                        </h5>
                                    </a>
                                    <span class="icon-text text-dark mr-3"><i
                                                class="mdi mdi-timer mdi-18px mr-1"></i><?php echo $activityrow['stime'] ?>
                                    </span>
                                    <span class="icon-text text-dark mr-3"><i
                                                class="mdi mdi-human-male-female mdi-18px mr-1"></i><?php echo $usergoingactivity . "/" . $activityrow['nopeople'] ?>
                                    </span>
                                    <span class="icon-text text-dark mr-3"><i
                                                class="mdi mdi-map-marker mdi-18px mr-1"></i><?php echo $activityrow['location'] ?>

                                    </span>
                                    <hr>
                                    <p>Responded </p>

                                    <?php
                                    $activity_requestres = mysqli_query($con, "SELECT * FROM activity_request where activity_requestid=" . $activityrow['id'] . " and status='Pending' order by id desc ");

                                    while ($activity_requestrow = mysqli_fetch_assoc($activity_requestres)) {
                                        $user_row = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM users where  id=" . $activity_requestrow['userid']));
                                        $useractivity_done = mysqli_num_rows(mysqli_query($con, "SELECT type FROM activity where  userid=" . $activity_requestrow['userid']));


                                        ?>

                                        <div class="media">

                                            <img class="align-self-start mr-3 circle-40" src="images/avatar/1.jpg"
                                                 alt="">
                                            <div class="media-body">
                                                <h5 class="mt-0"><?php echo $user_row['name'] ?>

                                                    <span class="text-primary">wants to join </span>
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
                                        <hr>
                                        <div class="text-center">

                                            <form method="post" action="updateactivityreq.php">

                                                <input name="activityid" type="hidden"
                                                       value="<?php echo $activity_requestrow['id'] ?>">
                                                <button type="submit" name="accept"
                                                        class="btn btn-success btn-xs px-5 text-white mr-3">
                                                    Accept <i
                                                            class="mdi mdi-check ml-1"></i></button>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-outline-danger btn-xs px-5"
                                                        data-toggle="modal" data-target="#decline_req">Decline <i
                                                            class="mdi mdi-close ml-1"></i></button>
                                                <!-- Modal -->
                                                <div class="modal fade" id="decline_req">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Decline</h5>
                                                                <button type="button" class="close"
                                                                        data-dismiss="modal"><span>&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="basic-form">
                                                                    <form>
                                                                        <div class="form-group">
                                                                            <label>Reason</label>
                                                                            <textarea class="form-control h-150px"
                                                                                      name="remark"
                                                                                      rows="6"
                                                                                      id="comment"></textarea>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close
                                                                </button>
                                                                <button type="submit" name="reject"
                                                                        class="btn btn-primary">
                                                                    Send
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <br>
                                        <?php

                                    } ?>


                                </div>
                            </div>
                        </div>

                    </div>
                    <?php
                } ?>

                <!-- Card End  -->
            </div>
        </div>
    </section>


    <?php include('include/bottom_bar.php'); ?>
    <!-- Main Body-->
</section><!-- PARENT SECTION -->


<?php include('include/footer.php'); ?>


</body>