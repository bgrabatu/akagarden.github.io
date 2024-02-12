<?php
include_once('../php/admin.php');
include_once('../php/login.php');

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: signin.php');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: signin.php");
}

if (isset($_GET['lockscreen'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: lockscreen.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Admin Panel | Works List | Elba Safety Automation </title>
    <link rel="icon" type="image/x-icon" href="../../favicon.png" />
    <link href="../layouts/modern-light-menu/css/light/loader.css" rel="stylesheet" type="text/css" />
    <link href="../layouts/modern-light-menu/css/dark/loader.css" rel="stylesheet" type="text/css" />
    <script src="../layouts/modern-light-menu/loader.js"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="../src/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../layouts/modern-light-menu/css/light/plugins.css" rel="stylesheet" type="text/css" />
    <link href="../layouts/modern-light-menu/css/dark/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" type="text/css" href="../src/plugins/src/table/datatable/datatables.css">

    <link rel="stylesheet" type="text/css" href="../src/plugins/css/light/table/datatable/dt-global_style.css">
    <link rel="stylesheet" type="text/css" href="../src/plugins/css/dark/table/datatable/dt-global_style.css">
    <!--  END CUSTOM STYLE FILE  -->

    <style>
        #blog-list img {
            border-radius: 18px;
        }
    </style>

</head>

<body class="layout-boxed" data-bs-spy="scroll" data-bs-bs-target="#navSection" data-bs-offset="140">

    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    <div class="header-container container-xxl">
        <header class="header navbar navbar-expand-sm expand-header">

            <a href="javascript:void(0);" class="sidebarCollapse">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
            </a>

            <div class="search-animated toggle-search">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>
                <form class="form-inline search-full form-inline search" role="search">
                    <div class="search-bar">
                        <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="Search...">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x search-close">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </div>
                </form>
                <span class="badge badge-secondary">Ctrl + /</span>
            </div>

            <ul class="navbar-item flex-row ms-lg-auto ms-0">



                <li class="nav-item theme-toggle-item">
                    <a href="javascript:void(0);" class="nav-link theme-toggle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon dark-mode">
                            <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun light-mode">
                            <circle cx="12" cy="12" r="5"></circle>
                            <line x1="12" y1="1" x2="12" y2="3"></line>
                            <line x1="12" y1="21" x2="12" y2="23"></line>
                            <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                            <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                            <line x1="1" y1="12" x2="3" y2="12"></line>
                            <line x1="21" y1="12" x2="23" y2="12"></line>
                            <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                            <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                        </svg>
                    </a>
                </li>

                <li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-1">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="avatar-container">
                            <div class="avatar avatar-sm avatar-indicators avatar-online">
                                <img alt="avatar" src="../src/assets/img/profile-21.jpeg" class="rounded-circle">
                            </div>
                        </div>
                    </a>

                    <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                        <div class="user-profile-section">
                            <div class="media mx-auto">
                                <div class="emoji me-2">
                                    &#x1F44B;
                                </div>
                                <div class="media-body">
                                    <h5>Elba</h5>
                                    <p>Safety Automation</p>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-item">
                            <a href="user-profile.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg> <span>Profile</span>
                            </a>
                        </div>
                        <div class="dropdown-item">
                            <a href="app-works-grid.php">
                                <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M10.87 3.14669L10.6784 2.42157V2.42157L10.87 3.14669ZM13.13 3.14669L12.9384 3.87181V3.87181L13.13 3.14669ZM3.3835 16.403L4.10471 16.1972L3.3835 16.403ZM3.37998 10.9361L4.10118 11.1419L3.37998 10.9361ZM20.62 10.9361L21.3412 10.7303V10.7303L20.62 10.9361ZM20.6165 16.403L21.3377 16.6088L20.6165 16.403ZM15.9929 20.6187L15.8509 19.8822L15.9929 20.6187ZM8.00711 20.6187L8.1491 19.8822L8.00711 20.6187ZM8.77297 6.56041L8.91496 7.29685L8.77297 6.56041ZM15.227 6.56041L15.369 5.82397L15.227 6.56041ZM16.3006 6.7674L16.1586 7.50384V7.50384L16.3006 6.7674ZM20.527 10.6102L19.8058 10.816V10.816L20.527 10.6102ZM7.69941 6.7674L7.55742 6.03096L7.69941 6.7674ZM3.47297 10.6102L2.75176 10.4044H2.75176L3.47297 10.6102ZM11.0616 3.87181C11.6763 3.7094 12.3237 3.7094 12.9384 3.87181L13.3216 2.42157C12.4557 2.19281 11.5443 2.19281 10.6784 2.42157L11.0616 3.87181ZM16.927 7.06315C16.927 4.88128 15.4419 2.98176 13.3216 2.42157L12.9384 3.87181C14.4126 4.26128 15.427 5.57456 15.427 7.06315H16.927ZM8.57297 7.06315C8.57297 5.57455 9.58742 4.26128 11.0616 3.87181L10.6784 2.42157C8.55808 2.98176 7.07297 4.88127 7.07297 7.06315H8.57297ZM7.8414 7.50384L8.91496 7.29685L8.63098 5.82397L7.55742 6.03096L7.8414 7.50384ZM15.085 7.29685L16.1586 7.50384L16.4426 6.03096L15.369 5.82397L15.085 7.29685ZM19.8058 10.816L19.8988 11.1419L21.3412 10.7303L21.2482 10.4044L19.8058 10.816ZM4.10118 11.1419L4.19418 10.816L2.75176 10.4044L2.65877 10.7303L4.10118 11.1419ZM4.10471 16.1972C3.63385 14.5472 3.63087 12.79 4.10118 11.1419L2.65877 10.7303C2.11113 12.6493 2.1152 14.6917 2.66229 16.6088L4.10471 16.1972ZM19.8988 11.1419C20.3691 12.79 20.3662 14.5472 19.8953 16.1972L21.3377 16.6088C21.8848 14.6917 21.8889 12.6493 21.3412 10.7303L19.8988 11.1419ZM15.8509 19.8822C13.3077 20.3726 10.6923 20.3726 8.1491 19.8822L7.86512 21.3551C10.5959 21.8816 13.4041 21.8816 16.1349 21.3551L15.8509 19.8822ZM8.91496 7.29685C10.9524 6.90402 13.0477 6.90402 15.085 7.29685L15.369 5.82397C13.144 5.39498 10.856 5.39498 8.63098 5.82397L8.91496 7.29685ZM8.1491 19.8822C6.20493 19.5074 4.63939 18.0709 4.10471 16.1972L2.66229 16.6088C3.3533 19.0303 5.36966 20.874 7.86512 21.3551L8.1491 19.8822ZM16.1349 21.3551C18.6303 20.874 20.6467 19.0303 21.3377 16.6088L19.8953 16.1972C19.3606 18.0708 17.7951 19.5074 15.8509 19.8822L16.1349 21.3551ZM16.1586 7.50384C17.9164 7.84275 19.3239 9.12718 19.8058 10.816L21.2482 10.4044C20.6087 8.16326 18.747 6.47528 16.4426 6.03096L16.1586 7.50384ZM7.55742 6.03096C5.25297 6.47528 3.39132 8.16325 2.75176 10.4044L4.19418 10.816C4.67613 9.12717 6.08361 7.84275 7.8414 7.50384L7.55742 6.03096ZM3.38575 11.7917C8.93989 13.8462 15.0601 13.8462 20.6143 11.7917L20.0939 10.3849C14.8755 12.3151 9.12447 12.3151 3.90612 10.3849L3.38575 11.7917Z" fill="currentColor"></path>
                                        <path d="M8 10.5V14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                        <path d="M16 10.5V14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                    </g>
                                </svg>
                                <span>Works Posts</span>
                            </a>
                        </div>
                        <div class="dropdown-item">
                            <a href="index.php?lockscreen='1'">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock">
                                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                    <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                </svg> <span>Lock Screen</span>
                            </a>
                        </div>
                        <div class="dropdown-item">
                            <a href="index.php?logout='1'">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                    <polyline points="16 17 21 12 16 7"></polyline>
                                    <line x1="21" y1="12" x2="9" y2="12"></line>
                                </svg> <span>Log Out</span>
                            </a>
                        </div>
                    </div>

                </li>
            </ul>
        </header>
    </div>
    <!--  END NAVBAR  -->


    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container " id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <div class="sidebar-wrapper sidebar-theme">

            <nav id="sidebar">

                <div class="navbar-nav theme-brand flex-row  text-center">
                    <div class="nav-logo">
                        <div class="nav-item theme-logo">
                            <a href="./index.php">
                                <img src="../../favicon.png" alt="logo">
                            </a>
                        </div>
                        <div class="nav-item theme-text">
                            <a href="./index.php" class="nav-link" style="font-family:'Times New Roman', Times, serif;"> ELBA </a>
                        </div>
                    </div>
                    <div class="nav-item sidebar-toggle">
                        <div class="btn-toggle sidebarCollapse">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-left">
                                <polyline points="11 17 6 12 11 7"></polyline>
                                <polyline points="18 17 13 12 18 7"></polyline>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="profile-info">
                    <div class="user-info">
                        <div class="profile-img">
                            <img src="../src/assets/img/profile-21.jpeg" alt="avatar">
                        </div>
                        <div class="profile-content">
                            <h6 class="">Elba</h6>
                            <p class="">Safety Automation</p>
                        </div>
                    </div>
                </div>

                <div class="shadow-bottom"></div>
                <ul class="list-unstyled menu-categories" id="accordionExample">
                    <li class="menu">
                        <a href="#dashboard" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>
                                <span>Dashboard</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="dashboard" data-bs-parent="#accordionExample">
                            <li>
                                <a href="./index.php"> Analytics </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu menu-heading">
                        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg><span>APPLICATIONS</span></div>
                    </li>

                    <li class="menu active">
                        <a href="#works" data-bs-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                            <div class="">
                                <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M10.87 3.14669L10.6784 2.42157V2.42157L10.87 3.14669ZM13.13 3.14669L12.9384 3.87181V3.87181L13.13 3.14669ZM3.3835 16.403L4.10471 16.1972L3.3835 16.403ZM3.37998 10.9361L4.10118 11.1419L3.37998 10.9361ZM20.62 10.9361L21.3412 10.7303V10.7303L20.62 10.9361ZM20.6165 16.403L21.3377 16.6088L20.6165 16.403ZM15.9929 20.6187L15.8509 19.8822L15.9929 20.6187ZM8.00711 20.6187L8.1491 19.8822L8.00711 20.6187ZM8.77297 6.56041L8.91496 7.29685L8.77297 6.56041ZM15.227 6.56041L15.369 5.82397L15.227 6.56041ZM16.3006 6.7674L16.1586 7.50384V7.50384L16.3006 6.7674ZM20.527 10.6102L19.8058 10.816V10.816L20.527 10.6102ZM7.69941 6.7674L7.55742 6.03096L7.69941 6.7674ZM3.47297 10.6102L2.75176 10.4044H2.75176L3.47297 10.6102ZM11.0616 3.87181C11.6763 3.7094 12.3237 3.7094 12.9384 3.87181L13.3216 2.42157C12.4557 2.19281 11.5443 2.19281 10.6784 2.42157L11.0616 3.87181ZM16.927 7.06315C16.927 4.88128 15.4419 2.98176 13.3216 2.42157L12.9384 3.87181C14.4126 4.26128 15.427 5.57456 15.427 7.06315H16.927ZM8.57297 7.06315C8.57297 5.57455 9.58742 4.26128 11.0616 3.87181L10.6784 2.42157C8.55808 2.98176 7.07297 4.88127 7.07297 7.06315H8.57297ZM7.8414 7.50384L8.91496 7.29685L8.63098 5.82397L7.55742 6.03096L7.8414 7.50384ZM15.085 7.29685L16.1586 7.50384L16.4426 6.03096L15.369 5.82397L15.085 7.29685ZM19.8058 10.816L19.8988 11.1419L21.3412 10.7303L21.2482 10.4044L19.8058 10.816ZM4.10118 11.1419L4.19418 10.816L2.75176 10.4044L2.65877 10.7303L4.10118 11.1419ZM4.10471 16.1972C3.63385 14.5472 3.63087 12.79 4.10118 11.1419L2.65877 10.7303C2.11113 12.6493 2.1152 14.6917 2.66229 16.6088L4.10471 16.1972ZM19.8988 11.1419C20.3691 12.79 20.3662 14.5472 19.8953 16.1972L21.3377 16.6088C21.8848 14.6917 21.8889 12.6493 21.3412 10.7303L19.8988 11.1419ZM15.8509 19.8822C13.3077 20.3726 10.6923 20.3726 8.1491 19.8822L7.86512 21.3551C10.5959 21.8816 13.4041 21.8816 16.1349 21.3551L15.8509 19.8822ZM8.91496 7.29685C10.9524 6.90402 13.0477 6.90402 15.085 7.29685L15.369 5.82397C13.144 5.39498 10.856 5.39498 8.63098 5.82397L8.91496 7.29685ZM8.1491 19.8822C6.20493 19.5074 4.63939 18.0709 4.10471 16.1972L2.66229 16.6088C3.3533 19.0303 5.36966 20.874 7.86512 21.3551L8.1491 19.8822ZM16.1349 21.3551C18.6303 20.874 20.6467 19.0303 21.3377 16.6088L19.8953 16.1972C19.3606 18.0708 17.7951 19.5074 15.8509 19.8822L16.1349 21.3551ZM16.1586 7.50384C17.9164 7.84275 19.3239 9.12718 19.8058 10.816L21.2482 10.4044C20.6087 8.16326 18.747 6.47528 16.4426 6.03096L16.1586 7.50384ZM7.55742 6.03096C5.25297 6.47528 3.39132 8.16325 2.75176 10.4044L4.19418 10.816C4.67613 9.12717 6.08361 7.84275 7.8414 7.50384L7.55742 6.03096ZM3.38575 11.7917C8.93989 13.8462 15.0601 13.8462 20.6143 11.7917L20.0939 10.3849C14.8755 12.3151 9.12447 12.3151 3.90612 10.3849L3.38575 11.7917Z" fill="currentColor"></path>
                                        <path d="M8 10.5V14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                        <path d="M16 10.5V14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                    </g>
                                </svg>
                                <span>Works</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled show" id="works" data-bs-parent="#accordionExample">
                            <li>
                                <a href="./app-works-grid.php"> Grid </a>
                            </li>
                            <li class="active">
                                <a href="./app-works-list.php"> List </a>
                            </li>
                            <li>
                                <a href="./app-works-create.php"> Create </a>
                            </li>

                        </ul>
                    </li>

                    <li class="menu menu-heading">
                        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg><span>USER AND PAGES</span></div>
                    </li>

                    <li class="menu">
                        <a href="#users" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                                <span>Users</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="users" data-bs-parent="#accordionExample">
                            <li>
                                <a href="./user-profile.php"> Profile </a>
                            </li>
                            <li>
                                <a href="./user-account-settings.php"> Account Settings </a>
                            </li>
                        </ul>
                    </li>

            </nav>

        </div>
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">

            <div class="layout-px-spacing">

                <div class="middle-content container-xxl p-0">

                    <!-- BREADCRUMB -->
                    <div class="page-meta">
                        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">App</a></li>
                                <li class="breadcrumb-item"><a href="#">Works</a></li>
                                <li class="breadcrumb-item active" aria-current="page">List</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- /BREADCRUMB -->

                    <div class="row layout-top-spacing">

                        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                            <div class="widget-content widget-content-area br-8">
                                <table id="blog-list" class="table dt-table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th class="checkbox-column"></th>
                                            <th>Works</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th class="no-content text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (is_array($fetchDataProject)) {
                                            $sn = 1;
                                            foreach ($fetchDataProject as $data) {
                                        ?>
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <div class="d-flex justify-content-left align-items-center">
                                                            <div class="avatar  me-3">
                                                                <img src="<?php echo $data['project_main_image']; ?>" alt="Avatar" width="64" height="64">
                                                            </div>
                                                            <div class="d-flex flex-column">
                                                                <a href="app-works-post.php?projectDetails=<?php echo $data['project_id']; ?>" class="text-truncate fw-bold"><?php echo $data['project_name'] ?? ''; ?></a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><?php echo $data['project_date_time'] ?? ''; ?></td>
                                                    <td><span class="badge badge-success"><?php if ($data['project_display_status'] == 1) {
                                                                                                echo "Active";
                                                                                            } else if ($data['project_display_status'] == 0) {
                                                                                                echo "Inactive";
                                                                                            } ?></span></td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink20" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal">
                                                                    <circle cx="12" cy="12" r="1"></circle>
                                                                    <circle cx="19" cy="12" r="1"></circle>
                                                                    <circle cx="5" cy="12" r="1"></circle>
                                                                </svg>
                                                            </a>

                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink20">
                                                                <a class="dropdown-item" href="app-works-post.php?projectDetails=<?php echo $data['project_id']; ?>">Detail</a>
                                                                <a class="dropdown-item" href="app-works-edit.php?projectEditing=<?php echo $data['project_id']; ?>">Edit</a>
                                                                <a class="dropdown-item" href="app-works-list.php?deleteProject=<?php echo $data['project_id']; ?>">Delete</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                        <?php
                                                $sn++;
                                            }
                                        } else {
                                            echo $fetchDataProject;
                                        } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

            <!--  BEGIN FOOTER  -->
            <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Copyright © <span class="dynamic-year">2022</span> <a target="_blank" href="https://designreset.com/cork-admin/">DesignReset</a>, All rights reserved.</p>
                </div>
                <div class="footer-section f-section-2">
                    <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                        </svg></p>
                </div>
            </div>
            <!--  END FOOTER  -->

        </div>
        <!--  END CONTENT AREA  -->
    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <script src="../src/plugins/src/global/vendors.min.js"></script>
    <script src="../src/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../src/plugins/src/mousetrap/mousetrap.min.js"></script>
    <script src="../src/plugins/src/waves/waves.min.js"></script>
    <script src="../layouts/modern-light-menu/app.js"></script>
    <script src="../src/assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="../src/plugins/src/table/datatable/datatables.js"></script>
    <script>
        blogList = $('#blog-list').DataTable({
            headerCallback: function(e, a, t, n, s) {
                e.getElementsByTagName("th")[0].innerHTML = `
                <div class="form-check form-check-primary d-block new-control">
                    <input class="form-check-input chk-parent" type="checkbox" id="form-check-default">
                </div>`
            },
            columnDefs: [{
                targets: 0,
                width: "30px",
                className: "",
                orderable: !1,
                render: function(e, a, t, n) {
                    return `
                    <div class="form-check form-check-primary d-block new-control">
                        <input class="form-check-input child-chk" type="checkbox" id="form-check-default">
                    </div>`
                }
            }],
            "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
                "<'table-responsive'tr>" +
                "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            "oLanguage": {
                "oPaginate": {
                    "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                    "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
                "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 10
        });
        multiCheck(blogList);
    </script>
    <!-- END PAGE LEVEL SCRIPTS -->
</body>

</html>