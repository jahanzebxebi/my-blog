<?php
	// if (condition) {
	// 	# code...
	// }
?>

<main role="main" class="myBox col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
		<h1 class="h2">Edit Profile</h1>
	</div>
	<div class="">
		<!-- <h2 class="h3"><?= 'Welcome, ' . session()->get('firstname') . ' ' . session()->get('lastname') ?></h2> -->
		<br>
		<h4 style="font-weight: 300;">These are your information stored in the database. You can edit them if you want!</h4>
		<div class="box" style="border-radius: 15px; margin-top: 40px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); padding: 30px 50px 20px 50px;">
			<h2 style="text-align: center; font-weight: 400;"><?= session()->get('firstname') . ' ' . session()->get('lastname') ?></h2><br>
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
			<?php $id = session()->get('id'); ?>
			<form action="<?php echo base_url() ?>/users/update/<?= $id ?>" method="post">
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="firstname">First Name</label> <a class="badge badge-secondary" style="color: #fff;" data-toggle="tooltip" data-placement="right" title="Must be letters">?</a>
						<input type="text" class="form-control" id="firstname" name="firstname" required="true" placeholder="First Name"  value="<?= session()->get('firstname') ?>">
					</div>
					<div class="form-group col-md-6">
						<label for="lastname">Last Name</label> <a class="badge badge-secondary" style="color: #fff;" data-toggle="tooltip" data-placement="right" title="Must be letters">?</a>
						<input type="text" class="form-control" id="lastname" name="lastname" required="true" placeholder="Last Name" value="<?= session()->get('lastname') ?>">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="username">Username</label> <a class="badge badge-secondary" style="color: #fff;" data-toggle="tooltip" data-placement="right" title="Can only be letters and number and must be greater than five">?</a>
						<input type="text" class="form-control" id="username" name="username" readonly="true" placeholder="Username" value="<?= session()->get('username') ?>">
					</div>
					<div class="form-group col-md-6">
						<label for="email">Email</label> <a class="badge badge-secondary" style="color: #fff;" data-toggle="tooltip" data-placement="right" title="You can not update your email address!">?</a>
						<input type="email" class="form-control" id="email" name="email" readonly="true" placeholder="example@mail.com" value="<?= session()->get('email') ?>">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="password">Password</label> <a class="badge badge-secondary" style="color: #fff;" data-toggle="tooltip" data-placement="right" title="Must contain 8 letter, number and special characters or more!">?</a>
						<input type="password" class="form-control" id="password" name="password" required="true" placeholder="Password">
					</div>
					<div class="form-group col-md-6">
						<label for="confirm_password">Confirm Password</label> <a class="badge badge-secondary" style="color: #fff;" data-toggle="tooltip" data-placement="right" title="Must be same as Password field">?</a>
						<input type="password" class="form-control" id="confirm_password" required="true" name="confirm_password" placeholder="Password">
					</div>
				</div>
				<div class="form-group">
					<label for="phone">Phone</label> <a class="badge badge-secondary" style="color: #fff;" data-toggle="tooltip" data-placement="right" title="Must be a valid email address!">?</a>
					<input type="number" class="form-control" id="phone" name="phone" required="true" placeholder="92 123 1234567" value="<?= session()->get('phone') ?>">
				</div>
				<div class="form-group">
					<label for="address">Address</label>
					<textarea class="form-control" id="address" name="address" required="true" rows="5" placeholder="Apartment, studio, or floor"><?= session()->get('address') ?></textarea>
				</div>
				<div class="float-right">
					<a type="button" href="/users/profile" class="btn btn-danger">Back</a>
					<button type="submit" class="btn btn-primary">Update</button>
				</div>
				<!-- Already have an account? <a href="/users/login">Login</a> -->
				<br><br>
				<!-- <p style="text-align: center;">Or you wanna go to the Home Page? <a href="/">Home</a></p> -->
			</form>
		</div>
	</div>
</main>