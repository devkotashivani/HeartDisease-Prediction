<!DOCTYPE html>
<html lang="en">
<head >
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/defaultStyles.css">
    <title>Admin Login</title>
</head>
<body style="background-color: lightgrey">
<br> 
<br>

<<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Please Log In</h1>
            <div class="account-wall">
                
                <form action="<?php echo site_url('dashboard/adlogin');?>" method="post" class="form-signin" name="frmAdLogin">
                <input type="text" class="form-control" placeholder="Username" name ="username" required autofocus>
                <input type="password" class="form-control" placeholder="Password" name="pwd" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Log In</button>
                <label class="checkbox pull-left">
                    <input type="checkbox" value="remember-me">
                    Remember me
                </label>
                
                </form>
            </div>
            
        </div>
    </div>
</div>

<script src="../../js/jquery-1.11.1.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>

</body>
</html>