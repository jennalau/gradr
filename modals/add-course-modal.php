
<!-- Modal -->
<div class="modal fade" id="addCourseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add New Course</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


        <!-- prepopulate the info -->
        <form>
          <!-- course name -->
        <div class="form-group">
          <label for="title">Course Name</label>
          <input type="text" class="form-control" id="title">
        </div>
          <!-- course description-->
        <div class="form-group">
          <label for="courseSelect">Course Description</label>
          <input type="text" class="form-control" id="description">
        </div>

        <!-- category input -->
        <div class="form-group">
            <label for="courseSelect">Categories</label>


            <!-- category -->
            <div class="row" style="margin-bottom: 2%;">
                <div class="col-8">
                <input type="text" class="form-control" id="category" placeholder="Category Name">
                </div>
                <div class="col-4">
                    <input class="form-control" type="number" value="%" id="categoryWeight" placeholder="%">
                </div>
            </div>

            <!-- category -->
            <div class="row" style="margin-bottom: 2%;">
                <div class="col-8">
                <input type="text" class="form-control" id="category" placeholder="Category Name">
                </div>
                <div class="col-4">
                    <input class="form-control" type="number" value="%" id="categoryWeight" placeholder="%">
                </div>
            </div>            


            <!-- category -->
            <div class="row" style="margin-bottom: 2%;">
                <div class="col-8">
                <input type="text" class="form-control" id="category" placeholder="Category Name">
                </div>
                <div class="col-4">
                    <input class="form-control" type="number" value="%" id="categoryWeight" placeholder="%">
                </div>
            </div>

            <!-- category -->
            <div class="row" style="margin-bottom: 2%;">
                <div class="col-8">
                <input type="text" class="form-control" id="category" placeholder="Category Name">
                </div>
                <div class="col-4">
                    <input class="form-control" type="number" value="%" id="categoryWeight" placeholder="%">
                </div>
            </div>
            
            <!-- category -->
            <div class="row" style="margin-bottom: 2%;">
                <div class="col-8">
                <input type="text" class="form-control" id="category" placeholder="Category Name">
                </div>
                <div class="col-4">
                    <input class="form-control" type="number" value="" id="categoryWeight" placeholder="%">
                </div>
            </div>            





        </div>

        <button type="submit" class="btn btn-primary mb-2" data-dismiss="modal">Add Course</button>

      </form>
        



      </div>

    </div>
  </div>
</div>


