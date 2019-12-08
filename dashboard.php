<?php

// get user login input
// $email = $POST['email'];
// $password = $POST['password'];


// check if user exists (login)


// user does not exist (register)


// start session


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>gradr | dashboard </title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/nav-test.css">
    <!-- <link rel="stylesheet" href="styles/navbar.css"> -->

    <link rel="stylesheet" href="styles/cards.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <?php require "global/navbar-dashboard.php"?>

        <!-- Page Content  -->
        <div id="content">
            <!-- navbar toggle button -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn">
                        <i class="fas fa-align-left"></i>
                    </button>
                </div>
                <h2> Dashboard </h2>
            </nav>

            <!-- start of main content -->
            <div class="main-content">
            <div class="card-columns">
            <!-- card 1 -->
                <div class="card">
                    <div class="card-body zoom">
                    <h5 class="card-title">GPA</h5>
                        <h3 class="text-center">3.89</h3>
                    </div>
                </div>
            <!-- card 2 -->
                <div class="card">
                    <div class="card-body zoom">
                        <h5 class="card-title">Progress</h5>
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
            <!-- card 3 -->
                <div class="card">
                    <div class="card-body zoom">
                    <h5 class="card-title">Current Courses</h5>

                    <span class="badge badge-pill badge-info" style="font-size: 1.15rem; padding: 3% 7%; margin: 2% 0%;">
                        Course 1
                        <span class="badge badge-light" style="margin-left: 5%;">94%</span>
                    </span>
                    <br>

                    <span class="badge badge-pill badge-info" style="font-size: 1.15rem; padding: 3% 7%; margin: 2% 0%;">
                        Course 2
                        <span class="badge badge-light" style="margin-left: 5%;">94%</span>
                    </span>
                    <br>

                    <span class="badge badge-pill badge-info" style="font-size: 1.15rem; padding: 3% 7%; margin: 2% 0%;">
                        Course 3
                        <span class="badge badge-light" style="margin-left: 5%;">94%</span>
                    </span>
                    <br>

                    <span class="badge badge-pill badge-info" style="font-size: 1.15rem; padding: 3% 7%; margin: 2% 0%;">
                        Course 4
                        <span class="badge badge-light" style="margin-left: 5%;">94%</span>
                    </span>
                    <br>
                   
                    
                    </div>
                </div>


                <div class="card">
                    <div class="card-body zoom">
                        <h5 class="card-title">Grades</h5>
                        <canvas id="gradeChart"></canvas>
                    </div>
                </div>


                

                <div class="card p-3">
                    <blockquote class="blockquote mb-0 card-body">
                    <p id="quote"></p>
                    </blockquote>
                </div>

     
                <!-- <div class="card">
                    <div class="card-body zoom">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is another card with title and supporting text below. This card has some additional content to make it slightly taller overall.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div> -->
         
            </div>
            <!-- end of main content -->
            
        </div>
        <!-- end of Page Content -->
            

        <!-- <div class="line"></div> -->

        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- Char.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script src="js/progress-bar.js"></script>
    <script src="js/quotes.js"></script>
    <script src="js/grades.js"></script>
    <script>
    $(document).ready(function () {

$("#sidebar").mCustomScrollbar({
     theme: "minimal"
});

$('#sidebarCollapse').on('click', function () {
    // open or close navbar
    $('#sidebar').toggleClass('active');
    // close dropdowns
    $('.collapse.in').toggleClass('in');
    // and also adjust aria-expanded attributes we use for the open/closed arrows
    // in our CSS
    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
});

});
</script>


  
</body>

</html>