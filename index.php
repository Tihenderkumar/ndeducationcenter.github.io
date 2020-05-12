<!DOCTYPE html>
<html>
	<head>
	<title>N.D.Education Center</title><link rel="shortcut icon" href="images/logo1.ico" type="image/x-icon">
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

     
 	<body>
	<header>
	<?php include 'menu.php'; ?>
	<?php include 'carousel.php'; ?>
</header>
<section class="py-5"> 
	<?php include 'aboutus.php'; ?>
</section>
<select>
	<div class="col-sm-6">
		<a href="aboutus.php"></a>
		<div class="php-button">
			<div class="phn-bttn-inner">
				<img src="images/download.png" alt="call now">
			</div>
		</div>
	</div>
</select>
<section>
	<?php include 'service.php' ;?>
</section>
<section class="bg-primary">
	<article class="py-5 text-center text-white">
		<div>
			<h3 class="display-4">+91-9718214314, 011-22351543</h3>
			<p>If you want best Educational Coaching Service call us now.</p>
			<button class="btn btn-warning">Contact Us.</button>
		</div>
	</article>
</section>
<section>
	<?php include 'Gallery.php' ;?>
</section>
<section class="bg-primary">
	<article class="py-5 ">
		<div class="text-center ">
			<h3 class="display-4 text-white ">Want To Join Now</h3>
			<p class="text-white">Be b Part of Thapa Fmaily</p>
			<button class="btn btn-warning" data-toggle="modal" data-target="#myModal">Join Now</button>
		</div>
		<!-- The Modal -->
	  <div class="modal fade" id="myModal">
	    <div class="modal-dialog modal-dialog-centered">
	      <div class="modal-content">
	      
	        <!-- Modal Header -->
	        <div class="modal-header">
	          <h4 class="modal-title">SingUp Now.</h4>
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	        </div>
	        
	        <!-- Modal body -->
	        <div class="modal-body">
	          <form action="/action_page.php">
				  <div class="form-group">
				    <label for="email">Email address:</label>
				    <input type="email" class="form-control" placeholder="Enter email" id="email autocomplete="off">
				  </div>
				  <div class="form-group">
				    <label for="pwd">Password:</label>
				    <input type="password" class="form-control" placeholder="Enter password" id="pwd">
				  </div>
				  <div class="form-group form-check">
				    <label class="form-check-label">
				      <input class="form-check-input" type="checkbox"> Remember me
				    </label>
				  </div>
				  <button type="submit" class="btn btn-primary">Submit</button>
				</form>
	        </div>
	        
	        <!-- Modal footer -->
	        <div class="modal-footer">
	          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        </div>
	        
	      </div>
	    </div>
	  </div>
  
	</article>
</section>

<section>
	<div class="container mb-5">
	<h1 class="text-center text-capitalize pt-5">Contact Us.</h1>
	<hr class="w-25 mx-auto pt-5">
	<div class="w-50 mx-auto">
		<form action="/action_page.php">
		  <div class="form-group">
		    <label for="email">Your Name:</label>
		    <input type="email" class="form-control" placeholder="Enter Your Name" id="email">
		  </div>
		  <div class="form-group">
		    <label for="pwd">Email:</label>
		    <input type="password" class="form-control" placeholder="Enter Email" id="pwd">
		  </div>
		  <div class="form-group">
		    <label for="pwd">Mobile:</label>
		    <input type="password" class="form-control" placeholder="Enter Mobile" id="pwd">
		  </div>
		  <div class="form-group">
		  	<label>Text Area</label>
		  	<textarea class="form-control"></textarea>
		  </div>

		  <div class="form-group form-check">
		    <label class="form-check-label">
		      <input class="form-check-input" type="checkbox"> Remember me
		    </label>
		  </div>
		  <button type="submit" class="btn btn-primary"><span class="spinner-grow spinner-grow-sm"></span>Submit</button>
		  
		</form>
	</div>
</section>


<footer>
		<?php include 'footer.php'; ?>
</footer>
  
</body>
</head>
</html>