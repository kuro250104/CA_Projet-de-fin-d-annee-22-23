<!-- Sidebar -->

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('customer.index')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3" href="{{ route('customer.index') }}" >Picoti</div>
    </a>
    

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('customer.index')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Menu Principal</span>
        </a>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Dossier
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('customer.index')}}">
            <i class="fas fa-users"></i>
            <span>Clients</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link"href="{{ route('order.index')}}">
            <i class="fas fa-box"></i>
            <span>Commandes</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('caliber.index')}}">
            <i class="fas fa-egg"></i>
            <span>Calibres</span>
        </a>
    </li>
    {{-- <li class="nav-item">
        <a class="nav-link" href="">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Pages à ajouter</span>
        </a>
    </li> --}}

    
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
    </ul>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    

</ul>
<!-- End of Sidebar -->