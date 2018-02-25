<!DOCTYPE html>
<html>
<head>
	<title>TEST</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/websitecss.css">

	<link href="https://fonts.googleapis.com/css?family=Poiret+One|Raleway" rel="stylesheet">
</head>
<body>

<div id="welcome_div">
	<h1><a class="nav-link" id="welcome" href="?PageName=home">Gallery</a></h1>
</div>

<nav class="navbar navbar-expand-md navbar-light">
	<div class="container-fluid" id="navcontainer">
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item" id="navbuttons">
	        <a class="nav-link" href="/">Home</a>
	      </li>
	      <li class="nav-item" id="navbuttons">
	        <a class="nav-link" href="/showroom">Showroom</a>
	      </li>
	      <li class="nav-item" id="navbuttons">
	        <a class="nav-link" href="/contact">Contact Us</a>
	      </li>
	    </ul>
	    <div>
	    	<ul class="navbar-nav mr-auto">
	    		<li class="nav-item position_right" id="navbuttons">
	        		<a class="nav-link" href="staff">Staff</a>
	      		</li>
	  	  </ul>
		</div>
	  </div>
	</div>
</nav>

<div id="content">
	@yield('content')
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>