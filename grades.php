<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>gradr | grades </title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/nav-test.css">
    <link rel="stylesheet" href="styles/cards.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <?php require "global/navbar-grades.php"?>
        

        <!-- Page Content  -->
        <div id="content">
            <!-- navbar toggle button -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn">
                        <i class="fas fa-align-left"></i>
                    </button>
                </div>
                <h2> Grades </h2>
            </nav>

            <!-- start of main content -->
            <div class="main-content">
                 <!-- Button trigger 'new grade' modal -->
                 <button type="button" class="btn btn-success" style="margin-bottom: 2%;" data-toggle="modal" data-target="#newGradeModal">Add New Grade</button>
                    
                 <!-- start of new grade modal -->
                 <?php require "modals/new-grade-modal.php" ?>


                <br>

                <div class="container-fluid">
         
                    <div class="row">
           
                        <div class="col-12">
                            <table class="table table-hover table-responsive mt-4">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Class</th>
                                        <th>Type</th>
                                        <th>Grade</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                            <td>Lab 10: DVD CRUD App</td>
                                            <td>ITP 303</td>
                                            <td>Lab</td>
                                            <td>100%</td>
                                            <td> <!-- Button trigger 'new grade' modal -->
                                                <button type="button" class="btn btn-outline-info" style="margin-bottom: 2%;" data-toggle="modal" data-target="#editGradeModal">Edit</button>
                                                <?php require "modals/edit-grade-modal.php"?>
                                            </td>
                                            
                                            <td><button type="button" class="btn btn-outline-danger delete-btn">Delete</button></td>
                                        </tr>
                                </tbody>
                            </table>
                        </div> <!-- .col -->
                    </div> <!-- .row -->
                </div> <!-- .container-fluid -->
            </div>
            <!-- end of main content -->
            
        </div>
        <!-- end of Page Content -->
            
        </div>


    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- Char.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });

        // show popup before user comits to delete a dvd
        let deleteButtons = document.querySelectorAll(".delete-btn");
        for(let i = 0; i < deleteButtons.length; i++){
            deleteButtons[i].onclick = function() {
                // show popup
                // return false = same to event.preventDefault()
                //confirm() method returns TRUE or FALSE
                // true if user clicked OK, false otherwise
                return confirm("Are you sure you want to delete this grade?");
            }
        }
    </script>
</body>

</html>