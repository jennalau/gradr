<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>gradr | dashboard </title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <!-- our style sheets -->
    <link rel="stylesheet" href="./styles/navbar.css">
    <link rel="stylesheet" href="./styles/dashboard.css">
    <link rel="stylesheet" href="./styles/cards.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
</head>
<body>
<!-- start of wrapper -->
<div class="wrapper">
    <!-- start of navbar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <a href="dashboard.php">
                <h3>gradr</h3>
            </a>
            
        </div>

        <ul class="list-unstyled components">
            <li class="active">
                <a href="dashboard.php">
                <i class="fas fa-home"></i> 
                    Home
                </a>
            </li>
            <li>
                <a href="grades.php">
                <i class="fas fa-chart-bar"></i>  
                    Grades
                </a>
            </li>
          
            <li>
                <a href="courses.php">
                <i class="fas fa-university"></i> 
                    Courses
                </a>
            </li>
        </ul>
    </nav>
    <!-- end of navbar -->

    <!-- start of main content -->
    <div class="main-content" id="dashboard">
        <!-- start of content header -->
        <div class="content-header">
            <div class="user dropdown">
                <a href="#" id="imageDropdown" data-toggle="dropdown">
                    <i class="fas fa-user-graduate"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="imageDropdown">
                    <li role="presentation">
                        <a class="dropdown-item" href="index.html">logout</a>
                    </li>
                </ul>
            </div>
            <h2>Welcome, ____!</h2>
        </div>
        <hr>
        <!-- end of content header -->

        <!-- start of content body -->
        <div class="content-body">
            <div class="row">
                <div class="column">
                    <div class="card-wrapper zoom" style="height:40vh">progress bar</div>
                    <div class="card-wrapper zoom"style="height:20vh">hi</div>
                </div>
                <div class="column">
                    <div class="card-wrapper zoom"style="height:20vh">grade tracking</div>
                    <div class="card-wrapper zoom"style="height:30vh"></div>
                </div>
            </div>
        </div>
        <!-- end of content body -->

    </div>
    <!-- end of main content -->
</div>
<!-- end of wrapper -->




<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<!-- Chart JS -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script>
$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
});
</script>
</body>


</html>