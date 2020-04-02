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
                                            <h5 class="mt-0">Abdul Quadir Ansari

                                                <span class="float-right text-primary">Wed 19,
                                                    Feb</span>
                                            </h5>
                                            <p class="p-style" style="margin-top:-5px;"><span style=" color:#FFDF00;"><i
                                                        class="mdi mdi-trophy-variant mdi-18px mr-2"></i></span>
                                                1 activity Done</p>

                                            <p class="p-style" style="margin-top:-12px;">Male <span
                                                    class=" float-right">
                                                    English <br>0.00
                                                    km away
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                    <hr>
                                    <h5 class="text-primary">LetsGo Walking
                                        <span class="icon-text text-primary float-right">
                                            Beginner
                                            <i class="mdi mdi-chart-areaspline mdi-18px mr-1"></i>
                                        </span>
                                    </h5>
                                    <span class="">
                                        <span class="icon-text text-dark"><i
                                                class="mdi mdi-timer mdi-18px mr-1"></i>Start Time 10:30
                                            PM
                                        </span>
                                        <span class="icon-text text-dark float-right"><i
                                                class="mdi mdi-timer mdi-18px mr-1"></i>End Time 10:30
                                            PM
                                        </span>
                                    </span>
                                    <br>
                                    <span class="icon-text text-dark mt-4"><i
                                            class="mdi mdi-human-male-female mdi-18px mr-1"></i>1/6
                                        PM peope have confirmed
                                    </span>
                                    <br>
                                    <div class="row">

                                        <div class="col-8">

                                            <span class="d-flex icon-text text-dark mb-2">
                                                <i class="mdi mdi-map-marker mdi-18px mr-1 align-center"></i>2-95,
                                                Jogeshwari -
                                                Vikhroli
                                                Link Rd. Milind Nagar, Krishna Nagar
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
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#joinactivity">Join Activity</button>
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
                                                        <a href="index.php"><button type="button"
                                                                class="btn btn-secondary">Close</button></a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>

                                        <div class="bootstrap-modal">
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-link link-style"
                                                style="text-decoration:none" data-toggle="modal"
                                                data-target="#exampleModalCenter">Propose a new Time</button>
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
                                                                data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Submit
                                                                Time</button>
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


        <?php include('include/bottom_bar.php');?>
        <!-- Main Body-->
    </section><!-- PARENT SECTION -->


    <?php include('include/footer.php');?>



</body>