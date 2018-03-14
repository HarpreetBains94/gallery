<!--Navbar-->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark elegant-color-dark">

    <!-- Navbar brand -->
    <a class="navbar-brand" href="/">The Snow Hill Gallery</a>

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
                <a class="nav-link" href="/logout">Log Out
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/">Home
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/showroom">Showroom</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/events">Events</a>
            </li>

            <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">IMS</a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                    <h6 class="dropdown-header">Art</h6>
                    <a class="dropdown-item" href="/ims/art/add">Add art</a>
                    <a class="dropdown-item" href="/ims/art/edit">Edit/Remove art</a>
                    <div class="dropdown-divider"></div>
                    <h6 class="dropdown-header">Artists</h6>
                    <a class="dropdown-item" href="/ims/artist/add">Add artist</a>
                    <a class="dropdown-item" href="/ims/artist/edit">Edit/Remove artist</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CMS</a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                    <h6 class="dropdown-header">Events</h6>
                    <a class="dropdown-item" href="/cms/event/add">Add event</a>
                    <a class="dropdown-item" href="#">Edit/Remove remove</a>
                    <div class="dropdown-divider"></div>
                    <h6 class="dropdown-header">Front Banner</h6>
                    <a class="dropdown-item" href="/cms/banner/edit">Edit banner</a>
                </div>
            </li>

        </ul>
        <!-- Links -->
    </div>
    <!-- Collapsible content -->

</nav>
<!--/.Navbar-->