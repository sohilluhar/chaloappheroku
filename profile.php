<!DOCTYPE html>
<html>

<head>
    <?php include('include/head.php'); ?>
    <?php

    $user_row = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM users where  id=" . $_SESSION['id']));

    $useractivity_done = mysqli_num_rows(mysqli_query($con, "SELECT type FROM activity where  userid=" . $_SESSION['id']));

    ?>
</head>

<body>
<section class="parent-section">
    <section class="section2 fixed-section bg-primary">
        <div class="container ">
            <div class="row align-items-center">
                <div class="col-3 custom_icon1">
                    <a href="homepage.php">
                        <i class="mdi mdi-keyboard-backspace mdi-24px text-white"></i>
                    </a>
                </div>

                <div class="col-6">
                    <h2 class="text-white text-center"><span class="logo">Profile</span></h2>
                </div>
                <div class="col-3 ">


                </div>
            </div>
    </section>
    <br><br> <br>

    <!-- Main Body-->
    <section class="section1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <h6>2 New Follow Request
                                <a href="follow_request.php">
                                    <button class="btn btn-primary btn-xs float-right">Follow Request</button>
                                </a>
                            </h6>


                        </div>
                    </div>
                </div>

                <!-- Card Start -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center mb-4">
                                <img class="mr-3" src="<?php echo $user_row['profileimage'] ?>" width=" 80" height="80"
                                     alt="">
                                <div class="media-body">

                                    <a href="edit_profile.php">
                                        <button
                                                class="btn btn-primary btn-xs px-3 float-right">Edit
                                        </button>
                                    </a>
                                    <h5 class="mb-0"><?php echo $user_row['name'] ?></h5>

                                    <p class="p-style text-dark">
                                             <span style="color:#FFDF00;">
                                                 <i class="mdi mdi-trophy-variant mdi-18px mr-2"></i></span>
                                        <?php echo $useractivity_done ?> activity Done</p>


                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <a href="following.php">
                                        <div class="card card-profile text-center">
                                            <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                            <h3 class="mb-0">263</h3>
                                            <p class="text-muted px-4">Following</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="followers.php">
                                        <div class="card card-profile text-center">
                                            <span class="mb-1 text-warning"><i class="icon-user-follow"></i></span>
                                            <h3 class="mb-0">263</h3>
                                            <p class="text-muted">Followers</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <hr>
                            <h6>About Me</h6>
                            <p class="text-muted"><?php echo $user_row['about'] ?></p>

                            <div class="row">
                                <div class="col-6">
                                    <strong class="text-dark p-style">Job Title</strong>
                                </div>
                                <div class="col-6">
                                    <span class="p-style"><?php echo $user_row['jobtitle'] ?></span>
                                </div>

                                <div class="col-6">
                                    <strong class="text-dark p-style">Languages</strong>
                                </div>
                                <div class="col-6">
                                    <span class="p-style"><?php echo $user_row['lang'] ?></span>
                                </div>

                                <div class="col-6">
                                    <strong class="text-dark p-style">Gender</strong>
                                </div>
                                <div class="col-6">
                                    <span class="p-style"><?php echo $user_row['gender'] ?></span>
                                </div>

                                <div class="col-6">
                                    <strong class="text-dark p-style">Contact</strong>
                                </div>
                                <div class="col-6">
                                    <span class="p-style">+91 <?php echo $user_row['contact'] ?></span>
                                </div>

                                <div class="col-6">
                                    <strong class="text-dark p-style">Email</strong>
                                </div>
                                <div class="col-6">
                                    <span class="p-style"><?php echo $user_row['mail'] ?></span>
                                </div>

                                <div class="col-6">
                                    <strong class="text-dark p-style">Country</strong>
                                </div>
                                <div class="col-6">
                                    <span class="p-style"><?php echo $user_row['mail'] ?></span>
                                </div>
                                <div class="col-6">
                                    <strong class="text-dark p-style">State</strong>
                                </div>
                                <div class="col-6">
                                    <span class="p-style"><?php echo $user_row['state'] ?></span>
                                </div>

                                <div class="col-6">
                                    <strong class="text-dark p-style">City</strong>
                                </div>
                                <div class="col-6">
                                    <span class="p-style"><?php echo $user_row['city'] ?></span>
                                </div>
                            </div>
                            <hr>
                            <h6>Social</h6>
                            <div class="row">
                                <div class="col-6">
                                    <strong class="text-dark p-style">Facebook</strong>
                                </div>
                                <div class="col-6">
                                    <span class="p-style"><?php echo $user_row['facebook'] ?></span>
                                </div>
                                <div class="col-6">
                                    <strong class="text-dark p-style">Linkedin</strong>
                                </div>
                                <div class="col-6">
                                    <span class="p-style"><?php echo $user_row['linkedin'] ?></span>
                                </div>

                                <div class="col-6">
                                    <strong class="text-dark p-style">Instagram</strong>
                                </div>
                                <div class="col-6">
                                    <span class="p-style"><?php echo $user_row['instagram'] ?></span>
                                </div>

                                <div class="col-6">
                                    <strong class="text-dark p-style">Webiste/blog</strong>
                                </div>
                                <div class="col-6">
                                    <span class="p-style"><?php echo $user_row['website'] ?></span>
                                </div>
                            </div>
                            <hr>
                            <h6>Activity Preference</h6>
                            <p class="p-style text-primary">Your Activities</p>
                            <div class="row">
                                <div class="col-4">
                                    <div class="card card-profile text-center">
                                        <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                        <p class="text-dark p-style">Hiking</p>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="card card-profile text-center">
                                        <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                        <p class="text-dark p-style">Paddleboarding</p>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="card card-profile text-center">
                                        <span class="mb-1 text-primary"><i class="mdi mdi-walk"></i></span>
                                        <p class="text-dark p-style">Walking</p>
                                    </div>
                                </div>
                            </div>

                            <p class="p-style text-primary">Invite Recieve Radius</p>
                            <div class="form-group">

                                <select class="form-control" id="radius_km" name="radius_km">
                                    <option value="">Less than 5 kms</option>
                                    <option value="">Less than 10 kms</option>
                                    <option value="">Less than 15 kms</option>
                                    <option value="">Less than 20 kms</option>
                                    <option value="">Less than 50 kms</option>
                                    <option value="">Less than 100 kms</option>
                                </select>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>


    </section>


    <!-- Main Body-->
</section><!-- PARENT SECTION -->


<?php include('include/footer.php'); ?>


</body>