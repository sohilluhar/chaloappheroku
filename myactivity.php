<!DOCTYPE html>
<html>

<head>
    <?php include('include/head.php');?>

</head>

<body>
    <section class="parent-section">
        <section class="section2 fixed-section bg-primary">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-3 custom_icon1">
                        <a href="homepage.php">
                            <i class="mdi mdi-keyboard-backspace mdi-24px text-white"></i>
                        </a>
                    </div>

                    <div class="col-6">
                        <h2 class="text-white text-center"><span class="logo">My Activity</span></h2>
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
        <br><br><br>

        <!-- Main Body-->
        <section class="section1 mt-3">
            <div class="container-fluid">


                <div class="row">
                    <div class="col-md-12">
                        <div class="card">

                            <ul class="nav nav-pills mb-3 d-flex justify-content-center mt-3">
                                <li class="nav-item"><a href="#navpills-1" class="nav-link active" data-toggle="tab"
                                        aria-expanded="false">Current Activities</a>
                                </li>
                                <li class="nav-item"><a href="#navpills-2" class="nav-link" data-toggle="tab"
                                        aria-expanded="false">Completed Activities</a>
                                </li>
                            </ul>

                        </div>

                        <div class="tab-content">
                            <div id="navpills-1" class="tab-pane active">
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="bootstrap-media mt-2">
                                                    <div class="media">
                                                        <img class="align-self-start mr-3 circle-40"
                                                            src="images/avatar/1.jpg" alt="">
                                                        <div class="media-body">
                                                            <h5 class="mt-2">Chalo Walking

                                                                <span class="p-style float-right">Tue, 17
                                                                    Mar</span>
                                                            </h5>

                                                        </div>
                                                    </div>
                                                    <hr style="margin-top:10px;">

                                                    <p class="text-primary mb-0">Request to join pending</p>
                                                    <p class="text-dark">Once they accept, we'll open chat for
                                                        your
                                                        new group
                                                    </p>

                                                </div>

                                            </div>
                                        </div>


                                        <div class="card">
                                            <div class="card-body">
                                                <div class="bootstrap-media mt-2">
                                                    <div class="media">
                                                        <img class="align-self-start mr-3 circle-40"
                                                            src="images/avatar/1.jpg" alt="">
                                                        <div class="media-body">
                                                            <h5 class="mt-2">Chalo Walking

                                                                <span class="p-style float-right">Tue, 17
                                                                    Mar</span>
                                                            </h5>

                                                        </div>
                                                    </div>
                                                    <hr style="margin-top:10px;">

                                                    <p class="text-success mb-0">Sohil Luhar has accepeted your
                                                        proposed time !</p>
                                                    <p class="text-dark">Once they accept, we'll open chat for
                                                        your
                                                        new group</p>

                                                </div>

                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <div class="bootstrap-media mt-2">
                                                    <div class="media">
                                                        <img class="align-self-start mr-3 circle-40"
                                                            src="images/avatar/1.jpg" alt="">
                                                        <div class="media-body">
                                                            <h5 class="mt-2">Chalo Gali Cricket

                                                                <span class="p-style float-right">Tue, 17
                                                                    Mar</span>
                                                            </h5>

                                                        </div>
                                                    </div>
                                                    <hr style="margin-top:10px;">

                                                    <p class="text-danger mb-0">You were removed from this activity
                                                        <button
                                                            class="btn btn-outline-danger btn-xs  float-right">Remove</button>
                                                    </p>
                                                    <p class="text-dark">Click to the remove button to delete this
                                                        activity from your activities list</p>

                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div id="navpills-2" class="tab-pane">
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="bootstrap-media mt-2">
                                                    <div class="media">
                                                        <img class="align-self-start mr-3 circle-40"
                                                            src="images/avatar/1.jpg" alt="">
                                                        <div class="media-body">
                                                            <h5 class="mt-2">Chalo Hiking

                                                                <span class="p-style float-right">Tue, 17
                                                                    Mar</span>
                                                            </h5>

                                                        </div>
                                                    </div>
                                                    <hr style="margin-top:10px;">

                                                    <p class="text-danger mb-0">Request to join pending</p>
                                                    <p class="text-dark">Once they accept, we'll open chat for
                                                        your
                                                        new group</p>

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

        </section>


        <?php include('include/bottom_bar.php');?>
        <!-- Main Body-->
    </section><!-- PARENT SECTION -->


    <?php include('include/footer.php');?>



</body>