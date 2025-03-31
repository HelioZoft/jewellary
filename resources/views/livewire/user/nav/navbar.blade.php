<nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
    <a href="index.html" class="navbar-brand p-0">
        <h1 class="m-0"><i class="fa fa-user-tie me-2"></i>igroups</h1>
        {{-- <img src="{{asset('user/img/ilogo.png')}}" alt=""> --}}
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="{{route('userhome')}}" class="nav-item nav-link active">Home</a>
            <a href="{{route('about')}}" class="nav-item nav-link">About</a>
            <a href="{{route('service')}}" class="nav-item nav-link">Services</a>
            <a href="{{route('events')}}" class="nav-item nav-link">Event</a>
            <a href="#" class="nav-item nav-link">Career</a>
            <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
        </div>
        {{-- <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton> --}}
        {{-- <a href="https://htmlcodex.com/startup-company-website-template" class="btn btn-primary py-2 px-4 ms-3">Download Pro Version</a> --}}
    </div>
</nav>
