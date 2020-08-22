<?php 
include('header.php');
?>
<div class="row">
    <div class="col-12">
        <h1>Login System</h1>
        <?php if(isset($_SESSION['login_system']['user_email'])){?>
        <p>Hello <?php echo $_SESSION['login_system']['name'];?>, welcome to your login system</p>
        <?php }else{?>
            <p>Please login to continue</p>
        <?php }?>
    </div>
</div>
<?php 
include('footer.php');
?>