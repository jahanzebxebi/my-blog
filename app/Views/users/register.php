<?php
	// if (condition) {
	// 	# code...
	// }
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url() ?>/img/favicon.ico">

    <title>News Blog | Register</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/floating-labels/">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url() ?>/css/bootstrap.min.css" rel="stylesheet">
	
	<link href="floating-labels.scss" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!-- <link href="docs/dis/css/floating-labels.css" rel="stylesheet"> -->
	<style>
		.box{
			box-shadow:
			  0 2.8px 2.2px rgba(0, 0, 0, 0.034),
			  0 6.7px 5.3px rgba(0, 0, 0, 0.048),
			  0 12.5px 10px rgba(0, 0, 0, 0.06),
			  0 22.3px 17.9px rgba(0, 0, 0, 0.072),
			  0 41.8px 33.4px rgba(0, 0, 0, 0.086),
			  0 100px 80px rgba(0, 0, 0, 0.12)
			;

			  
			  
			 <!-- min-height: 200px;
			  width: 50vw;
			  margin: 100px auto;
			  background: white;
			  border-radius: 5px; -->
		}
		body{
			background: #EEF2F7;
		}
	</style>
  </head>

  <body style="overflow-x: hidden; overflow-y: scroll;">
	<div class="row">
		<div class="col-sm-2">
		</div>
		<div class="col-sm-8">
			
			<h2 class="display-2" style="text-align: center;">Register</h2>
			
			<!-- style="border: 1px solid #000; border-radius: 25px; border-shadow: padding: 50px 80px 50px 80px; margin: 20px 60px 20px 60px;" -->
			<div class="box" style="border-radius: 15px; margin-top: 40px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); padding: 50px 80px 50px 80px;">
				<p>Hover over the <a class="badge badge-secondary" style="color: #fff;" data-toggle="tooltip">?</a> to see the requirements for each field before submitting the form!</p>
				<?php if(isset($validation)): ?>
				  <!-- <br> -->
				  <div class="row">
				  	<div class="col-md-12">
						<div class="alert alert-danger" role="alert">
							<?= $validation->listErrors() ?>
						</div>
					</div>
				  </div>
				  <?php endif; ?>
				<form action="<?php echo base_url() ?>/users/register" method="post">
				  <div class="form-row">
					<div class="form-group col-md-6">
					  <label for="firstname">First Name</label> <a class="badge badge-secondary" style="color: #fff;" data-toggle="tooltip" data-placement="right" title="Must be letters">?</a>
					  <input type="text" class="form-control" id="firstname" name="firstname" required="true" placeholder="First Name"  value="<?= set_value('firstname') ?>">
					</div>
					<div class="form-group col-md-6">
					  <label for="lastname">Last Name</label> <a class="badge badge-secondary" style="color: #fff;" data-toggle="tooltip" data-placement="right" title="Must be letters">?</a>
					  <input type="text" class="form-control" id="lastname" name="lastname" required="true" placeholder="Last Name" value="<?= set_value('lastname') ?>">
					</div>
				  </div>
				  <div class="form-row">
					<div class="form-group col-md-6">
					  <label for="username">Username</label> <a class="badge badge-secondary" style="color: #fff;" data-toggle="tooltip" data-placement="right" title="Can only be letters and number and must be greater than five">?</a>
					  <input type="text" class="form-control" id="username" name="username" required="true" placeholder="Username" value="<?= set_value('username') ?>">
					</div>
					<div class="form-group col-md-6">
					  <label for="email">Email</label> <a class="badge badge-secondary" style="color: #fff;" data-toggle="tooltip" data-placement="right" title="Must be a valid email address!">?</a>
					  <input type="email" class="form-control" id="email" name="email" required="true" placeholder="example@mail.com" value="<?= set_value('email') ?>">
					</div>
				  </div>
				  <div class="form-row">
					<div class="form-group col-md-6">
					  <label for="password">Password</label> <a class="badge badge-secondary" style="color: #fff;" data-toggle="tooltip" data-placement="right" title="Must contain 8 letter, number and special characters or more!">?</a>
					  <input type="password" class="form-control" id="password" name="password" required="true" placeholder="Password">
					</div>
					<div class="form-group col-md-6">
					  <label for="confirm_password">Confirm Password</label> <a class="badge badge-secondary" style="color: #fff;" data-toggle="tooltip" data-placement="right" title="Must be same as Password field">?</a>
					  <input type="password" class="form-control" id="confirm_password" name="confirm_password" required="true" placeholder="Password">
					</div>
				  </div>
				  <!-- <div class="form-group">
					<label for="email">Email</label> <a class="badge badge-secondary" style="color: #fff;" data-toggle="tooltip" data-placement="right" title="Must be a valid email address!">?</a>
					<input type="email" class="form-control" id="email" name="email" required="true" placeholder="example@mail.com">
				  </div>
				  <div class="form-group">
					<label for="phone">Phone</label> <a class="badge badge-secondary" style="color: #fff;" data-toggle="tooltip" data-placement="right" title="Must be a valid email address!">?</a>
					<input type="number" class="form-control" id="phone" name="phone" required="true" placeholder="92 123 1234567">
				  </div> -->
				  <div class="form-group">
					<label for="phone">Phone</label> <a class="badge badge-secondary" style="color: #fff;" data-toggle="tooltip" data-placement="right" title="Must be a valid email address!">?</a>
					<input type="number" class="form-control" id="phone" name="phone" required="true" placeholder="92 123 1234567" value="<?= set_value('phone') ?>">
				  </div>
				  <div class="form-group">
					<label for="address">Address</label>
					<input type="text" class="form-control" id="address" name="address" required="true" placeholder="Apartment, studio, or floor" value="<?= set_value('address') ?>">
				  </div>
				  <div class="float-right">
				  <button type="reset" class="btn btn-danger">Cancel</button>
				  <button type="submit" class="btn btn-primary">Sign Up</button>
				  </div>
				  Already have an account? <a href="<?php echo base_url() ?>/Login">Login</a>
				  <br><br>
				  <p style="text-align: center;">Or you wanna go to the Home Page? <a href="<?php echo base_url() ?>">Home</a></p>
				</form>

			</div>
		</div>
		<div class="col-sm-2">
		</div>
	</div>
  </body>
</html>