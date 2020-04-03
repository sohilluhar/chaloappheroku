 <!DOCTYPE html>
 <html>

 <head>
     <?php include('include/head.php');?>
     <style>
     /* .bg-opacity 
         background: url"images/big/bg.jpeg" no-repeat center center;
         background-size: cover;
         height: 100vh;
     
     .bg-opacity::before  */

     .bg-opacity {

         display: block;
         position: relative;
         background: #000;
         height: 100vh;
     }

     .bg-opacity::before {
         content: "";
         background: url("images/big/bg.jpeg") no-repeat center center;
         opacity: 0.5;
         top: 0;
         left: 0;
         bottom: 0;
         right: 0;
         background-size: cover;
         position: absolute;

     }
     </style>

 </head>

 <body>
     <section class="parent-section bg-opacity">

         <div class="container">
             <div class="row">
                 <div class="col-12 text-center" style="margin-top:45%;">
                     <div class="mb-5">
                         <img class="mr-3" src="images/avatar/11.png" width="80" height="80" alt="">
                     </div>
                     <button type="button" class="btn mb-1 btn-primary"> <i class="mdi mdi-facebook mr-3"></i>Sign up
                         with
                         Facebook
                     </button>
                     <p class="text-white">we don't post anything on Facebook</p>

                     <button type="button" class="btn mb-1 btn-outline-danger"> <i class="mdi mdi-google mr-3"></i>Sign
                         up
                         using
                         Email
                     </button>
                     <div class="text-white px-5" style="margin-top:35%;">
                         <p class="">Already have account? <a href="login.php" class="text-primary">login</a></p>
                         <p class="">By continuting, you agree to our <a href="terms.php" class="text-primary">Terms and
                                 Conditions</a>
                             and
                             <a href="privacy.php" class="text-primary">Privacy
                                 Policy</a></p>
                     </div>
                 </div>
             </div>
         </div>




     </section><!-- PARENT SECTION -->


     <?php include('include/footer.php');?>



 </body>