<!-- <!DOCTYPE html>-->
<!-- <html>-->
<!---->
<!-- <head>-->
<!--     --><?php //include('include/head.php');?>
<!--     <style>-->
<!--     /* .bg-opacity -->
<!--         background: url"images/big/bg.jpeg" no-repeat center center;-->
<!--         background-size: cover;-->
<!--         height: 100vh;-->
<!--     -->
<!--     .bg-opacity::before  */-->
<!---->
<!--     .bg-opacity {-->
<!---->
<!--         display: block;-->
<!--         position: relative;-->
<!--         background: #000;-->
<!--         height: 100vh;-->
<!--     }-->
<!---->
<!--     .bg-opacity::before {-->
<!--         content: "";-->
<!--         background: url("images/big/bg.jpeg") no-repeat center center;-->
<!--         opacity: 0.5;-->
<!--         top: 0;-->
<!--         left: 0;-->
<!--         bottom: 0;-->
<!--         right: 0;-->
<!--         background-size: cover;-->
<!--         position: absolute;-->
<!---->
<!--     }-->
<!--     </style>-->
<!---->
<!-- </head>-->
<!---->
<!-- <body>-->
<!--     <section class="parent-section bg-opacity">-->
<!---->
<!--         <div class="container">-->
<!--             <div class="row">-->
<!--                 <div class="col-12 text-center" style="margin-top:45%;">-->
<!--                     <div class="mb-5">-->
<!--                         <img class="mr-3" src="images/avatar/11.png" width="80" height="80" alt="">-->
<!--                     </div>-->
<!--                     <button type="button" class="btn mb-1 btn-primary"> <i class="mdi mdi-facebook mr-3"></i>Sign up-->
<!--                         with-->
<!--                         Facebook-->
<!--                     </button>-->
<!--                     <p class="text-white">we don't post anything on Facebook</p>-->
<!---->
<!--                     <button type="button" class="btn mb-1 btn-outline-danger"> <i class="mdi mdi-google mr-3"></i>Sign-->
<!--                         up-->
<!--                         using-->
<!--                         Email-->
<!--                     </button>-->
<!--                     <div class="text-white px-5" style="margin-top:35%;">-->
<!--                         <p class="">Already have account? <a href="login.php" class="text-primary">login</a></p>-->
<!--                         <p class="">By continuting, you agree to our <a href="terms.php" class="text-primary">Terms and-->
<!--                                 Conditions</a>-->
<!--                             and-->
<!--                             <a href="privacy.php" class="text-primary">Privacy-->
<!--                                 Policy</a></p>-->
<!--                     </div>-->
<!--                 </div>-->
<!--             </div>-->
<!--         </div>-->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!--     --><?php //include('include/footer.php');?>
<!---->
<!---->
<!---->
<!-- </body>-->

<!DOCTYPE html>
<html>

<head>
    <?php include('include/head.php'); ?>
    <?php
    if (isset($_SESSION["login"])) {

        echo '
    <script>
    window.location.href="homepage.php";
    </script>
    ';
    }
    ?>

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
                    <h2 class="text-white text-center"><span class="logo">Login</span></h2>
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
                                <div class="mb-4 text-center">
                                    <button type="button" class="btn mb-1 btn-primary"><i
                                                class="mdi mdi-facebook mr-3"></i>Sign up
                                        with
                                        Facebook
                                    </button>
                                </div>
                                <h4 class="text-center text-primary"><i
                                            class="mdi mdi-window-minimize mr-3"></i>or<i
                                            class="mdi mdi-window-minimize ml-3"></i>
                                </h4>


                                <div class="form-group">

                                    <input type="email" name="user_mail" class="form-control input-default"
                                           placeholder="Email Address" value="">
                                </div>

                                <div class="form-group">

                                    <input type="password" name="pass" class="form-control input-default"
                                           placeholder="Enter Password" value="">
                                </div>

                                <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
                                <p class="text-center
                                     mt-3"><a href="forgot.php" class="text-primary">Forgot Password
                                    </a>
                                </p>

                                <p class="text-dark text-center">Don't have an account ? <a href="signup.php"
                                                                                            class="text-primary">Sign
                                        up</a>
                                </p>
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