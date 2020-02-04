<html lang="en">
<head>
  <title>Online Examination system</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link type="text/css" rel="stylesheet" href="css/mystyle.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
   <!--------------------------------Font Awesome--------------------------->
     <script src="https://kit.fontawesome.com/cf00266bc2.js"></script>
</head>
<body class="bg-success">

<!---------Upper bar-------------------------->
<div class="upper-bar ">
    <div class="container">
        <div class="row">
            <div class="col-sm"><span>Info@niralawebsolution.com </span>
                +91 9631260044
            </div>
            
          
        </div>
    </div>
</div>
<!------------------end of upper bar------->

<nav class="navbar navbar bg-danger">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Online Quiz System</a>
    </div>
	   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" >
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="main-nav">
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Service</a></li>
	  <li><a href="#">Contact</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="SignUp.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="SignIn.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
<!----------------------end of navigation menu----------------------->
<br clear="all">
<div class="container ">
<div class="col-md-6">
<img src="img/Quiz.jpg" width="100%;">
</div>
 <div class= "row">
  <div class= "col-sm-6">
  <div class="panel panel-primary">
    <div class="panel-heading">SignIn form</div>
	<div class= "panel-body">
	<?php
						if(isset($_GET['run'])  && $_GET['run']=="failed")
						{
							echo "Your email or password is not correct";
						}
						
						
						?>
  <form role="form" action="signin_sub.php" method="post">
								<div class="form-group">
								  <label for="email">Email:</label>
								  <input type="email" class="form-control" name="e" id="email" placeholder="Enter email">
								</div>
								<div class="form-group">
								  <label for="pwd">Password:</label>
								  <input type="password" class="form-control" name="p" id="pwd" placeholder="Enter password">
								</div>
								<button type="submit" class="btn btn-default">Submit</button>
							  </form>
						  </div>
						  </div>
					  </div>
	</div>
	</div>
	<br></br></br></br>
 <!---------------start footer------------->
<footer>
<div class="footer">
  <div class="container">
    <div class="row">
    <div class="col-md-4">
 <h2 class="text-white">Online Quiz System</h2>
 <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, quod illum voluptatum eligendi nulla officiis rem,
    nihil itaque rerum culpa tenetur quae maiores perspiciatis expedita officia distinctio. Pariatur, a facilis!</p>

    </div>
  
<div class="col-md-4">
  <h3 class="text-white">Services</h3>
  <ul>
    <li>Web Design</li><hr>
    <li>Web Development</li><hr>
    <li>Social Media Marketting</li><hr>
    <li>Google Adword</li>
    </ul>
</div>
<div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
    <h3 class="text-white">Contact Info</h3>
    <ul>
      <li><i class="fa fa-home fa-2x"></i> Office # 22, Delhi 11001</li><hr>
      <li><i class="fa fa-phone fa-2x"></i> +91  9631260044</li><hr>
      <li><i class="fa fa-envelope fa-2x"></i> info@domain.net</li>
    </ul>
  </div>


</div>
  </div>
</div>


</footer>

<div class="sub-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-6">&copy; 2019 Online Examination System All right reserved </div>
      <div class="col-md-6">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Portfolio</a></li>
          <li><a href="#">Contact</a></li>

        </ul>
      </div>
      
    </div>
    <div class="pull-right">
        <a href="index.html" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
      </div>
  </div>
</div>




<!--------javascript file------------->
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>

 <!---------------Javascript-------------------------->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


 <script>
    wow = new WOW(
     {
    
      }	) 
      .init();
    </script>

</body>
</html>
