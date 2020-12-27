<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{url('/admin')}}">Hydro Store</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{url('/admin')}}">HS</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown active">
                <a href="{{url('/admin')}}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Management</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fab fa-product-hunt"></i> <span>Product</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{url('admin/new-product')}}">New Product</a></li>
                    <li><a class="nav-link" href="{{url('admin/product')}}">List Product</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-users"></i> <span>Users</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{url('admin/new-user')}}">New Users</a></li>
                    <li><a class="nav-link" href="{{url('admin/users')}}">List Users</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-money-check"></i> <span>Transaction</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{url('admin/orders')}}">List Orders</a></li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
