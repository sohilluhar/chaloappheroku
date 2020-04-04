<!DOCTYPE html>
<html>

<head>
    <?php include('include/head.php');
    $current_activity_id = $_GET['id'];
    $row = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM activity where id=" . $_GET['id']));


    ?>

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
                    <h2 class="text-white text-center"><span class="logo">Edit Activity</span></h2>
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
                            <div class="bootstrap-media">


                                <form>
                                    <label class="m-t-20">Start Time</label>
                                    <div class="input-group">
                                        <input type="date" class="form-control" value="<?php echo $row['stime'] ?>">
                                        <span
                                                class="input-group-append"><span class="input-group-text"><i
                                                        class="fa fa-clock-o"></i></span></span>
                                    </div>

                                    <label class="m-t-20 mt-2">End Time</label>
                                    <div class="input-group">
                                        <input type="date" class="form-control" value="<?php echo $row['etime'] ?>">
                                        <span
                                                class="input-group-append"><span class="input-group-text"><i
                                                        class="fa fa-clock-o"></i></span></span>
                                    </div>

                                    <div class="form-group mt-3">
                                        <label class="m-t-20 ">No. of peoples</label>
                                        <div class="radio mb-3">
                                            <label>
                                                <input type="radio" name="optradio"><i
                                                        class="mdi mdi-human-male mdi-18px"></i>
                                            </label>
                                            <label class="position-relative">
                                                <input type="radio" name="optradio">
                                                <i class="mdi mdi-human-male mdi-18px"></i>
                                                <i class="mdi mdi-human-male mdi-18px position-absolute"
                                                   style="left:23px;"></i>
                                            </label>

                                            <label class="position-relative ml-2">
                                                <input type="radio" name="optradio"><i
                                                        class="mdi mdi-human-male mdi-18px"></i><i
                                                        class="mdi mdi-human-male mdi-18px position-absolute"
                                                        style="left:20px;"></i>
                                                <i class="mdi mdi-human-male mdi-18px position-absolute"
                                                   style="left:28px;"></i>
                                            </label>

                                            <label class="position-relative ml-3">
                                                <input type="radio" name="optradio"><i
                                                        class="mdi mdi-human-male mdi-18px"></i><i
                                                        class="mdi mdi-human-male mdi-18px position-absolute"
                                                        style="left:20px;"></i>
                                                <i class="mdi mdi-human-male mdi-18px position-absolute"
                                                   style="left:28px;"></i>
                                                <i class="mdi mdi-human-male mdi-18px position-absolute"
                                                   style="left:36px;"></i>
                                            </label>

                                            <label class="position-relative ml-4">
                                                <input type="radio" name="optradio"><i
                                                        class="mdi mdi-human-male mdi-18px"></i><i
                                                        class="mdi mdi-human-male mdi-18px position-absolute"
                                                        style="left:20px;"></i>
                                                <i class="mdi mdi-human-male mdi-18px position-absolute"
                                                   style="left:28px;"></i>
                                                <i class="mdi mdi-human-male mdi-18px position-absolute"
                                                   style="left:36px;"></i>
                                                <i class="mdi mdi-human-male mdi-18px position-absolute"
                                                   style="left:45px;"></i>
                                            </label>

                                            <label class="position-relative ml-5">
                                                <input type="radio" name="optradio"><i
                                                        class="mdi mdi-human-male mdi-18px"></i><i
                                                        class="mdi mdi-human-male mdi-18px position-absolute"
                                                        style="left:20px;"></i>
                                                <i class="mdi mdi-human-male mdi-18px position-absolute"
                                                   style="left:28px;"></i>
                                                <i class="mdi mdi-human-male mdi-18px position-absolute"
                                                   style="left:36px;"></i>
                                                <i class="mdi mdi-human-male mdi-18px position-absolute"
                                                   style="left:45px;"></i>
                                                <i class="mdi mdi-human-male mdi-18px position-absolute"
                                                   style="left:52px;"></i>
                                            </label>

                                            <div class="form-group">

                                                <select class="form-control" id="sel1">
                                                    <option value="1">1 peoples</option>
                                                    <option value="2">2 peoples</option>
                                                    <option value="3">3 peoples</option>
                                                    <option value="4">4 peoples</option>
                                                    <option value="5">5 peoples</option>
                                                    <option value="6">6 peoples</option>
                                                    <option value="7">7 peoples</option>
                                                    <option value="8">8 peoples</option>
                                                    <option value="9">9 peoples</option>
                                                    <option value="10">10 peoples</option>
                                                    <option value="11">11 peoples</option>
                                                    <option value="12">12 peoples</option>
                                                    <option value="13">13 peoples</option>
                                                    <option value="14">14 peoples</option>
                                                    <option value="15">15 peoples</option>
                                                    <option value="16">16 peoples</option>
                                                    <option value="17">17 peoples</option>
                                                    <option value="18">18 peoples</option>
                                                    <option value="19">19 peoples</option>
                                                    <option value="20">20 peoples</option>
                                                    <option value="21">21 peoples</option>
                                                    <option value="22">22 peoples</option>
                                                    <option value="23">23 peoples</option>
                                                    <option value="24">24 peoples</option>
                                                    <option value="25">25 peoples</option>
                                                    <option value="26">26 peoples</option>
                                                    <option value="27">27 peoples</option>
                                                    <option value="28">28 peoples</option>
                                                </select>

                                                <script>
                                                    selectElement('sel1', "<?php echo trim($row['nopeople']);?>");

                                                    function selectElement(id, valueToSelect) {
                                                        let element = document.getElementById(id);
                                                        element.value = valueToSelect;
                                                    }
                                                </script>
                                            </div>

                                        </div>


                                    </div>
                                    <div class="text-center">
                                        <button class="btn btn-primary btn-block">Update</button>
                                    </div>
                                </form>


                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <!-- Card End  -->

        </div>
        </div>
    </section>


    <?php include('include/bottom_bar.php'); ?>
    <!-- Main Body-->
</section><!-- PARENT SECTION -->


<?php include('include/footer.php'); ?>


</body>