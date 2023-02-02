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
            <span>Menu Principal</span></a>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Dossier
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Section : </h6>
                <a class="collapse-item" href="{{ route('stock.stocks')}}">Stocks</a>
                <a class="collapse-item" href="{{ route('customer.customers')}}">Clients</a>
                <a class="collapse-item" href="{{ route('order.orders')}}">Commandes</a>
                <a class="collapse-item" href="{{ route('caliber.calibers')}}">Calibres</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">DEV</h6>
                <a class="collapse-item" href="essais.php">Pages d'essais</a>
                <a class="collapse-item" href="blank.php">Pages vierges</a>
            </div>
        </div>
    </li>
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
    </ul>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    

</ul>
<!-- End of Sidebar -->