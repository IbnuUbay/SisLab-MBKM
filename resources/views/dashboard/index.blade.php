@extends('layouts.theme')
@section('content')

    <body class="bg-light">
        <div id="db-wrapper">
            <!-- navbar vertical -->
            <!-- Sidebar -->
            <nav class="navbar-vertical navbar">
                <div class="nav-scroller">
                    <!-- Brand logo -->
                    <a class="navbar-brand" href="./index.html">
                        <img src="./assets/images/brand/logo/logo.svg" alt="" />
                    </a>
                    <!-- Navbar nav -->
                    <ul class="navbar-nav flex-column" id="sideNavbar">
                        <li class="nav-item">
                            <a class="nav-link has-arrow  active " href="./index.html">
                                <i data-feather="home" class="nav-icon icon-xs me-2"></i> Dashboard
                            </a>

                        </li>


                        <!-- Nav item -->
                        <li class="nav-item">
                            <div class="navbar-heading">Master Data</div>
                        </li>


                        <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse"
                                data-bs-target="#navPages" aria-expanded="false" aria-controls="navPages">
                                <i data-feather="layers" class="nav-icon icon-xs me-2">
                                </i> Pengguna
                            </a>

                            <div id="navPages" class="collapse " data-bs-parent="#sideNavbar">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link " href="./pages/profile.html">
                                            Super Admin
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="./pages/profile.html">
                                            Admin
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link has-arrow   " href="./pages/settings.html">
                                            Mahasiswa
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </li>


                        <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link " href="./pages/layout.html">
                                <i data-feather="sidebar" class="nav-icon icon-xs me-2">
                                </i>
                                Barang
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="./pages/layout.html">
                                <i data-feather="sidebar" class="nav-icon icon-xs me-2">
                                </i>
                                Peminjaman
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="./pages/layout.html">
                                <i data-feather="sidebar" class="nav-icon icon-xs me-2">
                                </i>
                                Pengembalian
                            </a>
                        </li>







                    </ul>

                </div>
            </nav>
            <!-- Page content -->
            <div id="page-content">
                <div class="header @@classList">
                    <!-- navbar -->
                    <nav class="navbar-classic navbar navbar-expand-lg">
                        <a id="nav-toggle" href="#"><i data-feather="menu" class="nav-icon me-2 icon-xs"></i></a>
                        <div class="ms-lg-3 d-none d-md-none d-lg-block">
                            <!-- Form -->
                            <form class="d-flex align-items-center">
                                <input type="search" class="form-control" placeholder="Search" />
                            </form>
                        </div>
                        <!--Navbar nav -->
                        <ul class="navbar-nav navbar-right-wrap ms-auto d-flex nav-top-wrap">
                            <li class="dropdown stopevent">
                                <a class="btn btn-light btn-icon rounded-circle indicator
          indicator-primary text-muted"
                                    href="#" role="button" id="dropdownNotification" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-xs" data-feather="bell"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end"
                                    aria-labelledby="dropdownNotification">
                                    <div>
                                        <div
                                            class="border-bottom px-3 pt-2 pb-3 d-flex
              justify-content-between align-items-center">
                                            <p class="mb-0 text-dark fw-medium fs-4">Notifications</p>
                                            <a href="#" class="text-muted">
                                                <span>
                                                    <i class="me-1 icon-xxs" data-feather="settings"></i>
                                                </span>
                                            </a>
                                        </div>
                                        <!-- List group -->
                                        <ul class="list-group list-group-flush notification-list-scroll">
                                            <!-- List group item -->
                                            <li class="list-group-item bg-light">


                                                <a href="#" class="text-muted">
                                                    <h5 class=" mb-1">Rishi Chopra</h5>
                                                    <p class="mb-0">
                                                        Mauris blandit erat id nunc blandit, ac eleifend dolor pretium.
                                                    </p>
                                                </a>



                                            </li>
                                            <!-- List group item -->
                                            <li class="list-group-item">


                                                <a href="#" class="text-muted">
                                                    <h5 class=" mb-1">Neha Kannned</h5>
                                                    <p class="mb-0">
                                                        Proin at elit vel est condimentum elementum id in ante. Maecenas et
                                                        sapien metus.
                                                    </p>
                                                </a>



                                            </li>
                                            <!-- List group item -->
                                            <li class="list-group-item">


                                                <a href="#" class="text-muted">
                                                    <h5 class=" mb-1">Nirmala Chauhan</h5>
                                                    <p class="mb-0">
                                                        Morbi maximus urna lobortis elit sollicitudin sollicitudieget elit
                                                        vel pretium.
                                                    </p>
                                                </a>



                                            </li>
                                            <!-- List group item -->
                                            <li class="list-group-item">


                                                <a href="#" class="text-muted">
                                                    <h5 class=" mb-1">Sina Ray</h5>
                                                    <p class="mb-0">
                                                        Sed aliquam augue sit amet mauris volutpat hendrerit sed nunc eu
                                                        diam.
                                                    </p>
                                                </a>



                                            </li>
                                        </ul>
                                        <div class="border-top px-3 py-2 text-center">
                                            <a href="#" class="text-inherit fw-semi-bold">
                                                View all Notifications
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- List -->
                            <li class="dropdown ms-2">
                                <a class="rounded-circle" href="#" role="button" id="dropdownUser"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="avatar avatar-md avatar-indicators avatar-online">
                                        <img alt="avatar" src="./assets/images/avatar/avatar-1.jpg"
                                            class="rounded-circle" />
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
                                    <div class="px-4 pb-0 pt-2">


                                        <div class="lh-1 ">
                                            <h5 class="mb-1"> John E. Grainger</h5>
                                            <a href="#" class="text-inherit fs-6">View my profile</a>
                                        </div>
                                        <div class=" dropdown-divider mt-3 mb-2"></div>
                                    </div>

                                    <ul class="list-unstyled">

                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <i class="me-2 icon-xxs dropdown-item-icon" data-feather="user"></i>Edit
                                                Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <i class="me-2 icon-xxs dropdown-item-icon"
                                                    data-feather="activity"></i>Activity Log
                                            </a>


                                        </li>

                                        <li>
                                            <a class="dropdown-item text-primary" href="#">
                                                <i class="me-2 icon-xxs text-primary dropdown-item-icon"
                                                    data-feather="star"></i>Go Pro
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <i class="me-2 icon-xxs dropdown-item-icon"
                                                    data-feather="settings"></i>Account Settings
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./index.html">
                                                <i class="me-2 icon-xxs dropdown-item-icon" data-feather="power"></i>Sign
                                                Out
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- Container fluid -->
                <div class="bg-primary pt-10 pb-21"></div>
                <div class="container-fluid mt-n22 px-6">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">
                            <!-- Page header -->
                            <div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="mb-2 mb-lg-0">
                                        <h3 class="mb-0  text-white">Statistik</h3>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
                            <!-- card -->
                            <div class="card ">
                                <!-- card body -->
                                <div class="card-body">
                                    <!-- heading -->
                                    <div
                                        class="d-flex justify-content-between align-items-center
                    mb-3">
                                        <div>
                                            <h4 class="mb-0">Total Peminjaman</h4>
                                        </div>
                                        <div
                                            class="icon-shape icon-md bg-light-primary text-primary
                      rounded-2">
                                            <i class="bi bi-briefcase fs-4"></i>
                                        </div>
                                    </div>
                                    <!-- project number -->
                                    <div>
                                        <h1 class="fw-bold">18</h1>
                                        <p class="mb-0"><span class="text-dark me-2">2</span>Telah dikembalikan</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
                            <!-- card -->
                            <div class="card ">
                                <!-- card body -->
                                <div class="card-body">
                                    <!-- heading -->
                                    <div
                                        class="d-flex justify-content-between align-items-center
                    mb-3">
                                        <div>
                                            <h4 class="mb-0">Total barang</h4>
                                        </div>
                                        <div
                                            class="icon-shape icon-md bg-light-primary text-primary
                      rounded-2">
                                            <i class="bi bi-list-task fs-4"></i>
                                        </div>
                                    </div>
                                    <!-- project number -->
                                    <div>
                                        <h1 class="fw-bold">132</h1>
                                        <p class="mb-0"><span class="text-dark me-2">28</span>Habis Pakai</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
                            <!-- card -->
                            <div class="card ">
                                <!-- card body -->
                                <div class="card-body">
                                    <!-- heading -->
                                    <div
                                        class="d-flex justify-content-between align-items-center
                    mb-3">
                                        <div>
                                            <h4 class="mb-0">Admin(Lab)</h4>
                                        </div>
                                        <div
                                            class="icon-shape icon-md bg-light-primary text-primary
                      rounded-2">
                                            <i class="bi bi-people fs-4"></i>
                                        </div>
                                    </div>
                                    <!-- project number -->
                                    <div>
                                        <h1 class="fw-bold">12</h1>
                                        <p class="mb-0"><span class="text-dark me-2">1</span>Online</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
                            <!-- card -->
                            <div class="card ">
                                <!-- card body -->
                                <div class="card-body">
                                    <!-- heading -->
                                    <div
                                        class="d-flex justify-content-between align-items-center
                    mb-3">
                                        <div>
                                            <h4 class="mb-0">Aktivitas</h4>
                                        </div>
                                        <div
                                            class="icon-shape icon-md bg-light-primary text-primary
                      rounded-2">
                                            <i class="bi bi-bullseye fs-4"></i>
                                        </div>
                                    </div>
                                    <!-- project number -->
                                    <div>
                                        <h1 class="fw-bold">76%</h1>
                                        <p class="mb-0"><span class="text-success me-2">5%</span>Naik</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- row  -->
                    <div class="row mt-6">
                        <div class="col-md-12 col-12">
                            <!-- card  -->
                            <div class="card">
                                <!-- card header  -->
                                <div class="card-header bg-white  py-4">
                                    <h4 class="mb-0">Pemohonan Peminjaman</h4>
                                </div>
                                <!-- table  -->
                                <div class="table-responsive">
                                    <table class="table text-nowrap mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th>nama Barang</th>
                                                <th>Waktu</th>
                                                <th>Jenis</th>
                                                <th>Mahasiswa</th>
                                                <th>Progress</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="align-middle">
                                                    <div class="d-flex
                            align-items-center">
                                                        
                                                        <div class="ms-3 lh-1">
                                                            <h5 class=" mb-1"> <a href="#"
                                                                    class="text-inherit">Dropbox
                                                                    Design
                                                                    System</a></h5>

                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle">34 menit</td>
                                                <td class="align-middle"><span
                                                        class="badge
                            bg-warning">Medium</span>
                                                </td>
                                                <td class="align-middle">
                                                    <div class="avatar-group">
                                                        <span class="avatar avatar-sm">
                                                            <img alt="avatar" src="assets/images/avatar/avatar-1.jpg"
                                                                class="rounded-circle">
                                                        </span>
                                                        <span class="avatar avatar-sm">
                                                            <img alt="avatar" src="assets/images/avatar/avatar-2.jpg"
                                                                class="rounded-circle">
                                                        </span>
                                                        <span class="avatar avatar-sm">
                                                            <img alt="avatar" src="assets/images/avatar/avatar-3.jpg"
                                                                class="rounded-circle">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-primary">
                                                            <span
                                                                class="avatar-initials rounded-circle
                                fs-6">+5</span>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-dark">
                                                    <div class="float-start me-3">15%</div>
                                                    <div class="mt-2">
                                                        <div class="progress" style="height: 5px;">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width:15%" aria-valuenow="15" aria-valuemin="0"
                                                                aria-valuemax="100">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">
                                                    <div class="d-flex
                            align-items-center">
                                                    <div class="ms-3 lh-1">
                                                            <h5 class=" mb-1"> <a href="#"
                                                                    class="text-inherit">Slack Team
                                                                    UI Design</a></h5>
                                                        </div>    
                                                    
                                                    </div>
                                                </td>
                                                <td class="align-middle">47 menit</td>
                                                <td class="align-middle"><span
                                                        class="badge
                            bg-danger">High</span>
                                                </td>
                                                <td class="align-middle">
                                                    <div class="avatar-group">
                                                        <span class="avatar avatar-sm">
                                                            <img alt="avatar" src="assets/images/avatar/avatar-4.jpg"
                                                                class="rounded-circle">
                                                        </span>
                                                        <span class="avatar avatar-sm">
                                                            <img alt="avatar" src="assets/images/avatar/avatar-5.jpg"
                                                                class="rounded-circle">
                                                        </span>
                                                        <span class="avatar avatar-sm">
                                                            <img alt="avatar" src="assets/images/avatar/avatar-6.jpg"
                                                                class="rounded-circle">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-primary">
                                                            <span
                                                                class="avatar-initials rounded-circle
                                fs-6">+5</span>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-dark">
                                                    <div class="float-start me-3">35%</div>
                                                    <div class="mt-2">
                                                        <div class="progress" style="height: 5px;">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width:35%" aria-valuenow="35" aria-valuemin="0"
                                                                aria-valuemax="100">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">
                                                    <div class="d-flex
                            align-items-center">
                                                        
                                                        <div class="ms-3 lh-1">
                                                            <h5 class=" mb-1"> <a href="#"
                                                                    class="text-inherit">GitHub
                                                                    Satellite</a></h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle">120 menit</td>
                                                <td class="align-middle"><span class="badge bg-info">Low</span></td>
                                                <td class="align-middle">
                                                    <div class="avatar-group">
                                                        <span class="avatar avatar-sm">
                                                            <img alt="avatar" src="assets/images/avatar/avatar-7.jpg"
                                                                class="rounded-circle">
                                                        </span>
                                                        <span class="avatar avatar-sm">
                                                            <img alt="avatar" src="assets/images/avatar/avatar-8.jpg"
                                                                class="rounded-circle">
                                                        </span>
                                                        <span class="avatar avatar-sm">
                                                            <img alt="avatar" src="assets/images/avatar/avatar-9.jpg"
                                                                class="rounded-circle">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-primary">
                                                            <span
                                                                class="avatar-initials rounded-circle
                                fs-6">+1</span>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-dark">
                                                    <div class="float-start me-3">75%</div>
                                                    <div class="mt-2">
                                                        <div class="progress" style="height: 5px;">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width:75%" aria-valuenow="75" aria-valuemin="0"
                                                                aria-valuemax="100">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">
                                                    <div class="d-flex
                            align-items-center">
                                                       
                                                        </div>
                                                        <div class="ms-3 lh-1">
                                                            <h5 class=" mb-1"> <a href="#" class="text-inherit">3D
                                                                    Character
                                                                    Modelling</a></h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle">89 menit</td>
                                                <td class="align-middle"><span
                                                        class="badge
                            bg-warning">Medium</span>
                                                </td>
                                                <td class="align-middle">
                                                    <div class="avatar-group">
                                                        <span class="avatar avatar-sm">
                                                            <img alt="avatar" src="assets/images/avatar/avatar-10.jpg"
                                                                class="rounded-circle">
                                                        </span>
                                                        <span class="avatar avatar-sm">
                                                            <img alt="avatar" src="assets/images/avatar/avatar-11.jpg"
                                                                class="rounded-circle">
                                                        </span>
                                                        <span class="avatar avatar-sm">
                                                            <img alt="avatar" src="assets/images/avatar/avatar-12.jpg"
                                                                class="rounded-circle">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-primary">
                                                            <span
                                                                class="avatar-initials rounded-circle
                                fs-6">+5</span>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-dark">
                                                    <div class="float-start me-3">63%</div>
                                                    <div class="mt-2">
                                                        <div class="progress" style="height: 5px;">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width:63%" aria-valuenow="63" aria-valuemin="0"
                                                                aria-valuemax="100">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">
                                                    <div class="d-flex
                            align-items-center">
                                                        
                                                        <div class="ms-3 lh-1">
                                                            <h5 class=" mb-1"> <a href="#"
                                                                    class="text-inherit">Webapp
                                                                    Design System</a>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle">108 menit</td>
                                                <td class="align-middle"><span
                                                        class="badge
                            bg-success">Track</span>
                                                </td>
                                                <td class="align-middle">
                                                    <div class="avatar-group">
                                                        <span class="avatar avatar-sm">
                                                            <img alt="avatar" src="assets/images/avatar/avatar-13.jpg"
                                                                class="rounded-circle">
                                                        </span>
                                                        <span class="avatar avatar-sm">
                                                            <img alt="avatar" src="assets/images/avatar/avatar-14.jpg"
                                                                class="rounded-circle">
                                                        </span>
                                                        <span class="avatar avatar-sm">
                                                            <img alt="avatar" src="assets/images/avatar/avatar-15.jpg"
                                                                class="rounded-circle">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-primary">
                                                            <span
                                                                class="avatar-initials rounded-circle
                                fs-6">+5</span>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-dark">
                                                    <div class="float-start me-3">100%</div>
                                                    <div class="mt-2">
                                                        <div class="progress" style="height: 5px;">
                                                            <div class="progress-bar bg-success" role="progressbar"
                                                                style="width:100%" aria-valuenow="100" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle border-bottom-0">
                                                    <div class="d-flex
                            align-items-center">
                                                        
                                                        <div class="ms-3 lh-1">
                                                            <h5 class=" mb-1"> <a href="#"
                                                                    class="text-inherit">Github Event
                                                                    Design</a>
                                                            </h5>

                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle border-bottom-0">120 menit</td>
                                                <td class="align-middle border-bottom-0"><span
                                                        class="badge bg-info">Low</span></td>
                                                <td class="align-middle border-bottom-0">
                                                    <div class="avatar-group">
                                                        <span class="avatar avatar-sm">
                                                            <img alt="avatar" src="assets/images/avatar/avatar-13.jpg"
                                                                class="rounded-circle">
                                                        </span>
                                                        <span class="avatar avatar-sm">
                                                            <img alt="avatar" src="assets/images/avatar/avatar-14.jpg"
                                                                class="rounded-circle">
                                                        </span>
                                                        <span class="avatar avatar-sm">
                                                            <img alt="avatar" src="assets/images/avatar/avatar-15.jpg"
                                                                class="rounded-circle">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-primary">
                                                            <span
                                                                class="avatar-initials rounded-circle
                                fs-6">+1</span>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-dark border-bottom-0">
                                                    <div class="float-start me-3">75%</div>
                                                    <div class="mt-2">
                                                        <div class="progress" style="height: 5px;">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width:75%" aria-valuenow="75" aria-valuemin="0"
                                                                aria-valuemax="100">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <!-- card footer  -->
                                <div class="card-footer bg-white text-center">
                                    <a href="#" class="link-primary">Lihat semua</a>

                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- row  -->
                    
                </div>
            </div>
        </div>



        <!-- Scripts -->
        <!-- Libs JS -->
        <script src="./assets/libs/jquery/dist/jquery.min.js"></script>
        <script src="./assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="./assets/libs/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="./assets/libs/feather-icons/dist/feather.min.js"></script>
        <script src="./assets/libs/prismjs/prism.js"></script>
        <script src="./assets/libs/apexcharts/dist/apexcharts.min.js"></script>
        <script src="./assets/libs/dropzone/dist/min/dropzone.min.js"></script>
        <script src="./assets/libs/prismjs/plugins/toolbar/prism-toolbar.min.js"></script>
        <script src="./assets/libs/prismjs/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js"></script>




        <!-- Theme JS -->
        <script src="./assets/js/theme.min.js"></script>



    </body>
@endsection
