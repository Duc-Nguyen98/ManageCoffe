<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.min.css" rel="stylesheet" />

    <style>
        body {
            background-color: #fbfbfb;
        }

        @media (min-width: 991.98px) {
            main {
                padding-left: 240px;
            }
        }

        /* Sidebar */

        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            padding: 58px 0 0;
            /* Height of navbar */
            box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
            width: 240px;
            z-index: 600;
        }

        @media (max-width: 991.98px) {
            .sidebar {
                width: 100%;
            }
        }

        .sidebar .active {
            border-radius: 5px;
            box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
        }

        .sidebar-sticky {
            position: relative;
            top: 0;
            height: calc(100vh - 48px);
            padding-top: 0.5rem;
            overflow-x: hidden;
            overflow-y: auto;
            /* Scrollable contents if viewport is shorter than content. */
        }
    </style>
</head>


<body>
    <!--Main Navigation-->
    <header>
        <!-- Sidebar -->
        <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
            <div class="position-sticky">
                <div class="list-group list-group-flush mx-3 mt-4">
                    <a href="#" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
                        <i class="fas fa-tachometer-alt fa-fw fa-lg me-2"></i><span>Bảng Điều Khiển</span>
                    </a>
                    <!-- Collapse 1 -->
                    <a class="list-group-item list-group-item-action py-2 ripple" aria-current="true" data-mdb-collapse-init href="#collapseExample1" aria-expanded="true" aria-controls="collapseExample1">
                        <i class="fas fa-chalkboard-user fa-fw fa-lg me-2"></i><span>Người Dùng</span>
                    </a>
                    <!-- Collapsed content -->
                    <ul id="collapseExample1" class="collapse show  list-group list-group-flush">
                        <li class="list-group-item py-1">
                            <a href="" class="text-reset"><i class="fas fa-caret-right me-2 fa-sm"></i>Tài Khoản</a>
                        </li>
                        <li class="list-group-item py-1">
                            <a href="" class="text-reset"><i class="fas fa-caret-right me-2 fa-sm"></i>Vai Trò</a>
                        </li>
                    </ul>
                    <!-- Collapse 1 -->
                    <!-- Collapse 2 -->
                    <a class="list-group-item list-group-item-action py-2 ripple" aria-current="true" data-mdb-collapse-init href="#collapseExample2" aria-expanded="true" aria-controls="collapseExample2">
                        <i class="fas fa-bookmark fa-fw fa-lg me-2"></i>
                        <span>Nguyên Liệu
                        </span>

                    </a>

                    <!-- Collapsed content -->
                    <ul id="collapseExample2" class="collapse show list-group list-group-flush ms-1">
                        <li class="list-group-item py-1">
                            <a href="" class="text-reset"><i class="fas fa-caret-right me-2 fa-sm"></i>Nguyên Liệu</a>
                        </li>
                        <li class="list-group-item py-1">
                            <a href="" class="text-reset"><i class="fas fa-caret-right me-2 fa-sm"></i>Danh Mục</a>
                        </li>
                        <li class="list-group-item py-1">
                            <a href="" class="text-reset"><i class="fas fa-caret-right me-2 fa-sm"></i>Thương Hiệu</a>
                        </li>
                    </ul>

                    <!-- Collapse 2 -->
                    <!-- Collapse 3 -->
                    <a class="list-group-item list-group-item-action py-2 ripple" aria-current="true" data-mdb-collapse-init href="#collapseExample3" aria-expanded="true" aria-controls="collapseExample3">
                        <i class="fab fa-envira fa-fw fa-lg me-2"></i><span>Công Thức</span>
                    </a>
                    <!-- Collapsed content -->
                    <!-- <ul id="collapseExample3" class="collapse  list-group list-group-flush">
                    <li class="list-group-item py-1">
                        <a href="" class="text-reset">Tài Khoản</a>
                    </li>
                    <li class="list-group-item py-1">
                        <a href="" class="text-reset">Vai Trò</a>
                    </li>
                </ul> -->
                    <!-- Collapse 3 -->
                    <!-- Collapse 4 -->
                    <a class="list-group-item list-group-item-action py-2 ripple" aria-current="true" data-mdb-collapse-init href="#collapseExample4" aria-expanded="true" aria-controls="collapseExample4">
                        <i class="fas fa-truck-ramp-box fa-fw fa-lg me-2"></i><span>Quản Lý Kho</span>
                    </a>
                    <!-- Collapsed content -->
                    <!-- <ul id="collapseExample4" class="collapse  list-group list-group-flush">
                    <li class="list-group-item py-1">
                        <a href="" class="text-reset">Tài Khoản</a>
                    </li>
                    <li class="list-group-item py-1">
                        <a href="" class="text-reset">Vai Trò</a>
                    </li>
                </ul> -->
                    <!-- Collapse 4 -->
                    <!-- Collapse 5 -->
                    <a class="list-group-item list-group-item-action py-2 ripple" aria-current="true" data-mdb-collapse-init href="#collapseExample5" aria-expanded="true" aria-controls="collapseExample5">
                        <i class="fas fa-chart-line fa-fw fa-lg me-2"></i><span>Báo Cáo</span>
                    </a>
                    <!-- Collapsed content -->
                    <!-- <ul id="collapseExample4" class="collapse  list-group list-group-flush">
                    <li class="list-group-item py-1">
                        <a href="" class="text-reset">Tài Khoản</a>
                    </li>
                    <li class="list-group-item py-1">
                        <a href="" class="text-reset">Vai Trò</a>
                    </li>
                </ul> -->
                    <!-- Collapse 5 -->
                </div>
            </div>
        </nav>
        <!-- Sidebar -->

        <!-- Navbar -->
        <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
            <!-- Container wrapper -->
            <div class="container-fluid">
                <!-- Toggle button -->
                <button class="navbar-toggler" type="button" data-mdb-collapse-init data-mdb-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <!-- Brand -->
                <a class="navbar-brand d-flex align-items-center mx-3" href="#">
                    <img src="https://cdn.haitrieu.com/wp-content/uploads/2021/11/Logo-DH-Thu-Do-Ha-Noi-HNMU.png" style="width: 45px;height: 45px;" alt="HNMU Logo" loading="lazy" />
                    <h4 class="text-muted mb-0 ms-2"><b>HNMU Coffee</b></h4>
                </a>

                <!-- Search form -->
                <!-- <form class="d-none d-md-flex input-group w-auto my-auto">
                <input autocomplete="off" type="search" class="form-control rounded" placeholder='Search (ctrl + "/" to focus)' style="min-width: 225px;" />
                <span class="input-group-text border-0"><i class="fas fa-search"></i></span>
            </form> -->

                <!-- Right links -->
                <ul class="navbar-nav ms-auto d-flex flex-row">
                    <!-- Notification dropdown -->
                    <li class="nav-item dropdown">  
                        <a data-mdb-dropdown-init class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-bell"></i>
                            <span class="badge rounded-pill badge-notification bg-danger">1</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Some news</a></li>
                            <li><a class="dropdown-item" href="#">Another news</a></li>
                            <li>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </li>
                        </ul>
                    </li>
                    <!-- Icon dropdown -->
                    <li class="nav-item dropdown">
                        <a data-mdb-dropdown-init class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                            <i class="flag-united-kingdom flag m-0"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="#"><i class="flag-united-kingdom flag"></i>English
                                    <i class="fa fa-check text-success ms-2"></i></a>
                            </li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"><i class="flag-poland flag"></i>Polski</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"><i class="flag-china flag"></i>中文</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"><i class="flag-japan flag"></i>日本語</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"><i class="flag-germany flag"></i>Deutsch</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"><i class="flag-france flag"></i>Français</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"><i class="flag-spain flag"></i>Español</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"><i class="flag-russia flag"></i>Русский</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"><i class="flag-portugal flag"></i>Português</a>
                            </li>
                        </ul>
                    </li>

                    <!-- Avatar -->
                    <li class="nav-item dropdown">
                        <a data-mdb-dropdown-init class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                            <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" class="rounded-circle" height="22" alt="Avatar" loading="lazy" />
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">My profile</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- Container wrapper -->
        </nav>
        <!-- Navbar -->
    </header>
    <!--Main Navigation-->