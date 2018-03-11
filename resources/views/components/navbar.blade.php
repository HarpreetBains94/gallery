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
</nav>