<?php
session_start();
include_once('header.html.php');
?>
<h2> Connectez-vous</h2>
<form style="padding:left" method="POST" action = "signin/checkUser">
<div class="form-group">
    <label>Username</label>
    <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="">
    <span class="invalid-feedback"><?php echo $username_err; ?></span>
</div>    
<div class="form-group">
    <label>Password</label>
    <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="">
    <span class="invalid-feedback"><?php echo $password_err; ?></span>
</div>
<div class="form-group">
    <input type="submit" class="btn btn-primary" value="Inscription">
</div>
<?;
include_once('footer.html.php');
?>