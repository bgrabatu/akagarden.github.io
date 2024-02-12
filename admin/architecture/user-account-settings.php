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
    <title>Admin Panel | Account Settings | Elba Safety Automation </title>
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
    <link rel="stylesheet" href="../src/plugins/src/filepond/filepond.min.css">
    <link rel="stylesheet" href="../src/plugins/src/filepond/FilePondPluginImagePreview.min.css">
    <link href="../src/plugins/src/notification/snackbar/snackbar.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../src/plugins/src/sweetalerts2/sweetalerts2.css">

    <link href="../src/plugins/css/light/filepond/custom-filepond.css" rel="stylesheet" type="text/css" />
    <link href="../src/assets/css/light/components/tabs.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../src/assets/css/light/elements/alert.css">

    <link href="../src/plugins/css/light/sweetalerts2/custom-sweetalert.css" rel="stylesheet" type="text/css" />
    <link href="../src/plugins/css/light/notification/snackbar/custom-snackbar.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="../src/assets/css/light/forms/switches.css">
    <link href="../src/assets/css/light/components/list-group.css" rel="stylesheet" type="text/css">

    <link href="../src/assets/css/light/users/account-setting.css" rel="stylesheet" type="text/css" />



    <link href="../src/plugins/css/dark/filepond/custom-filepond.css" rel="stylesheet" type="text/css" />
    <link href="../src/assets/css/dark/components/tabs.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../src/assets/css/dark/elements/alert.css">

    <link href="../src/plugins/css/dark/sweetalerts2/custom-sweetalert.css" rel="stylesheet" type="text/css" />
    <link href="../src/plugins/css/dark/notification/snackbar/custom-snackbar.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="../src/assets/css/dark/forms/switches.css">
    <link href="../src/assets/css/dark/components/list-group.css" rel="stylesheet" type="text/css">

    <link href="../src/assets/css/dark/users/account-setting.css" rel="stylesheet" type="text/css" />


    <!--  END CUSTOM STYLE FILE  -->
</head>

