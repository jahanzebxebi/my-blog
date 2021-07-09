<?php
	// if (condition) {
	// 	# code...
	// }
?>
<main role="main" class="myBox col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2">Profile</h1>
  </div>

  <!-- <canvas class="my-4" id="myChart" width="900" height="380"></canvas> -->
  <!-- <h2 class="h3"><?= 'Welcome, ' . session()->get('firstname') . ' ' . session()->get('lastname') ?></h2> -->
  <!-- <h2 class="h3"><?= session()->get('username') ?></h2>
  <h2 class="h3"><?= session()->get('email') ?></h2>
  <h2 class="h3"><?= session()->get('id') ?></h2>
  <h2 class="h3"><?= session()->get('address') ?></h2>
  <h2 class="h3"><?= '+' . session()->get('phone') ?></h2> -->

  <div class="">
    <div class="box" style="border-radius: 15px; margin-top: 40px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); padding: 10px 15px 10px 15px;">
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
      <!-- <br> -->
      <h4 style="font-weight: 400;">These are your personal information you provided while registering yourself!</h4>
      <br>
        <div class="row">
          <div class="col-sm-4">
            <img class="rounded-circle" width="250" height="250" src="<?php echo base_url() ?>/img/bootstrap-solid.svg">
          </div>
          <div class="col-sm-8">
            <h4 style="font-weight: 300;">Name: <?= session()->get('firstname') . ' ' . session()->get('lastname') ?></h4><hr>
            <h4 style="font-weight: 300;">Email: <?= session()->get('email') ?></h4><hr>
            <h4 style="font-weight: 300;">Username: <?= session()->get('username') ?></h4><hr>
            <h4 style="font-weight: 300;">Phone: +<?= session()->get('phone') ?></h4><hr>
            <h4 style="font-weight: 300;">Address: <?= session()->get('address') ?></h4><hr>

            <br>
            <h5 style="font-weight: 200;">You can edit your information by clicking the Edit button below!</h5><br>
            <a style="float: right;" href="<?php echo base_url() ?>/User-Edit/<?= session()->get('id') ?>" class="btn btn-info">Edit & Update &raquo;</a>
          </div>
        </div>
      </div>
    </div>
  </main>