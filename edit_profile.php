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
                         <h2 class="text-white text-center"><span class="logo">Edit Profile</span></h2>
                     </div>
                     <div class="col-3 ">


                     </div>
                 </div>
         </section>
         <br><br> <br><br>

         <!-- Main Body-->
         <section class="section1">
             <form action="">
                 <div class="container-fluid">

                     <div class="row">

                         <!-- Card Start -->
                         <div class="col-12">
                             <div class="card">
                                 <div class="card-body">
                                     <div class="mb-4 text-center">
                                         <img class="mr-3" src="images/avatar/11.png" width="80" height="80" alt="">
                                         <div class="form-group mt-2">
                                             <label>Upload Profile Image</label>
                                             <input type="file" name="profile_pic" class="file-upload-default">
                                             <div class="input-group col-xs-12">
                                                 <input type="text" class="form-control input-default file-upload-info"
                                                     placeholder="Upload Image" disabled>
                                                 <span class="input-group-append">
                                                     <button class="file-upload-browse btn btn-primary"
                                                         type="button">Upload</button>
                                                 </span>
                                             </div>
                                         </div>
                                     </div>

                                     <div class="form-group">
                                         <label>First Name</label>
                                         <input type="text" name="first_name" class="form-control input-default"
                                             placeholder="First Name" value="Abdul Quadir">
                                     </div>

                                     <div class="form-group">
                                         <label>Last Name</label>
                                         <input type="text" name="last_name" class="form-control input-default"
                                             placeholder="Last Name" value="Ansari">
                                     </div>
                                     <div class="form-group">
                                         <label>About me</label>
                                         <textarea class="form-control h-150px" rows="6" id="about_me" name="about_me"
                                             placeholder="Write about yourself...">Hi, I'm Abdul, has been the industry standard dummy text ever since the 1500s.</textarea>
                                     </div>

                                     <div class="form-group">
                                         <label>Job Title</label>
                                         <input type="text" name="Job_title" class="form-control form-control-sm"
                                             placeholder="Job title" value="Web Designer">
                                     </div>

                                     <div class="form-group">
                                         <label>Language</label>
                                         <input type="text" name="lang" class="form-control form-control-sm"
                                             placeholder="Language" value="English">
                                     </div>

                                     <div class="form-group">
                                         <label>Contact</label>
                                         <input type="number" name="contact" class="form-control form-control-sm"
                                             placeholder="Contact" value="7738413265">
                                     </div>

                                     <div class="form-group">
                                         <label>Email</label>
                                         <input type="email" name="user_mail" class="form-control form-control-sm"
                                             placeholder="Email" value="abdulquadir.a@gmail.com">
                                     </div>
                                     <div class="form-group">
                                         <label>Gender</label>
                                         <select id="gender" name="gender" class="form-control">
                                             <option selected="">Choose...</option>
                                             <option value="Male" selected>Male</option>
                                             <option value="Female">Female</option>
                                         </select>
                                     </div>

                                     <div class="form-group">
                                         <label>City</label>
                                         <input type="text" name="city" class="form-control form-control-sm"
                                             placeholder="City" value="Mumbai">
                                     </div>
                                     <div class="form-group">
                                         <label>State</label>
                                         <input type="text" name="state" class="form-control form-control-sm"
                                             placeholder="State" value="Maharashtra">
                                     </div>
                                     <div class="form-group">
                                         <label>Country</label>
                                         <input type="text" name="country" class="form-control form-control-sm"
                                             placeholder="Country" value="India">
                                     </div>

                                     <div class="form-group">
                                         <label>Date of Birth</label>
                                         <input type="date" name="dob" class="form-control form-control-sm"
                                             placeholder="" value="">
                                         <div class="form-check mt-2">
                                             <input class="form-check-input" type="checkbox">
                                             <label class="form-check-label">Hide Age</label>
                                         </div>
                                     </div>
                                     <hr>
                                     <p>Social Information</p>
                                     <div class="form-group">
                                         <label>Facebook</label>
                                         <input type="text" name="facebook" class="form-control form-control-sm"
                                             placeholder="facebook link" value="www.facebook.com">
                                     </div>
                                     <div class="form-group">
                                         <label>Linkedin</label>
                                         <input type="text" name="linkedid" class="form-control form-control-sm"
                                             placeholder="Linkedin link" value="www.linkedin.com">
                                     </div>
                                     <div class="form-group">
                                         <label>Instagram</label>
                                         <input type="text" name="insta" class="form-control form-control-sm"
                                             placeholder="Instagram link" value="www.instagram.com">
                                     </div>
                                     <div class="form-group">
                                         <label>Website/Blog</label>
                                         <input type="text" name="web" class="form-control form-control-sm"
                                             placeholder="webiste/blog" value="www.abdulquadir.co">
                                     </div>
                                     <button type="submit" class="btn btn-primary btn-block">Update Profile</button>
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


     <?php include('include/footer.php');?>



 </body>