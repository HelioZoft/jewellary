<nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
    <style>
    .logo-img {
        height: 80px;
        max-width: 100%;
        object-fit: contain;
    }
    </style>
    <a href="{{ route('userhome') }}" class="navbar-brand p-0">
        <img src="{{ asset('user/img/ilogo.png') }}" alt="Logo" class="logo-img">
    </a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      
        <div class="navbar-nav ms-auto py-0">
            <a href="{{ route('userhome') }}" class="nav-item nav-link {{ request()->routeIs('userhome') ? 'active' : '' }}">Home</a>
            <a href="{{ route('about') }}" class="nav-item nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About</a>
            <a href="{{ route('intern') }}" class="nav-item nav-link {{ request()->routeIs('intern') ? 'active' : '' }}">Internship</a>
            <a href="{{ route('events') }}" class="nav-item nav-link {{ request()->routeIs('events') ? 'active' : '' }}">Event</a>
            <a href="{{ route('carrer') }}" class="nav-item nav-link {{ request()->routeIs('carrer') ? 'active' : '' }}">Career</a>
            <a href="{{ route('branch') }}" class="nav-item nav-link {{ request()->routeIs('branch') ? 'active' : '' }}">Branches</a>
            <a href="{{ route('contact') }}" class="nav-item nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
        </div>

        {{-- <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton> --}}
        {{-- <a href="https://htmlcodex.com/startup-company-website-template" class="btn btn-primary py-2 px-4 ms-3">Download Pro Version</a> --}}
    </div>
</nav>
