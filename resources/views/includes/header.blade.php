<header class="header header-sticky mb-4">
  <div class="container-fluid">
    <button class="header-toggler px-md-0 me-md-3" type="button"
      onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
      <i class="fa-solid fa-bars"></i>
    </button>
    <a class="header-brand d-md-none" href="#">
      <!-- Logo icon -->
    </a>
    <ul class="header-nav d-none d-md-flex me-auto">
      <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a></li>
    </ul>
    <ul class="header-nav ms-3">
      <li class="nav-item dropdown">
        <a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true"
          aria-expanded="false">
          <div class="avatar avatar-md"><img class="avatar-img" src="assets/img/avatars/8.jpg"></div>
        </a>
        <div class="dropdown-menu dropdown-menu-end pt-0">
          <div class="dropdown-header bg-light py-2">
            <div class="fw-semibold">Account</div>
          </div>
          <a class="dropdown-item" href="#">
            <i class="fa fa-fw fa-solid fa-user"></i> {{ __('Profile') }}
          </a>
          <a class="dropdown-item" href="#">
            <i class="fa fa-fw fa-solid fa-gear"></i> {{ __('Settings') }}
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fa fa-fw fa-solid fa-arrow-right-from-bracket"></i> {{ __('Logout') }}
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </div>
      </li>
    </ul>
  </div>
  <div class="header-divider"></div>
  <div class="container-fluid">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb ms-2 my-0">
        <li class="breadcrumb-item">
          <!-- if breadcrumb is single--><span>Home</span>
        </li>
        <li class="breadcrumb-item active"><span>Dashboard</span></li>
      </ol>
    </nav>
  </div>
</header>
