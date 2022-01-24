<!-- index1.php -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    
    <title>jass supermarket</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Jass Supermarket</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index1.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index2.php">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact us</a>
      </li>
      
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="pic1.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Welcome to our store</h3>
        <p>All things available here</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="pic2.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Welcome to our store</h3>
        <p>All things available here</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="pic4.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Welcome to our store</h3>
        <p>All things available here</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<section class="my-4">
    <div>
        <h3 class="text-center">
            login here
        </h3>
    </div>
</section>
<section class="my-5">
  <div>
      <div class="w-50 m-auto">
      <form action="userinfo.php" method="post">
          <div class ="form-group">
              <label> Username </label>
              <input type="text" name="user" autocomplete="off" class="form-control">
          </div>
          <div class ="form-group">
              <label> Email-Id </label>
              <input type="text" name="email" autocomplete="off" class="form-control">
          </div>
          <div class ="form-group">
              <label> Mobile </label>
              <input type="text" name="mobile" autocomplete="off" class="form-control">
          </div>
          <div class ="form-group">
        <button type ="submit" class="btn btn-success">submit</button>
              
          </div>



</form>
</div>

</section>
<footer>
  <p class="p-3 bg-dark text-white text-center"> @jasssupermarket  contact us   6785432890, 7891234087</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>