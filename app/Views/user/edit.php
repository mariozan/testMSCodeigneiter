<!doctype html>
<html lang="en"> 

<body>

  <div class="container">
    <div class="row">

      <div class="col-lg-12">
        <form method="post" action="<?php 
                        $url = 'user/' . $data[0]->id . '/update';
                        echo base_url($url); ?>">

          <div class="form-group">
            <label>Username</label>
            <input class="form-control" type="text" name="username" required value="<?php echo $data[0]->username ?>">
          </div>

          <div class="form-group">
            <label>Password</label>
            <input class="form-control" type="password" name="password" required>
          </div>

          <div class="form-group">
            <label>Role</label>
            <select name="role" id="role" class="form-control" >
                <option value="talent" <?php if($data[0]->role == "talent") echo "selected" ?>>Talent</option>
                <option value="recluiter" <?php if($data[0]->role == "recluiter") echo "selected" ?>>recluiter</option>
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
</body>

</html>