<?php
	// if (condition) {
	// 	# code...
	// }
?>

<main role="main" class="myBox col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
		<h1 class="h2">Posts</h1>
	</div>
	<div class="container mt-4">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h5>
							Add Post
							<a href="<?php echo base_url() ?>/Posts" class="btn btn-danger btn-sm float-right">Back</a>
						</h5>
					</div>
					<div class="card-body">
						<form action="/posts/store" method="POST" enctype="multipart/form-data">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group mb-2">
										<label for="title">Post Title</label>
										<input type="text" name="title" id="title" class="form-control" required="true" placeholder="Enter Post Title Here">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group mb-2">
										<label for="image">Post Image</label>
										<input type="file" name="image" id="image" class="form-control" placeholder="Upload Post Image Here">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group mb-2">
										<label for="body">Post Body</label>
										<textarea name="body" id="body" class="form-control" required="true" placeholder="Enter Post Body Here" rows="5"></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<hr>
									<div class="float-right">
										<button type="reset" style="color: #fff;" class="btn btn-warning px-4">Clear</button>
										<button type="submit" name="submit" class="btn btn-success px-4">Save</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br><br><br>
</main>