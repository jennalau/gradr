<form>
    <!-- title -->
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" placeholder="Title here">
  </div>
    <!--  select course -->
  <div class="form-group">
    <label for="courseSelect">Course</label>
    <select class="form-control" id="courseSelect">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
    <!-- select category -->
    <div class="form-group">
    <label for="categorySelect">Type</label>
    <select class="form-control" id="categorySelect">
      <option>1</option>
      <option>2</option>

    </select>
  </div>
  <!-- grade -->
  <div class="form-group">
    <label for="example-number-input" class="col-2 col-form-label">Grade</label>
    <div class="row">
        <div class="col-5">
            <input class="form-control" type="number" value="42" id="gradeNumerator">
        </div>
        <div class="col-2"><span> out of </span> </div>
        <div class="col-5">
            <input class="form-control" type="number" value="100" id="gradeDenominator">
        </div>
    </div>
    </div>

<button type="submit" class="btn btn-primary mb-2" data-dismiss="modal">Submit</button>

</form>