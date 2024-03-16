<!doctype html>
<html lang="en"> 

<body>

  <div class="container">
    <div class="row">

      <div class="col-lg-12">
        <form method="post" action="<?php echo base_url('register'); ?>">

          <div class="form-group">
            <label>Username</label>
            <input class="form-control" type="text" name="username" required>
          </div>

          <div class="form-group">
            <label>Password</label>
            <input class="form-control" type="password" name="password" required>
          </div>

          <div class="form-group">
            <label>Role</label>
            <select name="role" id="role" class="form-control" >
                <option value="talent">Talent</option>
                <option value="recluiter">Recluiter</option>
            </select>
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