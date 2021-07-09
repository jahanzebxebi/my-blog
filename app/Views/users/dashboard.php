<?php
	$userId = session()->id;
	$firstname = session()->firstname;
?>
<main role="main" class="myBox col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
		<h1 class="h2">Dashboard</h1>
	</div>
	<div class="">
		<h2 class="h3"><?= 'Welcome, ' . session()->get('firstname') . ' ' . session()->get('lastname') ?></h2>
		<br>
		<h4 style="font-weight: 400;">All the post associated with each user will be displayed here!</h4>
		<div class="box" style="border-radius: 15px; margin-top: 40px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); padding: 10px 15px 10px 15px; height: 200px;">
			<h4>heading</h4>
			<p><?= 'This is user id: ' . $userId ?></p>
			<p><?= 'This is user Firstname: ' . $firstname ?></p>
		</div>
	</div>
</main>
<?php
	// if (condition) {
	// 	# code...
	// }
?>