<!doctype html>
<html lang="en"> 

<body>

  <div class="container">
    <div class="row">

      <div class="col-lg-12">
        <form method="post" action="<?php echo base_url('vacancies/store'); ?>">

          <div class="form-group">
            <label>Name</label>
            <input class="form-control" type="text" name="name" required>
          </div>

          <div class="form-group">
            <label>Description</label>
            <textarea name="description" id="description" cols="30" rows="10" required class="form-control"></textarea>
          </div>          
            <hr>
          <div class="form-group">
            <button type="submit" class="btn btn-success"> <i class="fas fa-check"></i> Submit </button>
          </div>
        </form>


      </div>
    </div>
  </div>



  <?php //$this->load->view('includes/footer'); ?>

</body>

</html>