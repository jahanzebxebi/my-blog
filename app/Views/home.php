<?php
	// if (condition) {
	// 	# code...
	// }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.ico">

    <title>Carousel Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/carousel/">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">

	<script src="https://use.fontawesome.com/4b467152b4.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
  </head>
  <body>

    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="index.html">NEWS BLOG</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
          </ul>
          <!-- <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form> -->
        <?php if(session()->get('isLoggedIn')): ?>
          <li class="nav-item dropdown">
            <a style="margin-top: -25px; color: #fff;" class="nav-link dropdown-toggle" href="#" id="myDropdown" role="button" data-toggle="dropdown" aria-expanded="false"><?= session()->get('firstname') ?></a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="myDropdown">
              <li><a class="dropdown-item" href="<?php echo base_url() ?>/Dashboard">Dashboard</a></li>
              <li><a class="dropdown-item" href="/users/logout">Logout</a></li>
            </ul>
          </li>
        <?php else: ?>
		      <a class="nav-link" href="<?php echo base_url() ?>/Login" style="color: #fff;"><i class="fa fa-user"></i> Login</a>
		      <a class="nav-link" href="<?php echo base_url() ?>/Register" style="color: #fff;"><i class="fa fa-user-plus"></i> Register</a>
        <?php endif; ?>
        </div>
      </nav>
    </header>

    <main role="main">

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="second-slide" src="img/slider.jpg" style="opacity: 0.4;" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1 class="display-3">Welcome to News Blog</h1>
                <p class="display-3">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>


      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">


        <!-- START THE FEATURETTES -->

        <!-- <hr class="featurette-divider"> -->
        <h3 class="display-4 float-center" style="text-align: center; margin-top: -40px;">Recent News</h3><br>
        <div class="row featurette">
          <div class="row">
          <?php foreach(array_reverse($posts) as $post): ?>
            <div class="col-sm-3">
            <div class="card">
              <img class="card-image-top" height="150" src="uploads/<?= $post['image']?>" alt="Post Image">  
              <div class="card-body">
                <h5 class="card-title"><?= implode(' ', array_slice(explode(' ', $post['title']), 0, 4)) . '...' ?></h5>
                <p class="card-text"><?= implode(' ', array_slice(explode(' ', $post['body']), 0, 8)) . '...' ?></p>
                <hr>
                <p class="card-text"><small class="text-muted">Created at: <?= $post['created_at'] ?></small></p>
              </div>
            </div><br>
            </div>
          <?php endforeach; ?>
          </div>
        </div>
        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

      </div><!-- /.container -->


      <!-- FOOTER -->
      <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017-2021  &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/holder.min.js"></script>
  </body>
</html>