<?php 
include('header.php');
if(isset($_SESSION['login_system'])){
  header("Location:http://localhost/projects_point_projects/login_system/index.php");
  die;
}
?>
<form action="backend_handler.php" method="post">
  <div class="form-group">
    <label for="exampleInputName">Name</label>
    <input type="name" class="form-control" name="name" id="exampleInputName" aria-describedby="name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword2">Confirm Password</label>
    <input type="password" class="form-control" name="confirm_password" id="exampleInputPassword2">
  </div>
  
  <button type="submit" name="type" value="register" class="btn btn-primary">Register</button>
</form>

<?php 
include('footer.php');
?>