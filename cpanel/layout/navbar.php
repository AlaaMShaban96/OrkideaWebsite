
<!doctype html>
<!-- 
* Bootstrap Simple Admin Template
* Email: heyalexluna@gmail.com
* Version: 1.1
* Author: Alexis Luna
* Copyright 2019 Alexis Luna
* Website: https://github.com/mralexisluna/bootstrap-simple-admin-template
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Users | Start Bootstrap</title>

    <link href="/Projects/OrkideaWebsite/cpanel/assets/vendor/bootstrap4/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Projects/OrkideaWebsite/cpanel/assets/vendor/DataTables/datatables.min.css" rel="stylesheet">
    <link href="/Projects/OrkideaWebsite/cpanel/assets/css/master.css" rel="stylesheet">
</head>

<body>
<div class="wrapper">

    <nav id="sidebar" class="active">
            <div class="sidebar-header">
                <img src="assets/img/bootstraper-logo.png" alt="bootraper logo" class="app-logo">
            </div>
            <ul class="list-unstyled components">
                <li>
                    <a href="/Projects/OrkideaWebsite/cpanel/dashboard.php"><i class="fas fa-home"></i> Dashboard</a>
                </li>
                <li>
                    <a href="/Projects/OrkideaWebsite/cpanel/forms.php"><i class="fas fa-file-alt"></i> Forms</a>
                </li>
                <li>
                    <a href="/Projects/OrkideaWebsite/cpanel/tables.php"><i class="fas fa-table"></i> Tables</a>
                </li>
                <li>
                    <a href="/Projects/OrkideaWebsite/cpanel/charts.php"><i class="fas fa-chart-bar"></i> Charts</a>
                </li>
                <li>
                    <a href="/Projects/OrkideaWebsite/cpanel/icons.php"><i class="fas fa-icons"></i> Icons</a>
                </li>
                <li>
                    <a href="#uielementsmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-layer-group"></i> UI Elements</a>
                    <ul class="collapse list-unstyled" id="uielementsmenu">
                        <li>
                            <a href="/Projects/OrkideaWebsite/cpanel/ui-buttons.php"> Buttons</a>
                        </li>
                        <li>
                            <a href="/Projects/OrkideaWebsite/cpanel/ui-badges.php"> Badges</a>
                        </li>
                        <li>
                            <a href="/Projects/OrkideaWebsite/cpanel/ui-cards.php"> Cards</a>
                        </li>
                        <li>
                            <a href="/Projects/OrkideaWebsite/cpanel/ui-alerts.php"> Alerts</a>
                        </li>
                        <li>
                            <a href="/Projects/OrkideaWebsite/cpanel/ui-tabs.php"> Tabs</a>
                        </li>
                        <li>
                            <a href="/Projects/OrkideaWebsite/cpanel/ui-date-time-picker.php"> DateTime Picker</a>
                        </li>
                        <li>
                            <a href="/Projects/OrkideaWebsite/cpanel/ui-calendar.php"> Calendar</a>
                        </li>
                        <li>
                            <a href="/Projects/OrkideaWebsite/cpanel/ui-content-editor.php"> Content Editor</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#authmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-user-shield"></i> Authentication</a>
                    <ul class="collapse list-unstyled" id="authmenu">
                        <li>
                            <a href="/Projects/OrkideaWebsite/cpanel/login.php"><i class="fas fa-lock"></i> Login</a>
                        </li>
                        <li>
                            <a href="/Projects/OrkideaWebsite/cpanel/signup.php"><i class="fas fa-user-plus"></i> Signup</a>
                        </li>
                        <li>
                            <a href="/Projects/OrkideaWebsite/cpanel/forgot-password.php"><i class="fas fa-user-lock"></i> Forgot password</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pagesmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-copy"></i> Pages</a>
                    <ul class="collapse list-unstyled" id="pagesmenu">
                        <li>
                            <a href="blank.php"><i class="fas fa-file"></i> Blank page</a>
                        </li>
                        <li>
                            <a href="404.php"><i class="fas fa-info-circle"></i> 404 Error page</a>
                        </li>
                        <li>
                            <a href="500.php"><i class="fas fa-info-circle"></i> 500 Error page</a>
                        </li>
                    </ul>
                </li>
                <li>
                <a href="/Projects/OrkideaWebsite/cpanel/php/controller/UserController.php?showUser="><i class="fas fa-user-friends"></i>Users</a>
                </li>
                <li>
                <a href="/Projects/OrkideaWebsite/cpanel/php/controller/DrogController.php?showDrogs="><i class="fas fa-user-friends"></i>Drogs</a>
                </li>
                <li>
                    <a href="/Projects/OrkideaWebsite/cpanel/php/controller/CompanyController.php?showCompany="><i class="fas fa-user-friends"></i>Companies</a>
                </li>
                <li>
                    <a href="settings.php"><i class="fas fa-cog"></i>Settings</a>
                </li>
            </ul>
        </nav>

        <div id="body" class="active">
            <nav class="navbar navbar-expand-lg navbar-primary bg-primary">
                <button type="button" id="sidebarCollapse" class="btn btn-outline-light default-light-menu"><i class="fas fa-bars"></i><span></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <div class="nav-dropdown">
                                <a href="/Projects/OrkideaWebsite/cpanel/" class="nav-item nav-link dropdown-toggle" data-toggle="dropdown"><i class="fas fa-link"></i> <span>Quick Links</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i></a>
                                <div class="dropdown-menu dropdown-menu-right nav-link-menu">
                                    <ul class="nav-list">
                                        <li><a href="/Projects/OrkideaWebsite/cpanel/" class="dropdown-item"><i class="fas fa-list"></i> Access Logs</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="/Projects/OrkideaWebsite/cpanel/" class="dropdown-item"><i class="fas fa-database"></i> Back ups</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="/Projects/OrkideaWebsite/cpanel/" class="dropdown-item"><i class="fas fa-cloud-download-alt"></i> Updates</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="/Projects/OrkideaWebsite/cpanel/" class="dropdown-item"><i class="fas fa-user-shield"></i> Roles</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <div class="nav-dropdown">
                                <a href="/Projects/OrkideaWebsite/cpanel/" class="nav-item nav-link dropdown-toggle" data-toggle="dropdown"><i class="fas fa-user"></i> <span>John Doe</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i></a>
                                <div class="dropdown-menu dropdown-menu-right nav-link-menu">
                                    <ul class="nav-list">
                                        <li><a href="/Projects/OrkideaWebsite/cpanel/" class="dropdown-item"><i class="fas fa-address-card"></i> Profile</a></li>
                                        <li><a href="/Projects/OrkideaWebsite/cpanel/" class="dropdown-item"><i class="fas fa-envelope"></i> Messages</a></li>
                                        <li><a href="/Projects/OrkideaWebsite/cpanel/" class="dropdown-item"><i class="fas fa-cog"></i> Settings</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="/Projects/OrkideaWebsite/cpanel/" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>