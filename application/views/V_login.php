<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">
        <title>SILAHKAN LOGIN</title>
        <!-- Bootstrap core CSS -->
        <?php echo link_tag(asset_url('css/bootstrap.min.css')); ?>
        <?php echo script_tag(asset_url('js/ie-emulation-modes-warning.js')); ?>

        <?php echo link_tag(asset_url('css/signin.css')); ?>
        <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
    </head>

    <body>

        <div class="container">
            <?php echo form_open('login/loginValidate', array('class' => 'form-signin')); ?>
            <h2 class="form-signin-heading">SILAHKAN LOGIN</h2>
            <label for="inputEmail" class="sr-only">Email/Username</label>
            <?php echo form_input('user', '', array('id' => 'inputEmail', 'class' => 'form-control', 'placeholder' => 'Username', 'required' => 'true')); ?></td></tr>
    <label for="inputPassword" class="sr-only">Password</label>
    <?php echo form_password('pass', '', array('id' => 'inputPassword', 'class' => 'form-control', 'placeholder' => 'Password', 'required' => 'true')); ?></td></tr>
<div class="checkbox">

</div>
<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
<label>
    lupa password ? 
    <a href="login/resetpassword">Reset Password</a>
    <br>Anda Admin ?
    <a href="admin/cpanel">Silahkan Kesini</a>
    <br>Belum Punya akun ?
    <a href="create">Silahkan Register</a>
</label>
</form>
</div> <!-- /container -->
</body>
</html>
