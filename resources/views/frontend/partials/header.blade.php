<nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container-fluid d-flex justify-content-between">
        <a class="navbar-brand d-flex align-items-center poppins" href="{{URL::to('/')}}">
            <img id="imageLogo" src="{{ asset('images/smarthome/logo-new.png') }}" class="lazy img-fluid logo" alt="logo">
        </a>
        <button class="navbar-toggler x" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{URL::to('/')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/solution-ges')}}">Solutions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/about-us')}}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/')}}">Our Works</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/contact-us')}}">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
