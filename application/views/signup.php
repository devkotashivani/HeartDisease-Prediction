
<div class="panel panel-default col-lg-offset-4 col-lg-4">
    <div class="panel-heading"><strong>Sign Up</strong></div>
    <form action="<?=site_url('front-end/signup/user')?>" method="post" name="frmUserSignUp">

        <div class="panel-body">
            <section class="form-group"><input type="text" placeholder="User Name*" class="form-control" name="username"></section>
            <section class="form-group"><input type="email" placeholder="Email*" class="form-control" name="email"></section>
            <section class="form-group"><input type="password" placeholder="Password*" class="form-control" name="pwd"></section>
            <section class="form-group"><input type="password" placeholder="Confirm Password*" class="form-control" name="re-pwd"></section>
        </div>
        <div class="panel-footer">
            <input class="btn btn-default" type="submit" value="Sign Up">
            <input class="btn btn-default" type="reset" value="Clear">
        </div>
    </form>
</div>
