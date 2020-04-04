<!DOCTYPE html>
<html>

<head>
    <?php include('include/head.php'); ?>

</head>

<body>
<section class="parent-section">
    <section class="section2 fixed-section bg-primary">
        <div class="container ">
            <div class="row align-items-center">
                <div class="col-3 custom_icon1">
                    <a href="index.php">
                        <i class="mdi mdi-keyboard-backspace mdi-24px text-white"></i>
                    </a>
                </div>

                <div class="col-6">
                    <h2 class="text-white text-center"><span class="logo">Tell us your Details</span></h2>
                </div>
                <div class="col-3 ">


                </div>
            </div>
    </section>
    <br><br> <br>
    <!-- Main Body-->
    <section class="section1">
        <form action="addusertodb.php" method="post" class="login-input">
            <div class="container-fluid">

                <div class="row">

                    <!-- Card Start -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <input type="text" name="firstname" class="form-control"
                                           placeholder="First Name" value="" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="lastname" class="form-control" placeholder="Last Name"
                                           value="" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="user_mail" class="form-control"
                                           placeholder="Email Address" value="" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="pass1" class="form-control" placeholder="Password"
                                           value="" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="pass2" class="form-control"
                                           placeholder="Confirm Password" value="" required>
                                </div>
                                <div class="radio-group">
                                    <label for="">Gender</label>
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="card card-profile text-center radio" data-value="Male">
                                                    <span class="mb-1 text-primary"><i
                                                                class="mdi mdi-human-male"></i></span>
                                                <p class="text-dark p-style">Male</p>
                                            </div>
                                        </div>

                                        <div class="col-4">
                                            <div class="card card-profile text-center radio" data-value="Female">
                                                    <span class="mb-1 text-primary"><i
                                                                class="mdi mdi-human-female"></i></span>
                                                <p class="text-dark p-style">Female</p>
                                            </div>
                                        </div>

                                        <div class="col-4">
                                            <div class="card card-profile text-center radio"
                                                 data-value="Rather not say">
                                                    <span class="mb-1 text-primary"><i
                                                                class="mdi mdi-human-male-female"></i></span>
                                                <p class="text-dark p-style">Rather not say</p>
                                            </div>
                                        </div>
                                        <input type="hidden" id="radio-value" name="radio-value" value=""
                                               required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="date" name="dob" class="form-control" placeholder="" value=""
                                           required>
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="hideage">
                                        <label class="form-check-label">Hide Age</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-9">
                                            <input type="tel" name="contact" class="form-control"
                                                   placeholder="Contact Number" value="" required>
                                        </div>
                                        <div class="col-3">
                                            <button type="button" class="btn btn-primary btn-sm"
                                                    data-toggle="modal" data-target="#otp">Verify
                                            </button>
                                        </div>
                                    </div>


                                </div>


                                <button type="submit" name="register" class="btn btn-primary btn-block"
                                        data-toggle="modal" data-target="#disclaimer">Register
                                </button>

                                <p class="mt-2">By continuting, you agree to our <a href="terms.php"
                                                                                    class="text-primary">Terms and
                                        Conditions</a>
                                    and
                                    <a href="privacy.php" class="text-primary">Privacy
                                        Policy</a></p>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </form>

    </section>

    <form action="" class="login-input">
        <!-- Modal -->
        <div class="modal fade" id="otp">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">One Time Password</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        A one-time code has been sent to your phone. Please input this code below
                        <div class="form-group">
                            <input type="text" name="otp" class="form-control" placeholder="Enter Otp" value=""
                                   required>
                        </div>
                        <button class="btn btn-primary btn-sm">Resend Otp ?</button>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary  btn-sm" data-dismiss="modal">Close</button>
                        <button type="submit" name="verify_user" class="btn btn-primary btn-sm">Verify</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <form action="">
        <!-- Modal -->
        <div class="modal fade" id="disclaimer">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Disclaimer</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        terms and condition .........
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Disagree</button>
                        <button type="button" name="remove_user" class="btn btn-success btn-sm">Agree</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- Main Body-->
</section><!-- PARENT SECTION -->


<?php include('include/footer.php'); ?>


</body>