<?php 
@include('/Applications/XAMPP/xamppfiles/htdocs/mvc_loginproject/controller/manageUser.php');
// $manageUser = new ManageUserController;
// $manageUser->managerUser();

?>

<div class="container mt-5">
  <div class="card ">
    <div class="card-header"><i class="fa fa-fw fa-plus-circle"></i> <strong>Manage User</strong>
      <!-- <a href="/mvc_loginproject/index.php?function=user" class="float-right btn btn-dark btn-sm"><i class="fa fa-fw fa-globe"></i> Browse Users</a> -->
    </div>
    <div class="card-body col d-flex justify-content-center">
      <div class="col-sm-6 col ">
        <h5 class="card-title">Fields with <span class="text-danger">*</span> are mandatory!</h5>
        <form method="post" enctype="multipart/form-data">

          <div class="form-group">

            <label>Full name <span class="text-danger">*</span></label>

            <small class="text-danger" id="error_firstname"></small>
            <input type="text" name="fname" id="fname" class="form-control" placeholder="Enter name" required value="<?php echo $fname ?>">
          </div>

          <div class="form-group">
            <label>Email <span class="text-danger">*</span></label>
            <small class="text-danger email_error" id="error_email"></small>
            <input type="email" name="email" id="email" class="form-control" placeholder="Enter email" required value="<?php echo $email ?>">
          </div>
          <div class="form-group">
            <label>Mobile <span class="text-danger">*</span></label>

            <input type="tel" class="tel form-control" name="phone" id="phone" placeholder="Enter mobile" pattern="[1-9]{1}[0-9]{9}" required value="<?php echo $mobile ?>">
          </div>

          <!-- <div class="d-flex flex-row align-items-center mb-4">
              <h6 class=" mb-2 pb-1">role: </h6>
              <select name="user_type" class="mb-2 pb-1">
                <option value="user">User</option>
                <option value="admin">Admin</option>
              </select>
            </div> -->

          <div class="row">

            <div class="col-md-6 mb-4">

              <h6 class="mb-2 pb-1">Gender: </h6>

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" value="M" <?php echo ($gender=='M')?'checked':'' ?>/>
                <label class="form-check-label" for="maleGender">Male</label>
              </div>

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" value="F" <?php echo ($gender=='F')?'checked':'' ?>/>
                <label class="form-check-label" for="femaleGender">Female</label>
              </div>
            </div>
          </div>

          <div class="form-group">
            <button type="submit" name="submit" value="submit" id="submit" class="btn btn-primary"><i class="fa fa-fw fa-plus-circle"></i> Manage user</button>
            <!-- <button type="button" class="btn btn-secondary">Close </button> -->
          </div>
        </form>
      </div>
    </div>
  </div>
</div>