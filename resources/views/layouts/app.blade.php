<!DOCTYPE html>
<html>
<head>
	<title>TEST</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" href="{{ URL::asset('css/websitecss.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
	<link rel="stylesheet" type="text/css" href="css/websitecss.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">

	<link href="https://fonts.googleapis.com/css?family=Poiret+One|Raleway" rel="stylesheet">

	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
 	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>

<div id="welcome_div">
	<h1><a class="nav-link" id="welcome" href="\">Gallery</a></h1>
</div>

@include('components.navbar')

<div id="content">
	@yield('content')
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>



<script>
	$(function(){
    $("#datepicker").datepicker({ dateFormat: 'yy-mm-dd' });
	});


</script>
</body>
</html>