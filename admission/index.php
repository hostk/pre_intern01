<!DOCTYPE html>
<html>
<head>
<title> University Admission Systm</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body class="d-flex flex-column">
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-primary navbar-custom fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="img/oxford.png" width="20%"></a>
    </div>
    <div class="navbar-collapse collapse">

        <ul  id="top-menu" class="nav navbar-nav navbar-right ">
			<li><a href="index.php" class="navbar-text">Home</a></li>
		    <li><a href="index.php" class="navbar-text">Online Application</a></li>
            <li><a href="login.php" class="navbar-text">Login</a></li>
		</ul>
			
    </div>
  </div>
</nav>
<div class="container pt-0">
    <div id="myCarousel" class="carousel slide" data-interval="300" data-ride="carousel">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner">
            <div class="carousel-item active" >
                <img src="img/oxbanner.jpg"  id="imageslider">
                
            </div>
            <div class="carousel-item">
                <img src="img/oxbanner.jpg" id="imageslider">
                
            </div>
            <div class="carousel-item">
                <img src="img/oxbanner.jpg" id="imageslider">
                
            </div>
        </div>
        <!-- Carousel controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

</header>
<div class="container " id="maincontent">
    
    <div class="row " style="text-align:center">
        <h1 style="padding:10px">Please Select Your Program</h1>
        <div class="col-sm-6"><a href="application.php">
		<div class="category">
			<img src="/img/student.jpg" width="100%" height="200px" class="rounded"/><br /><br />
			<h4>Undergraduate Program</h2>
    </div>
	    </a></div>
        <div class=" col-sm-6"><a href="/siit/index.php/component/siit_admission_system/?controller=registration_form&Itemid=448">
		<div class="category">
			<img src="/img/graduate.jpg" width="100%" height="200px"/><br /><br />
			<h4>Graduate Program</h2>
        </div>
	    </a></div>

      

        
    </div>
</div>
<br><br>
<footer id="sticky-footer" class="py-4 bg-dark text-white-50">
    <div class="container-fluid text-center bg-primary">
      <small>Copyright &copy; Your Website</small>
    </div>
  </footer>
</body>
</html>