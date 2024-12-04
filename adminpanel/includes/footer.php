<footer class="footer">
  <div class="container-fluid d-flex justify-content-between">
    <nav class="pull-left">
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" href="http://www.themekita.com">
            ThemeKita
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"> Help </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"> Licenses </a>
        </li>
      </ul>
    </nav>
    <div class="copyright">
      2024, made with <i class="fa fa-heart heart text-danger"></i> by
      <a href="http://www.themekita.com">ThemeKita</a>
    </div>
    <div>
      Distributed by
      <a target="_blank" href="https://themewagon.com/">ThemeWagon</a>.
    </div>
  </div>
</footer>
</div>





<!-- category modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Category</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="add_category.php" method="POST" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" placeholder="Enter Category Name" id="name" name="name"
              aria-describedby="nameHelp">

          </div>
          <div class="mb-3">
            <div class="form-floating">
              <textarea class="form-control" placeholder="Enter Description" id="floatingTextarea2"
                style="height: 100px" name="description"></textarea>
              <label for="floatingTextarea2">Description</label>
            </div>
            <div class="mb-3">
              <label for="icon" class="form-label">Icon</label>
              <input type="file" class="form-control" id="icon" name="icon" aria-describedby="iconHelp">

            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="add_company_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Company</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="add_company.php" method="POST" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" placeholder="Enter Category Name" id="name" name="name"
              aria-describedby="nameHelp">

          </div>
          <div class="mb-3">
            <div class="form-floating">
              <textarea class="form-control" placeholder="Enter Description" id="floatingTextarea2"
                style="height: 100px" name="description"></textarea>
              <label for="floatingTextarea2">Description</label>
            </div>
            <div class="mb-3">
              <label for="icon" class="form-label">Logo</label>
              <input type="file" class="form-control" id="logo" name="logo" aria-describedby="iconHelp">
            </div>
            <div class="mb-3">
              <label for="icon" class="form-label">Status</label>
              <select name="status" id="mySelect" style="width: 100%;">
                <option value="1">Active</option>
                <option value="0">In Active</option>
              </select>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

  <!-- Include jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Include Select2 JS -->
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/js/select2.min.js"></script>


<script>
//  $(document).ready(function() {
//   $('#mySelect').select2({
//     placeholder: 'Select an option',
//     allowClear: true
//   });
// });

</script>

<!-- add job modal -->


<!-- modals -->



<!-- Modal -->
<!-- Button trigger modal -->