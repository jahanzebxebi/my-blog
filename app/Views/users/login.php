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

    <title>News Blog | Login</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/floating-labels/">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url() ?>/css/bootstrap.min.css" rel="stylesheet">
	
	<link href="floating-labels.scss" rel="stylesheet">
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

			  
			  
			  min-height: 200px;
			  width: 50vw;
			  margin: 100px auto;
			  background: white;
			  border-radius: 5px;
		}
		body{
			background: #EEF2F7;
		}
	</style>
  </head>

  <body style="overflow-x: hidden; overflow-y: scroll;">
	<div class="row">
		<div class="col-sm-3">
		</div>
		<div class="col-sm-6">
			<br>
			<h2 class="display-2" style="text-align: center;">Login</h2>
			
			<!-- style="border: 1px solid #000; border-radius: 25px; border-shadow: padding: 50px 80px 50px 80px; margin: 20px 60px 20px 60px;" -->
			<div class="box" style="border-radius: 15px; margin-top: 40px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); padding: 50px 80px 50px 80px;">
			<?php if(session()->get('success')): ?>
				<div class="alert alert-success" role="alert">
					<?= session()->get('success') ?>
				</div>
			<?php endif; ?>
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
			<form method="post" action="<?php echo base_url() ?>/Login">
			  <div class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter Email" value="<?= set_value('email') ?>">
				<small id="emailHelp" class="form-text text-muted">We'll never share your personal information with anyone else.</small>
			  </div>
			  <div class="form-group">
				<label for="password">Password</label>
				<input type="password" class="form-control" id="password" name="password" placeholder="Password">
			  </div>
			  <div class="form-check">
				<input type="checkbox" class="form-check-input" id="exampleCheck1">
				<label class="form-check-label" for="exampleCheck1">Remember me</label>
			  </div>
			  <br>
			  <div class="float-right">
			  <a href="<?php echo base_url() ?>" type="submit" class="btn btn-warning">&#8592;Back to Home</a>
			  <button type="submit" name="submit" class="btn btn-primary">Login</button>
			  </div>
			  Nes User, want to register? <a href="<?php echo base_url() ?>/Register">Register</a>
			</form>
			</div>
		</div>
		<div class="col-sm-3">
		</div>
	</div>
  </body>
</html>