<div class="container-fluid bg-image">
	<div class="row shadow-bg">
		<div class="col-md-4"></div>
		<div class="col-md-4 login-form-wrapper">
			<div class="row login-form-heading">
				<img src="<?= URL ?>public/images/login-logo.png" class="login-logo">
			</div>
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<form method="post" action="<?= URL ?>admin_login">
						<p><input type="text" name="username" class="form-control" placeholder="Username"></p>
						<p><input type="password" name="password" class="form-control" placeholder="Password"></p>
						<p><input type="submit" class="btn btn-primary" value = "Login"></p>
					</form>
				</div>
				<div class="col-md-1"></div>
			</div>
		</div>
		<div class="col-md-4"></div>
	</div>
	

</div>