<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <div id="navbar-nav" class="collapse navbar-collapse">
        <ol class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Sort by:</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('desktop') }}">Best selling</a>
                    <a class="dropdown-item" href="#laptop">Featured</a>
                    <a class="dropdown-item" href="#console">Price - Low to High</a>
                    <a class="dropdown-item" href="#games">Price - High to Low</a>
                    <a class="dropdown-item" href="#games">A -Z</a>
                    <a class="dropdown-item" href="#games">Z - A</a>
                </div>
            </li>
        </ol>
    </div>
    <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
</nav>