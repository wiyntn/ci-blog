</div>
<br>
<br>
<br>
<br>

<div class="container">
	<div class="login-box">
		<div class="row">
			<div class="col-md-12">
				<center>
					<h2 style="color:blue">User Register & Sign in</h2>
				</center>
			</div>
			<div class="col-md-6 login-left">
				<h2 style="color:black">Login</h2>
				<form action="UserLogin" method="post">
					<?php if ($this->session->flashdata('msg')) : ?>
						<div class="alert <?php echo $this->session->flashdata('clas') ?> alert-dismissible" role="alert">

							<span style="margin-left: 180px">
								<?php echo $this->session->flashdata('message'); ?>
							</span>

						</div>

					<?php endif; ?>

					<div class="form-group">
						<label style="color:black">User Name</label>
						<input type="text" name="user_name" class="form-control" required="">
					</div>
					<div class="form-group">
						<label style="color:black">Password</label>
						<input type="password" name="password" class="form-control" required="">
					</div>
					<button type="submit" class="btn btn-primary">Login As User</button>
				</form>
			</div>
			<div class="col-md-6 login-right">
				<h2 style="color:black">Register Here</h2>
				<?php if ($this->session->flashdata('class')) : ?>
					<div class="alert <?php echo $this->session->flashdata('class') ?> alert-dismissible" role="alert">

						<span style="margin-left: 180px">
							<?php echo $this->session->flashdata('message'); ?>
						</span>

					</div>

				<?php endif; ?>
				<form action="UserRegister" method="post">
					<div class="form-group">
						<div class="form-group">
							<label style="color:black">Name</label>
							<input type="text" name="name" class="form-control" required="">
						</div>

						<label style="color:black">User Name</label>
						<input type="text" name="user_name" class="form-control" required="">
					</div>
					<div class="form-group">
						<label style="color:black">Mobaile Number</label>
						<input type="text" name="mobaile_number" class="form-control" required="">
					</div>
					<div class="form-group">

						<label for="pic">Your Photo</label>
						<input type="file" class="form-control" id="pic" name="pic">

					</div>
					<div class="form-group">
						<label style="color:black">Password</label>
						<input type="password" name="password" class="form-control" required="">
					</div>
					<button type="submit" class="btn btn-primary">Register As User</button>
				</form>
			</div>

		</div>

	</div>
</div>