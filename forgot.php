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
                    <a href="homepage.php">
                        <i class="mdi mdi-keyboard-backspace mdi-24px text-white"></i>
                    </a>
                </div>

                <div class="col-6">
                    <h2 class="text-white text-center"><span class="logo">Forgot Password</span></h2>
                </div>
                <div class="col-3 ">


                </div>
            </div>
    </section>
    <br><br> <br><br>

    <!-- Main Body-->
    <section class="section1">
        <form action="verifyuser.php" method="post" class="login-input">
            <div class="container-fluid">

                <div class="row">

                    <!-- Card Start -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <p class="text-dark text-center">Please Enter your Register email address. We will
                                    send you instructions to reset
                                    your password.</p>


                                <div class="form-group">

                                    <input type="email" name="user_mail" class="form-control input-default"
                                           placeholder="Email Address" value="">
                                </div>

                                <button type="submit" name="login" class="btn btn-primary btn-block">Send</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </form>

    </section>

    <form action="">
        <!-- Modal -->
        <div class="modal fade" id="unfollow">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        Are you sure you want to unfollow this user ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary  btn-sm" data-dismiss="modal">Close</button>
                        <button type="button" name="remove_user" class="btn btn-primary btn-sm">Remove</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- Main Body-->
</section><!-- PARENT SECTION -->


<?php include('include/footer.php'); ?>


</body>