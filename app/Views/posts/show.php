<?php
	// if (condition) {
	// 	# code...
	// }
?>
<main role="main" class="myBox col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
		<h1 class="h2">All Posts</h1>
	</div>
	<div class="container mt-4">
		<?php if(session()->get('success')): ?>
			<div class="alert alert-success" role="alert">
				<?= session()->get('success') ?>
			</div>
		<?php endif; ?>
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h5>
							All Posts
							<a href="<?php echo base_url() ?>/Post-Create" class="btn btn-primary btn-sm float-right">Add New Post</a>
						</h5>
					</div>
					<div class="card-body">
						<?php if ( $posts == null ){ ?>
							<h5 style="font-weight: 300;">You don't have any post yet!</h5>
						<?php } else { ?>
						<table class="table table-hover">
							<thead>
								<tr>
									<th scope="col">Post Id</th>
									<th scope="col">Title</th>
									<th scope="col">Body</th>
									<th scope="col">Image</th>
									<th scope="col">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php //$userId = session()->get('id'); ?>
								<?php //$query = "SELECT * FROM posts WHERE user_id == $userId"; ?>
								<?php foreach($posts as $post): ?>
								<tr>

									<th scope="row"><?= $post['id'] ?></th>
									<!-- the function below gets a string as input and return the output string as specified as offset like the string from the word at 0 index to the word at index 3 -->
									<td><?= implode(' ', array_slice(explode(' ', $post['title']), 0, 3)) . '...' ?></td>
									<td><?= implode(' ', array_slice(explode(' ', $post['body']), 0, 5)) . '...' ?></td>
									<td>
										<img src="<?php echo base_url() ?>/uploads/<?= $post['image'] ?>" width="90" height="35" alt="Post Image">
									</td>
									<td>
										<a class="btn btn-success btn-sm" href="">Edit</a>
										<a class="btn btn-danger btn-sm" href="">Delete</a>
									</td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br><br><br>
</main>