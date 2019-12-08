<div class="card">
    
<div class="card-body">

    <!-- dynamically populate courses based on user info -->
    <!-- <?php?> -->
    <h5 class="card-title">Course Name</h5>
    <p class="card-text">Course Description</p>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Details</button>
    <button type="button" class="btn btn-danger delete-btn">Delete</button>

</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Course Name</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>

            <div class="modal-body">
                <h6>Grade : &nbsp;&nbsp; 94% &nbsp;&nbsp; | &nbsp;&nbsp;  A <span> </span></h6>
                
                <ul class="list-group">
                    <!-- iterate through this course's categories & their weights -->
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Homework
                        <span class="badge badge-primary badge-pill">20%</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Labs
                        <span class="badge badge-primary badge-pill">30%</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Exams
                        <span class="badge badge-primary badge-pill">50%</span>
                    </li>
                </ul>

                <div class="modal-footer">
                </div>
            </div>
            <!-- end of modal-body -->
        </div>
    </div>
</div>

</div>

