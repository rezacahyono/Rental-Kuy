<nav class="navbar navbar-expand-md fixed-top">
    <div class="container-md">
        <a class="navbar-brand" href="/">Rental Kuy</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('merks*') ? 'active text-white' : '' }}" href="/merks">Merk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('cars*') ? 'active text-white' : '' }}" href="/cars">Car</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
