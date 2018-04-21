<!-- <nav class="navbar navbar-expand-md navbar-light">
	<a class="navbar-brand" href="/">Snow Hill Gallery</a>
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
	        		<a class="nav-link" href="/staff">Staff</a>
	      		</li>
	      		@auth
		      		<li>
		      			<a class="nav-link" href="{{ url('/logout') }}">logout</a>
		      		</li>
	      		@endauth
	  	  </ul>
		</div>
	  </div>
	</div>
</nav> -->
{{ Request::is('/')? 'active':'' }}
<!--Navbar-->
<nav class="navbar fixed-top navbar-expand-lg navbar-light grey lighten-2">

    <!-- Navbar brand -->
    <a class="navbar-brand" href="/">
    	<img src="\storage\media\snow-hill-logo-black-transparant.png" height="20" width="30">
    	The Snow Hill Gallery
	</a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/showroom/page=1">Showroom</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/events/page=1">Events</a>
            </li>

            <!-- Dropdown -->

        </ul>
        <!-- Links -->
    </div>
    <!-- Collapsible content -->

</nav>
<!--/.Navbar-->