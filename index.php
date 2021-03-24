<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-dark">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">ASP ENTERPRISES</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="serviceandrepair.php">Service and Repair</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="installationanduninstallation.php">Installation and Uninstallation</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="sales.php">Sales</a>
      </li>
    </ul>
  </div>
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
    <li data-target="#demo" data-slide-to="4"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="wsimage\pic5.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Perfection</h3>
      </div>   
</div>
    <div class="carousel-item">
      <img src="wsimage\pic1.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Best Servicing</h3>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="wsimage\pic4 " alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Perfect Installation</h3>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="wsimage\pic2" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Best Products for sale</h3>
        
      </div>   
      </div>
    <div class="carousel-item">
      <img src="wsimage\pic3.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Repairing</h3>
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


 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <section class="my-5">
  <div>
    <h2 class="text-center" style="color:white; font-family:'Courier New', Courier, monospace">About us</h2>
  </div>
  <div class="container-fluid">
    <div class="row" >
      <div class="col-lg-6 col-md-6 col-12">
        <img src ="wsimage\picat.jpg" class="img-fluid aboutimg">
      </div>
      <div class="col-lg-6 col-md-6 col-12">
        <h2 class="display-4" style="color:white">We are ASP Enterprises</h2>
        <p class="py-3" style="color:white; font-family:'Courier New', Courier, monospace">We as a motivated and highly expirenced team furnish our customers
          with the services of Servicing, Installation, Uninstallation, Repairing
          and Sales of air conditioners at very resonable price with valuing time
          the most.
        </p>
        <a href="about.php" class="btn btn-success"> KNOW MORE </a> 
      </div>
    </div>
  </div>
</section>
<section class="my-5">
  <div>
    <h2 class="text-center" style="color:white; font-family:'Courier New', Courier, monospace">Our Services</h2>
  </div>
  <div class="container-fluid">
    <div class="row" >
      <div class="col-lg-4 col-md-4 col-12  text-center">
        <a href="serviceandrepair.php" class="btn btn-success">SERVICE AND REPAIR</a>
      </div>
      <div class="col-lg-4 col-md-4 col-12 text-center">
        <a href="Installationanduninstallation.php" class="btn btn-success">INSTALLATION AND UNINSTALLATION</a>
      </div>
      <div class="col-lg-4 col-md-4 col-12  text-center">
        <a href="sales.php" class="btn btn-success">SALES</a>
      </div>
      </div>
    </div>
</section>
<section id="form_section" class="my-5">
<div class="w-50 m-auto" style="color:white; font-family:'Courier New', Courier, monospace">
  <form action="userinfo.php" method="post">
<div class="form-group">
  <label>YOUR NAME</label>
  <input type="text" name="name" autocomplete="off" class="form-control">
</div>
<div class="form-group">
  <label>YOUR PHONE NO</label>
  <input type="tel" pattern = "[0-9]{10}" name="number" autocomplete="off" class="form-control">
</div>
<div class="form-group">
  <label>YOUR ADDRESS</label>
  <input type="text" name="address" autocomplete="off" class="form-control">
</div>
<div class="form-group">
  <label>YOUR NEED</label>
  <input type="text" name="need" autocomplete="off" class="form-control" placeholder="SERVICING or REPAIRING or INSTALLATION/UNINSTALLATION or YOU WANT TO BUY">
</div>
<div class="form-group">
  <label>WHAT SHOULD WE DO</label>
  <textarea class="form-control" name="feedback">
  </textarea>
</div>
<div>
  <button type="submit" name="submit" class="btn btn-success">Submit</button>
</div>
</form>
</div>
</section>
</body>
</html>