<div class="sidebar" data-background-color="dark">
  <div class="sidebar-logo">
    <!-- Logo Header -->
    <div class="logo-header" data-background-color="dark">
      <a href="index.html" class="logo">
        <img src="{{asset('user/img/ilogo.png')}}" alt="navbar brand" class="navbar-brand" height="40px" />
      </a>
      <div class="nav-toggle">
        <button class="btn btn-toggle toggle-sidebar">
          <i class="gg-menu-right"></i>
        </button>
        <button class="btn btn-toggle sidenav-toggler">
          <i class="gg-menu-left"></i>
        </button>
      </div>
      <button class="topbar-toggler more">
        <i class="gg-more-vertical-alt"></i>
      </button>
    </div>
    <!-- End Logo Header -->
  </div>
  <div class="sidebar-wrapper scrollbar scrollbar-inner">
    <div class="sidebar-content">
      <ul class="nav nav-secondary">
        <li class="nav-item active">
          <a data-bs-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
            <i class="fas fa-home"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-section">
          <span class="sidebar-mini-icon">
            <i class="fa fa-ellipsis-h"></i>
          </span>
          <h4 class="text-section">Components</h4>
        </li>
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#base">
            <i class="fas fa-layer-group"></i>
            <p>Enquiry</p>
            <span class="caret"></span>
          </a>
          <div class="collapse" id="base">
            <ul class="nav nav-collapse">
              <li>
                <a href="{{ route('all-carrers') }}">
                  <span class="sub-item">Job Enquiry</span>
                </a>
              </li>
            </ul>
          </div>
        </li>

        <li class="nav-item">
          <a href="{{ route('all-events') }}">
            <i class="fas fa-layer-group"></i>
            <p>Event Management</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ route('all-awards') }}">
            <i class="fas fa-layer-group"></i>
            <p>Award Management</p>
          </a>
        </li>
        
        <li class="nav-item">
          <a href="{{route('staff')}}">
            <i class="fas fa-layer-group"></i>
            <p>Staff Management</p>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>