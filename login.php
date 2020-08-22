<?php 
include('header.php');
if(isset($_SESSION['login_system'])){
  header("Location:http://localhost/projects_point_projects/login_system/index.php");
  die;
}
?>
<form action="backend_handler.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
  </div>
  
  <button type="submit" name="type" value="login" class="btn btn-primary">Login</button>
</form>

<?php 
include('footer.php');
?>