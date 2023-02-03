<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('backend') }}/img/logo/logo2.png">
        </div>
        <div class="sidebar-brand-text mx-3">AB Farhan</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item @if (request()->routeIs('dashboard')) active @endif">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard.basicsettings') }}">
            <i class="fas fa-fw fa-cogs"></i>
            <span>Basic Settings</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard.menuBuilder') }}">
            <i class="fas fa-fw fa-th"></i>
            <span>Menu Builder</span>
        </a>
    </li>
    <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
            aria-expanded="true" aria-controls="collapseBootstrap">
            <i class="far fa-fw fa-window-maximize"></i>
            <span>Bootstrap UI</span>
        </a>
        <div id="collapseBootstrap" class="collapse show" aria-labelledby="headingBootstrap"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Bootstrap UI</h6>
                <a class="collapse-item  active" href="alerts.html">Alerts</a>
                <a class="collapse-item" href="buttons.html">Buttons</a>
                <a class="collapse-item" href="dropdowns.html">Dropdowns</a>
                <a class="collapse-item" href="modals.html">Modals</a>
                <a class="collapse-item" href="popovers.html">Popovers</a>
                <a class="collapse-item" href="progress-bar.html">Progress Bars</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="ui-colors.html">
            <i class="fas fa-fw fa-palette"></i>
            <span>UI Colors</span>
        </a>
    </li>

</ul>
