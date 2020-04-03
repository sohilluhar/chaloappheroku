<!DOCTYPE html>
<html>

<head>
    <?php include('include/head.php'); ?>
    <?php
    if (isset($_POST['radio-value'])) {
        $_SESSION['activity_type'] = $_POST['radio-value'];
        ?>
        <script>
            window.location.href = "./add_activity.php";
        </script>
        <?php
    }
    ?>
</head>

<body>
    <section class="parent-section bg-white">
        <section class="section2 fixed-section bg-primary">
            <div class="container ">
                <div class="row align-items-center">
                    <div class="col-3 custom_icon1">
                        <a href="add_activity.php">
                            <i class="mdi mdi-keyboard-backspace mdi-24px text-white"></i>
                        </a>
                    </div>

                    <div class="col-6">
                        <h2 class="text-white text-center"><span class="logo">All Activities</span></h2>
                    </div>
                    <div class="col-3 ">


                    </div>
                </div>
        </section>
        <br><br> <br><br>

        <!-- Main Body-->
        <section class="section1 bg-white">

            <div class="container-fluid">
            <form method="post" id="activitiesform">
                    <div class="radio-group">
                        <div class="col-12">
                            <p>Outdoors and Adventures</p>
                        </div>

                        <div class="row">

                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Hiking">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Hiking</p>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Paddleboarding">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Paddleboarding</p>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Walking">
                                    <span class="mb-1 text-primary"><i class="mdi mdi-walk"></i></span>
                                    <p class="text-dark p-style">Walking</p>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Beach">
                                    <span class="mb-1 text-primary"><i class="mdi mdi-beach"></i></span>
                                    <p class="text-dark p-style">Beach</p>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Paintballing">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Paintballing</p>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Hiking with Dog">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Hiking with Dog</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Beach BBQ">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Beach BBQ</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Camping">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Camping</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Fishing">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Fishing</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Garderning">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Garderning</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Skate Boarding">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Skate Boarding</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Skiing">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Skiing</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Snokeling">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Snokeling</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Bird Watching">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Bird Watching</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Picnic">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Picnic</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Sightseeing">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Sightseeing</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Dog Walking">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Dog Walking</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Kayaking">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Kayaking</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Canoeing">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Canoeing</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Trail Running">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Trail Running</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Running">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Running</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Cycling">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Cycling</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Mountain Biking">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Mountain Biking</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Gym">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Gym</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Museum">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Museum</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="City Tour">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">City Tour</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Wedding">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Wedding</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Photo Walk">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Photo Walk</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Long Drive">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Long Drive</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <p>Social</p>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Date Night">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Date Night</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Dinnig">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Dinnig</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Clubbing">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Clubbing</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Book Club">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Book Club</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Brunches">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Brunches</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="BBQ">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">BBQ</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Mini Golf">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Mini Golf</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Dancing">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Dancing</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Junk Boat">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Junk Boat</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Music Festival">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Music Festival</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Parties">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Parties</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Theme Park">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Theme Park</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Poker Night">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Poker Night</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Comedy Show">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Comedy Show</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Coffee">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Coffee</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="High Tea">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">High Tea</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Shopping">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Shopping</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Shisha">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Shisha</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Live Music">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Live Music</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Kid Play Date">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Kid Play Date</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Hangout">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Hangout</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Horse Races">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Horse Races</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <p>Indoors</p>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Art Jamming">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Art Jamming</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Escape Room">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Escape Room</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Gameing">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Gameing</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Theatre">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Theatre</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Bingo">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Bingo</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Cooking">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Cooking</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Pool/Snooker">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Pool/Snooker</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Trampolining">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Trampolining</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Baking">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Baking</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Chess">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Chess</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Board Games">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Board Games</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Karaoke">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Karaoke</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Laser Tag">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Laser Tag</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Pole Dancing">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Pole Dancing</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Art Classes">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Art Classes</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Bowling">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Bowling</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="HIIT">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">HIIT</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Darts">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Darts</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Pilates">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Pilates</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Yoga">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Yoga</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="VR">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">VR</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Group Studing">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Group Studing</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Group Studing">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Kitty Party</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <p>Volunteering</p>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Old Age Home">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Old Age Home</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="NGO">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">NGO</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Tree Planting">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Tree Planting</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <p>Networking</p>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Corporate Networking">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Corporate Networking</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Skill Development">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Skill <br>Development</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <p>Sports</p>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Gully Cricket">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Gully Cricket</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Football Match">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Football Match</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Fifa Game">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Fifa Game</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Soccer">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Soccer</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Aussie Rules">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Aussie Rules</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Volleyball">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Volleyball</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Basket Ball">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Basket Ball</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Ice Hockey">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Ice Hockey</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Field Hockey">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Field Hockey</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Rugby">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Rugby</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Baseball">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Baseball</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Tennis">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Tennis</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Badminton">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Badminton</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Boxing">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Boxing</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Squash">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Squash</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Driving Range">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Driving Range</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Golf">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Golf</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Ice Skating">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Ice Skating</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Tai Chi">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Tai Chi</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Muay Thai">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Muay Thai</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Table Tennis">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Table Tennis</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-profile text-center radio" data-value="Water Polo">
                                    <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                    <p class="text-dark p-style">Water Polo</p>
                                </div>
                            </div>
                        </div>
                    <input type="text" id="radio-value" name="radio-value" value="" hidden/>

                    </div>
                </form>
                <hr>
                <div class="row">

                    <div class="col-12 text-center mb-4">
                    <p class="text-primary">Can't find your activity? Suggest it to us!</p>
                        <form action="">
                            <div class="form-group">
                                <input type="text" class="form-control input-default"
                                    placeholder="what activity would you like to add?">
                            </div>
                            <button class="btn btn-primary">Suggest Activity</button>
                        </form>
                    </div>

                </div>
            </div>
        </section>





        <!-- Main Body-->
    </section><!-- PARENT SECTION -->


    <?php include('include/footer.php');?>



</body>