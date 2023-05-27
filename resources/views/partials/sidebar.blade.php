<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-text mx-3">
            <img src="{{ asset('/img/laravel-logo.png') }}" alt="Logo Laravel"
            width="20px" height="20px"> &nbsp;Laravel</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item -->
    <li class="nav-item {{ (request()->is('transactions')) ? 'active' : '' }}">
        <a class="nav-link" href="/transactions">
            <i class="fa fa-cash-register"></i>&nbsp;&nbsp;
            <span>Transactions</span></a>
    </li>

</ul>
