<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>HNMU Coffe</title>
    <link rel="stylesheet" href="css/custom.css">
    <!-- MDB icon -->
    <link rel="icon" href="https://i.pinimg.com/736x/b3/49/28/b3492812df22600add213540ad43a53a.jpg"
        type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Duc-Nguyen98/ManageCoffe/src/css/mdb.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet'
        href='https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css'>
    <link rel='stylesheet' href='https://unpkg.com/filepond/dist/filepond.min.css'>
    <!--Daterange-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />


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

        .filepond--drop-label {
            color: #4c4e53;
        }

        .filepond--label-action {
            text-decoration-color: #babdc0;
        }

        .filepond--panel-root {
            border-radius: 2em;
            background-color: #edf0f4;
            height: 1em;
        }

        .filepond--item-panel {
            background-color: #595e68;
        }

        .filepond--drip-blob {
            background-color: #7f8a9a;
        }

        @media print {
            body * {
                visibility: hidden;
            }
            #table, #table * {
                visibility: visible;
            }
            #table {
                position: absolute;
                left: 0;
                top: 0;
            }
        }

    </style>
</head>

<body>
    <?php $base_url = '/ManageCoffe/src/'; ?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . $base_url . 'utils/database.php'; ?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . $base_url . 'utils/truncate.php'; ?>

    <!--Main Navigation-->
    <header>
        <!-- Sidebar -->
        <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
            <div class="position-sticky">
                <div class="list-group list-group-flush mx-3 mt-4">
                    <a href="<?php echo $base_url; ?>index.php"
                        class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
                        <i class="fas fa-tachometer-alt fa-fw fa-lg me-2"></i><span>Bảng Điều Khiển</span>
                    </a>
                    <!-- Collapse 1 -->
                    <a class="list-group-item list-group-item-action py-2 ripple" aria-current="true"
                        data-mdb-collapse-init href="#collapseExample1" aria-expanded="true"
                        aria-controls="collapseExample1">
                        <i class="fas fa-chalkboard-user fa-fw fa-lg me-2"></i><span>Người Dùng</span>
                    </a>
                    <!-- Collapsed content -->
                    <ul id="collapseExample1" class="collapse show  list-group list-group-flush">
                        <li class="list-group-item py-1">
                            <a href="<?php echo $base_url; ?>client.php" class="text-reset"><i
                                    class="fas fa-caret-right me-2 fa-sm"></i>Tài Khoản - Client</a>
                        </li>
                        <li class="list-group-item py-1">
                            <a href="<?php echo $base_url; ?>permission.php" class="text-reset"><i
                                    class="fas fa-caret-right me-2 fa-sm"></i>Vai Trò & Quyền</a>
                        </li>
                    </ul>
                    <!-- Collapse 1 -->
                    <!-- Collapse 2 -->
                    <a class="list-group-item list-group-item-action py-2 ripple" aria-current="true"
                        data-mdb-collapse-init href="#collapseExample2" aria-expanded="true"
                        aria-controls="collapseExample2">
                        <i class="fas fa-bookmark fa-fw fa-lg me-2"></i>
                        <span>Nguyên Liệu
                        </span>

                    </a>

                    <!-- Collapsed content -->
                    <ul id="collapseExample2" class="collapse show list-group list-group-flush ms-1">
                        <li class="list-group-item py-1">
                            <a href="<?php echo $base_url; ?>product.php" class="text-reset"><i
                                    class="fas fa-caret-right me-2 fa-sm"></i>Nguyên Liệu</a>
                        </li>
                        <li class="list-group-item py-1">
                            <a href="<?php echo $base_url; ?>recipe.php" class="text-reset"><i
                                    class="fas fa-caret-right me-2 fa-sm"></i>Công Thức</a>
                        </li>
                        <li class="list-group-item py-1">
                            <a href="<?php echo $base_url; ?>category.php" class="text-reset"><i
                                    class="fas fa-caret-right me-2 fa-sm"></i>Danh Mục</a>
                        </li>
                        <li class="list-group-item py-1">
                            <a href="<?php echo $base_url; ?>brands.php" class="text-reset"><i
                                    class="fas fa-caret-right me-2 fa-sm"></i>Thương Hiệu</a>
                        </li>
                        <li class="list-group-item py-1">
                            <a href="<?php echo $base_url; ?>unit.php" class="text-reset"><i
                                    class="fas fa-caret-right me-2 fa-sm"></i>Đơn Vị Tính</a>
                        </li>
                    </ul>

                    <!-- Collapse 2 -->
                    <!-- Collapse 3 -->

                    <a href="supplier.php" class="list-group-item list-group-item-action py-2 ripple"
                        aria-current="true">
                        <i class="fas fa-people-arrows fa-fw fa-lg me-2"></i><span>Nhà Cung Cấp</span>
                    </a>

                    <!-- Collapse 3 -->
                    <!-- Collapse 5 -->
                    <a class="list-group-item list-group-item-action py-2 ripple" aria-current="true"
                        data-mdb-collapse-init href="#collapseExample5" aria-expanded="true"
                        aria-controls="collapseExample5">
                        <i class="fas fa-truck-ramp-box fa-fw fa-lg me-2"></i><span>Quản Lý Kho</span>

                    </a>
                    <!-- Collapsed content -->
                    <ul id="collapseExample4" class="collapse show list-group list-group-flush">
                        <li class="list-group-item py-1">
                            <a href="<?php echo $base_url; ?>" class="text-reset"><i
                                    class="fas fa-caret-right me-2 fa-sm"></i>Nhập hàng</a>
                        </li>
                        <li class="list-group-item py-1">
                            <a href="<?php echo $base_url; ?>invoice.php" class="text-reset"><i
                                    class="fas fa-caret-right me-2 fa-sm"></i>Xuất hàng #</a>
                        </li>
                    </ul>
                    <!-- Collapse 5 -->
                    <!-- Collapse 6 -->
                    <a class="list-group-item list-group-item-action py-2 ripple" aria-current="true"
                        data-mdb-collapse-init href="#collapseExample6" aria-expanded="true"
                        aria-controls="collapseExample6">
                        <i class="fas fa-chart-line fa-fw fa-lg me-2"></i><span>Báo Cáo #</span>

                    </a>
                    <!-- Collapsed content -->
                    <ul id="collapseExample6" class="collapse show list-group list-group-flush">
                        <li class="list-group-item py-1">
                            <a href="<?php echo $base_url; ?>reportExport.php" class="text-reset"><i
                            class="fas fa-caret-right me-2 fa-sm"></i>Báo Cáo Xuất</a>
                        </li>
                        <li class="list-group-item py-1">
                            <a href="<?php echo $base_url; ?>reportImport.php" class="text-reset"><i
                            class="fas fa-caret-right me-2 fa-sm"></i>Báo Cáo Nhập</a>
                        </li>
                    </ul>
                    <!-- Collapse 6 -->
                </div>
            </div>
        </nav>
        <!-- Sidebar -->

        <!-- Navbar -->
        <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
            <!-- Container wrapper -->
            <div class="container-fluid">
                <!-- Toggle button -->
                <button class="navbar-toggler" type="button" data-mdb-collapse-init data-mdb-target="#sidebarMenu"
                    aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <!-- Brand -->
                <a class="navbar-brand d-flex align-items-center mx-3" href="<?php echo $base_url; ?>index.php">
                    <img src="https://i.pinimg.com/736x/b3/49/28/b3492812df22600add213540ad43a53a.jpg" style="width: 45px;height: 45px;" alt="HNMU Logo" loading="lazy" />
                    <h4 class="text-muted mb-0 ms-2"><b>HNMU Coffee</b></h4>
                </a>


                <!-- Right links -->
                <ul class="navbar-nav ms-auto d-flex flex-row">
                    <!-- Notification dropdown -->
                    <li class="nav-item dropdown">
                        <a data-mdb-dropdown-init class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow" href="#"
                            id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
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
                    <!-- Avatar -->
                    <li class="nav-item dropdown">
                        <a data-mdb-dropdown-init
                            class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="#"
                            id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                            <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" class="rounded-circle" height="22"
                                alt="Avatar" loading="lazy" />
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