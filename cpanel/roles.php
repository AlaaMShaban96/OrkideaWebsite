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
    <title>User Roles | Start Bootstrap</title>

    <link href="assets/vendor/bootstrap4/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/DataTables/datatables.min.css" rel="stylesheet">
    <link href="assets/css/master.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
    <nav id="sidebar" class="active">
            <div class="sidebar-header">
                <img src="assets/img/bootstraper-logo.png" alt="bootraper logo" class="app-logo">
            </div>
            <ul class="list-unstyled components">
                <li>
                    <a href="dashboard.php"><i class="fas fa-home"></i> Dashboard</a>
                </li>
                <li>
                    <a href="forms.php"><i class="fas fa-file-alt"></i> Forms</a>
                </li>
                <li>
                    <a href="tables.php"><i class="fas fa-table"></i> Tables</a>
                </li>
                <li>
                    <a href="charts.php"><i class="fas fa-chart-bar"></i> Charts</a>
                </li>
                <li>
                    <a href="icons.php"><i class="fas fa-icons"></i> Icons</a>
                </li>
                <li>
                    <a href="#uielementsmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-layer-group"></i> UI Elements</a>
                    <ul class="collapse list-unstyled" id="uielementsmenu">
                        <li>
                            <a href="ui-buttons.php"> Buttons</a>
                        </li>
                        <li>
                            <a href="ui-badges.php"> Badges</a>
                        </li>
                        <li>
                            <a href="ui-cards.php"> Cards</a>
                        </li>
                        <li>
                            <a href="ui-alerts.php"> Alerts</a>
                        </li>
                        <li>
                            <a href="ui-tabs.php"> Tabs</a>
                        </li>
                        <li>
                            <a href="ui-date-time-picker.php"> DateTime Picker</a>
                        </li>
                        <li>
                            <a href="ui-calendar.php"> Calendar</a>
                        </li>
                        <li>
                            <a href="ui-content-editor.php"> Content Editor</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#authmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-user-shield"></i> Authentication</a>
                    <ul class="collapse list-unstyled" id="authmenu">
                        <li>
                            <a href="login.php"><i class="fas fa-lock"></i> Login</a>
                        </li>
                        <li>
                            <a href="signup.php"><i class="fas fa-user-plus"></i> Signup</a>
                        </li>
                        <li>
                            <a href="forgot-password.php"><i class="fas fa-user-lock"></i> Forgot password</a>
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
                    <a href="users.php"><i class="fas fa-user-friends"></i>Users</a>
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
                                <a href="" class="nav-item nav-link dropdown-toggle" data-toggle="dropdown"><i class="fas fa-link"></i> <span>Quick Links</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i></a>
                                <div class="dropdown-menu dropdown-menu-right nav-link-menu">
                                    <ul class="nav-list">
                                        <li><a href="" class="dropdown-item"><i class="fas fa-list"></i> Access Logs</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-database"></i> Back ups</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-cloud-download-alt"></i> Updates</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-user-shield"></i> Roles</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <div class="nav-dropdown">
                                <a href="" class="nav-item nav-link dropdown-toggle" data-toggle="dropdown"><i class="fas fa-user"></i> <span>John Doe</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i></a>
                                <div class="dropdown-menu dropdown-menu-right nav-link-menu">
                                    <ul class="nav-list">
                                        <li><a href="" class="dropdown-item"><i class="fas fa-address-card"></i> Profile</a></li>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-envelope"></i> Messages</a></li>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-cog"></i> Settings</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="content">
                <div class="container-fluid">
                    <div class="page-title">
                        <h3>User Roles
                            <a href="roles.html" class="btn btn-sm btn-outline-primary float-right"><i class="fas fa-plus-circle"></i> Add</a>
                        </h3>
                    </div>
                    <div class="box box-primary">
                        <div class="box-body">
                            <table width="100%" class="table table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Role Name</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Administrator</td>
                                        <td>Active</td>
                                        <td class="text-right">
                                            <a href="permissions.html" class="btn btn-outline-secondary btn-rounded"><i class="fas fa-toggle-on"></i></a>
                                            <a href="" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                            <a href="" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Manager</td>
                                        <td>Active</td>
                                        <td class="text-right">
                                            <a href="permissions.html" class="btn btn-outline-secondary btn-rounded"><i class="fas fa-toggle-on"></i></a>
                                            <a href="" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                            <a href="" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Writer</td>
                                        <td>Active</td>
                                        <td class="text-right">
                                            <a href="permissions.html" class="btn btn-outline-secondary btn-rounded"><i class="fas fa-toggle-on"></i></a>
                                            <a href="" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                            <a href="" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Editor</td>
                                        <td>Disabled</td>
                                        <td class="text-right">
                                            <a href="permissions.html" class="btn btn-outline-secondary btn-rounded"><i class="fas fa-toggle-on"></i></a>
                                            <a href="" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                            <a href="" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Audit</td>
                                        <td>Active</td>
                                        <td class="text-right">
                                            <a href="permissions.html" class="btn btn-outline-secondary btn-rounded"><i class="fas fa-toggle-on"></i></a>
                                            <a href="" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                            <a href="" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Contributor</td>
                                        <td>Active</td>
                                        <td class="text-right">
                                            <a href="permissions.html" class="btn btn-outline-secondary btn-rounded"><i class="fas fa-toggle-on"></i></a>
                                            <a href="" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                            <a href="" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Author</td>
                                        <td>Active</td>
                                        <td class="text-right">
                                            <a href="permissions.html" class="btn btn-outline-secondary btn-rounded"><i class="fas fa-toggle-on"></i></a>
                                            <a href="" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                            <a href="" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="assets/vendor/jquery3/jquery-3.4.1.min.js"></script>
    <script src="assets/vendor/bootstrap4/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/DataTables/datatables.min.js"></script>
    <script src="assets/vendor/fontawesome5/js/solid.min.js"></script>
    <script src="assets/vendor/fontawesome5/js/fontawesome.min.js"></script>
    <script src="assets/js/initiate-datatables.js"></script>
    <script src="assets/js/script.js"></script>

</body>

</html>