<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-text mx-3">
            <img src="{{ asset('/img/laravel-logo.png') }}" alt="Logo Laravel"
            width="20px" height="20px"> &nbsp;Laravel</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}">
        <a class="nav-link" href="/">
            <i class="fa-solid fa-gauge"></i>
            <span>Dashboard</span></a>
    </li>
    <li class="nav-item {{ (request()->is('transactions')) ? 'active' : '' }}">
        <a class="nav-link" href="/transactions">
            <i class="fa-solid fa-cash-register"></i>
            <span>Transactions</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fa-solid fa-hand-holding-hand"></i>
            <span>Customers</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
