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
                         <a href="broadcast_act_click.php">
                             <i class="mdi mdi-keyboard-backspace mdi-24px text-white"></i>
                         </a>
                     </div>

                     <div class="col-6">
                         <h2 class="text-white text-center"><span class="logo">Report User</span></h2>
                     </div>
                     <div class="col-3 ">


                     </div>
                 </div>
         </section>
         <br><br> <br><br>

         <!-- Main Body-->
         <section class="section1">
             <div class="container-fluid">
                 <div class="row">
                     <!-- Card Start -->
                     <div class="col-lg-12 mt-3">
                         <div class="card">
                             <div class="card-body">
                                 <form action="">

                                     <p>Here at Chalo, we'd like for you to have the best experience. if you have not
                                         had a good experience with one of our users, please let us know.</p>

                                     <div class="form-group">
                                         <textarea class="form-control h-150px" rows="6" name="report_user"
                                             id="report_user"
                                             placeholder="Please go into more detail about the incident you are reporting about (optional)"></textarea>
                                     </div>
                                     <div class="text-center">
                                         <button class="btn btn-primary btn-block">Report User</button>
                                     </div>
                                 </form>
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