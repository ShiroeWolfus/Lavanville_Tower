<?php
include_once('header.html.php');
?>
<div class="wrapper">
    <h2>S'inscrire</h2>
        <p>Veuillez remplir tous les champs du formulaire pour créer un compte.</p>
        <form method="POST" action="Signin/register">
            <div class="form-group">
                <label>Nom</label>
                <input type="text" name="lastname" class="form-control <?php echo (!empty($lastname_err)) ? 'is-invalid' : ''; ?>" value="">
                <span class="invalid-feedback"><?php echo $lastname_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Prénom</label>
                <input type="text" name="firstname" class="form-control <?php echo (!empty($firstname_err)) ? 'is-invalid' : ''; ?>" value="">
                <span class="invalid-feedback"><?php echo $firstname_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="">
                <span class="invalid-feedback"><?php echo $email_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Mot de passe</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <label>Confirmer le mot de passe</label>
                <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Inscription">
                <input type="reset" class="btn btn-secondary ml-2" value="Reset">
            </div>
            <p>Vous possédez déjà un compte ? <a href="login">Connectez vous</a>.</p>
</form>
</div>
<?
include_once('footer.html.php');
?>