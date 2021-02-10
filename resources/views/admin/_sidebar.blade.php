<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin_home')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin Panel</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Pages Collapse Menu     <i class="fas fa-fw fa-cog"></i>  -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
           aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-car-side"></i>
            <span>Araçlar</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('admin_category')}}">Kategoriler</a>
                <a class="collapse-item" href="{{route('admin_cars')}}">Yeni Araç</a>
            </div>
        </div>
    </li>


    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin_page')}}">
            <i class="fas fa-fw fa-folder"></i>
            <span>Sayfalar</span></a>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin_message')}}">
            <i class="fas fa-envelope-open-text"></i>
            <span>İletişim Mesajları</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin_faq')}}">
            <i class="fa fa-question-circle" aria-hidden="true"></i>
            <span>S.S.S</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{route('admin_reservation')}}">
            <i class="far fa-calendar-check"></i>
            <span>Rezervasyonlar</span></a>
    </li>





    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
