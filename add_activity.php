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
                        <h2 class="text-white text-center"><span class="logo">New Activity</span></h2>
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
                    <!-- Card Start -->
                    <div class="col-lg-12 mt-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="bootstrap-media">
                                    <form>

                                        <div class="row align-items-center mb-2">
                                            <div class="col-12">
                                                <div class="input-group">
                                                    <input type=" text" class="form-control"
                                                        placeholder="Search activity">
                                                    <span class="input-group-text bg-white ml-4">
                                                        <a href="activities.php">
                                                            <i
                                                                class="mdi mdi-dots-horizontal mdi-24px text-primary"></i>
                                                        </a>
                                                    </span>

                                                </div>
                                            </div>
                                        </div>


                                        <div class="radio-group">

                                            <p class="text-primary mb-4">Your Activity</p>


                                            <div class="row">

                                                <div class="col-4">
                                                    <div class="card card-profile text-center radio"
                                                        data-value="Hiking">
                                                        <span class="mb-1 text-primary"><i
                                                                class="icon-people"></i></span>
                                                        <p class="text-dark p-style">Hiking</p>
                                                    </div>
                                                </div>

                                                <div class="col-4">
                                                    <div class="card card-profile text-center radio"
                                                        data-value="Paddleboarding">
                                                        <span class="mb-1 text-primary"><i
                                                                class="icon-people"></i></span>
                                                        <p class="text-dark p-style">Paddleboarding</p>
                                                    </div>
                                                </div>

                                                <div class="col-4">
                                                    <div class="card card-profile text-center radio"
                                                        data-value="Walking">
                                                        <span class="mb-1 text-primary"><i
                                                                class="icon-people"></i></span>
                                                        <p class="text-dark p-style">Walking</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <p class="text-primary">Activity Location</p>

                                        <div class="row align-items-center mb-2">
                                            <div class="col-12">
                                                <div class="input-group">
                                                    <input type=" text" class="form-control"
                                                        placeholder="Search for a place">
                                                    <span class="input-group-text bg-white ml-4">
                                                        <a href="map.php">
                                                            <i class="mdi mdi-map-marker mdi-24px text-primary"></i>
                                                        </a>
                                                    </span>

                                                </div>
                                            </div>
                                        </div>


                                        <p class="text-primary mt-3">Date</p>


                                        <input type="date" class="form-control" name="adt_date" placeholder="" id="">


                                        <p class="text-primary mt-3">Time</p>


                                        <label class="m-t-20">Start Time</label>
                                        <div class="input-group">
                                            <input type="time" class="form-control" value=""> <span
                                                class="input-group-append"><span class="input-group-text"><i
                                                        class="fa fa-clock-o"></i></span></span>
                                        </div>


                                        <label class="m-t-20 mt-2">End Time</label>
                                        <div class="input-group">
                                            <input type="time" class="form-control" value=""> <span
                                                class="input-group-append"><span class="input-group-text"><i
                                                        class="fa fa-clock-o"></i></span></span>
                                        </div>

                                        <div class="form-check mb-2 mt-3">
                                            <input class="form-check-input" type="checkbox">
                                            <label class="form-check-label">Let others propose time changes</label>
                                        </div>

                                        <div class="form-group mt-3">
                                            <label class="m-t-20 text-primary">No. of peoples you'd like to join</label>
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
                                                        <option>1 peoples</option>
                                                        <option>2 peoples</option>
                                                        <option>3 peoples</option>
                                                        <option>4 peoples</option>
                                                        <option>5 peoples</option>
                                                        <option>6 peoples</option>
                                                        <option>7 peoples</option>
                                                        <option>8 peoples</option>
                                                        <option>9 peoples</option>
                                                        <option>10 peoples</option>
                                                        <option>11 peoples</option>
                                                        <option>12 peoples</option>
                                                        <option>13 peoples</option>
                                                        <option>14 peoples</option>
                                                        <option>15 peoples</option>
                                                        <option>16 peoples</option>
                                                        <option>17 peoples</option>
                                                        <option>18 peoples</option>
                                                        <option>19 peoples</option>
                                                        <option>20 peoples</option>
                                                        <option>21 peoples</option>
                                                        <option>22 peoples</option>
                                                        <option>23 peoples</option>
                                                        <option>24 peoples</option>
                                                        <option>25 peoples</option>
                                                        <option>26 peoples</option>
                                                        <option>27 peoples</option>
                                                        <option>28 peoples</option>
                                                    </select>
                                                </div>

                                            </div>


                                            <div class="form-group">
                                                <label class="text-primary">Notes <span
                                                        class="text-muted">(optional)</span></label>
                                                <textarea class="form-control h-100px" rows="4" id="act_note"
                                                    name="act_note"
                                                    placeholder="e.g. Looks like it'sgoing to be hot today, bring lots of water , Meet at Edit D of the subway...."></textarea>
                                            </div>

                                        </div>
                                        <div class="text-center">
                                            <button class="btn btn-primary btn-block">Broadcast Activity</button>
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





        <!-- Main Body-->
    </section><!-- PARENT SECTION -->


    <?php include('include/footer.php');?>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>