<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon">
      <img src="{{ asset('images/logo-smit.png') }}" alt="Logo" style="width: 40px;">
    </div>
    <div class="sidebar-brand-text mx-3">S M I T</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Menu
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <li id="menu-home" class="nav-item">
    <a class="nav-link" href="{{ route('admin.home') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <li id="menu-participants" class="nav-item">
    <a class="nav-link collapsed" href="javascript:void(0)" data-toggle="collapse" data-target="#participants-collapse" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-users"></i>
      <span>Participants</span>
    </a>
    <div id="participants-collapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Registered Participants:</h6>
        <a id="sub-menu-new" class="collapse-item" href="{{ route('admin.participants.new') }}">New Participants</a>
        <a id="sub-menu-seminar" class="collapse-item" href="{{ route('admin.participants.seminar') }}">National Seminar</a>
        <a id="sub-menu-workshop" class="collapse-item" href="{{ route('admin.participants.workshop') }}">Workshop</a>
      </div>
    </div>
  </li>

  <li id="menu-competition" class="nav-item">
    <a class="nav-link collapsed" href="javascript:void(0)" data-toggle="collapse" data-target="#competition-collapse" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-users"></i>
      <span>Competition</span>
    </a>
    <div id="competition-collapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Registered Member:</h6>
        <a id="competition-menu-new" class="collapse-item" href="{{ route('admin.competition.new') }}">New Member</a>
        <a id="competition-menu-member" class="collapse-item" href="{{ route('admin.competition.member') }}">E-Spot Member</a>
      </div>
    </div>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->