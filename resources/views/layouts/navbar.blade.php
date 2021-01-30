<nav id="navbar" class="navbar navbar-expand-lg navbar-dark sticky-top">
    <a href="{{ route('home') }}" class="navbar-brand"><img class="retroLogo" src="/images/retro2.png"
            alt="retro2">KENT-TECHIE</a>
    <!-- burger -->
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbar-nav">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div id="navbar-nav" class="collapse navbar-collapse">
        <ol class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="home.html" class="nav-link">Home</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Browse Category</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('desktop') }}">Desktop</a>
                    <a class="dropdown-item" href="#laptop">Laptop</a>
                    <a class="dropdown-item" href="#console">Console</a>
                    <a class="dropdown-item" href="#games">Games</a>
                </div>
            </li>
            <li class="nav-item"><a href="about.html" class="nav-link">About Us</a></li>
            <li class="nav-item"><a href="contacts.html" class="nav-link">Contact Us</a></li>
        </ol>
    </div>
</nav>