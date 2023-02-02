<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.dashboard') }}">

                <div class="sidebar-brand-text mx-3">BLOG PANEL</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item @if(Request::segment(2)=="panel") active @endif">
                <a class="nav-link" href="{{route('admin.dashboard')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                İçerik Yönetimi
            </div>



            <li class="nav-item">
                <a class="nav-link" @if(Request::segment(2)=="kategoriler") style="color:white !important;" @endif href="{{ route('admin.category.index') }}">
                    <i class="fas fa-fw fa-list" @if(Request::segment(2)=="kategoriler") style="color:white !important;" @endif></i>
                    <span>Kategoriler</span>
                </a>
            </li>



            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link @if(Request::segment(2)=="makaleler") active @else collapse @endif" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-edit"></i>
                    <span>Makaleler</span>
                </a>
                <div id="collapseTwo" class="collapse @if(Request::segment(2)=="makaleler") show @endif" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Makale işlemleri:</h6>
                        <a class="collapse-item @if(Request::segment(2)=="makaleler" and !Request::segment(3)) active @endif" href="{{route('admin.makaleler.index')}}">Tüm Makaleler</a>
                        <a class="collapse-item @if(Request::segment(2)=="makaleler" and Request::segment(3)=="create") active @endif" href="{{route('admin.makaleler.create')}}">Makale Oluştur</a>
                    </div>
                </div>
            </li>


            <li class="nav-item">
                <a class="nav-link @if(Request::segment(2)=="sayfalar") active @else collapse @endif" href="#" data-toggle="collapse" data-target="#collapsePage"
                    aria-expanded="true" aria-controls="collapsePage">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Sayfalar</span>
                </a>
                <div id="collapsePage" class="collapse @if(Request::segment(2)=="sayfalar") show @endif" aria-labelledby="headingPage" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Sayfa işlemleri:</h6>
                        <a class="collapse-item @if(Request::segment(2)=="sayfalar" and !Request::segment(3)) active @endif" href="{{route('admin.page.index')}}">Tüm Sayfalar</a>
                        <a class="collapse-item @if(Request::segment(2)=="sayfalar" and Request::segment(3)=="create") active @endif" href="{{ route('admin.page.create') }}">Sayfa Oluştur</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Site Ayarları
            </div>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.config.index') }}">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Ayarlar</span></a>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>



        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">






                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                                <img class="img-profile rounded-circle"
                                    src="{{asset('back/')}}/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Çıkış Yap
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                                <!-- Begin Page Content -->
                                <div class="container-fluid">

                                    <!-- Page Heading -->
                                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                        <h1 class="h3 mb-0 text-gray-800">@yield('title')</h1>
                                        <a href="{{route('homepage')}}" target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                                class="fas fa-globe fa-sm text-white-50"></i> Siteyi Görüntüle </a>
                                    </div>
