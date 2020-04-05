<!DOCTYPE html>
<html>

<head>
    <?php include('include/head.php');?>

</head>

<body>
    <section class="parent-section bg-white">
        <section class="section2 fixed-section bg-primary">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-3 custom_icon1">
                        <a href="myactivity.php">
                            <i class="mdi mdi-keyboard-backspace mdi-24px text-white"></i>
                        </a>
                    </div>

                    <div class="col-6">
                        <h2 class="text-white text-center"><span class="logo">Chalo Beach</span></h2>
                    </div>
                    <div class="col-3 ">

                        <div class="bootstrap-modal">
                            <!-- Button trigger modal -->
                            <span class="float-right mr-2" style="text-decoration:none;" data-toggle="modal"
                                data-target="#edit_chat"><i class="mdi mdi-dots-horizontal mdi-24px"></i></span>
                        </div>
                    </div>
                </div>
        </section>
        <br><br> <br><br>

        <!-- Main Body-->
        <section class="section1">
            <div class="container-fluid bg-white">
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
                                        <div class="position-relative mr-2">
                                            <img class="align-self-start circle-40" style="margin-top:-50px;"
                                                src="images/avatar/1.jpg" alt="">
                                            <p class="text-center user_text">Abdul</p>

                                        </div>
                                        <div class="position-relative mr-2">
                                            <img class="align-self-start circle-40" style="margin-top:-50px;"
                                                src="images/avatar/1.jpg" alt="">
                                            <p class="text-center user_text">Ali</p>
                                        </div>
                                    </div>
                                    <hr style="margin-top:-9px">

                                    <div class="row">
                                        <span class="icon-text text-dark col-4 d-flex"><i
                                                class="mdi mdi-timer mdi-18px mr-1"></i>Start Time
                                            10:30
                                            PM
                                        </span>
                                        <span class="icon-text text-dark col-4 d-flex"><i
                                                class="mdi mdi-timer mdi-18px mr-1"></i>End
                                            Time 10:30
                                            PM
                                        </span>
                                        <span class="icon-text text-dark col-4 d-flex"><i
                                                class="mdi mdi-calendar mdi-18px mr-1"></i>Date 16 Mar
                                        </span>
                                    </div>

                                    <div class="icon-text text-dark mt-2"><i
                                            class="mdi mdi-human-male-female mdi-18px mr-1"></i>1/6
                                        PM peope have confirmed
                                    </div>

                                    <div class="row mt-2">

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

        <br><br> <br><br><br><br>
        <section class="section2 fixed-section1 bg-white">
            <div class="container">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-1">
                            <i class="mdi mdi-plus mdi-24px text-primary"></i>
                        </div>
                        <div class="col-9">
                            <div class="form-group">

                                <input type="text" name="user_mail" class="form-control" placeholder="Type Message"
                                    value="">
                            </div>
                        </div>
                        <div class="col-2">
                            <button type="submit" class="btn btn-primary btn-sm mt-2" name="chat"> send</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>

        <!-- Modal -->
        <div class="modal fade" id="edit_chat">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">

                    <div class="modal-body text-center">
                        <p><a href="edit_activity.php" class="btn-link" style="text-decoration:none;">Edit Activity</a>
                        </p>
                        <p>Share</p>
                        <p>Mute Chat</p>
                        <p>Cancel Activity</p>
                        <p><a href="remove_users.php" class="btn-link" style="text-decoration:none;">Remove User</a></p>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>



        <!-- Main Body-->
    </section><!-- PARENT SECTION -->


    <?php include('include/footer.php');?>



</body>