<body class=" layout-boxed">

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
        <div class="cs-overlay"></div>
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

                    <li class="menu">
                        <a href="#works" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
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
                        <ul class="collapse submenu list-unstyled" id="works" data-bs-parent="#accordionExample">
                            <li>
                                <a href="./app-works-grid.php"> Grid </a>
                            </li>
                            <li>
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

                    <li class="menu active">
                        <a href="#users" data-bs-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
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
                        <ul class="collapse submenu list-unstyled show" id="users" data-bs-parent="#accordionExample">
                            <li>
                                <a href="./user-profile.php"> Profile </a>
                            </li>
                            <li class="active">
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
                                <li class="breadcrumb-item"><a href="#">Users</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Account Settings</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- /BREADCRUMB -->

                    <div class="account-settings-container layout-top-spacing">

                        <div class="account-content">
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <h2>Settings</h2>

                                    <ul class="nav nav-pills" id="animateLine" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="animated-underline-home-tab" data-bs-toggle="tab" href="#animated-underline-home" role="tab" aria-controls="animated-underline-home" aria-selected="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                                </svg> Home</button>
                                        </li>
                                        <!--
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="animated-underline-profile-tab" data-bs-toggle="tab" href="#animated-underline-profile" role="tab" aria-controls="animated-underline-profile" aria-selected="false" tabindex="-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign">
                                                    <line x1="12" y1="1" x2="12" y2="23"></line>
                                                    <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                                </svg> Payment Details</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="animated-underline-preferences-tab" data-bs-toggle="tab" href="#animated-underline-preferences" role="tab" aria-controls="animated-underline-preferences" aria-selected="false" tabindex="-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                    <circle cx="12" cy="7" r="4"></circle>
                                                </svg> Preferences</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="animated-underline-contact-tab" data-bs-toggle="tab" href="#animated-underline-contact" role="tab" aria-controls="animated-underline-contact" aria-selected="false" tabindex="-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone">
                                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                                </svg> Danger Zone</button>
                                        </li>
                                        -->
                                    </ul>
                                </div>
                            </div>

                            <form action="user-account-settings.php" method="POST">
                                <div class="tab-content" id="animateLineContent-4">
                                    <div class="tab-pane fade show active" id="animated-underline-home" role="tabpanel" aria-labelledby="animated-underline-home-tab">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                                <form class="section general-info">
                                                    <div class="info">
                                                        <h4 class="" style="margin-bottom: 20px;">General Information</h4>
                                                        <div class="row">
                                                            <div class="col-lg-11 mx-auto">
                                                                <div class="row">
                                                                    <div class="col-xl-12 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                                        <div class="form">
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label for="username">Username</label>
                                                                                        <input type="text" class="form-control mb-3" id="username" name="username" value="<?php echo $editDataContact['username'] ?>">
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label for="profession">Profession</label>
                                                                                        <input type="text" class="form-control mb-3" id="profession" name="profession" placeholder="Designer" value="<?php echo $editDataContact['profession'] ?>">
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label for="searchCountry">Country</label>
                                                                                        <input type="text" id="searchCountry" name="country" class="form-control mb-3" value="<?php echo $editDataContact['country'] ?>">
                                                                                        <div id="filteredCountries" style="display: none; max-height: 200px; overflow-y: auto;">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label for="city">City</label>
                                                                                        <input type="text" class="form-control mb-3" id="city" name="city" placeholder="Address" value="<?php echo $editDataContact['city'] ?>">
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label for="address">Address</label>
                                                                                        <input type="text" class="form-control mb-3" id="address" name="address" placeholder="Address" value="<?php echo $editDataContact['address'] ?>">
                                                                                    </div>
                                                                                </div>

                                                                                <div class=" col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label for="address_iframe">Address Iframe</label>
                                                                                        <input type="text" class="form-control mb-3" name="address_iframe" id="address_iframe" placeholder="Location" value="<?php echo $editDataContact['address_iframe'] ?>">
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label for="phone">Phone</label>
                                                                                        <input type="text" class="form-control mb-3" id="phone" name="phone" placeholder="Write your phone number here" value="<?php echo $editDataContact['phone'] ?>">
                                                                                    </div>
                                                                                </div>

                                                                                <div class=" col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label for="email">Email</label>
                                                                                        <input type="text" class="form-control mb-3" id="email" name="email" placeholder="Write your email here" value="<?php echo $editDataContact['email'] ?>">
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label for="website_url">Website</label>
                                                                                        <input type="text" class="form-control mb-3" id="website_url" name="website_url" placeholder="Enter URL" value="<?php echo $editDataContact['website_url'] ?>">
                                                                                    </div>
                                                                                </div>


                                                                                <div class="col-md-12 mt-1">
                                                                                    <div class="form-group text-end">
                                                                                        <button class="btn btn-secondary" type="submit" name="contact-update">Save</button>
                                                                                    </div>
                                                                                </div>

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="animated-underline-profile" role="tabpanel" aria-labelledby="animated-underline-profile-tab">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-12 col-md-12 layout-spacing">
                                                <div class="section general-info payment-info">
                                                    <div class="info">
                                                        <h6 class="">Billing Address</h6>
                                                        <p>Changes to your <span class="text-success">Billing</span> information will take effect starting with scheduled payment and will be refelected on your next invoice.</p>

                                                        <div class="list-group mt-4">
                                                            <label class="list-group-item">
                                                                <div class="d-flex w-100">
                                                                    <div class="billing-radio me-2">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio" name="billingAddress" id="billingAddress1" checked>
                                                                        </div>
                                                                    </div>
                                                                    <div class="billing-content">
                                                                        <div class="fw-bold">Address #1</div>
                                                                        <p>2249 Caynor Circle, New Brunswick, New Jersey</p>
                                                                    </div>
                                                                    <div class="billing-edit align-self-center ms-auto">
                                                                        <button class="btn btn-dark">Edit</button>
                                                                    </div>
                                                                </div>
                                                            </label>

                                                            <label class="list-group-item">
                                                                <div class="d-flex w-100">
                                                                    <div class="billing-radio me-2">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio" name="billingAddress" id="billingAddress2">
                                                                        </div>
                                                                    </div>
                                                                    <div class="billing-content">
                                                                        <div class="fw-bold">Address #2</div>
                                                                        <p>4262 Leverton Cove Road, Springfield, Massachusetts</p>
                                                                    </div>
                                                                    <div class="billing-edit align-self-center ms-auto">
                                                                        <button class="btn btn-dark">Edit</button>
                                                                    </div>
                                                                </div>
                                                            </label>
                                                            <label class="list-group-item">
                                                                <div class="d-flex w-100">
                                                                    <div class="billing-radio me-2">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio" name="billingAddress" id="billingAddress3">
                                                                        </div>
                                                                    </div>
                                                                    <div class="billing-content">
                                                                        <div class="fw-bold">Address #3</div>
                                                                        <p>2692 Berkshire Circle, Knoxville, Tennessee</p>
                                                                    </div>
                                                                    <div class="billing-edit align-self-center ms-auto">
                                                                        <button class="btn btn-dark">Edit</button>
                                                                    </div>
                                                                </div>
                                                            </label>
                                                        </div>

                                                        <button class="btn btn-secondary mt-4 add-address">Add Address</button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-6 col-lg-12 col-md-12 layout-spacing">
                                                <div class="section general-info payment-info">
                                                    <div class="info">
                                                        <h6 class="">Payment Method</h6>
                                                        <p>Changes to your <span class="text-success">Payment Method</span> information will take effect starting with scheduled payment and will be refelected on your next invoice.</p>

                                                        <div class="list-group mt-4">

                                                            <label class="list-group-item">
                                                                <div class="d-flex w-100">
                                                                    <div class="billing-radio me-2">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio" name="paymentMethod" id="paymentMethod1">
                                                                        </div>
                                                                    </div>
                                                                    <div class="payment-card">
                                                                        <img src="../src/assets/img/card-mastercard.svg" class="align-self-center me-3" alt="americanexpress">
                                                                    </div>
                                                                    <div class="billing-content">
                                                                        <div class="fw-bold">Mastercard</div>
                                                                        <p>XXXX XXXX XXXX 9704</p>
                                                                    </div>
                                                                    <div class="billing-edit align-self-center ms-auto">
                                                                        <button class="btn btn-dark">Edit</button>
                                                                    </div>
                                                                </div>
                                                            </label>
                                                            <label class="list-group-item">
                                                                <div class="d-flex w-100">
                                                                    <div class="billing-radio me-2">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio" name="paymentMethod" id="paymentMethod2" checked>
                                                                        </div>
                                                                    </div>
                                                                    <div class="payment-card">
                                                                        <img src="../src/assets/img/card-americanexpress.svg" class="align-self-center me-3" alt="americanexpress">
                                                                    </div>
                                                                    <div class="billing-content">
                                                                        <div class="fw-bold">American Express</div>
                                                                        <p>XXXX XXXX XXXX 310</p>
                                                                    </div>
                                                                    <div class="billing-edit align-self-center ms-auto">
                                                                        <button class="btn btn-dark">Edit</button>
                                                                    </div>
                                                                </div>
                                                            </label>
                                                            <label class="list-group-item">
                                                                <div class="d-flex w-100">
                                                                    <div class="billing-radio me-2">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio" name="paymentMethod" id="paymentMethod3">
                                                                        </div>
                                                                    </div>
                                                                    <div class="payment-card">
                                                                        <img src="../src/assets/img/card-visa.svg" class="align-self-center me-3" alt="americanexpress">
                                                                    </div>
                                                                    <div class="billing-content">
                                                                        <div class="fw-bold">Visa</div>
                                                                        <p>XXXX XXXX XXXX 5264</p>
                                                                    </div>
                                                                    <div class="billing-edit align-self-center ms-auto">
                                                                        <button class="btn btn-dark">Edit</button>
                                                                    </div>
                                                                </div>
                                                            </label>
                                                        </div>

                                                        <button class="btn btn-secondary mt-4 add-payment">Add Payment Method</button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-6 col-lg-12 col-md-12 layout-spacing">
                                                <div class="section general-info payment-info">
                                                    <div class="info">
                                                        <h6 class="">Add Billing Address</h6>
                                                        <p>Changes your New <span class="text-success">Billing</span> Information.</p>

                                                        <div class="row mt-4">
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Name</label>
                                                                    <input type="text" class="form-control add-billing-address-input">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Email</label>
                                                                    <input type="email" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Address</label>
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mb-3">
                                                                    <label class="form-label">City</label>
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Country</label>
                                                                    <select class="form-select">
                                                                        <option selected="">Choose...</option>
                                                                        <option value="united-states">United States</option>
                                                                        <option value="brazil">Brazil</option>
                                                                        <option value="indonesia">Indonesia</option>
                                                                        <option value="turkey">Turkey</option>
                                                                        <option value="russia">Russia</option>
                                                                        <option value="india">India</option>
                                                                        <option value="germany">Germany</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mb-3">
                                                                    <label class="form-label">ZIP</label>
                                                                    <input type="tel" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <button class="btn btn-primary mt-4">Add</button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-6 col-lg-12 col-md-12 layout-spacing">
                                                <div class="section general-info payment-info">
                                                    <div class="info">
                                                        <h6 class="">Add Payment Method</h6>
                                                        <p>Changes your New <span class="text-success">Payment Method</span> Information.</p>

                                                        <div class="row mt-4">
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Card Brand</label>
                                                                    <div class="invoice-action-currency">
                                                                        <div class="dropdown selectable-dropdown cardName-select">
                                                                            <a id="cardBrandDropdown" href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../src/assets/img/card-mastercard.svg" class="flag-width" alt="flag"> <span class="selectable-text">Mastercard</span> <span class="selectable-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                                                                        <polyline points="6 9 12 15 18 9"></polyline>
                                                                                    </svg></span></a>
                                                                            <div class="dropdown-menu" aria-labelledby="cardBrandDropdown">
                                                                                <a class="dropdown-item" data-img-value="../src/assets/img/card-mastercard.svg" data-value="GBP - British Pound" href="javascript:void(0);"><img src="../src/assets/img/card-mastercard.svg" class="flag-width" alt="flag"> Mastercard</a>
                                                                                <a class="dropdown-item" data-img-value="../src/assets/img/card-americanexpress.svg" data-value="IDR - Indonesian Rupiah" href="javascript:void(0);"><img src="../src/assets/img/card-americanexpress.svg" class="flag-width" alt="flag"> American Express</a>
                                                                                <a class="dropdown-item" data-img-value="../src/assets/img/card-visa.svg" data-value="USD - US Dollar" href="javascript:void(0);"><img src="../src/assets/img/card-visa.svg" class="flag-width" alt="flag"> Visa</a>
                                                                                <a class="dropdown-item" data-img-value="../src/assets/img/card-discover.svg" data-value="INR - Indian Rupee" href="javascript:void(0);"><img src="../src/assets/img/card-discover.svg" class="flag-width" alt="flag"> Discover</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Card Number</label>
                                                                    <input type="text" class="form-control add-payment-method-input">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Holder Name</label>
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">CVV/CVV2</label>
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Card Expiry</label>
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <button class="btn btn-primary mt-4">Add</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="animated-underline-preferences" role="tabpanel" aria-labelledby="animated-underline-preferences-tab">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-12 col-md-12 layout-spacing">
                                                <div class="section general-info">
                                                    <div class="info">
                                                        <h6 class="">Choose Theme</h6>
                                                        <div class="d-sm-flex justify-content-around">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                    <img class="ms-3" width="100" height="68" alt="settings-dark" src="../src/assets/img/settings-light.svg">
                                                                </label>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                                <label class="form-check-label" for="flexRadioDefault2">
                                                                    <img class="ms-3" width="100" height="68" alt="settings-light" src="../src/assets/img/settings-dark.svg">
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-6 col-lg-12 col-md-12 layout-spacing">
                                                <div class="section general-info">
                                                    <div class="info">
                                                        <h6 class="">Activity data</h6>
                                                        <p>Download your Summary, Task and Payment History Data</p>
                                                        <div class="form-group mt-4">
                                                            <button class="btn btn-primary">Download Data</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-4 col-lg-12 col-md-12 layout-spacing">
                                                <div class="section general-info">
                                                    <div class="info">
                                                        <h6 class="">Public Profile</h6>
                                                        <p>Your <span class="text-success">Profile</span> will be visible to anyone on the network.</p>
                                                        <div class="form-group mt-4">
                                                            <div class="switch form-switch-custom switch-inline form-switch-secondary mt-1">
                                                                <input class="switch-input" type="checkbox" role="switch" id="publicProfile" checked>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-4 col-lg-12 col-md-12 layout-spacing">
                                                <div class="section general-info">
                                                    <div class="info">
                                                        <h6 class="">Show my email</h6>
                                                        <p>Your <span class="text-success">Email</span> will be visible to anyone on the network.</p>
                                                        <div class="form-group mt-4">
                                                            <div class="switch form-switch-custom switch-inline form-switch-secondary mt-1">
                                                                <input class="switch-input" type="checkbox" role="switch" id="showMyEmail">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-4 col-lg-12 col-md-12 layout-spacing">
                                                <div class="section general-info">
                                                    <div class="info">
                                                        <h6 class="">Enable keyboard shortcuts</h6>
                                                        <p>When enabled, press <code class="text-success">ctrl</code> for help</p>
                                                        <div class="form-group mt-4">
                                                            <div class="switch form-switch-custom switch-inline form-switch-secondary mt-1">
                                                                <input class="switch-input" type="checkbox" role="switch" id="EnableKeyboardShortcut">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-4 col-lg-12 col-md-12 layout-spacing">
                                                <div class="section general-info">
                                                    <div class="info">
                                                        <h6 class="">Hide left navigation</h6>
                                                        <p>Sidebar will be <span class="text-success">hidden</span> by default</p>
                                                        <div class="form-group mt-4">
                                                            <div class="switch form-switch-custom switch-inline form-switch-secondary mt-1">
                                                                <input class="switch-input" type="checkbox" role="switch" id="hideLeftNavigation">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-4 col-lg-12 col-md-12 layout-spacing">
                                                <div class="section general-info">
                                                    <div class="info">
                                                        <h6 class="">Advertisements</h6>
                                                        <p>Display <span class="text-success">Ads</span> on your dashboard</p>
                                                        <div class="form-group mt-4">
                                                            <div class="switch form-switch-custom switch-inline form-switch-secondary mt-1">
                                                                <input class="switch-input" type="checkbox" role="switch" id="advertisements">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-4 col-lg-12 col-md-12 layout-spacing">
                                                <div class="section general-info">
                                                    <div class="info">
                                                        <h6 class="">Social Profile</h6>
                                                        <p>Enable your <span class="text-success">social</span> profiles on this network</p>
                                                        <div class="form-group mt-4">
                                                            <div class="switch form-switch-custom switch-inline form-switch-secondary mt-1">
                                                                <input class="switch-input" type="checkbox" role="switch" id="socialprofile" checked>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="animated-underline-contact" role="tabpanel" aria-labelledby="animated-underline-contact-tab">
                                        <div class="alert alert-arrow-right alert-icon-right alert-light-warning alert-dismissible fade show mb-4" role="alert">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <line x1="12" y1="8" x2="12" y2="12"></line>
                                                <line x1="12" y1="16" x2="12" y2="16"></line>
                                            </svg>
                                            <strong>Warning!</strong> Please proceed with caution. For any assistance - <a href="javascript:void(0);">Contact Us</a>
                                        </div>

                                        <div class="row">
                                            <div class="col-xl-4 col-lg-12 col-md-12 layout-spacing">
                                                <div class="section general-info">
                                                    <div class="info">
                                                        <h6 class="">Purge Cache</h6>
                                                        <p>Remove the active resource from the cache without waiting for the predetermined cache expiry time.</p>
                                                        <div class="form-group mt-4">
                                                            <button class="btn btn-secondary btn-clear-purge">Clear</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-4 col-lg-12 col-md-12 layout-spacing">
                                                <div class="section general-info">
                                                    <div class="info">
                                                        <h6 class="">Deactivate Account</h6>
                                                        <p>You will not be able to receive messages, notifications for up to 24 hours.</p>
                                                        <div class="form-group mt-4">
                                                            <div class="switch form-switch-custom switch-inline form-switch-success mt-1">
                                                                <input class="switch-input" type="checkbox" role="switch" id="socialformprofile-custom-switch-success">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-4 col-lg-12 col-md-12 layout-spacing">
                                                <div class="section general-info">
                                                    <div class="info">
                                                        <h6 class="">Delete Account</h6>
                                                        <p>Once you delete the account, there is no going back. Please be certain.</p>
                                                        <div class="form-group mt-4">
                                                            <button class="btn btn-danger btn-delete-account">Delete my account</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </form>

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

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="../src/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../src/plugins/src/mousetrap/mousetrap.min.js"></script>
    <script src="../src/plugins/src/waves/waves.min.js"></script>
    <script src="../layouts/modern-light-menu/app.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <script src="../src/plugins/src/filepond/filepond.min.js"></script>
    <script src="../src/plugins/src/filepond/FilePondPluginFileValidateType.min.js"></script>
    <script src="../src/plugins/src/filepond/FilePondPluginImageExifOrientation.min.js"></script>
    <script src="../src/plugins/src/filepond/FilePondPluginImagePreview.min.js"></script>
    <script src="../src/plugins/src/filepond/FilePondPluginImageCrop.min.js"></script>
    <script src="../src/plugins/src/filepond/FilePondPluginImageResize.min.js"></script>
    <script src="../src/plugins/src/filepond/FilePondPluginImageTransform.min.js"></script>
    <script src="../src/plugins/src/filepond/filepondPluginFileValidateSize.min.js"></script>
    <script src="../src/plugins/src/notification/snackbar/snackbar.min.js"></script>
    <script src="../src/plugins/src/sweetalerts2/sweetalerts2.min.js"></script>
    <script src="../src/assets/js/users/account-settings.js"></script>
    <script src="../src/assets/js/apps/country.js"> </script>
    <!--  END CUSTOM SCRIPTS FILE  -->
</body>

</html>