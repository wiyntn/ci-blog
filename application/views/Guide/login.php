<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bongo Traveller</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="<?php echo base_url('assets/Admin/Special/images/icons/favicon.ico') ?>"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Admin/Special/vendor/bootstrap/css/bootstrap.min.css') ?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Admin/Special/fonts/font-awesome-4.7.0/css/font-awesome.min.css') ?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Admin/Special/fonts/iconic/css/material-design-iconic-font.min.css') ?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Admin/Special/vendor/animate/animate.css') ?>">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Admin/Special/vendor/css-hamburgers/hamburgers.min.css') ?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Admin/Special/vendor/animsition/css/animsition.min.css') ?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Admin/Special/vendor/select2/select2.min.css') ?>">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Admin/Special/vendor/daterangepicker/daterangepicker.css') ?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Admin/Special/css/util.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Admin/Special/css/main.css') ?>">
<!--===============================================================================================-->
</head>
<body>
  
</div>
<br>



	<div class="container">
		<div class="login-box">
			<div class="row">
				<div class="col-md-12">
					<center>
						<h2 style="color: blue">Guide Sign in</h2>
					</center>
          <br><br>
				</div>
				<div class="col-md-6 login-left">
					<h2 style="color:black">Login</h2>
					<form action="Guide/login" method="post">
						<?php if($this->session->flashdata('msg')): ?>
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
						<button type="submit" class="btn btn-primary" >Login As Guide</button>
					</form>
				</div>
				<div class="col-md-6 login-right">
					<h2 style="color:black">Register Here</h2>
					<?php if($this->session->flashdata('class')): ?>
				    <div class="alert <?php echo $this->session->flashdata('class') ?> alert-dismissible" role="alert">
				      
				  <span style="margin-left: 180px">
				    <?php echo $this->session->flashdata('message'); ?>
				  </span>
				  
				    </div>
				    
				<?php endif; ?>
					<form action="Guide/guideRegistration" method="post">
						<div class="form-group">
							<label style="color:black">Name</label>
							<input type="text" name="name" class="form-control" required="">
						</div>
						<div class="form-group">
							<label style="color:black">Nationality</label>
							<input type="text" name="nationality" class="form-control" required="">
						</div>
						<div class="form-group">
							<label style="color:black">Address</label>
							<input type="text" name="address" class="form-control" required="">
						</div>
						<div class="form-group">
							<label style="color:black">Mobaile Number</label>
							<input type="text" name="mobailenumber" class="form-control" required="">
						</div>
						
						<div class="form-group">
							<label style="color:black">Area Where you want to be guide</label>
							<select class="form-control" id="division" name="area">
        <option>Select Place</option>
        <?php
    foreach($allLocation as $row)
    {
     echo '<option value="'.$row->city_name.'">'.$row->city_name.'</option>';
    }
    ?>
      </select>

						</div>
						<div class="form-group">
							<label style="color:black">User Name</label>
							<input type="text" name="user_name" class="form-control" required="">
						</div>
						<div class="form-group">

    <label for="pic">Your Photo</label>
    <input type="file" class="form-control" id="pic" name="pic">

  </div>
						<div class="form-group">
							<label style="color:black">Password</label>
							<input type="password" name="password" class="form-control" required="">
						</div>
						<button type="submit" class="btn btn-primary">Register As Guide</button>
					</form>
				</div>
				
			</div>
			
		</div>
	</div>
  

  <div id="dropDownSelect1"></div>
  
<!--===============================================================================================-->
  <script src="<?php echo base_url('assets/Admin/Special/vendor/jquery/jquery-3.2.1.min.js') ?>"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url('assets/Admin/Special/vendor/animsition/js/animsition.min.js') ?>"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url('assets/Admin/Special/vendor/bootstrap/js/popper.js') ?>"></script>
  <script src="<?php echo base_url('assets/Admin/Special/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url('assets/Admin/Special/vendor/select2/select2.min.js') ?>"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url('assets/Admin/Special/vendor/daterangepicker/moment.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/Admin/Special/vendor/daterangepicker/daterangepicker.js') ?>"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url('assets/Admin/Special/vendor/countdowntime/countdowntime.js') ?>"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url('assets/Admin/Special/js/main.js') ?>"></script>

</body>
</html>