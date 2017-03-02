
<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content modal-popup">
			<a href="<?php echo base_url()?>" class="close"><i class="icon_close_alt2"></i></a>
			<h3 class="white">Login</h3>

			<form action="<?php echo site_url('front_end/login')?>" method="post" class="popup-form">
				<input type="text" name="username" class="form-control form-white" placeholder="Username">
				<input type="password" name="pwd" class="form-control form-white" placeholder="Password">

				<div class="checkbox-holder text-left">
					<div class="checkbox">
						<input type="checkbox" value="None" id="squaredOne" name="check" />
					</div>
				</div>
				
				<input type="submit" Value="login" class="btn btn-submit">
					
				</input>
				<a href="#signup"  class="pull-right" style="color:white">Have not signed Up yet??Sign Up now!!</a>
			</form>

		</div>
	</div>
</div>
